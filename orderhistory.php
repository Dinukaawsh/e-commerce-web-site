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
        <title>Order History | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            body {
                background-color: #f7f7f7;
            }
            #content {
                padding: 20px;
            }
            .decor_bg {
                background: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                margin: 20px 0;
                padding: 20px;
            }
            table thead th {
                background-color: #007bff;
                color: white;
                text-align: center;
            }
            table tbody td {
                text-align: center;
            }
            h1 {
                font-weight: bold;
                color: #333;
                margin-bottom: 20px;
            }
            .empty-cart-message {
                font-size: 20px;
                color: #ff6b6b;
                text-align: center;
                margin-top: 20px;
            }
            .order-link {
                color: #007bff;
                text-decoration: underline;
                cursor: pointer;
            }
            .order-link:hover {
                color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'header.php'; ?>
            
            <div class="row decor_bg">
            <h1 class="text-center" style="margin-top: 20px;">Order History</h1>
                
          

                <div class="col-md-12">
                    
               
                    <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $id = '';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id AS id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' AND `status`=2";
                        $query1 = "SELECT user_item.date_time AS Timedate FROM user_item WHERE user_id='$user_id' AND `status`=2";
                        $result = mysqli_query($con, $query);
                        $result1 = mysqli_query($con, $query1);

                        if ($result && mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Order Date & Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $id .= $row["id"] . ", ";
                                    echo '<tr>
                                            <td><a href="order.php" class="order-link">' . $row["Name"] . '</a></td>
                                            <td>Rs. ' . $row["Price"] . '</td>';
                                    $total += $row["Price"];
                                    if ($row1 = mysqli_fetch_array($result1)) {
                                        echo '<td>' . $row1["Timedate"] . '</td></tr>';
                                    }
                                }
                                echo "<tr>
                                        <td><strong>Total</strong></td>
                                        <td><strong>Rs. $total</strong></td>
                                        <td></td>
                                      </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo '<div class="empty-cart-message">Sorry! No orders placed yet.</div>';
                        }
                        ?>
                    </table>
                    

                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
