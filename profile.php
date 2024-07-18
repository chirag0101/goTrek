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
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="container">
        <div class="leftbox">
            <nav>
                <a onclick="tabs(0)" class="tab ">
                    <i class="fa fa-user"></i>
                </a>
                <a onclick="tabs(1)" class="tab">
                    <i class="fa fa-cog"></i>
                </a>
            </nav>
        </div>
        <div class="rightbox">
            <div class="profile tabShow">
                <h1>Personal Info</h1>
                <form action="">
                    <h2>Full Name</h2>
                    <input type="text" class="input" value="<?php echo $_SESSION['fname'] ?>" disabled>
                    <h2>Birthday</h2>
                    <input type="text" class="input" value="<?php echo $_SESSION['dob'] ?>" disabled>
                    <h2>Gender</h2>
                    <input type="text" class="input" value="<?php echo $_SESSION['gender'] ?>" disabled>
                    <h2>Email</h2>
                    <input type="email" class="input" value="<?php echo $_SESSION['useremail'] ?>" disabled>
                    <h2>Password</h2>
                    <input type="password" class="input" value="<?php echo $_SESSION['password'] ?>" disabled>
                </form>
                <button class="btn"><a style="text-decoration:none ; color:inherit;" href="view.php">View Products And Treks</a></button>
            </div>
            <div class="settings tabShow">
                <h1>Log Out</h1>
                <h2>Do you really want to logout?</h2>
                <button class="btn" style="text-decoration:none; color:inherit;"><a style="text-decoration:none; color:inherit;" href="logout.php" onclick="return confirm('Are you sure you want to logout?');">Log out</a></button>
            </div>
        </div>
    </div>





    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script>
        const tabBtn = document.querySelectorAll(".tab");
        const tab = document.querySelectorAll(".tabShow");

        function tabs(panelIndex) {
            tab.forEach(function(node) {
                node.style.display = "none";
            });
            tab[panelIndex].style.display = "block";
        }
        tabs(0);
    </script>
    <script>
        $(".tab").click(function() {
            $(this).addClass("active").siblings().removeclass("active");
        })
    </script>

</body>

</html>