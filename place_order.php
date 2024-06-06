<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['shipping_address']) && isset($_POST['payment_method'])) {
        $_SESSION['shipping_address'] = $_POST['shipping_address'];
        $_SESSION['payment_method'] = $_POST['payment_method'];

        header("Location: order_confirmation.php");
        exit;
    } else {
        echo "Error: Missing shipping address or payment method.";
    }
}
?>
