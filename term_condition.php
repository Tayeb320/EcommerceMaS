<?php include "header.php"; ?>
<div class ="container">
	<div class ="row">
		<div class="col-md-2">
		
		</div>
		
		<div class="col-md-8">
			<center> <h2 style="color:green;"> Terms  & Condition  </h2> <hr/></center>
		</div>
		<div class="col-md-2">
		
		</div>
		
		<div class="col-md-2">
		
		</div>
		<?php
										
										$product_query = "SELECT * from term  ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											
											$id   = $row['id'];
											$desc   = $row['description'];
										
										?>
		<div class="col-md-8">
			<p align="justify"><?php echo $desc;?></p>
		</div>
							<?php  } } ?>
		<div class="col-md-2">
		
		</div>
		<br>
		
		
		
		
		


	</div>


</div>

<br> <br><br><br><br><br> <br><br><br>




<?php include "footer.php"; ?>