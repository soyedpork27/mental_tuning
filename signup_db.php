<?php

include './db_con.php';



// 받아온 이메일 값을 변수로 담는다.
$get_email = $_POST['email'];

// 받아온 비밀번호 값을 변수로 담는다.
$get_pw = $_POST['pw'];

// 받아온 생년월일을 변수로 담는다.
$get_birth = $_POST['birth'];

// 받아온 성별 정보를 변수로 담는다.
$get_gender = $_POST['gender'];

// 받아온 휴대전화 정보를 변수로 담는다.
$get_gender = $_POST['phone'];

// 받아온 직업 정보를 변수로 담는다.
$get_job = $_POST['job'];

// 받아온 관심사 정보를 변수로 담는다.
$get_interest = $_POST['interest'];

// 받아온 sms 수신 동의 여부를 변수로 담는다.
$get_sms = $_POST['radio_SMS'];


$sql = "insert into member(name, email, )"

?>