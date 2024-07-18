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

    <!-- packages section starts  -->

    <section class="packages" id="packages">
        <br>
        <br>
        <br>
        <h1 class="heading">Weekly Trips</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/malang.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Malanggad Trek</h3>
                    <p> Malanggad fort situated at about 2590 feet above the sea level. Malanggad, located 17 km from Kalyan, was critical in controlling the trade routes. It held an extraordinary view of the district.Panchi Pir established nearly at the
                        corner of the rock called after the five Pirs who followed Haji Malang</p>
                    <div class="price">&#8377; 799</div>
                    <a href="payment2.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/nane.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Naneghat Trek</h3>
                    <p>Naneghat is a mountain pass situated at an elevation of 2600 feet. The trek is famous for its ancient pass it connects the Konkan Coast and Junnar town. Naneghat is a mountain pass in the Western Ghats range near Junnar in Pune district
                        of Maharashtra.
                        <br>
                        <br>
                    </p>
                    <div class="price">&#8377; 999</div>
                    <a href="payment2.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/vasota.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Vasota Fort Trek</h3>
                    <p>Vasota Fort is located at an altitude of 1171 m near Bamnoli village in Satara district. Surrounded by deep forests and valleys of Konya Wildlife Sanctuary, Vasota Fort Trek is very interesting that passes through steep hills and also
                        popular as famous trekking place in Maharashtra.
                        <br>
                    </p>
                    <div class="price">&#8377; 1500</div>
                    <a href="payment2.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/dudhsagr.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dudhsagar Trek</h3>
                    <p>Dushsagar Trek is one of the amazing treks near Pune that you must try in case you are adventure lover. Located on the edges of Goa, Maharashtra, and Karnataka this is one of the most beautiful and famous treks amongst all the trekkers.
                        You can choose any route to cover this trek and both routes are interesting in their own way. </p>
                    <div class="price">&#8377; 2800 </div>
                    <a href="payment2.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/pawna.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pawna Lake Camping</h3>
                    <p>Pawna Tent Camp: Situated at a distance of 18 km from Lonavala, Pawna Lake is an apt place to go for a camping experience near Lonavala.Pawna is an extremely huge and adorable lake near the popular hill station of Lonavala. There are
                        many historical forts around like Tikona, Lohagad, Visapur, Tung etc. to trek around. </p>
                    <div class="price">&#8377; 3000 </div>
                    <a href="payment2.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/nagaon.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nagaon Beach Camping</h3>
                    <p>Nagaon is a beach town on the shores of the Arabian Sea, in the North Konkan region of Maharashtra, India. It is located 9 km from Alibag and 114 km from Mumbai. Nagaon beach is popular mainly because of its cleanliness, water sport
                        activities.The beach is around 3 km long. </p>
                    <br><br>
                    <div class="price">&#8377; 3000 </div>
                    <a href="payment2.php" class="btn">Book now</a>
                </div>
            </div>
    </section>

    <center>
        <button onclick="history.back()" class="btn">Go Back</button>
    </center><br>

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