<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login | Blaster obline Store</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        
       body {
    background-color: #f4f7fa; /* Light gray background for a softer feel */
    font-family: 'Roboto', sans-serif; /* Use a more modern, rounded font */
    margin: 0;
    padding: 0;
}

.container-fluid {
    padding-top: 60px;
}

.form-container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 20px; /* Rounded corners for a smoother look */
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); /* Subtle depth for elegance */
    border: 1px solid #eaeaea;
    width: 100%;
    max-width: 480px; /* Slightly larger form container */
    margin: 0 auto;
    transition: all 0.4s ease;
}

.form-container:hover {
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2); /* Increase shadow on hover for focus */
    transform: scale(1.02); /* Subtle zoom-in effect */
}

.form-heading {
    text-align: center;
    color: #004aad; 
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 2px; /* Added spacing for a cleaner look */
    transition: color 0.3s ease;
}

.form-heading:hover {
    color: #004aad; /* Change color on hover to keep it interactive */
}

.form-group input {
    border-radius: 10px; /* Rounded input fields */
    padding: 18px 24px;
    font-size: 16px;
    margin-bottom: 18px;
    background-color: #f9fafb;
    border: 1px solid #ccc;
    color: #333;
    transition: all 0.3s ease;
    width: 100%;
}

.form-group input:focus {
    border-color: #004aad; 
    background-color: #fff;
    box-shadow: 0 0 10px rgba(255, 90, 95, 0.3);
    outline: none;
}

.btn-custom {
    background-color: #004aad;
        color: #fff;
        border: none;
        padding: 12px 25px;
        font-size: 16px;
        border-radius: 25px;
        width: 50%;
        transition: background-color 0.3s;
        display: block; 
        margin: 0 auto; 
}

.btn-custom:hover {
    background-color: #005cbf;
    box-shadow: 0 8px 20px rgba(255, 90, 95, 0.3);
    transform: translateY(-3px); /* Slight lift on hover */
}

.form-group .invalid-feedback {
    font-size: 12px;
    color: #ff2f3d; /* Red color for error messages */
    display: block;
    margin-top: 5px;
}

.col-lg-4, .col-md-6 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f2f5; /* Light gray background for the section */
    padding: 0 20px;
}



@media (max-width: 767px) {
    .form-container {
        padding: 30px;
    }
    .form-heading {
        font-size: 26px;
    }
    .btn-custom {
        font-size: 16px; /* Slightly smaller buttons on mobile */
        padding: 14px 30px;
    }
    
}

    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="form-container">
                    <h2 class="form-heading">Sign Up</h2>
                    <form action="signup_script.php" method="POST">
                        <!-- Name Input -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required autofocus="on" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <!-- Email Input -->
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter a valid Email" name="e-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <?php if (isset($_GET['m1'])) echo $_GET['m1']; ?>
                        </div>
                        <!-- Password Input -->
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter, and numeric characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>
                        <!-- Contact Input -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact (e.g., 07790807890)" maxlength="10" name="contact" required>
                            <?php if (isset($_GET['m2'])) echo $_GET['m2']; ?>
                        </div>
                        <!-- City Input -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city" required>
                        </div>
                        <!-- Address Input -->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" name="submit" class="btn-custom">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
