<?php 
require $_SERVER["DOCUMENT_ROOT"]."/_inc/config.php";
require $Include_Path."/class.rFastTemplate.php";
$template = array ($Include_Path."/html");
$tpl = new rFastTemplate($template);  
$tpl->set_root ($template);
$tpl->define(array('content'=> "photo.html"));  
if($mode=='Map') {
	$Dir=$Map_Dir;
	$VDir=$MapDir;
	$title='�൵';
}elseif($mode=='menu'){
	$Dir=$Menu_Dir;
	$VDir=$MenuDir;
	$title='�޴�';
}elseif($mode=='photo'){
	$Dir=$Photo_Dir;
	$VDir=$PhotoDir;
	$title=$Site_Name;
}elseif($mode=='order'){
	$Dir=$o_Dir;
	$VDir=$oDir;
	$title=$Site_Name;
}elseif($mode=='board'){
	$Dir=$BFlie_Dir."/".$DB;
	$VDir=$BUView_Dir."/".$DB;
	$title=$Site_Name;
} elseif($mode=='dir'){
	$Dir=${$dir};
	$VDir=str_replace($_SERVER["DOCUMENT_ROOT"],"",$Dir); 
	$title="�󼼺���";
}else{
	echo "
		<script>
		window.alert('������ ���Ͽ� ������ �߻��Ͽ����ϴ�.');
		self.close();
		</script>
	   ";
	exit;
}



$src_img = $Dir . "/" . $Photo;
$size = GetImageSize($src_img);
$width = $size[0]+10;
$height = $size[1]+28;

$img = $VDir."/".$Photo;
$tpl->assign ('img',$img); 
$tpl->assign ('title',$title); 
$tpl->assign ('width',$width); 
$tpl->assign ('height',$height); 
$tpl->parse ('CONTENT', 'content');
$tpl->FastPrint();
exit;
?>
