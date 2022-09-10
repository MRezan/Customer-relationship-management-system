<?php
session_start();
include "../dbh.php";

$product_id= $_GET['id'];

$user_id= $_SESSION['userid'];

$sql= "INSERT INTO cart(useruser_id,productsproduct_id) VALUES('$user_id','$product_id')";

$conn ->exec($sql);

header('Location: ' . $_SERVER['HTTP_REFERER']);

