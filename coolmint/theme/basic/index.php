<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가




//상단을 둘로 나눠서 메인페이지에서의 상단과 그 외 페이지상단의 레이아웃구분한다.
include_once(G5_THEME_PATH.'/head_m.php');
?>
<h2 class="sound_only">최신글</h2>

<!-- 진짜 슬라이드 넣기 -->
    
    <div class="container_w ">
        
            <div class="container_1">
            <?php 
            echo latest('youtube','youtube',1,100);
            ?>
            </div>
        
        
            <div class="container_2 " id="event_2" >
            <?php
              //echo latest('main_event','main_event',1,100);
                ?>

<div class="second__floor  mx-md-auto container-md">
        <div class="second_banner d-md-flex justify-content-between align-items-center mx-md-auto col-md-10">   
              
      <div class="insta_event_ment col-md-6">
        <div class="event_notice ms-2 ms-md-0">
                <div>
                  <img src="https://irrepp176.cafe24.com/coolmint/data/editor/2207/b76b06ac9ddc4ce2472f8df6e71c75fb_1658594309_8398.png" class="img-fluid col-2"> <p class="blue800">#해시태그 이벤트</p>
                </div>

                <p class="red800">해시태그</p>
                <p class="colorb">달고</p>
                <p class="blue800">휴대용키트</p>
                <p class="colorb">받자!</p>

              <div class="eventbox col-md-9">
                    <div class="event_">
                    <div class="eventbox_btn __btn">이벤트기간 </div>
                    <div class="event_ment">2022.06.01 ~ 2022.06.30</div>
                  </div>
                  <div class="event_">
                    <div class="eventbox_btn __btn">당첨자발표 </div>
                    <div class="event_ment">2022.07.15 개별당첨안내</div>
                  </div>
                  <div class="event_">
                    <div class="eventbox_btn __btn">참여방법 </div>
                    <div class="event_ment col-8">필수 해시태그 SNS 에 인증샷 올리면<br>100분을 추첨해 휴대용키트 증정</div>
                  </div>
                  <div class="eventhash">
                    <div>#리스테린</div>
                    <div>#항상챙기기</div>
                    <div>#상쾌한하루</div>
                  </div>
                  <div class="event_">
                    <div class="eventbox_btn __btn">이벤트문의</div>
                    <div class="event_ment">listerine_office@gmail.com</div>
                  </div>
              </div>
        </div>
      </div>

       <div class="insta_img my-3 my-md-0 px-0 text-center text-md-left position-relative" >
              <img src="data/editor/2207/6169804bbb2182c865ff6831d3c4a3d6_1657853696_6968.png" alt="insta" class="img-fluid">
                <div class="insta_ment"> 
                    <div data-aos="zoom-in">listerinekorea_official </div>
                </div>
                <div class="hash_ment2 ">
                  <div data-aos="fade-down "> 상쾌한 하루 시작~</div>
                </div>
                <div class="hashhash d-flex">
                  <div data-aos="fade-down" data-aos-delay=" 50">#상쾌한하루</div>
                  <div data-aos="fade-down" data-aos-delay=" 70">#리스테린</div>
                  <div data-aos="fade-down" data-aos-delay="90">#항상챙기기</div>
              </div>
            </div>

    </div>
  </div>
</div>
        
<?php include_once(G5_THEME_PATH.'/coolform.php'); ?>
        

            <div class="container_4">
                <?php
                    echo latest('main_page','main_page',1,100);
                    ?>
            </div>
            <div class="container_5 container-fluid mx-auto">
                <?php echo latest('persona','persona',1,100);
                ?>
            </div>
            <div class="container_6">
                <?php //echo latest('essential','essential',1,100);
                ?>
                <div id="essential" class=" text-center">
                    
                    <h3 class="my-5 d-flex flex-column justify-content-center align-items-center">리스테린의 특별한<br>4가지 에센셜 오일 성분</h3>

                    <div class="essential_img row container mx-auto">
                      <div class="essential_img1 col-6 col-md-3 my-5 my-md-0 d-flex flex-column justify-content-center align-items-center">
                        <img src="data/editor/2207/b76b06ac9ddc4ce2472f8df6e71c75fb_1658677776_6702.png" alt="유칼립툴">
                        <p class="my-3 d-flex flex-column justify-content-center align-items-center">유칼립톨</p>
                      </div>
                      <div class="essential_img2 col-6 col-md-3 my-5 my-md-0 d-flex flex-column justify-content-center align-items-center">
                        <img src="data/editor/2207/b76b06ac9ddc4ce2472f8df6e71c75fb_1658677776_2869.png" alt="멘톨">
                        <p class="my-3 d-flex flex-column justify-content-center align-items-center">멘톨</p>
                      </div>
                      <div class="essential_img3 col-6 col-md-3 my-5 my-md-0 d-flex flex-column justify-content-center align-items-center">
                        <img src="data/editor/2207/b76b06ac9ddc4ce2472f8df6e71c75fb_1658677776_3922.png" alt="티몰">
                        <p class="my-3 d-flex flex-column justify-content-center align-items-center">티몰</p>
                      </div>
                      <div class="essential_img4 col-6 col-md-3 my-5 my-md-0 d-flex flex-column justify-content-center align-items-center">
                        <img src="data/editor/2207/b76b06ac9ddc4ce2472f8df6e71c75fb_1658677776_3457.png" alt="살리실산메틸">
                        <p class="my-3 d-flex flex-column justify-content-center align-items-center">살리실산메틸</p>
                      </div>
                    </div>
                    <div class=" my-5 essential_btn"><a href="#none" class="__btn mx-auto">자세히 알아보기 &gt; </a></div>
                  </div>
            </div>
          </div>

          <div id="choice" class="container_7 container-md py-5 position-relative">
          <div class="text-center my-5 ">
                     <h2 class="d-flex flex-column justify-content-center align-items-center">나에게 맞는 리스테린은?</h2>
                     <h4 class="my-5 d-flex justify-content-center">마우스를 올려보세요!</h4>
                  </div>
               <?php echo latest('choice','choice',10,100); ?>
                 
                  
                 
              
          </div>
          <div id="package" class="container_8 container-md">
              <?php //echo latest('package','package',1,100); ?>
              <div class="text-center my-5 pt-5">
                <h3 class="py-5">구강청결제가 처음이라면?</h3>
                <h2 class="my-5 position-relative d-flex flex-column justify-content-center align-items-center">리스테린 스타터팩</h2>
              </div>

              <div class="swiper col-12 col-md-6">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper my-5">
                    <!-- Slides -->
                    <div class="swiper-slide pack1"></div>
                    <div class="swiper-slide pack2"></div>
                    <div class="swiper-slide pack3"></div>
                  </div>
                                      
              </div>
              
                  <div class="my-3">
                    <ul class="d-flex flex-column col-11 col-md-4 mx-md-auto ps-0 ps-md-auto">
                      <li class=" aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">밖에서도 편하게 가글하세요</li>
                      <li class="aos-init aos-animate" data-aos="fade-down" data-aos-duration="2000">원하는 제품으로 담을 수 있어요</li>
                      <li class="aos-init aos-animate" data-aos="fade-down" data-aos-duration="2000">#리스테린 #휴대용가글 #리-하-</li>
                    </ul>
                  </div>


          
          </div>
          <div id="buy" class="container_9 container-md py-5">
              <?php //echo latest('buy','buy',1,100); ?>
            <div class="text-center my-5">
              <h2 class="d-flex flex-column align-items-center">리스테린 구매하기</h2>
              <div class="buybox d-flex justify-content-around my-5 align-items-center">
                <a href="#none" class="mx-2"><img src="/coolmint/img/naver_logo.png" alt="naver" class="img-fluid"></a>
                <a href="#none" class="mx-2"><img src="/coolmint/img/eleven_logo.png" alt="eleven" class="img-fluid"></a>
                <a href="#none" class="mx-2"><img src="/coolmint/img/coupang_logo.png" alt="coupang" class="img-fluid"></a>
                <a href="#none" class="mx-2"><img src="/coolmint/img/gmarket_logo.png" alt="gmarket" class="img-fluid"></a>
                <a href="#none" class="mx-2"><img src="/coolmint/img/olive_logo.png" alt="oliveyoung" class="img-fluid"></a>
              </div>
              <!-- <div class="buybox fixed d-flex justify-content-around my-5 align-items-center mx-auto">
                <a href="#none"><img src="/coolmint/img/naver_logo.png" alt="naver"></a>
                <a href="#none"><img src="/coolmint/img/eleven_logo.png" alt="eleven"></a>
                <a href="#none"><img src="/coolmint/img/coupang_logo.png" alt="coupang"></a>
                <a href="#none"><img src="/coolmint/img/gmarket_logo.png" alt="gmarket"></a>
                <a href="#none"><img src="/coolmint/img/olive_logo.png" alt="oliveyoung"></a>
              </div> -->
            </div>
            
            
            
          </div>
          <div id="follow" class="container_10 container-md mx-auto">
            <?php //echo latest('follow','follow',1,100); ?>
            <div class="d-md-flex justify-content-around py-5">
              <div class="d-flex flex-column">
                <h2 class="mx-auto">찾아오시는 길</h2>
                <p class="my-3 mx-auto mx-md-0">서울특별시 용산구 한강대로 92 용산타워 27층</p>
                <p class="mx-auto my-3">한국존슨앤드존슨판매(유)</p>
              </div>
              <div class="kakao col-12 col-md-6">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1660016926024" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                  2. 설치 스크립트
                  * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                  new daum.roughmap.Lander({
                    "timestamp" : "1660016926024",
                    "key" : "2bbad",
                    // "mapWidth" : "260",
                    // "mapHeight" : "250"
                  }).render();
                </script>
                </div>
              </div>
          </div>
          
            
         
    




    <!-- } 최신글 끝 -->


   


<?php
include_once(G5_THEME_PATH.'/tail.php');



