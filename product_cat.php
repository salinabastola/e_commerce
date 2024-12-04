
    
    <?php 
    include('./header.php')?>
    <!-- -------- -->
    <section class="container">

    <?php

        $category = $_GET['c'];

        $query = "SELECT * FROM category WHERE category_ID=$category";
        $rs = mysqli_query($conn, $query);

        if(mysqli_num_rows($rs) > 0)
        {
          
          while($row = mysqli_fetch_assoc($rs))
          {
    ?>
      <!-- interior door products-->
      <section>
        <h2><?php echo $row['category_name'];?></h2>
        <p class="category-description">
        <?php echo $row['category_desc'];?>
        </p>
        <section class="product-listings">
    <?php
          }
        }
    ?>
    <?php

            ?>
        <?php
    
        $query = "SELECT * FROM product WHERE category_ID=$category";
        $rs = mysqli_query($conn, $query);

        if(mysqli_num_rows($rs) > 0)
        {
            while($row = mysqli_fetch_assoc($rs))
            {
        ?>
        <div class="product-item">
            <img src="images/<?php echo $row['image'];?>" class="product-image" />
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <span class="product-price">Rs. <?php echo $row['price'];?></span>
            <button class="add-to-cart-btn">Add to Cart</button>
          </div>
        <?php
        }
        }
        ?>
        </section>
      </section>  
      <!-- ----------------- -->
      <!-- exterior door products------------------------------------------------------------------------>

    </section>
  </section>  
  

    <?php include('./footer.php')?>