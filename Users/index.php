<?php
include_once "../navbar.php";
include "../dbh.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  
<?php
  $sql="SELECT *
  FROM products";

   $returnObj=$conn->query($sql);
   
   if($returnObj->rowCount()==0)
   {

   }
   else
   {
     $data=$returnObj->fetchAll();

     foreach ($data as $row) {

      echo "
      <a class='text-dark' href='product_details.php?id=$row[product_id]' style='text-decoration: none;'>
      <div class='m-5 w-25 '>
      <h1>$row[product_name]</h1>
      <p>$row[product_details]</p>
      <h6>$row[product_price]</h6>
      <img class='img-fluid' src='../Admin/images/$row[product_image]' alt='$row[product_name]'>
    </div>
    </a>
    ";

      
       
     }
    }

?>





 
  
</body>
</html>