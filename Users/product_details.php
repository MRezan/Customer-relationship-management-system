<?php
include "../navbar.php";
include "../dbh.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="bg-light">

<?php

$product_id = $_GET['id'];

  $sql="SELECT *
  FROM products WHERE product_id = '$product_id'";

   $returnObj=$conn->query($sql);
   

     $data=$returnObj->fetch();


     echo "
     
<section class='container mt-5 mb-5  p-5'>
<div class='row'>
    <div class='col-8 p-5  '>
        <h1>$data[product_name]</h1>
        <p>$data[product_details]
        </p>
        <h3>$data[product_price]</h3>
        <div class='d-flex justify-content-between w-75'>
            <a class='btn btn-primary' href='add_cart.php?id=$data[product_id]'>Add to Cart</a>
            <a class='btn btn-primary' href='payment_page.php?id=$data[product_id]&&price=$data[product_price]&&product_name=$data[product_name]'>Buy Now</a>
            <a class='btn btn-primary' href='user_chat.php?id=$data[product_id]'>Chat</a>
        </div>

    </div>
    <div class='col-4 p-2'>
        <img class='img-fluid' src='../Admin/images/$data[product_image]' alt=''>
    </div>
</div>

</section>
     ";



?>














<script>
  document.querySelector(".add-cart").addEventListener('click', function(){
    alert("product added successfully");
  })
</script>
  

<?php
include "../footer.php";

?>
</body>
</html>