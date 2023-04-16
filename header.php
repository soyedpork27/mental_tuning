<?php
    include './db_con.php';
?>


<header class="flexable">


    <div class="ctnt_area flexable">

      <!-- 헤더 로고 시작 -->
      <h1 class="logo">
        <a href="./index.php" title="메인 로고">
          <img src="./images/classu_logo_white 4.png" alt="로고 이미지">
        </a>
      </h1>
      <!-- 헤더 로고 끝 -->

      <!-- 검색박스 시작 -->
      <form action="./search.php" method="post" name="search" class="header-search_form">
        <input type="text" placeholder="무엇을 배우고 싶나요?" id="search" name="search" class="search_form-search_box">
      </form>
      <!-- 검색박스 끝 -->
    </div>

    <!-- 우측 토글버튼 시작 -->
    <div class="header-toggle_box">
      <img src="./images/gnb_btn.png" alt="gnb 버튼" class="gnb_btn">
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