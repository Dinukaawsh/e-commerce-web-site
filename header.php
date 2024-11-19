<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- To add a menu option for smaller screens -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Blaster online store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['email'])) { ?>
                    <li><a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                    <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a href="orderhistory.php"><i class="fas fa-history"></i> Order History</a></li>
                    <li><a href="logout_script.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                <?php } else { ?>
                    <li><a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <li><a href="aboutus.php"><i class="fas fa-info-circle"></i> About Us</a></li>
                    <li><a href="contact.php"><i class="fas fa-phone"></i> Contact</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
