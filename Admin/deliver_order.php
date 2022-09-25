<?php
include_once "../dbh.php";
$id = $_GET['id'];
$sql = "UPDATE confirmed_order SET delivery_status ='1' WHERE id ='$id';";

$conn -> exec($sql);

header("Location: confirmed_order.php");