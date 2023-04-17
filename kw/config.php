<?php

include './db_con.php';

session_start();


// 유저 코드가 세션값으로 저장되었을 경우
if(isset($_SESSION['user_code'])) $user_code = $_SESSION['user_code'];
// 그렇지 않다면
else $user_code='';



// 유저 네임이 세션값으로 저장되었을 경우
if(isset($_SESSION['user_name'])) $user_name = $_SESSION['user_name'];
// 그렇지 않다면
else $user_name='';



// 유저 이메일이 세션값으로 저장되었을 경우
if(isset($_SESSION['user_email'])) $user_email = $_SESSION['user_email'];
// 그렇지 않다면
else $user_email='';


// 유저 레벨이 세션값으로 저장되었을 경우
if(isset($_SESSION['user_level'])) $user_level = $_SESSION['user_level'];
// 그렇지 않다면
else $user_level='';

?>