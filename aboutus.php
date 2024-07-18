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

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="index.php" class="logo"> <i class="fas fa-hiking"></i> GoTrek </a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="#index.php">shop</a>
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

        <div id="close-search" class=""></div>

        <!-- <form action="">
            <input type="text" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form> -->
    </div>
    <!-- <br><br><br><br><br><br> -->

    <!--program start-->

    <section class="about" id="about">

        <div class="image">
            <img src="images/about1.jpg" alt="responsive webite" class="img-fluid" height="500" width="800">
        </div>

        <br><br>
        <div class="content">
            <h3>OUR COMMON VISION</h3>
            <p>At our Corporation & plc, our highest responsibility and top priorities are to operate safely, to protect the environment, and to be in compliance everywhere we operate in the world.Next to your destination, it's important decision on how
                you choose to spend your time. Of course we care about where you go but more than that we care how you create memories and experience for yourself when in there. Post understanding what you want, we craft each experience that will ensure
                your moments being transformative taking you out of your element. We are driven by our desire to build human relationship experiential value: offer life changing transformational experience. On this foundation, we aspire to deliver unmatched
                joyful vacations for our guests, always exceeding their expectations and in doing so, driving outstanding shareholder value. We are committed to a positive and just corporate culture, based on inclusion and the power ofdiversity. We operate
                with integrity, trust and respect for each other – seeking collaboration, candor, openness and transparency at all times. And, we intend to be an exemplary corporate citizen, leaving the people and the places we touch even better than
                before we touched them.
            </p>
        </div>
    </section>
    <br><br>


    <section class="about" id="about">



        <div class="content">
            <h3>HOW WE DELIVER</h3>
            <p>Every day, our team on Our store and ashore lives the Cruise Values.<br> Ensure safe, responsible and secure operations. Warmly welcome our guests and team members to our home, making them feel a part of the our family. Embrace our diversity
                and be inclusive. Engage by being friendly, smiling and using names. Show trust, care and respect for each other, our ships and the environment. Trek more Worry less. Show pride in our jobs and our company. Include fun in everything we
                do!
                <br>
            </p>
        </div>

        <div class="image">
            <img src="images/about2.jpg" alt="responsive webite" class="img-fluid" height="500" width="800">
        </div>
    </section>

    <section class="about" id="about">

        <div class="image">
            <img src="images/about3.jpg" alt="responsive webite" class="img-fluid" height="500" width="800">
        </div>


        <br><br>
        <div class="content">
            <h3>SAFETY AND SECURITY</h3>
            <p>The safety and security of our guests is our top priority. Our excellent record of safe operation throughout Carnival's 40-plus year history, and the comprehensive safety standards we continue to live up to every day, proves that commitment.
                Make sure you have proper clothing for all weather conditions. Please be prepared for adverse weather conditions and apply the mantra “better safe than sorry”. Have insurance in place so that the expenses for a helicopter emergency evacuation
                or other emergency situations are covered, if needed. Please bring the insurance details with you. Always bring you cell phone with you. It may not always catch connection when “out there”, but if it can and you need it, you’ll be glad
                you brought it. An alternative is to bring a satellite telephone (this is not a must though). Do not drink alcohol. It dehydrates you and thus increases the risk of altitude sickness if above 3,000 m. Always trek with a friend, or guide.
                While trekking above 3,000 m do not ascend too fast. Generally it is not recommended to ascend more than 3-500 m per day as doing so will significantly increase the risk of Acute Mountain Sickness (AMS). If possible, get some weather information
                enroute so as to not get caught in adverse weather circumstances.
            </p>
    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <center>
        <button onclick="history.back()" class="btn">Go Back</button>
    </center><br>


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
                <a href="https://m.facebook.com/profile/wizard/nux/?step=1"> <i class="fab fa-facebook-f"></i> facebook
                </a>
                <a href="https://www.instagram.com/gotrek2022/"> <i class="fab fa-instagram"></i> instagram </a>
            </div>

        </div>

        <div class="credit">Managed by <span>GoTrek.in</span> | all rights reserved!</div>

    </section>
</body>

</html>