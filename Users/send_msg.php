<?php
session_start();
include "../dbh.php";
$user_id = $_SESSION['userid'];
$user_type=$_SESSION['usertype'];
$msg = $_POST['msg-txt'];
$product_id = $_GET['id'];


$sql="INSERT INTO messages(msg,user_type,user_id,product_id) 
VALUES('$msg','$user_type','$user_id','$product_id')";
$conn->exec($sql);

header("Location: user_chat.php?id=$product_id");

