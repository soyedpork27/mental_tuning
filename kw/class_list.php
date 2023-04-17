<?php
  include_once('./db_con.php');
  include_once('./config.php');

  $query_list = "SELECT * FROM class_list ORDER BY code desc limit 10";
  $result_list = mysqli_query($con, $query_list);

?>


<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>강의 정보</title>

  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="./css/class_list.css" type="text/css">
  <link rel="stylesheet" href="../css/admin_common.css" type="text/css">

  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" type="text/css">

  <!-- 제이쿼리 CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- 헤더 스크립트 연결 -->
  <script src="../script/script.js" defer></script>

</head>
<body>
  <div class="t_wrap">
    <div class="left_box">
      &nbsp;
    </div>

    <?php
      include_once('./admin_header.php')
    ?>
    <!-- <header>
      <h1>
        <a href="index.html" title="메인 바로가기">
          <img src="../images/classu_logo.png" alt="로고 이미지">
          <p>ADMIN PAGE</p>
        </a>
      </h1>
      <nav>
        <ul class="nav-lv1">
          <li><a href="#none"><img src="../images/icon_dashboard.png" alt="대시보드">대시보드</a></li>
          <li><a href="#none"><img src="../images/icon_user.png" alt="회원 관리">회원 관리</a></li>
          <li class="nav-open">
            <a href="#none"><img src="../images/icon_class.png" alt="클래스 관리">클래스 관리</a>
            <ul class="nav-lv2">
              <li><a href="#none">클래스 신청내역</a></li>
              <li><a href="#none">클래스 개설목록</a></li>
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

        <div class="logout_btn"><a href="#none"><img src="../images/icon_logout.png" alt="로그아웃">로그아웃</a></div>
      </nav>
    </header> -->

    <main>
      <section id="mem_list">
        <h2>
          <a href="#" title="대시보드 바로가기">
            <img src="../images/back.png" alt="뒤로가기"> 강의 정보
          </a>
        </h2>

        <form name="" method="" action="">
          <fieldset class="searchbox">
              <legend class="hidden">클래스 정보 검색</legend>
              <label for="filter"><img src="../images/fillter.png" alt="필터 아이콘"></label>
              <select name="searchfilter" id="searchfilter" class="filter">
                <option value="검색할 항목을 선택하세요">검색할 항목을 선택하세요</option>
                <option value="카테고리">카테고리</option>
                <option value="클래스명">클래스명</option>
                <option value="강사명">강사명</option>
                <option value="검색 태그">검색 태그</option>
                <option value="개강일">개강일</option>
                <option value="기간">기간</option>
                <option value="개설여부">개설여부</option>
              </select>
              <label for="search"><img src="../images/research.png" alt="검색 아이콘"></label>
              <input type="searchbox" placeholder="검색어를 입력하세요" class="search">
          </fieldset>

          <article id="mem_list_table">
            <h2 class="hidden">클래스 조회</h2>
            <table>
              <caption class="hidden"></caption>
              <thead>
                  <tr>
                      <th><input type="checkbox" class="check_all"></th>
                      <th>No</th>
                      <th>카테고리<i class="fa fa-angle-down"></i></th>
                      <th>클래스명<i class="fa fa-angle-down"></i></th>
                      <th>강사명<i class="fa fa-angle-down"></i></th>
                      <th>검색태그<i class="fa fa-angle-down"></i></th>
                      <th>개강일<i class="fa fa-angle-down"></i></th>
                      <th>기간<i class="fa fa-angle-down"></i></th>
                      <th>개설여부<i class="fa fa-angle-down"></i></th>
                  </tr>
              </thead>
    
              <tbody>
                <?php while($row = mysqli_fetch_array($result_list)) {
                  $query_class_list = "SELECT * FROM class_list";
                  $result_class_list = mysqli_query($con, $query_class_list);
                  $row_class_list = mysqli_fetch_array($result_class_list);
                ?>
                <tr>
                  <td><input type="checkbox" class="checkselect"></td>
                  <td><?=$row['code']?></td>
                  <td><?=$row['category']?></td>
                  <td><?=$row['class_name']?></td>
                  <td><?=$row['tutor_name']?></td>
                  <td><?=$row['hashtag']?></td>
                  <td><?=$row['open_date']?></td>
                  <td><?=$row['class_term']?></td>
                  <td><?=$row['openyn']?></td>
                  <td class="btn"><a href="#" title="">관리</a></td>
                </tr>
                <?php
              }
              ?>
              </tbody>
    
              <tfoot>
              </tfoot>
            </table>
            <ul class="pagination">
              <li><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
              <li><a href="#" title="" class="on">1</a></li>
              <li><a href="#" title="">2</a></li>
              <li><a href="#" title="">3</a></li>
              <li><a href="#" title="">4</a></li>
              <li><a href="#" title="">5</a></li>
              <li><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </article>
        </form>
      </section>
    </main>
  </div>
</body>

<script>
	$(document).ready(function(){
    	$(".check_all").click(function() {
          if($(".check_all").is(":checked")) $("input[class=checkselect]").prop("checked", true);
          else $("input[class=checkselect]").prop("checked", false);
      });
    });
</script>
</html>