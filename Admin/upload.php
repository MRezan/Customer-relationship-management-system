<?php
include_once '../dbh.php';



if($_SERVER['REQUEST_METHOD']=='POST')
{
  if( isset($_POST['product-name'])
      && isset($_POST['product-details'])
      && isset($_POST['product-price'])
      && isset($_POST['product-category'])
      && isset($_FILES['fname'])


      && !empty($_POST['product-name']) 
      && !empty($_POST['product-details']) 
      && !empty($_POST['product-price']) 
      && !empty($_POST['product-category']) 
      && !empty($_FILES['fname']) 
   )

   {
    
    $product_name= $_POST['product-name'];
    $product_details= $_POST['product-details'];
    $product_price = $_POST['product-price'];
    $product_category= $_POST['product-category'];



   //upload file
   $receive_file=$_FILES['fname'];
   $fileName=$receive_file['name'];
   $temp_file_path=$receive_file['tmp_name'];
   $to="images/$fileName";
  
  ///----------------------------------------

  
  
 




  try{
  
    $sql="INSERT INTO products(product_name,product_details,product_price,product_category,product_image) 
           VALUES('$product_name','$product_details','$product_price','$product_category','$fileName')";

    $conn->exec($sql);

    move_uploaded_file($temp_file_path,$to);

    header("location: product-upload.php?upload=success");

    

  }
  catch(Exception $ex)
  {
    echo $ex;

  }



}

else
{
  echo 'Failed to upload';
}

}

else
{
  echo "Failed to upload";
}






?>