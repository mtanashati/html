<?
###  ���ڼ� �ڸ��� ####
function text_cut($str, $len ){ 
if ($len >= strlen($str)) 
		return $str; 
		$klen = $len - 1; 

	while(ord($str[$klen]) & 0x80) 
		$klen--; 
	return substr($str, 0, $len - (($len + $klen + 1) % 2)) . "..."; 
}

function text_cut2($string, $length){ 
	$textout=$string;
	$word_len=strlen($textout); 
	if($word_len < $length) return $textout;
	elseif($word_len > $length){
		for($i=$length; $i < $word_len; $i--){
			$lastword=substr($textout,$i,$i);
			$lastword=ord($lastword); 
			if($lastword < 127){
				$textout=substr($textout,0, $i); 
				$textout.=$textout."...";
				return $textout;
				break;
			}
		}
	}
}


//���ڼ� ����
function str_length_control($str, $len) { 
	if ($len >= strlen($str)) 
		return $str; 
		$klen = $len - 1; 

	while(ord($str[$klen]) & 0x80) 
		$klen--; 
	return substr($str, 0, $len - (($len + $klen + 1) % 2)) . "..."; 
} 


function left($string, $length) { 
  return substr($string, 0, $length); 
} 

function right($string, $length) { 
  return substr($string, -$length, strlen($string)); 
} 


##------------------------ ȸ����� ���� -------------------------------##
function Grade($a) {
	switch($a) {
		case(1) :
			$Grade="��ȸ��";
			break;
		case(2) :
			$Grade="��ȸ��";
			break;
		case(3) :
			$Grade="�νØ�";
			break;
		case(4) :
			$Grade="�Ø�";
			break;
		default :
			echo"������ ���� �˼� �����ϴ�";
	}
	return $Grade;
}

//�Է��� ������ Ʋ���� ���� �������� ���ƺ����� ���
function Error($Message) {
echo ("
	<script language='javascript'>
	window.alert('$Message')
	history.go(-1)
	</script>
	");
	exit;
}

//�Է��� ������ Ʋ���� ���� �������� ���ƺ����� ���
function GO($url='',$message='') {
    if ($message) {
        echo"
		<script language='javascript'>
		window.alert('$message');
		</script>
		";
    }
	if($url) echo"<meta http-equiv='refresh' content='0; URL=$url'>";
	exit;
}

function ReloadClose(){
	echo "<script language='javascript'>
	opener.location.reload(); 
	self.close();
	</script>";
}

function MsgClose($Msg){
	echo ("
	<script language='javascript'>
	window.alert('$Msg');
	self.close();
	</script>");
}

// �Է��� �̸����� ���Ŀ� �´� ��Ȯ�� �̸������� �Ǵ�
function Email_Check($Email_Address) {
return (ereg('^[-!#$%&\'*+\./0-9=?A-Z^_a-z{|}~]+'.'@'.
	'[-!#$%&\'*+\/0-9=?A-Z^_a-z{|}~]+\.'.
	'[-!#$%&\'*+\./0-9=?A-Z^_a-z{|}~]+$',
	$Email_Address));
}

//�� �����ϱ�
function ifelse($base,$div,$yes,$no=''){
	if($base==$div) return $yes;
	else return $no;
}

//�� �����ϱ�
function ifelseMsg($base,$div,$Msg,$ac){
	if($base==$div) {
		echo ("
			<script language='javascript'>
			window.alert('$Msg');
			");
		if($ac=='C' || $ac=='c' ) echo "window.close();";
		elseif($ac=='B' || $ac=='b') echo "history.back();";
		elseif($ac) echo "location.href='$ac'";
		echo "</script>";
	}
}

function popup_go($div,$url,$msg){
	if(!$div){
		echo "<script language='javascript'>";
		echo "window.alert('".$msg."');";
		echo "opener.location.href='".$url."';";
		echo "self.close();";
		echo "</script>";
		
	} 
}

//�迭 �ڵ��ɼ�
function Auto_Array_Opt($ArrayName,$sel='',$var='') {
	
		while (list($key,$value)=each($ArrayName)) { 
			$chk=ifelse($sel,$key,'selected','') ;  
			//echo $var;
			$ArrOpt .="<option value='".$var.$key."' ".$chk." >".$value."</option>";
		}
		return $ArrOpt;
}

 

function zero_plus($var){
	if($var<10) $var="0".$var;
	return $var;
}

//�ڵ� ���� �ɼ�
function Auto_Opt($Start,$End,$chk_var='',$increse='',$front_var='',$back_var='',$front_key='',$back_key='') {
		if(!$increse) $increse=1;
		
		for($i=$Start;$i<$End;$i=$i+$increse){
			if($i<10) $key=$front_key."0".$i.$back_key;
			else $key=$front_key.$i.$back_key;
			if($i<10) $value=$front_var."0".$i.$back_var;
			else $value=$front_var.$i.$back_var; 
			if($chk_var) $chk=ifelse($chk_var,$key,'selected','') ;
			$ArrOpt .="<option value='$key' $chk>$value</option>";
		}
		return $ArrOpt;
}

function diff_msg($a,$b,$msg='',$url='',$ac=''){
	if(!$a) $a="0";
	if ($a < $b) {
		 if($url) GO($url,$msg);
		 elseif($ac=='C' || $ac=='c'){
			 echo "<script language='javascript'>
						window.alert('$msg')
			            window.close();</script>";
		 }else Error($msg);	 
	}
}


//IMAGE ���� ���ε�
function fileupload($File,$SaveDir,$File_name,$File_size,$div='',$oldfile=''){
	if ($File != 'none' && $File !='') { // ������ ������ ��쿡 ����
		$File_Dir = $SaveDir;
		$max_file_size=10248576 ; 
		$max_file_size_M='1M';
		$File_ext = explode(".", "$File_name");
		$Extension = $File_ext[sizeof($File_ext)-1];
		$Extension=strtolower($Extension);
		if($div) $saveName=$div."_".time().".".$Extension;
		else $saveName=time().".".$Extension;
		// ���� Ȯ���� �˻�

		if ($Extension !="jpg" && $Extension!="gif" && $Extension!="jpge")
			Error ($Extension.'�� ������ ���� ���� Ȯ���� �Դϴ�.\n\ngif, jpg, jpge ���ϸ� �÷� �ּ���.');
	 
		if ($File_size >$max_file_size )  
			Error ($File_name."�� ������ ���ε� �뷮(".$max_file_size_M."byte)�� �ʰ��Ͽ����ϴ�"); 
		 

		// ���ϸ� ���� �˻�
		$Same_File_Name = file_exists($SaveDir."/$saveName");
		if ($Same_File_Name)  Error ('���� �Խ��ǿ� ���ϸ��� ������ �����մϴ�.'); 
		//for( $i=0; file_exists( $SaveDir."/$saveName" ); $i++ )
        //        $saveName = $saveName."_".$i;



		// �ڷḦ ������ ���丮 �۹̼� ����
		exec("chmod 777 $SaveDir");
		
		// ���� ���丮�� ���� ����
		if (!copy($File,$SaveDir."/$saveName"))  Error ('���� ���翡 �����߽��ϴ�.'); 

		// �ӽ� ���� ����
		if (!unlink($File)) Error ('���� ������ �����߽��ϴ�.'); 
		if ($oldfile && !unlink($SaveDir."/".$oldfile)) Error ('���� ���� ������ �����߽��ϴ�.'); 

		// �ڷḦ ������ ���丮 �۹̼� ����
		exec("chmod 755 $SaveDir");
	}else{
		$saveName=$oldfile;
	}	 
	return $saveName;
	
}

//���� ���ε�
function fileupload_all($File,$SaveDir,$File_name,$File_size,$div='',$oldfile=''){
if ($File != 'none' && $File !='') { // ������ ������ ��쿡 ����
	$File_Dir = $SaveDir;
	$max_file_size=10248576 ; 
	$max_file_size_M='1M';
	$File_ext = explode(".", "$File_name");
	$Extension = $File_ext[sizeof($File_ext)-1];
	$Extension=strtolower($Extension);
	if($div) $saveName=$div."_".time().".".$Extension;
	else $saveName=time().".".$Extension;
	// ���� Ȯ���� �˻�
	
	if (!strcmp($Extension,"htm") ||	!strcmp($Extension,"html") || !strcmp($Extension,"phtml") || !strcmp($Extension,"php") ||	!strcmp($Extension,"php3") || !strcmp($Extension,"php4") ||		!strcmp($Extension,"inc") || !strcmp($Extension,"pl") || !strcmp($Extension,"cgi") ||		!strcmp($Extension,"txt")) 	Error ('������ ���� ���� Ȯ���� �Դϴ�.');

	if ($File_size >$max_file_size )  
		Error ($File_name."�� ������ ���ε� �뷮(".$max_file_size_M."byte)�� �ʰ��Ͽ����ϴ�"); 
	 

	// ���ϸ� ���� �˻�
	$Same_File_Name = file_exists($SaveDir."/$saveName");
	if ($Same_File_Name)  Error ('���� �Խ��ǿ� ���ϸ��� ������ �����մϴ�.'); 

	// �ڷḦ ������ ���丮 �۹̼� ����
	exec("chmod 777 $SaveDir");
	
	// ���� ���丮�� ���� ����
	if (!copy($File,$SaveDir."/$saveName"))  Error ('���� ���翡 �����߽��ϴ�.'); 

	// �ӽ� ���� ����
	if (!unlink($File)) Error ('���� ������ �����߽��ϴ�.'); 
	if ($oldfile && !unlink($SaveDir."/".$oldfile)) Error ('���� ���� ������ �����߽��ϴ�.'); 

	// �ڷḦ ������ ���丮 �۹̼� ����
	exec("chmod 755 $SaveDir");
	}else{
		$saveName=$oldfile;
	}	 
	return $saveName;
	
}



//����¡
function paging($total,$start,$page,$scale,$page_scale,$etc='',$var='',$img=''){ 
//  echo "total = $total,<br> start= $start <br> ,page= $page <br>,scale= $scale, <br> page_scale= $page_scale,<br> $etc ";

	$etc=ifelse($etc,'','','&'.$etc);
	if($total > $scale) { 	 
		if( $start+1 >  $scale*$page_scale ) { 
				$pre_start= $start - $scale*$page_scale ;
				$prt="<a href='".$PHP_SELF."?start".$var."=".$pre_start.$etc."'><img src='/_inc/img/pre".$img.".gif' border='0'></a> &nbsp; ";
		}

		for($vj=0; $vj < $page_scale ; $vj++) {
			$ln = ($page * $page_scale + $vj)*$scale ;
			$vk= $page * $page_scale + $vj+1 ;		 
 
			if($ln<$total) {  
				if($vj!=0)$prt.=" | ";
				if($ln!=$start) $prt.= "  &nbsp;<a href='".$PHP_SELF."?start".$var."=".$ln.$etc."'>".$vk."</a> &nbsp; ";
				else  $prt.= "  &nbsp;<font style='font-weight:bold'>".$vk."</font> &nbsp; ";			  
			}//if 
		}//for 
			   				
		if($total > (($page+1)*$scale*$page_scale) ) {
			$n_start=($page+1)*$scale*$page_scale ;
			$prt .= "  &nbsp;<a href='".$PHP_SELF."?start".$var."=".$n_start.$etc."'><img src='/_inc/img/next".$img.".gif' border='0'></a>";
		}//if 
	}//if
	return $prt;
}

//DB ����
function createDB($db,$values,$url='',$msg=''){
	$Query="CREATE TABLE ". $db ." ( ". $values .");" ;
	$Result=mysql_query($Query);
	//echo "$Query<br>";
	if (!$Result){		
		Error ('Create Error!!');
	}else{
		if($url) GO($url,$msg) ;	
	}
}

//DB 
function dropDB($db,$url='',$msg=''){
	$Query="drop TABLE ". $db ;
	$Result=mysql_query($Query);
	//echo "$Query<br>";
	if (!$Result){		
		Error ('Drop Error!!');
	}else{
		if($url) GO($url,$msg) ;	
	}
}


//DB ����
function insertDB($db,$values,$url='',$msg=''){
	$Query="insert into ". $db ." set ". $values ;
	$Result=mysql_query($Query);
	//echo "$Query<br>";
	if (!$Result){
		echo "$Query";
		//Error ('Insert Error!!');
	}else{
		if($url) GO($url,$msg) ;	
		else return $Result;
	}
}

//DB ����
function selectDB($db,$value,$where='',$order='',$limitS='',$limitE=''){
	if($where) $where=' where '. $where;
	if($order) $order=' order by '.$order;
	if($limitS!="" ) $limit=' limit '.$limitS;
	if($limitE) $limit.=', '.$limitE;
	
	$Query="select ". $value." from ".$db .$where .$order .$limit;
	$Result=mysql_query($Query);
	
	//echo "$Query <br>";
	if (!$Result){
		echo "Error <br> $Query<br>";
		//Error ('Select Error!!');		
	}
    else return $Result;
}

function selectDBR($db,$value,$where='',$order='',$limitS='',$limitE=''){
	if($where) $where=' where '. $where;	
	if($order) $order=' order by '.$order;
	if($limitS!="" ) $limit=' limit '.$limitS;
	if($limitE) $limit.=', '.$limitE;

	$Query="select ". $value." from ".$db .$where . $order . $limit;

	$Result=mysql_query($Query);
	//echo "$Query <br>";
	if (!$Result){
		echo "Error R=> $Query <br>";
		//Error ('Select Error!!');		
	}else{
		$row=mysql_fetch_array($Result);
		return $row;
	}
}

function selectDB_Max($db,$value,$where=''){
	if($where) $where=' where '. $where;	
	$Query="select Max(". $value.") from ".$db .$where;
	$Result=mysql_query($Query);
	//echo "$Query <br>";
	if (!$Result){
		echo "R=> $Query <br>";
		//Error ('Select Error!!');		
	}else{
		$row = mysql_fetch_row($Result);
		if ($row[0]) $Num = $row[0] + 1;
		else 	$Num = 1;
		return $Num;
	}
}

function selectDB_Cnt($db,$value,$where=''){
	if($where) $where=' where '. $where;	
	$Query="select count(". $value.") from ".$db .$where;
	$Result=mysql_query($Query);
	//echo "$Query <br>";
	if (!$Result){
		echo "R=> $Query <br>";
		//Error ('Select Error!!');		
	}else{
		$row = mysql_fetch_row($Result);
		$Num = $row[0];
		return $Num;
	}
}



//DB����
function deleteDB($db,$where='',$url='',$msg=''){
	if($where) $where=' where '. $where; 
	$Query="delete from ". $db .$where;
	$Result=mysql_query($Query); 
	//echo "$Query<br>";
	if (!$Result){ 		
		Error ('Delete Error!!');		
	}else{
		if($url) GO($url,$msg) ;	
		else return $Result;
	}

}

//DB ����
function updateDB($db,$values,$where,$url='',$msg=''){
	if($where) $where=' where '. $where;
	$Query="update ". $db ." set ". $values .$where ;
	$Result=mysql_query($Query);
	 //echo "$Query<br>";
	if (!$Result){
		
		Error ('Update Error!!');
	}else{
		if($url) GO($url,$msg) ;	
	}
}

//DB ������ Option �� �ѷ� �ֱ�
function selectDBOpt($db,$value,$val,$view,$where='',$order='',$sel=''){
	if($where) $where=' where '. $where;
	if($order) $order=' order by '.$order;
	$var='';
		
	//echo "selectDBOpt($db,$value,$val,$view,$where='',$order='',$sel='')";

	$Query="select ". $value." from ".$db .$where .$order ;
	$Result=mysql_query($Query);
	//echo "$Query";
	if (!$Result) Error ('Select Error!!');		
	else{
		while($row=mysql_fetch_array($Result)){
			if($sel) $chk=ifelse($row[$val],$sel,'selected','');
			//echo "$sel !! ";
			$var.="<option value='".$row[$val]."' ".$chk.">".$row[$view]."</option>";		 
		}
	}
	if($var=='')$var="<option value=''>Empty</option>";
	
		return $var;
}

//���°��
function date_to_sec($y, $m, $d){ 
	$MonthArr = array(31,28,31,30,31,30,31,31,30,31,30,31); 

	$y = $y - 1969; 
	$c_date = ($y-1)*365; 
	$c_date += intval(($y-1)/4); 
	$c_date -= intval(($y-1)/100); 
	$c_date += intval(($y-1)/400); 
	for($i=0; $i<$m-1; $i++) 
	$c_date += $MonthArr[$i]; 
	$c_date += $d -1; 
	$c_time = $c_date * 24 * 60 * 60; 
	$c_time += 4 * 60 * 60; 
	return $c_time; 
} 


//�ش��Ϸ� ���� ������ ���� ��¥ �����
function makeday($Stime,$addM){
	$ST=date('Y-m-d-h-i-s',$Stime);
	$ST=explode("-",$ST);  
	$day=mktime($ST[3], $ST[4], $ST[5], $ST[1]+$addM, $ST[2], $ST[0]); 
	return $day;
}
 function makedayYMD($Y,$m,$d,$H='0',$M='0',$s='0'){ 
	$day=mktime($H, $M, $s, $m, $d, $Y); 
	return $day;
}

 function dateYMD($day){ 
	$day=date("Y-m-d",$day); 
	return $day;
}
 
//���� ��¥��� 
function calc_day($Stime,$Etime){  
	if($Stime > $Etime) 	$day = $Stime - $Etime; 
	else 	$day = $Etime - $Stime; 
	$day = floor($day / (24*60*60)); 
	return $day; 
} 

  
function Auto_Div($var,$type=''){
	if(!$type) $type='-';
	$div=explode($type,$var);
	return $div;
}


function Category_Opt($var,$sel='',$url=''){
	//key : value ||
	$div=explode("||",$var);
	for($i=0;$i<sizeof($div);$i++){
		$value=explode(":",$div[$i]);
		if($value[0]){
			$chk='';
			if($sel && $value[0]==$sel)  $chk="selected";
			$opt.="<option value='".$url.$value[0]."' ".$chk.">".$value[1]."</option>";
		}
	}
	return $opt;
}


function Category_Array($var,$sel){ 
	$div=explode("||",$var);
	for($i=0;$i<sizeof($div);$i++){
		$value=explode(":",$div[$i]);
		if($value[0]){ 
			if($sel && $value[0]==$sel)  $opt= $value[1]; 
		}
	}
	return $opt;
}



function Auto_Br($var){
	$var=stripslashes($var);
	$var=nl2br($var);
	return $var;
}

function deletefile($dir,$filename){
	if($filename&&($filename!='none')){
		exec("chmod 777 $dir");	 
		if (!unlink($dir."/".$filename)) Error ('���� ������ �����߽��ϴ�.'); 
		exec("chmod 755 $dir");
	}
}

function replace($div,$var,$re=''){  
	$text=str_replace("$div","$re",$var); 
	return $var;
}

function Exe_chk($exe){
	$File_Ext=explode(".",$exe); // ���� Ȯ���� �˻�
	if (!$exe)$Ext_img='none.gif';
	elseif ($File_Ext[1] == 'bmp' || $File_Ext[1] == 'BMP') $Ext_img='bmp.gif';
	elseif ($File_Ext[1] == 'doc' || $File_Ext[1] == 'DOC') $Ext_img='doc.gif';
	elseif ($File_Ext[1] == 'gif' || $File_Ext[1] == 'GIF') $Ext_img='gif.gif';
	elseif ($File_Ext[1] == 'jpg' || $File_Ext[1] == 'JPG') $Ext_img='jpg.gif';
	elseif ($File_Ext[1] == 'png' || $File_Ext[1] == 'PNG') $Ext_img='png.gif';
	elseif ($File_Ext[1] == 'ppt' || $File_Ext[1] == 'PPT') $Ext_img='ppt.gif';
	elseif ($File_Ext[1] == 'txt' || $File_Ext[1] == 'TXT') $Ext_img='txt.gif';
	elseif ($File_Ext[1] == 'xls' || $File_Ext[1] == 'XLS') $Ext_img='xls.gif';
	elseif ($File_Ext[1] == 'hwp' || $File_Ext[1] == 'HWP') $Ext_img='hwp.gif';
	elseif ($File_Ext[1] == 'ra' || $File_Ext[1] == 'RA' || $File_Ext[1] == 'RAM' || $File_Ext[1] == 'ram' || $File_Ext[1] == 'rm' ||$File_Ext[1] == 'RM') $Ext_img='ra.gif';
	elseif ($File_Ext[1] == 'mpg' || $File_Ext[1] == 'MPG' || $File_Ext[1] == 'MPGE' || $File_Ext[1] == 'mpge'||$File_Ext[1] == 'avi' || $File_Ext[1] == 'AVI') $Ext_img='mpg.gif';
	elseif ($File_Ext[1] == 'wav' || $File_Ext[1] == 'WAV' || $File_Ext[1] == 'MP3' || $File_Ext[1] == 'mp3') $Ext_img='wav.gif';
	elseif ($File_Ext[1] == 'EXE' || $File_Ext[1] == 'exe'|| $File_Ext[1] == 'rpm'|| $File_Ext[1] == 'RPM'  ) $Ext_img='exe.gif';
	elseif ($File_Ext[1] == 'zip' || $File_Ext[1] == 'ZIP' || $File_Ext[1] == 'tar' || $File_Ext[1] == 'tgz' || $File_Ext[1] == 'rar' || $File_Ext[1] == 'RAR') $Ext_img='zip.gif';
	else {$Ext_img='default.gif';}
	return $Ext_img;
}

function deldir($dir){ 
	$handle = opendir($dir); 
	while (false!==($FolderOrFile = readdir($handle))){ 
		if($FolderOrFile != "." && $FolderOrFile != ".."){ 
			if(is_dir("$dir/$FolderOrFile")) deldir("$dir/$FolderOrFile"); 
			else unlink("$dir/$FolderOrFile"); 
		}//if 
	}//while 
	closedir($handle); 
	if(rmdir($dir)) 	$success = true; 
	return $success; 
} 

function Star_Point($var){
	if($var>4.5)$img="s10.gif";	
	elseif($var>4)$img="s9.gif";
	elseif($var>3.5)$img="s8.gif";
	elseif($var>3)$img="s7.gif";
	elseif($var>2.5)$img="s6.gif";
	elseif($var>2)$img="s5.gif";
	elseif($var>1.5)$img="s4.gif";
	elseif($var>1)$img="s3.gif";
	elseif($var>0.5)$img="s2.gif";
	elseif($var>0)$img="s1.gif";	
	elseif( $var=='')$img="none.gif";
	elseif($var==0 )$img="s0.gif";
	//echo "$var  $img // ";
	return $img;
}


function Mail_Send($fromname, $fromaddress, $toname, $toaddress, $subject, $message){ 
	$headers  = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=EUC-KR\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
	$headers .= "Reply-to: \"".$fromname."\" <".$fromaddress.">\n";
	//Win2K3,IIS 6.0,PHP4.4.1  
	//$headers .= "From: \"".$fromaddress."\"\n";

	return mail($toaddress, $subject, $message, $headers);

}


 
 function socketmail($toArray, $subject, $message,$fromname,$mailaddofsender) { 
  // $toArray format --> array("Name1" => "address1", "Name2" => "address2", ...) 

  ini_set(sendmail_from, "$mailaddofsender"); 

  $connect = fsockopen (ini_get("SMTP"), ini_get("smtp_port"), $errno, $errstr, 30) or die("Could not talk to the sendmail server!"); 
  $rcv = fgets($connect, 1024); 
  $date=date("D, d M Y H:i:s +0900");  
  fputs($connect, "HELO {$_SERVER['SERVER_NAME']}\r\n"); 
  $rcv = fgets($connect, 1024); 

  while (list($toKey, $toValue) = each($toArray)) { 

  fputs($connect, "MAIL FROM:$mailaddofsender\r\n"); 
    $rcv = fgets($connect, 1024); 
  fputs($connect, "RCPT TO:$toValue\r\n"); 
    $rcv = fgets($connect, 1024); 
  fputs($connect, "DATA\r\n"); 
    $rcv = fgets($connect, 1024); 

  fputs($connect, "Subject: $subject\r\n"); 
  fputs($connect, "From: $fromname <$mailaddofsender>\r\n"); 
  fputs($connect, "To: $toKey  <$toValue>\r\n"); 
  fputs($connect, "X-Sender: <$mailaddofsender>\r\n"); 
  fputs($connect, "Return-Path: $fromname <$mailaddofsender>\r\n"); 
  fputs($connect, "Errors-To: $fromname <$mailaddofsender>\r\n"); 
  fputs($connect, "X-Mailer: PHP\r\n"); 
  fputs($connect, "X-Priority: 3\r\n"); 
  fputs($connect, "Date: $date\r\n"); 
  fputs($connect, "Content-Type: text/html; charset=euc-kr\r\n"); 
  fputs($connect, "\r\n"); 
  fputs($connect, stripslashes($message)." \r\n"); 

  fputs($connect, ".\r\n"); 
    $rcv = fgets($connect, 1024); 
  fputs($connect, "RSET\r\n"); 
    $rcv = fgets($connect, 1024); 
  } //while 

  fputs ($connect, "QUIT\r\n"); 
  $rcv = fgets ($connect, 1024); 
  fclose($connect); 
  ini_restore(sendmail_from); 
} 


function file_view($file,$dir,$w='550',$addurl=''){
	if($file){ 
		$File_ext=explode(".",$file);
		$File_Size=filesize($_SERVER["DOCUMENT_ROOT"]."/".$dir."/".$file);
		$File_Size=$File_Size*0.001;
		$File_Size=number_format($File_Size);
		$File_ext[1]=strtolower($File_ext[1]); 

		if ($File_ext[1]=='gif' || $File_ext[1]=='jpg' ||	$File_ext[1]=='jpeg' ||	$File_ext[1]=='bmp' ||$File_ext[1]=='png') { 
			$size = GetImageSize($_SERVER["DOCUMENT_ROOT"]."/".$dir."/".$file);
			$width = $size[0];
			$height = $size[1];
			if($width>$w){
				if($addurl){  

					$file_view="<a href=\"javascript:;\" onclick=\"window.open('/_inc/photo.php?Photo=".$file."&".$addurl;
					$file_view.="','MessageWin','width=100,height=100,status=no,scrollbars=no,top=0,left=0');\">";
				}
				$file_view.="<img src='".$dir."/".$file."' width='".$w."' border='0'";				
				$file_view.=" style='border:1px solid #CCCCCC'";				
				if($addurl){
					$file_view.="alt='Ŭ���Ͻø� ���� ũ���� �̹����� ���� �� �ֽ��ϴ�.'></a>";
				}else{
					$file_view.=">";
				}
			}else{
				$file_view="<img src='".$dir."/".$file."' border='0' ";
				//$file_view.=" style='border:1px solid #CCCCCC'";	
				$file_view.=">";
			}
			
		}elseif ($File_ext[1]=='') {
			$file_view='';
		}else {
			$file_view="<a href='".$dir."/".$file."'>$file</a>($File_Size Kb)";
		}	
	}
	return $file_view;
}


function img_file_btn($file,$dir,$addurl='',$pg=''){
	if($file){ 
		$File_ext=explode(".",$file);
		$File_Size=filesize($_SERVER["DOCUMENT_ROOT"]."/".$dir."/".$file);
		$File_Size=$File_Size*0.001;
		$File_Size=number_format($File_Size);
		$File_ext[1]=strtolower($File_ext[1]);  

		if ($File_ext[1]=='gif' || $File_ext[1]=='jpg' ||	$File_ext[1]=='jpeg' ||	$File_ext[1]=='bmp' ||$File_ext[1]=='png') { 	  
			$pg=ifelse($pg,"","/_inc/photo.php?Photo=".$file."&".$addurl,$pg);
 

			$file_view=" <input type='button' value='��� �̹��� ����' onclick=\"window.open('".$pg."',";
			$file_view.="'MessageWin','width=100,height=100,status=no,scrollbars=no,top=0,left=0');\" ";
			$file_view.="style='cursor:hand;border:1px solid #999999;padding-top:3px;height:20px' align='absmiddle'>"; 
		}else {
			$file_view="";
		}	
	}
	return $file_view;
}


function file_view_name($file,$dir,$file_name='',$w='550',$addurl='',$viewmode=''){
	if($file){ 
		if(!$file_name)$file_name=$file;
		$File_ext=explode(".",$file);
		$File_Size=filesize($_SERVER["DOCUMENT_ROOT"]."/".$dir."/".$file);
		$File_Size=$File_Size*0.001;
		$File_Size=number_format($File_Size);
		$File_ext[1]=strtolower($File_ext[1]); 

		if ($viewmode && ($File_ext[1]=='gif' || $File_ext[1]=='jpg' ||	$File_ext[1]=='jpeg' ||	$File_ext[1]=='bmp' ||$File_ext[1]=='png')) {
			$size = GetImageSize($_SERVER["DOCUMENT_ROOT"]."/".$dir."/".$file);
			$width = $size[0];
			$height = $size[1];
			if($width>$w){
				if($addurl){  

					$file_view="<a href=\"javascript:;\" onclick=\"window.open('/_inc/photo.php?Photo=".$file."&".$addurl;
					$file_view.="','MessageWin','width=100,height=100,status=no,scrollbars=no,top=0,left=0');\">";
				}
				$file_view.="<img src='".$dir."/".$file."' width='".$w."' border='0'";				
				$file_view.=" style='border:1px solid #CCCCCC'";				
				if($addurl){
					$file_view.="alt='Ŭ���Ͻø� ���� ũ���� �̹����� ���� �� �ֽ��ϴ�.'></a>";
				}else{
					$file_view.=">";
				}
			}else{
				$file_view="<img src='".$dir."/".$file."' border='0' ";
				//$file_view.=" style='border:1px solid #CCCCCC'";	
				$file_view.=">";
			}
			
		}elseif ($File_ext[1]=='') {
			$file_view='';
		}else {
			$file_view="<a href='/_inc/download.php?files=".$file."&fileN=".$file_name."&dir=".$dir."'  >".$file_name."</a>($File_Size Kb)";
		}	
	}
	return $file_view;
}


// ������ �����ϴ� �Լ���
function newImgSize($oriWidth,$oriHeight,$newWidth,$newHeight){ //�̹��� ������ ����
	$nI1=0;
	$n12=0;
	$nW=0;
	$nH=0;
	$size=array();
	if($oriWidth>$newWidth){
		$nI1=$oriWidth/$newWidth;
		$nH=$oriHeight/$nI1;
		$nW=$newWidth;
		setType($nH,"integer");
	}
	if($nH>$newHeight){
		$nI2=$oriHeight/$newHeight;
		$nW=$oriWidth/$nI2;
		$nH=$newHeight;
		setType($nW,"integer");
	}
	$size[0]=$nW;
	$size[1]=$nH;
	return $size;
}
//�̹��� Ÿ������ ���ο� �̹����� ����
function createImg($num,$img){ 
	if($num==1) return ImageCreateFromGif($img);
	elseif($num==2) return ImageCreateFromJPEG($img);
	elseif($num==3) return ImageCreateFromPng($img);	
}
 //������̹����� ����� ������
function usethumb($pic_path,$vfilename,$vfilename2,$vfilename_small,$smImgName,$use_width,$use_height){
	$imgInfo=GetImageSize("$pic_path/$vfilename2");
	$sWidth=$imgInfo[0]; //�̹�������ũ��
	$sHeight=$imgInfo[1]; //�̹�������ũ��
	$sImgType=$imgInfo[2]; //�̹���Ÿ��
	$sImgSize=newImgSize($sWidth,$sHeight,$use_width,$use_height);
	$oriImg=createImg($sImgType,"$pic_path/$vfilename2");
	$newImg=ImageCreate($sImgSize[0],$sImgSize[1]);
	ImageCopyResized($newImg,$oriImg,0,0,0,0,$sImgSize[0],$sImgSize[1],$imgInfo[0],$imgInfo[1]);
//	ImagePng($newImg,"$pic_path/S".$smImgName.".png");
	ImagePng($newImg,"$pic_path/".$vfilename_small);
	ImageDestroy($newImg);
}




function modiSImg($path,$file){
	$imgInfo=GetImageSize("$path/$file");
	$sWidth=$imgInfo[0]; //�̹�������ũ��
	$sHeight=$imgInfo[1]; //�̹�������ũ��
	$sImgType=$imgInfo[2]; //�̹���Ÿ��
	$sImgSize=newImgSize($sWidth,$sHeight,160,120);
	$oriImg=createImg($sImgType,"$path/$file");
	$newImg=ImageCreate($sImgSize[0],$sImgSize[1]);
	ImageCopyResized($newImg,$oriImg,0,0,0,0,$sImgSize[0],$sImgSize[1],$imgInfo[0],$imgInfo[1]);
	ImagePng($newImg,"$path/S".parseFileName($file).".png");
	ImageDestroy($newImg);

}

function delImgFile($imgList,$path,$thumb){  //�̹������� �� �������������.
	$imgArray=explode("*",$imgList);
	for($i=1;$i<sizeof($imgArray)-1;$i++){
		@unlink("".$path."/".$imgArray[$i]);
		if($thumb){
			$sImgName=explode(".",$imgArray[$i]);
			@unlink("".$path."/S".$sImgName[sizeof($sImgName)-2].".png");
		}
	}
}

function sDelImg($path,$imgfile){ //������̹��� ����
	$sImgName=explode(".",$imgfile);
	@unlink("".$path."/S".$sImgName[sizeof($sImgName)-2].".png");
}

function moveSImg($oldPath,$oldFile,$newPath,$newFile){ //������̹��� �̵�
	$oldSFile=parseFileName($oldFile);
	$newSFile=parseFileName($newFile);
	@copy("".$oldPath."/S".$oldSFile.".png","".$newPath."/S".$newSFile.".png");
	@unlink("".$oldPath."/S".$oldSFile.".png");
}

 //������̹��� �̸� �м� �����̸��� img.img.img.gif�� �������� �Ǿ� ���� �� img.img.img�� �̸��� ��� ����.
function parseFileName($file){
	$fileName="";	
	$dotList=explode(".",$file);
	if(sizeof($dotList)==2) return $dotList[0];
	elseif(sizeof($dotList)>2){
		for($i=0;$i<sizeof($dotList-1);$i++){
			if($i==0) $dot="";
			else $dot=".";
			$fileName.=$dot.$dotList[$i];
		}
		return $fileName;
	}
}


//======================================= 
//  ����ũ�⸦ KB, MB, etc ��ȯ�ؼ� ����
//
//  �Ķ����
//    $size  : �������� ������
//
//  ���ϰ�
//          ���� ���� ��� 0 Byte ����
//          1024 Byte �̸��ϰ�� Byte�� ����
//          1024 Byte * 1024�� ���� �� �̳��ϰ�� KB�� ����
//			�� �̻��� ��� MB�� ����
//========================================== 
function get_size($size) {
	if(!$size) return "0 Byte";
	if($size<1024) { 
		return ($size." Byte");
	} elseif($size >1024 && $size< 1024 *1024)  {
		return sprintf("%0.1f KB",$size / 1024);
	}
	else return sprintf("%0.2f MB",$size / (1024*1024));
}

function Board_Title_Category($var,$key){
	//key : value ||
	$div=explode("||",$var);
	for($i=0;$i<sizeof($div);$i++){
		$value=explode(":",$div[$i]);
		if($value[0]){ 
			if($key && $value[0]==$key)  return   $value[1]; 
		}
	}
	
}


?>