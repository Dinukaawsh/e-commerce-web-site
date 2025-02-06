<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact | Blaster obline Store</title>

    <!-- External Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Styles -->
    <style type="text/css">
        .p1 {
            text-align: justify;
            font-size: 16px;
            line-height: 1.6;
            color: #555555;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            padding-top: 50px;
        }

        h1 {
            color: #343a40;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        #content {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-img {
            width: 100%;
            max-width: 450px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .contact-info p {
            margin: 5px 0;
            color: #555;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            width: 100%;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-primary {
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

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .col-lg-6 {
            padding: 10px;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .contact-img {
                max-width: 100%;
            }

            .col-lg-6 {
                margin-top: 20px;
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
        <!-- Left Column: Image and Text -->
        <div class="col-lg-6">
            <img src="images/contact.png" class="contact-img" alt="Contact Us">
            <h1>Contact Us</h1>
            <p id="p1">We’re here to assist you. Whether you have questions regarding our products, payments, or delivery, feel free to get in touch with us. To minimize physical contact, we accept prepaid orders only, ensuring a safer transaction.</p>
            <p id="p1">Please note that, while we strive to deliver your orders on time, there may be unforeseen delays. However, we promise that your order will reach you as soon as possible.</p>
            <p id="p1">For additional inquiries, fill out the form below, and our support team will reach out to you within 24 hours. Alternatively, you can contact us directly using the details below.</p>
        </div>

        <!-- Right Column: Company Info & Contact Form -->
        <div class="col-lg-6 contact-info">
            <h1>Company Information</h1>
            <p><strong>Address:</strong> 111 Colombo, Sri Lanka</p>
            <p><strong>Phone:</strong> +94 761234567</p>
            <p><strong>Email:</strong> dinukaaw.sh@gmail.com</p>

            <h1>Contact Us</h1>
            <form>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" autofocus="on" class="form-control" required pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group">
                    <textarea name="address" rows="5" placeholder="Your Address" class="form-control"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>