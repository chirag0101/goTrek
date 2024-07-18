<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoTrek</title>
    <link rel="icon" href="lg4.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">

</head>



<style>
    .img-fluid {
        display: block;
        margin: 0 auto;
    }

    /*body {font-family: Arial, Helvetica, sans-serif;}*/
    /* Full-width input fields */

    input[type=text],
    input[type=password],
    input[type=Date],
    input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */

    form button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 10%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */

    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 30%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */

    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */

    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */

    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }

    .btn {
        margin-top: 1rem;
        display: inline-block;
        border: 0.2rem solid #10221b;
        color: #10221b;
        cursor: pointer;
        background: none;
        font-size: 1.7rem;
        padding: 1rem 3rem;
    }
</style>


<body>
    <!-- header section starts  -->

    <header class="header">

        <a href="index.php" class="logo"> <i class="fas fa-hiking"></i> GoTrek </a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="index.php">shop</a>
            <a href="index.php">packages</a>
            <a href="index.php">reviews</a>
            <a href="index.php">Upcoming Treks</a>
            <a href="#">Insurance</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="profile.php">
                <div id="search-btn" class="fa fa-user"></div>
            </a>

        </div>

    </header>

    <!-- header section ends -->

    <!-- search form  -->

    <div class="search-form">
        <div id="close-search"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!--program start-->

    <div class="alert alert-info" role="alert" align="center">
        <h2>
            <b>Go Insurance!!!</b>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="images/insure1.jpeg" alt="responsive webite" class="img-fluid" height="500" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>About GoHealth</h1>
                <p id="para">A trek is a great way to discover nature and pursue your fitness goals.However,it poses the risk of accidents and Injuries. GoHealth insurance covers many of the same situations as normal travel insurance, but it's beefed up to offer stronger
                    protection for adventure-related activities. Here are some examples of situations commonly covered by trekkers insurance: You're injured on the trail. You'll be covered for any medical and/or hospital treatment you need.<br> GoHealth
                    cover offers coverage up to Rs.20000 at a premium of Rs.399.You can pay the premium online using preffered payment modes.The plan includes a Three Months Travel Safe Membership.
                </p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>


    <div class="container-fluid">
        <div class="row">

            <div style="text-align:center">
                <button type="submit" class="btn button" onclick='location.href="check_subscription.php"'>Buy Now</a></button>
                <br><br><br>
            </div><br>
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <!-- custom js file link  -->
            <script src="js/script.js"></script>
            <section class="footer" id="footer">
                <div class="box-container">
                <div class="box">
                <h3>quick links</h3>
                <a href="index.php">home</a>
                <a href="index.php">about</a>
                <a href="index.php">shop</a>
                <a href="index.php">packages</a>
                <a href="index.php">reviews</a>
                <a href="index.php">Upcoming Treks</a>
            </div>

                    <div class="box">
                        <h3>extra links</h3>
                        <a href="#">my account</a>
                        <a href="#">my orders</a>

                        <a href="terms.php">terms of use</a>
                        <a href="policy.php">privacy policy</a>
                    </div>

                    <div class="box">
                        <h3>contact info</h3>
                        <a href="tel:9004726795"> <i class="fas fa-phone"></i> +91-90047-26795</a>
                        <a href="tel:8329755960"> <i class="fas fa-phone"></i> +91-83297-55960</a>
                        <a href=" " onclick="CreateEmailAddress()"> <i class="fas fa-envelope"></i> goTrek22@gmail.com </a>
                        <a href="#"> <i class="fas fa-map"></i>Thane, india - 400708</a>
                    </div>

                    <div class="box">
                        <h3>follow us</h3>
                        <a href="https://m.facebook.com/profile/wizard/nux/?step=1"> <i class="fab fa-facebook-f"></i> facebook </a>
                        <a href="https://www.instagram.com/gotrek2022/"> <i class="fab fa-instagram"></i> instagram </a>
                    </div>

                </div>

                <div class="credit">Managed by <span>GoTrek.in</span> | all rights reserved!</div>

            </section>


</body>

</html>