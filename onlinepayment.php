<?php
session_start();
require_once('vendor/autoload.php'); 
\Stripe\Stripe::setApiKey('your_secret_key');
$shipping_address = $_POST['shipping_address'];
$payment_method = $_POST['payment_method'];
if ($payment_method === 'online_payment') {
    // Process online payment using Stripe
    try {
        // Create a PaymentIntent
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => 1000, // Amount in cents
            'currency' => 'usd',
        ]);

        // Redirect the customer to the payment confirmation page
        header('Location: payment_confirmation.php?payment_intent_id=' . $paymentIntent->id);
        exit;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} elseif ($payment_method === 'cash_on_delivery') {
    // Handle cash on delivery option
    // You can save the order details to the database and display a confirmation message
    echo 'Your order has been placed successfully. You will pay cash upon delivery.';
} else {
   
    echo 'Invalid payment method.';
}
