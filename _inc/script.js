// 매크로미디어 온오버 이미지
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
 
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function Message_Win(ref) {
        var window_left = (screen.width-640)/2;
        var window_top = (screen.height-480)/2;
        window.open(ref,"MessageWin",'width=550,height=400,status=no,scrollbars=yes,top=' + window_top + ',left=' + window_left + ''
);
}


function WinOpen(url,w,h,s,t,l) {
        window.open(url,"MessageWin","width="+w+",height="+h+",status=no,scrollbars="+s+",top="+t+",left="+l+"");
}

 

// 상품검색
function topSearch(Form){ 
	if (Form.keyword.value==""){
		alert("검색어를 입력하여 주십시요.");
		Form.keyword.focus();
		return false;
	}
}
 
 function peopleSearch(Form){ 
	if (Form.name.value==""){
		alert("검색하실 인물의 이름을 입력하여 주십시요.");
		Form.name.focus();
		return false;
	}
}
 

//숫자 검색 자바스트립트
function Check_Num(tocheck) {
		var isnum = true;

		if (tocheck == null || tocheck == "") {
				isnum = false;
				return isnum;
		}

		for (var j = 0 ; j < tocheck.length; j++) {
				if (tocheck.substring(j, j + 1) != "0" &&
					tocheck.substring(j, j + 1) != "1" &&
					tocheck.substring(j, j + 1) != "2" &&
					tocheck.substring(j, j + 1) != "3" &&
					tocheck.substring(j, j + 1) != "4" &&
					tocheck.substring(j, j + 1) != "5" &&
					tocheck.substring(j, j + 1) != "6" &&
					tocheck.substring(j, j + 1) != "7" &&
					tocheck.substring(j, j + 1) != "8" &&
					tocheck.substring(j, j + 1) != "9") {
						isnum = false;
				}
		}
		return isnum;
}
 
function checkLogin(Login) {
	if (!Login.ID.value) {
		alert("아이디(ID)를 입력하세요!");
		Login.ID.focus();
		return false;
	}

	if (!Login.Pass.value) {
		alert("비밀번호를 입력하세요!");
		Login.Pass.focus();
		return false;
	}
	return;
}

function CheckText(url){
	document.loginform.action = url;
	document.loginform.submit();
	return;
}

//큰사진 보기
function photoWindow(ref,L,M,P) {
	winObj = window.open('_inc/'+ref+'?'+'Large='+L+'&Middle='+M+'&Photo='+P, 'View', 'width=100,height=100');
}
 
// 우편번호 검색
function zip_chk(ref,a) {  
	var window_left = (screen.width-640)/2;
	var window_top = (screen.height-480)/2;
	window.open(ref+"?a="+a,"IDcheck",'width=400,height=240,status=no,scrollbars=yes,top=' + window_top + ',left=' + window_left + ''); 
}
// 중복 아이디 체크
function ID_chk(url) {	
		 
		if(Join.ID.value==""){
			alert('아이디(ID)를 입력하신 후에 확인하세요!');
			Join.ID.focus();
			return;
		
		}else if (Join.ID.value.length < 4 || Join.ID.value.length > 10) {
			alert("ID는 4~10자리입니다.");
			Join.ID.focus();
			return false;
			 
		} else {
			ref = url+"?U_ID=" + Join.ID.value;
			var window_left = (screen.width-640)/2;
			var window_top = (screen.height-480)/2;
			window.open(ref,"IDcheck",'width=400,height=250,status=no,top=' + window_top + ',left=' + window_left + '');
		}
}
function email_chk(word) {
	var str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890-._@";
	
	for (i=0; i< word.length; i++)
	{
		idcheck = word.charAt(i);
		
		for ( j = 0 ;  j < str.length ; j++){
		
			if (idcheck == str.charAt(j)) break;
				
     			if (j+1 == str.length){
   				return false;
     			}
     		}
     	}
     	return true;
}
function hangul_chk(word) {
	var str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890-";
	
	for (i=0; i< word.length; i++)
	{
		idcheck = word.charAt(i);
		
		for ( j = 0 ;  j < str.length ; j++){
		
			if (idcheck == str.charAt(j)) break;
				
     			if (j+1 == str.length){
   				return false;
     			}
     		}
     	}
     	return true;
}

	 function Check_Num(tocheck) {
		var isnum = true;

		if (tocheck == null || tocheck == "") {
				isnum = false;
				return isnum;
		}

		for (var j = 0 ; j < tocheck.length; j++) {
				if (tocheck.substring(j, j + 1) != "0" &&
					tocheck.substring(j, j + 1) != "1" &&
					tocheck.substring(j, j + 1) != "2" &&
					tocheck.substring(j, j + 1) != "3" &&
					tocheck.substring(j, j + 1) != "4" &&
					tocheck.substring(j, j + 1) != "5" &&
					tocheck.substring(j, j + 1) != "6" &&
					tocheck.substring(j, j + 1) != "7" &&
					tocheck.substring(j, j + 1) != "8" &&
					tocheck.substring(j, j + 1) != "9") {
						isnum = false;
				}
		}
		return isnum;
}

function CheckJoin(Join){ 
	if (Join.U_Name.value==""){
		alert("이름을 입력하여 주십시요.");
		Join.U_Name.focus();
		return false;
	}
   	for (var k = 0; k <= (Join.U_Name.value.length - 1); k++)
         	if (Join.U_Name.value.indexOf(" ") >= 0 ){
             		alert ("성명을 빈칸없이 붙여서 입력하여 주십시오");
             		Join.U_Name.focus();
             		return (false);
           	} 
	if (Join.U_ID.value==""){
		alert("ID 를 입력하여 주십시요.");
		Join.U_ID.focus();
		return false;
	}
	if (hangul_chk(Join.U_ID.value) != true ){
		alert("ID에 한글이나 여백은 사용할 수 없습니다.");
		Join.U_ID.focus();
	 	return false;
	}
	if (Join.U_ID.value.length < 4 || Join.U_ID.value.length > 10) {
		alert("ID는 4~10자리입니다.");
		Join.U_ID.focus();
		return false;
	}
	if (Join.U_Pass.value==""){
		alert("비밀번호를 입력하여 주십시요.");
		Join.U_Pass.focus();
		return false;
	}
	if (hangul_chk(Join.U_Pass.value) != true ){
		alert("비밀번호에 한글이나 여백은 사용할 수 없습니다.");
		Join.U_Pass.focus();
	 	return false;
	}
	if (Join.U_Pass.value.length < 4 || Join.U_Pass.value.length > 10) {
		alert("비밀번호는 4~10자리입니다.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.U_Pass2.value==""){
		alert("비밀번호 확인을 입력하여 주십시요.");
		Join.U_Pass2.focus();
		return false;
	}
	if (Join.U_Pass.value!==Join.U_Pass2.value){
		alert("비밀번호가 일치하지 않습니다. 다시 입력하여 주십시요.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.Email.value==""){
		alert("이메일 주소를 입력하여 주십시요.");
		Join.Email.focus();
		return false;
	}
	if (email_chk(Join.Email.value) != true ){
		alert("이메일 주소에 한글이나 여백은 사용할 수 없습니다.");
		Join.Email.focus();
	 	return false;
	}

	// 주민등록번호 체크 	
	var chk =0
	var yy = Join.Reg_Num1.value.substring(0,2)
	var mm = Join.Reg_Num1.value.substring(2,4)
	var dd = Join.Reg_Num1.value.substring(4,6)
	var Sex = Join.Reg_Num2.value.substring(0,1)

 	if ((Join.Reg_Num1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){
    		alert ("주민등록번호를 바로 입력하여 주십시오.");
    		Join.Reg_Num1.focus();
    		return (false);
  	}

  	if ((Sex != 1 && Sex !=2 )||(Join.Reg_Num2.value.length != 7 )){
    		alert ("주민등록번호를 바로 입력하여 주십시오.");
    		Join.Reg_Num2.focus();
    		return (false);
  	}   
	
  	for (var i = 0; i <=5 ; i++){ 
		chk = chk + ((i%8+2) * parseInt(Join.Reg_Num1.value.substring(i,i+1)))
 	}

  	for (var i = 6; i <=11 ; i++){ 
        	chk = chk + ((i%8+2) * parseInt(Join.Reg_Num2.value.substring(i-6,i-5)))
 	}

  	chk = 11 - (chk %11)
  	chk = chk % 10

  	if (chk != Join.Reg_Num2.value.substring(6,7)){
    		alert ("유효하지 않은 주민등록번호입니다.");
    		Join.Reg_Num1.focus();
    		return (false);
  	}
	// 주민등록번호 체크 끝

	if (Join.Zip1.value==""){
		alert("우편번호를 입력하여 주십시요.");
		Join.Zip1.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip1.value);
        if (!thisfilednum) {
            alert("우편번호는 숫자만 가능합니다.");
            Join.Zip1.focus();
            return;
        }
	}
	
	if (Join.Zip2.value==""){
		alert("우편번호를 입력하여 주십시요.");
		Join.Zip2.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip2.value);
        if (!thisfilednum) {
            alert("우편번호는 숫자만 가능합니다.");
            Join.Zip2.focus();
            return;
        }
	}
	
	if (Join.Region.value==""){
		alert("지역을 입력하여 주십시요.");
		Join.Region.focus();
		return false;
	}
	if (Join.Address.value==""){
		alert("주소를 입력하여 주십시요.");
		Join.Address.focus();
		return false;
	}
	if (Join.Address_Ext.value==""){
		alert("세부주소를 입력하여 주십시요.");
		Join.Address_Ext.focus();
		return false;
	}
	if (Join.Phone_1.value==""){
		alert("연락처를 입력하셔야 합니다.");
		Join.Phone_1.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("연락처를 입력하셔야 합니다.");
		Join.Phone_2.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("연락처를 입력하셔야 합니다.");
		Join.Phone_2.focus();
		return false;
	}
}


function CheckModify(Join){ 
	if (Join.U_Pass.value==""){
		alert("비밀번호를 입력하여 주십시요.");
		Join.U_Pass.focus();
		return false;
	}
	if (hangul_chk(Join.U_Pass.value) != true ){
		alert("비밀번호에 한글이나 여백은 사용할 수 없습니다.");
		Join.U_Pass.focus();
	 	return false;
	}
	if (Join.U_Pass.value.length < 4 || Join.U_Pass.value.length > 10) {
		alert("비밀번호는 4~10자리입니다.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.U_Pass2.value==""){
		alert("비밀번호 확인을 입력하여 주십시요.");
		Join.U_Pass2.focus();
		return false;
	}
	if (Join.U_Pass.value!==Join.U_Pass2.value){
		alert("비밀번호가 일치하지 않습니다. 다시 입력하여 주십시요.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.Email.value==""){
		alert("이메일 주소를 입력하여 주십시요.");
		Join.Email.focus();
		return false;
	}
	if (email_chk(Join.Email.value) != true ){
		alert("이메일 주소에 한글이나 여백은 사용할 수 없습니다.");
		Join.Email.focus();
	 	return false;
	}

	if (Join.Zip1.value==""){
		alert("우편번호를 입력하여 주십시요.");
		Join.Zip1.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip1.value);
        if (!thisfilednum) {
            alert("우편번호는 숫자만 가능합니다.");
            Join.Zip1.focus();
            return false;
        }
	}
	
	if (Join.Zip2.value==""){
		alert("우편번호를 입력하여 주십시요.");
		Join.Zip2.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip2.value);
        if (!thisfilednum) {
            alert("우편번호는 숫자만 가능합니다.");
            Join.Zip2.focus();
            return false;
        }
	}
	
	if (Join.Region.value==""){
		alert("지역을 입력하여 주십시요.");
		Join.Region.focus();
		return false;
	}
	if (Join.Address.value==""){
		alert("주소를 입력하여 주십시요.");
		Join.Address.focus();
		return false;
	}
	if (Join.Address_Ext.value==""){
		alert("세부주소를 입력하여 주십시요.");
		Join.Address_Ext.focus();
		return false;
	}
	if (Join.Phone_1.value==""){
		alert("연락처를 입력하셔야 합니다.");
		Join.Phone_1.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("연락처를 입력하셔야 합니다.");
		Join.Phone_2.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("연락처를 입력하셔야 합니다.");
		Join.Phone_2.focus();
		return false;
	}
	return;
}

// 생일 자동설정
function setbirth() {
  no = document.Join.Reg_Num1.value;
  y = '19' + no.substr(0,2);
  m = parseInt(no.substr(2,2), 10) ;
  d = parseInt(no.substr(4,2), 10) ;
  
  for(i = 0; i < document.Join.Birth_year.length; i++) {
    if(document.Join.Birth_year.options[i].value == y) {
      document.Join.Birth_year.options[i].selected = true;
    }
  }

  for(i = 0; i < document.Join.Birth_month.length; i++) {
    if(document.Join.Birth_month.options[i].value == m) {
      document.Join.Birth_month.options[i].selected = true;
    }
  }

  for(i = 0; i < document.Join.Birth_day.length; i++) {
    if(document.Join.Birth_day.options[i].value == d) {
      document.Join.Birth_day.options[i].selected = true;
    }
  }
}

function checkIt (frm)
{
	if (form1_checkField (frm))
		return true;
	else
		return false;
} /* end of form1_submit */

// 필드check
function form1_checkField (frm)
{

	if (frm.Check != null && frm.Check['1'].checked == true)
		return true;

	if (iskorea_checkMinLength (frm.ID, 1,"사용자 아이디를 반드시 입력해 주십시오!") == false)
		{
		return false;
	}
	else if (iskorea_checkMinLength (frm.Pass, 1,"사용자 패스워드를 반드시 입력해 주십시오!") == false)
	{
		return false;
	}
	
	return true;
}

// check min length
function iskorea_checkMinLength (txtName, len, msg)
{
	var temp_len = iskorea_getByteLength (txtName.value);
	
	if (temp_len < len)
	{
		alert (msg);
		txtName.focus ();
		return false;
	}
	
	return true;
}

//입력한 문자열의 바이트길이를 가져온다.(한글 2Byte , 영문 1Byte)
function iskorea_getByteLength(str){
    var len=0;
    if(str == null) return 0;
    for(i=0 ; i < str.length ; i++, len++){
        if(escape(str.substring(i, i+1)).length == 6) len++;
    }
    return len;
}

function form1_checkWalkin (frm)
{
	frm.Check.disabled = !frm.Check['1'].checked;
	if (frm.Check['1'].checked == false)
	{
		frm.ID.style.background = "white";
		frm.Pass.style.background = "white";
		frm.ID.focus ();
	}
	else
	{
		frm.ID.style.background = "silver";
		frm.Pass.style.background = "silver";
	}	
}

      
function winclose(){
	self.close();
}

function enable(targ) { 
 	var obj = document.getElementById(targ); 
	obj.disabled = false; 
} 

function hiddenID(obj,div,idB) { 
var hiddenObj = document.getElementById(idB); ; 
	if (obj==div) { 	
		hiddenObj.style.display="inline"; 
	} else{ 
		hiddenObj.style.display="none"; 
	} 
} 
 
var img_cnt = 0; 
var max_img = 100; //최대 없로드 갯수.
var chk_img = new Array(max_img);
chk_img[0] = " ";

function ImageUploader(file){ 
		if(img_cnt < max_img) {
			for(i=0;i<img_cnt;i++){
				if (chk_img[i] == file.value){
				alert('동일한 파일이 존재합니다.');
				return;
				}//if
			}//for
			chk_img[i] = file.value;
			eval('imgs_up' + img_cnt).innerHTML += "<input type=file name=CMIType_R[] size=30 onchange=javascript:ImageUploader(this)> <div id='imgs_up" + (img_cnt+1) + "'></div>"; 
			//if (img_cnt != 0) {imgs_view.innerHTML+='<img src="' + file.value + '" width=80>';}
		}else{
			alert('최대 '+ max_img +'개까지만 업로드 할 수 있습니다');
		}//if else
	img_cnt++; 
}//function

 //file value 값 지우기
function valueRemove() { 
var file1 = document.getElementsByName("file[]"); 
file1[0].select();  // file[] 배열 첫번째 선택 
document.selection.clear(); 
} 

//질문해서 처리하기
function Qprocess(msg){
	if(confirm(msg)){
		return true;
	}else{
		return false;
	}
}




 
function OnSelectMobileCompany() {

	var f = document.forms[0];

	if ( f.hp1.value == "없음" ) {
		f.hp2.value = "";
		f.hp3.value = "";
		f.hp2.readOnly = true;
		f.hp3.readOnly = true;

	} else {
		f.hp2.readOnly = false;
		f.hp3.readOnly = false;
		f.hp2.focus();
	}

}


var bRemberIndex = 0;
function OnSelectMailDomain () {
	var f = document.forms[0];

	 
//f.email2.selectedIndex == 8 ||
	if (  f.email2.value == "" )	{
		if ( bRemberIndex ) {
			f.emaildomain.value = "";
		}
		toggle(2);
		f.emaildomain.focus();
	//	f.email2.selectedIndex = 8;
	} else {
		bRemberIndex = 1;
		f.emaildomain.value = f.email2.value;
		toggle(1);
	}

}


function toggle(value){

	if(value=='1') tr1.style.display = '';
	else tr1.style.display = 'none';

	if(value=='2') tr2.style.display = '';
	else tr2.style.display = 'none';

}

function agreeForm(frm){
	if(frm.agree.checked==true){
		return true;
	}else{
		alert("약관에 동의 하셔야만 신청하실 수 있습니다..");
		return false;
	
	} 
}


function ClearField(field){
	if (field.value == field.defaultValue) {
		field.value = "";
	}
}

function FillField(field){
	if (!field.value) {
		field.value = field.defaultValue;
	}
}

function NullCheck(InObj, InMsg){
  if (InObj.value == '')  {
	alert(InMsg + '입력하세요.');
	InObj.focus();
	InObj.select();
	return true;
  } else {
		var i;
		for (i=0;i< InObj.value.length; i++)
			if (InObj.value.charAt(i)!=" ")
				return false;
		alert(InMsg + '입력하세요.');
		InObj.focus();
		InObj.select();
		return true;
  }
}

function reset(form){
	form.reset();
}





function print(){
	window.open('/print.htm','prt','width=800,height=600');
}
var now_font1=24;
var now_font2=10;
var now_font3=14;
function font_in(k){
	k=parseInt(k);

	now_font1=now_font1+k; 
	now_font3=now_font3+k;
	cc1.style.fontSize=now_font1+'px';	
	//cc1.style.lineHeight=now_font1+Math.round(0.1*now_font1); 
	cc3.style.fontSize=now_font3+'px';	
	//cc3.style.lineHeight=now_font3+Math.round(0.1*now_font3);
}

 
function GoPrint(Num)
{
	window.open('/bbs/news_print.php?num='+Num,'','width=670,height=600,scrollbars=yes') ;

}
function NoMember()
{
	alert('회원만이 사용 가능한 메뉴 입니다.로그인 후 사용 하세요');
}

function GoNewsMail(Num)
{
	window.open('/bbs/news_mail.php?idx='+Num,'','width=430,height=320,scrollbars=no') ;
}
 



  
	// var topmenu = 1;
		 var topmenu = 1;
	// var topmenu = 2;
	function ChangeLayer(n) {
		document.getElementById('h_tmenu'+topmenu).style.display = "none";
		document.getElementById('h_tmenu'+n).style.display = "block";

		document.getElementById('h_tnav'+topmenu).style.display = "none";
		document.getElementById('h_tnav'+n).style.display = "block";

		topmenu = n;
	}



function favorites(){
	var favoriteurl="http://womanhome.co.kr/";
	var favoritetitle="우먼홈 - 여성 전문 포탈 사이트 ";
	if (document.all){
		window.external.AddFavorite(favoriteurl,favoritetitle);
	}
}


function StartPage(x){
	x.style.behavior="url(#default#homepage)";
	x.setHomePage('http://womanhome.co.kr/');
}

function reply(Join){
	if (Join.comment.value=="댓글을 올려주세요." || Join.comment.value==""){
		alert("내용을 입력하셔야 합니다.");
		Join.comment.focus();
		return false;
	}
	if (Join.userid.value==""){
		alert("로그인 후 작성해 주세요."); 
		return false;
	} 
	return;
}

function isNumber(obj) 
{
	var str = obj.value;
	if(str.length == 0)
		{
			alert("번호를 적어 주세요");
			obj.focus();
			return false;   
		}

	for(var i=0; i < str.length; i++) 
		{
			if(!('0' <= str.charAt(i) && str.charAt(i) <= '9')) 
					{
						alert("번호를 적어 주세요");
						obj.focus();   
						return false;	
					} //if
		}// for 

	return true;  

} //-isnumber


function isEmail(obj)
{
	var str = obj.value;

	if(str=="")
		{
			alert("이메일을 적어 주세요") ;
			obj.focus();
			return false; 

		}

	var i = str.indexOf("@");	
	if(i < 0)
		{
			alert("이메일 주서가 올바르지 않습니다.");
			obj.focus();
			return false; 
		}

	i = str.indexOf(".");
	if(i < 0)
		{
			alert("이메일 주서가 올바르지 않습니다.");
			obj.focus();
			return false; 
		}

	return true ;
}	//-isEmail  


function isNull(obj,message)
{
	var str=obj.value ;
	if(str=="")
		{
			alert(message) ;
			obj.focus() ;
			return false ;
		}
	return true ;

}

function  MailSend(frm) {

	var str=frm.from_name ;
	if(!isNull(str,"보내시는 분의 성명을 기입해주세요")){ 
		return false;
	}

	var str1=frm.from_email ;
	if(!isNull(str1,"보내시는 분의 메일을 기입해주세요")){ 
		return false;
	}

	if(!isEmail(frm.from_email)){ 
		return false;
	}

	var str2=frm.to_email ;
	if(!isNull(str2,"받으시는 분의 메일을 기입해주세요")){ 
		return false;
	}

	if(!isEmail(frm.to_email)){ 
		return false;
	}

	var str3=frm.to_name ;
	if(!isNull(str3,"받으시는 분의 성명을 기입해주세요")){ 
		return false;
	}

	var str4=frm.tocontent ;
	if(!isNull(str4,"내용을 적어 주세요")){ 
		return false;
	}

 
}