<?php
    @include('config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADI SUPPLIERS</title>
        
   <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--HEADER-->
        <header class="container">
            <h1>ADHI SUPPLIERS</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <form class="search-button" action="search.php"
                        method="post">
                        <input name="search" class="search" type="search"
                            placeholder="Search"
                            aria-label="Search">
                        <button class="search-btn" type="submit">Search</button>
                         
                        </i>
                        <?php
                            if(!(isset($_SESSION['user_id']) || isset($_SESSION['user_id'])))
                            {
                            ?>
                            <a href="http://localhost/project/login.php">
                            <button class="login-btn"
                                type="button">
                                    Login
                            </button>
                        <?php
                            }
                        
                            else
                            {
                        ?>
                            <a href="http://localhost/project/logout.php">
                            <button class="login-btn"
                                type="button">
                                    Logout
                            </button>

                        <?php
                            }
                        ?>
                                
                        </a>
                  
                    <a href="cart.php"><img class="cart" src="images/shopping-cart.png"></a>
                    </form>
                </ul>
            </nav>


            
        </header>