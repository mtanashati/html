var name_ = new Array('=동/면/리=');
var code_ = new Array('');

var name_B1 = new Array("=동/면/리=", "강동동", "구랑동", "녹산동", "눌차동", "대저동", "대항동", "동선동", "명지동", "미음동", "범방동", "봉림동", "생곡동", "성북동", "송정동", "식만동", "신호동", "죽동동", "죽림동", "지사동", "천성동", "화전동");
var code_B1 = new Array('', 'K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'K7', 'K8', 'K9', 'K10', 'K11', 'K12', 'K13', 'K14', 'K15', 'K16', 'K17', 'K18', 'K19', 'K20', 'K21');

// 금정구
var name_B2 = new Array('=동/면/리=', '구서동', '금사동', '금성동', '남산동', '노포동', '두구동', '부곡동', '서동', '선동', '오륜동', '장전동', '청룡동', '회동동');
var code_B2= new Array('', 'K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'K7', 'K8', 'K9', 'K10', 'K11', 'K12', 'K13');

//기장군
var name_B3= new Array('=동/면/리=', '기장읍', '일광면', '장안읍', '정관면', '철마면');
var code_B3= new Array('', 'K1', 'K2', 'K3', 'K4', 'K5');

//남구
var name_B4 = new Array('=동/면/리=', '감만동', '대연동', '문현동', '용당동', '용호동', '우암동');
var code_B4= new Array('', 'N1', 'N2', 'N3', 'N4', 'N5', 'N6');

//동구
var name_B5 = new Array('=동/면/리=', '범일동', '수정동', '좌천동', '초량동');
var code_B5= new Array('', 'D1', 'D2', 'D3', 'D4');

 //동래구
var name_B6 = new Array('=동/면/리=', '낙민동', '명륜동', '명장동', '복산동', '복천동', '사직동', '수민동', '수안동', '안락동', '온천동', '칠산동');
var code_B6= new Array('', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11');

//부산진구
var name_B7 = new Array('=동/면/리=', '가야동', '개금동', '당감동', '동평동', '범전동', '범천동', '부암동', '부전동', '양정동', '연지동', '전포동', '초읍동');
var code_B7= new Array('', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12');

//북구
var name_B8 = new Array('=동/면/리=', '구포동', '금곡동', '덕천동', '만덕동', '화명동');
var code_B8= new Array('', 'B1', 'B2', 'B3', 'B4', 'B5');

 //사상구 
var name_B9 = new Array('=동/면/리=', '감전동', '괘법동', '덕포동', '모라동', '삼락동', '엄궁동', '주례동', '학장동');
var code_B9= new Array('', 'S1', 'S2', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8');

 //사하구
var name_B10 = new Array('=동/면/리=', '감천동', '괴정동', '구평동', '다대동', '당리동', '신평동', '장림동', '하단동');
var code_B10= new Array('', 'S1', 'S2', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8');


//서구 
var name_B11 = new Array('=동/면/리=', '남부민동', '동대신동', '부민동', '부용동', '서대신동', '아미동', '암남동', '초장동', '충무동', '토성동');
var code_B11= new Array('', 'S1', 'S2', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8', 'S9', 'S10');


//수영구
var name_B12 = new Array('=동/면/리=', '광안동', '남천동', '망미동', '민락동', '수영동');
var code_B12= new Array('', 'S1', 'S2', 'S3', 'S4', 'S5');

//연제구
var name_B13 = new Array('=동/면/리=', '거제동', '연산동');
var code_B13= new Array('', 'Y1', 'Y2');

// 영도구
var name_B14 = new Array('=동/면/리=', '남항동', '대교동', '대평동', '동삼동', '봉래동', '신선동', '영선동', '청학동');
var code_B14= new Array('', 'Y1', 'Y2', 'Y3', 'Y4', 'Y5', 'Y6', 'Y7', 'Y8');

//중구
var name_B15 = new Array('=동/면/리=', '광복동', '남포동', '대창동', '대청동', '동광동', '보수동', '부평동', '신창동', '영주동', '중앙동', '창선동');
var code_B15= new Array('', 'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11');

//해운대구
var name_B16 = new Array('=동/면/리=', '반송동', '반여동', '석대동', '송정동', '우동', '재송동', '좌동', '중동');
var code_B16= new Array('', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8');

function change(si_code){
	sel = document.area.Dong;
	var lis = eval('name_'+ si_code);
	var val = eval('code_'+ si_code);

	for(i=sel.length-1; i>=0; i--)
		sel.options[i] = null;
	
	sel.options[0] = new Option(lis[0],val[0], '', 'true');
	for(i=1; i<lis.length; i++){
		sel.options[i] = new Option(lis[i],val[i]);
	}
}