<?php

include './db_con.php';


?>



<header>
      <h1>
        <a href="../dash_board.php" title="메인 바로가기">
          <img src="../images/classu_logo.png" alt="로고 이미지">
          <span>ADMIN PAGE</span>
        </a>
      </h1>
      <nav>
        <ul class="nav-lv1">
          <li><a href="../dash_board.php" title=""><img src="../images/icon_dashboard.png" alt="대시보드">대시보드</a></li>
          <li><a href="../kw/user_list.php"><img src="../images/icon_user.png" alt="회원 관리">회원 관리</a></li>
          <li class="nav-open">
            <a href="#none"><img src="../images/icon_class.png" alt="클래스 관리">클래스 관리</a>
            <ul class="nav-lv2">
              <li><a href="../hyun/class_open.php" title="">클래스 신청내역</a></li>
              <li><a href="../kw/class_list.php">클래스 개설목록</a></li>
            </ul>
          </li>
          <li class="nav-open">
            <a href="#none"><img src="../images/icon_content.png" alt="콘텐츠 관리">콘텐츠 관리</a>
            <ul class="nav-lv2">
              <li><a href="#none">커뮤니티 관리</a></li>
              <li><a href="#none">공지사항 관리</a></li>
              <li><a href="#none">이벤트 관리</a></li>
            </ul>
          </li>
          <li><a href="#none"><img src="../images/icon_customer.png" alt="고객지원 관리">고객지원 관리</a></li>
        </ul>

        <p class="username"><?=$user_name?> 님의 계정입니다. <br><br>
        <a href="../index.php" title="메인페이지로 바로가기" class="to_main">메인페이지로 바로가기</a>
      </p>

        <div class="logout_btn"><a href="../logout.php" title="로그아웃" id="logout_btn"><img src="../images/icon_logout.png" alt="로그아웃">로그아웃</a></div>
      </nav>
    </header>