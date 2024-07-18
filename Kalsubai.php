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
            if(!isset($_SESSION['useremail'])) // If session is not set then redirect to Login Page
            {?>
                <a href="login.php">
                    <?php }else{ ?>
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
    <br>

    <!--program start-->

    <div class="alert alert-info" role="alert" align="center">
        <h2>
            <b>Kalsubai Trek</b>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="images/kalsubai1.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <br>
                <h1>About Kalsubai</h1>
                <p id="para">Kalsubai Peak is a very popular trek in the Sahyadri region. It is the highest peak in Maharashtra at 5,400 ft and is easily accessible both from Mumbai and Pune. The trek offers a breathtaking combination of natural environments like
                    waterfalls, forests, grasslands, and historic forts. The Kalsubai Temple at the summit of the peak draws people from the nearby villages throughout the year. They come to take blessings from Kalsubai Devi. It is believed that a young
                    village girl named Kalsubai, lived in the mountains. During that time she cured villagers and animals and also helped in village activities. One day she left for the summit and never returned back. So in her memory, a small temple
                    was built at her home on the mountainside and the main Kalsubai temple was built on the peak. The Kalsubai trek offers views of many famous forts like Alang, Madan, Kulang. The treks to these peaks are pretty challenging. The Kalsubai
                    trek is also a very popular night trek. Trekkers flock here for the brilliant views of the sunrise and many more.</p>
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
                <p id="para"> Trekking is another word for walking. However, the word trekking has become better known for the kind of walking, which takes you along trails winding up, down, over and around mountains. Trekking is not mountaineering although some of
                    the popular trails are used by mountaineering expeditions to get to their base camps. Most of the trails you walk on are still used predominantly by Nepali people for everyday travel and trade. It is not uncommon to be passed along
                    the way by a Nepali porter carrying lengths of corrugated roofing iron slung. Trekking is a way of seeing a mountain, its History, People and nature. You will walk through the streets of cities and villages and past the open front
                    doors of houses; you will see the people at their daily tasks, the clouds forming below you and the magnificent mountains towering over you. By trekking you will be involved in a way you could never be in a car, bus, train or airplane;
                    you can enjoy the friendliness of the people, feel the magnetism of the mountains, be at one with the country and at peace with yourself. </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="images/kalsubai2.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" align="right" style="border-radius: 10px;">
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
                <img src="images/kalsubai3.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">

                <h1>Trekking Guide</h1>
                <p id="para">Start by deciding how much time you want to spend in the outdoors. Perhaps you want to start with going out just for a day, walking leisurely through fields and forests, up to a hill fort or ancient rock-cut caves. If you’re an active
                    person, you may feel ready to spend a whole week or even two on an easy trek or even something challenging and remote. The duration of your venture will decide what and how much gear or equipment you will need. Photocopy your IDs and
                    keep copies in several places in your day or backpack. Along with that, put the details of your emergency contact. For a 2-4 day trek, carry two sets of comfortable clothing (plus what you’re wearing) for walking and wearing at camp.
                    For a fortnight-long trek, carry 4-5 sets at most. You can always wash clothes when you reach camp. A good water bottle that you can keep refilling is a must. You may want to get a rehydration pouch/bladder for your day pack. This
                    has a long pipe that comes around to the front, enabling you to drink without stopping to take your bottle out each time. Carry water purifying tablets or a suitable water filter.

                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div style="text-align:center">
        <button type="submit" class="btn btn-primary" onclick='location.href="payment2.php"'>Book Now</a></button>
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