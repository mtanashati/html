// ��ũ�ι̵�� �¿��� �̹���
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

// ��ǰ�˻�
function SearchForm(Form){ 
	if (Form.keyword.value==""){
		alert("�˻�� �Է��Ͽ� �ֽʽÿ�.");
		Form.keyword.focus();
		return false;
	}
}

//�ֹ�Ȯ��
function chkcart(url) 
{        
		document.orderform.action = url;
		document.orderform.submit();        
		return;
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

// �ֹ����
function CheckOrder(Form){ 
	if (Form.OrderName.value==""){
		alert("�̸��� �Է��Ͽ� �ֽʽÿ�.");
		Form.OrderName.focus();
		return false;
	}
   	for (var k = 0; k <= (Form.OrderName.value.length - 1); k++)
         	if (Form.OrderName.value.indexOf(" ") >= 0 ){
             		alert ("������ ��ĭ���� �ٿ��� �Է��Ͽ� �ֽʽÿ�");
             		Form.OrderName.focus();
             		return false;
           	} 

	if (Form.OrderNumber.value==""){
		alert("�ֹ���ȣ�� �Է��ϼž� �մϴ�.");
		Form.OrderNumber.focus();
		return false;
	}
            thisfilednum = Check_Num(Form.OrderNumber.value);
        if (!thisfilednum) {
            alert("�ֹ���ȣ�� ���ڸ� �����մϴ�.");
            Form.OrderNumber.focus();
            return false;
        }
		return;
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
	winObj = window.open('navigation/'+ref+'?'+'Large='+L+'&Middle='+M+'&Photo='+P, 'View', 'width=100,height=100');
}

// ��ٱ��� ���
function frm_send_cart(frm){

	if( frm.quantitys.value == "0" ){
		alert(" ������ �Ѱ��̻� ������ �ֽñ� �ٶ��ϴ�. ");
		frm.quantitys.focus();
		return false;
	}

	thisfilednum = Check_Num(frm.quantitys.value);
	if (!thisfilednum) {
		alert("������ ���ڸ� �����մϴ�.");
		frm.quantitys.focus();
		return false;
	}

	return;
}

// ��ǰ���� ����
function frm_up_qty(frm){

	old_qty = parseInt(frm.quantitys.value);
	
	frm.quantitys.value = old_qty + 1;
	
	return;
}
	
// ��ǰ���� ����
function frm_down_qty(frm){

	old_qty = parseInt(frm.quantitys.value);
	
	if( old_qty > 0 ){
		frm.quantitys.value = old_qty - 1;
	}	

	return;
}

// �����ȣ �˻�
	function Zip_Search(ref) {
		var window_left = (screen.width-640)/2;
		var window_top = (screen.height-480)/2;
		window.open(ref,"checkIDWin",'width=450,height=300,status=no,scrollbars=yes,top=' + window_top + ',left=' + window_left + '');
}
// �ߺ� ���̵� üũ
function ID_chk(ref) {
	var ID = eval(Join.U_ID);
		if(!Join.U_ID.value) {
			alert('���̵�(ID)�� �Է��Ͻ� �Ŀ� Ȯ���ϼ���!');
			Join.U_ID.focus();
			return;
		} else {
			ref = ref + "?U_ID=" + Join.U_ID.value;
			var window_left = (screen.width-640)/2;
			var window_top = (screen.height-480)/2;
			window.open(ref,"IDcheck",'width=250,height=160,status=no,top=' + window_top + ',left=' + window_left + '');
		}
}

// �ѱ� �Է� �˻�
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

// �ѱ� �Է� �˻�
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

function CheckForm(Form){ 
	if (Form.Name.value==""){
		alert("�̸��� �Է��Ͽ� �ֽʽÿ�.");
		Form.Name.focus();
		return false;
	}
   	for (var k = 0; k <= (Form.Name.value.length - 1); k++)
         	if (Form.Name.value.indexOf(" ") >= 0 ){
             		alert ("������ ��ĭ���� �ٿ��� �Է��Ͽ� �ֽʽÿ�");
             		Form.OrderName.focus();
             		return false;
           	} 




	if (Form.Email.value==""){
		alert("�̸��� �ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		Form.Email.focus();
		return false;
	}
	if (email_chk(Form.Email.value) != true ){
		alert("�̸��� �ּҿ� �ѱ��̳� ������ ����� �� �����ϴ�.");
		Form.Email.focus();
	 	return false;
	}
	
	// �ֹε�Ϲ�ȣ üũ 	
	var chk =0
	var yy = Form.Jumin1.value.substring(0,2)
	var mm = Form.Jumin1.value.substring(2,4)
	var dd = Form.Jumin1.value.substring(4,6)
	var Sex = Form.Jumin2.value.substring(0,1)

 	if ((Form.Jumin1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){
    		alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�.");
    		Form.Jumin1.focus();
    		return false;
  	}

  	if ((Sex != 1 && Sex !=2 )||(Form.Jumin2.value.length != 7 )){
    		alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�.");
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
    		alert ("��ȿ���� ���� �ֹε�Ϲ�ȣ�Դϴ�.");
    		Form.Jumin2.focus();
    		return false;
  	}
	// �ֹε�Ϲ�ȣ üũ ��

return;
}

//�ֹ��� �ּҰ� ���� �� �ڹٽ�ũ��Ʈ..
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
//�ֹ��� �ּҰ� �ٸ��� �ڹٽ�ũ��Ʈ..
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
        alert("�ֹ��Ͻô� �� �̸��� �Է��ϼ���!");
        form.nam.focus();     
		return false;
    }

	if (form.ema.value==""){
		alert("�̸��� �ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		form.ema.focus();
		return false;
	}

	if (email_chk(Join.ema.value) != true ){
		alert("�̸��� �ּҿ� �ѱ��̳� ������ ����� �� �����ϴ�.");
		form.ema.focus();
		return false;
	}

      if (!form.cp1.value) {
         alert("�߽��� ��ȭ��ȣ�� �Է����ּ���!");
         form.cp1.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.cp1.value);
		    if (!thisfilednum) {
			alert("�߽��� ��ȭ��ȣ�� ���ڸ� �����մϴ�.");
            form.cp1.focus();
		return false;
        }
	  }

      if (!form.cp2.value) {
         alert("�߽��� ��ȭ��ȣ�� �Է����ּ���!");
         form.cp2.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.cp2.value);
		    if (!thisfilednum) {
			alert("�߽��� ��ȭ��ȣ�� ���ڸ� �����մϴ�.");
            form.cp2.focus();
		return false;
        }
	  }

      if (!form.cp3.value) {
         alert("�߽��� ��ȭ��ȣ�� �Է����ּ���!");
         form.cp3.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.cp3.value);
		    if (!thisfilednum) {
			alert("�߽��� ��ȭ��ȣ�� ���ڸ� �����մϴ�.");
            form.cp3.focus();
		return false;
        }
	  }

      if (form.qu1.value) {
			thisfilednum = Check_Num(form.qu1.value);
		    if (!thisfilednum) {
			alert("�ڵ��� ��ȣ�� ���ڸ� �����մϴ�.");
            form.qu1.focus();
		return false;
			}

		  if (!form.qu2.value) {
			 alert("�ڵ��� ��ȣ�� �Է����ּ���!");
			 form.qu2.focus();
		return false;
		  } else {
				thisfilednum = Check_Num(form.qu2.value);
				if (!thisfilednum) {
				alert("�ڵ��� ��ȣ�� ���ڸ� �����մϴ�.");
				form.qu2.focus();
		return false;
			}
		  }

		  if (!form.qu3.value) {
			 alert("�ڵ��� ��ȣ�� �Է����ּ���!");
			 form.qu3.focus();
		return false;
		  } else {
				thisfilednum = Check_Num(form.qu3.value);
				if (!thisfilednum) {
				alert("�ڵ��� ��ȣ�� ���ڸ� �����մϴ�.");
				form.qu3.focus();
		return false;
			}
		  }
	  }

	  
	  if (!form.zip1.value) {
         alert("�߽��� �����ȣ�� �Է����ּ���!");
         form.zip1.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.zip1.value);
				if (!thisfilednum) {
				alert("�߽��� �����ȣ�� ���ڸ� �����մϴ�.");
				form.zip1.focus();
		return false;
			}
	  }

	  if (!form.zip2.value) {
         alert("�߽��� �����ȣ�� �Է����ּ���!");
         form.zip2.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.zip2.value);
				if (!thisfilednum) {
				alert("�߽��� �����ȣ�� ���ڸ� �����մϴ�.");
				form.zip2.focus();
		return false;
			}
	  }

      if (!form.region.value) {
         alert("�߽��� �ּҸ� �Է����ּ���!");
         form.region.focus();
		return false;
	  }

      if (!form.addr1.value) {
         alert("�߽��� �ּҸ� �Է����ּ���!");
         form.addr1.focus();
		return false;
	  }

      if (!form.addr2.value) {
         alert("�߽��� �ּҸ� �Է����ּ���!");
         form.addr2.focus();
		return false;
	  }

      if (!form.ordnam.value) {
         alert("������ ������ �Է��ϼ���!");
         form.ordnam.focus();     
		return false;
      }

	  if (!form.Zip1.value) {
         alert("������ �����ȣ�� �Է����ּ���!");
         form.Zip1.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.Zip1.value);
				if (!thisfilednum) {
				alert("������ �����ȣ�� ���ڸ� �����մϴ�.");
				form.Zip1.focus();
		return false;
			}
	  }

	  if (!form.Zip2.value) {
         alert("������ �����ȣ�� �Է����ּ���!");
         form.Zip2.focus();
		return false;
	  } else {
				thisfilednum = Check_Num(form.Zip2.value);
				if (!thisfilednum) {
				alert("������ �����ȣ�� ���ڸ� �����մϴ�.");
				form.Zip2.focus();
		return false;
			}
	  }

      if (!form.Region.value) {
         alert("������ �ּҸ� �Է����ּ���!");
         form.Region.focus();
		return false;
	  }

      if (!form.Address.value) {
         alert("������ �ּҸ� �Է����ּ���!");
         form.Address.focus();
		return false;
	  }

      if (!form.Address_Ext.value) {
         alert("������ �ּҸ� �Է����ּ���!");
         form.Address.focus();
		return false;
	  } 

      if (!form.ordcp1.value) {
         alert("������ ��ȭ��ȣ�� �Է����ּ���!");
         form.ordcp1.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.ordcp1.value);
		    if (!thisfilednum) {
			alert("������ ��ȭ��ȣ�� ���ڸ� �����մϴ�.");
            form.ordcp1.focus();
		return false;
        }
	  }

      if (!form.ordcp2.value) {
         alert("������ ��ȭ��ȣ�� �Է����ּ���!");
         form.ordcp2.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.ordcp2.value);
		    if (!thisfilednum) {
			alert("������ ��ȭ��ȣ�� ���ڸ� �����մϴ�.");
            form.ordcp2.focus();
		return false;
        }
	  }

      if (!form.ordcp3.value) {
         alert("������ ��ȭ��ȣ�� �Է����ּ���!");
         form.ordcp3.focus();
		return false;
      } else {
			thisfilednum = Check_Num(form.ordcp3.value);
		    if (!thisfilednum) {
			alert("������ ��ȭ��ȣ�� ���ڸ� �����մϴ�.");
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


//���ϸ����� ���� �ݾ��� ���� ���...
	if ((document.payment.p_div.checked == true) && (point == tprice)) {
	
		document.payment.thisPage.value	= "thisPage";
		return true;
	}
	
//���ϸ��� ����϶� ��븶�ϸ����� ���Աݾ׺��� Ŭ�� üũ�Ѵ�..
	if ((document.payment.p_div.checked == true) && (point > tprice)) {
	
		alert ("��������Ʈ�� Ȯ�� �� ���Է� �ϼ���.");
			document.payment.use_point.value	= "";
			document.payment.apply_point.value	= "";
			document.payment.use_point.focus();
			return false;
	}
}
	
	//���ϸ��� ����ΰ�� üũ�Ѵ�..
	if (order == '1') {
		var upoint = parseInt(document.payment.old_point.value);
		var dprice = parseInt(document.payment.use_point.value);
		
		if (document.payment.p_div.checked != true) {
			alert ("���ϸ��� ����� �Ͻ÷��� ���ϸ��� ����� üũ�Ͽ� �ֽʽÿ�");
			return false;
		}
		
	
		if (dprice % 10 != '0') {
			alert ("��������Ʈ�� �ʿ������� ����ϼž� �մϴ�.");
			document.payment.use_point.value	= "";
			document.payment.use_point.focus();
			return false;
		}
	
		if ((dprice > upoint) || (dprice <= 0)) {
			alert ("��������Ʈ�� Ȯ�� �� ���Է� �ϼ���.");
			document.payment.use_point.value	= "";
			document.payment.apply_point.value	= "";
			document.payment.use_point.focus();
			return false;
		} else {
			var pprice = tprice - dprice;
			var display_price = "�� " + pprice;
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
			alert("�Ա��� ������ �߸��Ǿ����ϴ�2.");
			return false;
		}

		if (Ne_Month < To_Month) {
			alert("�Ա��� ������ �߸��Ǿ����ϴ�.");
			return false;
		}
		//document.payment.submit();
	} 
	
	document.payment.thisPage.value	 = "thisPage";


	return true;
} 



//���ϸ��� ��� üũ�� ��ũ��Ʈ..
function point_check() {
	var tprice = parseInt(document.payment.Total.value);
	var Check = document.payment.Account.value;
	if (document.payment.p_div.checked == false) {
		var display_price = "�� " + tprice;
		if(Check == "Card") {
			document.payment.c_price.value	= display_price;
		} else {
			document.payment.o_price.value	= display_price;
		}
	} else {
		if (document.payment.apply_point.value != "") {
			var display_price = "�� " + document.payment.apply_point.value;
			if(Check == "Card") {
				document.payment.c_price.value	= display_price;
			} else {
				document.payment.o_price.value	= display_price;
			}
		}
	}
}