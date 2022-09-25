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
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7150fbc846.js" crossorigin="anonymous"></script>

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

<body class="bg-light">

    <!-- slideshow banner start -->
    <section class="container d-flex justify-content-between  mt-5 mb-5">
        <div class="w-25 me-5">
            <ul class="list-group m-2">


                <li class="list-group-item"><a href="product_category.php?category=Womens-Fashion" class="text-decoration-none text-dark">Womens fashon</a></li>
                <li class="list-group-item"><a href="product_category.php?category=health-and-beauty" class="text-decoration-none text-dark">Health and beauty</a></li>
                <li class="list-group-item"><a href="product_category.php?category=electronics" class="text-decoration-none text-dark">Electronic Devices</a></li>
                <li class="list-group-item"><a href="product_category.php?category=foods" class="text-decoration-none text-dark">Food</a></li>
                <li class="list-group-item"><a href="product_category.php?category=books" class="text-decoration-none text-dark">Books</a></li>
                <li class="list-group-item"><a href="product_category.php?category=sports" class="text-decoration-none text-dark">Sports & Outdoor</a></li>
                <li class="list-group-item"><a href="product_category.php?category=baby" class="text-decoration-none text-dark">Babies & Toys</a></li>



            </ul>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide w-75 mb-5" data-bs-ride="true">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/cover1.jpg" class="d-block-fluid w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="images/cover2.jpg" class="d-block-fluid w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="images/cover3.jpg" class="d-block-fluid w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="container mt-5 mb-5">
        <div class="row">




            <?php
            $sql = "SELECT *
            FROM products";

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

            <!-- <a class='text-dark' href='product_details.php?id=$row[product_id]' style='text-decoration: none;'>
      <div class='m-5 w-25 '>
      <h1>$row[product_name]</h1>
      <p>$row[product_details]</p>
      <h6>$row[product_price]</h6>
      <img class='img-fluid' src='../Admin/images/$row[product_image]' alt='$row[product_name]'>
    </div>
    </a> -->


        </div>






    </section>


    <script>
        document.querySelector("#add-cart").addEventListener('click', function() {
            alert("product added successfully");
        })
    </script>

    <?php
    include "../footer.php";
    ?>
</body>


</html>