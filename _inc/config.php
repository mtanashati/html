<?
$Webmaster_mail = 'webmaster@localhost';
$Main_Mail = 'webmaster@localhost';
$RPath="";
$Program_Path = $_SERVER["DOCUMENT_ROOT"].$RPath;// ���α׷� ��ġ�� ������
$Html_Path = $Program_Path."/html";// ���α׷� ��ġ�� ������
$Include_Path = $Program_Path.'/_inc';// �������� ������ 
require_once $Include_Path."/db_info.inc"; 
$Admin_URL="/_admin";
$Admin_Path=$Program_Path.'/_admin';
$AdminBbs_Path= $Admin_Path.'/Board'; //������ �Խ���  
$AdminBbs_Dir= $Admin_URL.'/Board'; //������ �Խ���  
$AdminBSkin_Dir=$RPath.'/_admin/Board/Skin'; //�Խ��� Skin ����
$AdminBoard_Path= $Admin_Path.'/Board/html'; //������ �Խ���  

$AdminGal_Path= $Admin_Path."/gallery";
$AdminGSkin_Dir=$RPath.'/_admin/gallery/Skin'; //�Խ��� Skin ����
$AdminGallery_Path= $Admin_Path.'/gallery/html'; //������ �Խ���  

$AdminHtml_Path=$Admin_Path."/html";
$View_Admin_Img=$RPath."/_admin/image";
$View_Admin=$RPath."/_admin";

$Member_Path=$Program_Path.'/_member';
$Member_Html_Path=$Program_Path.'/_member/html';
$Member_Img_Path=$RPath.'/_member/img';
$Member_Dir=$RPath.'/_member'; 


$Popup_Dir=$Upload_Dir."/popup"; // �˾��̹���  


$bbs_Dir=$Program_Path.'/_Board'; //�Խ��� 
$bbsDir=$RPath.'/_Board'; //�Խ��� 
$BFlie_Dir=$bbs_Dir."/upload"; //�Խ��� ���ε� ����
$BSkin_Dir=$RPath.'/_Board/Skin'; //�Խ��� Skin ����
$BUView_Dir=$RPath.'/_Board/upload'; //�Խ���
$BImgView_Dir=$RPath.'/_Board/img'; //�Խ���
$Board_Dir=$bbs_Dir.'/html'; //�Խ���  ����


$Gallery_Dir=$Program_Path.'/Gallery'; //Gallery
$Gal_Dir=$Gallery_Dir.'/html'; //Gallery  ����
$Upload_Dir=$Program_Path."/_upload"; //���ε� ���丮 
$VUpload_Dir=$RPath."/_upload"; //���ε� ���丮 

$Event_Dir=$Upload_Dir."/EVENT"; //���ε� ���丮 
$EventDir=$VUpload_Dir."/EVENT"; //���ε� ���丮 
$News_Dir=$Upload_Dir."/NEWS";
$NewsDir=$VUpload_Dir."/NEWS";
$p_Dir=$Upload_Dir."/PEOPLE";
$pDir=$VUpload_Dir."/PEOPLE";

$o_Dir=$Upload_Dir."/ORDER";
$oDir=$VUpload_Dir."/ORDER";

 
$MainPage=$RPath."/index.php";
$tcenterPage=$RPath."/read/index.php";
$tcenter2Page=$RPath."/read/index2.php";

$Mscale = '2';						
$Mpage_scale = '2';					

##------------------------ �����ͺ��̽� ���̺� -------------------------##
$Admin_Table='admin_info';//��ü ������ ����Ʈ
$AM_Table='admin_menu';//�޴�
$AP_Table='admin_popup';//�˾�â
$BA_Table='board_admin'; //�Խ��� ������
$cmd_table="common";//�⺻ ���� ���̺�
$E_Table="event"; //�̺�Ʈ ���̺�
$M_Table="member";//ȸ������
$mo_table='mobile_order'; 
$N_table="news";//���
$NC_table="news_comment";//����ڸ�Ʈ
$NS_table="news_scrap";//��� ��ũ��
$order_Table="estimate";//�����������̺�
$P_Table='people';//�ι�
$SK_Table='search_keyword';//�α�˻���
$Post_Table='zip_code';//�����ȣ
$popup="Popup_List";//�˾�����Ʈ
$s_table="subscription";//������û
$tc_table='tcenter';//T-���� �ֹ�


##------------------------ ���� ���� ------------------------------------##
$time=time();
$now_Y=date('Y',$time);
$now_M=date('m',$time);
$now_D=date('d',$time);
$now_H=date('H',$time);

$MAdminID='admin';
$MAdminPass='master';
$DOCUMENT_ROOT=$_SERVER["DOCUMENT_ROOT"].$RPath;
$HTTP_HOST=$_SERVER["HTTP_HOST"];
$REMOTE_ADDR=$_SERVER["REMOTE_ADDR"];
$REQUEST_URI=$_SERVER["REQUEST_URI"];
$SERVER_NAME=$_SERVER["SERVER_NAME"];
$SCRIPT_NAME=$_SERVER["SCRIPT_NAME"];

$PHP_SELF=$_SERVER["PHP_SELF"];      
$QUERY_STRING=$_SERVER["QUERY_STRING"];
$session_insert_name=$_SESSION["session_admin_name"];
$session_insert_email=$_SESSION['session_insert_email'];
$session_insert_id=$_SESSION['session_admin_id'];
$session_insert_grade=$_SESSION['session_admin_grade'];

if(!$session_user_num)$session_user_num=$_SESSION[session_user_num];
if(!$session_user_name)$session_user_name=$_SESSION[session_user_name];
if(!$session_user_email)$session_user_email=$_SESSION[session_user_email];
if(!$session_user_id)$session_user_id=$_SESSION[session_user_id];
if(!$session_user_grade)$session_user_grade=$_SESSION[session_user_grade];

##------------------------ �������� ȯ�漳�� ---------------------------##
$Notice_Board = 'Notice';
$Notice_Skin = $Site_URL. '/_Board/Skin/Default';
$Nscale = '20';								// �������� �������� �ۼ�
$Npage_scale = '5';						// �������� �������� ��ũ��

// ���ڼ� ���� �� �ڸ���.
$conf_title_length = "35";					// �������� ���ο� �Ѹ��� Ÿ��Ʋ �ۼ�
$conf_title_length2 = "95";				// �������� ���ο� �Ѹ��� Ÿ��Ʋ �����

##------------------------ �����ͺ��̽� �����Լ� -----------------------##
// ������ ���̽� ���� ȯ�漳��

if ($Database){
	$DB_Connect= mysql_connect("$Host","$DBUser","$DBUser_Pass") || die("�����ͺ��̽� ���ῡ �����Ͽ����ϴ�.");
	$Result = mysql_select_db("$Database");
	if (!$Result) {
	   echo "������ ���̽� ���� �����Դϴ�.";
	   exit;
	}
}
//
require_once $Include_Path."/array.php";
require_once $Include_Path."/function.php";
?>
