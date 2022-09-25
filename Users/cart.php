<?php
include "../navbar.php";
if(empty($_SESSION['userid']))
{
  header("Location: login_form.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>

  <style>
    .quantity {
    border-radius: 50%;
    text-decoration: none;
    background-color: rgb(23, 171, 229);
    height: 25px;
    width: 25px;
    text-align: center;
}
  </style>
</head>
<body>


<br>
<br>


<?php
include '../dbh.php';

$user_id= $_SESSION['userid'];

$sql = "SELECT cart.useruser_id, cart.productsproduct_id, products.product_name, products.product_price, products.product_details,products.product_image FROM products
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
      

<div class='d-flex justify-content-center align-items-center w-100 h-100'>
<div class='h-75 w-75'>
    
   
    <div class='w-100 d-flex'>
        <label for='vehicle1' class='w-100'>
            <div class='card mb-3'>
                <div class=' row g-0 m-2'>
                    <div class='col-2'>
                        <img src='../Admin/images/$row[product_image]' class='img-fluid rounded-start w-75' alt='...'>
                    </div>
                    <div class='col-8'>
                        <div class='d-flex'>
                            <div class='col-10 ms-5'>
                                <p class='fw-bold fs-6 mb-0 mt-2'>$row[product_name]</p>
                                <br>
                                
                                <p class='mt-1 text-primary mb-0'><span class='text-dark'>Price: </span>$row[product_price] taka</p>
                            </div>


                           

                            

                            <a href='remove_cart.php?uid=$row[useruser_id]&&pid=$row[productsproduct_id]'>
                            <div class='col-md-2 d-flex justify-content-center align-items-center fs-2 text-danger fw-bold'>
                                <i class='fa-solid fa-xmark mt-3'></i>
                               
                            </div>
                            </a>

                           

                         

                        </div>


                        <div class='d-flex justify-content-end '>
                        <a href='payment_page.php?product_name=$row[product_name]&&price=$row[product_price]&&id=$row[productsproduct_id]' class='btn btn-primary'>
                        Buy Now
                        </a>
                        </div>


                       



                        
                    </div>
                </div>
            </div>
        </label><br>
    </div>


</div>
</div>
      ";


     }
    }







?>







  
</body>
</html>