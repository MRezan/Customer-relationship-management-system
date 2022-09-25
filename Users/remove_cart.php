<?php
include_once '../dbh.php';

$user_id = $_GET['uid'];
$prosuct_id = $_GET['pid'];


$sql = "DELETE FROM cart WHERE useruser_id='$user_id' AND productsproduct_id ='$prosuct_id'";

$conn ->exec($sql);

header("Location: cart.php");

