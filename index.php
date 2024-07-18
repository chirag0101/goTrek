<?php
session_start();
error_reporting(0);

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

        <a href="#" class="logo"> <i class="fas fa-hiking"></i> GoTrek </a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="#packages">packages</a>
            <a href="#reviews">reviews</a>
            <a href="#blogs">Upcoming Treks</a>
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

        <div id="close-search" class=""></div>

        <!-- <form action="">
            <input type="text" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form> -->
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper home-slider" id="home-slider">

            <div class="swiper-wrapper" id="swiper-wrapper">

                <div class="swiper-slide" id="swiper-slide">
                    <div class="box" style="background: url(images/home-bg-1.jpg) no-repeat;">
                        <div class="content">
                            <span>never stop</span>
                            <h3>exploring</h3>
                            <p></p>
                            <a href="#packages" class="btn">get started</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" id="swiper-slide">
                    <div class="box second" style="background: url(images/home-bg-2.jpg) no-repeat;">
                        <div class="content">
                            <span>make climbing</span>
                            <h3>easier</h3>
                            <p></p>
                            <a href="#packages" class="btn">get started</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" id="swiper-slide">
                    <div class="box" style="background: url(images/home-bg-3.jpg) no-repeat;">
                        <div class="content">
                            <span>explore the</span>
                            <h3>new world</h3>
                            <p></p>
                            <a href="#packages" class="btn">get started</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- category section starts  -->

    <section class="category">

        <h1 class="heading">Maharashtra's Thrilling Adventures!</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/category-1.jpg" alt="">
                <h3>bungee jump</h3>
                <p>Experience India's 1st Bungee Jumping from a 40mtr jumping platform at Kolad.</p>
            </div>

            <div class="box">
                <img src="images/category-2.jpg" alt="">
                <h3>Lake Camping</h3>
                <p>Enjoy Camping, star gazing with your friends at the peaceful Pawna Lake.</p>
            </div>

            <div class="box">
                <img src="images/category-3.jpg" alt="">
                <h3>River Rafting</h3>
                <p>It’s time to cut loose and enjoy the ride. Book river rafting thrill at ulhas river rafting Karjat.</p>
            </div>



        </div>

    </section>

    <!-- category section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>our outdoor experiences</h3>
            <p>An initiative to trek and be with nature. Meeting like same-minded individuals. GoTrek believes in Leave no Trace policy while conducting all its events. Membership currently no membership fee is charged. GoTrek is a growing outdoor and adventure
                company in Maharashtra India. GoTrek caters to various activities such as Trekking, Forest trails, Cycling, High altitude trekking, Camping, River Rafting, Paragliding, Cycling events, Corporate team building events. We also conduct awareness
                about rural development. Your safety is our priority, Our outdoor Leaders have significant experience with outdoor activities and work very hard to make each event a safe and enjoyable experience for everyone.
            </p>
            <a href="aboutus.php" class="btn">read more</a>
        </div>

    </section>

    <!-- about section ends -->

    <!-- shop section starts  -->

    <section class="shop" id="shop">

        <h1 class="heading">featured products</h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Bagpack</h3>
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
                        <img src="images/product-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Trekking Pole</h3>
                        <div class="price"> &#8377;399</div>
                        <a href="pole.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Trekking Boots</h3>
                        <div class="price"> &#8377;799</div>
                        <a href="shoe.php" class="btn">View Product</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/product-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>D-ring Steel Hock</h3>
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
                        <div class="price"> &#8377;1599</div>
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
        <br><br>

    </section>

    <!-- shop section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">popular packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gorakhgad Trek</h3>
                    <p>The toughest climb with a toughness of it’s jaw dropping and pumping 80-90 degree climbs.</p><br><br>
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
                    <p>The attraction to Harihar fort are its iconic steps to the top of the fort. These are almost 80 degrees vertically inclined. </p><br><br>
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
                    <p>The highest peak of Maharashtra about 1646 meters above the sea level & its breathtaking views across all of the Bhandardara Dam.</p><br><br>
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
                    <div class="price">&#8377; 1999</div>
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
                    <div class="price">&#8377; 2999</div>
                    <a href="Raigad.php" class="btn">explore now</a>
                </div>
            </div>

        </div>
        <br><br>

        <center><a href="trial.php" class="btn">View More</a></center>

    </section>

    <!-- packages section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">

        <h1 class="heading">client's reviews</h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p class="text">I have been trekking for many years now. Have done lots of jungle treks. But this trek has been really really different. Its a perfect package of jungle... Streams... Mystic village.... Sunrise....sunsets... Camp sites ...caves...
                        Cooking food... This list is endless.Things that needs to be changed. The intensity of the trek had to be difficult.</p>
                    <div class="user">

                        <div class="info">
                            <h3>Soham</h3>
                            <span>Trekie</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">This being the first trek with GoTrek, I am glad to share that it has been one of my best experience ever. The warmth and the care from the entire team had helped all the days on the trek to be wholesome.Starting from the punctuality,
                        to food, from organization to the safety considerations, from the support to the fun part, GoTrek had been very professional and also cooperative.</p>
                    <div class="user">

                        <div class="info">
                            <h3>Mahek</h3>
                            <span>Trekie</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">To say the trek was magical is a small word. Being in this trek has helped me realise that this saying " Be the change you wish to see in the world" is true, how GoTrek was created, has been soaring and has been changing and impacting
                        individuals is remarkable. It has instilled a positive feedback in me , that what we believe in and the change we wish to see in the world can be brought about by us.</p>
                    <div class="user">

                        <div class="info">
                            <h3>Yash</h3>
                            <span>Trekie</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">Amazing experience I had.Impressive quality of logistics and absolutely delicious food served.Now it comes to the Trek Leader.The trek leader was really great guy to have as leader. Very positive minded he was, which amplified the
                        positivity of the trekkers.</p>
                    <div class="user">

                        <div class="info">
                            <h3>Riya</h3>
                            <span>Trekie</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">The experience with GoTrek was amazing once again. This was my 2nd trek with you and as last time i have no complaints. You guys put so much details into things that matters that as trekkers we just have to go and enjoy the trek. This
                        being my 1st trek with kids, i was amazed at the amount of security i felt when i left my kids responsibilities on you guys.</p>
                    <div class="user">

                        <div class="info">
                            <h3>Vishal</h3>
                            <span>Trekie</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">The vision and values of GoTrek was experienced and I could really feel and live these through out the trek. It was indeed the best trekking experience that I have had. Our trek lead, was amazing in the way she led the team and lived
                        these values in the true spirit. She connected well with each one of us and made it a superb experience over all.</p>
                    <div class="user">

                        <div class="info">
                            <h3>Aditi</h3>
                            <span>Trekie</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading"> what we offer? </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/serv-2.png" alt="">
                <h3>weekly treks</h3>
                <p></p>
                <a href="wktrip.php" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/serv-3.png" alt="">
                <h3>family treks</h3>
                <p></p>
                <a href="family.php" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/serv-6.png" alt="">
                <h3>various adventures</h3>
                <p></p>
                <a href="adventures.php" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> Upcoming Treks</h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/img-7.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Goechala Trek</h3>
                    <p>A Trek That Takes You Close To The World's Third Highest Mountain.</p>
                    <a href="goechala.php" class="btn">read more</a>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/img-8.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st june, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Valley of flowers trek</h3>
                    <p>India's Beautiful Legendary Trail The World Wants To Trek In.</p>
                    <a href="valley.php" class="btn">read more</a>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/img-9.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st july, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Kedarkantha Trek</h3>
                    <p>One Of The Finest Summit Climbs For Trek Beginners of India.</p>
                    <a href="kedarnath.php" class="btn">read more</a>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/img-10.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st aug, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Bali pass trek</h3>
                    <p>A Grand Pass Crossing High On Adventure at 16,207 ft.</p>
                    <a href="bali.php" class="btn">read more</a>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/img-11.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 2 sep, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>Buran ghati trek</h3>
                    <p>A Grand Buffet Of India's Greatest Treks to the great heights of India.</p>
                    <a href="buran.php" class="btn">read more</a>
                </div>

            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- newsletter section  -->

    <section class="newsletter">

        <div class="content">
            <h1 class="heading">subscribe now</h1>
            <p>To get daily updates, news & information about upcoming treks/adventures you can subscribe us!</p>
            <form action="subscribe.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email" id="" class="email">
                <input type="submit" name="submit" value="Subscribe" class="btn">
            </form>
        </div>

    </section>

    <section class="clients">

        <div class="swiper clients-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
                <div class="swiper-slide silde"><img src="images/client-logo-2.png" alt=""></div>
                <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
                <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
            </div>
        </div>

    </section>

    <!-- footer section starts  -->

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#shop">shop</a>
                <a href="#packages">packages</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">Upcoming Treks</a>
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