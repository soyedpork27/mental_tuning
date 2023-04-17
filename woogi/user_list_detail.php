<?php

  include './db_con.php';
  include './config.php';

  // 선택한 넘버를 변수에 담는다
  $num = $_GET['no'];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>클래스 개설 신청 관리</title>
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/admin_common.css" type="text/css">
  <!-- user_list_detail 서식 -->
  <link rel="stylesheet" href="./css/user_list_detail.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../script/header.js"></script>
  <!-- user_list_detail 스크립트 -->
  <script src="./script/user_list_detail.js"></script>
</head>
<body>

  <?php

    $sql = "select * from member where code=$num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $query_tutor_list = "SELECT class_list.tutor_name FROM `class_list` INNER JOIN `member` ON class_list.code = member.code WHERE member.code = $num";
    $tutor_list = mysqli_query($con, $query_tutor_list);
    $tutor_row = mysqli_fetch_array($tutor_list);

  ?>

  <div class="t_wrap">

    <!-- 헤더(&내비게이션)영역 -->
    <div class="t_wrap">
      <div class="left_box">
        &nbsp;
      </div>
      
    <!-- 메인영역 -->
    <main>
      <section>
        <!-- 페이지 타이틀 -->
        <h2>
          <a href="../kw/user_list.php" title="">
            <img src="../images/back.png" alt="뒤로가기">
          </a>
          <a href="../kw/user_list.php">회원 관리</a>
        </h2>

        <!-- 회원정보 아티클 -->
        <article class="box user-info">
          <h3 class="profile-title">회원 정보</h3>

            <div class="user-wrap-top">
              <div class="profile-flex">
                <div class="user-profile">
                  <div class="profile-circle">
                    <img src="./images/user_profile.png" alt="일반회원 프로필사진">
                  </div>
                  <p class="profile-name"><?=$row['name']?></p>
                </div>
                <div class="tutor-profile">
                  <div class="profile-circle">
                    <img src="./images/user_profile.png" alt="강사회원 프로필사진">
                  </div>
                  <p class="profile-name"><?=$tutor_row['tutor_name']?></p>
                </div>
            <!-- 프로필 테이블 -->
              <div class="profile-table-wrap">
                <table class="profile-table">
                  <colgroup>
                  <col width="20%">
                  <col width="30%">
                  <col width="20%">
                  <col width="30%">
                  </colgroup>
                  <tbody>
                    <tr>
                      <td>이름</td>
                      <td><?=$row['name']?></td>
                      <td>강사명</td>
                      <td><?=$tutor_row['tutor_name']?></td>
                    </tr>
                    <tr>
                      <td>생년월일</td>
                      <td><?=$row['birth']?></td>
                      <td>성별</td>
                      <td><?=$row['gender']?></td>
                    </tr>
                    <tr>
                      <td>이메일</td>
                      <td><?=$row['email']?></td>
                      <td>마케팅 수신</td>
                      <td><?=$row['sms_agree']?></td>
                    </tr>
                    <tr>
                      <td>전화번호</td>
                      <td><?=$row['phone']?></td>
                      <td>가입날짜</td>
                      <td><?=$row['join_date']?></td>
                    </tr>
                    <tr>
                      <td>직업</td>
                      <td><?=$row['job']?></td>
                      <td>관심분야</td>
                      <td><?=$row['interest']?></td>
                    </tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <a href="#none" class="edit-btn">수정</a>
            </div>


            <div class="user-wrap-bottom">
              
              <!-- 탭메뉴 목록 -->
              <ul class="profile-tabmenu">
                <li class="tab-on" data-tab="menu1"><a href="#none" class="tab-on2">수강중인 클래스<span class="tab-on3">4</span></a></li>
                <li data-tab="menu2"><a href="#none">개설한 클래스<span>3</span></a></li>
              </ul>

              <div id="menu1" class="tabcon t-on">  <!-- 탭메뉴 1 :: 수강중인 클래스 -->
                <ul>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum.jpg" alt=""></div></a>
                    <div class="class-desc">
                      <span>D-28</span>
                      <span>2023.04.10 - 2023.05.10</span>
                      <p><a href="#none">프로그램 개발자 양성 강의</a></p>
                      <p>전창우 강사</p>
                    </div>
                  </li>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum2.jpg" alt=""></div></a>
                    <div class="class-desc">
                      <span>D-28</span>
                      <span>2023.04.10 - 2023.05.10</span>
                      <p><a href="#none">프로그램 개발자 양성 강의</a></p>
                      <p>전창우 강사</p>
                    </div>
                  </li>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum.jpg" alt=""></div></a>
                    <div class="class-desc">
                      <span>D-28</span>
                      <span>2023.04.10 - 2023.05.10</span>
                      <p><a href="#none">프로그램 개발자 양성 강의</a></p>
                      <p>전창우 강사</p>
                    </div>
                  </li>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum2.jpg" alt=""></div></a>
                    <div class="class-desc">
                      <span>D-28</span>
                      <span>2023.04.10 - 2023.05.10</span>
                      <p><a href="#none">프로그램 개발자 양성 강의</a></p>
                      <p>전창우 강사</p>
                    </div>
                  </li>
                </ul>
              </div>

              <div id="menu2" class="tabcon">  <!-- 탭메뉴 2 :: 개설한 클래스 -->
                <ul>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum.jpg" alt=""></div></a>
                  <div class="class-desc">
                    <span>D-28</span>
                    <span>2023.04.10 - 2023.05.10</span>
                    <p><a href="#none">프로그램 개발자 양성 강의2</a></p>
                    <p>전창우 강사</p>
                  </div>
                  </li>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum.jpg" alt=""></div></a>
                  <div class="class-desc">
                    <span>D-28</span>
                    <span>2023.04.10 - 2023.05.10</span>
                    <p><a href="#none">프로그램 개발자 양성 강의2</a></p>
                    <p>전창우 강사</p>
                  </div>
                  </li>
                  <li>
                    <a href="#none"><div class="img_overflow"><img src="./images/class_thum.jpg" alt=""></div></a>
                  <div class="class-desc">
                    <span>D-28</span>
                    <span>2023.04.10 - 2023.05.10</span>
                    <p><a href="#none">프로그램 개발자 양성 강의2</a></p>
                    <p>전창우 강사</p>
                  </div>
                  </li>
                </ul>
              </div>

            </div>  
        </article>

        <!-- 회원문의 아티클 -->
        <article class="box user-qna">
          <h3 class="profile-title">회원 문의내역<a href="#none"><span>3</span></a></h3>
            <table class="qna-table">
              <colgroup>
                <col width="15%">
                <col width="35%">
                <col width="17.5%">
                <col width="17.5%">
                <col width="15%">
              </colgroup>
              <thead>
                <tr>
                <th>번호</th>
                <th>제목</th>
                <th>문의등록일</th>
                <th>답변등록일</th>
                <th>답변상태</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>00003</td>
                <td><a href="#none">수강신청을 하고 싶은데 어떻게 하나요?</a></td>
                <td>2023.04.11 PM 05:59</td>
                <td>2023.04.11 PM 05:59</td>
                <td><span class="answer-ing">답변대기</span></td>
                </tr>
                <tr>
                <td>00002</td>
                <td><a href="#none">결제를 했는데 강의가 보이지 않아요.</a></td>
                <td>2023.04.11 PM 05:59</td>
                <td>2023.04.11 PM 05:59</td>
                <td><span class="answer-end">답변완료</span></td>
                </tr>
                <tr>
                <td>00001</td>
                <td><a href="#none">회원정보 수정에서 오류가 떠요.</a></td>
                <td>2023.04.11 PM 05:59</td>
                <td>2023.04.11 PM 05:59</td>
                <td><span class="answer-end">답변완료</span></td>
                </tr>
              </tbody>
            </table>
        </article>

      </section>
    </main>
  </div>
</body>
</html>