<?php

include './db_con.php';
include './config.php';

unset($_SESSION['user_name']);
unset($_SESSION['user_code']);
unset($_SESSION['user_email']);
unset($_SESSION['user_level']);
session_unset();

echo ("
  <script>
    alert('로그아웃 되었습니다');
    location.href='./login.html';
  </script>

");




?>