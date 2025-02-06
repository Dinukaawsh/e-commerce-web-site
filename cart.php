<?php
session_start();
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Blaster obline Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
        body {
            background-color: #f8f9fa;
        }
        .cart-container {
            margin-top: 50px;
        }
        .cart-table {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .cart-table th {
            color: #495057;
            font-weight: bold;
        }
        .cart-table td {
            vertical-align: middle;
        }
        .empty-cart {
            text-align: center;
            padding: 50px;
        }
        .empty-cart img {
            width: 200px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .remove_item_link {
            color: #dc3545;
        }
        .remove_item_link:hover {
            color: #a71d2a;
        }
        .confirm-order-btn {
            display: block;
            text-align: right;
            margin-top: 20px;
        }
    </style>
    </head>
    <body>
    <div class="container-fluid" id="content">
        <?php include 'header.php'; ?>
        <div class="container cart-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-table">
                        <?php
                        $sum = 0; $id = '';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id AS id, items.name AS Name 
                                  FROM user_item 
                                  JOIN items ON user_item.item_id = items.id 
                                  WHERE user_item.user_id='$user_id' AND `status`=1";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $sum += $row["Price"];
                                        $id .= $row["id"] . ", ";
                                        echo "<tr>
                                                <td>#{$row['id']}</td>
                                                <td>{$row['Name']}</td>
                                                <td>Rs {$row['Price']}</td>
                                                <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'><i class='fas fa-trash-alt'></i> Remove</a></td>
                                              </tr>";
                                    }
                                    $id = rtrim($id, ", ");
                                    echo "<tr>
                                            <td></td>
                                            <td><strong>Total</strong></td>
                                            <td><strong>Rs {$sum}</strong></td>
                                            <td class='confirm-order-btn'><a href='success.php?itemsid={$id}' class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                    ?>
                                </tbody>
                            </table>
                            <?php
                        } else {
                            ?>
                            <div class="empty-cart">
                                <img src="images/confirmorder.png" alt="Empty Cart">
                                <h3>Your Cart is Empty!</h3>
                                <p>Add items to the cart to proceed with your purchase.</p>
                                <a href="products.php" class="btn btn-primary">Go to Shop</a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </div>
    </body>
</html>
