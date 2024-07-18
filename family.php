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
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styleabout.css">
    <link rel="stylesheet" href="css/style.css">

</head>



<style>
    .img-fluid {
        display: block;
        margin: 0 auto;
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
                <a href="login.php"> <?php }else{ ?>
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

    <section class="about" id="about">

        <div class="image">
            <img src="images/family.jpg" alt="responsive webite" class="img-fluid" height="500" width="800">
        </div>

        <br><br>
        <div class="content">
            <h3>Trekking with families is an opportunity to meet other like minded families.</h3>
            <p>Families who consider trekking rather than other forms of holidaying share many common ideals. They see the immense value of being in touch with nature. They believe that the best way to deepen family bonds is by doing things together. They
                consider holidays as an opportunity to broaden their children’s mental horizons. Children get to trek, participate in several activities, and interact with other children. The friendships they form with other children on a trek are very
                special. They do this in an environment free of distraction, competition and judgement. .</p>
        </div>
    </section>
    <br><br>


    <section class="about" id="about">



        <div class="content">
            <h3>A chance for children to learn from the outdoors.</h3>
            <p>Trekking has tremendous effect on the Mind, Body, and Spirit. This effect is magnified when tenfold when it comes to children. Developing inherent qualities: In classrooms and regular city environments, with a strong emphasis on academic competition,
                children are deprived of the opportunity to develop their inherent qualities. These cannot be taught through text books or practiced in simulated conditions. Children need to be immersed in a real life experience that inherently carries
                within it the seed of such possibilities – to naturally reveal and enhance these qualities. A trek offers that experience.<br>
            </p>
        </div>

        <div class="image">
            <img src="images/family1.jpg" alt="responsive webite" class="img-fluid" height="500" width="800">
        </div>
    </section>

    <section class="about" id="about">

        <div class="image">
            <img src="images/family2.jpg" alt="responsive webite" class="img-fluid" height="500" width="800">
        </div>


        <br><br>
        <div class="content">
            <h3>Creating Strong Bonds.</h3>
            <p>The safety and security of our guests is our top priority. Our excellent record of safe operation throughout Carnival's 40-plus year history, and the comprehensive safety standards we continue to live up to every day, proves that commitment.
                Make sure you have proper clothing for all weather conditions. Please be prepared for adverse weather conditions and apply the mantra “better safe than sorry”. Have insurance in place so that the expenses for a helicopter emergency evacuation
                or other emergency situations are covered, if needed. Please bring the insurance details with you. Always bring you cell phone with you. It may not always catch connection when “out there”, but if it can and you need it, you’ll be glad
                you brought it. An alternative is to bring a satellite telephone (this is not a must though). Do not drink alcohol. It dehydrates you and thus increases the risk of altitude sickness if above 3,000 m. Always trek with a friend, or guide.
                While trekking above 3,000 m do not ascend too fast. Generally it is not recommended to ascend more than 3-500 m per day as doing so will significantly increase the risk of Acute Mountain Sickness (AMS). If possible, get some weather information
                enroute so as to not get caught in adverse weather circumstances.
            </p>
            <a href="https://forms.gle/6cyVC9hjkNuWQLGu9" class="btn">Enquire Now</a><br>
    </section>


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