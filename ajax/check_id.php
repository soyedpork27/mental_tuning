<?php

include '../db_con.php';

!empty($_POST['email']) ? $email=$_POST['email'] : $email='';
$ret['check']=false;

if($email != ''){
  $sql = "select email from member where email = '$email'";
  $result = mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);



  if($num == 0){
    $ret['check'] = true;
  }
}
echo json_encode($ret);

?>