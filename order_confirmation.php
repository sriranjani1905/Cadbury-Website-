<?php
// order_confirmation.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title><!-- Link to external CSS file -->
</head>
<style>/* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.confirmation {
    margin-top: 20px;
}

.confirmation p {
    margin-bottom: 10px;
}
</style>
<body>
    <div class="container">
        <h1>Order Confirmation</h1>
        <div class="confirmation">
            <p>Your order has been placed successfully!</p>
            <p>Shipping Address: <?php echo isset($_SESSION['shipping_address']) ? $_SESSION['shipping_address'] : "Not provided"; ?></p>
            <p>Payment Method: <?php echo isset($_SESSION['payment_method']) ? $_SESSION['payment_method'] : "Not selected"; ?></p>
        </div>
        <div class="confirmation-message">
            <p>Your order has been successfully placed!</p>
            <p>Thank you for shopping with us.</p>
        </div>
        <div class="back-to-home">
            <a href="index.php">Back to Home</a>
        </div>
    </div>
</body>
</html>

