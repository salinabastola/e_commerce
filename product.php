
    
    <?php 
    include('./header.php')?>
    <!-- -------- -->
    <section class="container_home">

    <?php
    
        $query = "SELECT * FROM category WHERE category_ID=1";
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
    
        $query = "SELECT * FROM product WHERE category_ID=1 ORDER BY category_ID DESC LIMIT 4";
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
            <a class="add-to-cart-btn" href = "cart.php?id=<?php echo $row['ID'];?>">Add to Cart</a>
          </div>
        <?php
        }
        }
        ?>
        </section>
      </section>  
      <!-- ----------------- -->
      <!-- exterior door products------------------------------------------------------------------------>
      <section class="container">

    <?php
    
        $query = "SELECT * FROM category WHERE category_ID=2 ORDER BY category_ID DESC LIMIT 4";
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
    
        $query = "SELECT * FROM product WHERE category_ID=2  ORDER BY category_ID DESC LIMIT 4";
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
      
      <!-- HANDLES ----------------------------------------------------------------------------------->
      <section class="container">

<?php

    $query = "SELECT * FROM category WHERE category_ID=3  ORDER BY category_ID DESC LIMIT 4";
    $rs = mysqli_query($conn, $query);

    if(mysqli_num_rows($rs) > 0)
    {
      
      while($row = mysqli_fetch_assoc($rs))
      {
?>
  
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

    $query = "SELECT * FROM product WHERE category_ID=3 ORDER BY category_ID DESC LIMIT 4 ";
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


      <!-- HARDWARE -------------------------------------------------->

      <section class="container">

<?php

    $query = "SELECT * FROM category WHERE category_ID=4 ORDER BY category_ID DESC LIMIT 4";
    $rs = mysqli_query($conn, $query);

    if(mysqli_num_rows($rs) > 0)
    {
      
      while($row = mysqli_fetch_assoc($rs))
      {
?>
  
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

    $query = "SELECT * FROM product WHERE category_ID=4 ORDER BY category_ID DESC LIMIT 4";
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
  

    <?php include('./footer.php')?>