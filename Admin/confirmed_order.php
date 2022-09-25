<?php
session_start();

if (empty($_SESSION['userid'])) {
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
  <title>Confirmed order</title>
</head>

<body class="bg-dark">
 
<div class='row  shadow-lg text-white mx-5 rounded' style="font-family: 'Courier New', Courier, monospace; margin-top: 80px;">
  <?php
  include_once "../dbh.php";

 

  $sql = "SELECT * FROM confirmed_order";

  $returnObj = $conn->query($sql);

  if ($returnObj->rowCount() == 0) {
  } else {
    $data = $returnObj->fetchAll();

    foreach ($data as $row) {

      if($row['delivery_status'] == 0)
      {
        echo "
      
        <div class='col-lg-8 p-5 rounded my-2' style='background-color:#73777B;'>
        
          <h2>$row[product_name]</h2>
          <p>Price: $row[product_price] tk</p>
          <h2>Customer info:</h2>
          <h5>Name: $row[user_name]</h5>
          <p>Email: $row[user_email]</p>
          <p>phone no: $row[user_phn_no]</p>
          <p>Shipping address: $row[user_address]</p>
        
        </div>
        
        <div class='col-lg-4 my-2 rounded p-5'  style='background-color:#73777B;'>
        
          <div class='text-center '>
            <a href='deliver_order.php?id=$row[id]' class='btn btn-primary'>Deliver Order</a>
          </div>
        
        
        </div>
       
        ";
  

      }

      if($row['delivery_status']==1)
      {
        echo "
      
        <div class='col-lg-8 p-5 my-2 rounded' style='background-color:#395B64;'>
        
          <h2>$row[product_name]</h2>
          <p>Price: $row[product_price] tk</p>
          <h2>Customer info:</h2>
          <h5>Name: $row[user_name]</h5>
          <p>Email: $row[user_email]</p>
          <p>phone no: $row[user_phn_no]</p>
          <p>Shipping address: $row[user_address]</p>
        
        </div>
        
        <div class='col-lg-4 my-2 rounded p-5'  style='background-color:#395B64;'>
        
          <div class='text-center '>
            <div class='alert alert-primary' role='alert'>Delivered successfull</div>
          </div>
        
        
        </div>
       
        ";
  
      }

     

    }
  }


  ?>
 </div>



  <!-- <div class="row bg-danger shadow-lg text-white m-5 rounded" style="font-family: 'Courier New', Courier, monospace;">
    <div class="col-lg-8 p-5">

      <h2>Lorem ipsum dolor sit amet.</h2>
      <p>Price: 100</p>
      <h4>Customer info:</h4>
      <h5>Name: Md. Shahriar Asif Rezan</h5>
      <p>Email: asifrezan@gmail.com</p>
      <p>phone no: 01703334975</p>
      <p>Notunbazar Dhaka</p>

    </div>

    <div class="col-lg-4 p-5 my-auto">

      <div class="text-center ">
        <button class="btn btn-primary">Deliver Order</button>
      </div>


    </div>
  </div> -->











</body>

</html>