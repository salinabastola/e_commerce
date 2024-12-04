<?php include 'header.php'; ?>
<?php
   //session_start();
   //if(!isset($_SESSION['user_id']) || !isset($_GET['id']))
     // header("location:product.php")
   
   $user =  $_SESSION['user_id'];
   $pid = $_GET['id'];
?>


   


<div class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>
      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>
      <tbody>

      <?php
         
         // Check if there is an Active Cart Open Or Not
         $sql = "SELECT orders.id AS o_id FROM orders JOIN order_details ON order_details.order_id = orders.id WHERE orders.user = $user AND order_details.status = 0";
         $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result) > 0)
         {
            $row = mysqli_fetch_assoc($result);
            $orderid = $row['o_id'];      
         }
         else
         {
            $sql = "INSERT INTO orders(user) VALUES($user)";
            mysqli_query($conn, $sql);

            // Get Latest Order ID:
            $sql = "SELECT max(id) as mid FROM orders";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $orderid = $row['mid'];
         }
         // Get Price of Selected Product:
         $sql = "SELECT price FROM product WHERE id = $pid";
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_assoc($result);
         $price = $row['price'];
         $total = 1 * $price;

         $sql = "INSERT INTO order_details(order_id, product_id, quantity, rate, price) VALUES($orderid, $pid, 1, $price, $total)";
         mysqli_query($conn, $sql) or die('query failed');
         
         //$sql = "SELECT image, product.title, order_details.price, order_details.quantity FROM order_details JOIN product JOIN orders ON order_details.product_id = product.id  orders.user = $user AND order_details.status = 0";
         //$result = mysqli_query($conn, $sql);
         //$row = mysqli_fetch_assoc($result);
         
         //$grand_total = 0;
         //if(mysqli_num_rows($cart_query) > 0){
         //   while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr>
            <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['title']; ?></td>
            <td><?php echo $fetch_cart['price']; ?>/-</td>
         
            <td><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            //}
         /*}else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }*/
      ?>
      <tr class="table-bottom">
         <td colspan="4">grand total :</td>
         <td>Rs<?php echo $grand_total; ?>/-</td>
         <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
      </tr>
   </tbody>
   </table>

 
<div class="option">
         <a href="product.php" class="option-btn">continue shopping</a>
         <a href="checkout.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
      </div>
   </div>

</section> 

<?php include('./footer.php')?>