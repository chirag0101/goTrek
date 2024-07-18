<?php include '../includes/header.php'; ?>


	<div class="container_fluid">
		<div class="table-responsive">
			<table class="table" id="product_display">
				<thead>
					<th>Id</th>
					<th>Name</th>
					<th>Description</th>
					<th>Cost</th>
					<<th>Type</th>
					<th>Images</th>
				</thead>
				<tbody>
					
				</tbody>
				
			</table>
		</div>
		
	</div>

	<script type="text/javascript">
		$(document).ready(function()
{
  //get all category
   fetch_data()
 });

   function fetch_data()
   {

   

           var table = $('#product_display').DataTable({
            autoWidth: false,
            lengthChange: true,
            pageLength: 15,
            paging: true,
            bDeferRender:true,
            ordering: false,
  
   ajax: {
                url: '../models/product_display.php',
                type: 'POST',
                dataType: 'json',
               
            },
      
     
    });
         }
	</script>

