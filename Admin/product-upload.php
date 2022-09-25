<?php
session_start();

if(empty($_SESSION['userid']))
{
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
  <link rel="stylesheet" href="product-upload.css">
  <title>Document</title>
</head>

<body>

  <div class="form-body">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3>Upload Product</h3>
            <p>Fill in the data below.</p>
            <form method="POST" action="upload.php" enctype="multipart/form-data">

              <div class="col-md-12">
                <input class="form-control" type="text" name="product-name" placeholder="Product Name" required>

              </div>

              <div class="col-md-12 mt-3">
               <textarea class="form-control" name="product-details" id="product-details-id" placeholder="Product details" ></textarea>

              </div>


              <div class="col-md-12 mb-3">
                <input class="form-control" type="text" name="product-price" placeholder="Price" required>

              </div>

              <div class="col-md-12 mb-3">

              <input class="form-control file-input" name="fname" type="file" id="formFile" required>
              </div>



              

              <div class="col-md-12 mt-3">

                <div class="my-3">
                  <label class="mb-3 mr-1" for="gender">Category: </label>

                  <input type="radio" class="btn-check" name="product-category" id="Womens-Fashion" autocomplete="off" value="Womens-Fashion" required>
                  <label class="btn btn-outline-success mx-3" for="Womens-Fashion">Women's</label>
                  <input type="radio" class="btn-check" name="product-category" id="health-and-beauty" autocomplete="off" value="health-and-beauty" required>
                  <label class="btn btn-outline-danger mx-3" for="health-and-beauty">H & B</label>
                  <input type="radio" class="btn-check" name="product-category" id="Electronics" autocomplete="off" value="electronics" required>
                  <label class="btn btn-outline-info mx-3" for="Electronics">Electronics</label>
                  <input type="radio" class="btn-check" name="product-category" id="foods" autocomplete="off" value="foods" required>
                  <label class="btn btn-outline-secondary mx-3" for="foods">Foods</label>

                  <input type="radio" class="btn-check" name="product-category" id="books" autocomplete="off" value="books" required>
                  <label class="btn btn-outline-secondary mx-3" for="books">books</label>

                  <input type="radio" class="btn-check" name="product-category" id="sports" autocomplete="off" value="sports" required>
                  <label class="btn btn-outline-secondary mx-3" for="sports">sports</label>


                  <input type="radio" class="btn-check" name="product-category" id="baby" autocomplete="off" value="baby" required>
                  <label class="btn btn-outline-secondary mx-3" for="baby">Baby</label>

                </div>
              </div>

              <div class="form-button mt-3 text-center">
                <button  id="submit" type="submit" class="btn btn-success px-5">Upload</button>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>






</body>

</html>