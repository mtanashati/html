<!--
//쿠폰
function coupon_popup(vACode, vCpId, vParam_Except) {
	var h = 600;
	var w = 640;
	var scr = 'yes';
	var rs = 'no';
	var ntop = (screen.height- h) / 2;
	var nleft = (screen.width - w) / 2;
	var strWndName = 'coupon_popup';
	vParam_Except = ((typeof(vParam_Except) == 'undefined') ? '' : ((vParam_Except.length > 0) ? ('&except=' + vParam_Except) : ''));
	var strURL = '/restaurant/coupon/coupon_view.asp?acode=' + vACode + '&couponid=' + vCpId + vParam_Except;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(strURL, strWndName, strParam);
	wnd.focus();
}
//음식점 사진
function photo_view_popup(vACode, vDefPic, vParam_Except) {
	var h = 780;
	var w = 780;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 2;
	var nleft = (screen.width - w) / 2;
	var wndnm = 'rimg_view_popup';
	vParam_Except = ((typeof(vParam_Except) == 'undefined') ? '' : ((vParam_Except.length > 0) ? ('&except=' + vParam_Except) : ''));
	var url = '/restaurant/onepage/common/photo_view.asp?acode=' + vACode + '&defpic=' + escape(vDefPic) + vParam_Except;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//음식점 동영상
function movie_view_popup(vACode, vType, vParam_Except) {
	var h = 500;
	var w = 780;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 2;
	var nleft = (screen.width - w) / 2;
	var wndnm = 'rimg_view_popup';
	vParam_Except = ((typeof(vParam_Except) == 'undefined') ? '' : ((vParam_Except.length > 0) ? ('&except=' + vParam_Except) : ''));
	var url = '/restaurant/onepage/common/movie_view.asp?acode=' + vACode + '&type=' + vType + vParam_Except;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//추천메일 보내기
function recommMail_popup(acode, aname) {
	var h = 500;
	var w = 500;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 3;
	var nleft = (screen.width - w) / 3;
	var wndnm = 'recommMail_popup';
	var url = '/restaurant/onepage/common/send_recomm_mail_popup.asp?acode=' + acode + '&aname=' + aname;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//사장님께 보내기
function topresMail_popup(acode, aname) {
	var h = 800;
	var w = 500;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 3;
	var nleft = (screen.width - w) / 3;
	var wndnm = 'topresMail_popup';
	var url = '/restaurant/onepage/common/send_topres_mail_popup.asp?acode=' + acode + '&aname=' + aname;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//모바일로 저장
function mobileWrite_popup(acode) {
	var h = 800;
	var w = 500;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 3;
	var nleft = (screen.width - w) / 3;
	var wndnm = 'topresMail_popup';
	var url = '/restaurant/onepage/common/mobile_write_popup.asp?acode=' + acode
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//오류신고
function errorWrite_popup(currentPage) {
	var h = 755;
	var w = 535;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 3;
	var nleft = (screen.width - w) / 3;
	var wndnm = 'errorReport_popup';
	var url = '/restaurant/onepage/common/send_error_report_popup.asp?ErrorPageURL=' + currentPage;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//블러그
function onepage_blogpopup(vAcode) {
	var h = 760;
	var w = 618;
	var scr = 'yes';
	var rs = 'no';
	var ntop = (screen.height- h) / 2;
	var nleft = (screen.width - w) / 2;
	var wndnm = 'blog_popup';
	var url = '/Restaurant/Onepage/Blog/webver.asp?acode=' + vAcode;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.window.focus();
}
//지도
function map_view_popup(vACode, vX, vY, vName) {
	var h = 530;
	var w = 506;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 2;
	var nleft = (screen.width - w) / 2;
	var wndnm = 'map_view_popup';
	vX = ((vX == null) ? '' : '&x=' + vX);
	vY = ((vY == null) ? '' : '&y=' + vY);
	vName = ((vName == null) ? '' : '&name=' + escape(vName));
	var url = '/restaurant/mandomap/map_view.asp?acode=' + vACode + vX + vY + vName;
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=yes,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//지하철검색
function subway_popup() {
	var w = 800;
	var h = 600;
	var scr = 'no';
	var rs = 'no';
	var ntop = (screen.height- h) / 2;
	var nleft = (screen.width - w) / 2;
	var wndnm = 'subway_popup';
	var url = '/restaurant/search/subway_search.asp';
	var strParam  = 'height='+h+',width='+w+',top='+ntop+',left='+nleft+',scrollbars='+scr+',resizable='+rs+',status=no,directories=no,location=no,menubar=no,toolbar=no';
	var wnd = window.open(url, wndnm, strParam);
	wnd.focus();
}
//-->
