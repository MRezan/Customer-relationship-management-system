<?php
include "../dbh.php";

$email= $_POST['user-email'];
$password = $_POST['pwd'];
$user_type = 'admin';
$enc_pass=md5($password);


$sql="SELECT * From user WHERE user_email='$email'and user_password='$enc_pass' and user_type = '$user_type' ";
            
$returnObj=$conn->query($sql);

if($returnObj->rowCount()==1){

    session_start();
    $user_details=$returnObj->fetchAll();

    foreach ($user_details as $user)
    {
        $_SESSION['username']=$user['user_name'];
        $_SESSION['usertype']=$user['user_type'];
        $_SESSION['useremail']=$user['user_email'];
        $_SESSION['userid']=$user['user_id'];
        $_SESSION['phone_num']=$user['user_phn_number'];
       
    }
    header("location: product-upload.php");


  }
  else
  {
    header("location: login_form.php?login=failed");
  }
