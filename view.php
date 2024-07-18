<?php
include 'connection.php';
session_start();
$stmt = $con->prepare("SELECT * FROM buyproduct where email='" . $_SESSION['useremail'] . "'");

$stmt->execute();

$trekbooking = $stmt->get_result();

$stmt1 = $con->prepare("SELECT * FROM trekbooking where email='" . $_SESSION['useremail'] . "'");

$stmt1->execute();

$trekbooking1 = $stmt1->get_result();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="view.css">
  <link rel="stylesheet" href="css/view.css">
</head>

<body>
  <div class="tables">
    <p class="title"><b> My Orders</b></p>
    <table class="flat-table flat-table-1 table1">
      <thead>
        <th>Id</th>
        <th>Email</th>
        <th>Product Name</th>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($trekbooking) > 0) { ?>
          <?php while ($row = $trekbooking->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['productname'] ?></td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>

    <p class="title"><b> My Treks</b></p>
    <table class="flat-table flat-table-2 table2">
      <thead>
        <th>Id</th>
        <th>Email</th>
        <th>Trek Name</th>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($trekbooking1) > 0) { ?>
          <?php while ($row1 = $trekbooking1->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row1['id'] ?></td>
              <td><?php echo $row1['email'] ?></td>
              <td><?php echo $row1['trekname'] ?></td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>

    <button onclick="history.back()" class="btn">Go Back</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>