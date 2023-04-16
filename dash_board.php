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


  <link rel="stylesheet" href="./css/dash_board.css">

  
  
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- 제이쿼리 CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- 헤더 스크립트 연결 -->
  <script src="./script/script.js" defer></script>

</head>
<body>
  <div class="t_wrap">
    <div class="left_box">
      &nbsp;
    </div>
    <?php
    include './admin_header.php'
    ?>
    



    <main>
      <section class="ctnt_area">
        <h2 class="sect-title">
          <a href="#" title="대쉬보드 바로가기">
            <img src="./images/back.png" alt="뒤로가기">
          </a>
          대시보드
        </h2>

        <article class="ctnt_box01 t_wrap" id="sect-title01">
          <h3 class="hidden">첫 번째 아티클</h3>

          <ul class="art01-tab01 t_wrap">

            <li class="tab01_btn">
              <span class="tab_text">
                신규알림
              </span>

              <div class="tab01_ctnt t_wrap hidden" id="tab01-ctnt01">

                <figure class="ctnt01-fig">
                  <a href="#none" title="">
                    <img src="./images/dash_alarm01.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="#none" title="">
                      신규 개설 신청
                    </a>
                  </figcaption>
                </figure>

                <figure class="ctnt01-fig">
                  <a href="#none" title="">
                    <img src="./images/dash_alarm02.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="#none" title="">
                      Q&#38;A
                    </a>
                  </figcaption>
                </figure>

                <figure class="ctnt01-fig">
                  <a href="#none" title="">
                    <img src="./images/dash_alarm03.png" alt="">
                  </a>
                  <figcaption class="alarm_title">
                    <a href="#none" title="">
                      신고 글
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
                  </figcaption>
                </figure>

              </div>

            </li>

            <li class="tab01_btn">
              <span class="tab_text on">
                신규클래스
              </span>
              <ul class="tab01_ctnt t_wrap" id="tab01-ctnt02">

                <?php
                  $sql_count = "select * from class_list order by code desc limit 4;";
                  $result_count = mysqli_query($con, $sql_count);

                  while($row_count = mysqli_fetch_assoc($result_count)){
                ?>
                  <li class="t-01_ctntimg"><a href="#none" title="클래스 관리 바로가기" class="tab01-class_img"><img src="<?=$row_count['class_img']?>" alt="클래스 사진" class="class_img"></a>
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

                <!-- <li class="t-01_ctntimg"><a href="#none" title="클래스 관리 바로가기" class="tab01-class_img"><img src="./images/main/class01.png" alt="클래스 사진"></a>
                  <p class="tab01-ctnt_date text-margin01">
                      <span class="gray">2023.04.10 PM 05&#58;30</span>
                  </p>
                  <p class="tab01-ctnt_title text-margin01">
                    <a href="#none" title="">
                      <span class="bold">프로그램 개발자 양성 강의</span>
                    </a>
                  </p>
                  <p class="tab01-ctnt_lect text-margin01"><span class="">전창우 강사</span></p>
                </li> -->


                <!-- <li class="t-01_ctntimg"><a href="#none" title="클래스 관리 바로가기" class="tab01-class_img"><img src="./images/main/class01.png" alt="클래스 사진"></a>
                  <p class="tab01-ctnt_date text-margin01">
                      <span class="gray">2023.04.10 PM 05&#58;30</span>
                  </p>
                  <p class="tab01-ctnt_title text-margin01">
                    <a href="#none" title="">
                      <span class="bold">프로그램 개발자 양성 강의</span>
                    </a>
                  </p>
                  <p class="tab01-ctnt_lect text-margin01"><span class="">전창우 강사</span></p>
                </li> -->

                <!-- <li class="t-01_ctntimg"><a href="#none" title="클래스 관리 바로가기" class="tab01-class_img"><img src="./images/main/class01.png" alt="클래스 사진"></a>
                  <p class="tab01-ctnt_date text-margin01">
                      <span class="gray">2023.04.10 PM 05&#58;30</span>
                  </p>
                  <p class="tab01-ctnt_title text-margin01">
                    <a href="#none" title="">
                      <span class="bold">프로그램 개발자 양성 강의</span>
                    </a>
                  </p>
                  <p class="tab01-ctnt_lect text-margin01"><span class="">전창우 강사</span></p>
                </li> -->
                <!-- <li class="t-01_ctntimg"><a href="#none" title="클래스 관리 바로가기" class="tab01-class_img"><img src="./images/main/class01.png" alt="클래스 사진"></a>
                  <p class="tab01-ctnt_date text-margin01">
                      <span class="gray">2023.04.10 PM 05&#58;30</span>
                  </p>
                  <p class="tab01-ctnt_title text-margin01">
                    <a href="#none" title="">
                      <span class="bold">프로그램 개발자 양성 강의</span>
                    </a>
                  </p>
                  <p class="tab01-ctnt_lect text-margin01"><span class="">전창우 강사</span></p>
                </li> -->
              </ul>
            </li>

          </ul>

        </article>
        <div class="t_wrap sect-ctnt02">
          <article class="ctnt_box02">
            <h3 class="art-title mem-man-title">회원 관리</h3>




            <div class="t_wrap table_wrap">

              <div class="">
                <table class="mem_table u_table">
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
                    $sql_member = "select * from member where code<5";
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

                    $sql_member = "select * from member where level=3 and code<5";
                    $result_member = mysqli_query($con, $sql_member);
                    while($row_member = mysqli_fetch_assoc($result_member)){
                    ?>
                      <tr>
                        <td><?=$row_member['name']?></td>
                        <td><?=$row_member['job']?></td>
                        <td><?=$row_member['open_class']?></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                  
                </table>

              </div>

            </div>


          </article>
  
          <article class="ctnt_box02">
            <h3 class="art-title">신규 회원 가입 현황</h3>
            
          </article>

          <article class="ctnt_box02 coulm">
            <h3 class="hidden">세 번째 아티클 박스 제목</h3>
            
            <a href="#none" title="커뮤니티 관리" class="manage_bar t_wrap">
              <span class="manage_title">
                커뮤니티 관리
              </span>
              <i class="fa-solid fa-angle-right angle_60"></i>
            </a>

            <a href="#none" title="이벤트 관리" class="manage_bar t_wrap">
              <span class="manage_title">
                이벤트 관리
              </span>
              <i class="fa-solid fa-angle-right angle_60"></i>
            </a>

            <a href="#none" title="공지사항 관리" class="manage_bar t_wrap">
              <span class="manage_title">
                공지사항 관리
              </span>
              <i class="fa-solid fa-angle-right angle_60"></i>
            </a>

          </article>

          <article class="ctnt_box02">
            <h3 class="hidden">calander</h3>


          </article>


        </div>

      </section>
    </main>
  </div>
</body>
</html>


