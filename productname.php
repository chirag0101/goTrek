<?php
include('connection.php');

$stmt = $con->prepare("SELECT * FROM buyproduct where email='".$_SESSION['useremail']."'");

$stmt->execute();

$trekbooking = $stmt->get_result();?>
<div class="container_fluid">
		<div class="table-responsive">
			<table class="table" id="book_table">
				<thead>
					<th>Id</th>
					<th>Email</th>
					<th>Product</th>
                    </thead>
<?php if(mysqli_num_rows($trekbooking)>0){ ?>
            <?php while($row= $trekbooking->fetch_assoc()){ ?>

				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['productname'] ?></td>
			
				<tbody>	<hr>
				</tbody>
			</table>
		</div>
	</div>  
        <?php } ?>
        <?php } ?>