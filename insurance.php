<?php
session_start();
if(!isset($_SESSION['useremail'])) // If session is not set then redirect to Login Page
       {
        echo "<script type='text/javascript'>alert('Login First');location='login.php';</script>";  
       }

error_reporting(0);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Insurance</title>
    <link href="css/paystyle.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <h2>Insurance Details</h2>
        <form action="insurancesuccess.php" method="POST">
        <h4>Account</h4>
        <div class="input-group">
            <div class="input-box">
                <input type="text" placeholder="First Name" name="fname" required class="name">
                <i class="fa fa-user icon"></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Last Name" name="lname" required class="name">
                <i class="fa fa-user icon"></i>
            </div>
        </div>
        <div class="input-group">
            <div class="input-box">
                <input type="email" placeholder="Email Adress" name="email" required class="name">
                <i class="fa fa-envelope icon"></i>
            </div>
        </div>
        <div class="input-group">
            <div class="input-box">
                <h4>Date of Birth</h4>
                <input type="text" placeholder="DD" name="dd" class="dob">
                <input type="text" placeholder="MM" name="mm" class="dob">
                <input type="text" placeholder="YYYY" name="yyyy" class="dob">
            </div>
            <div class="input-box">
                <h4>Gender</h4>
                <input type="radio" id="b1" name="gender" value="Male" checked class="radio">
                <label for="b1">Male</label>
                <input type="radio" id="b2" name="gender" value="Female" class="radio">
                <label for="b2">Female</label>
            </div>
        </div>
    <div class="input-group">
        <div class="input-box">
            <h4>Address</h4>
            <div class="input-box">
                <input type="textarea" placeholder="Address" required class="name" name="address">
                <i class="fa fa-home icon"></i>
            </div>
        </div>
    </div>
    <div class="input-group">
        <div class="input-box">
            <div class="input-box">
                <input type="text" placeholder="Pincode" required class="name" name="pincode">
                <i class="fa fa-map-pin icon"></i>
            </div>
        </div>
    </div>
    
    <div class="input-group">
        <div class="input-box">
            <button type="submit" name="submit">APPLY INSURANCE</button>
        </div>
    </div>
</form>
</div>
</body>
</html>