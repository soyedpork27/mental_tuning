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
  <!-- <link rel="stylesheet" href="./css/user_list_detail.css" type="text/css"> -->
  <!-- user_list_modify 서식 -->
  <link rel="stylesheet" href="./css/user_data_modify.css" type="text/css">

  <!-- user_list_detail 서식 -->
  <link rel="stylesheet" href="./css/user_list_detail.css" type="text/css">
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../script/header.js" defer></script>

  <!-- user_list_detail 스크립트 -->
  <script src="./script/user_list_detail.js"></script>
</head>
<body>

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
          <a href="../woogi/user_list_detail.php?no=<?=$num?>" title="">
            <img src="../images/back.png" alt="뒤로가기">
          </a>
          <a href="../woogi/user_list_detail.php?no=<?=$num?>" title="">회원 관리</a>
        </h2>

        <!-- 회원정보 아티클 -->
        <article class="box user-info">
          <h3 class="profile-title">회원정보 수정</h3>
          <form method="post" action="./db_modify.php?no=<?=$num?>">

              <div class="profile-flex flexible">

                  <!-- 유저 사진 -->
                  <div class="user-profile">
                      <div class="profile-circle">
                          <img src="./images/<?=$row['profile']?>" alt="일반회원 프로필사진">
                      </div>
                      <p class="profile-name"><?=$row['name']?></p>
                      <p><input type="file" id="profile" name="profile" class="profile_file" accept=".jpg, .jpeg, .png"></p>
                  </div>

                  <!-- 프로필 테이블 -->
                  <div class="user-table flexible">
                  <div>
                    <dl class="input_wrap">
                        <dt>
                            <label for="name">이름<label></dt>
                                <dd>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="<?=$row['name']?>"
                                        class="admin_modify_input">
                                </dd>
                    </dl>

                    <dl class="input_wrap">
                        <dt>
                            <label for="email">이메일</label>
                        </dt>
                        <dd>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="<?=$row['email']?>"
                                class="admin_modify_input">
                        </dd>
                    </dl>

                    <dl class="input_wrap">
                        <dt>
                            <label for="phone">전화번호</label>
                        </dt>
                        <dd>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                placeholder="<?=$row['phone']?>"
                                class="admin_modify_input">
                        </dd>
                    </dl>
                  </div>
                  <div>
                    <dl class="input_wrap">
                      <dt>
                          <label for="job">직업</label>
                      </dt>
                      <dd>
                          <input
                              type="text"
                              id="job"
                              name="job"
                              placeholder="<?=$row['job']?>"
                              class="admin_modify_input">
                      </dd>
                    </dl>

                    <dl class="input_wrap">
                      <dt>
                        <label for="interest">관심분야</label>
                      </dt>
                      <dd>
                          <input
                              type="text"
                              id="interest"
                              name="interest"
                              placeholder="<?=$row['interest']?>"
                              class="admin_modify_input">
                      </dd>
                    </dl>

                    <dl class="input_wrap">
                      <dt>마케팅 수신동의</dt>
                        <dd class="sms1">
                            <input type="radio"
                                id="sms_agree"
                                name="sms_agree"
                                class="sms_agree"
                                value="Y"
                                <?php if($row['sms_agree']=="Y"){ echo "checked";}?>>
                            <label for="sms_agree">동의</label>
                        </dd>

                        <dd class="sms2">
                          <input type="radio"
                              id="sms_dis"
                              name="sms_agree"
                              class="sms_agree"
                              value="N"
                              <?php if($row['sms_agree']=="N"){ echo "checked";}?>>
                          <label for="sms_dis">거부</label>
                        </dd>
                    </dl>
                  </div>
                  </div>
              </div>

              <button type="submit" class="edit-btn">수정 완료</button>

          </div>

        </form>


        </article>

        

      </section>
    </main>
  </div>
</body>
</html>