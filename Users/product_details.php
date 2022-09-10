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
<body>

<?php

$product_id = $_GET['id'];

  $sql="SELECT *
  FROM products WHERE product_id = '$product_id'";

   $returnObj=$conn->query($sql);
   

     $data=$returnObj->fetch();
     echo "
     <h1>$data[product_name]</h1>
     <p>$data[product_details]</p>
     <h6>$data[product_price]</h6>
     ";

     echo "<a class='btn btn-primary' href='user_chat.php?id=$data[product_id]' style='text-decoration: none;'>Chat</a>
     <a class='btn btn-primary add-cart' href='add_cart.php?id=$data[product_id]' style='text-decoration: none;'>Add to cart</a>
     

     ";
?>





<script>
  document.querySelector(".add-cart").addEventListener('click', function(){
    alert("product added successfully");
  })
</script>
  
</body>
</html>