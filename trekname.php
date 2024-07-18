<?php


$stmt1 = $con->prepare("SELECT * FROM trekbooking where email='".$_SESSION['useremail']."'");

$stmt1->execute();

$trekbooking1 = $stmt1->get_result();?>
<div class="container_fluid">
		<div class="table-responsive">
			<table class="table" id="book_table">
				<thead>
					<th>Id</th>
					<th>Email</th>
					<th>Trek Name</th>
                    </thead>
<?php if(mysqli_num_rows($trekbooking1)>0){ ?>
            <?php while($row1= $trekbooking1->fetch_assoc()){ ?>

				
			
				<tbody>
				<td><?php echo $row1['id'] ?></td>
				<td><?php echo $row1['email'] ?></td>
				<td><?php echo $row1['trekname'] ?></td>
				</tbody>
			</table>
		</div>
	</div>  
        <?php } ?>
        <?php } ?>