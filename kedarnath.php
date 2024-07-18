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
            <b>Kedarnath trek</b>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="images/kedarnath.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <br>
                <h1>About Kedarnath</h1>
                <p id="para">Kedarnath is one of the holy places and the most sacred pilgrimages of Lord Shiva. It is situated in Rudraprayag district of Garhwal region in Uttarakhand and every year thousands of pilgrims visit this place to seek blessing from Lord
                    Shiva. It is one of the Char Dhams in Uttarakhand and is regarded as the most important dham among Panch kedar. This holy pilgrimage is positioned at an altitude of 3586 meters in the mesmerizing backdrop of magnificent mountains near
                    the gorgeous river Mandakini, Kedarnath range stands one of the twelve Jyotirlingas of Lord Shiva.
                    <br>
                    <br> Even the name of this shrine also has a strong meaning “Kedar” means powerful which is another name of Lord Shiva, the protector and destroyer. Spectacular aura, snow clad mountains and breathtaking landscape makes Kedarnath trek
                    even more interesting and hence people visit in large numbers every year.</p>
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
                <p id="para"> The complete trek of Kedarnath is of 16 kilometers which starts from Gaurikund to Kedarnath. The trek has changed after the 2013 flood disaster and since then the 14 kilometers trek has changed and turned 16 kilometers trek. Below is the
                    detailed guide of new Kedarnath trek route.However, before proceeding for 16 kilometers medium to steep trek every pilgrim has to get themselves checked that whether they are physically fit or not. Moreover, timings of Kedarnath Trek
                    from Gaurikund commences from 4AM to 1.30PM.
                    <br> The timing is fixed because of safety reasons as Kedanath is located in the Kedarnath Wildlife Sanctuary and hence the pilgrims are not allowed to trek after a particular time. No pilgrim is allowed to leave after the specific
                    time. People with heart and respiratory problems should first consult with doctor before going for this high altitude trek of Kedarnath. Apart from all this, proper facilities of tented accommodation, drinking water, restaurants and
                    small shops are there enroute to make the trek comforting for the pilgrims. </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="images/kedarnath1.jpg" alt="responsive webite" class="img-fluid" height="500" width="800" align="right" style="border-radius: 10px;">
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
                <img src="images/kedarnath2.jpg" alt="responsive webite" class="img-fluid" height="900" width="800" style="border-radius: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">

                <h1>Trekking Guide</h1>
                <p id="para">The forests in this stretch are least traveled. Apart from the villagers, only our trekkers take this route. So in a lot of ways, this route has stayed pristine. In fact, if you are not careful, you can get easily lost.Get the checkup
                    done prior going on Kedarnath trek People with heart, respiratory and blood pressure problem should not take the trek before proper consulting with the doctor.
                    <br> If you’re willing to travel through Palki, Kandi and Ponies make sure you done prior booking at Gaurikund/Sonprayag booking counter Take note of the trek time as you can only trek between 4AM to 1.30PM after that pilgrims are
                    not allowed to trek to Kedarnath In case you’re unable to cover the trek till late evening you can opt for Palki or Ponies to reach till destination or you can simply take rest in the camps nestled at Jungle Chatti, Bheem Bali and
                    Linchauli for a night and then start the journey next morning.


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