<?php

require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Body and general styles */
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

    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container-fluid" id="content">
        <div class="success-container">
            <img src="images/thanks.png" alt="Thank You" class="success-img">
            <h3>YAY!! Your order is confirmed. Thank you for shopping with us.</h3>
            <p>We appreciate your purchase! You can continue exploring our collection.</p>
            <p>Click <a href="products.php">here</a> to browse more items.</p>
            <a href="products.php" class="btn-back">Back to Shop</a>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
