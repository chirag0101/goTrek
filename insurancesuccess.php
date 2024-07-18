<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Insurance Success</title>
</head>
<body>
    
    <?php
    session_start();
    include 'connection.php';


    if (isset($_POST['submit'])) {
        $fname = mysqli_real_escape_string($con, ($_POST['fname']));
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $fullname = $fname.' '.$lname;
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $d = mysqli_real_escape_string($con, $_POST['dd']);
        $m = mysqli_real_escape_string($con, $_POST['mm']);
        $y = mysqli_real_escape_string($con, $_POST['yyyy']);
        $dob = $d.'-'.$m.'-'.$y;
        $useremail  =   $_SESSION['useremail'];
        $gender = mysqli_real_escape_string($con, ucfirst($_POST['gender']));
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $pincode = mysqli_real_escape_string($con, $_POST['pincode']);

        $insertquery1 = "INSERT INTO insurance_details(full_name,dob,email,useremail,gender,address,pincode) values('$fullname','$dob','$email','$useremail','$gender','$address','$pincode')";
        $iquery1 = mysqli_query($con, $insertquery1);
        // echo $insertquery1;

        if ($iquery1) {
            echo "<script type='text/javascript'>alert('Successfully');</script>";
            echo '<div class="container text-center mt-5">
                <h1>Dear <strong class="text-primary">'.ucwords($fullname).'</strong></h1>
                <hr>
                <h2>You have successfully <strong>Applied</strong> for Insurance.</h2>
                <div class="mt-4">
                    <a href="index.php" class="btn btn-danger">Go To Home</a>
                </div>
            </div>';
        } else {
            echo mysqli_error($con);
            // echo "<script type='text/javascript'>alert('Error');location='insurance.php';</script>";
        }
    }



    ?>
    <!-- jQuery first, then Popper.js and Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>