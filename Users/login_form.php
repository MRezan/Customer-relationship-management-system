<!DOCTYPE html>
<?php
include_once "../navbar.php";
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/login.css">
  <title>Login</title>
</head>

<body>

  <div class="form-body">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3>Login user</h3>
            <p>Fill in the data below.</p>
            <form method="POST" action="login.php">

              <div class="col-md-12 my-2">
                <input class="form-control" type="text" name="user-email" placeholder="Email" required>
              </div>


              <div class="col-md-12 my-2">
                <input class="form-control" type="password" name="pwd" placeholder="Password" required>
              </div>

              

              <div class="form-button mt-3 text-center">
                <button  id="submit" type="submit" class="btn btn-success px-5">Login</button>
              </div>

              <div class="text-center mt-3">
             <span class="text-white text-center"> Don't have an account <a href="registration_form.php" style="text-decoration: none;">registration now</a> </span> 
             </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>






</body>

</html>