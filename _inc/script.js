// ��ũ�ι̵�� �¿��� �̹���
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

 

// ��ǰ�˻�
function topSearch(Form){ 
	if (Form.keyword.value==""){
		alert("�˻�� �Է��Ͽ� �ֽʽÿ�.");
		Form.keyword.focus();
		return false;
	}
}
 
 function peopleSearch(Form){ 
	if (Form.name.value==""){
		alert("�˻��Ͻ� �ι��� �̸��� �Է��Ͽ� �ֽʽÿ�.");
		Form.name.focus();
		return false;
	}
}
 

//���� �˻� �ڹٽ�Ʈ��Ʈ
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
		alert("���̵�(ID)�� �Է��ϼ���!");
		Login.ID.focus();
		return false;
	}

	if (!Login.Pass.value) {
		alert("��й�ȣ�� �Է��ϼ���!");
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

//ū���� ����
function photoWindow(ref,L,M,P) {
	winObj = window.open('_inc/'+ref+'?'+'Large='+L+'&Middle='+M+'&Photo='+P, 'View', 'width=100,height=100');
}
 
// �����ȣ �˻�
function zip_chk(ref,a) {  
	var window_left = (screen.width-640)/2;
	var window_top = (screen.height-480)/2;
	window.open(ref+"?a="+a,"IDcheck",'width=400,height=240,status=no,scrollbars=yes,top=' + window_top + ',left=' + window_left + ''); 
}
// �ߺ� ���̵� üũ
function ID_chk(url) {	
		 
		if(Join.ID.value==""){
			alert('���̵�(ID)�� �Է��Ͻ� �Ŀ� Ȯ���ϼ���!');
			Join.ID.focus();
			return;
		
		}else if (Join.ID.value.length < 4 || Join.ID.value.length > 10) {
			alert("ID�� 4~10�ڸ��Դϴ�.");
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
		alert("�̸��� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Name.focus();
		return false;
	}
   	for (var k = 0; k <= (Join.U_Name.value.length - 1); k++)
         	if (Join.U_Name.value.indexOf(" ") >= 0 ){
             		alert ("������ ��ĭ���� �ٿ��� �Է��Ͽ� �ֽʽÿ�");
             		Join.U_Name.focus();
             		return (false);
           	} 
	if (Join.U_ID.value==""){
		alert("ID �� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_ID.focus();
		return false;
	}
	if (hangul_chk(Join.U_ID.value) != true ){
		alert("ID�� �ѱ��̳� ������ ����� �� �����ϴ�.");
		Join.U_ID.focus();
	 	return false;
	}
	if (Join.U_ID.value.length < 4 || Join.U_ID.value.length > 10) {
		alert("ID�� 4~10�ڸ��Դϴ�.");
		Join.U_ID.focus();
		return false;
	}
	if (Join.U_Pass.value==""){
		alert("��й�ȣ�� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Pass.focus();
		return false;
	}
	if (hangul_chk(Join.U_Pass.value) != true ){
		alert("��й�ȣ�� �ѱ��̳� ������ ����� �� �����ϴ�.");
		Join.U_Pass.focus();
	 	return false;
	}
	if (Join.U_Pass.value.length < 4 || Join.U_Pass.value.length > 10) {
		alert("��й�ȣ�� 4~10�ڸ��Դϴ�.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.U_Pass2.value==""){
		alert("��й�ȣ Ȯ���� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Pass2.focus();
		return false;
	}
	if (Join.U_Pass.value!==Join.U_Pass2.value){
		alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�. �ٽ� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.Email.value==""){
		alert("�̸��� �ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Join.Email.focus();
		return false;
	}
	if (email_chk(Join.Email.value) != true ){
		alert("�̸��� �ּҿ� �ѱ��̳� ������ ����� �� �����ϴ�.");
		Join.Email.focus();
	 	return false;
	}

	// �ֹε�Ϲ�ȣ üũ 	
	var chk =0
	var yy = Join.Reg_Num1.value.substring(0,2)
	var mm = Join.Reg_Num1.value.substring(2,4)
	var dd = Join.Reg_Num1.value.substring(4,6)
	var Sex = Join.Reg_Num2.value.substring(0,1)

 	if ((Join.Reg_Num1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){
    		alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�.");
    		Join.Reg_Num1.focus();
    		return (false);
  	}

  	if ((Sex != 1 && Sex !=2 )||(Join.Reg_Num2.value.length != 7 )){
    		alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�.");
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
    		alert ("��ȿ���� ���� �ֹε�Ϲ�ȣ�Դϴ�.");
    		Join.Reg_Num1.focus();
    		return (false);
  	}
	// �ֹε�Ϲ�ȣ üũ ��

	if (Join.Zip1.value==""){
		alert("�����ȣ�� �Է��Ͽ� �ֽʽÿ�.");
		Join.Zip1.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip1.value);
        if (!thisfilednum) {
            alert("�����ȣ�� ���ڸ� �����մϴ�.");
            Join.Zip1.focus();
            return;
        }
	}
	
	if (Join.Zip2.value==""){
		alert("�����ȣ�� �Է��Ͽ� �ֽʽÿ�.");
		Join.Zip2.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip2.value);
        if (!thisfilednum) {
            alert("�����ȣ�� ���ڸ� �����մϴ�.");
            Join.Zip2.focus();
            return;
        }
	}
	
	if (Join.Region.value==""){
		alert("������ �Է��Ͽ� �ֽʽÿ�.");
		Join.Region.focus();
		return false;
	}
	if (Join.Address.value==""){
		alert("�ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Join.Address.focus();
		return false;
	}
	if (Join.Address_Ext.value==""){
		alert("�����ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Join.Address_Ext.focus();
		return false;
	}
	if (Join.Phone_1.value==""){
		alert("����ó�� �Է��ϼž� �մϴ�.");
		Join.Phone_1.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("����ó�� �Է��ϼž� �մϴ�.");
		Join.Phone_2.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("����ó�� �Է��ϼž� �մϴ�.");
		Join.Phone_2.focus();
		return false;
	}
}


function CheckModify(Join){ 
	if (Join.U_Pass.value==""){
		alert("��й�ȣ�� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Pass.focus();
		return false;
	}
	if (hangul_chk(Join.U_Pass.value) != true ){
		alert("��й�ȣ�� �ѱ��̳� ������ ����� �� �����ϴ�.");
		Join.U_Pass.focus();
	 	return false;
	}
	if (Join.U_Pass.value.length < 4 || Join.U_Pass.value.length > 10) {
		alert("��й�ȣ�� 4~10�ڸ��Դϴ�.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.U_Pass2.value==""){
		alert("��й�ȣ Ȯ���� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Pass2.focus();
		return false;
	}
	if (Join.U_Pass.value!==Join.U_Pass2.value){
		alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�. �ٽ� �Է��Ͽ� �ֽʽÿ�.");
		Join.U_Pass.focus();
		return false;
	}
	if (Join.Email.value==""){
		alert("�̸��� �ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Join.Email.focus();
		return false;
	}
	if (email_chk(Join.Email.value) != true ){
		alert("�̸��� �ּҿ� �ѱ��̳� ������ ����� �� �����ϴ�.");
		Join.Email.focus();
	 	return false;
	}

	if (Join.Zip1.value==""){
		alert("�����ȣ�� �Է��Ͽ� �ֽʽÿ�.");
		Join.Zip1.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip1.value);
        if (!thisfilednum) {
            alert("�����ȣ�� ���ڸ� �����մϴ�.");
            Join.Zip1.focus();
            return false;
        }
	}
	
	if (Join.Zip2.value==""){
		alert("�����ȣ�� �Է��Ͽ� �ֽʽÿ�.");
		Join.Zip2.focus();
		return false;
	} else {
            thisfilednum = Check_Num(Join.Zip2.value);
        if (!thisfilednum) {
            alert("�����ȣ�� ���ڸ� �����մϴ�.");
            Join.Zip2.focus();
            return false;
        }
	}
	
	if (Join.Region.value==""){
		alert("������ �Է��Ͽ� �ֽʽÿ�.");
		Join.Region.focus();
		return false;
	}
	if (Join.Address.value==""){
		alert("�ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Join.Address.focus();
		return false;
	}
	if (Join.Address_Ext.value==""){
		alert("�����ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Join.Address_Ext.focus();
		return false;
	}
	if (Join.Phone_1.value==""){
		alert("����ó�� �Է��ϼž� �մϴ�.");
		Join.Phone_1.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("����ó�� �Է��ϼž� �մϴ�.");
		Join.Phone_2.focus();
		return false;
	}
	if (Join.Phone_2.value==""){
		alert("����ó�� �Է��ϼž� �մϴ�.");
		Join.Phone_2.focus();
		return false;
	}
	return;
}

// ���� �ڵ�����
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

// �ʵ�check
function form1_checkField (frm)
{

	if (frm.Check != null && frm.Check['1'].checked == true)
		return true;

	if (iskorea_checkMinLength (frm.ID, 1,"����� ���̵� �ݵ�� �Է��� �ֽʽÿ�!") == false)
		{
		return false;
	}
	else if (iskorea_checkMinLength (frm.Pass, 1,"����� �н����带 �ݵ�� �Է��� �ֽʽÿ�!") == false)
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

//�Է��� ���ڿ��� ����Ʈ���̸� �����´�.(�ѱ� 2Byte , ���� 1Byte)
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
var max_img = 100; //�ִ� ���ε� ����.
var chk_img = new Array(max_img);
chk_img[0] = " ";

function ImageUploader(file){ 
		if(img_cnt < max_img) {
			for(i=0;i<img_cnt;i++){
				if (chk_img[i] == file.value){
				alert('������ ������ �����մϴ�.');
				return;
				}//if
			}//for
			chk_img[i] = file.value;
			eval('imgs_up' + img_cnt).innerHTML += "<input type=file name=CMIType_R[] size=30 onchange=javascript:ImageUploader(this)> <div id='imgs_up" + (img_cnt+1) + "'></div>"; 
			//if (img_cnt != 0) {imgs_view.innerHTML+='<img src="' + file.value + '" width=80>';}
		}else{
			alert('�ִ� '+ max_img +'�������� ���ε� �� �� �ֽ��ϴ�');
		}//if else
	img_cnt++; 
}//function

 //file value �� �����
function valueRemove() { 
var file1 = document.getElementsByName("file[]"); 
file1[0].select();  // file[] �迭 ù��° ���� 
document.selection.clear(); 
} 

//�����ؼ� ó���ϱ�
function Qprocess(msg){
	if(confirm(msg)){
		return true;
	}else{
		return false;
	}
}




 
function OnSelectMobileCompany() {

	var f = document.forms[0];

	if ( f.hp1.value == "����" ) {
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
		alert("����� ���� �ϼž߸� ��û�Ͻ� �� �ֽ��ϴ�..");
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
	alert(InMsg + '�Է��ϼ���.');
	InObj.focus();
	InObj.select();
	return true;
  } else {
		var i;
		for (i=0;i< InObj.value.length; i++)
			if (InObj.value.charAt(i)!=" ")
				return false;
		alert(InMsg + '�Է��ϼ���.');
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
	alert('ȸ������ ��� ������ �޴� �Դϴ�.�α��� �� ��� �ϼ���');
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
	var favoritetitle="���Ȩ - ���� ���� ��Ż ����Ʈ ";
	if (document.all){
		window.external.AddFavorite(favoriteurl,favoritetitle);
	}
}


function StartPage(x){
	x.style.behavior="url(#default#homepage)";
	x.setHomePage('http://womanhome.co.kr/');
}

function reply(Join){
	if (Join.comment.value=="����� �÷��ּ���." || Join.comment.value==""){
		alert("������ �Է��ϼž� �մϴ�.");
		Join.comment.focus();
		return false;
	}
	if (Join.userid.value==""){
		alert("�α��� �� �ۼ��� �ּ���."); 
		return false;
	} 
	return;
}

function isNumber(obj) 
{
	var str = obj.value;
	if(str.length == 0)
		{
			alert("��ȣ�� ���� �ּ���");
			obj.focus();
			return false;   
		}

	for(var i=0; i < str.length; i++) 
		{
			if(!('0' <= str.charAt(i) && str.charAt(i) <= '9')) 
					{
						alert("��ȣ�� ���� �ּ���");
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
			alert("�̸����� ���� �ּ���") ;
			obj.focus();
			return false; 

		}

	var i = str.indexOf("@");	
	if(i < 0)
		{
			alert("�̸��� �ּ��� �ùٸ��� �ʽ��ϴ�.");
			obj.focus();
			return false; 
		}

	i = str.indexOf(".");
	if(i < 0)
		{
			alert("�̸��� �ּ��� �ùٸ��� �ʽ��ϴ�.");
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
	if(!isNull(str,"�����ô� ���� ������ �������ּ���")){ 
		return false;
	}

	var str1=frm.from_email ;
	if(!isNull(str1,"�����ô� ���� ������ �������ּ���")){ 
		return false;
	}

	if(!isEmail(frm.from_email)){ 
		return false;
	}

	var str2=frm.to_email ;
	if(!isNull(str2,"�����ô� ���� ������ �������ּ���")){ 
		return false;
	}

	if(!isEmail(frm.to_email)){ 
		return false;
	}

	var str3=frm.to_name ;
	if(!isNull(str3,"�����ô� ���� ������ �������ּ���")){ 
		return false;
	}

	var str4=frm.tocontent ;
	if(!isNull(str4,"������ ���� �ּ���")){ 
		return false;
	}

 
}