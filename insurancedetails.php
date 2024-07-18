<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insurance Details</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php 

session_start();

include 'connection.php';
$query = "SELECT * FROM insurance_details WHERE useremail='".$_SESSION['useremail']."'";
$query_run = mysqli_query($con,$query);
if($query_run){

       if(mysqli_num_rows($query_run)>0){
            $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
            $sub   =     $row['full_name'];
            echo '<div class="container mt-5">
					<div class="jumbotron text-center">
						<h1>Dear <strong class="text-primary">'.$sub.'</strong> Thank You</h1>
						<h3 class="text-success mb-4">You have already Applied for the Insurance</h3>
						<a href="index.php" class="btn btn-danger">Go To Home</a>
					</div>
				</div>';
       } else {
       		echo '<div class="container mt-5">
					<div class="jumbotron text-center">
						<h1>Please Fill Your Insurance Details</h1>
						<h3 class="text-success">You have already Paid or Subscribed</h3>
						<hr>
						<a href="insurance.php" class="btn btn-lg btn-danger">Fill Insurance Form</a>
					</div>
				</div>';
       }
}



?>
	<!-- jQuery first, then Popper.js and Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>