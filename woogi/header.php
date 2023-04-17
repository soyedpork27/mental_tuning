<?php
    include './db_con.php';
?>


<header class="flexable">

    <!-- 헤더 콘텐츠 영역 시작 -->
    <div class="header-ctnt_area flexable">

      <!-- 헤더 로고 시작 -->
      <h1 class="logo">
        <a href="./index.php" title="메인 로고">
          <img src="./images/classu_logo_white 4.png" alt="로고 이미지">
        </a>
      </h1>
      <!-- 헤더 로고 끝 -->

      <!-- 검색박스 시작 -->
      <form action="./search.php" method="post" id="search_form" name="search" class="header-search_form">
        <input type="text" placeholder="무엇을 배우고 싶나요?" id="search" name="search" class="search_form-search_box">

        <!-- 검색 버튼 -->
        <button type="submit" class="search_btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>

        <!--  -->
      </form>
      <!-- 검색박스 끝 -->

    </div>
    <!-- 헤더 콘텐츠 영역 끝 -->

    <!-- 우측 토글버튼 시작 -->
    <div class="header-toggle_box">

      <!-- 임시 로그인 버튼 -->
      <?php
      // 세션에 유저 코드 정보가 저장되어 있지 않을 경우 (로그아웃 상태인 경우)
      if(!isset($_SESSION['user_code'])){
      ?>
        <a href="./login.html" title="로그인 페이지로 이동">
          <img src="./images/gnb_btn.png" alt="gnb 버튼" class="gnb_btn">
        </a>
      <?php
      // 로그인 상태인 경우
      }else {
      ?>
      <a href="./logout.php" title="로그아웃 하기">
        <button>
          로그아웃
        </button>
        <!-- <img src="./images/gnb_btn.png" alt="gnb 버튼" class="gnb_btn"> -->
      </a>
      <?php
      }
      ?>


      <ul class="gnb hidden">
        <li class="gnb-cate">카테고리</li>
        <li class="gnb-class">CLASS</li>
        <li class="gnb-event">이벤트</li>
        <li class="gnb-community">커뮤니티</li>
        <li class="gnb-create">클래스 개설</li>
      </ul>
    </div>
    <!-- 우측 토글 버튼 끝 -->

  </header>