<?php
include_once '../dbh.php';



if($_SERVER['REQUEST_METHOD']=='POST')
{
  if( isset($_POST['user-name'])
      && isset($_POST['user-email'])
      && isset($_POST['user-phn'])
      && isset($_POST['user-address'])
      && isset($_POST['pwd'])
      && isset($_POST['confirm-pwd'])
      && isset($_POST['user-type'])
      && isset($_FILES['fname'])


      && !empty($_POST['user-name']) 
      && !empty($_POST['user-email']) 
      && !empty($_POST['user-phn']) 
      && !empty($_POST['user-address'])
      && !empty($_POST['pwd'])
      && !empty($_POST['confirm-pwd']) 
      && !empty($_POST['user-type'])
      && !empty($_FILES['fname']) 
   )

   {
    $user_name= $_POST['user-name'];
    $user_email= $_POST['user-email'];
    $user_phn = $_POST['user-phn'];
    $user_address= $_POST['user-address'];
    $password= $_POST['pwd'];
    $confirmed_password= $_POST['confirm-pwd'];
    $user_type=$_POST['user-type'];

  

    $enc_pass=md5($password);

   //upload file
   $receive_file=$_FILES['fname'];
   $fileName=$receive_file['name'];
   $temp_file_path=$receive_file['tmp_name'];
   $to="profile_image/$fileName";
  
  ///----------------------------------------

  try{
  
    $sql="INSERT INTO user(user_name,user_type,user_email,user_address,user_phn_number,user_password,user_image) 
           VALUES('$user_name','$user_type','$user_email','$user_address','$user_phn','$enc_pass','$fileName')";

    $conn->exec($sql);

    move_uploaded_file($temp_file_path,$to);

    header("location: admin_login_form.php");

    

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