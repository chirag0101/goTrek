<?php
session_start();
if (!isset($_SESSION['useremail'])) // If session is not set then redirect to Login Page
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
    <title>Document</title>
    <link href="css/paystyle.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <?php

    include 'connection.php';


    if (isset($_POST['submitbuy'])) {
        $fname = mysqli_real_escape_string($con, ($_POST['firstname']));
        $lname = mysqli_real_escape_string($con, $_POST['lastname']);
        $email = $_SESSION['useremail'];
        $product = mysqli_real_escape_string($con, $_POST['select']);
        // $add = mysqli_real_escape_string($con, ($_POST['address']));
        $card = mysqli_real_escape_string($con, $_POST['pay']);
        $cardnumber = mysqli_real_escape_string($con, $_POST['cardnumber']);
        $month = mysqli_real_escape_string($con, ucfirst($_POST['month']));
        $year = mysqli_real_escape_string($con, ucfirst($_POST['year']));
        $cvv = mysqli_real_escape_string($con, ($_POST['cvv']));

        $insertquery1 = "insert into buyproduct(firstname,lastname,email,productname,cardtype,cardnumber,expirymonth,expiryyear,cvv) values('$fname','$lname','$email','$product','$card','$cardnumber','$month','$year','$cvv')";
        $iquery1 = mysqli_query($con, $insertquery1);
        mail($email,'Booking Successful!!!','Hello Trekkie, Congratulations, your order has been successfully placed!!! We will be delivered as soon as possible!','From: cseducation01@gmail.com');

        if ($iquery1) {
            echo "<script type='text/javascript'>alert('Product Bought Successfully');location='index.php';</script>";
        } else {
            echo "Error";
        }
    }



    ?>

    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="First Name" required class="name" name="firstname">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last Name" required class="name" name="lastname">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <!-- <input type="tel" placeholder="Card Number" required class="name">
                <i class="fa fa-credit-card icon"></i> -->
                    <select name="select" id="product" class="name" multiple>
                        <option value="----Select----" id="item">---------------Select Products---------------</option>
                        <option value="bagpack" class="item" label="BagPack">1599</option>
                        <option value="survival knife" class="item" label="Knife">299</option>
                        <option value="trekking pole" class="item" label="Trekking Pole">399</option>
                        <option value="trekking boots" class="item" label="Trekking Boots">799</option>
                        <option value="dring" class="item" label="D-Ring">99</option>
                        <option value="camping stove" class="item" label="Camping stove">999</option>
                        <option value="outdoor tent" class="item" label="Outdoor Tent">1599</option>
                        <option value="climbing rope" class="item" label="Climbing rope">299</option>
                        <option value="water bottle" class="item" label="Water Bottle">599</option>
                    </select>
                </div>
            </div>
           
        <div class="input-box">
            <h4>Address</h4>
            <div class="input-box">
                <input type="textarea" placeholder="Address" required class="name" name="address">
                <i class="fa fa-home icon"></i>
            </div>
        </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio" value="Debit Card">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Debit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio" value="Credit Card">
                    <label for="bc2"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Card Number" name="cardnumber" id="cardno" required class="name" maxlength="16">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <select class="sbox" name="month">
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>Aug</option>
                        <option>Sept</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                    <select class="sbox" name="year">
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                    </select>
                    
                </div>
                
                <div class="input-box">
                    <input type="number" placeholder="CVV" name="cvv" required class="name" maxlength="3">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <script>
                document.getElementById('cardno').onfocus = function() {
                    var selected = [];
                    var sum = 0;
                    for (var option of document.getElementById('product').options) {
                        if (option.selected) {
                            selected.push(option.textContent);
                        }
                    }
                    for (let i = 0; i < selected.length; i++) {
                        sum += parseInt(selected[i]);
                    }
                    document.getElementById('pay').textContent = "Pay ₹"+sum;
                }
            </script>

            <div class="input-group">
                <div class="input-box">
                    <button type="submit" id="pay" name="submitbuy" onclick="return confirm('Are you sure you want to Buy?');">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>