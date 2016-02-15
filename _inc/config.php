<?
$Webmaster_mail = 'webmaster@localhost';
$Main_Mail = 'webmaster@localhost';
$RPath="";
$Program_Path = $_SERVER["DOCUMENT_ROOT"].$RPath;// 프로그램 설치된 절대경로
$Html_Path = $Program_Path."/html";// 프로그램 설치된 절대경로
$Include_Path = $Program_Path.'/_inc';// 공통파일 절대경로 
require_once $Include_Path."/db_info.inc"; 
$Admin_URL="/_admin";
$Admin_Path=$Program_Path.'/_admin';
$AdminBbs_Path= $Admin_Path.'/Board'; //관리자 게시판  
$AdminBbs_Dir= $Admin_URL.'/Board'; //관리자 게시판  
$AdminBSkin_Dir=$RPath.'/_admin/Board/Skin'; //게시판 Skin 파일
$AdminBoard_Path= $Admin_Path.'/Board/html'; //관리자 게시판  

$AdminGal_Path= $Admin_Path."/gallery";
$AdminGSkin_Dir=$RPath.'/_admin/gallery/Skin'; //게시판 Skin 파일
$AdminGallery_Path= $Admin_Path.'/gallery/html'; //관리자 게시판  

$AdminHtml_Path=$Admin_Path."/html";
$View_Admin_Img=$RPath."/_admin/image";
$View_Admin=$RPath."/_admin";

$Member_Path=$Program_Path.'/_member';
$Member_Html_Path=$Program_Path.'/_member/html';
$Member_Img_Path=$RPath.'/_member/img';
$Member_Dir=$RPath.'/_member'; 


$Popup_Dir=$Upload_Dir."/popup"; // 팝업이미지  


$bbs_Dir=$Program_Path.'/_Board'; //게시판 
$bbsDir=$RPath.'/_Board'; //게시판 
$BFlie_Dir=$bbs_Dir."/upload"; //게시판 업로드 파일
$BSkin_Dir=$RPath.'/_Board/Skin'; //게시판 Skin 파일
$BUView_Dir=$RPath.'/_Board/upload'; //게시판
$BImgView_Dir=$RPath.'/_Board/img'; //게시판
$Board_Dir=$bbs_Dir.'/html'; //게시판  파일


$Gallery_Dir=$Program_Path.'/Gallery'; //Gallery
$Gal_Dir=$Gallery_Dir.'/html'; //Gallery  파일
$Upload_Dir=$Program_Path."/_upload"; //업로드 디렉토리 
$VUpload_Dir=$RPath."/_upload"; //업로드 디렉토리 

$Event_Dir=$Upload_Dir."/EVENT"; //업로드 디렉토리 
$EventDir=$VUpload_Dir."/EVENT"; //업로드 디렉토리 
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

##------------------------ 데이터베이스 테이블 -------------------------##
$Admin_Table='admin_info';//전체 관리자 리스트
$AM_Table='admin_menu';//메뉴
$AP_Table='admin_popup';//팝업창
$BA_Table='board_admin'; //게시판 관리자
$cmd_table="common";//기본 공통 테이블
$E_Table="event"; //이벤트 테이블
$M_Table="member";//회원정보
$mo_table='mobile_order'; 
$N_table="news";//기사
$NC_table="news_comment";//기사코멘트
$NS_table="news_scrap";//기사 스크랩
$order_Table="estimate";//견적문의테이블
$P_Table='people';//인물
$SK_Table='search_keyword';//인기검색어
$Post_Table='zip_code';//우편번호
$popup="Popup_List";//팝업리스트
$s_table="subscription";//구독신청
$tc_table='tcenter';//T-셔츠 주문


##------------------------ 공통 변수 ------------------------------------##
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

##------------------------ 공지사항 환경설정 ---------------------------##
$Notice_Board = 'Notice';
$Notice_Skin = $Site_URL. '/_Board/Skin/Default';
$Nscale = '20';								// 공지사항 페이지당 글수
$Npage_scale = '5';						// 공지사항 페이지당 링크수

// 글자수 많을 때 자르기.
$conf_title_length = "35";					// 공지사항 메인에 뿌리는 타이틀 글수
$conf_title_length2 = "95";				// 공지사항 메인에 뿌리는 타이틀 내용수

##------------------------ 데이터베이스 연결함수 -----------------------##
// 데이터 베이스 연결 환경설정

if ($Database){
	$DB_Connect= mysql_connect("$Host","$DBUser","$DBUser_Pass") || die("데이터베이스 연결에 실패하였습니다.");
	$Result = mysql_select_db("$Database");
	if (!$Result) {
	   echo "데이터 베이스 연결 에러입니다.";
	   exit;
	}
}
//
require_once $Include_Path."/array.php";
require_once $Include_Path."/function.php";
?>
