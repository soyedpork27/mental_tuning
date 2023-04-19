<?php

include './db_con.php';
include './config.php';

  $num = $_GET['no'];



  $sql1 = "select * from member where code='$num'";
  $result1 = mysqli_query($con,$sql1);
  $row01 = mysqli_fetch_array($result1);



  if($_POST['name'])   $g_name = $_POST['name'];
  else $g_name = $row01['name'];

  if($_POST['email'])   $g_email = $_POST['email'];
  else $g_email = $row01['email'];

  if($_POST['phone'])   $g_phone = $_POST['phone'];
  else $g_phone = $row01['phone'];

  if($_POST['job'])   $g_job = $_POST['job'];
  else $g_job = $row01['job'];

  if($_POST['interest'])   $g_interest = $_POST['interest'];
  else $g_interest = $row01['interest'];


  $sql2 = "UPDATE member SET name='$g_name', email='$g_email', phone='$g_phone', job='$g_job', interest='$g_interest' where code='$num'";

  


  mysqli_query($con,$sql2);


  mysqli_close($con);




  echo("
  <script>
    alert('정보 수정이 완료되었습니다.');
    location.href='../kw/user_list.php';
  </script>
");

?>