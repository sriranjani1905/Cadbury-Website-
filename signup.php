<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $lastname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $num = isset($_POST['number']) ? $_POST['number'] : '';
    $address = isset($_POST['add']) ? $_POST['add'] : '';
    $gmail = isset($_POST['mail']) ? $_POST['mail'] : '';
    $password = isset($_POST['pass']) ? $_POST['pass'] : '';

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "INSERT INTO web (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname', '$lastname', '$gender', '$num', '$address', '$gmail', '$password')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error: Could not register.')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
    }
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Number</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" value="Submit">
        </form>
        <p>By Clicking the SignUp Button, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a></p>
        <p>Already have an account?<a href="login.php">Login</a></p>
    </div>
</body>
</html>
