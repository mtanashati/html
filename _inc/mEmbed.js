//���ڰ� 'src=aa.swf' ���� 'swf:aa.swf?pageNum=100' �̷������� = �� : �� �����߽��ϴ�. 
//�̹� IE ��ġ�� �÷��� �Ӹ� �ƴ϶� �̵���÷��̾ ������ �޽��ϴ�.
//÷�ε� js������ �÷���&�̵���÷��̾� �������� ����� �� �ֽ��ϴ�.
//html ������ <head></head> ���̿� �Ʒ��� ������ �����ϼ���.
//<script language="javascript" src="embeded.js"></script>
//�׸��� ������ �ɰ��� �ϴ� �κп� �Ʒ��� ������ �����ϼ���.
//<script>mEmbed('src=kimchi.swf','width=174','height=150');</script>
//* ��ó : http://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=tipntech&wr_id=44886&page=2


function mEmGET(array_key, array_val, key) { 
    for(var i = 0; i < array_key.length; i++) { 
        if(array_key[i] == key) { 
            return array_val[i]; 
            break; 
        } 
    } 
} 

// IE ActiveX ��ġ �Լ� (��) mEmbed('src:test.swf?pageNum=100','width:200','height:150'); �÷��ÿ� �̵� ����Ұ�!!! 
function mEmbed() { 
    var emtype, i, data; 
    var key = new Array(); 
    var val = new Array(); 

    for(i = 0; i < mEmbed.arguments.length; i++) { 
        data  = mEmbed.arguments[i].split(':'); 
        key[i] = data[0]; 
        val[i] = data[1]; 
    } 

    var contents = ''; 
    var srcdata  = mEmGET(key, val, 'src').toLowerCase(); 
    var classid  = mEmGET(key, val, 'classid'); 
    var codebase = mEmGET(key, val, 'codebase'); 
    var count    = key.length; 

    // ���Խ� ��ġ �� /\.(swf)$/ 
    if(/\.(swf)/.test(srcdata)) { // �÷��� 
        classid = 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'; 
        codebase = 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.c-ab#version=6,0,29,0'; 
        emtype = 'flash'; 
    } else if(/\.(wmv|wma|asf|avi|wav|asx|mpeg|mp3|midi|aiff|au|wpl|wm|wmx|wmd|wmz)/.test(srcdata)) { // �̵�� 
            classid = 'CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95'; 
        codebase = 'http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701'; 
        emtype = 'media'; 
    } 

    if(classid && codebase) { 
        contents += '<object'; 
        if(classid)  contents += ' classid="' + classid + '"'; 
        if(codebase) contents += ' codebase="' + codebase + '"'; 
        for(i = 0; i < count; i++) { 
            if(val[i] != '') { 
                if(key[i] != 'src') contents += ' ' + key[i] + '="' + val[i] + '"'; 
            } 
        } 
        contents += '>'; 

        for(i = 0; i <count; i++) { 
            if(val[i] != '') { 
                if(emtype=='flash' && key[i]=='src') 
                    contents += '<param name="movie" value="' + val[i] + '" />'; 
                else if(emtype=='media' && key[i]=='src') 
                    contents += '<param name="filename" value="' + val[i] + '" />'; 
                else 
                    contents += '<param name="' + key[i] + '" value="' + val[i] + '" />'; 
            } 
        }  
    } 
	contents += '<param name=wmode value=transparent />'; 
    contents += '<embed'; 
    for(i = 0; i < count; i++) { 
        if(val[i] != '') contents += ' ' + key[i] + '="' + val[i] + '"'; 
    } 
    contents += '></embed>'; 
    if(classid && codebase)    contents += '</object>'; 

    document.write(contents); 
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
