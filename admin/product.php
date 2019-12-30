<?php include "header.php"; ?>
 <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Add Product Section </h2></center> <hr/>
                </div>
<div class ="container">
	<div class ="row">
		<div class="col-md-2">
		
		</div>
		
		<div class="col-md-8">
			<center> <h2 style="color:green;"> Select Category and Subcatagory  </h2> <hr/></center>
		</div>
		<div class="col-md-2">
		
		</div>
		
		
		<br>
		
		
		
		
		


	</div>
	
	
	<div class ="row">
		<div class="col-md-2">
		
		</div>
		
		<div class="col-md-6">
		
		<div class="panel panel-primary">
		<div class="panel-heading"> Select category
		
		</div>
		<div class="panel-body">
		<?php
		
		if((isset($_GET["cid"])) || (!isset($_GET["cid"])) )
		{
		?>
		<ul class="list-group">
					
					<?php 
									$product_query = "SELECT * FROM categories ";
											$run_query = mysqli_query($con,$product_query);
											if(mysqli_num_rows($run_query) > 0){
											$sl = 0;	
											
												while($row = mysqli_fetch_array($run_query)){
													$catid    = $row['cat_id'];
													$catname   = $row['cat_title'];
													$sl++;
													
													
							
							
							?>
					   <li class="list-group-item d-flex justify-content-between align-items-center" style="border-bottom:1px solid #444;">
					<a href="?cid=<?php echo $catid;?>">	<?php echo $catname ;?> </a>
						
					  </li> 
					  
					  
					  <?php
												}
											}
					  ?>
					  
					</ul>
					
					<?php
					
		} ?>
		
		</div>
		
		</div>
			
		</div>
		
		
		<div class="col-md-4">
		
		<div class="panel panel-primary">
		<div class="panel-heading"> Select Sub category
		
		</div>
		<div class="panel-body">
		<?php
		
		if((isset($_GET["cid"]))  )
		{
			$cid = $_GET["cid"];
		?>
		<ul class="list-group">
					
					<?php 
									$product_query = "SELECT * FROM sub_cat where  main_cate = $cid ";
											$run_query = mysqli_query($con,$product_query);
											if(mysqli_num_rows($run_query) > 0){
											$sl = 0;	
											
												while($row = mysqli_fetch_array($run_query)){
													$scatid    = $row['id'];
													$scatname   = $row['name'];
													$sl++;
													
													
							
							
							?>
					   <li class="list-group-item d-flex justify-content-between align-items-center" style="border-bottom:1px solid #444;">
					<a href="addproduct.php?cid=<?php echo $cid;?>&&scid=<?php echo $scatid;?>">	<?php echo $scatname ;?> </a>
						
					  </li> 
					  
					  
					  <?php
												}
											}
					  ?>
					  
					</ul>
		<?php
		
		} ?>
		</div>
		
		</div>
			
		</div>
		
		
		<br>
		
		
		
		
		


	</div>


</div>

<br> <br><br><br><br><br> <br><br><br>




<?php include "footer.php"; ?>