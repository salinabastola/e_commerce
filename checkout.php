<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>


<section class="display-order">


   <div class="grand-total"> grand total : <span><?php echo $grand_total; ?></span> </div>

</section>

<section class="checkout">

   <form action="" method="post">
      <h3>place your order</h3>
      <div class="flex">
         <div class="inputBox">
            <span>your name :</span>
            <input type="text" name="name" required placeholder="enter your name">
         </div>
         <div class="inputBox">
            <span>your number :</span>
            <input type="number" name="number" required placeholder="enter your number">
         </div>
         <div class="inputBox">
            <span>your email :</span>
            <input type="email" name="email" required placeholder="enter your email">
         </div>
         <div class="inputBox">
            <span>payment method :</span>
            <select name="method">
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card</option>
            </select>
         </div>
         
         <div class="inputBox">
            <span>address line 01 :</span>
            <input type="text" name="street">
         </div>
         <div class="inputBox">
            <span>city :</span>
            <input type="text" name="city" >
         </div>
         <div class="inputBox">
            <span>state :</span>
            <input type="text" name="state" >
         </div>
         
      </div>
      <input type="submit" value="order now" class="btn" name="order_btn">
   </form>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>