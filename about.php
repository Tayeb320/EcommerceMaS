<?php include "header.php"; ?>
<div class ="container">
	<div class ="row">

		<div class="col-md-4">
		<br><br><br><br>
		<img src="images/icons/about.gif">
		
		</div>
		
		<div class="col-md-6">
			<center> <h2 style="color:green;"> About Us  </h2> <hr/></center>
		
		

		<?php
										
										$product_query = "SELECT * from about  ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											
											$id   = $row['id'];
											$desc   = $row['description'];
										
										?>
<p align="justify">
			<?php echo $desc;?></p>
		</div>
							<?php  } } ?>
		<div class="col-md-2">
		
		</div>
		<br>
		
		
		
		
		


	</div>


</div>

<br> <br><br><br><br><br> <br><br><br>




<?php include "footer.php"; ?>