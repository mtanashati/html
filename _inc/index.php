<?
require $_SERVER["DOCUMENT_ROOT"]."/_inc/config.php"; 
$Table_exist = mysql_list_tables("$Database");
if (!$Table_exist) Error ('테이블 선택 실패');
$Table_Num = mysql_num_rows($Table_exist);
$Table_Etc = mysql_num_fields($Table_exist);
$k=0;
for ($i=0;$i<$Table_Num;$i++) {
	for ($j=0;$j<$Table_Etc;$j++) {
		$Table_Name = mysql_result($Table_exist,$i,$j);			
		if ($Table_Name=='log_total') 	$k++;
	}
} 
if($k==0)echo "<a href='/_inc/setup.html' target='_self'>DB SETUP</a><br>";

?>
<a href="/_admin" target="_top">관리자모드</a>
<?phpinfo();?>