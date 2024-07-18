<?php
session_start();
if(!isset($_SESSION['useremail'])) // If session is not set then redirect to Login Page
{
 echo "<script type='text/javascript'>alert('Login First');location='login.php';</script>";  
}

// print_r($_SESSION);
include 'connection.php';
$query = "select * from userinfo where email='".$_SESSION['useremail']."'";
$query_run = mysqli_query($con,$query);
if($query_run){

       if(mysqli_num_rows($query_run)>0){
              $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
              $sub   =     $row['subscribe'];
       }
}


if ($sub <= 0) {
       echo "<script type='text/javascript'>location='subscription.php';</script>";  
} else {
       echo "<script type='text/javascript'>location='insurancedetails.php';</script>";  
}


error_reporting(0);

?>