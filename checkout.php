<?php
session_start(); // Add this line at the beginning

include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', 'sans-serif';
        }
        
        body {
            background-color: #ededed;
            color: #2d006b;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        form {
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input[type="radio"] {
            margin-right: 5px;
            vertical-align: middle;
        }
        input[type="text"] {
    width: 80%; /* Adjust the width to your preference */
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
/* CSS */
label {
    display: inline-block;
    margin-right: 20px; /* Adjust the margin between the labels */
}

input[type="radio"] {
    display: inline-block;
    margin-right: 10px; /* Adjust the margin between the radio buttons */
}

        
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #2d006b;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button[type="submit"]:hover {
            background-color: #472f92;
        }
    </style>
</head>
<body>
    <!-- HTML -->
    <div class="container">
        <h1>Checkout</h1>
        <form action="place_order.php" method="POST">
            <label for="shipping_address">Shipping Address:</label><br>
            <input type="text" id="shipping_address" name="shipping_address" required><br><br>
            <label>Payment Method:</label><br>
            <input type="radio" id="online_payment" name="payment_method" value="online_payment" required>
            <label for="online_payment">Online Payment</label>
            <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery" required>
            <label for="cash_on_delivery">Cash on Delivery</label><br><br>
            <button type="submit">Place Order</button>
        </form>
    </div>

</body>
</html>
<?php
unset($_SESSION['cart']);
?>
