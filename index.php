<?php

//establish the connection to database, and start the session
require("common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!--Title of index page-->
        <title>Welcome | Blaster obline Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!--Header end-->

        <div id="content">
    <!-- Main Banner Image -->
    <div id="banner_image">
    <div class="container d-flex justify-content-center align-items-center text-center">
        <div id="banner_content">
            <h1>Welcome to our online store.</h1>
            <p>Flat 20% OFF for all products</p>
            <a href="products.php" class="btn btn-primary btn-lg active">Shop Now <i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</div>

    <!-- Main Banner Image End -->

    <!-- Item Categories Listing -->
    <div class="container">
    <div class="row text-center" id="item_list">
        <!-- Product 1 -->
        <div class="col-md-2 col-sm-4">
            <a href="products.php#cameras">
                <div class="thumbnail">
                    <img src="images/1.jpg" alt="Cameras" class="img-fluid">
                    <div class="caption">
                        <h3><i class="fas fa-camera-retro">
                            <br>
                        </i> Cameras</h3>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </div> 
            </a>
        </div>
        <!-- Product 2 -->
        <div class="col-md-2 col-sm-4">
            <a href="products.php#chargers">
                <div class="thumbnail">
                    <img src="images/charger1.jpg" alt="Chargers" class="img-fluid">
                    <div class="caption">
                        <h3><i class="fas fa-plug">
                        <br>
                        </i> Chargers</h3>
                        <p>Original chargers from the best brands.</p>
                    </div>
                </div> 
            </a>
        </div>
        <!-- Product 3 -->
        <div class="col-md-2 col-sm-4">
            <a href="products.php#phones">
                <div class="thumbnail">
                    <img src="images/samsung.jpg" alt="Phones" class="img-fluid">
                    <div class="caption">
                        <h3><i class="fas fa-mobile-alt">
                        <br>
                        </i> Phones</h3>
                        <p>Choose the best phone for yourself.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product 4 -->
        <div class="col-md-2 col-sm-4">
            <a href="products.php#jbls">
                <div class="thumbnail">
                    <img src="images/jbl1.jpg" alt="JBL Speakers" class="img-fluid">
                    <div class="caption">
                        <h3><i class="fas fa-volume-up">
                        <br>
                        </i> JBL Speakers</h3>
                        <p>Experience high-quality sound.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product 5 -->
        <div class="col-md-2 col-sm-4">
            <a href="products.php#pen">
                <div class="thumbnail">
                    <img src="images/pen2.jpg" alt="Storage Devices" class="img-fluid">
                    <div class="caption">
                        <h3><i class="fas fa-hdd">
                        <br>
                        </i> Storage</h3>
                        <p>Pen drives and hard drives for your needs.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

    <!-- Item Categories Listing End -->
</div>
        
        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>