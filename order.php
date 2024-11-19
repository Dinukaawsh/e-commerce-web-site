<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        /* General styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        #content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Success container */
        .success-container {
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            width: 100%;
            max-width: 600px;
        }

        .success-container h3 {
            font-size: 2rem;
            color: #28a745;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .success-container p {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 30px;
        }

        .success-container a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .success-container a:hover {
            text-decoration: underline;
        }

        .success-img {
            max-width: 100%;
            margin-bottom: 30px;
        }

         /* Button Styling */
.btn-back {
    background-color: #007bff !important;  /* Blue background */
    color: white !important;  /* Ensures text is always white */
    padding: 12px 25px;
    font-size: 1.1rem;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: 600;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-back:hover {
    background-color: #0056b3 !important;  /* Darker blue background on hover */
    color: white !important;  /* Keep text white on hover */
}

.btn-back:focus {
    outline: none;  /* Remove focus outline */
}
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .success-container {
                padding: 30px;
                max-width: 90%;
            }

            .success-container h3 {
                font-size: 1.8rem;
            }

            .success-container p {
                font-size: 1rem;
            }

            .btn-back {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container-fluid" id="content">
        <div class="success-container">
            <img src="images/done.png" alt="Thank You" class="success-img">
            <h3>Your order has been placed successfully. Thank you for shopping with us.</h3>
            <p>Your order will be delivered in 2 days.</p>
            <p>Click <a href="products.php">here</a> to purchase any other item.</p>
            <a href="products.php" class="btn-back">Back to Shop</a>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
