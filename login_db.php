<?php

include './db_con.php';

// login.php 또는 login.html 로부터 받은 이메일 값

$input_email = $_POST['email'];
// $input_email = 'admin@naver.com';


// login.php 또는 login.html 로부터 받은 패스워드 값

$input_pw = $_POST['pw'];
// $input_pw = '1111';


// 멤버 테이블에서 이메일 데이터가 입력한 이메일 값과 같은 데이터를 가져오도록 명령
$sql01 = "select * from member where email='$input_email'";


// 데이터베이스에 접근하고 쿼리문을 실행
$result01 = mysqli_query($con,$sql01);


// 쿼리문 실행 결과를 객체로 저장
$row01 = mysqli_fetch_assoc($result01);

// var_dump($row01);
// var_dump($result01);
// die;



// 데이터베이스에서 가져온 정보 담기 시작

//1. 멤버 코드
$member_code = $row01['code'];

//2. 유저 레벨 (0 : 탈퇴 회원 , 1 : 일반, 2 : 개설 신청 회원,  3 : 클래스 개설 회원 , 4 : 관리자)
$member_level = $row01['level'];

//3. 이름
$member_name = $row01['name'];

//4. 이메일 
$member_email = $row01['email'];

// 5. 비밀번호
$member_pw = $row01['pw'];






// 데이터베이스에서 해당 계정의 정보가 입력한 이메일과 일치한다면
if($row01){

  // 데이터 베이스에서 비밀번호와 입력 한 비밀번호가 일치한다면
  if($member_pw == $input_pw){

    // 만약 멤버의 레벨이 0 이라면 (탈퇴신청 회원이라면)
    if($member_level == 0) {
      
      echo("
        <script>
          alert('탈퇴한 회원입니다.');

          // 로그인 페이지로 이동
          location.href='./login.html';
        </script>
      ");
      
    } else {
    
      echo("
        <script>
          alert('로그인 성공');
        </script>
      ");

      session_start();
      $_SESSION['user_code'] = $member_code;
      $_SESSION['user_name'] = $member_name;
      $_SESSION['user_email'] = $member_email;
      $_SESSION['user_level'] = $member_level;

    
      // 만약 멤버의 레벨이 4 라면 (관리자 계정이라면)
      if ($member_level == 4){
      
        echo("
          <script>
            alert('관리자 계정입니다.');
            location.href='./dash_board.php';
          </script>
        ");
      
      // 만약 멤버의 레벨이 1,2,3 이라면 (일반 회원 또는 강사 회원 이라면)
      }else {
      
        // 메인 페이지로 이동 
        echo ("
        <script>
          location.href='./index.php';
        </script>
    
        ");
      }
    }
  }

}else {
  echo ("
    <script>
      alert('로그인 실패');
      location.href='login.html';
    </script>
  ");
}






?>