<?php
session_start();
include "../dbh.php";

$user_id = $_SESSION['userid'];
$user_type=$_SESSION['usertype'];
$msg = $_POST['msg-txt'];
$product_id = $_GET['product_id'];
$admin_id = $_SESSION['userid'];

$sql="INSERT INTO messages(msg,user_type,user_id,product_id,admin_id) 
VALUES('$msg','$user_type','$user_id','$product_id','$admin_id')";
$conn->exec($sql);

header("Location: admin_chat.php?user_id=$_GET[user_id]&&product_id=$product_id");

