<?php include 'header.php';

include('connection.php');

$stmt = $con->prepare("SELECT * FROM trekbooking");

$stmt->execute();

$trekbooking = $stmt->get_result();

?>
<?php if(mysqli_num_rows($trekbooking)>0){ ?>
            <?php while($row= $trekbooking->fetch_assoc()){ ?>

				<div class="container_fluid">
		<div class="table-responsive">
			<table class="table" id="book_table">
				<thead>
					<th>Id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Trek</th>
					<th>Card type</th>
					<th>Card Number</th>
					<th>Expiry Month</th>
					<th>Expiry Year</th>
					<th>CVV</th>
				</thead>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['firstname'] ?></td>
				<td><?php echo $row['lastname'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['trekname'] ?></td>
				<td><?php echo $row['cardtype'] ?></td>
				<td><?php echo $row['cardnumber'] ?></td>
				<td><?php echo $row['expirymonth'] ?></td>
				<td><?php echo $row['expiryyear'] ?></td>
				<td><?php echo $row['cvv'] ?></td>
				<tbody>	
				</tbody>
			</table>
		</div>
	</div>
            
        <?php } ?>
        <?php } else{ ?>
			<h1>Nothing Here</h1>
            <?php } ?>

	


