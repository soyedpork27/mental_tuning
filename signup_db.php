<?php

include './db_con.php';



// 받아온 이메일 값을 변수로 담는다.
$get_email = $_POST['email'];

// 받아온 비밀번호 값을 변수로 담는다.
$get_pw = password_hash($_POST['pw'],PASSWORD_DEFAULT);

$get_pwc = password_hash($_POST['pwc'],PASSWORD_DEFAULT);

// 받아온 이름을 변수로 담는다.
$get_name = $_POST['name'];

// 받아온 생년월일을 변수로 담는다.
$get_birth = $_POST['birth'];

// 받아온 성별 정보를 변수로 담는다.
$get_gender = $_POST['radio_gender'];

// 받아온 휴대전화 정보를 변수로 담는다.
$get_phone = $_POST['phone'];

// 받아온 직업 정보를 변수로 담는다.
$get_job = $_POST['job'];

// 받아온 관심사 정보를 변수로 담는다.
$get_interest = $_POST['interest'];

// 받아온 sms 수신 동의 여부를 변수로 담는다.
$get_sms = $_POST['radio_SMS'];


$sql = "insert into member(name, email, pw, pwc,  birth, gender, phone, job, interest, sms_agree ) values('$get_name', '$get_email', '$get_pw', '$get_pwc' , '$get_birth', '$get_gender', '$get_phone', '$get_job' , '$get_interest' , '$get_SMS' )";

// $sql = "insert member set email='$get_email', name='$get_name', pw='$get_pw', pwc='$get_pwc', birth = $get_birth , gender=$get_gender , phone='$get_phone', job='$get_job', interest='$get_interest', sms_agree='$get_sms'";


$result = mysqli_query($con, $sql);

var_dump($result);

mysqli_close($con);

echo("
  <script>
    alert('회원가입이 완료되었습니다.');
    location.href='./login.html';
  </script>
");



?>