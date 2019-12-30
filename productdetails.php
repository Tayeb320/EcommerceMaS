<?php include"header.php";?>
	
	
	
	
	
	<?php
								
		include "db.php";				



						$proid = $_GET['id'];
								
								
								$product_query = "SELECT * FROM products where product_id = $proid  ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];

			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$description = $row['product_desc'];
			$qty = $row['quantity'];
			?>
			
<html>			
  <!---product detailsa---->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="hlp">Product Image</h3>			
			<div class="productimage">
				<img src="images/<?php echo $pro_image;?>">
			</div>
		</div>
		<div class="col-md-6">
			<h3 class="hlp"><?php echo $pro_title;?></h3>
			<h4 style="color:#FF8C00;"> Price tk <?php echo $pro_price;?></h4>
			<p>Product Name : <?php echo $pro_title;?></p>
			<p>Product description : <?php echo $description;?> </p>
			<p> 

				<?php
					$product_query1 = "SELECT * FROM orders where product_id = $pro_id";
								$run_query1 = mysqli_query($con,$product_query1);
								$nmbr = mysqli_num_rows($run_query1);
								if( ($nmbr > 0) && ($nmbr < 2) ){ ?> 
									
								<center> Ratings: <b style="color:red;">  <i class="fa fa-star" aria-hidden="true"></i></b></center>
		
								<?php }
								
								
								
								if( ($nmbr > 1) && ($nmbr < 3) ){ ?> 
									
								 Ratings: <b style="color:red;">  <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i></b>
		
								<?php }
								
								if( ($nmbr > 2) && ($nmbr < 5) ){ ?> 
									
								 Ratings: <b style="color:red;"> <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i></b>
		
								<?php }
								
								
								
									if( ($nmbr > 4) && ($nmbr < 6) ){ ?> 
									
								 Ratings: <b style="color:red;"> <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i></b>
		
								<?php }
								
								if( $nmbr > 5 ){ ?> 
									
								 Ratings: <b style="color:red;"> <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> &nbsp; <i class="fa fa-star" aria-hidden="true"></i> </b>
		
								<?php }
					
					?>

			</p>
			<p>Quantity :  <input type="number" name="quantity" value="1"> </p>
			<h4 style="color:red;">Help line </h4>
			<p class="fa fa-phone">01937084470</p><br>
			<p class="fa fa-phone">01976615775</p><br>
		    <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div><br>
			<?php 
                       if($qty >0)


					   { ?>
			<div class="btn-success12"><a href="#" pid="<?php echo $pro_id ; ?>" id="product" >Add to cart</a></div>
			
			<a class="btn btn-success"  href="?id=<?php echo $proid; ?>&&cid=<?php echo $pro_id ; ?>"   >Add To Wishlist</a>
			
				<?php	 }


						   
					?>
					
					<?php 
                       if($qty <1)


					   {
						 echo "<a style='color:red;'> Out of stock </a>";  
					   }


						   
					?>
		</div>	
	</div>
	<div class="row">
	
	
					<?php
					if(isset($_GET["cid"]))
					{
					
					$product_id = $pro_id;
					$product_name = $pro_title;
					$product_price = $pro_price;
					$product_image = $pro_image;
					
					
					$sql = "INSERT INTO `campare`
													(`product_id`, `product_price`, `image`, `name`) 
													VALUES ('$product_id','$product_price','$product_image','$product_name')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is Added in comparelist!</b>
															</div></center>
														";
														
														
														?>
														
																<script type="text/javascript">
																<!--
																function Redirect() {
																window.location="productdetails.php?id=<?php echo $pro_id ;?>";
																}
																document.write("<center></center>");
																setTimeout('Redirect()', 3000);
																//-->
																</script>
														
														
														<?php
														exit();
													}
					
					
					
					
					}
					
					
					?>
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				
				
				<div class="row" style="margin-top:100px;">
				
				
					<center> 
					<h2>Product Review  </h2>
					
					<form action="" method="post">
					Name:
					<input type="text" name="name" value=""><br><br>
					Coments:
					<input type="text" name="msg" value=""><br><br>
					<input type="submit" class="btn btn-success"name="cmnd" value="submit">
					
					</form>
					
					
					<?php 
					
					if(isset($_POST["cmnd"]))
						
						{
							$c_name= $_POST["name"];
							$c_cmd= $_POST["msg"];
					
					$sql = "INSERT INTO `comments`
			(`name`, `comments`, `prod_id`) 
			VALUES ('$c_name','$c_cmd','$pro_id')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your comments is Added Successfully..!</b>
					</div>
				";
				exit();
			}
					
					?>
					</center>
				</div>
								</div>
</div>

	<?php }}}?>

</html>



<?php include"footer.php";?>