<?php
include_once "../navbar.php";


if(empty($_SESSION['userid']))
{
  header("Location: login_form.php");
}


?>
<link rel="stylesheet" href="user_chat.css">


<div class="page-content page-container bg-dark" id="page-content">
  <div class="padding">
    <div class="row container d-flex justify-content-center">
      <div class="col-md-6">
        <div class="card card-bordered">
          <div class="card-header">
            <h4 class="card-title"><b>Live Chat With Admin</b></h4>
            <!-- <a class="btn btn-xs btn-secondary" href="#" data-abc="true">Let's Chat App</a> -->
          </div>


          <div class="" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">

           <?php
           include "../dbh.php";
           $user_id = $_SESSION['userid'];
           $product_id= $_GET['id'];

          $sql="SELECT * FROM messages WHERE user_id = '$user_id' AND product_id = '$product_id' ";

          $returnObj=$conn->query($sql);
          
          if($returnObj->rowCount()==0)
          {

          }
          else
          {
            $data=$returnObj->fetchAll();

            foreach ($data as $row) {

              if($row['user_type']=='customer')
              {
                echo "
                <div class='chat-msg-div chat-msg-div-sender'>
              <div class='chat-msg '>
                <img class='avatar' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='...'>
                <span class='msg-txt-send'>$row[msg]</span>
              </div>
              </div>
                ";

              }
              elseif($row['user_type']=='admin')
              {
                echo "
                <div class='chat-msg-div'>
                  <div class='chat-msg '>
                    <img class='avatar' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='...'>
                    <span class='msg-txt-received'>$row[msg]</span>
                  </div>
                  </div>
                ";

              }

            }
          }

           ?>


            <!-- <div class="chat-msg-div">
              <div class="chat-msg ">
                <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                <span class="msg-txt-received">How are you ...???</span>
              </div>
            </div> -->

            <!-- <div class="chat-msg-div chat-msg-div-sender">
              <div class="chat-msg ">
                <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                <span class="msg-txt-send">How are you ...???</span>
              </div>
            </div> -->
















          </div>
          <?php
          $id= $_GET['id'];
          
         echo "<form action='send_msg.php?id=$id' method='POST'>"
          ?>
          <div class="publisher bt-1 border-light d-flex m-3">
            <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
            <input class="form-control" name="msg-txt" type="text" placeholder="Write something">
            <button type="submit" class="btn btn-primary ms-2">Send</button>
          </div>
          </form>



        </div>
      </div>
    </div>
  </div>
</div>