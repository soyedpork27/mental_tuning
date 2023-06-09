<?php

  include_once('./db_con.php');
  include_once('./config.php');


  // 페이지네이션 01 시작
  $list_num = 10; //한 페이지에 보여질 데이터 수
  $page_num = 5; //한 블럭에 보여질 데이터 수

  $page = isset($_GET['page']) ? $_GET['page'] : 1; //현재 페이지

  $start = ($page - 1) * $list_num; //시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 데이터 수 

  // 페이지네이션 01 끝
  

  // get으로 받은 컬럼변수
  $order = $_GET['order'];

  // post로 받은 검색어 변수
  $search = $_REQUEST['search'];

  // post로 받은 항목 변수
  if(($_REQUEST['filter'] == 'null')){
  }else {
    $filter = $_REQUEST['filter'];
  }

  // 기본 쿼리문
  $query_list = "SELECT * FROM member  ORDER BY code desc limit $start, $list_num";
  $query_numof = "SELECT * FROM member  ORDER BY code desc";


   // 검색어가 있다면
  if(isset($search)){
    // 검색어는 있지만 검색 항목 선택을 하지 않았다면
    if(!isset($filter)){
      echo ("<script>
            alert('검색 할 항목을 선택해주세요.');
            </script>");
      // 코드를 기준으로 출력한다.(기본 쿼리문)
      $query_list = "SELECT * FROM member  ORDER BY code desc limit $start, $list_num";
      $query_numof = "SELECT * FROM member  ORDER BY code desc";
    }else{
      // 검색어가 있고 검색항목을 선택 했다면
      $query_list = "select * from member where $filter like '%$search%' ORDER BY code desc limit $start, $list_num";
      $query_numof = "select * from member where $filter like '%$search%'";
      // 검색을 성공한 상태에서 컬럼을 클릭해 정렬할 경우
      if(isset($order)){
        $query_list = "select * from member where $filter like '%$search%' ORDER BY $order desc limit $start, $list_num";
        $query_numof = "select * from member where $filter like '%$search%' ORDER BY $order desc";
      }
    }
  }else{
    // 검색어가 없는 경우

    // 클릭 정렬을 하지 않는 경우
    if(!isset($order)){
    }else {
      // 클릭 정렬을 하는 경우
      $query_list = "SELECT * FROM member  ORDER BY $order asc limit $start, $list_num";
      $query_numof = "SELECT * FROM member  ORDER BY $order asc";
    }
  }



  // $row_num = mysqli_num_rows($sql); // 게시판 총 레코드 수

  $result_member_row = mysqli_query($con, $query_numof);
  $row_num = mysqli_num_rows($result_member_row); // 게시판 총 레코드 수





  // 페이지 네이션 02 시작

  $now_block = ceil($page / $page_num); //현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
  $s_pageNum = ($now_block - 1) * $page_num + 1; //블럭 당 시작 페이지 번호 = (해당 글 블럭 번호 - 1) * 블럭 당 페이지 수 + 1


  $total_page = ceil($row_num / $list_num);  //전체 페이지 수 =  전체데이터 / 페이지 당 데이터 개수

  $numberof = ceil( $row_num / $list_num );

  // 페이지 네이션 02 끝




  // 기본, 검색, 정렬 쿼리문을 실행한다
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
    <script src="../script/header.js" defer></script>
  
</head>
<body>

<script>
    let b;
    $(document).ready(function(){

      $('i.fa-angle-down').click(function(){
          $(this).css("rotate", "180deg");
          b = $(this).attr("id");
          console.log(b);
          <?php
            if(isset($search)){
              ?>
              location.href="user_list.php?order="+b+"&search=<?=$search?>&filter=<?=$filter?>";
              <?php
            }else {
              ?>
              location.href="user_list.php?order="+b;
              <?php
            }
            ?>
        });
    });
</script>

<?php
//  $id_col = "<script>document.write(b);</script>";
?>

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

        <form name="search_form" method="post" action="user_list.php">
          <fieldset class="searchbox">
              <legend class="hidden">회원 정보 검색</legend>
              <label for="filter"><img src="../images/fillter.png" alt="필터 아이콘"></label>
              <select id="filter" class="filter" name="filter">
                <option value="null">검색할 항목을 선택하세요</option>
                <option value="name">이름</option>
                <option value="email">이메일</option>
                <option value="birth">생년월일</option>
                <option value="gender">성별</option>
                <option value="phone">전화번호</option>
                <option value="interest">관심분야</option>
                <option value="apply_class">수강강좌</option>
                <option value="open_class">개설강좌</option>
                <option value="job">직업</option>
              </select>
              <label for="search" class="hidden">검색</label>
              <input type="search" placeholder="검색어를 입력하세요" class="search" id="search" name="search">
              <button type="submit" class="search_btn"><img src="../images/research.png" alt="검색 버튼"></button>
          </fieldset>

          <article id="mem_list_table">
            <h2 class="hidden">회원 정보 조회</h2>
            <table>
              <caption class="hidden"></caption>
              <thead>
                  <tr>
                      <th><input type="checkbox" class="check_all"></th>
                      <th>No</th>
                      <th>이름<i class="fa fa-angle-down" id="name" name="name"></i></th>
                      <th>이메일<i class="fa fa-angle-down" id="email" name="email"></i></th>
                      <th>생년월일<i class="fa fa-angle-down" id="birth"></i></th>
                      <th>성별<i class="fa fa-angle-down" id="gender"></i></th>
                      <th>관심분야<i class="fa fa-angle-down" id="interest"></i></th>
                      <th>수강강좌<i class="fa fa-angle-down" id="apply_class"></i></th>
                      <th>개설강좌<i class="fa fa-angle-down" id="open_class"></i></th>
                      <th>&nbsp;</th>
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
                  <td class="btn"><a href="../woogi/user_list_detail.php?no=<?=$row['code']?>" title="회원상세정보보기" class="list_edit_btn">관리</a></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
    
              <tfoot>
              </tfoot>
            </table>



            <ul class="pagination">
              <!-- 이전 버튼 -->
              <?php
                if($page <= 1){ //현재 페이지가 1보다 작거나 같으면
              ?> 
              <a href="user_list.php?page=1"><i class="fa fa-angle-left"></i></a>
              <?php
              }
              else{ 
              ?>
              <a href="user_list.php?page=<?php echo($page-1);?>"><i class="fa fa-angle-left"></i></a>
              <?php 
              };
              ?>

              <!-- 페이지 넘버 -->
              <?php
                for($print_page = 1; $print_page <= $numberof; $print_page++){
                  // echo($page);
                  // var_dump($page);
                  // echo $numberof;
                  // var_dump($numberof);
                  // echo $s_pageNum;
                  // var_dump($s_pageNum);
                  // die;
              
                  if($page == $print_page){ //만약 page가 $print_page와 같다면 
                  // var_dump($_GET["page"]."/". $print_page."/". $page);
                  // die;

                  echo ("<li class='page_num'><a href='user_list.php?page=$print_page' class='on'>
                    $print_page
                  </a></li>"); //현재 페이지에 해당하는 번호에 클래스 적용
                  }else{
                  echo ("<li class='page_num'><a href='user_list.php?page=$print_page' class=''>
                    $print_page
                  </a></li>"); //아니라면 클래스 없음
                  }
                };
              ?>

              <!-- 다음 버튼 -->
              <?php
              if($page >= $total_page){
              ?>
              <a href="user_list.php?page=<?php echo $total_page; ?>"><i class="fa fa-angle-right"></i></a>
              <?php
              }else{
              ?>
              <a href="user_list.php?page=<?php echo ($page+1); ?>"><i class="fa fa-angle-right"></i></a>
              <?php
              };
              ?>
            </ul>

            <!-- <ul class="pagination">
              <li><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
              <li><a href="#" title="" class="on">1</a></li>
              <li><a href="#" title="">2</a></li>
              <li><a href="#" title="">3</a></li>
              <li><a href="#" title="">4</a></li>
              <li><a href="#" title="">5</a></li>
              <li><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
            </ul> -->
          </article>
        </form>
      </section>
    </main>
  </div>

  <script>
	$(document).ready(function(){

    	$(".check_all").click(function() {
          if($(".check_all").is(":checked")) {$("input[class=checkselect]").prop("checked", true);}
          else {$("input[class=checkselect]").prop("checked", false);}
      });

    



      // $('li.page_num > a:first-child').addClass('on'); 

      // $("li.page_num > a").click(function(){
      //   console.log(this);
      //   removeclass();
      //   $(this).addclass('on');
      // })

    });
</script>
</body>
</html>