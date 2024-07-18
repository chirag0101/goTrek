<?php
session_start();

if (!isset($_SESSION['useremail'])) {
    echo "<script>alert('Login First'); window.location='login.php';</script>";
    exit();
}

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = $_SESSION['useremail'];
    $trek = mysqli_real_escape_string($con, $_POST['select']);
    $card = mysqli_real_escape_string($con, $_POST['pay']);
    $cardnumber = mysqli_real_escape_string($con, $_POST['cardnumber']);
    $month = mysqli_real_escape_string($con, ucfirst($_POST['month']));
    $year = mysqli_real_escape_string($con, ucfirst($_POST['year']));
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);
    $insertquery = "INSERT INTO trekbooking (firstname, lastname, email, trekname, cardtype, cardnumber, expirymonth,expiryyear, cvv) VALUES ('$fname', '$lname', '$email', '$trek', '$card', '$cardnumber', '$month', '$year', '$cvv')";

    /* $insertquery = "INSERT INTO trekbooking (firstname, lastname, email, trekname, cardtype, cardnumber, expirymonth, expiryyear, cvv, trekdate) VALUES ('$fname', '$lname', '$email', '$trek', '$card', '$cardnumber', '$month', '$year', '$cvv')";
    */
    $iquery = mysqli_query($con, $insertquery);

    if ($iquery) {
/*        mail($email, 'Booking Successful!!!', 'Hello Trekkie, Congratulations on your booking!!! We will contact you for further details!', 'From: cseducation01@gmail.com');*/
        echo "<script>alert('Booking Successful'); window.location='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Booking Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="css/paystyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
                    <select name="select" class="name sbox2" id="select">
                        <option value="">---------------Select Trek---------------</option>
                        <option value="gorakhgad trek">Gorakhgad Trek - ₹4599</option>
                        <option value="harihar fort trek">Harihar Fort Trek - ₹3599</option>
                        <option value="kalsubai trek">Kalsubai Trek - ₹2999</option>
                        <option value="lohagad fort trek">Lohagad Fort Trek - ₹1499</option>
                        <option value="torna fort trek">Torna Fort Trek - ₹1999</option>
                        <option value="raigad fort trek">Raigad Fort Trek - ₹2999</option>
                        <option value="takmak fort trek">Takmak Fort Trek - ₹2999</option>
                        <option value="garbett point trek">Garbett Point Trek - ₹2999</option>
                        <option value="vikatgad/peb fort trek">Vikatgad/Peb Fort Trek - ₹2999</option>
                        <option value="malanggad trek">Malanggad Trek - ₹799</option>
                        <option value="naneghat trek">Naneghat Trek - ₹999</option>
                        <option value="vasota fort trek">Vasota Fort Trek - ₹1500</option>
                        <option value="dhudsagar trek">Dhusdsagar Trek - ₹2800</option>
                        <option value="pawna lake camping">Pawna Lake Camping - ₹3000</option>
                        <option value="nagaon beach camping">Nagaon Beach Camping - ₹3000</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio" value="DebitCard">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Debit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio" value="CreditCard">
                    <label for="bc2"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" id="cardno" placeholder="Card Number" required class="name" name="cardnumber" maxlength="16">
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
                        <?php
                        $current_year = date('Y');
                        for ($i = $current_year; $i <= $current_year + 10; $i++) {
                            echo "<option>{$i}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <input type="tel" placeholder="CVV" name="cvv" required class="name" maxlength="3">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <script>
                document.getElementById('cardno').onfocus = function() {
                    var e = document.getElementById("select");
                    var text = e.options[e.selectedIndex].text;
                    document.getElementById("pay").textContent = 'Pay ₹' + text.split(' - ')[1];
                }
            </script>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit" id="pay" name="submit" onclick="return confirm('Are you sure you want to Book?');">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
