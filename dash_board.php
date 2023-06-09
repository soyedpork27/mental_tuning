<?php



  include './db_con.php';
  include './config.php';




  if (!$user_code || $user_level != 4){
    echo ("
      <script>
        alert('권한이 없는 계정입니다.');
        location.href='index.php';
      </script>
    ");
  }

?>

<!-- php 출력문을 찾기 위해 ( php 출력 ) 을 검색해주세요 -->




<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대시 보드</title>

  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/admin_common.css">

  <!-- 부트스트랩 연결 -->
  <!-- <link rel="stylesheet" href="./css/bootstrap.css"> -->



  <!-- 대시보드 css 서식 -->
  <link rel="stylesheet" href="./css/dash_board.css">
  
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- 제이쿼리 CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- 헤더 스크립트 연결 -->
  <script src="./script/script.js" defer></script>

  <script src="./script/admin_dashboard.js" defer></script>

  <script src="./script/header.js" defer></script>

  <script src="./script/calendar.js" defer></script>



  <!-- 프로그래스 바 시작 -->
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./css/jQuery-plugin-progressbar.css">

  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="jQuery-plugin-progressbar.js"></script>

</head>
<body>
  <div class="t_wrap">
    <div class="left_box">
      &nbsp;
    </div>
    <?php
    include './admin_header.php';
    ?>
    



    <main>
      <section class="ctnt_area">
        <h2 class="sect-title">
          <a href="./dash_board.php" title="대쉬보드 바로가기">
            <img src="./images/back.png" alt="뒤로가기">
            대시보드
          </a>
        </h2>

        <article class="ctnt_box01 t_wrap" id="sect-title01">
          <h3 class="hidden">첫 번째 아티클</h3>

          <ul class="art01-tab01 t_wrap">

            <li class="tab01_btn on">
              <span class="tab_text">
                신규알림
              </span>

              <div class="tab01_ctnt t_wrap" id="tab01-ctnt01">

                <figure class="ctnt01-fig">
                  <a href="./hyun/class_open.php" title="">
                    <img src="./images/dash_alarm01.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="./hyun/class_open.php" title="">
                      개설신청
                    </a>
                    <!-- php 출력 -->
                    <!-- 건 수 출력하기 -->
                    <?php
                    $sql_open = "select * from class_open";
                    $result_open = mysqli_query($con,$sql_open);
                    $row_open = mysqli_num_rows($result_open);
                    ?>
                    <a href="./hyun/class_open.php" title="" class="number_of_data">
                      <span class="number_many"><?=$row_open?></span>건
                    </a>
                  </figcaption>
                </figure>

                <figure class="ctnt01-fig">
                  <a href="#none" title="">
                    <img src="./images/dash_alarm02.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="#none" title="">
                      고객문의
                    </a>
                    <!-- php 출력 -->
                    <!-- 건 수 출력하기 -->
                    <?php
                    $sql_qna = "select * from qna";
                    $result_qna = mysqli_query($con,$sql_qna);
                    $row_qna = mysqli_num_rows($result_qna);
                    ?>
                    <a href="./hyun/class_open.php" title="" class="number_of_data">
                      <span class="number_many"><?=$row_qna?></span>건
                    </a>
                  </figcaption>
                </figure>

                <figure class="ctnt01-fig">
                  <a href="#none" title="">
                    <img src="./images/dash_alarm03.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="#none" title="">
                      게시글 신고
                    </a>
                    <!-- php 출력 -->
                    <!-- 건 수 출력하기 -->
                    <?php
                    $sql_open = "select * from class_open";
                    $result_open = mysqli_query($con,$sql_open);
                    $row_open = mysqli_num_rows($result_open);
                    ?>
                    <a href="./hyun/class_open.php" title="" class="number_of_data">
                      <span class="number_many"><?=$row_open?></span>건
                    </a>
                  </figcaption>
                </figure>

                <figure class="ctnt01-fig">
                  <a href="#none" title="">
                    <img src="./images/dash_alarm04.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="#none" title="">
                      환불 요청
                    </a>
                    <!-- php 출력 -->
                    <!-- 건 수 출력하기 -->
                    <?php
                    $sql_open = "select * from class_open";
                    $result_open = mysqli_query($con,$sql_open);
                    $row_open = mysqli_num_rows($result_open);
                    ?>
                    <a href="./hyun/class_open.php" title="" class="number_of_data">
                      <span class="number_many"><?=$row_open?></span>건
                    </a>
                  </figcaption>
                </figure>

              </div>

            </li>

            <li class="tab01_btn">
              <span class="tab_text">
                신규클래스
              </span>
              <ul class="tab01_ctnt t_wrap" id="tab01-ctnt02">

                <?php
                  $sql_count = "select * from class_list order by code desc limit 4;";
                  $result_count = mysqli_query($con, $sql_count);

                  while($row_count = mysqli_fetch_assoc($result_count)){
                ?>
                  <li class="t-01_ctntimg"><a href="#none" title="클래스 관리 바로가기" class="tab01-class_img"><img src="./images/<?=$row_count['class_img']?>" alt="클래스 사진" class="class_img"></a>
                  <p class="tab01-ctnt_date text-margin01">
                      <span class="gray"><?=$row_count['open_date']?></span>
                  </p>
                  <p class="tab01-ctnt_title text-margin01">
                    <a href="#none" title="">
                      <span class="bold"><?=$row_count['class_name']?></span>
                    </a>
                  </p>
                  <p class="tab01-ctnt_lect text-margin01"><span class=""><?=$row_count['tutor_name']?></span></p>
                </li>
                <?php
                  }
                ?>

              </ul>
            </li>

          </ul>

        </article>
        <div class="t_wrap sect-ctnt02">
          <div class="">
            <article class="">
              <dl class="ctnt_box02 color002">
                <dt class="ctnt_head">
                  <h3 class="art-title mem-man-title">
                    <a href="./kw/user_list.php" title="">회원 관리</a>
                  </h3>
                </dt>
                <dd>
                  <div class="t_wrap table_wrap">
      
                    <div class="">
                      <table class="member_table u_table">
                        <caption class="u_table-title">신규 회원</caption>
      
                        <thead class="u_table-head">
                          <tr>
                            <th>이름</th>
                            <th>관심분야</th>
                            <th>수강 강좌 수</th>
                          </tr>
                        </thead>
      
                        <tbody class="u_table-body">
                          <?php
                          // 멤버 테이블에서 유저 레벨이 0,4 가 아닌 유저들을 뒤에서부터 4 개 불러온다
                          $sql_member = "select * from member where level !=4 and level !=0 order by code desc limit 4";
                          $result_member = mysqli_query($con, $sql_member);
                          while($row_member = mysqli_fetch_assoc($result_member)){
                          ?>
                            <tr>
                              <td><?=$row_member['name']?></td>
                              <td><?=$row_member['interest']?></td>
                              <td><?=$row_member['apply_class']?></td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
      
                      </table>
      
                    </div>
                    
      
                    <div>
                      <table class="tutor_table u_table">
                        <caption class="u_table-title">신규 강사</caption>
      
                        <thead class="u_table-head">
                          <tr>
                            <th>이름</th>
                            <th>직업</th>
                            <th>개설 강좌 수</th>
                          </tr>
                        </thead>
      
                        <tbody class="u_table-body">
                        <?php
      
                          $sql_tutor = "select * from member where level=3 order by code desc limit 4 ";
                          $result_tutor = mysqli_query($con, $sql_tutor);
                          while($row_tutor = mysqli_fetch_assoc($result_tutor)){
                          ?>
                            <tr>
                              <td><?=$row_tutor['name']?></td>
                              <td><?=$row_tutor['job']?></td>
                              <td><?=$row_tutor['open_class']?></td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                        
                      </table>
      
                    </div>
      
                  </div>
                </dd>
              </dl>
            </article>
    
            <article class="ctnt_box02 color003">
            <dl class="ctnt_box02 color002">
                <dt class="ctnt_head">
                  <h3 class="art-title mem-man-title">
                    <a href="./kw/user_list.php" title="">신규 회원 가입 현황</a>  
                  </h3>
                </dt>
                <dd class="pro-bar_box">
                  <!-- 추가한 영역 시작 -->
                <div class="progress-bar position" data-percent="60" data-duration="1000" data-color="#ccc,yellow"></div>
                <div class="progress-bar position" data-percent="60" data-duration="1000" data-color="#ccc,yellow"></div>
                  <!-- 추가한 영역 끝 -->
                </dd>
              </dl>

              <!-- 추가한 영역 시작 -->
              <script>
		            $(".progress-bar").loading();
		            $('input').on('click', function () {
			            $(".progress-bar").loading();
		            });
	            </script>
	            <script type="text/javascript">
		            var _gaq = _gaq || [];
		            _gaq.push(['_setAccount', 'UA-36251023-1']);
		            _gaq.push(['_setDomainName', 'jqueryscript.net']);
		            _gaq.push(['_trackPageview']);

		            (function () {
			            var ga = document.createElement('script');
			            ga.type = 'text/javascript';
			            ga.async = true;
			            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			            var s = document.getElementsByTagName('script')[0];
			            s.parentNode.insertBefore(ga, s);
		            })();
	            </script>
              <!-- 추가한 영역 끝 -->

            </article>

          </div>
          
          <!-- 캘린더 아티클 -->
          <article class="ctnt_box03 color004">
            <h3 class="hidden">calander</h3>
            <div class="sec_cal">
            <div class="cal_nav">
              <a href="javascript:;" class="nav-btn go-prev">prev</a>
              <div class="year-month"></div>
              <a href="javascript:;" class="nav-btn go-next">next</a>
            </div>
            <div class="cal_wrap">
              <div class="days">
                <div class="day">MON</div>
                <div class="day">TUE</div>
                <div class="day">WED</div>
                <div class="day">THU</div>
                <div class="day">FRI</div>
                <div class="day">SAT</div>
                <div class="day">SUN</div>
              </div>
                <div class="dates">
                
                </div>
              </div>
            </div>
  
  
          </article>
        </div>

      </section>
    </main>
  </div>
</body>
</html>