<?
$Admin_Grade_array = array(
	"1" => "인증대기",
	"2" => "관리자",
	"99" => "전체 관리자"
);
reset($Admin_Grade_array);

$Grade_array = array(
	"0" => "비회원",
	"1" => "예비회원",
	"2" => "정회원",
	"3" => "일반회원",
	"4" => "특별회원",
	"5" => "명예회원",
	"99" => "전체관리자"
);
reset($Grade_array);

$Grade_bg_array = array( 
	"1" => "#ffffff",
	"2" => "#ffffd0", 
	"3" => "#fff1f1", 
	"4" => "#f2eff7", 
	"5" => "#FFF3C2", 
	"99" => "#ebf6e0"
);
reset($Grade_bg_array);

$Site_Grade_array = array( 
	"0" => "비회원",
	"1" => "예비회원",
	"2" => "정회원",
	"3" => "일반회원",
	"4" => "특별회원",
	"5" => "명예회원",
	"99" => "전체관리자"
);
reset($Site_Grade_array);



$Admin_Grade_array = array(  
	"2" => "fd_grade4", 
	"3" => "fd_grade3", 
	"10" => "fd_grade2", 
	"99" => "fd_grade1"
);
reset($Admin_Grade_array);




$use_array = array(
	"Y" => "사용",
	"N" => "사용안함"
);
reset($use_array);
 
##------------------------ 연령대 설정 -----------------------------##
$Age_array = array(
	"10" => "19",
	"20" => "29",
	"30" => "39",
	"40" => "49",
	"50" => "59",
	"60" => "69",
	"70" => "79"
);
reset($Age_array);

##------------------------ 지역설정 -------------------------------##
$Region_array = array(
	"01" => "강원도",
	"02" => "경기도",
	"03" => "경상남도",
	"04" => "경상북도",
	"05" => "광주광역시",
	"06" => "대구광역시",
	"07" => "대전광역시",
	"08" => "부산광역시",
	"09" => "서울특별시",
	"10" => "울산광역시",
	"11" => "인천광역시",
	"12" => "전라남도",
	"13" => "전라북도",
	"14" => "제주도",
	"15" => "충청남도",
	"16" => "충청북도"
);
reset($Region_array);
  
$Tel_Array= array(
	"" => "선택",
	"02" => "02",
	"031" => "031",
	"032" => "032",
	"033" => "033",
	"041" => "041",
	"042" => "042",
	"043" => "043",
	"051" => "051",
	"052" => "052",
	"053" => "053",
	"054" => "054",
	"055" => "055",
	"061" => "061",
	"062" => "062",
	"063" => "063",
	"064" => "064",
	"070" => "070");
reset($Tel_Array);

##------------------------ 직업설정 --------------------------------##

//최종학력  
$school_array = array(
	""   =>"=====선택=====",
	"01"=>"없음",
	"02"=>"초등학교재학",
	"03"=>"초등학교졸업",
	"04"=>"중학교재학",
	"05"=>"중학교졸업",
	"06"=>"고등학교재학",
	"07"=>"고등학교졸업",
	"08"=>"대학교재학",
	"09"=>"대학교졸업",
	"10"=>"대학원재학",
	"11"=>"대학원졸업이상"  
);
reset($school_array);



$Job_array = array(
	""=>"=====선택=====",
	"01"=>"학생",
	"02"=>"컴퓨터/인터넷",
	"03"=>"언론",
	"04"=>"공무원",
	"05"=>"군인",
	"06"=>"서비스업",
	"07"=>"교육",
	"08"=>"금융/증권/보험업",
	"09"=>"유통업",
	"10"=>"예술",
	"11"=>"의료",
	"12"=>"법률",
	"13"=>"건설업",
	"14"=>"제조업",
	"15"=>"부동산업",
	"16"=>"운송업",
	"17"=>"농/수/임/광산업",
	"18"=>"가사",
	"19"=>"기타"  
);
reset($Job_array);

$JoinAnwser_Array= array(
	 "" => "================ 선 택 ================",
	"1" => "아버지의 고향은 어디인가?",
	"2" => "본인의 핸드폰 번호는?",
	"3" => "어머니의 성함은?",
	"4" => "어릴 적 별명은?",
	"5" => "본인이 태어난 곳은?",
	"6" => "가고싶은 장소는?",
	"7" => "즐겨부르는 노래는?",
	"8" => "감명깊게 본 영화는?",
	"9" => "좋아하는 색깔은?",
	"10" => "가장 좋아하는 연예인은?",
	"11" => "부모님이 좋아하는 음식은?",
	"12" => "가장 기억에 남는 선생님은?",
	"13" => "좋아하는 애완동물은?", 
	"14"=>"가장 기억에 남는 장소는?",
	"15"=>"나의 좌우명은?",
	"16"=>"나의 보물 제1호는? ",
	"17"=>"다른 사람은 모르는 나만의 신체비밀은?",
	"18"=>"오래도록 기억하고 싶은 날짜는? ",
	"19"=>"받았던 선물 중 기억에 남는 독특한 선물은? ",
	"20"=>"가장 생각나는 친구 이름은? ",
	"21"=>"인상 깊게 읽은 책 이름은? ",
	"22"=>"읽은 책 중에서 좋아하는 구절은? ",
	"23"=>"내가 존경하는 인물은? ",
	"24"=>"다시 태어나면 되고 싶은 것은?",
	"25"=>"내가 좋아하는 만화 캐릭터는? ",
	"26"=>"초등학교 시절 나의 꿈은? ",
	"27"=>"내 핸드폰 3번에 등록된 사람은?",
	"28"=>"나의 출신 초등학교는? ",
	"29"=>"우리집 애완동물의 이름은? ",
	"30"=>"좋아하는 스포츠 팀 이름은? "


	
	);
reset($JoinAnwser_Array);

$Hp_Array= array(
	"" => "선택",
    "010" => "010",
	"011" => "011",
	"016" => "016",
	"017" => "017",
	"018" => "018",
	"019" => "019",
	"0130"=>"0130",
	"0303"=>"0303", 
	"0502"=>"0502", 
	"0504"=>"0504", 
	"0505"=>"0505", 
	"0506"=>"0506"
	//	"1" => "없음",
);
reset($Hp_Array);
 
$Email_Array=array(
'chollian.net'=>"chollian.net",
'dreamwiz.com'=>"dreamwiz.com",
'empal.com'=>"empal.com",
'freechal.com'=>"freechal.com",
'gmail.com'=>"gmail.com",
'hanafos.com'=>"hanafos.com",
'hanmir.com'=>"hanmir.com",
'hotmail.com'=>"hotmail.com",
'korea.com'=>"korea.com",
'lycos.co.kr'=>"lycos.co.kr",
'naver.com'=>"naver.com",
'nate.com'=>"nate.com",
'netian.com'=>"netian.com",
'paran.com'=>"paran.com",
'yahoo.co.kr'=>"yahoo.co.kr",
''=>"직접 입력"
);
reset($Email_Array);  
 
$Popup_Array=array(
	"Html"=>"HTML",
	"Txt"=>"텍스트",
	"Img"=>"이미지"
);
reset($Popup_Array);

$Popup_Staute_Array=array(
	"O"=>"개시함",
	"C"=>"개시안함"
);
reset($Popup_Staute_Array);
 
$Star_Array=array(
	""		=>"none.gif",
	"0"		=>"s0.gif",
	"0.5"	=>"S1.gif",
	"1"		=>"S2.gif",
	"1.5"	=>"S3.gif",
	"2"		=>"S4.gif",
	"2.5"	=>"S5.gif",
	"3"		=>"S6.gif",
	"3.5"	=>"S7.gif",
	"4"		=>"S8.gif",
	"4.5"	=>"S9.gif",
	"5"		=>"S10.gif",
);
reset($Star_Array);
 
//사이트 회원 검색시 
$Site_Member_Search=array(
 "userID"=>"ID",
 "userName"=>"이름",
 "tel"=>"유선",
 "hp"=>"무선"   
);
reset($Site_Member_Search);
  

$foreign_array=array(
	"zgh"=>"가나",
	"zga"=>"가봉",
	"zgy"=>"가이아나",
	"zgm"=>"감비아",
	"zgp"=>"과델루프",
	"zgt"=>"과테말라",
	"zgu"=>"괌",
	"zgd"=>"그라나다",
	"zge"=>"그루지야",
	"zgr"=>"그리스",
	"zgl"=>"그린란드",
	"zgn"=>"기니",
	"zgw"=>"기니비쏘",
	"zgf"=>"기아나(프랑스령)",
	"zna"=>"나미비아",
	"znr"=>"나우루공화국",
	"zng"=>"나이지리아",
	"zaq"=>"남극대륙",
	"zza"=>"남아프리카 공화국",
	"znl"=>"네덜란드",
	"znp"=>"네팔",
	"zno"=>"노르웨이",
	"znz"=>"뉴질랜드",
	"znc"=>"뉴칼레도니아섬",
	"zne"=>"니제르",
	"zni"=>"니카라과",
	"zdk"=>"덴마크",
	"zdm"=>"도미니카",
	"zdo"=>"도미니카공화국",
	"zde"=>"독일",
	"zla"=>"라오스",
	"zlr"=>"라이베리아",
	"zlv"=>"라트비아",
	"zru"=>"러시아",
	"zlb"=>"레바논",
	"zro"=>"루마니아",
	"zlu"=>"룩셈부르크",
	"zrw"=>"르완다",
	"zly"=>"리비아",
	"zre"=>"리유니온,어소우시에티드제도",
	"zlt"=>"리투아니아",
	"zmg"=>"마다가스카르",
	"zmq"=>"마르티니크섬",
	"zmh"=>"마샬군도",
	"zfm"=>"마이크로네시어",
	"zmo"=>"마카오",
	"zmk"=>"마케도니아",
	"zmw"=>"말라위",
	"zmy"=>"말레이시아",
	"zml"=>"말리",
	"zmx"=>"멕시코",
	"zmc"=>"모나코",
	"zma"=>"모로코",
	"zmr"=>"모리타니아",
	"zmz"=>"모잠비크",
	"zmn"=>"몰골리아",
	"zmv"=>"몰디브",
	"zmt"=>"몰타",
	"zms"=>"몽트세라",
	"zus"=>"미국",
	"zvu"=>"바누아투",
	"zbh"=>"바레인",
	"zbb"=>"바베이도스",
	"zbs"=>"바하마",
	"zbd"=>"방글라데시",
	"zmm"=>"버마",
	"zbm"=>"버뮤다",
	"zvi"=>"버진제도",
	"zbj"=>"베냉",
	"zve"=>"베네수엘라",
	"zvn"=>"베트남",
	"zbe"=>"벨기에",
	"zby"=>"벨로루시아",
	"zbz"=>"벨리즈",
	"zba"=>"보스니아,헤르째고비나",
	"zbw"=>"보츠와나",
	"zbo"=>"볼리비아",
	"zbi"=>"부룬디",
	"zbf"=>"부르키나파소",
	"zbt"=>"부탄",
	"zkp"=>"북한",
	"zbg"=>"불가리아",
	"zbr"=>"브라질",
	"zbn"=>"브루나이",
	"zsa"=>"사우디 아라비아",
	"zws"=>"서사모아",
	"zsn"=>"세네갈",
	"zsc"=>"세이셀제도",
	"zlc"=>"세인트루시아",
	"zvc"=>"세인트빈센트그레나딘즈",
	"zpm"=>"세인트피에르,미론",
	"zsh"=>"세인트헬레나 섬",
	"zso"=>"소말리아",
	"zsd"=>"수단",
	"zsr"=>"수리남",
	"zlk"=>"스리랑카",
	"zsz"=>"스와질랜드",
	"zse"=>"스웨덴",
	"zch"=>"스위스",
	"zes"=>"스페인",
	"zsk"=>"슬로바키아",
	"zsy"=>"시리아",
	"zsl"=>"시에라리온",
	"zsg"=>"싱가포르",
	"zae"=>"아랍에미레이트공화국",
	"zaw"=>"아루바",
	"zam"=>"아르메니아",
	"zar"=>"아르헨티나",
	"zci"=>"아이보리해안",
	"zis"=>"아이슬랜드",
	"zht"=>"아이티",
	"zie"=>"아일랜드",
	"zaz"=>"아제르바이잔",
	"zaf"=>"아프가니스탄",
	"zai"=>"안귈라",
	"zal"=>"알바니아",
	"zdz"=>"알제리",
	"zao"=>"앙골라",
	"zag"=>"앤티가,바부다",
	"zet"=>"에디오피아",
	"zee"=>"에스토니아",
	"zec"=>"에콰도르",
	"zsv"=>"엘살바도르",
	"zuk"=>"영국",
	"zio"=>"영국령인도양",
	"zye"=>"예멘",
	"zom"=>"오만",
	"zat"=>"오스트리아",
	"zhn"=>"온두라스",
	"zjo"=>"요르단",
	"zug"=>"우간다",
	"zuy"=>"우루과이",
	"zuz"=>"우즈베키스탄",
	"zua"=>"우크라이나",
	"zyu"=>"유고슬라비아",
	"ziq"=>"이라크",
	"zir"=>"이란",
	"zil"=>"이스라엘",
	"zeg"=>"이집트",
	"zit"=>"이탈리아",
	"zin"=>"인도",
	"zid"=>"인도네시아",
	"zjp"=>"일본",
	"zjm"=>"자마이카",
	"zzm"=>"잠비아",
	"zgq"=>"적도기니",
	"zcn"=>"중국",
	"zcf"=>"중앙아프리카공화국",
	"zdj"=>"지부티",
	"zgi"=>"지브롤터",
	"zzw"=>"짐바브웨",
	"ztd"=>"차드",
	"zcz"=>"체코",
	"zcl"=>"칠레",
	"zcm"=>"카메룬",
	"zkz"=>"카자흐스탄",
	"zqa"=>"카타르",
	"zkh"=>"캄보디아",
	"zca"=>"캐나다",
	"zke"=>"케냐",
	"zky"=>"케이만제도",
	"zcv"=>"케이프버드",
	"zcr"=>"코스타리카",
	"zco"=>"콜롬비아",
	"zcg"=>"콩고",
	"zzr"=>"콩고민주공화국(구 자이르)",
	"zcu"=>"쿠바",
	"zkw"=>"쿠웨이트",
	"zck"=>"쿡섬",
	"zhr"=>"크로아티아",
	"zki"=>"키리바시",
	"zcy"=>"키프로스",
	"ztw"=>"타이완",
	"ztj"=>"타지키스탄",
	"ztz"=>"탄자니아",
	"zth"=>"태국",
	"ztr"=>"터키",
	"ztc"=>"터키,카이코스제도",
	"ztg"=>"토고",
	"zto"=>"통가",
	"ztm"=>"투르크메니스탄",
	"ztv"=>"투발루",
	"ztn"=>"튀니지",
	"ztt"=>"트리니나드토바고",
	"ztp"=>"티모르",
	"zpa"=>"파나마",
	"zpy"=>"파라과이",
	"zfo"=>"파로에제도",
	"zpk"=>"파키스탄",
	"zpg"=>"파푸아뉴기니아",
	"zpe"=>"페루",
	"zpt"=>"포르투갈",
	"zfk"=>"포클랜드제도",
	"zpl"=>"폴란드",
	"zpf"=>"폴리네시아제도(프랑스령)",
	"zpr"=>"푸에르토리코",
	"zfr"=>"프랑스",
	"zfj"=>"피지제도",
	"zfi"=>"핀란드",
	"zph"=>"필리핀",
	"zhu"=>"헝가리",
	"zau"=>"호주",
	"zhk"=>"홍콩",
	"z"=>"기타 해외"
);
reset($foreign_array);


//-------------------------전국 지역 설정 -------------------------//
$korea_area_array=array(
	"KA1"=>"서울특별시",
	"KA2"=>"광주광역시",
	"KA3"=>"대구광역시",
	"KA4"=>"대전광역시",
	"KA5"=>"부산광역시",
	"KA6"=>"울산광역시",
	"KA7"=>"인천광역시",
	"KA8"=>"경기도",
	"KA9"=>"강원도",
	"KA10"=>"경상남도",
	"KA11"=>"경상북도",
	"KA12"=>"전라남도",
	"KA13"=>"전라북도",
	"KA14"=>"제주도",
	"KA15"=>"충청남도",
	"KA16"=>"충청북도"
);
reset($korea_area_array);

//서울특별시
$KA1_area_array=array(
	"su01"=>"강남구",
	"su02"=>"강동구",
	"su03"=>"강북구",
	"su04"=>"강서구",
	"su05"=>"관악구",
	"su06"=>"광진구",
	"su07"=>"구로구",
	"su08"=>"금천구",
	"su09"=>"노원구",
	"su10"=>"도봉구",
	"su11"=>"동대문구",
	"su12"=>"동작구",
	"su13"=>"마포구",
	"su14"=>"서대문구",
	"su15"=>"서초구",
	"su16"=>"성동구",
	"su17"=>"성북구",
	"su18"=>"송파구",
	"su19"=>"양천구",
	"su20"=>"영등포구",
	"su21"=>"용산구",
	"su22"=>"은평구",
	"su23"=>"종로구",
	"su24"=>"중구",
	"su25"=>"중랑구"
);  
reset($KA1_area_array);

//광주광역시
$KA2_area_array=array(
	"kj1"=>"광산구",
	"kj2"=>"남구",
	"kj3"=>"동구",
	"kj4"=>"북구",
	"kj5"=>"서구"
);  
reset($KA2_area_array); 

//대구광역시
$KA3_area_array=array(
	"dg1"=>"달서구",
	"dg2"=>"달성군",
	"dg3"=>"동구",
	"dg4"=>"북구",
	"dg5"=>"서구",
	"dg6"=>"수성구",
	"dg7"=>"중구",
	"dg8"=>"남구"
);  
reset($KA3_area_array);  

//대전광역시
$KA4_area_array=array(
	"dj1"=>"대덕구",
	"dj2"=>"동구",
	"dj3"=>"서구",
	"dj4"=>"유성구",
	"dj5"=>"중구"
);  
reset($KA4_area_array);  

//부산광역시
$KA5_area_array=array(
	"bs01"=>"강서구",
	"bs02"=>"금정구",
	"bs03"=>"기장군",
	"bs04"=>"남구",
	"bs05"=>"동구",
	"bs06"=>"동래구",
	"bs07"=>"부산진구",
	"bs08"=>"북구",
	"bs09"=>"사상구",
	"bs10"=>"사하구",
	"bs11"=>"서구",
	"bs12"=>"수영구",
	"bs13"=>"연제구",
	"bs14"=>"영도구",
	"bs15"=>"중구",
	"bs16"=>"해운대구"
);  
reset($KA5_area_array);  

//울산광역시
$KA6_area_array=array(
	"us1"=>"남구",
	"us2"=>"동구",
	"us3"=>"북구",
	"us4"=>"울주군",
	"us5"=>"중구"
);  
reset($KA6_area_array);  

//인천광역시
$KA7_area_array=array(
	"ic01"=>"강화군",
	"ic02"=>"계양구",
	"ic03"=>"남구",
	"ic04"=>"남동구",
	"ic05"=>"동구",
	"ic06"=>"부평구",
	"ic07"=>"서구",
	"ic08"=>"연수구",
	"ic09"=>"옹진군",
	"ic10"=>"중구"
);  
reset($KA7_area_array);  
  
//경기도
$KA8_area_array=array(
	"kk01"=>"가평군",
	"kk02"=>"고양시",
	"kk03"=>"과천시",
	"kk04"=>"광명시",
	"kk05"=>"광주시",
	"kk06"=>"구리시",
	"kk07"=>"군포시",
	"kk08"=>"김포시",
	"kk09"=>"남양주시",
	"kk10"=>"동두천시",
	"kk11"=>"부천시",
	"kk12"=>"성남시",
	"kk13"=>"수원시",
	"kk14"=>"시흥시",
	"kk15"=>"안산시",
	"kk16"=>"안성시",
	"kk17"=>"안양시",
	"kk18"=>"양주시",
	"kk19"=>"양평군",
	"kk20"=>"여주군",
	"kk21"=>"연천군",
	"kk22"=>"오산시",
	"kk23"=>"용인시",
	"kk24"=>"의왕시",
	"kk25"=>"의정부시",
	"kk26"=>"이천시",
	"kk27"=>"파주시",
	"kk28"=>"평택시",
	"kk29"=>"포천시",
	"kk30"=>"하남시",
	"kk31"=>"화성시"
);  
reset($KA8_area_array);  

//강원도
$KA9_area_array=array(
	"kw01"=>"강릉시",
	"kw02"=>"고성군",
	"kw03"=>"동해시",
	"kw04"=>"삼척시",
	"kw05"=>"속초시",
	"kw06"=>"양구군",
	"kw07"=>"양양군",
	"kw08"=>"영월군",
	"kw09"=>"원주시",
	"kw10"=>"인제군",
	"kw11"=>"정선군",
	"kw12"=>"철원군",
	"kw13"=>"춘천시",
	"kw14"=>"태백시",
	"kw15"=>"평창군",
	"kw16"=>"홍천군",
	"kw17"=>"화천군",
	"kw18"=>"횡성군"
);  
reset($KA9_area_array);  

//경상남도
$KA10_area_array=array(
	"kn01"=>"거제시",
	"kn02"=>"거창군",
	"kn03"=>"고성군",
	"kn04"=>"김해시",
	"kn05"=>"남해군",
	"kn06"=>"마산시",
	"kn07"=>"밀양시",
	"kn08"=>"사천시",
	"kn09"=>"산청군",
	"kn10"=>"양산시",
	"kn11"=>"의령군",
	"kn12"=>"진주시",
	"kn13"=>"진해시",
	"kn14"=>"창녕군",
	"kn15"=>"창원시",
	"kn16"=>"통영시",
	"kn17"=>"하동군",
	"kn18"=>"함안군",
	"kn19"=>"함양군",
	"kn20"=>"합천군"
);  
reset($KA10_area_array);  

//경상북도
$KA11_area_array=array(
	"kb01"=>"경산시",
	"kb02"=>"경주시",
	"kb03"=>"고령군",
	"kb04"=>"구미시",
	"kb05"=>"군위군",
	"kb06"=>"김천시",
	"kb07"=>"문경시",
	"kb08"=>"봉화군",
	"kb09"=>"상주시",
	"kb10"=>"성주군",
	"kb11"=>"안동시",
	"kb12"=>"영덕군",
	"kb13"=>"영양군",
	"kb14"=>"영주시",
	"kb15"=>"영천시",
	"kb16"=>"예천군",
	"kb17"=>"울릉군",
	"kb18"=>"울진군",
	"kb19"=>"의성군",
	"kb20"=>"청도군",
	"kb21"=>"청송군",
	"kb22"=>"칠곡군",
	"kb23"=>"포항시"
);  
reset($KA11_area_array);  

//전라남도
$KA12_area_array=array(
	"jn01"=>"강진군",
	"jn02"=>"고흥군",
	"jn03"=>"곡성군",
	"jn04"=>"광양시",
	"jn05"=>"구례군",
	"jn06"=>"나주시",
	"jn07"=>"담양군",
	"jn08"=>"목포시",
	"jn09"=>"무안군",
	"jn10"=>"보성군",
	"jn11"=>"순천시",
	"jn12"=>"신안군",
	"jn13"=>"여수시",
	"jn14"=>"영광군",
	"jn15"=>"영암군",
	"jn16"=>"완도군",
	"jn17"=>"장성군",
	"jn18"=>"장흥군",
	"jn19"=>"진도군",
	"jn20"=>"함평군",
	"jn21"=>"해남군",
	"jn22"=>"화순군"
);  
reset($KA12_area_array);  

//전라북도
$KA13_area_array=array(
	"jb01"=>"고창군",
	"jb02"=>"군산시",
	"jb03"=>"김제시",
	"jb04"=>"남원시",
	"jb05"=>"무주군",
	"jb06"=>"부안군",
	"jb07"=>"순창군",
	"jb08"=>"완주군",
	"jb09"=>"익산시",
	"jb10"=>"임실군",
	"jb11"=>"장수군",
	"jb12"=>"전주시",
	"jb13"=>"정읍시",
	"jb14"=>"진안군"
);  
reset($KA13_area_array);
 
//제주도
$KA14_area_array=array(
	"jj1"=>"남제주군",
	"jj2"=>"북제주군",
	"jj3"=>"서귀포시",
	"jj4"=>"제주시"
);  
reset($KA14_area_array);  

//충청남도
$KA15_area_array=array(
	"cn01"=>"계룡시",
	"cn02"=>"공주시",
	"cn03"=>"금산군",
	"cn04"=>"논산시",
	"cn05"=>"당진군",
	"cn06"=>"보령시",
	"cn07"=>"부여군",
	"cn08"=>"서산시",
	"cn09"=>"서천군",
	"cn10"=>"아산시",
	"cn11"=>"연기군",
	"cn12"=>"예산군",
	"cn13"=>"천안시",
	"cn14"=>"청양군",
	"cn15"=>"태안군",
	"cn16"=>"홍성군"
);  
reset($KA15_area_array);  

//충청북도
$KA16_area_array=array(
	"cb01"=>"괴산군",
	"cb02"=>"단양군",
	"cb03"=>"보은군",
	"cb04"=>"영동군",
	"cb05"=>"옥천군",
	"cb06"=>"음성군",
	"cb07"=>"제천시",
	"cb08"=>"진천군",
	"cb09"=>"청원군",
	"cb10"=>"청주시",
	"cb11"=>"충주시"
);  
reset($KA16_area_array);  
 
//-------------------------전국 지역 설정 -------------------------//

//이벤트 진행여부

$statusType=array( 
	"1"=>"진행중",
	"2"=>"-"
);
reset($statusType);

//뉴스 카테고리
$news_category_array=array( 
"desultory"	=>"상업인테리어",
"sports"		=>"사무인테리어",
"people"		=>"기타인테리어",
"section"		=>"주거리모델링",
"woman"		=>"상업리모델링",
"photo"		=>"주거인테리어",
"beauty"		=>"포트폴리오",
"hair"		=>"신축/증축"
);
reset($news_category_array);


//뉴스 카테고리 검색용
$news_category_search_array=array( 
"desultory"	=>"상업인테리어",
"sports"		=>"사무인테리어",
"people"		=>"기타인테리어",
"section"		=>"주거리모델링",
"woman"		=>"상업리모델링",
"photo"		=>"주거인테리어",
"beauty"		=>"포트폴리오",
"hair"		=>"신축/증축"
);
reset($news_category_search_array);


$news_category_login_array=array( 
"column"		=>"재테크정보",
"desultory"	=>"최신영화",
"sports"		=>"성에관한진실",
"section"		=>"웰빙포인트",
"woman"		=>"지구촌이미지",
"photo"		=>"최고!맛집"
);
reset($news_category_login_array);

//뉴스 카테고리 페이지
$news_category_page_array=array( 
""				=>"/bbs/index.php",
"plan"			=>"/bbs/index_02.php",
"society"		=>"/bbs/index_03.php",
"economy"	=>"/bbs/index_04.php",
"health"		=>"/bbs/index_05.php",
"politics"		=>"/bbs/index_06.php",
"education"	=>"/bbs/index_07.php",
"culture"		=>"/bbs/index_08.php",
"living"		=>"/bbs/index_09.php",
"column"		=>"/bbs/index_10.php",
"desultory"	=>"/bbs_photo/man_list.php",
"sports"		=>"/bbs/index_11.php",
"people"		=>"/bbs/index_12.php",
"section"		=>"/bbs/index_13.php",
"woman"		=>"/bbs/index_14.php",
"travel"		=>"/bbs/index_15.php",
"fair"		=>"/bbs/index_16.php",
"beauty"		=>"/bbs/beauty_01.php",
"skin"		=>"/bbs/beauty_02.php",
"dental"		=>"/bbs/beauty_03.php",
"hair"		=>"/bbs/beauty_04.php",
"diet"		=>"/bbs/beauty_05.php",
"nail"		=>"/bbs/beauty_06.php",
"makeup"		=>"/bbs/beauty_07.php",
"msg"		=>"/bbs/beauty_08.php",
"product"		=>"/bbs/beauty_09.php",
"perfume"		=>"/bbs/beauty_10.php",
"mr"		=>"/bbs/beauty_11.php",
"photo"		=>"/bbs_photo/photo_list.php"
);
reset($news_category_page_array);


$news_category_page_view_array=array( 
""				=>"/bbs/detail.php",
"plan"			=>"/bbs/detail.php",
"society"		=>"/bbs/detail.php",
"economy"	=>"/bbs/detail.php",
"health"		=>"/bbs/detail.php",
"politics"		=>"/bbs/detail.php",
"education"	=>"/bbs/detail.php",
"culture"		=>"/bbs/detail.php",
"living"		=>"/bbs/detail.php",
"column"		=>"/bbs/detail.php",
"desultory"	=>"/bbs_photo/man_list.php",
"sports"		=>"/bbs/detail.php",
"people"		=>"/bbs/detail.php",
"section"		=>"/bbs/detail.php",
"woman"		=>"/bbs/detail.php",
"travel"		=>"/bbs/detail.php",
"fair"		=>"/bbs/index_16.php",
"beauty"		=>"/bbs/beauty_01.php",
"skin"		=>"/bbs/beauty_02.php",
"dental"		=>"/bbs/beauty_03.php",
"hair"		=>"/bbs/beauty_04.php",
"diet"		=>"/bbs/beauty_05.php",
"nail"		=>"/bbs/beauty_06.php",
"makeup"		=>"/bbs/beauty_07.php",
"msg"		=>"/bbs/beauty_08.php",
"product"		=>"/bbs/beauty_09.php",
"perfume"		=>"/bbs/beauty_10.php",
"mr"		=>"/bbs/beauty_11.php",
"photo"		=>"/bbs_photo/photo_view.php"
);
reset($news_category_page_view_array);


$newsType_array =array( 
"N"			=>"일반",
"B"		=>"베스트",
"R"		=>"추천"
);
reset($newsType_array); 

$news_Search_array=array( 
"title"			=>"제목",
"writerName"		=>"작성자",
"contents"		=>"내용"
);
reset($news_Search_array);


$peopleType_array =array( 
"N"			=>"일반",
"B"		=>"이달의 인물"
);
reset($peopleType_array); 

$subscription_period_array=array(
"1"=>"1년",
"10"=>"10년",
"lifetime"=>"평생"
);
reset($subscription_period_array); 

$subscription_payment_array=array(
"3-ing"=>"30,000원 입금 대기",
"3-ed"=>"30,000원 입금 완료",
"10-ing"=>"300,000원 입금 대기",
"10-ed"=>"300,000원 입금 완료",
"lifetime-ing"=>"500,000원 입금 대기",
"lifetime-ed"=>"500,000원 입금 완료"
);
reset($subscription_payment_array); 


$total_search_array=array(
""=>"통합검색",
"main"=>"메인검색",
"news"=>"뉴스검색",
"beauty"=>"뷰티검색",
"wedding"=>"웨딩검색",
"business"=>"창업검색",
"company"=>"업체검색",
"shop"=>"쇼핑검색"
);
reset($total_search_array); 


$board_search_pg_array=array(
"b_notice"=>"/bbs/notice_list.php",//공지사항
"b_woman"=>"/bbs/bbs_woman.php",//제휴&가맹문의
"b_free"=>"/bbs/bbs_free.php",//제휴사인사
"b_beauty"=>"/bbs/bbs_beauty.php",//네티즌세상
"b_wedding"=>"/bbs/bbs_wedding.php",//세상보기
"b_baby"=>"/bbs/bbs_baby.php",//여성토론방
"b_tour"=>"/bbs/bbs_tour.php",//근교..가볼만한곳
"b_hospital"=>"/bbs/bbs_hospital.php",//네티즌포토
"b_interior"=>"/bbs/bbs_interior.php",//디카세상
"b_insurance"=>"/bbs/bbs_insurance.php",//셀카세상
"b_tugo"=>"/bbs/bbs_com.php",//우리회사알리기
"b_opinion"=>"/bbs/bbs_meet.php",//동호회/모임
"b_event"=>"/bbs/openshop.php",//영화세상
"b_home"=>"/bbs/bbs_home.php",//무료홈피이벤트문의
"wnews_b_notice"=>"/bbs/notice_list.php",//공지사항
"wnews_b_woman"=>"/bbs/bbs_woman.php",//여성상담실
"wnews_b_free"=>"/bbs/bbs_free.php",//자유게시판
"wnews_b_beauty"=>"/bbs/bbs_beauty.php",//뷰티
"wnews_b_wedding"=>"/bbs/bbs_wedding.php",//웨딩
"wnews_b_baby"=>"/bbs/bbs_baby.php",//육아
"wnews_b_tour"=>"/bbs/bbs_tour.php",//여행
"wnews_b_hospital"=>"/bbs/bbs_hospital.php",//병원
"wnews_b_interior"=>"/bbs/bbs_interior.php",//인테리어
"wnews_b_insurance"=>"/bbs/bbs_insurance.php",//보험
"wnews_b_tugo"=>"/tugo/tugo.php",//독자투고&제보
"wnews_b_opinion"=>"/openshop/openshop.php",//여론광장
"wnews_b_event"=>"/hangsa/hs.php",//각종행사안내
"wbuss_b_notice"=>"/bbs/notice_list.php",//공지사항
"wbuss_b_woman"=>"/bbs/bbs_woman.php",//여성상담실
"wbuss_b_free"=>"/bbs/bbs_free.php",//자유게시판
"wbuss_b_beauty"=>"/bbs/bbs_beauty.php",//전수창업
"wbuss_b_wedding"=>"/bbs/bbs_wedding.php",//이렇게성공했다
"wbuss_b_baby"=>"/bbs/bbs_baby.php",//여성창업아이템
"wbuss_b_tour"=>"/bbs/bbs_tour.php",//성공의조건
"wbuss_b_hospital"=>"/bbs/bbs_hospital.php",//회원추천창업
"wbuss_b_interior"=>"/bbs/bbs_interior.php",//온라인창업아이템
"wbuss_b_insurance"=>"/bbs/bbs_insurance.php",//해외에선지금
"wbuss_b_tugo"=>"/tugo/tugo.php",//요즘뜨는아이템
"wbuss_b_opinion"=>"/openshop/openshop.php",//창업홍보방
"wbuss_b_event"=>"/hangsa/hs.php"//동업해요

);
reset($board_search_pg_array); 



$mobile_order_states_array = array(
	"1" => "접수완료",
	"2" => "접수확인",
	"3" => "발송완료"
);
reset($mobile_order_states_array);
 
$mobile_order_states_view_array = array(
	"1" => "<font color='#990000'>접수완료</font>",
	"2" => "<font color='#000099'>접수확인</font>",
	"3" => "<font color='#333333'>발송완료</font>"
);
reset($mobile_order_states_view_array);

$tcenter_order_states_array = array(
	"1" => "접수완료",
	"3" => "접수확인",
	"5" => "입금확인",
	"7" => "발송완료"
);
reset($tcenter_order_states_array);
 
 
 
$tcenter_order_states_view_array = array(
	"1" => "<font color='#990000'>접수완료</font>",
	"3" => "<font color='#000099'>접수확인</font>",
	"5" => "<font color='#009900'>입금확인</font>",
	"7" => "<font color='#333333'>발송완료</font>"
);
reset($tcenter_order_states_view_array);
?>