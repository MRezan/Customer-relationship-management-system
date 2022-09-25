<?php
include '../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .card {
            transition: transform .5s;
        }

        .product-img
        {
            height: 250px;
            width: 250px;
        }

        .card:hover {
            transform: scale(1.1);

        }
    </style>
  
</head>

<body>
<div class="row">
  
<?php
include_once "../dbh.php";
$category= $_GET['category'];
$sql = "SELECT *
FROM products WHERE product_category ='$category' ";

$returnObj = $conn->query($sql);

if ($returnObj->rowCount() == 0) {
} else {
    $data = $returnObj->fetchAll();


    foreach ($data as $row) {

      echo "

      <div class='card-container col-lg-3 p-3'>
      <a class='text-dark' href='product_details.php?id=$row[product_id]' style='text-decoration: none;'>
      <div class='cardme-4 shadow card text-center'>
      <img src='../Admin/images/$row[product_image]' class='p-3 product-img img-fluid card-img-top mt-3' alt='...'>
      <div class='card-body'>
          <h5 class='card-title'>$row[product_name]</h5>
          <p class='card-text'><span>Price: </span>$row[product_price] <span>tk</span></p>
          <a id='add-cart' href='add_cart.php?id=$row[product_id]' class='add-cart btn btn-primary btn-sm'>Add to Cart</a>
          <a href='payment_page.php?product_name=$row[product_name]&&price=$row[product_price]&&id=$row[product_id]' class='btn btn-primary btn-sm'>Buy Now</a>
      </div>
      </div>
      </a>
      </div>
      


    ";

        

    }
}

?>


</body>

</html>