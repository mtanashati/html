               if ($upper_data == 'UNION') {
                    $subresult['queryflags']['union'] = 1;
                }

                if ($upper_data == 'JOIN') {
                    $subresult['queryflags']['join'] = 1;
                }

                if ($upper_data == 'OFFSET') {
                    $subresult['queryflags']['offset'] = 1;
                }

                // if this is a real SELECT...FROM
                if ($upper_data == 'FROM' && isset($subresult['queryflags']['select_from']) && $subresult['queryflags']['select_from'] == 1) {
                    $in_from = TRUE;
                    $from_clause = '';
                    $in_select_expr = FALSE;
                }


                // (we could have less resetting of variables to FALSE
                // if we trust that the query respects the standard
                // MySQL order for clauses)

                // we use $seen_group and $seen_order because we are looking
                // for the BY
                if ($upper_data == 'GROUP') {
                    $seen_group = TRUE;
                    $seen_order = FALSE;
                    $in_having = FALSE;
                    $in_order_by = FALSE;
                    $in_where = FALSE;
                    $in_select_expr = FALSE;
                    $in_from = FALSE;
                }
                if ($upper_data == 'ORDER' && !$in_group_concat) {
                    $seen_order = TRUE;
                    $seen_group = FALSE;
                    $in_having = FALSE;
                    $in_group_by = FALSE;
                    $in_where = FALSE;
                    $in_select_expr = FALSE;
                    $in_from = FALSE;
                }
                if ($upper_data == 'HAVING') {
                    $in_having = TRUE;
                    $having_clause = '';
                    $seen_group = FALSE;
                    $seen_order = FALSE;
                    $in_group_by = FALSE;
                    $in_order_by = FALSE;
                    $in_where = FALSE;
                    $in_select_expr = FALSE;
                    $in_from = FALSE;
                }

                if ($upper_data == 'WHERE') {
                    $in_where = TRUE;
                    $where_clause = '';
                    $where_clause_identifiers = array();
                    $seen_group = FALSE;
                    $seen_order = FALSE;
                    $in_group_by = FALSE;
                    $in_order_by = FALSE;
                    $in_having = FALSE;
                    $in_select_expr = FALSE;
                    $in_from = FALSE;
                }

                if ($upper_data == 'BY') {
                    if ($seen_group) {
                        $in_group_by = TRUE;
                        $group_by_clause = '';
                    }
                    if ($seen_order) {
                        $seen_order_by = TRUE;
                        // here we assume that the ORDER BY keywords took
                        // exactly 8 characters
                        $unsorted_query = substr($arr['raw'], 0, $arr[$i]['pos'] - 8);
                        $in_order_by = TRUE;
                        $order_by_clause = '';
                    }
                }

                // if we find one of the words that could end the clause
                if (PMA_STR_binarySearchInArr($upper_data, $words_ending_clauses, $words_ending_clauses_cnt)) {

                    $in_group_by = FALSE;
                    $in_order_by = FALSE;
                    $in_having   = FALSE;
                    $in_where    = FALSE;
                    $in_select_expr = FALSE;
                    $in_from = FALSE;
                }

            } // endif (reservedWord)


            // do not add a space after a function name
            /**
             * @todo can we combine loop 2 and loop 1? some code is repeated here...
             */

            $sep = ' ';
            if ($arr[$i]['type'] == 'alpha_functionName') {
                $sep='';
                $upper_data = strtoupper($arr[$i]['data']);
                if ($upper_data =='GROUP_CONCAT') {
                    $in_group_concat = TRUE;
                    $number_of_brackets_in_group_concat = 0;
                }
            }

            if ($arr[$i]['type'] == 'punct_bracket_open_round') {
                if ($in_group_concat) {
                    $number_of_brackets_in_group_concat++;
                }
            }
            if ($arr[$i]['type'] == 'punct_bracket_close_round') {
                if ($in_group_concat) {
                    $number_of_brackets_in_group_concat--;
                    if ($number_of_brackets_in_group_concat == 0) {
                        $in_group_concat = FALSE;
                    }
                }
            }

            // do not add a space after an identifier if followed by a dot
            if ($arr[$i]['type'] == 'alpha_identifier' && $i < $size - 1 && $arr[$i + 1]['data'] == '.') {
                $sep = '';
            }

            // do not add a space after a dot if followed by an identifier
            if ($arr[$i]['data'] == '.' && $i < $size - 1 && $arr[$i + 1]['type'] == 'alpha_identifier') {
                $sep = '';
            }

            if ($in_select_expr && $upper_data != 'SELECT' && $upper_data != 'DISTINCT') {
                $select_expr_clause .= $arr[$i]['data'] . $sep;
            }
            if ($in_from && $upper_data != 'FROM') {
                $from_clause .= $arr[$i]['data'] . $sep;
            }
            if ($in_group_by && $upper_data != 'GROUP' && $upper_data != 'BY') {
                $group_by_clause .= $arr[$i]['data'] . $sep;
            }
            if ($in_order_by && $upper_data != 'ORDER' && $upper_data != 'BY') {
                // add a space only before ASC or DESC
                // not around the dot between dbname and tablename
                if ($arr[$i]['type'] == 'alpha_reservedWord') {
                    $order_by_clause .= $sep;
                }
                $order_by_clause .= $arr[$i]['data'];
            }
            if ($in_having && $upper_data != 'HAVING') {
                $having_clause .= $arr[$i]['data'] . $sep;
            }
            if ($in_where && $upper_data != 'WHERE') {
                $where_clause .= $arr[$i]['data'] . $sep;

                if (($arr[$i]['type'] == 'quote_backtick')
                 || ($arr[$i]['type'] == 'alpha_identifier')) {
                    $where_clause_identifiers[] = $arr[$i]['data'];
                }
            }

            // to grab the rest of the query after the ORDER BY clause
            if (isset($subresult['queryflags']['select_from'])
             && $subresult['queryflags']['select_from'] == 1
             && ! $in_order_by
             && $seen_order_by
             && $upper_data != 'BY') {
                $unsorted_query .= $arr[$i]['data'];
                if ($arr[$i]['type'] != 'punct_bracket_open_round'
                 && $arr[$i]['type'] != 'punct_bracket_close_round'
                 && $arr[$i]['type'] != 'punct') {
                    $unsorted_query .= $sep;
                }
            }
            
            if ($in_limit) {
                if ($upper_data == 'OFFSET') {
                    $limit_clause .= $sep;
                }
		        $limit_clause .= $arr[$i]['data'];
                if ($upper_data == 'LIMIT' || $upper_data == 'OFFSET') {
                    $limit_clause .= $sep;
                }
            }
            if ($after_limit && $seen_limit) { 
                $section_after_limit .= $arr[$i]['data'] . $sep;
            }

            // clear $upper_data for next iteration
            $upper_data='';

        } // end for $i (loop #2)
        if (empty($section_before_limit)) {
            $section_before_limit = $arr['raw'];
        }

        // -----------------------------------------------------
        // loop #3: foreign keys and MySQL 4.1.2+ TIMESTAMP options
        // (for now, check only the first query)
        // (for now, identifiers are assumed to be backquoted)

        // If we find that we are dealing with a CREATE TABLE query,
        // we look for the next punct_bracket_open_round, which
        // introduces the fields list. Then, when we find a
        // quote_backtick, it must be a field, so we put it into
        // the create_table_fields array. Even if this field is
        // not a timestamp, it will be useful when logic has been
        // added for complete field attributes analysis.

        $seen_foreign = FALSE;
        $seen_references = FALSE;
        $seen_constraint = FALSE;
        $foreign_key_number = -1;
        $seen_create_table = FALSE;
        $seen_create = FALSE;
        $in_create_table_fields = FALSE;
        $brackets_level = 0;
        $in_timestamp_options = FALSE;
        $seen_default = FALSE;

        for ($i = 0; $i < $size; $i++) {
        // DEBUG echo "Loop 3 <b>" . $arr[$i]['data'] . "</b> " . $arr[$i]['type'] . "<br />";

            if ($arr[$i]['type'] == 'alpha_reservedWord') {
                $upper_data = strtoupper($arr[$i]['data']);

                if ($upper_data == 'NOT' && $in_timestamp_options) {
                    $create_table_fields[$current_identifier]['timestamp_not_null'] = TRUE;

                }

                if ($upper_data == 'CREATE') {
                    $seen_create = TRUE;
                }

                if ($upper_data == 'TABLE' && $seen_create) {
                    $seen_create_table = TRUE;
                    $create_table_fields = array();
                }

                if ($upper_data == 'CURRENT_TIMESTAMP') {
                    if ($in_timestamp_options) {
                        if ($seen_default) {
                            $create_table_fields[$current_identifier]['default_current_timestamp'] = TRUE;
                        }
                    }
                }

                if ($upper_data == 'CONSTRAINT') {
                    $foreign_key_number++;
                    $seen_foreign = FALSE;
                    $seen_references = FALSE;
                    $seen_constraint = TRUE;
                }
                if ($upper_data == 'FOREIGN') {
                    $seen_foreign = TRUE;
                    $seen_references = FALSE;
                    $seen_constraint = FALSE;
                }
                if ($upper_data == 'REFERENCES') {
                    $seen_foreign = FALSE;
                    $seen_references = TRUE;
                    $seen_constraint = FALSE;
                }


                // Cases covered:

                // [ON DELETE {CASCADE | SET NULL | NO ACTION | RESTRICT}]
                // [ON UPDATE {CASCADE | SET NULL | NO ACTION | RESTRICT}]

                // but we set ['on_delete'] or ['on_cascade'] to
                // CASCADE | SET_NULL | NO_ACTION | RESTRICT

                // ON UPDATE CURRENT_TIMESTAMP

                if ($upper_data == 'ON') {
                    if (isset($arr[$i+1]) && $arr[$i+1]['type'] == 'alpha_reservedWord') {
                        $second_upper_data = strtoupper($arr[$i+1]['data']);
                        if ($second_upper_data == 'DELETE') {
                            $clause = 'on_delete';
                        }
                        if ($second_upper_data == 'UPDATE') {
                            $clause = 'on_update';
                        }
                        if (isset($clause)
                        && ($arr[$i+2]['type'] == 'alpha_reservedWord'

                // ugly workaround because currently, NO is not
                // in the list of reserved words in sqlparser.data
                // (we got a bug report about not being able to use
                // 'no' as an identifier)
                           || ($arr[$i+2]['type'] == 'alpha_identifier'
                              && strtoupper($arr[$i+2]['data'])=='NO'))
                          ) {
                            $third_upper_data = strtoupper($arr[$i+2]['data']);
                            if ($third_upper_data == 'CASCADE'
                            || $third_upper_data == 'RESTRICT') {
                                $value = $third_upper_data;
                            } elseif ($third_upper_data == 'SET'
                              || $third_upper_data == 'NO') {
                                if ($arr[$i+3]['type'] == 'alpha_reservedWord') {
                                    $value = $third_upper_data . '_' . strtoupper($arr[$i+3]['data']);
                                }
                            } elseif ($third_upper_data == 'CURRENT_TIMESTAMP') {
                                if ($clause == 'on_update'
                                && $in_timestamp_options) {
                                    $create_table_fields[$current_identifier]['on_update_current_timestamp'] = TRUE;
                                    $seen_default = FALSE;
                                }

                            } else {
                                $value = '';
                            }
                            if (!empty($value)) {
                                $foreign[$foreign_key_number][$clause] = $value;
                            }
                            unset($clause);
                        } // endif (isset($clause))
                    }
                }

            } // end of reserved words analysis


            if ($arr[$i]['type'] == 'punct_bracket_open_round') {
                $brackets_level++;
                if ($seen_create_table && $brackets_level == 1) {
                    $in_create_table_fields = TRUE;
                }
            }


            if ($arr[$i]['type'] == 'punct_bracket_close_round') {
                $brackets_level--;
                if ($seen_references) {
                    $seen_references = FALSE;
                }
                if ($seen_create_table && $brackets_level == 0) {
                    $in_create_table_fields = FALSE;
                }
            }

            if (($arr[$i]['type'] == 'alpha_columnAttrib')) {
                $upper_data = strtoupper($arr[$i]['data']);
                if ($seen_create_table && $in_create_table_fields) {
                    if ($upper_data == 'DEFAULT') {
                        $seen_default = TRUE;
                    }
                }
            }

            /**
             * @see @todo 2005-10-16 note: the "or" part here is a workaround for a bug
             */
            if (($arr[$i]['type'] == 'alpha_columnType') || ($arr[$i]['type'] == 'alpha_functionName' && $seen_create_table)) {
                $upper_data = strtoupper($arr[$i]['data']);
                if ($seen_create_table && $in_create_table_fields && isset($current_identifier)) {
                    $create_table_fields[$current_identifier]['type'] = $upper_data;
                    if ($upper_data == 'TIMESTAMP') {
                        $arr[$i]['type'] = 'alpha_columnType';
                        $in_timestamp_options = TRUE;
                    } else {
                        $in_timestamp_options = FALSE;
                        if ($upper_data == 'CHAR') {
                            $arr[$i]['type'] = 'alpha_columnType';
                        }
                    }
                }
            }


            if ($arr[$i]['type'] == 'quote_backtick' || $arr[$i]['type'] == 'alpha_identifier') {

                if ($arr[$i]['type'] == 'quote_backtick') {
                    // remove backquotes
                    $identifier = PMA_unQuote($arr[$i]['data']);
                } else {
                    $identifier = $arr[$i]['data'];
                }

                if ($seen_create_table && $in_create_table_fields) {
                    $current_identifier = $identifier;
                    // warning: we set this one even for non TIMESTAMP type
                    $create_table_fields[$current_identifier]['timestamp_not_null'] = FALSE;
                }

                if ($seen_constraint) {
                    $foreign[$foreign_key_number]['constraint'] = $identifier;
                }

                if ($seen_foreign && $brackets_level > 0) {
                    $foreign[$foreign_key_number]['index_list'][] = $identifier;
                }

                if ($seen_references) {
                    // here, the first bracket level corresponds to the
                    // bracket of CREATE TABLE
                    // so if we are on level 2, it must be the index list
                    // of the foreign key REFERENCES
                    if ($brackets_level > 1) {
                        $foreign[$foreign_key_number]['ref_index_list'][] = $identifier;
                    } else {
                        // for MySQL 4.0.18, identifier is
                        // `table` or `db`.`table`
                        // the first pass will pick the db name
                        // the next pass will execute the else and pick the
                        // db name in $db_table[0]
                        if ($arr[$i+1]['type'] == 'punct_qualifier') {
                                $foreign[$foreign_key_number]['ref_db_name'] = $identifier;
                        } else {
                        // for MySQL 4.0.16, identifier is
                        // `table` or `db.table`
                            $db_table = explode('.', $identifier);
                            if (isset($db_table[1])) {
                                $foreign[$foreign_key_number]['ref_db_name'] = $db_table[0];
                                $foreign[$foreign_key_number]['ref_table_name'] = $db_table[1];
                            } else {
                                $foreign[$foreign_key_number]['ref_table_name'] = $db_table[0];
                            }
                        }
                    }
                }
            }
        } // end for $i (loop #3)


        // Fill the $subresult array

        if (isset($create_table_fields)) {
            $subresult['create_table_fields'] = $create_table_fields;
        }

        if (isset($foreign)) {
            $subresult['foreign_keys'] = $foreign;
        }

        if (isset($select_expr_clause)) {
            $subresult['select_expr_clause'] = $select_expr_clause;
        }
        if (isset($from_clause)) {
            $subresult['from_clause'] = $from_clause;
        }
        if (isset($group_by_clause)) {
            $subresult['group_by_clause'] = $group_by_clause;
        }
        if (isset($order_by_clause)) {
            $subresult['order_by_clause'] = $order_by_clause;
        }
        if (isset($having_clause)) {
            $subresult['having_clause'] = $having_clause;
        }
        if (isset($limit_clause)) {
            $subresult['limit_clause'] = $limit_clause;
        }
        if (isset($where_clause)) {
            $subresult['where_clause'] = $where_clause;
        }
        if (isset($unsorted_query) && !empty($unsorted_query)) {
            $subresult['unsorted_query'] = $unsorted_query;
        }
        if (isset($where_clause_identifiers)) {
            $subresult['where_clause_identifiers'] = $where_clause_identifiers;
        }

        if (isset($position_of_first_select)) {
            $subresult['position_of_first_select'] = $position_of_first_select;
            $subresult['section_before_limit'] = $section_before_limit;
            $subresult['section_after_limit'] = $section_after_limit;
        }

        // They are naughty and didn't have a trailing semi-colon,
        // then still handle it properly
        if ($subresult['querytype'] != '') {
            $result[] = $subresult;
        }
        return $result;
    } // end of the "PMA_SQP_analyze()" function


    /**
     * Colorizes SQL queries html formatted
     *
     * @todo check why adding a "\n" after the </span> would cause extra blanks
     * to be displayed: SELECT p . person_name
     * @param  array   The SQL queries html formatted
     *
     * @return array   The colorized SQL queries
     *
     * @access public
     */
    function PMA_SQP_formatHtml_colorize($arr)
    {
        $i         = $GLOBALS['PMA_strpos']($arr['type'], '_');
        $class     = '';
        if ($i > 0) {
            $class = 'syntax_' . PMA_substr($arr['type'], 0, $i) . ' ';
        }

        $class     .= 'syntax_' . $arr['type'];

        return '<span class="' . $class . '">' . htmlspecialchars($arr['data']) . '</span>';
    } // end of the "PMA_SQP_formatHtml_colorize()" function


    /**
     * Formats SQL queries to html
     *
     * @param  array   The SQL queries
     * @param  string  mode
     * @param  integer starting token
     * @param  integer number of tokens to format, -1 = all
     *
     * @return string  The formatted SQL queries
     *
     * @access public
     */
    function PMA_SQP_formatHtml($arr, $mode='color', $start_token=0,
        $number_of_tokens=-1)
    {
        //DEBUG echo 'in Format<pre>'; print_r($arr); echo '</pre>';
        // then check for an array
        if (!is_array($arr)) {
            return htmlspecialchars($arr);
        }
        // first check for the SQL parser having hit an error
        if (PMA_SQP_isError()) {
            return htmlspecialchars($arr['raw']);
        }
        // else do it properly
        switch ($mode) {
            case 'color':
                $str                                = '<span class="syntax">';
                $html_line_break                    = '<br />';
                break;
            case 'query_only':
                $str                                = '';
                $html_line_break                    = "\n";
                break;
            case 'text':
                $str                                = '';
                $html_line_break                    = '<br />';
                break;
        } // end switch
        $indent                                     = 0;
        $bracketlevel                               = 0;
        $functionlevel                              = 0;
        $infunction                                 = FALSE;
        $space_punct_listsep                        = ' ';
        $space_punct_listsep_function_name          = ' ';
        // $space_alpha_reserved_word = '<br />'."\n";
        $space_alpha_reserved_word                  = ' ';

        $keywords_with_brackets_1before            = array(
            'INDEX',
            'KEY',
            'ON',
            'USING'
        );
        $keywords_with_brackets_1before_cnt        = 4;

        $keywords_with_brackets_2before            = array(
            'IGNORE',
            'INDEX',
            'INTO',
            'KEY',
            'PRIMARY',
            'PROCEDURE',
            'REFERENCES',
            'UNIQUE',
            'USE'
        );
        // $keywords_with_brackets_2before_cnt = count($keywords_with_brackets_2before);
        $keywords_with_brackets_2before_cnt        = 9;

        // These reserved words do NOT get a newline placed near them.
        $keywords_no_newline               = array(
            'AS',
            'ASC',
            'DESC',
            'DISTINCT',
            'DUPLICATE',
            'HOUR',
            'INTERVAL',
            'IS',
            'LIKE',
            'NOT',
            'NULL',
            'ON',
            'REGEXP'
        );
        $keywords_no_newline_cnt           = 12;

        // These reserved words introduce a privilege list
        $keywords_priv_list                = array(
            'GRANT',
            'REVOKE'
        );
        $keywords_priv_list_cnt            = 2;

        if ($number_of_tokens == -1) {
            $arraysize = $arr['len'];
        } else {
            $arraysize = $number_of_tokens;
        }
        $typearr   = array();
        if ($arraysize >= 0) {
 <?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
* PHP interface to MimerSQL Validator
*
* Copyright 2002, 2003 Robin Johnson <robbat2@users.sourceforge.net>
* http://www.orbis-terrarum.net/?l=people.robbat2
*
* All data is transported over HTTP-SOAP
* And uses the PEAR SOAP Module
*
* Install instructions for PEAR SOAP
* Make sure you have a really recent PHP with PEAR support
* run this: "pear install Mail_Mime Net_DIME SOAP"
*
* If you got this file from somewhere other than phpMyAdmin
* please be aware that the latest copy will always be in the
* phpMyAdmin subversion tree as
* $HeadURL: https://phpmyadmin.svn.sourceforge.net/svnroot/phpmyadmin/trunk/phpMyAdmin/libraries/sqlvalidator.class.php $
*
* This code that also used to depend on the PHP overload module, but that has been
* removed now.
*
* @access   public
*
* @author   Robin Johnson <robbat2@users.sourceforge.net>
*
* @version  $Id: sqlvalidator.class.php 11326 2008-06-17 21:32:48Z lem9 $
*/
if (! defined('PHPMYADMIN')) {
    exit;
}

@include_once 'SOAP/Client.php';

if (!function_exists('class_exists') || !class_exists('SOAP_Client')) {
    $GLOBALS['sqlvalidator_error'] = TRUE;
} else {
    // Ok, we have SOAP Support, so let's use it!

    class PMA_SQLValidator {

        var $url;
        var $service_name;
        var $wsdl;
        var $output_type;

        var $username;
        var $password;
        var $calling_program;
        var $calling_program_version;
        var $target_dbms;
        var $target_dbms_version;
        var $connectionTechnology;
        var $connection_technology_version;
        var $interactive;

        var $service_link = null;
        var $session_data = null;


        /**
         * Private functions - You don't need to mess with these
         */

        /**
         * Service opening
         *
         * @param  string  URL of Mimer SQL Validator WSDL file
         *
         * @return object  Object to use
         *
         * @access private
         */
        function _openService($url)
        {
            $obj = new SOAP_Client($url, TRUE);
            return $obj;
        } // end of the "openService()" function


        /**
         * Service initializer to connect to server
         *
         * @param  object   Service object
         * @param  string   Username
         * @param  string   Password
         * @param  string   Name of calling program
         * @param  string   Version of calling program
         * @param  string   Target DBMS
         * @param  string   Version of target DBMS
         * @param  string   Connection Technology
         * @param  string   version of Connection Technology
         * @param  integer  boolean of 1/0 to specify if we are an interactive system
         *
         * @return object   stdClass return object with data
         *
         * @access private
         */
        function _openSession($obj, $username, $password,
                                      $calling_program, $calling_program_version,
                                      $target_dbms, $target_dbms_version,
                                      $connection_technology, $connection_technology_version,
                                      $interactive)
        {
    $use_array = array("a_userName" => $username, "a_password" => $password, "a_callingProgram" => $calling_program, "a_callingProgramVersion" => $calling_program_version, "a_targetDbms" => $target_dbms, "a_targetDbmsVersion" => $target_dbms_version, "a_connectionTechnology" => $connection_technology, "a_connectionTechnologyVersion" => $connection_technology_version, "a_interactive" => $interactive);
            $ret = $obj->call("openSession", $use_array);

           // This is the old version that needed the overload extension
           /* $ret = $obj->openSession($username, $password,
                                     $calling_program, $calling_program_version,
                                     $target_dbms, $target_dbms_version,
                                     $connection_technology, $connection_technology_version,
                                     $interactive); */

            return $ret;
        } // end of the "_openSession()" function


        /**
         * Validator sytem call
         *
         * @param  object  Service object
         * @param  object  Session object
         * @param  string  SQL Query to validate
         * @param  string  Data return type
         *
         * @return object  stClass return with data
         *
         * @access private
         */
        function _validateSQL($obj, $session, $sql, $method)
        {
    $use_array = array("a_sessionId" => $session->sessionId, "a_sessionKey" => $session->sessionKey, "a_SQL" => $sql, "a_resultType" => $this->output_type);
            $res = $obj->call("validateSQL", $use_array);

           // This is the old version that needed the overload extension
           // $res = $obj->validateSQL($session->sessionId, $session->sessionKey, $sql, $this->output_type);
            return $res;
        } // end of the "validateSQL()" function


        /**
         * Validator sytem call
         *
         * @param  string  SQL Query to validate
         *
         * @return object  stdClass return with data
         *
         * @access private
         *
         * @see    validateSQL()
         */
        function _validate($sql)
        {
            $ret = $this->_validateSQL($this->service_link, $this->session_data,
                                               $sql, $this->output_type);
            return $ret;
        } // end of the "validate()" function


        /**
         * Publ           $typearr[0] = '';
            $typearr[1] = '';
            $typearr[2] = '';
            //$typearr[3] = $arr[0]['type'];
            $typearr[3] = $arr[$start_token]['type'];
        }

        $in_priv_list = FALSE;
        for ($i = $start_token; $i < $arraysize; $i++) {
// DEBUG echo "Loop format <b>" . $arr[$i]['data'] . "</b> " . $arr[$i]['type'] . "<br />";
            $before = '';
            $after  = '';
            $indent = 0;
            // array_shift($typearr);
            /*
            0 prev2
            1 prev
            2 current
            3 next
            */
            if (($i + 1) < $arraysize) {
                // array_push($typearr, $arr[$i + 1]['type']);
                $typearr[4] = $arr[$i + 1]['type'];
            } else {
                //array_push($typearr, null);
                $typearr[4] = '';
            }

            for ($j=0; $j<4; $j++) {
                $typearr[$j] = $typearr[$j + 1];
            }

            switch ($typearr[2]) {
                case 'white_newline':
                    $before     = '';
                    break;
                case 'punct_bracket_open_round':
                    $bracketlevel++;
                    $infunction = FALSE;
                    // Make sure this array is sorted!
                    if (($typearr[1] == 'alpha_functionName') || ($typearr[1] == 'alpha_columnType') || ($typearr[1] == 'punct')
                        || ($typearr[3] == 'digit_integer') || ($typearr[3] == 'digit_hex') || ($typearr[3] == 'digit_float')
                        || (($typearr[0] == 'alpha_reservedWord')
                            && PMA_STR_binarySearchInArr(strtoupper($arr[$i - 2]['data']), $keywords_with_brackets_2before, $keywords_with_brackets_2before_cnt))
                        || (($typearr[1] == 'alpha_reservedWord')
                            && PMA_STR_binarySearchInArr(strtoupper($arr[$i - 1]['data']), $keywords_with_brackets_1before, $keywords_with_brackets_1before_cnt))
                        ) {
                        $functionlevel++;
                        $infunction = TRUE;
                        $after      .= ' ';
                    } else {
                        $indent++;
                        $after      .= ($mode != 'query_only' ? '<div class="syntax_indent' . $indent . '">' : ' ');
                    }
                    break;
                case 'alpha_identifier':
                    if (($typearr[1] == 'punct_qualifier') || ($typearr[3] == 'punct_qualifier')) {
                        $after      = '';
                        $before     = '';
                    }
                    if (($typearr[3] == 'alpha_columnType') || ($typearr[3] == 'alpha_identifier')) {
                        $after      .= ' ';
                    }
                    break;
                case 'punct_user':
                case 'punct_qualifier':
                    $before         = '';
                    $after          = '';
                    break;
                case 'punct_listsep':
                    if ($infunction == TRUE) {
                        $after      .= $space_punct_listsep_function_name;
                    } else {
                        $after      .= $space_punct_listsep;
                    }
                    break;
                case 'punct_queryend':
                    if (($typearr[3] != 'comment_mysql') && ($typearr[3] != 'comment_ansi') && $typearr[3] != 'comment_c') {
                        $after     .= $html_line_break;
                        $after     .= $html_line_break;
                    }
                    $space_punct_listsep               = ' ';
                    $space_punct_listsep_function_name = ' ';
                    $space_alpha_reserved_word         = ' ';
                    $in_priv_list                      = FALSE;
                    break;
                case 'comment_mysql':
                case 'comment_ansi':
                    $after         .= $html_line_break;
                    break;
                case 'punct':
                    $before         .= ' ';
                    // workaround for
                    // select * from mytable limit 0,-1
                    // (a side effect of this workaround is that
                    // select 20 - 9
                    // becomes
                    // select 20 -9
                    // )
                    if ($typearr[3] != 'digit_integer') {
                       $after        .= ' ';
                    }
                    break;
                case 'punct_bracket_close_round':
                    $bracketlevel--;
                    if ($infunction == TRUE) {
                        $functionlevel--;
                        $after     .= ' ';
                        $before    .= ' ';
                    } else {
                        $indent--;
                        $before    .= ($mode != 'query_only' ? '</div>' : ' ');
                    }
                    $infunction    = ($functionlevel > 0) ? TRUE : FALSE;
                    break;
                case 'alpha_columnType':
                    if ($typearr[3] == 'alpha_columnAttrib') {
                        $after     .= ' ';
                    }
                    if ($typearr[1] == 'alpha_columnType') {
                        $before    .= ' ';
                    }
                    break;
                case 'alpha_columnAttrib':

                    // ALTER TABLE tbl_name AUTO_INCREMENT = 1
                    // COLLATE LATIN1_GENERAL_CI DEFAULT
                    if ($typearr[1] == 'alpha_identifier' || $typearr[1] == 'alpha_charset') {
                        $before .= ' ';
                    }
                    if (($typearr[3] == 'alpha_columnAttrib') || ($typearr[3] == 'quote_single') || ($typearr[3] == 'digit_integer')) {
                        $after     .= ' ';
                    }
                    // workaround for
                    // AUTO_INCREMENT = 31DEFAULT_CHARSET = utf-8

                    if ($typearr[2] == 'alpha_columnAttrib' && $typearr[3] == 'alpha_reservedWord') {
                        $before .= ' ';
                    }
                    // workaround for
                    // select * from mysql.user where binary user="root"
                    // binary is marked as alpha_columnAttrib
                    // but should be marked as a reserved word
                    if (strtoupper($arr[$i]['data']) == 'BINARY'
                      && $typearr[3] == 'alpha_identifier') {
                        $after     .= ' ';
                    }
                    break;
                case 'alpha_reservedWord':
                    // do not uppercase the reserved word if we are calling
                    // this function in query_only mode, because we need
                    // the original query (otherwise we get problems with
                    // semi-reserved words like "storage" which is legal
                    // as an identifier name)

                    if ($mode != 'query_only') {
                        $arr[$i]['data'] = strtoupper($arr[$i]['data']);
                    }

                    if ((($typearr[1] != 'alpha_reservedWord')
                        || (($typearr[1] == 'alpha_reservedWord')
                            && PMA_STR_binarySearchInArr(strtoupper($arr[$i - 1]['data']), $keywords_no_newline, $keywords_no_newline_cnt)))
                        && ($typearr[1] != 'punct_level_plus')
                        && (!PMA_STR_binarySearchInArr($arr[$i]['data'], $keywords_no_newline, $keywords_no_newline_cnt))) {
                        // do not put a space before the first token, because
                        // we use a lot of eregi() checking for the first
                        // reserved word at beginning of query
                        // so do not put a newline before
                        //
                        // also we must not be inside a privilege lic functions
         */

        /**
         * Constructor
         *
         * @access public
         */
        function PMA_SQLValidator()
        {
            $this->url                           = 'http://sqlvalidator.mimer.com/v1/services';
            $this->service_name                  = 'SQL99Validator';
            $this->wsdl                          = '?wsdl';

            $this->output_type                   = 'html';

            $this->username                      = 'anonymous';
            $this->password                      = '';
            $this->calling_program               = 'PHP_SQLValidator';
            $this->calling_program_version       = '$Revision: 11326 $';
            $this->target_dbms                   = 'N/A';
            $this->target_dbms_version           = 'N/A';
            $this->connection_technology         = 'PHP';
            $this->connection_technology_version = phpversion();
            $this->interactive = 1;

            $this->service_link = null;
            $this->session_data = null;
        } // end of the "PMA_SQLValidator()" function


        /**
         * Sets credentials
         *
         * @param  string  the username
         * @param  string  the password
         *
         * @access public
         */
        function setCredentials($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
        } // end of the "setCredentials()" function


        /**
         * Sets the calling program
         *
         * @param  string  the calling program name
         * @param  string  the calling program revision
         *
         * @access public
         */
        function setCallingProgram($calling_program, $calling_program_version)
        {
            $this->calling_program         = $calling_program;
            $this->calling_program_version = $calling_program_version;
        } // end of the "setCallingProgram()" function


        /**
         * Appends the calling program
         *
         * @param  string  the calling program name
         * @param  string  the calling program revision
         *
         * @access public
         */
        function appendCallingProgram($calling_program, $calling_program_version)
        {
            $this->calling_program         .= ' - ' . $calling_program;
            $this->calling_program_version .= ' - ' . $calling_program_version;
        } // end of the "appendCallingProgram()" function


        /**
         * Sets the target DBMS
         *
         * @param  string  the target DBMS name
         * @param  string  the target DBMS revision
         *
         * @access public
         */
        function setTargetDbms($target_dbms, $target_dbms_version)
        {
            $this->target_dbms         = $target_dbms;
            $this->target_dbms_version = $target_dbms_version;
        } // end of the "setTargetDbms()" function


        /**
         * Appends the target DBMS
         *
         * @param  string  the target DBMS name
         * @param  string  the target DBMS revision
         *
         * @access public
         */
        function appendTargetDbms($target_dbms, $target_dbms_version)
        {
            $this->target_dbms         .= ' - ' . $target_dbms;
            $this->target_dbms_version .= ' - ' . $target_dbms_version;
        } // end of the "appendTargetDbms()" function


        /**
         * Sets the connection technology used
         *
         * @param  string  the connection technology name
         * @param  string  the connection technology revision
         *
         * @access public
         */
        function setConnectionTechnology($connection_technology, $connection_technology_version)
        {
            $this->connection_technology         = $connection_technology;
            $this->connection_technology_version = $connection_technology_version;
        } // end of the "setConnectionTechnology()" function


        /**
         * Appends the connection technology used
         *
         * @param  string  the connection technology name
         * @param  string  the connection technology revision
         *
         * @access public
         */
        function appendConnectionTechnology($connection_technology, $connection_technology_version)
        {
            $this->connection_technology         .= ' - ' . $connection_technology;
            $this->connection_technology_version .= ' - ' . $connection_technology_version;
        } // end of the "appendConnectionTechnology()" function


        /**
         * Sets whether interactive mode should be used or not
         *
         * @param  integer  whether interactive mode should be used or not
         *
         * @access public
         */
        function setInteractive($interactive)
        {
            $this->interactive = $interactive;
        } // end of the "setInteractive()" function


        /**
         * Sets the output type to use
         *
         * @param  string  the output type to use
         *
         * @access public
         */
        function setOutputType($output_type)
        {
            $this->output_type = $output_type;
        } // end of the "setOutputType()" function


        /**
         * Starts service
         *
         * @access public
         */
        function startService()
        {

            $this->service_link = $this->_openService($this->url . '/' . $this->service_name . $this->wsdl);

        } // end of the "startService()" function


        /**
         * Starts session
         *
         * @access public
         */
        function startSession()
        {
            $this->session_data = $this->_openSession($this->service_link, $this->username, $this->password,
                                                              $this->calling_program, $this->calling_program_version,
                                                              $this->target_dbms, $this->target_dbms_version,
                                                              $this->connection_technology, $this->connection_technology_version,
                                                              $this->interactive);

            if (isset($this->session_data) && ($this->session_data != null)
                && ($this->session_data->target != $this->url)) {
                // Reopens the service on the new URL that was provided
                $url = $this->session_data->target;
                $this->startService();
            }
        } // end of the "startSession()" function


        /**
         * Do start service and session
         *
         * @access public
         */
        function start()
        {
            $this->startService();
            $this->startSession();
        } // end of the "start()" function


        /**
         * Call to determine just if a query is valid or not.
         *
         * @param  string SQL statement to validate
         *
         * @return string Validator string from Mimer
         *
         * @see _validate
         */
        function isValid($sql)
        {
            $res = $this->_validate($sql);
            return $res->standard;
        } // end of the "isValid()" function


        /**
         * Call for complete validator response
         *
         * @param  string SQL statement to validate
         *
         * @return string Validator string from Mimer
         *
         * @see _validate
         */
        function validationString($sql)
        {
            $res = $this->_validate($sql);
            return $res->data;

        } // end of the "validationString()" function
    } // end class PMA_SQLValidator

    //add an extra check to ensure that the class was defined without errors
    if (!class_exists('PMA_SQLValidator')) {
        $GLOBALS['sqlvaist
                        if ($i > 0) {
                            // the alpha_identifier exception is there to
                            // catch cases like
                            // GRANT SELECT ON mydb.mytable TO myuser@localhost
                            // (else, we get mydb.mytableTO)
                            //
                            // the quote_single exception is there to
                            // catch cases like
                            // GRANT ... TO 'marc'@'domain.com' IDENTIFIED...
                            /**
                             * @todo fix all cases and find why this happens
                             */

                            if (!$in_priv_list || $typearr[1] == 'alpha_identifier' || $typearr[1] == 'quote_single' || $typearr[1] == 'white_newline') {
                                $before    .= $space_alpha_reserved_word;
                            }
                        } else {
                        // on first keyword, check if it introduces a
                        // privilege list
                            if (PMA_STR_binarySearchInArr($arr[$i]['data'], $keywords_priv_list, $keywords_priv_list_cnt)) {
                                $in_priv_list = TRUE;
                            }
                        }
                    } else {
                        $before    .= ' ';
                    }

                    switch ($arr[$i]['data']) {
                        case 'CREATE':
                            if (!$in_priv_list) {
                                $space_punct_listsep       = $html_line_break;
                                $space_alpha_reserved_word = ' ';
                            }
                            break;
                        case 'EXPLAIN':
                        case 'DESCRIBE':
                        case 'SET':
                        case 'ALTER':
                        case 'DELETE':
                        case 'SHOW':
                        case 'DROP':
                        case 'UPDATE':
                        case 'TRUNCATE':
                        case 'ANALYZE':
                        case 'ANALYSE':
                            if (!$in_priv_list) {
                                $space_punct_listsep       = $html_line_break;
                                $space_alpha_reserved_word = ' ';
                            }
                            break;
                        case 'INSERT':
                        case 'REPLACE':
                            if (!$in_priv_list) {
                                $space_punct_listsep       = $html_line_break;
                                $space_alpha_reserved_word = $html_line_break;
                            }
                            break;
                        case 'VALUES':
                            $space_punct_listsep       = ' ';
                            $space_alpha_reserved_word = $html_line_break;
                            break;
                        case 'SELECT':
                            $space_punct_listsep       = ' ';
                            $space_alpha_reserved_word = $html_line_break;
                            break;
                        default:
                            break;
                    } // end switch ($arr[$i]['data'])

                    $after         .= ' ';
                    break;
                case 'digit_integer':
                case 'digit_float':
                case 'digit_hex':
                    /**
                     * @todo could there be other types preceding a digit?
                     */
                    if ($typearr[1] == 'alpha_reservedWord') {
                        $after .= ' ';
                    }
                    if ($infunction && $typearr[3] == 'punct_bracket_close_round') {
                        $after     .= ' ';
                    }
                    if ($typearr[1] == 'alpha_columnAttrib') {
                        $before .lidator_error'] = TRUE;
    }

} // end else

?>
= ' ';
                    }
                    break;
                case 'alpha_variable':
                    $after      = ' ';
                    break;
                case 'quote_double':
                case 'quote_single':
                    // workaround: for the query
                    // REVOKE SELECT ON `base2\_db`.* FROM 'user'@'%'
                    // the @ is incorrectly marked as alpha_variable
                    // in the parser, and here, the '%' gets a blank before,
                    // which is a syntax error
                    if ($typearr[1] != 'punct_user') {
                        $before        .= ' ';
                    }
                    if ($infunction && $typearr[3] == 'punct_bracket_close_round') {
                        $after     .= ' ';
                    }
                    break;
                case 'quote_backtick':
                    // here we check for punct_user to handle correctly
                    // DEFINER = `username`@`%`
                    // where @ is the punct_user and `%` is the quote_backtick 
                    if ($typearr[3] != 'punct_qualifier' && $typearr[3] != 'alpha_variable' && $typearr[3] != 'punct_user') {
                        $after     .= ' ';
                    }
                    if ($typearr[1] != 'punct_qualifier' && $typearr[1] != 'alpha_variable' && $typearr[1] != 'punct_user') {
                        $before    .= ' ';
                    }
                    break;
                default:
                    break;
            } // end switch ($typearr[2])

/*
            if ($typearr[3] != 'punct_qualifier') {
                $after             .= ' ';
            }
            $after                 .= "\n";
*/
            $str .= $before . ($mode=='color' ? PMA_SQP_formatHTML_colorize($arr[$i]) : $arr[$i]['data']). $after;
        } // end for
        if ($mode=='color') {
            $str .= '</span>';
        }

        return $str;
    } // end of the "PMA_SQP_formatHtml()" function
}

/**
 * Builds a CSS rule used for html formatted SQL queries
 *
 * @param  string  The class name
 * @param  string  The property name
 * @param  string  The property value
 *
 * @return string  The CSS rule
 *
 * @access public
 *
 * @see    PMA_SQP_buildCssData()
 */
function PMA_SQP_buildCssRule($classname, $property, $value)
{
    $str     = '.' . $classname . ' {';
    if ($value != '') {
        $str .= $property . ': ' . $value . ';';
    }
    $str     .= '}' . "\n";

    return $str;
} // end of the "PMA_SQP_buildCssRule()" function


/**
 * Builds CSS rules used for html formatted SQL queries
 *
 * @return string  The CSS rules set
 *
 * @access public
 *
 * @global array   The current PMA configuration
 *
 * @see    PMA_SQP_buildCssRule()
 */
function PMA_SQP_buildCssData()
{
    global $cfg;

    $css_string     = '';
    foreach ($cfg['SQP']['fmtColor'] AS $key => $col) {
        $css_string .= PMA_SQP_buildCssRule('syntax_' . $key, 'color', $col);
    }

    for ($i = 0; $i < 8; $i++) {
        $css_string .= PMA_SQP_buildCssRule('syntax_indent' . $i, 'margin-left', ($i * $cfg['SQP']['fmtInd']) . $cfg['SQP']['fmtIndUnit']);
    }

    return $css_string;
} // end of the "PMA_SQP_buildCssData()" function

if (! defined('PMA_MINIMUM_COMMON')) {
    /**
     * Gets SQL queries with no format
     *
     * @param  array   The SQL queries list
     *
     * @return string  The SQL queries with no format
     *
     * @access public
     */
    function PMA_SQP_formatNone($arr)
    {
        $formatted_sql = htmlspecialchars($arr['raw']);
        $formatted_sql = preg_replace("@((\015\012)|(\015)|(\012)){3,}@", "\n\n", $formatted_sql);

        return $formatted_sql;
    } // end of the "PMA_SQP_formatNone()" function


    /**
     * Gets SQL queries in text format
     *
     * @todo WRITE THIS!
     * @param  array   The SQL queries list
     *
     * @return string  The SQL queries in text format
     *
     * @access public
     */
    function PMA_SQP_formatText($arr)
    {
         return PMA_SQP_formatNone($arr);
    } // end of the "PMA_SQP_formatText()" function
} // end if: minimal common.lib needed?

?>
