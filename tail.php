<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
<!-- </div>
</div>
</div> -->

<!-- 상단에 있는 div 3개 삭제 #main 하나 닫기 -->
</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

<div id="ft_wr">
  <div id="ft_link" class="ft_cnt">
      <a href="<?php echo get_pretty_url('content', 'company'); ?>">매체소개</a>
      <a href="<?php echo get_pretty_url('content', 'company'); ?>">회원문의</a>
      <a href="<?php echo get_pretty_url('content', 'company'); ?>">기사제보</a>
      <a href="<?php echo get_pretty_url('content', 'company'); ?>">광고문의</a>
      <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
      <a href="<?php echo get_pretty_url('content', 'provision'); ?>">청소년보호정책</a>
      <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이메일무단수집거부</a>
      <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
  </div>
  <div id="ft_company" class="ft_cnt">
    <div class="ft_company_g">
      <h2>Tokenpost</h2>
      <div class="main-footer-logo-icons">
        <ul class="main-footer-logo-icons-lst">
          <li class="main-footer-logo-icon-fb"><a href="#">
            <span class="blind">페이스북</span>
          </a></li>
          <li class="main-footer-logo-icon-insta"><a href="#">
            <span class="blind">인스타그램</span>
          </a></li>
          <li class="main-footer-logo-icon-telegram"><a href="#">
            <span class="blind">텔레그램</span>
          </a></li>
          <li class="main-footer-logo-icon-mail"><a href="#">
            <span class="blind">이메일</span>
          </a></li>
        </ul>
      </div>
    </div>
    <p class="ft_info">
      주소  : 서울시 영등포구 양평로 21 가길 19 선유도 우림라이온스밸리 B동 511호 <span>|</span> 대표전화 : 010-7154-9604 <span>|</span> 광고문의 : 010-7154-9604 <br>
      일반문의 : cs@tokenpost.kr <span>|</span> 제보 및 광고 : info@tokenpost.kr <span>|</span> 등록번호 : 서울 아 52481 <span>|</span> 등록일 : 2018.01.02 <span>|</span> 발행일자 : 2017.02.17 <br>
      대표 · 편집인 : 김기현 <span>|</span> 청소년 보호책임자 : 김지호 <span>|</span> 사업자 등록번호 : 232-88-00885 <span>|</span> 통신판매업신고번호 : 2021-서울 영등포-2531
    </p>
    <div id="ft_copy">Copyright &copy; <b>HyebinPark Portfolio</b> All rights reserved.</div>
  </div>
</div>
    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");