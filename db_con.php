<?php

// 데이터 베이스 접근 변수 선언하기

//변수
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password='';
$mysql_db='classu';

//데이터베이스에 연결하는 변수
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$con){ //연결 오류 발생 시 스크립트 종류
  die('연결 실패: '.mysqli_connect_error());
}

?>