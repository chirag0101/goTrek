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

        <a href="index.html" class="logo"> <i class="fas fa-hiking"></i> GoTrek </a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="index.php">shop</a>
            <a href="index.php">packages</a>
            <a href="index.php">reviews</a>
            <a href="index.php">blogs</a>
            <a href="#footer">help</a>
            <a href="insurance_info.php">Insurance</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <?php
            if (!isset($_SESSION['useremail'])) // If session is not set then redirect to Login Page
            { ?>
                <a href="login.php">
                <?php } else { ?>
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

    <!-- packages section starts  -->

    <section class="packages" id="packages">
        <br>
        <br>
        <br>
        <h1 class="heading">Various Adventures</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/Rafting.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Rafting</h3>
                    <p>Rafting and whitewater rafting are recreational outdoor activities which use an inflatable raft to navigate a river or other body of water.Dealing with risk is often a part of the experience.</p>
                    <div class="price">&#8377; 4599 - &#8377; 7999</div>
                    <a href="coming.html" class="btn">Coming Soon..</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/scuba.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Scuba Diving</h3>
                    <p>Scuba diving is a type of underwater diving whereby divers use breathing equipment that is completely independent of a surface air supply.It has has evolved into a very exciting adventure sport.</p>
                    <div class="price">&#8377; 3599 - &#8377; 5999</div>
                    <a href="coming.html" class="btn">Coming Soon..</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parag.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paragliding</h3>
                    <p>Paragliding is the recreational and competitive adventure sport of flying paragliders: lightweight, free-flying, foot-launched glider aircraft .The pilot sits in a 'speed bag' suspended below a fabric wing.</p>
                    <div class="price">&#8377; 2999 - &#8377; 7999</div>
                    <a href="coming.html" class="btn">Coming Soon..</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/ballon.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hot Air Balloning</h3>
                    <p>A hot air balloon is a lighter-than-air aircraft consisting of a bag which contains heated air. It carries passengers and a source of heat, in most cases an open flame caused by burning liquid propane.</p>
                    <div class="price">&#8377; 1499 - &#8377; 4599</div>
                    <a href="coming.html" class="btn">Coming Soon..</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/zip.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Zip Lining</h3>
                    <p>A zip-line, zip line, zip-wire, or zip-power-line is a pulley suspended on a cable, usually made of stainless steel, mounted on a slope.HBeautiful natural scenery, forests and animals. Awesome and deepest canyons.</p>
                    <div class="price">&#8377; 1999 - &#8377; 3999</div>
                    <a href="coming.html" class="btn">Coming Soon..</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/bungee.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bungee Jumping</h3>
                    <p>Bungee jumping is an activity that involves a person jumping from a great height while connected to a large elastic cord. he launching pad is usually a building or crane, a bridge across a deep ravine or a cliff.</p>
                    <div class="price">&#8377; 2999 - &#8377; 6999 </div>
                    <a href="coming.html" class="btn">Coming Soon..</a>
                </div>
            </div>


        </div>
        <br><br>




    </section>

    <!-- packages section ends -->






    <!-- footer section starts  -->

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
                <a href="policy.html">privacy policy</a>
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

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>