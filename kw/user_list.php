<?php

  include_once('./db_con.php');
  include_once('./config.php');

  $query_list = "SELECT * FROM member  ORDER BY code desc limit 10";
  $result_list = mysqli_query($con, $query_list);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>회원 정보</title>

  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="../css/base.css" type="text/css">
  <link rel="stylesheet" href="../css/admin_common.css" type="text/css">
  <link rel="stylesheet" href="./css/mem_list.css" type="text/css">

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
          <a href="../dash_board.php" title="대시보드 바로가기">
            <img src="../images/back.png" alt="뒤로가기"> 회원 정보
          </a>
        </h2>

        <form name="" method="" action="">
          <fieldset class="searchbox">
              <legend class="hidden">회원 정보 검색</legend>
              <label for="filter"><img src="../images/fillter.png" alt="필터 아이콘"></label>
              <select name="searchfilter" id="searchfilter" class="filter">
                <option value="검색할 항목을 선택하세요">검색할 항목을 선택하세요</option>
                <option value="이름">이름</option>
                <option value="이메일">이메일</option>
                <option value="생년월일">생년월일</option>
                <option value="성별">성별</option>
                <option value="성별">성별</option>
                <option value="성별">성별</option>
                <option value="성별">성별</option>
                <option value="성별">성별</option>
                <option value="성별">성별</option>
              </select>
              <label for="search"><img src="../images/research.png" alt="검색 아이콘"></label>
              <input type="searchbox" placeholder="검색어를 입력하세요" class="search">
          </fieldset>

          <article id="mem_list_table">
            <h2 class="hidden">회원 정보 조회</h2>
            <table>
              <caption class="hidden"></caption>
              <thead>
                  <tr>
                      <th><input type="checkbox" class="check_all"></th>
                      <th>No</th>
                      <th>이름<i class="fa fa-angle-down"></i></th>
                      <th>이메일<i class="fa fa-angle-down"></i></th>
                      <th>생년월일<i class="fa fa-angle-down"></i></th>
                      <th>성별<i class="fa fa-angle-down"></i></th>
                      <th>관심분야<i class="fa fa-angle-down"></i></th>
                      <th>수강강좌<i class="fa fa-angle-down"></i></th>
                      <th>개설강좌<i class="fa fa-angle-down"></i></th>
                  </tr>
              </thead>

              <tbody>
                <?php while($row = mysqli_fetch_array($result_list)) {
                  $query_member_list = "SELECT * FROM member";
                  $result_member_list = mysqli_query($con, $query_member_list);
                  $row_member_list = mysqli_fetch_array($result_member_list);
                ?>
                <tr>
                  <td><input type="checkbox" class="checkselect"></td>
                  <td><?=$row['code']?></td>
                  <td><?=$row['name']?></td>
                  <td><?=$row['email']?></td>
                  <td><?=$row['birth']?></td>
                  <td><?=$row['gender']?></td>
                  <td><?=$row['interest']?></td>
                  <td><?=$row['apply_class']?></td>
                  <td><?=$row['open_class']?></td>
                  <td class="btn"><a href="../woogi/user_list_detail.html" title="회원상세정보보기" class="list_edit_btn">관리</a></td>
                </tr>
                <?php
              }
              ?>
              </tbody>
    
              <!-- <tbody> -->
                  <!--
                    데이터 입력할 때 사용 
                    <tr>
                      <td><input type="checkbox" class="checkselect"></td>
                      <td><</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="btn"><a href="#" title=""></a></td>
                    </tr> -->

                  <!-- <tr>
                      <td><input type="checkbox" class="checkselect"></td>
                      <td>1</td>
                      <td>홍길동</td>
                      <td>mail@naver.com</td>
                      <td>00.00.00</td>
                      <td>M</td>
                      <td>어학, 재테크</td>
                      <td>0</td>
                      <td>0</td>
                      <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                      <td><input type="checkbox" class="checkselect"></td>
                      <td>2</td>
                      <td>홍길동</td>
                      <td>mail@naver.com</td>
                      <td>00.00.00</td>
                      <td>M</td>
                      <td>어학, 재테크</td>
                      <td>0</td>
                      <td>0</td>
                      <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>3</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr> 

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>4</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>5</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>6</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>7</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>8</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>9</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkselect"></td>
                    <td>10</td>
                    <td>홍길동</td>
                    <td>mail@naver.com</td>
                    <td>00.00.00</td>
                    <td>M</td>
                    <td>어학, 재테크</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="btn"><a href="#" title="">관리</a></td>
                  </tr> -->
              <!-- </tbody> -->
    
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