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

    <div class="alert alert-info" role="alert" align="center">
        <h2>
            <h1> -------------------------------TERMS AND CONDITIONS------------------------------</h1>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="https://startupcounter.com/wp-content/uploads/2020/09/Terms-and-Conditions.png" alt="responsive webite" height="500" width="700">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <br>
                <h1>
                    <li>WELCOME TO GOTREK---></li>
                </h1>
                <p id="para">These terms and conditions outline the rules and regulations for the use of GO TREK's Website, located at www.gotrek.com.By accessing this website we assume you accept these terms and conditions. Do not continue to use GO TREK if you do
                    not agree to take all of the terms and conditions stated on this page.The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to
                    you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves.
                    All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect
                    of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken
                    as interchangeable and therefore as referring to same..</p>
                <h1>
                    <li>COOKIES---></li>
                </h1>
                <p id="para">We employ the use of cookies. By accessing GO TREK, you agreed to use cookies in agreement with the GO TREK's Privacy Policy.Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by
                    our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
                <h1>
                    <li>LICENSE---></li>
                </h1>
                <p id="para">Unless otherwise stated, GO TREK and/or its licensors own the intellectual property rights for all material on GO TREK. All intellectual property rights are reserved. You may access this from GO TREK for your own personal use subjected
                    to restrictions set in these terms and conditions.This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the Terms And Conditions Template.
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
                <h1>
                    <li>HYPERLINKING TO OUR CONTENT---></li>
                </h1>
                <p id="para"> The following organizations may link to our Website without prior written approval: 1)Government agencies; 2)Search engines; 3)News organizations; 4)Online directory distributors may link to our Website in the same manner as they hyperlink
                    to the Websites of other listed businesses; and 5)System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site. </p>
                <h1>
                    <li>IFRAMES---></li>
                </h1>
                <p id="para">Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
                <h1>
                    <li>CONTENT LIABILITY---></li>
                </h1>
                <p id="para">We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous,
                    obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
                <h1>
                    <li>RESERVATION RIGHTS---></li>
                </h1>
                <p id="para">We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and
                    it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <img src="https://storage.googleapis.com/django-statics-okf-website-production/filer_public_thumbnails/filer_public/2f/91/2f913b32-5fc0-4faf-a272-c1c2b3de6b89/cms_page_media219policy.png__584.0x680.0_subsampling-2.png" alt="responsive webite" class="img-fluid"
                    height="500" width="800" align="right">
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
                <img src="https://www.esgplaybook.com/wp-content/uploads/2021/09/undraw_security_o890.png" alt="responsive webite" class="img-fluid" height="500" width="800">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <br>
                <br>
                <br>
                <h1>
                    <li>REMOVAL OF LINKS FROM OUR WEBSITE---></li>
                </h1>
                <p id="para">If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.We do not
                    ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
                <h1>
                    <li>DISCLAIMER---></li>
                </h1>
                <p id="para">To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:-1)limit or exclude our or your liability
                    for death or personal injury; 2)limit or exclude our or your liability for fraud or fraudulent misrepresentation;3)limit any of our or your liabilities in any way that is not permitted under applicable law; or4)exclude any of our or
                    your liabilities that may not be excluded under applicable law.</p>

            </div>
        </div>
    </div>

    <br>
    <br>
    <br>


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

                <a href="#">terms of use</a>
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