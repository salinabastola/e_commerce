
<?php include('./header.php');?>
<!-- HEADER -->
<main class="container_home">
    <!--WELCOME TEXT  -->
    <section class="banner">
        <h2>Welcome to Adhi Door Store!</h2>
        <p>We offer a wide selection of interior and exterior doors, as
            well as hardware. We also provide installation
            services.</p>
        <a href="product.php">Shop Now</a>
    </section>
    <!-- OUR PRODUCTS -->
    <section>
        <h2 class="section-head">OUR PRODUCTS</h2>
        <section class="products">
            
        <?php

            $query = "SELECT * FROM category";
            $rs = mysqli_query($conn, $query);
            if(mysqli_num_rows($rs) > 0)
            {
                while($row = mysqli_fetch_assoc($rs))
                {
        ?>
        
            <div class="product-card">
                <img src="images/<?php echo $row['Image']?>" alt="Door 2">
                <h3><?php echo $row['category_name'];?></h3>
                <p><?php echo $row['category_desc'];?></p>
                <a href="product_cat.php?c=<?php echo $row['category_ID'];?>">Learn More</a>
            </div>
            <?php
                }
            }
            ?>
        </section>
    </section>
    <!--OUR PRODUCT -->

    <section class="services">
        <h2>Our Services</h2>
        <ul>
            <li>Door installation</li>
            <li>Door repair</li>
            <li>Hardware installation</li>
            <li>Free consultations</li>
        </ul>
    </section>

    <section class="about-us">
        <h2>About Us</h2>
        <p>We're a friendly door and hardware store based right here in
            Tinpaini, Biratnagar. We offer a wide selection of interior
            and exterior doors, staircases, handles, hardware, and more
            to help you beautify and improve your home.
            We're proud to serve the Biratnagar community and
            surrounding areas. Whether you're building new, renovating,
            or just need a replacement part, we have what you need at
            affordable prices.
            Come visit us today! We're happy to answer any questions you
            have and help you find the perfect products for your
            project.</p>
    </section>

   
</main>
<?php include('./footer.php')?>
