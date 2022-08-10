<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
   
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft" class="">

    <div id="ft_wr">
        
        <div class="text-center">
        <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" class="col-3" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
        <div id="ft_link" class="ft_cnt d-flex justify-content-around my-5">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">개인정보처리지침</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">Contact us</a>
        </div>
        <div id="ft_company" class="ft_cnt">
	        <p class="ft_info my-5">
            한국존슨앤드존슨판매(유) | 대표자: 백준혁 | 서울특별시 용산구 한강대로 92 용산타워 27층 | 대표전화: 080-377-0900<br>
            Copyrightⓒ 한국존슨앤드존슨판매(유). 2016-19. All right reserved. Last modified date June 09, 2022.<br>
            이 사이트는 대한민국 사용자만을 위해 한국존슨앤드존슨에서 제작하였으며 내용상 모든 책임은 한국존슨앤드존슨에 있습니다
			</p>
            <p class="ft_sns d-flex justify-content-around align-items-center">
                <a href="#none"><i class="fa-brands fa-youtube"></i></a>
                <a href="#none"><i class="fa-brands fa-facebook"></i></a>
            </p>
	    </div>
       
	</div>      
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        <div id="ft_copy">Copyright &copy; <b>조공윤</b> All rights reserved.</div>
    
    
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
include_once(G5_THEME_PATH."/tail.sub.php");