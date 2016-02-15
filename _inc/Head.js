// 매크로미디어 온오버 이미지
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
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

// 상품검색
function SearchForm(Form){ 
	if (Form.keyword.value==""){
		alert("검색어를 입력하여 주십시요.");
		Form.keyword.focus();
		return false;
	}
}

//주문확인
function chkcart(url) 
{        
		document.orderform.action = url;
		document.orderform.submit();        
		return;
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

// 주문양식
function CheckOrder(Form){ 
	if (Form.OrderName.value==""){
		alert("이름을 입력하여 주십시요.");
		Form.OrderName.focus();
		return false;
	}
   	for (var k = 0; k <= (Form.OrderName.value.length - 1); k++)
         	if (Form.OrderName.value.indexOf(" ") >= 0 ){
             		alert ("성명을 빈칸없이 붙여서 입력하여 주십시오");
             		Form.OrderName.focus();
             		return false;
           	} 

	if (Form.OrderNumber.value==""){
		alert("주문번호를 입력하셔야 합니다.");
		Form.OrderNumber.focus();
		return false;
	}
            thisfilednum = Check_Num(Form.OrderNumber.value);
        if (!thisfilednum) {
            alert("주문번호은 숫자만 가능합니다.");
            Form.OrderNumber.focus();
            return false;
        }
		return;
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
	winObj = window.open('navigation/'+ref+'?'+'Large='+L+'&Middle='+M+'&Photo='+P, 'View', 'width=100,height=100');
}

// 장바구니 담기
function frm_send_cart(frm){

	if( frm.quantitys.value == "0" ){
		alert(" 수량을 한개이상 선택해 주시기 바랍니다. ");
		frm.quantitys.focus();
		return false;
	}

	thisfilednum = Check_Num(frm.quantitys.value);
	if (!thisfilednum) {
		alert("수량은 숫자만 가능합니다.");
		frm.quantitys.focus();
		return false;
	}

	return;
}

// 상품수량 증가
function frm_up_qty(frm){

	old_qty = parseInt(frm.quantitys.value);
	
	frm.quantitys.value = old_qty + 1;
	
	return;
}
	
// 상품수량 감소
function frm_down_qty(frm){

	old_qty = parseInt(frm.quantitys.value);
	
	if( old_qty > 0 ){
		frm.quantitys.value = old_qty - 1;
	}	

	return;
}

// 우편번호 검색
	function Zip_Search(ref) {
		var window_left = (screen.width-640)/2;
		var window_top = (screen.height-480)/2;
		window.open(ref,"checkIDWin",'width=450,height=300,status=no,scrollbars=yes,top=' + window_top + ',left=' + window_left + '');
}
// 중복 아이디 체크
function ID_chk(ref) {
	var ID = eval(Join.U_ID);
		if(!Join.U_ID.value) {
			alert('아이디(ID)를 입력하신 후에 확인하세요!');
			Join.U_ID.focus();
			return;
		} else {
			ref = ref + "?U_ID=" + Join.U_ID.value;
			var window_left = (screen.width-640)/2;
			var window_top = (screen.height-480)/2;
			window.open(ref,"IDcheck",'width=250,height=160,status=no,top=' + window_top + ',left=' + window_left + '');
		}
}

// 한글 입력 검색
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

// 한글 입력 검색
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

function CheckForm(Form){ 
	if (Form.Name.value==""){
		alert("이름을 입력하여 주십시요.");
		Form.Name.focus();
		return false;
	}
   	for (var k = 0; k <= (Form.Name.value.length - 1); k++)
         	if (Form.Name.value.indexOf(" ") >= 0 ){
             		alert ("성명을 빈칸없이 붙여서 입력하여 주십시오");
             		Form.OrderName.focus();
             		return false;
           	} 




	if (Form.Email.value==""){
		alert("이메일 주소를 입력하여 주십시요.");
		Form.Email.focus();
		return false;
	}
	if (email_chk(Form.Email.value) != true ){
		alert("이메일 주소에 한글이나 여백은 사용할 수 없습니다.");
		Form.Email.focus();
	 	return false;
	}
	
	// 주민등록번호 체크 	
	var chk =0
	var yy = Form.Jumin1.value.substring(0,2)
	var mm = Form.Jumin1.value.substring(2,4)
	var dd = Form.Jumin1.value.substring(4,6)
	var Sex = Form.Jumin2.value.substring(0,1)

 	if ((Form.Jumin1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){
    		alert ("주민등록번호를 바로 입력하여 주십시오.");
    		Form.Jumin1.focus();
    		return false;
  	}

  	if ((Sex != 1 && Sex !=2 )||(Form.Jumin2.value.length != 7 )){
    		alert ("주민등록번호를 바로 입력하여 주십시오.");
    		Form.Jumin2.focus();
    		return false;
  	}   
	
  	for (var i = 0; i <=5 ; i++){ 
		chk = chk + ((i%8+2) * parseInt(Form.Jumin1.value.substring(i,i+1)))
 	}

  	for (var i = 6; i <=11 ; i++){ 
        	chk = chk + ((i%8+2) * parseInt(Form.Jumin2.value.substring(i-6,i-5)))
 	}

  	chk = 11 - (chk %11)
  	chk = chk % 10

  	if (chk != Form.Jumin2.value.substring(6,7))
  	{
    		alert ("유효하지 않은 주민등록번호입니다.");
    		Form.Jumin2.focus();
    		return false;
  	}
	// 주민등록번호 체크 끝

return;
}

//주문자 주소가 같을 때 자바스크립트..
	function SameForm(frm){
	
		nam = frm.nam.value;
		cp1 = frm.cp1.value;
		cp2 = frm.cp2.value;
		cp3 = frm.cp3.value;
		zip1 = frm.zip1.value;
		zip2 = frm.zip2.value;
		addr1 = frm.addr1.value;
		addr2 = frm.addr2.value;
		region = frm.region.value;


		frm.ordnam.value = nam;
		frm.Zip1.value = zip1;
		frm.Zip2.value = zip2;
		frm.Address.value = addr1;
		frm.Address_Ext.value = addr2;
		frm.Region.value = region;
		frm.ordcp1.value = cp1;
		frm.ordcp2.value = cp2;
		frm.ordcp3.value = cp3;
		return false;
	}
//주문자 주소가 다를때 자바스크립트..
	function NoSameForm(frm){
	
		frm.ordnam.value = " ";
		frm.Zip1.value = " ";
		frm.Zip2.value = " ";
		frm.Address.value = " ";
		frm.Address_Ext.value = " ";
		frm.Region.value = " ";
		frm.ordcp1.value = " ";
		frm.ordcp2.value = " ";
		frm.ordcp3.value = " ";
		return false;
	}

function checkInput (form) {
    if (!form.nam.value) {
        alert("주문하시는 분 이름을 입력하세요!");
        form.nam.focus();     
		return false;
    }

	if (form.ema.value==""){
		alert("이메일 주소를 입력하여 주십시요.");
		form.ema.focus();
		return false;
	}

	if (email_chk(Join.ema.value) != true ){
		alert("이메일 주소에 한글이나 여백은 사용할 수 없습니다.");
		form.ema.focus();
		return false;
	}

      if (!form.cp1.value) {
         alert("발신자 전화번호를 입력해주세요!");
         form.cp1.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.cp1.value);
		    if (!thisfilednum) {
			alert("발신자 전화번호는 숫자만 가능합니다.");
            form.cp1.focus();
		return false;
        }
	  }

      if (!form.cp2.value) {
         alert("발신자 전화번호를 입력해주세요!");
         form.cp2.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.cp2.value);
		    if (!thisfilednum) {
			alert("발신자 전화번호는 숫자만 가능합니다.");
            form.cp2.focus();
		return false;
        }
	  }

      if (!form.cp3.value) {
         alert("발신자 전화번호를 입력해주세요!");
         form.cp3.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.cp3.value);
		    if (!thisfilednum) {
			alert("발신자 전화번호는 숫자만 가능합니다.");
            form.cp3.focus();
		return false;
        }
	  }

      if (form.qu1.value) {
			thisfilednum = Check_Num(form.qu1.value);
		    if (!thisfilednum) {
			alert("핸드폰 번호는 숫자만 가능합니다.");
            form.qu1.focus();
		return false;
			}

		  if (!form.qu2.value) {
			 alert("핸드폰 번호를 입력해주세요!");
			 form.qu2.focus();
		return false;
		  } else {
				thisfilednum = Check_Num(form.qu2.value);
				if (!thisfilednum) {
				alert("핸드폰 번호는 숫자만 가능합니다.");
				form.qu2.focus();
		return false;
			}
		  }

		  if (!form.qu3.value) {
			 alert("핸드폰 번호를 입력해주세요!");
			 form.qu3.focus();
		return false;
		  } else {
				thisfilednum = Check_Num(form.qu3.value);
				if (!thisfilednum) {
				alert("핸드폰 번호는 숫자만 가능합니다.");
				form.qu3.focus();
		return false;
			}
		  }
	  }

	  
	  if (!form.zip1.value) {
         alert("발신자 우편번호를 입력해주세요!");
         form.zip1.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.zip1.value);
				if (!thisfilednum) {
				alert("발신자 우편번호는 숫자만 가능합니다.");
				form.zip1.focus();
		return false;
			}
	  }

	  if (!form.zip2.value) {
         alert("발신자 우편번호를 입력해주세요!");
         form.zip2.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.zip2.value);
				if (!thisfilednum) {
				alert("발신자 우편번호는 숫자만 가능합니다.");
				form.zip2.focus();
		return false;
			}
	  }

      if (!form.region.value) {
         alert("발신자 주소를 입력해주세요!");
         form.region.focus();
		return false;
	  }

      if (!form.addr1.value) {
         alert("발신자 주소를 입력해주세요!");
         form.addr1.focus();
		return false;
	  }

      if (!form.addr2.value) {
         alert("발신자 주소를 입력해주세요!");
         form.addr2.focus();
		return false;
	  }

      if (!form.ordnam.value) {
         alert("수신자 성함을 입력하세요!");
         form.ordnam.focus();     
		return false;
      }

	  if (!form.Zip1.value) {
         alert("수신자 우편번호를 입력해주세요!");
         form.Zip1.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.Zip1.value);
				if (!thisfilednum) {
				alert("수신자 우편번호는 숫자만 가능합니다.");
				form.Zip1.focus();
		return false;
			}
	  }

	  if (!form.Zip2.value) {
         alert("수신자 우편번호를 입력해주세요!");
         form.Zip2.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.Zip2.value);
				if (!thisfilednum) {
				alert("수신자 우편번호는 숫자만 가능합니다.");
				form.Zip2.focus();
		return false;
			}
	  }

      if (!form.Region.value) {
         alert("수신자 주소를 입력해주세요!");
         form.Region.focus();
		return false;
	  }

      if (!form.Address.value) {
         alert("수신자 주소를 입력해주세요!");
         form.Address.focus();
		return false;
	  }

      if (!form.Address_Ext.value) {
         alert("수신자 주소를 입력해주세요!");
         form.Address.focus();
		return false;
	  } 

      if (!form.ordcp1.value) {
         alert("수신자 전화번호를 입력해주세요!");
         form.ordcp1.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.ordcp1.value);
		    if (!thisfilednum) {
			alert("수신자 전화번호는 숫자만 가능합니다.");
            form.ordcp1.focus();
		return false;
        }
	  }

      if (!form.ordcp2.value) {
         alert("수신자 전화번호를 입력해주세요!");
         form.ordcp2.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.ordcp2.value);
		    if (!thisfilednum) {
			alert("수신자 전화번호는 숫자만 가능합니다.");
            form.ordcp2.focus();
		return false;
        }
	  }

      if (!form.ordcp3.value) {
         alert("수신자 전화번호를 입력해주세요!");
         form.ordcp3.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.ordcp3.value);
		    if (!thisfilednum) {
			alert("수신자 전화번호는 숫자만 가능합니다.");
            form.ordcp3.focus();
		return false;
        }
	  }

}


var flag	= '';
var order	= '0';


function go_payment(order) {
	var Check = document.payment.Account.value;
	if(document.payment.JoinMember.value == "Y") {
	var tprice = parseInt(document.payment.Total.value);
	var point = parseInt(document.payment.use_point.value);


//마일리지와 결재 금액이 같은 경우...
	if ((document.payment.p_div.checked == true) && (point == tprice)) {
	
		document.payment.thisPage.value	= "thisPage";
		return true;
	}
	
//마일리지 사용일때 사용마일리지가 구입금액보다 클때 체크한다..
	if ((document.payment.p_div.checked == true) && (point > tprice)) {
	
		alert ("현찰포인트를 확인 후 재입력 하세요.");
			document.payment.use_point.value	= "";
			document.payment.apply_point.value	= "";
			document.payment.use_point.focus();
			return false;
	}
}
	
	//마일리지 사용인경우 체크한다..
	if (order == '1') {
		var upoint = parseInt(document.payment.old_point.value);
		var dprice = parseInt(document.payment.use_point.value);
		
		if (document.payment.p_div.checked != true) {
			alert ("마일리지 사용을 하시려면 마일리지 사용을 체크하여 주십시요");
			return false;
		}
		
	
		if (dprice % 10 != '0') {
			alert ("현찰포인트는 십원단위로 사용하셔야 합니다.");
			document.payment.use_point.value	= "";
			document.payment.use_point.focus();
			return false;
		}
	
		if ((dprice > upoint) || (dprice <= 0)) {
			alert ("현찰포인트를 확인 후 재입력 하세요.");
			document.payment.use_point.value	= "";
			document.payment.apply_point.value	= "";
			document.payment.use_point.focus();
			return false;
		} else {
			var pprice = tprice - dprice;
			var display_price = "￦ " + pprice;
			document.payment.apply_point.value	= pprice;
			document.payment.remileage.value	= dprice;

			if(Check == "Card") {
				document.payment.c_price.value		= display_price;
			} else {
				document.payment.o_price.value		= display_price;
			}
			return false;
		}
	}
	
	
if (Check == "Online") {
		To_Month = parseInt(document.payment.Month.value);
		Ne_Month = parseInt(document.payment.date_month.value);
		To_Day = parseInt(document.payment.date_day.value);
		Ne_Day = parseInt(document.payment.Day.value);
		if ((Ne_Month <= To_Month) && (To_Day < Ne_Day)) {
			alert("입금일 선택이 잘못되었습니다2.");
			return false;
		}

		if (Ne_Month < To_Month) {
			alert("입금일 선택이 잘못되었습니다.");
			return false;
		}
		//document.payment.submit();
	} 
	
	document.payment.thisPage.value	 = "thisPage";


	return true;
} 



//마일리지 사용 체크시 스크립트..
function point_check() {
	var tprice = parseInt(document.payment.Total.value);
	var Check = document.payment.Account.value;
	if (document.payment.p_div.checked == false) {
		var display_price = "￦ " + tprice;
		if(Check == "Card") {
			document.payment.c_price.value	= display_price;
		} else {
			document.payment.o_price.value	= display_price;
		}
	} else {
		if (document.payment.apply_point.value != "") {
			var display_price = "￦ " + document.payment.apply_point.value;
			if(Check == "Card") {
				document.payment.c_price.value	= display_price;
			} else {
				document.payment.o_price.value	= display_price;
			}
		}
	}
}