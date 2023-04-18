<?php

include './db_con.php';
include './config.php';


$num = $_GET['num'];

$sql = "select * from member where code='$num'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);



?>




<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>정보 수정</title>
  
  <link rel="stylesheet" href="../css/reset.css" type="text/css">

  <link rel="stylesheet" href="../css/base.css" type="text/css">

  <link rel="stylesheet" href="../css/admin_common.css" type="text/css">

  <!-- user_list_detail 서식 -->
  <link rel="stylesheet" href="./css/user_list_detail.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script src="../script/header.js" defer></script>

  <!-- user_list_detail 스크립트 -->
  <script src="./script/user_list_detail.js"></script>
</head>
<body>

  <?php

    

  ?>

  <div class="t_wrap">

    <!-- 헤더(&내비게이션)영역 -->
    <div class="t_wrap">
      <div class="left_box">
        &nbsp;
      </div>
      
    <?php
    include_once ('./admin_header.php');
    ?>

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
          <h3 class="profile-title">정보 수정</h3>

            <form method="post" action="./db_modify.php?no=<?=$num?>" class="user-wrap-top">
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
                      <td><input type="text" id="name" name="name" placeholder="<?=$row['name']?>"></td>

                    </tr>
                    <tr>
                      <td>생년월일</td>
                      <td><input type="date" id="birth" name="birth" placeholder="<?=$row['birth']?>"></td>

                      

                    </tr>
                    <tr>
                      <td>이메일</td>
                      <td><input type="email" id="email" name="email" placeholder="<?=$row['email']?>"></td>

                    </tr>
                    <tr>
                      <td>전화번호</td>
                      <td><input type="text" id="phone" name="phone" placeholder="<?=$row['phone']?>"></td>


                    </tr>
                    <tr>
                      <td>직업</td>
                      <td><input type="text" id="job" name="job" placeholder="<?=$row['job']?>"></td>

                      <td>관심분야</td>
                      <td><input type="text" id="interest" name="interest" placeholder="<?=$row['interest']?>"></td>

                    </tr>
                    </tbody>
                  </table>
              </div>
            </div>
              <button type="submit" class="edit-btn">수정 완료</button>
          </form>



        </article>

        

      </section>
    </main>
  </div>
</body>
</html>