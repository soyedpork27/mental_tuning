<?php

include './db_con.php';

?>




<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- 공통 서식 css 시작 -->

  <link rel="stylesheet" href="./css/reset.css">
  
  <link rel="stylesheet" href="./css/base.css">

  <link rel="stylesheet" href="./css/common.css">
  <!-- 공통 서식 css 끝 -->


  <!-- 로그인 css -->
  <link rel="stylesheet" href="./css/login.css">



  
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  
  <!-- 제이쿼리 CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
  
  
  <title>회원가입</title>
  
</head>
<body>

  <!-- 헤더 영역 시작 -->
  <?php
    include './header.php';
  ?>
  <!-- 헤더 영역 끝 -->

  <!-- 메인 영역 시작 -->
  <main>
    <section class="login-sect01 ctnt_area sect_margin">

      <h2 class="hidden">섹션 제목 (숨겨짐)</h2>

      <!-- 로그인 박스 시작 -->
      <article class="sect01-art01 ">
        
        <h3 class="sect_title01">회원가입</h3>

        <!-- 로그인 폼 태그 시작 -->
        <form action="./signup_db.php" name="login" method="post" class="art01_form">
        
          <!-- 이메일 인풋박스 -->
          <label for="email" class="">
            이메일
          </label>
          <input type="text" id="email" name="email" placeholder="이메일을 입력해 주세요." class="form-input01">
      
          <!-- 비밀번호 인풋박스 -->
          <label for="pw" class="">
            비밀번호
          </label>
          <input type="password" id="pw" name="pw" placeholder="비밀번호를 입력해 주세요." class="form-input01">

          <label for="pwc" class="">
            비밀번호
          </label>
          <input type="password" id="pwc" name="pwc" placeholder="비밀번호를 입력해 주세요." class="form-input01">

          <label for="birth" class="">
            생년월일
          </label>
          <input type="text" id="birth" name="birth" placeholder="생년월일을 입력해주세요 예)1999-01-01" class="form-input01">



          <p>성별</p>

          <label for="radio_male">
            남성
          </label>
          <input type="radio" id="radio_male" name="radio_gender" value="M">

          <label for="radio_female">
            여성
          </label>
          <input type="radio" id="radio_female" name="radio_gender" value="F">

          <label for="phone" class="">
            휴대전화
          </label>
          <input type="text" id="phone" name="phone" placeholder="전화번호를 '-' 없이 입력해주세요" class="form-input01">

          <label for="job" class="">
            직업
          </label>
          <input type="text" id="job" name="job" placeholder="직업을 적어주세요" class="form-input01">


          <label for="interest" class="">
            관심사
          </label>
          <input type="text" id="interest" name="interest" placeholder="관심사를 적어주세요" class="form-input01">

          <p>수신 동의</p>

          <label for="sms_agree">
            동의
          </label>
          <input type="radio" id="sms_agree" name="radio_SMS" value="Y">

          <label for="sms_disagree">
            비동의
          </label>
          <input type="radio" id="sms_disagree" name="radio_SMS" value="N">

          <button type="submit" class="login_btn form_btn">
            회원 가입
          </button>

        </form>

      </article>
      <!-- 로그인 박스 끝 -->

    </section>


  </main>
  <!-- 메인 영역 끝 -->

  <!-- 푸터 영역 시작 -->
  <footer>

  </footer>
  <!-- 푸터 영역 끝 -->
  
</body>
</html>