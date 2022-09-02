<?php
session_start();


unset($_SESSION['useremail']);
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['usertype']);
unset( $_SESSION['phone_num']);

session_destroy();

header("Location: index.php")

?>