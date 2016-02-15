//인자가 'src=aa.swf' 에서 'swf:aa.swf?pageNum=100' 이런식으로 = 을 : 로 변경했습니다. 
//이번 IE 패치는 플래시 뿐만 아니라 미디어플레이어도 영향을 받습니다.
//첨부된 js파일은 플래시&미디어플레이어 공용으로 사용할 수 있습니다.
//html 파일의 <head></head> 사이에 아래의 문구를 삽입하세요.
//<script language="javascript" src="embeded.js"></script>
//그리고 파일을 걸고자 하는 부분에 아래의 문구를 삽입하세요.
//<script>mEmbed('src=kimchi.swf','width=174','height=150');</script>
//* 출처 : http://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=tipntech&wr_id=44886&page=2


function mEmGET(array_key, array_val, key) { 
    for(var i = 0; i < array_key.length; i++) { 
        if(array_key[i] == key) { 
            return array_val[i]; 
            break; 
        } 
    } 
} 

// IE ActiveX 패치 함수 (예) mEmbed('src:test.swf?pageNum=100','width:200','height:150'); 플래시와 미디어만 사용할것!!! 
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

    // 정규식 패치 → /\.(swf)$/ 
    if(/\.(swf)/.test(srcdata)) { // 플래시 
        classid = 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'; 
        codebase = 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.c-ab#version=6,0,29,0'; 
        emtype = 'flash'; 
    } else if(/\.(wmv|wma|asf|avi|wav|asx|mpeg|mp3|midi|aiff|au|wpl|wm|wmx|wmd|wmz)/.test(srcdata)) { // 미디어 
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
