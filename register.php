<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>




<?php

include 'connection.php';


if(isset($_POST['submitregistration'])) {
    $fname= mysqli_real_escape_string($con,($_POST['fname']));
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['pass']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $dob= mysqli_real_escape_string($con,ucfirst($_POST['dob']));

	$userquery=" select * from userinfo where fullname='$fname'";
    $signupquery=mysqli_query($con,$userquery);
    $usercount=mysqli_num_rows($signupquery);
    $emailquery=" select * from userinfo where email='$email'";
    $emailqueryrun=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($emailqueryrun);
    

	if($emailcount>0){

        echo '<script type="text/javascript">alert("Email Already Exist")</script>';
           
    } elseif($usercount>0){
        echo '<script type="text/javascript">alert("Username Already Exist")</script>';

    }else{
		$insertquery= " insert into userinfo(fullname,birthday,email,password,gender) values('$fname','$dob','$email','$password','$gender')";

		$iquery=mysqli_query($con,$insertquery);

		if ($iquery){
			echo "<script type='text/javascript'>alert('Registered Successfully');location='login.php';</script>"; 
		}
	}
}


?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt p-t-90" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<span class="login100-form-title">
						Trekkie Registration
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="fname" placeholder="Full name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid DOB">
						<input class="input100" type="text" name="dob" placeholder="DOB (dd-mm-yyyy)" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
					    <input name="gender" class="gd" type="radio" value="Male"  checked>Male
                        <input name="gender" class="gd" type="radio" value="Female" >Female
                        <input name="gender" class="gd" type="radio" value="Other" >Other
					</div>

					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Register" name="submitregistration">
							
						</input>
					</div>

					<div class="text-center p-t-15">
						<a class="txt2" href="login.php">
							Already have an account?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>