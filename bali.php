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
</style>


<body>
    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-hiking"></i> GoTrek </a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="index.php">shop</a>
            <a href="index.php">packages</a>
            <a href="index.php">reviews</a>
            <a href="index.php">Upcoming Treks</a>
            <a href="#footer">help</a>
            <a href="insurance_info.php">Insurance</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <?php
            if (!isset($_SESSION['useremail'])) // If session is not set then redirect to Login Page
            { ?>
                <a href="login.php"> <?php } else { ?>
                    <a href="profile.php">

                    <?php } ?>
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

    <!--program start-->

    <div class="alert alert-info" role="alert" align="center">
        <h2>
            <b>Bali Pass trek</b>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <img src="images/bali1.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <h1>About Bali Pass</h1>
                <p id="para">Within the kernels of Garhwal, lies the Bali Pass having an astounding elevation of 5,000 meters. This arresting high altitude pass offers unobstructed views of the sublime Himalayan peaks such as Kala Nag, Bandarpoonch, and Swargarohini.The
                    Bali Pass trek is full of adventures and mystical views that will make your trip nostalgic. The trek starts from Sankri village and ends at Jankichatti. A little trekking experience is necessary for commencing this trek.
                    <br> Through this trek, one gets to relish the adventurous part of the religious Yamunotri valley. The path goes through villages that emits extravaganze of old village life. The genuiune beauty of Osla and Ghangad villages gives an
                    insight into ancient yet modern Himalayan lifestyle.
                </p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <h1>About trek</h1>
                <p id="para"> Ruinsara Tal is the cherry on the cake of this trek. It is a magnifying source of beauty that reflects everything around it with a filter of magnificence. The climax is the summit climb to Bali pass which is always snow-packed making no
                    closer to a cake-walk. If ascend is not enough, the descend will blow your mind and satisfy your every crazy nerve.
                    <br> Bali pass trek is for those who wish to hike to different and less travelled paths. Even though it is difficult it's every step is worth it. It challenges us in every way through drastically changing terrians, narrow paths, dangerous
                    descend, long hours of walking. Of historic, religious, mountaineering, importance Bali pass trek is nothing like any other Himalayan trek. It is a walk into the unknown of the known.
                </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <br>
                <img src="images/bali2.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" align="right" style="border-radius: 10px;">

            </div>

        </div>
    </div>

    <br>
    <br>
    <br>
    <br>



    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="images/bali3.jpg" alt="responsive webite" class="img-fluid" height="900" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">

                <h1>Trekking Guide</h1>
                <p id="para">Lesser known Bali Pass trek is the trail to cross the watershed between Yamuna and its main tributary Tons river. Bali pass at ~ 16000 ft connects the Ruinsara – Har Ki Dun area with Yamunotri valley. This one is a moderate yet a next
                    level trek. If you have already been to moderate treks like Roopkund, Rupin Pass or Goecha La then this is the next step forward. Bali Pass trek route is a relatively shorter duration trek which requires walking of less than 60 Km
                    trail. Although the pass itself at ~ 16000 ft offers the variety of elements and associated challenges.
                    <br> The trek can be split into two portions. Initially the lovely and gentle walk along the river valley to a beautiful shallow lake called Ruinsara Tal at the base of Mt. Swargarohini. Initially from Taluka you will follow traditional
                    route to Har Ki Dun up to Seema, following Tamosa/Har Ki Dun nala. The we keep going along the valley to enter into Ruinsara Nala gorge and valley.


                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div style="text-align:center">
        <button type="submit" class="btn btn-primary" onclick='location.href="#"'>Coming soon</a></button>
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