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

    <!-- packages section starts  -->

    <section class="packages" id="packages">
        <br>
        <br>
        <br>
        <h1 class="heading">popular packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gorakhgad Trek</h3>
                    <p>The toughest climb with a toughness of it’s jaw dropping and pumping 80-90 degree climbs.</p>
                    <div class="price">&#8377; 4599</div>
                    <a href="Gorakhgad.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Harihar Fort Trek</h3>
                    <p>The attraction to Harihar fort are its iconic steps to the top of the fort. These are almost 80 degrees vertically inclined. </p>
                    <div class="price">&#8377; 3599</div>
                    <a href="Harihar.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kalsubai Trek</h3>
                    <p>The highest peak of Maharashtra about 1646 meters above the sea level & its breathtaking views across all of the Bhandardara Dam.</p>
                    <div class="price">&#8377; 2999</div>
                    <a href="Kalsubai.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lohagad Fort Trek</h3>
                    <p>The trek to the fort is an easy one and perfect for the first-timers, making it a favourite haunt of hiking enthusiasts.</p>
                    <div class="price">&#8377; 1499</div>
                    <a href="Lohagad.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Torna Fort Trek</h3>
                    <p>trek along the beautiful flower beds, water cisterns, temples, etc to the highest hill-fort in the Pune District.</p>
                    <div class="price">&#8377; 1999 </div>
                    <a href="Torna.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Raigad Fort Trek</h3>
                    <p>The fort that served as the capital of Chhatrapati Shivaji Maharaj, the Great Maratha king was crowned here.</p>
                    <div class="price">&#8377; 2999 </div>
                    <a href="Raigad.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/takmak2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Takmak fort Trek</h3>
                    <p>The historical Takmak fort is situated in Vasai Tehsil. Surrounded by a dense forest, the fort is naturally separated from the main hill. </p>
                    <div class="price">&#8377; 2999 </div>
                    <a href="takmak.php" class="btn">explore now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/garbett1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Garbett Point Trek</h3>
                    <p> located near Matheran with grand view of the plateau below.A steep trek to a soaring mountain viewpoint, green hills & waterfalls. </p>
                    <div class="price">&#8377; 2999 </div>
                    <a href="garbett.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/vikatgad1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>vikatgad/peb fort Trek</h3>
                    <p>Located near Maldange district of Maharashtra.The fort derives its name from the Goddess Pebi at the base of fort. </p>
                    <div class="price">&#8377; 2999 </div>
                    <a href="vikatgad.php" class="btn">explore now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/karnala.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Karnala Fort Trek</h3>
                    <p>Karnala Fort is a hill fort in Raigad district, Maharashtra.Currently it is a protected place lying within the Karnala Bird Sanctuary.</p>
                    <br>
                    <br>
                    <div class="price"> Est under &#8377; 7999 </div>
                    <a href="coming.html" class="btn">coming soon</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/week4.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Rajmachi Fort Trek</h3>
                    <p>Rajmachi Fort is one of the many historical forts in the hills of Sahyadri mountains. Located on the machi at the southern foot of Manaranjan Balekilla of Rajmachi Fort. </p>
                    <div class="price"> Est under &#8377; 8499 </div>
                    <a href="coming.html" class="btn">coming soon</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Devkund waterfall Trek</h3>
                    <p>Devkund is a rare plunge waterfall in Maharashtra. It is a beautiful amalgamation of three waterfalls and is said to be the origin of the Kundalika River. </p>
                    <div class="price"> Est under &#8377; 9999 </div>
                    <a href="coming.html" class="btn">coming soon</a>
                </div>
            </div>
        </div>
        <br><br>

        <center>
            <button onclick="history.back()" class="btn">Go Back</button>
        </center><br>




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