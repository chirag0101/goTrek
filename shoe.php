<?php

session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoTrek</title>
    <link rel="icon" href="lg4.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/style.css">


</head>

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
    <section class="about" id="about">

        <div class="image">
            <img src="images/product-4.JPG" alt="Trekking Boots" style="width:100%">
        </div>

        <div class="content">
            <h3>Trekking Boots</h3>
            <p class="price">&#8377;799</p>
            <ul>
                <li>protect your feet against bruising. </li>
                <li>abrasion from rough wilderness terrain.</li>
                <li>provide good traction on a rough, steep, slippery terrain.</li>
                <li>offer enough stability and durablity.</li>
                <li>Adequate shock-absorption and comfort.</li>
                <li>Prolonged wear and retention of shoe shape.</li>
            </ul>
            <br>
            <a href="payment.php" class="btn">Buy Now</a>
        </div>

    </section>

    <div class="other">
        <h1><b>Other Required Products</b></h1>
    </div>
    <!-- shoppp -->
    <section class="shop" id="shop">

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Backpack</h3>
                        <div class="price"> &#8377;1599</div>
                        <a href="bag.php" class="btn">View Product</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Survival Knife</h3>
                        <div class="price"> &#8377;299</div>
                        <a href="knife.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>D-ring Steel Hook</h3>
                        <div class="price"> &#8377;99</div>
                        <a href="hook.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Camping Stove</h3>
                        <div class="price"> &#8377;999</div>
                        <a href="stove.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Outdoor Tent</h3>
                        <div class="price"> &#8377;1099</div>
                        <a href="tent.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Climbing Rope</h3>
                        <div class="price"> &#8377;299</div>
                        <a href="rope.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Water Bottle</h3>
                        <div class="price"> &#8377;599</div>
                        <a href="bottle.php" class="btn">View Product</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <center>
        <button onclick="history.back()" class="btn">Go Back</button>
    </center><br>

    <!-- shop section ends -->
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

    <!-- footer section ends -->




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>



</body>

</html>