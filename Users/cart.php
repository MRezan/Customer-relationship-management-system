<?php
include "../navbar.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
</head>
<body>

<?php
include '../dbh.php';

$user_id= $_SESSION['userid'];

$sql = "SELECT products.product_name, products.product_price, products.product_details,products.product_image FROM products
JOIN cart ON products.product_id= cart.productsproduct_id
WHERE cart.useruser_id = '$user_id';";


$returnObj=$conn->query($sql);
   
   if($returnObj->rowCount()==0)
   {

   }
   else
   {
     $data=$returnObj->fetchAll();

     foreach ($data as $row) {
      echo"
      <h2>$row[product_name]</h2>
      <p>$row[product_price]</p>
      ";


     }
    }







?>






  
</body>
</html>