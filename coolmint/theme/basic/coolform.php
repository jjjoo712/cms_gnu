<div class="container_3 container-md mt-5" id="form">
                <?php
                  //echo latest('form','form',1,100);
                    ?>

                <div class="formbox col-12 mt-5 ms-2">
                  <div>
                    <h3 class="mb-5 pb-md-5 d-flex flex-column justify-content-center align-items-center"> 해시태그 이벤트 신청하기 </h3>
                  </div>
                    <ul class="form_ul ps-0 mb-0 col-md-9 d-flex justify-content-center mx-md-auto">
                      <div class="col-md-9 mx-md-auto">
                        <li class="form_li form_li_1 d-lg-flex justify-content-between">
                        <div>
                        <strong class="d-lg-flex flex-column justify-content-center align-items-center">인스타그램 아이디</strong>
                      </div>
                      <input type="text" placeholder="아이디를 입력해주세요">
                      </li>
                       <li class="form_li form_li_2 d-lg-flex justify-content-between">
                      <div>
                        <strong class="margin-r1 d-lg-flex flex-column justify-content-center align-items-center">이메일주소</strong>
                      </div>  
                        <input type="text" placeholder="이메일주소를 입력해주세요">
                    </li>
                    <li class="form_li form_li_3 d-lg-flex justify-content-between">
                      <div>
                        <strong class="margin-r2 d-lg-flex flex-column justify-content-center align-items-center">전화번호</strong>
                      </div>  
                        <input type="text" placeholder="전화번호를 입력해주세요">
                    </li>
                    <li class="form_li form_li_4 d-lg-flex justify-content-between">
                      <div>
                        <strong class="d-lg-flex flex-column justify-content-center align-items-center">성별</strong>
                      </div>
                        <div>
                        <input type="radio" name="gender" id="woman" checked="">
                        <label for="woman">여성</label>
                        <input type="radio" name="gender" id="man">
                         <label for="man">남성</label>
                         </div>
                      </li>
                    </div>
                  </ul>
                </div>
                  
                  <li class="form_li form_li_5 col-md-8 mx-auto">
                    <div>  
                     <strong class="d-flex flex-column justify-content-center align-items-center my-5">선호하는 리스테린 타입<br>(2개 이상 골라주세요)</strong>
                    </div>  
                      <ul class="form_typeul row col-md-9 mx-auto">
                          <div class="row col-6 ps-0 ">
                          <li class="my-md-2"><input type="checkbox" name="type" id="coolmint"><label for="coolmint"><span>쿨민트</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="gum"><label for="gum"><span>검케어마일드</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="green"><label for="green"><span>그린티마일드</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="healthy"><label for="healthy"><span>헬씨브라이트</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="coolmild"><label for="coolmild"><span>쿨민트마일드</span></label></li>
                          </div>
                       
                          <div class="row col-6 ps-0">
                          <li class="my-md-2"><input type="checkbox" name="type" id="totalplus"><label for="totalplus"><span>토탈케어플러스</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="totalmild"><label for="totalmild"><span>토탈케어마일드</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="citrus"><label for="citrus"><span>시트러스</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="fresh"><label for="fresh"><span>후레쉬버스트</span></label></li>
                          <li class="my-md-2"><input type="checkbox" name="type" id="teeth"><label for="teeth"><span>티쓰 앤드 검 디펜스</span></label></li>
                          </div>
                      </ul>
                  </li>
                <li class="form_personal my-5">
                  <strong>개인정보 수집 및 동의</strong>
                  <input type="checkbox" name="agree" id="check01"><label for="check01">동의함</label>
                </li>


                <div class="form_submit my-5 py-3">
                <input type="submit" value="제출하기">
                </div>
            </div>