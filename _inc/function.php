<?
###  글자수 자르기 ####
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


//글자수 제한
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


##------------------------ 회원등급 설정 -------------------------------##
function Grade($a) {
	switch($a) {
		case(1) :
			$Grade="준회원";
			break;
		case(2) :
			$Grade="정회원";
			break;
		case(3) :
			$Grade="부시샆";
			break;
		case(4) :
			$Grade="시샆";
			break;
		default :
			echo"변수의 값을 알수 없습니다";
	}
	return $Grade;
}

//입력한 정보가 틀리면 이전 페이지로 돌아보내는 기능
function Error($Message) {
echo ("
	<script language='javascript'>
	window.alert('$Message')
	history.go(-1)
	</script>
	");
	exit;
}

//입력한 정보가 틀리면 이전 페이지로 돌아보내는 기능
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

// 입력한 이메일이 형식에 맞는 정확한 이메일인지 판단
function Email_Check($Email_Address) {
return (ereg('^[-!#$%&\'*+\./0-9=?A-Z^_a-z{|}~]+'.'@'.
	'[-!#$%&\'*+\/0-9=?A-Z^_a-z{|}~]+\.'.
	'[-!#$%&\'*+\./0-9=?A-Z^_a-z{|}~]+$',
	$Email_Address));
}

//비교 선택하기
function ifelse($base,$div,$yes,$no=''){
	if($base==$div) return $yes;
	else return $no;
}

//비교 선택하기
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

//배열 자동옵션
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

//자동 증가 옵션
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


//IMAGE 파일 업로드
function fileupload($File,$SaveDir,$File_name,$File_size,$div='',$oldfile=''){
	if ($File != 'none' && $File !='') { // 파일을 선택한 경우에 실행
		$File_Dir = $SaveDir;
		$max_file_size=10248576 ; 
		$max_file_size_M='1M';
		$File_ext = explode(".", "$File_name");
		$Extension = $File_ext[sizeof($File_ext)-1];
		$Extension=strtolower($Extension);
		if($div) $saveName=$div."_".time().".".$Extension;
		else $saveName=time().".".$Extension;
		// 파일 확장자 검사

		if ($Extension !="jpg" && $Extension!="gif" && $Extension!="jpge")
			Error ($Extension.'는 허용되지 않은 파일 확장자 입니다.\n\ngif, jpg, jpge 파일만 올려 주세요.');
	 
		if ($File_size >$max_file_size )  
			Error ($File_name."은 설정된 업로드 용량(".$max_file_size_M."byte)을 초과하였습니다"); 
		 

		// 동일명 파일 검사
		$Same_File_Name = file_exists($SaveDir."/$saveName");
		if ($Same_File_Name)  Error ('현재 게시판에 동일명의 파일이 존재합니다.'); 
		//for( $i=0; file_exists( $SaveDir."/$saveName" ); $i++ )
        //        $saveName = $saveName."_".$i;



		// 자료를 저장할 디렉토리 퍼미션 변경
		exec("chmod 777 $SaveDir");
		
		// 지정 디렉토리에 파일 복사
		if (!copy($File,$SaveDir."/$saveName"))  Error ('파일 복사에 실패했습니다.'); 

		// 임시 파일 삭제
		if (!unlink($File)) Error ('파일 삭제에 실패했습니다.'); 
		if ($oldfile && !unlink($SaveDir."/".$oldfile)) Error ('예전 파일 삭제에 실패했습니다.'); 

		// 자료를 저장후 디렉토리 퍼미션 변경
		exec("chmod 755 $SaveDir");
	}else{
		$saveName=$oldfile;
	}	 
	return $saveName;
	
}

//파일 업로드
function fileupload_all($File,$SaveDir,$File_name,$File_size,$div='',$oldfile=''){
if ($File != 'none' && $File !='') { // 파일을 선택한 경우에 실행
	$File_Dir = $SaveDir;
	$max_file_size=10248576 ; 
	$max_file_size_M='1M';
	$File_ext = explode(".", "$File_name");
	$Extension = $File_ext[sizeof($File_ext)-1];
	$Extension=strtolower($Extension);
	if($div) $saveName=$div."_".time().".".$Extension;
	else $saveName=time().".".$Extension;
	// 파일 확장자 검사
	
	if (!strcmp($Extension,"htm") ||	!strcmp($Extension,"html") || !strcmp($Extension,"phtml") || !strcmp($Extension,"php") ||	!strcmp($Extension,"php3") || !strcmp($Extension,"php4") ||		!strcmp($Extension,"inc") || !strcmp($Extension,"pl") || !strcmp($Extension,"cgi") ||		!strcmp($Extension,"txt")) 	Error ('허용되지 않은 파일 확장자 입니다.');

	if ($File_size >$max_file_size )  
		Error ($File_name."은 설정된 업로드 용량(".$max_file_size_M."byte)을 초과하였습니다"); 
	 

	// 동일명 파일 검사
	$Same_File_Name = file_exists($SaveDir."/$saveName");
	if ($Same_File_Name)  Error ('현재 게시판에 동일명의 파일이 존재합니다.'); 

	// 자료를 저장할 디렉토리 퍼미션 변경
	exec("chmod 777 $SaveDir");
	
	// 지정 디렉토리에 파일 복사
	if (!copy($File,$SaveDir."/$saveName"))  Error ('파일 복사에 실패했습니다.'); 

	// 임시 파일 삭제
	if (!unlink($File)) Error ('파일 삭제에 실패했습니다.'); 
	if ($oldfile && !unlink($SaveDir."/".$oldfile)) Error ('예전 파일 삭제에 실패했습니다.'); 

	// 자료를 저장후 디렉토리 퍼미션 변경
	exec("chmod 755 $SaveDir");
	}else{
		$saveName=$oldfile;
	}	 
	return $saveName;
	
}



//페이징
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

//DB 생성
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


//DB 삽입
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

//DB 선택
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



//DB삭제
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

//DB 수정
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

//DB 선택후 Option 값 뿌려 주기
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

//음력계산
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


//해당일로 부터 지정달 까지 날짜 만들기
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
 
//남은 날짜계산 
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
		if (!unlink($dir."/".$filename)) Error ('파일 삭제에 실패했습니다.'); 
		exec("chmod 755 $dir");
	}
}

function replace($div,$var,$re=''){  
	$text=str_replace("$div","$re",$var); 
	return $var;
}

function Exe_chk($exe){
	$File_Ext=explode(".",$exe); // 파일 확장자 검사
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
					$file_view.="alt='클릭하시면 원래 크기의 이미지를 보실 수 있습니다.'></a>";
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
 

			$file_view=" <input type='button' value='등록 이미지 보기' onclick=\"window.open('".$pg."',";
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
					$file_view.="alt='클릭하시면 원래 크기의 이미지를 보실 수 있습니다.'></a>";
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


// 섬네일 생성하는 함수들
function newImgSize($oriWidth,$oriHeight,$newWidth,$newHeight){ //이미지 사이즈 조정
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
//이미지 타입으로 새로운 이미지를 만듬
function createImg($num,$img){ 
	if($num==1) return ImageCreateFromGif($img);
	elseif($num==2) return ImageCreateFromJPEG($img);
	elseif($num==3) return ImageCreateFromPng($img);	
}
 //썸네일이미지를 만들어 저장함
function usethumb($pic_path,$vfilename,$vfilename2,$vfilename_small,$smImgName,$use_width,$use_height){
	$imgInfo=GetImageSize("$pic_path/$vfilename2");
	$sWidth=$imgInfo[0]; //이미지가로크기
	$sHeight=$imgInfo[1]; //이미지세로크기
	$sImgType=$imgInfo[2]; //이미지타입
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
	$sWidth=$imgInfo[0]; //이미지가로크기
	$sHeight=$imgInfo[1]; //이미지세로크기
	$sImgType=$imgInfo[2]; //이미지타입
	$sImgSize=newImgSize($sWidth,$sHeight,160,120);
	$oriImg=createImg($sImgType,"$path/$file");
	$newImg=ImageCreate($sImgSize[0],$sImgSize[1]);
	ImageCopyResized($newImg,$oriImg,0,0,0,0,$sImgSize[0],$sImgSize[1],$imgInfo[0],$imgInfo[1]);
	ImagePng($newImg,"$path/S".parseFileName($file).".png");
	ImageDestroy($newImg);

}

function delImgFile($imgList,$path,$thumb){  //이미지파일 및 썸네일파일제거.
	$imgArray=explode("*",$imgList);
	for($i=1;$i<sizeof($imgArray)-1;$i++){
		@unlink("".$path."/".$imgArray[$i]);
		if($thumb){
			$sImgName=explode(".",$imgArray[$i]);
			@unlink("".$path."/S".$sImgName[sizeof($sImgName)-2].".png");
		}
	}
}

function sDelImg($path,$imgfile){ //썸네일이미지 제거
	$sImgName=explode(".",$imgfile);
	@unlink("".$path."/S".$sImgName[sizeof($sImgName)-2].".png");
}

function moveSImg($oldPath,$oldFile,$newPath,$newFile){ //썸네일이미지 이동
	$oldSFile=parseFileName($oldFile);
	$newSFile=parseFileName($newFile);
	@copy("".$oldPath."/S".$oldSFile.".png","".$newPath."/S".$newSFile.".png");
	@unlink("".$oldPath."/S".$oldSFile.".png");
}

 //썸네일이미지 이름 분석 파일이름이 img.img.img.gif의 형식으로 되어 있을 때 img.img.img란 이름을 얻기 위함.
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
//  파일크기를 KB, MB, etc 변환해서 리턴
//
//  파라미터
//    $size  : 실제파일 사이즈
//
//  리턴값
//          값이 없을 경우 0 Byte 리턴
//          1024 Byte 미만일경우 Byte로 리턴
//          1024 Byte * 1024를 곱한 값 이내일경우 KB로 리턴
//			그 이상일 경우 MB로 리턴
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