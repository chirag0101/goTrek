<?php

include 'connection.php';

if(isset($_POST['submit'])) {
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $insertquery="Insert into `subscription mail`(subscriptionemail) values('$email')";
    $iquery=mysqli_query($con,$insertquery);
    mail($email,'Subscribed Successfully!!!','Hello Trekkie, Congratulations you have successfully subscribed to GoTrek!!! We will notify you with new Treks,Products,etc!','From: cseducation01@gmail.com');
    if ($iquery){
        echo "<script type='text/javascript'>alert('Subscribed Successfully');location='index.php';</script>"; 
    }
}

?>