<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info text-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><h2>BaZar</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto me-5 ">

      <div class="nav-link">
    <form action="search_result.php" method="POST" class="d-flex">
      <input class="form-control me-2 rounded-pill" name="q" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>


        <li class="nav-item mx-3">
       <a href="/Customer relationship management system/Users/cart.php"><i class="fa-solid fa-cart-arrow-down nav-link fa-2x"></i></a> 
        </li>

        <?php
        if(empty($_SESSION['username']))
        {
        echo "<li class='nav-item mx-3'>
        <a href='/Customer relationship management system/Users/registration_form.php'><i class='fa-solid fa-circle-user nav-link fa-2x'></i></a>
        </li>";

        }
        else
        {
          echo "<li class='nav-item mx-3'>
        <a href='/Customer relationship management system/Users/profile.php'><i class='fa-solid fa-circle-user nav-link fa-2x'></i></a>
        </li>";

        }

        ?>


        <!-- <li class="nav-item mx-3">
        <a href="registration_form.php"><i class="fa-solid fa-circle-user nav-link fa-2x"></i></a>
        </li> -->

       <?php
       if(empty($_SESSION['userid']))
       {
        echo "<li class='nav-item mx-3'>
        <a href='login_form.php'><i class='fa fa-sign-in nav-link fa-2x'></i></a>
        </li>";
       }
       else
       {
        echo "<li class='nav-item mx-3'>
        <a href='logout.php'><i class='fa fa-sign-out nav-link fa-2x'></i></a>
        </li>";
       }
       ?>

       
        
      </ul>

      

    </div>
  </div>
</nav>
  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>