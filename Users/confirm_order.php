<?php
session_start();
if(empty($_SESSION['userid']))
{
  header("Location: login_form.php");
}

include "../dbh.php";

$product_name = $_POST['product-name'];
$product_price = $_POST['product-price'];
$product_id= $_POST['product-id'];


$user_name = $_SESSION['username'];
$user_id = $_SESSION['userid'];
$user_address = $_SESSION['user_address'];
$user_phn_number= $_SESSION['phone_num'];
$user_email=$_SESSION['useremail'];


try{

$sql = "INSERT INTO confirmed_order(user_id,user_name,user_address,user_email,user_phn_no,product_name,product_price,product_id)
 VALUES('$user_id','$user_name','$user_address','$user_email','$user_phn_number','$product_name','$product_price','$product_id')";

$conn -> exec($sql);

echo '<script>alert("Order confirmed successfull")</script>';

header("Location: index.php");

}
catch(Exception $e)
{
  echo $e;
}

  