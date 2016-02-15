<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 전 아웃로그인 시작 { -->
<section id="ol_before" class="ol">
    <h2>Member Sign in</h2>
	<div id="fd_page">
		<form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
		<fieldset>
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
			<label for="ol_id" id="ol_idlabel">ID<strong class="sound_only">필수</strong></label>
			<input type="text" id="ol_id" name="mb_id" required class="fd_required" maxlength="20">
			<label for="ol_pw" id="ol_pwlabel">PASSWORD<strong class="sound_only">필수</strong></label>
			<input type="password" name="mb_password" id="ol_pw" required class="fd_required" maxlength="20">
			<input type="submit" id="ol_submit" value="LOGIN">
			<div id="ol_auto">
				<input type="checkbox" name="auto_login" value="1" id="auto_login">
				<label for="auto_login"></label><span id="auto_login_label" style="letter-spacing: -0.5px;font-weight: bold;font-family: 'Nanum Gothic', 굴림, Gulim, 돋움, Dotum, Arial;font-size:12px;color:#333;">자동로그인</span>
			</div>
			
		</fieldset>
		</form>
	</div>
</section>


<script>
$omi = $('#ol_id');
$omp = $('#ol_pw');
$omp.css('display','inline-block');
$omi_label = $('#ol_idlabel');
$omi_label.addClass('ol_idlabel');
$omp_label = $('#ol_pwlabel');
$omp_label.addClass('ol_pwlabel');

$(function() {
    $omi.focus(function() {
        $omi_label.css('visibility','hidden');
    });
    $omp.focus(function() {
        $omp_label.css('visibility','hidden');
    });
    $omi.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_id" && $this.attr('value') == "") $omi_label.css('visibility','visible');
    });
    $omp.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_pw" && $this.attr('value') == "") $omp_label.css('visibility','visible');
    });

    $("#auto_login").click(function(){
        if ($(this).is(":checked")) {
            if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
        }
    });
});

function fhead_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 전 아웃로그인 끝 -->
