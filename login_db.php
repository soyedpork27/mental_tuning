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

var_dump($row01);












?>