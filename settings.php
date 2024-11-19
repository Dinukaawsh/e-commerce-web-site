<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
       body {
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

#content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    min-height: calc(100vh - 120px); /* Adjust for header and footer */
    padding: 20px;
    gap: 40px; /* Increase spacing for better layout */
}

.container-fluid {
    width: 100%; /* Ensure full width */
    max-width: 1200px; /* Center the content and prevent overflow */
    padding: 20px;
}

#settings-container {
    background-color: #fff;
    padding: 40px; /* Increase padding inside the card */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 700px; /* Increase max width for better visibility */
    min-height: 300px; /* Ensure a minimum height */
}

#settings-container h4 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2rem; /* Larger font for title */
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 15px; /* Larger padding for inputs */
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    display: block;
    width: 100%;
    padding: 15px; /* Larger button */
    font-size: 1.2rem; /* Bigger text */
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

.error-message {
    margin-top: 10px;
    color: #e74c3c;
    font-size: 1rem; /* Slightly larger error message */
    text-align: center;
}

@media (max-width: 768px) {
    #content {
        padding: 15px;
    }

    #settings-container {
        padding: 20px;
        max-width: 90%; /* Full width on smaller screens */
    }
}

    </style>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
        
        <div class="col-lg-4 col-md-6" id="settings-container">
            <h4>Change Password</h4>
            <form action="settings_script.php" method="POST">
                <div class="form-group">
                    <input type="password" name="old-password" placeholder="Old Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="New Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password1" placeholder="Re-type New Password" required>
                </div>
                <button type="submit" class="btn">Change</button>
                <?php if (isset($_GET['error'])): ?>
                    <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>
        <?php include("footer.php"); ?>
    </body>
</html>