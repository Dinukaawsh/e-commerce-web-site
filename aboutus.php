<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Life Style Store</title>

    <!-- External Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Styles -->
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            padding-top: 50px;
        }

        #content {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        h3, h4 {
            color: #343a40;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
        }

        mark {
            background-color: #f8f9fa;
            color: #007bff;
            padding: 3px;
            font-weight: bold;
        }

        p {
            font-size: 16px;
            line-height: 1.8;
            color: #555555;
        }

        .row {
            margin-top: 20px;
        }

        .col-lg-4 {
            padding: 20px;
        }

        .col-lg-4 img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .ul-list {
            padding-left: 20px;
            list-style-type: square;
            margin-top: 10px;
        }

        .ul-list li {
            font-size: 16px;
            margin-bottom: 10px;
            color: #555;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .col-lg-4 {
                margin-top: 20px;
            }

            h3, h4 {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container" id="content">
    <div class="row">
        <!-- Left Column: Company Overview -->
        <div class="col-lg-4" align="justify">
            <h3><mark>WHO WE ARE</mark></h3>
            <p>Lifestyle Store is a recognized leader in the ecommerce industry, with a steadfast commitment to success and a record of achievement that continues a tradition of delivering excellence.<br><br>The company was founded in 2015 by Vishwadutt M S to ease the process of ordering various items. From those early days with just one employee, Lifestyle Store now has more than 10,000 employees, serving thousands of customers.<br><br>Lifestyle Store is guided by four principles: customer obsession rather than competitor focus, passion for invention, commitment to operational excellence, and long-term thinking.</p>
            <h4><mark>Vision</mark></h4>
            <p>To make the world a more stylish, colorful, and happier place.</p>
            <h4><mark>Mission</mark></h4>
            <p>We strive to offer our customers the lowest possible prices, the best available selection, and the utmost convenience.</p>
        </div>

        <!-- Right Column: Business Growth and Strategy -->
        <div class="col-lg-4" align="justify">
            <h3><mark>BUILDING THE FUTURE</mark></h3>
            <p>We strive to have a positive impact on customers, employees, small businesses, the economy, and communities.<br><br> We are smart, passionate builders with different backgrounds and goals, who share a common desire to always be learning and inventing on behalf of our customers.</p>
            <h4><mark>Our Growth Strategies</mark></h4>
            <ul class="ul-list">
                <li><strong>Market Development:</strong> Our focus is on entry and growth in new markets.</li>
                <li><strong>Market Penetration:</strong> We aim to generate more revenue from markets where the company currently operates.</li>
                <li><strong>Product Development:</strong> Our goal is to develop and offer new products to gain higher revenues.</li>
                <li><strong>Diversification:</strong> Our objective is to achieve growth based on new business.</li>
            </ul>
        </div>

        <!-- Right Column: Image -->
        <div class="col-lg-4">
            <img src="images/about.png" alt="Team Image">
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>
