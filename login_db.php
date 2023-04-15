<?php

include './db_con.php';

// login.php 또는 login.html 로부터 받은 이메일 값

// $input_email = $_POST['email'];
$input_email = 'admin@naver.com';

// login.php 또는 login.html 로부터 받은 패스워드 값

// $input_pw = $_POST['pw'];
$input_pw = '1111';

// 멤버 테이블에서 이메일 데이터가 입력한 이메일 값과 같은 데이터를 가져오도록 명령
$sql01 = "select * from member where email='$input_email'";

// 데이터베이스에 접근하고 쿼리문을 실행
$result01 = mysqli_query($con,$sql01);

// 쿼리문 실행 결과를 객체로 저장
$row01 = mysqli_fetch_assoc($result01);


// 출력 확인 (완료)
var_dump($row01);


// 데이터베이스에서 가져온 정보 담기 시작

//1. 멤버 코드
$member_code = $row01['code'];

//2. 유저 레벨 (1 : 일반, 2 : 탈퇴,  3 : , 4 : 관리자)
$member_level = $row01['level'];

//3. 이름
$member_name = $row01['name'];

//4. 이메일 
$member_email = $row01['email'];

// 5. 비밀번호
$mamber_pw = $row['pw'];








?>