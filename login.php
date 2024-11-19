<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login | Life Style Store</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        
#login-panel {
        padding: 20px 0; 
    }
#login-panel .row {
    display: flex;
    justify-content: center; 
    align-items: center; 
    height: 100vh; 
}

.decor_bg {
        background-color: #f9f9f9; 
        padding: 10px 0; 
    }

.form-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid #e0e0e0;
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        margin-bottom: auto;
    }

    .form-heading {
        text-align: center;
        color: #004aad;
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .form-group input {
        border-radius: 5px;
        padding: 20px 15px;
        font-size: 16px;
        margin-bottom: 5px;
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        transition: border-color 0.3s;
    }

    .form-group input:focus {
        border-color: #004aad;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 74, 173, 0.4);
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
    }

    .login-image {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .form-footer {
        text-align: center;
        margin-top: 15px;
    }

    .form-footer a {
        color: #004aad;
        text-decoration: none;
    }

    .form-footer a:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="form-container">
                        <h2 class="form-heading">Login</h2>
                        <form action="login_submit.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" autofocus="on" name="e-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-custom">Login</button><br><br>
                            <?php if (isset($_GET['error'])) echo $_GET['error']; ?>
                        </form><br />
                    </div>
                    <div class="form-footer">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>



