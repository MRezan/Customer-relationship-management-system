<!DOCTYPE html>
<?php
include_once "../navbar.php";
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/registration.css">
  <title>Document</title>
</head>

<body>

  <div class="form-body">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3>Register new user</h3>
            <p>Fill in the data below.</p>
            <form method="POST" action="registration.php" enctype="multipart/form-data">

              <div class="col-md-12">
                <input class="form-control" type="text" name="user-name" placeholder="Name" required>
              </div>

              <div class="col-md-12 my-2">
                <input class="form-control" type="text" name="user-email" placeholder="Email" required>
              </div>

              <div class="col-md-12 my-2">
                <input class="form-control" type="text" name="user-phn" placeholder="phone number" required>
              </div>

              <div class="col-md-12 my-2">
                <input class="form-control" type="text" name="user-address" placeholder="Address" required>
              </div>

  

              <div class="col-md-12 my-2">
                <input class="form-control" type="password" name="pwd" placeholder="Password" required>
              </div>

              <div class="col-md-12 my-2">
                <input class="form-control" type="password" name="confirm-pwd" placeholder="Confirm password" required>
              </div>



              <div class="col-md-12 mb-3">
              <input class="form-control file-input" name="fname" type="file" id="formFile" required>
              </div>

             
              <input type="hidden" name="user-type" value="customer">

              

              <!-- <div class="col-md-12 mt-3">

                <div class="my-3">
                  <label class="mb-3 mr-1" for="gender">User Type</label>

                  <input type="radio" class="btn-check" name="user-type" id="customer" autocomplete="off" value="customer" required>
                  <label class="btn btn-outline-success mx-3" for="customer">Customer</label>
                  <input type="radio" class="btn-check" name="user-type" id="admin" autocomplete="off" value="admin" required>
                  <label class="btn btn-outline-danger mx-3" for="admin">Admin</label>
                  
                </div>
              </div> -->

              <div class="form-button mt-3 text-center">
                <button  id="submit" type="submit" class="btn btn-success px-5">Upload</button>
              </div>

              <div class="text-center mt-3">
             <span class="text-white text-center"> Already have an account <a href="login_form.php" style="text-decoration: none;">login</a> </span> 
             </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>






</body>

</html>