<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 1920;
$thumb_height = 1240;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<ul class="d-flex justify-content-between flex-wrap ps-0" id="choicelist">
                  <?php 

                    // $clsArr = array("gumcare", "citrus","greentea","coolmint","coolmintmild","teethand","healthy","fresh","totalmild","totalplus");
                    // $colorInfo = array("#FFDB04","#FE7D03","#BCC960", "#388390","#46C2CA",  "#00D8AF", "#97A7C8", "#01C67D", "#CB6EAF", "#9F4085");
                    // $lilength = count($clsArr);

                   

                    for($i= $list_count -1 ; $i>= 0; $i--){    
                      $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
                      if($thumb['src']) {
                          $img = $thumb['ori'];
                      } else {
                          $img = G5_IMG_URL.'/no_img.png';
                          $thumb['alt'] = '이미지가 없습니다.';
                      }

                      $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid">';
                      $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
                         
                      $list[$i]['file'] = get_file($bo_table, $list[$i]['wr_id']);
            
                      
                        //   $board_file_path = G5_DATA_PATH . '/file/' . $bo_table;
                        //   $board_file_url = G5_DATA_URL . '/file/' . $bo_table;

                        //  $thumb2_src = $board_file_url . "/" . thumbnail($list[$i]['file'][1]['file'], $board_file_path, $board_file_path, $thumb_width,$thumb_height, false,true);


             
                    
                    ?>

                    <style>
                      .<?php echo $list[$i]['wr_5']; ?> .borderLine{
                            border-color:<?php echo $list[$i]['wr_6']; ?>
                          }
                          .<?php echo $list[$i]['wr_5']; ?> .choiceTitle,
                          .<?php echo $list[$i]['wr_5']; ?> .choiceSubtitle{ 
                            background-color: <?php echo $list[$i]['wr_6']; ?>
                          }
                    </style>

                      <li class="<?php echo $list[$i]['wr_5']; ?> position-relative col-sm-6 col-md-4 p-3 mb-5">
                      <div class="borderLine  position-relative mx-4">
                        <div class="d-flex align-items-center justify-content-center bg-white position-relative">
                            <div class="d-flex flex-column justify-content-center align-items-center pt-3 pt-md-4">
                              <?php echo $img_content;?>
                              <strong class="mt-3"><?php echo $list[$i]['subject']; ?></strong>
                            </div>
                            
                          </div>
                          <div class="choiceTitle d-flex justify-content-center align-items-center"><?php echo $list[$i]['wr_3']; ?></div>
                          <div class="choiceSubtitle d-flex justify-content-center align-items-center flex-column">
                          <!-- <img src=<?=//$thumb2_src?> > -->

                            <img src="/coolmint/img/tooth_img.png" alt="잇몸"  class='img-fluid'>
                            <strong class="mt-3"><?php echo $list[$i]['wr_4']; ?></strong>
                          </div>
                      </div>
                       
                      </li>
                    <?php } ?>

                   
                  </ul>

    
       



    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>

