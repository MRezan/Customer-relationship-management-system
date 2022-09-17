<?php
include "../navbar.php";
if(empty($_SESSION['userid']))
{
  header("Location: login_form.php");
}
?>
<style>
  .pay {
    margin-bottom: 100px;
}

.form {
    width: 300px;
}

.button {
    width: 200px;
}

</style>
<section class=" d-flex align-items-center justify-content-center mt-5">
        <section class="d-flex align-items-center justify-content-center mt-5  pay w-75">
            <div class="w-50 d-flex justify-content-center">

            <?php

            echo "<div>
            <h1 class='fw-bold mb-4'>Delivery Information</h1>

            
            <input class='pe-5 py-2 form mb-2' type='text' value='$_SESSION[username]' readonly/>  <br>
            <input class='pe-5 py-2 form mb-2' type='text' value ='$_SESSION[user_address]' readonly />  <br>
            <input class='pe-5 py-2 form mb-2' type='text' value='$_SESSION[useremail]' readonly />  <br>
            <input class='pe-5 py-2 form mb-2' type='text' value='$_SESSION[phone_num]' readonly />  <br>
           
        </div>";

            ?>
                



            </div>
            <div class="w-50  d-flex justify-content-center">
                <div>
                    <h1 class="fw-bold mb-4">Order Summery</h1>
                    <div class="d-flex justify-content-between mb-3">
                        <div>

                            <p class="fs-5 fw-semibold text-secondary">Price: </p>
                            <p class="fs-5 fw-semibold text-secondary">Shipping Fee</p>
                        </div>
                        <div>
                            <p class="fs-5 fw-semibold text-secondary"><?php echo"$_GET[price]"; ?></p>
                            <p class="fs-5 fw-semibold text-secondary">$100</p>
                        </div>
                    </div>

                    <form action="confirm_order.php" method="POST">
                      <div class="d-flex justify-content-around mb-3">
                        <div>
                            <input type="radio" name="payment-method" id="cash-on-delivery" required>
                            <label for="html">
                                <p class="fs-5 fw-semibold text-secondary">Cash On Delivery</p>
                            </label>
                        </div>


                        
                        <div>
                            <input type="radio" name="payment-method" onchange="chackIfBikash()" id="bikash" required>
                            <label for="html">
                                <p class="fs-5 fw-semibold text-secondary">Bkash Pay</p>
                            </label><br>
                        </div>

                       

                        </div>
                        <div>

                        <?php
                        $product_name= $_GET['product_name'];
                        $product_price = $_GET['price'];
                        $product_id= $_GET['id'];

                        echo "<input type='hidden' value='$product_name' name='product-name'>
                        <input type='hidden' value='$product_price' name='product-price'>
                        <input type='hidden' value='$product_id' name='product-id'>";



                        ?>

                        


                        <button type="submit" class="btn btn-primary button ">Confirm order</button>
                        </div>


                    </form>
                    

                </div>
            </div>
        </section>
    </section>


    <script>

      function chackIfBikash()
      {
        
      if(document.getElementById('bikash').checked) {
        alert("Bikash pay is currently unavailable")

        document.getElementById('bikash').checked=false;


       }

      }


 
    </script>



    <?php
    include "../footer.php";
    ?>