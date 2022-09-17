<?php
session_start();
if(empty($_SESSION['userid']))
{
  header("Location: login_form.php");
}

include "../dbh.php";

$product_id= $_GET['id'];

$user_id= $_SESSION['userid'];

$sql= "INSERT INTO cart(useruser_id,productsproduct_id) VALUES('$user_id','$product_id')";

$conn ->exec($sql);

header('Location: ' . $_SERVER['HTTP_REFERER']);

