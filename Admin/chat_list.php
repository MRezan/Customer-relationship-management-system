<?php
session_start();

if(empty($_SESSION['userid']))
{
  header("Location: admin_login_form.php");
}
include_once "admin_navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat List</title>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="text-center">

    <br>
    <br>
    <br>

    <?php
    include "../dbh.php";
    $sql="SELECT user.user_name, user.user_id, products.product_name,products.product_id
    FROM user
    JOIN messages ON messages.user_id=user.user_id
    JOIN products on products.product_id = messages.product_id
    WHERE messages.user_type='customer'
    GROUP BY messages.product_id,messages.user_id;
    ";
  
     $returnObj=$conn->query($sql);
     
     if($returnObj->rowCount()==0)
     {
  
     }
     else
     {
       $data=$returnObj->fetchAll();
  
       foreach ($data as $row) {

        echo "
        <a class='text-dark' href='admin_chat.php?user_id=$row[user_id]&&product_id=$row[product_id]' style='text-decoration: none;'>
        <div class='cart bg-light my-3 p-3 rounded '>
        <div class='d-flex align-self-center'>
          <img class='rounded-circle border border-danger' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='>
          <h6 class='align-self-center ms-2'>$row[user_name]</h6>
          <div class='ms-auto'>
          <p class='align-self-center'>$row[product_name]</p>
          </div>
        </div>
        </div>
        </a>";


       }
      }


    ?>
    

      <!-- <div class="cart bg-light my-3 p-3 rounded ">
        <div class="d-flex align-self-center">
          <img class="rounded-circle border border-danger" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="">
          <h6 class="align-self-center ms-2">User Name</h6>
          <div class="ms-auto">
          <p class="align-self-center">product name</p>
          </div>
        </div>
      </div> -->

      <!-- <div class="cart bg-light my-3 p-3 rounded ">
        <div class="d-flex align-self-center">
          <img class="rounded-circle border border-danger" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="">
          <h6 class="align-self-center ms-2">User Name</h6>
          <div class="ms-auto">
          <p class="align-self-center">product name</p>
          </div>
        </div>
      </div> -->



    </div>
  </div>

  
</body>
</html>