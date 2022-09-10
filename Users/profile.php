<?php
include "../navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php $_SESSION['username'] ?></title>
</head>
<body class="bg-dark">
<?php
$username=$_SESSION['username'];
$user_email= $_SESSION['useremail'];
$user_phn_number = $_SESSION['phone_num'];
$user_image = $_SESSION['user_image'];
$user_address = $_SESSION['user_address'];




?>

<div class="container  mt-5 p-5 " style="background-color: whitesmoke; ">
  <div class="row">
    <div class="col-lg-4">
      <div class="image-div p-5 shadow-lg">
        <?php
        echo " <img class='img-fluid rounded' src='profile_image/$user_image' alt=''>";
         ?>
       

      </div>

    </div>
    <div class="col-lg-8">
      <div class="txt-div mx-5">
      <h1 class=""><?php echo"$_SESSION[username]"; ?></h1>
      <h5><?php echo"$user_email"; ?></h5>
      <h5><?php echo"$user_phn_number"; ?></h5>
      <h5><?php echo"$user_address"; ?></h5>


      </div>
      


    </div>
  </div>
  


</div>





  
</body>
</html>