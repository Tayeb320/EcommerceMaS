<?php include"header.php"?>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="asset/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="asset/css/owl.theme.css" type="text/css">
	<link rel="stylesheet" href="asset/css/owl.transitions.css" type="text/css">
	
	<!-- Css3 Transitions Styles  -->
	<link rel="stylesheet" type="text/css" href="asset/css/animate.css">
	
	<!-- Lightbox CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/lightbox.css">

	<!-- My CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">

	<!-- Responsive CSS Style -->
	<link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="asset/css/myresponsive.css">

	<!-- coppy js popup CSS Style -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.main.js"></script>

	<!-- end coppy js popup CSS Style -->	
	<script src="asset/js/modernizrr.js"></script>

	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Start Main Home Slider
	=============================================-->
	 
	<style type="text/css">
		.carousel-control-next-icon,
		.carousel-control-prev-icon {
			width: 35px;
			height: 35px;
		}

		.carousel-control-prev-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
		}

		.carousel-control-next-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
		}
	</style>
 
	<?php 
		$product_query = "SELECT * FROM slider ";
		$run_query = mysqli_query($con,$product_query);
		if(mysqli_num_rows($run_query) > 0){
			while($row = mysqli_fetch_array($run_query)){
				$id    = $row['id'];
				$slider1   = $row['slider1'];
				$slider2   = $row['slider2'];
				$slider3   = $row['slider3'];
			}
		}
	?>
	
	<section class="main-slider-area">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>           
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/slider/<?php echo $slider1;?>" alt="Slider 1" style="width:100%;">
				</div>
				<div class="item">
					<img src="images/slider/<?php echo $slider2;?>" alt="Slider 2" style="width:100%;">
				</div>
				<div class="item">
					<img src="images/slider/<?php echo $slider3;?>" alt="Slider 3" style="width:100%;">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<?php 
		$product_query = "SELECT * FROM marque ";
		$run_query = mysqli_query($con,$product_query);
		if(mysqli_num_rows($run_query) > 0){
			while($row = mysqli_fetch_array($run_query)){
				$id    = $row['id'];
				$marque   = $row['description'];
			}
		}
	?>
	<marquee>
        <b style="font-size:20px; font-weight:normal">   <?php echo $marque ;?> </b>
    </marquee>
	<!--Start Top Catagory Slider
	=============================================-->
	<section class="top-catagory-area">
		<div class="container">
			<div class="slider-area">
			<h2>Browse by top catagory</h2>
				<div class="row owl-carousel browse_catagory-slider">
				
				<?php 
									$product_query = "SELECT * FROM categories ";
											$run_query = mysqli_query($con,$product_query);
											if(mysqli_num_rows($run_query) > 0){
												
											
												while($row = mysqli_fetch_array($run_query)){
													$catid    = $row['cat_id'];
													$catname   = $row['cat_title'];
													$image   = $row['image'];
													
													
													
							
							
							?>
					<div class="col-12 single-slider-items">
						<a href="productby_cat.php?cid=<?php echo $catid ;?>" class="slider-content">
							<img src="images/<?php echo $image ;?>" alt="" class="slider-img">
							<h2><?php echo $catname;?> </h2>
						</a>
					</div>
					<?php
												}
												
											}
					?>
					
				</div>
			</div>
		</div>
	</section>

	
	<!--Start Organic Care Slider
	=============================================-->
	
	<section class="home_catagory-slider  hddn">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
				<h2 class="catagory-title">Offered Products</h2>
				</div>
			</div>
			<div class="row">
			
			
			<?php 
			$product_query = "SELECT * FROM banner ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$id    = $row['id'];
			$off_left   = $row['off_leftside'];
			$off_right1   = $row['off_rifht1'];
			$off_right2   = $row['off_right2'];
			$new_left   = $row['new_left'];
			$new_right1   = $row['new_right1'];
			$new_right2   = $row['new_right2'];
			$tran_left   = $row['tran_left'];
			$tran_right1   = $row['tran_right1'];
			$tran_right2   = $row['tran_right2'];
			
	}}
			?>
			
			
			<div class="col-md-3" style="padding:0px;margin:0px 0px;">
			 <div class="panel panel-primary">
					<div class="panel panel-heading"> Special offer
			 
					</div>
					<div class="panel panel-body">
					
					
					
					<img src="images/banner/<?php echo $off_left;?>" style="height:270px; width:100%;"/>
					
			 <img src="asset/images/maxresdefault_live.jpg" style="height:208px;width:100%;">
			 <img src="asset/images/img.jpg" >
					</div>
			 </div>
			</div>
			<div class="col-md-9">
					<div class="panel panel-primary">
					<div class="panel panel-heading"> Special offer
					<img src="images/new7.gif" style="height:40px; width40px;"/>
					<span style="float:right;"> <a href="offer.php" class="btn btn-info">  View All </a></span>
					</div>
					<div class="panel panel-body">
					<div class="col-md-12">
					<div class="col-md-9">
					<a href="shop.php">
					<img src="images/banner/<?php echo $off_right1;?>" style="height:230px; width:100%;" />
					
					</a>
					</div>
					
					<div class="col-md-3">
					<img src="images/banner/<?php echo $off_right2;?>" style="height:230px; width:100%;"  />
					
					</div>
					
                   </div>	
				
				
						
					 <div class="jumbotron">
       <div id="carouselExampleFadeA4" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">


    <div class="carousel-item active">
     <div class="row">
       <div class="img-block">
					
											
											<?php
								
								
								
								include "db.php";

								$product_query = "SELECT * FROM products  where discount >0  ORDER BY product_id DESC LIMIT 4";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
											
												<div class="col-md-3 pd" style="padding:0px;margin:0px 0px;float:left;">
														<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title">
														<?php 
														if($discount >0)
															
															{
														
														?>
														<p class="new-box">
															<span class="new-label"> <?php echo $discount ;?> % OFF</span>
														</p>
														
															<?php } ?>
														<div class="footer-sticky" id="" data-edate="">৳  
														<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
														</div>
														
														<img src="images/<?php echo $pro_image;?>" height="100px" width="100px" class="img-thumbnail">
														<div class="">
															<p class="head">
																<label> <?php echo $pro_title;?> </label>
																
															</p>
															<?php
								
								$product_query1 = "SELECT *, sum(rating) as total, COUNT(*) as total_user FROM  tbl_rating where product_id = '$pro_id'  ";
	$run_query1 = mysqli_query($con,$product_query1);
	if(mysqli_num_rows($run_query1) > 0){
		
		
	
		while($row = mysqli_fetch_array($run_query1)){
			$total_of_rate = $row['total'];
			$user = $row['total_user'];
			if($user >0){
		$rating = $total_of_rate / $user;
		
			
		
	
	                      
						   if($rating == 5){
							   ?>
							  <center>  <b style="color:red;font-size:25px;"> * * * * * </b> </center>
							   <?php
							   
						   }
						    if($rating == 4){
							   ?>
							     <center>  <b style="color:red;font-size:25px;"> * * * *  </b> </center>
							   <?php
							   
						   }
						    if($rating == 3){
							   ?>
							    <center>  <b style="color:red;font-size:25px;"> * * *  </b> </center>
							   <?php
							   
						   }
						    if($rating == 2){
							   ?>
							    <center>  <b style="color:red;font-size:25px;"> * *  </b> </center>
							   <?php
							   
						   }
						   
						   if($rating == 1){
							   ?>
							     <center>  <b style="color:red;font-size:25px;"> *  </b> </center>
							   <?php
						   } 
						   
			}
						}
	}
								?>
															<p class="title">৳ 
															<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
															
															</p>
															
															<div class="shop-now">
															
															<?php 
												if($qty > 0)
													
													{
												?>
												
												<p onclick="window.location='#'" pid="<?php echo $pro_id ; ?>" id="product" class="btn btn-info" style="background-color:#e26bc8;">Order Now</p>
												<?php
													}
													else 
													{ 
												
												echo "<h3> <b style='color:red;'> Out of stock </b>  </h3>";
														
														
													}
												?>
															
																
																
																
															</div> 
														</div>
													</a>
												</div>
								<?php
			
		}
		
	}
		?>					
		</div>

       

     </div>
    </div>

    <div class="carousel-item">
     <div class="row">
	  <div class="img-block">
					
											
											<?php
								
								
								
								include "db.php";

								$product_query = "SELECT * FROM products  where discount >0  ORDER BY product_id DESC LIMIT 4,24";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
											
												<div class="col-md-3 pd" style="padding:0px;margin:0px 0px;float:left;">
														<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title">
														<?php 
														if($discount >0)
															
															{
														
														?>
														<p class="new-box">
															<span class="new-label"> <?php echo $discount ;?> % OFF</span>
														</p>
														
															<?php } ?>
														<div class="footer-sticky" id="" data-edate="">৳  
														<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
														</div>
														
														<img src="images/<?php echo $pro_image;?>" height="100px" width="100px" class="img-thumbnail">
														<div class="">
															<p class="head">
																<label> <?php echo $pro_title;?> </label>
																
															</p><p class="title">৳ 
															<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
															
															</p>
															<div class="shop-now">
															
															<?php 
												if($qty > 0)
													
													{
												?>
												
												<p onclick="window.location='#'" pid="<?php echo $pro_id ; ?>" id="product" class="btn btn-info" style="background-color:#e26bc8;">Order Now</p>
												<?php
													}
													else 
													{ 
												
												echo "<h3> <b style='color:red;'> Out of stock </b>  </h3>";
														
														
													}
												?>
															
																
																
																
															</div> 
														</div>
													</a>
												</div>
								<?php
			
		}
		
	}
		?>					
		</div>
	 
      

       

     </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleFadeA4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFadeA4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>	
				
				   
				   
		
										</div>	
                                      </div>											
												
											</div>
				
				
				
			</div>
		</div>
	</section>
	
	
	
	<section class="home_catagory-slider  hddn">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
				<h2 class="catagory-title">Featured Products</h2>
				</div>
			</div>
			<div class="row owl-carousel catagory-slider">
			
			
			
			<?php
								
								$limit = 12;
								$start = 0;
								
								include "db.php";
								$product_query = "SELECT * FROM products ORDER BY product_id DESC LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
			
			
				<div class="col-12 single-slider-items">
						<div class="single-items">
						
						<?php 
											if($discount > 0)
											{
											?>
											
											<span class="offer" > <?php echo $discount ;?> % OFF</span>
											<?php } ?>
							
							<a href="pro_details.php?id= <?php echo $pro_id; ?>">
								<img src="images/<?php echo $pro_image;?>" alt="" class="img" style="height:170px;width:220px;">
							</a>
							<div class="slider-content" style="height:140px;">
								<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title"> <?php echo $pro_title;?></a> </br>
								<?php
								
								$product_query1 = "SELECT *, sum(rating) as total, COUNT(*) as total_user FROM  tbl_rating where product_id = '$pro_id'  ";
	$run_query1 = mysqli_query($con,$product_query1);
	if(mysqli_num_rows($run_query1) > 0){
		
		
	
		while($row = mysqli_fetch_array($run_query1)){
			$total_of_rate = $row['total'];
			$user = $row['total_user'];
			if($user >0){
		$rating = $total_of_rate / $user;
		
			
		
	
	                      
						   if($rating == 5){
							   ?>
							  <b style="color:red;font-size:25px;"> * * * * * </b>
							   <?php
							   
						   }
						    if($rating == 4){
							   ?>
							     <b style="color:red;font-size:25px;"> * * * *  </b> 
							   <?php
							   
						   }
						    if($rating == 3){
							   ?>
							    <b style="color:red;font-size:25px;"> * * *  </b> 
							   <?php
							   
						   }
						    if($rating == 2){
							   ?>
							     <b style="color:red;font-size:25px;"> * *  </b> 
							   <?php
							   
						   }
						   
						   if($rating == 1){
							   ?>
							     <b style="color:red;font-size:25px;"> *  </b> 
							   <?php
						   } 
						   
			}
						}
	}
								?>
								
								<?php 
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											<h4 class="price"><samp>BDT <?php echo $pro_price;?>/-</samp> BDT <?php echo $price;?>/-</h4>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												<h4 class="price"> BDT <?php echo $pro_price;?>/-</h4>
												
												
												<?php  } ?>
								
								
								
								
							</div>
						</div>
					</div>
			
					  
				
						
						<?php
			
		}
		
	}
		?>	
				
				
				
			</div>
		</div>
	</section>
	

	
	

	
	
	<!--Start Tranding Product Slider
	=============================================-->
	<section class="home_catagory-slider  hddn">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
				<h2 class="catagory-title">New Products</h2>
				</div>
			</div>
			<div class="row">
			
			
			
			
			
			<div class="col-md-3" style="padding:0px;margin:0px 0px;">
			 <div class="panel panel-primary">
					<div class="panel panel-heading"> New product
			 
					</div>
					<div class="panel panel-body">
					<img src="images/banner/<?php echo $new_left;?>" style="height:270px; width:100%;" />
				<!---	<img src="images/photo.jpg" /> --->
			 <img src="asset/images/maxresdefault_live.jpg" style="height:108px;">
					</div>
			 </div>
			</div>
			<div class="col-md-9">
					<div class="panel panel-primary">
					<div class="panel panel-heading"> New Product
					<img src="images/new7.gif" style="height:40px; width40px;" />
					<span style="float:right;"> <a href="newproduct.php" class="btn btn-info">  View All </a></span>
					</div>
					<div class="panel panel-body">
					<div class="col-md-12">
					<div class="col-md-9">
					<a href="shop.php">
					<img src="images/banner/<?php echo $new_right1;?>" style="height:230px; width:100%;" />
					</a>
					</div>
					
					<div class="col-md-3">
					<img src="images/banner/<?php echo $new_right2;?>" style="height:230px; width:100%;" />
					
					</div>
					
                   </div>	

						
						
						
						
						
						
						
					 <div class="jumbotron">
       <div id="carouselExampleFade1" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">


    <div class="carousel-item active">
     <div class="row">
       <div class="img-block">
					
											
											<?php
								
								
								
								include "db.php";

								$product_query = "SELECT * FROM products    ORDER BY product_id DESC LIMIT 4";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
											
												<div class="col-md-3 pd" style="padding:0px;margin:0px 0px;float:left;">
														<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title">
														<?php 
														if($discount >0)
															
															{
														
														?>
														<p class="new-box">
															<span class="new-label"> <?php echo $discount ;?> % OFF</span>
														</p>
														
															<?php } ?>
														<div class="footer-sticky" id="" data-edate="">৳  
														<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
														</div>
														
														<img src="images/<?php echo $pro_image;?>" height="100px" width="100px" class="img-thumbnail">
														<div class="">
															<p class="head">
																<label> <?php echo $pro_title;?> </label>
																
															</p><p class="title">৳ 
															<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
															
															</p>
															<div class="shop-now">
															
															<?php 
												if($qty > 0)
													
													{
												?>
												
												<p onclick="window.location='#'" pid="<?php echo $pro_id ; ?>" id="product" class="btn btn-info" style="background-color:#e26bc8;">Order Now</p>
												<?php
													}
													else 
													{ 
												 ?>
												<p class="btn btn-danger"><b style='color:white;'> Stock Out </b></p>
														
													<?php	
													}
												?>
															
																
																
																
															</div> 
														</div>
													</a>
												</div>
								<?php
			
		}
		
	}
		?>					
		</div>

       

     </div>
    </div>

    <div class="carousel-item">
     <div class="row">
	  <div class="img-block">
					
											
											<?php
								
								
								
								include "db.php";

								$product_query = "SELECT * FROM products    ORDER BY product_id DESC LIMIT 4,24";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
											
												<div class="col-md-3 pd" style="padding:0px;margin:0px 0px;float:left;">
														<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title">
														<?php 
														if($discount >0)
															
															{
														
														?>
														<p class="new-box">
															<span class="new-label"> <?php echo $discount ;?> % OFF</span>
														</p>
														
															<?php } ?>
														<div class="footer-sticky" id="" data-edate="">৳  
														<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
														</div>
														
														<img src="images/<?php echo $pro_image;?>" height="100px" width="100px" class="img-thumbnail">
														<div class="">
															<p class="head">
																<label> <?php echo $pro_title;?> </label>
																
															</p><p class="title">৳ 
															<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
															
															</p>
															<div class="shop-now">
															
															<?php 
												if($qty > 0)
													
													{
												?>
												
												<p onclick="window.location='#'" pid="<?php echo $pro_id ; ?>" id="product" class="btn btn-info" style="background-color:#e26bc8;">Order Now</p>
												<?php
													}
													else 
													{ 
												
												 ?>
												<p class="btn btn-danger"><b style='color:white;'> Stock Out </b></p>
														
													<?php	
														
													}
												?>
															
																
																
																
															</div> 
														</div>
													</a>
												</div>
								<?php
			
		}
		
	}
		?>					
		</div>
	 
      

       

     </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>	
						
						
						
						
						
						
						
						
						
						
						
				  
		
										</div>	
                                      </div>											
												
											</div>
				
				
				
			</div>
		</div>
	</section>
		
		
		
		
		
	<?php 
			$product_query = "SELECT * FROM home_category   ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$hcatid    = $row['id'];
			$hcat1name   = $row['category1'];
			$hcat2name   = $row['category2'];
			$hcat3name   = $row['category3'];
		}
	}
			?>	
		
		
	<section class="home_catagory-slider  hddn">
		<div class="container">
			<div class="row">
			
			
			
			
				<div class="col-12 text-center">
				<h2 class="catagory-title">
				<?php 
			$product_query = "SELECT * FROM categories where cat_id = $hcat1name ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$cat_id    = $row['cat_id'];
			$cat_title1   = $row['cat_title'];
			
		}
	}
			?>
				<?php echo $cat_title1;?> Products</h2>
				</div>
			</div>
			<div class="row">
			
			
			
			
			
			<div class="col-md-3" style="padding:0px;margin:0px 0px;">
			 <div class="panel panel-primary">
					<div class="panel panel-heading"> <?php echo $cat_title1;?> Products
			 
					</div>
					<div class="panel panel-body">
					
					<ul class="list-group">
					
					<?php 
									$product_query = "SELECT * FROM sub_cat where main_cate = $cat_id ";
											$run_query = mysqli_query($con,$product_query);
											if(mysqli_num_rows($run_query) > 0){
											$sl = 0;	
											
												while($row = mysqli_fetch_array($run_query)){
													$scatid    = $row['id'];
													$scatname   = $row['name'];
													$sl++;
													
													
							
							
							?>
					   <li class="list-group-item d-flex justify-content-between align-items-center" style="border-bottom:1px solid #444;">
					<a href="productby_cat.php?scid=<?php echo $scatid;?>">	<?php echo $scatname ;?> </a>
						
					  </li> 
					  
					  
					  <?php
												}
											}
					  ?>
					  
					</ul>
					<img src="images/banner/<?php echo $tran_left;?>" style="height:270px; width:100%;" />
					
			 <img src="asset/images/maxresdefault_live.jpg" style="height:108px;">
					</div>
			 </div>
			</div>
			<div class="col-md-9">
					<div class="panel panel-primary">
					<div class="panel panel-heading"> <?php echo $cat_title1;?> Products
					<span style="float:right;"> <a href="productby_cat.php?cid=<?php echo $cat_id;?>" class="btn btn-info">  View All </a></span>
					</div>
					<div class="panel panel-body">
					<div class="col-md-12">
					<div class="col-md-9">
					<a href="shop.php">
					<img src="images/banner/<?php echo $tran_right1;?>" style="height:230px; width:100%;" />
					</a>
					</div>
					
					<div class="col-md-3">
					<img src="images/banner/<?php echo $tran_right2;?>" style="height:230px; width:100%;" />
					
					</div>
					
                   </div>


				
					 <div class="jumbotron">
       <div id="carouselExampleFade" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">


    <div class="carousel-item active">
     <div class="row">
       <div class="img-block">
					
											
											<?php
								
								
								
								include "db.php";

								$product_query = "SELECT * FROM products where product_cat = $hcat1name ORDER BY product_id DESC LIMIT 4";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
											
												<div class="col-md-3 pd" style="padding:0px;margin:0px 0px;float:left;">
														<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title">
														<?php 
														if($discount >0)
															
															{
														
														?>
														<p class="new-box">
															<span class="new-label"> <?php echo $discount ;?> % OFF</span>
														</p>
														
															<?php } ?>
														<div class="footer-sticky" id="" data-edate="">৳  
														<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
														</div>
														
														<img src="images/<?php echo $pro_image;?>" height="100px" width="100px" class="img-thumbnail">
														<div class="">
															<p class="head">
																<label> <?php echo $pro_title;?> </label>
																
															</p><p class="title">৳ 
															<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
															
															</p>
															<div class="shop-now">
															
															<?php 
												if($qty > 0)
													
													{
												?>
												
												<p onclick="window.location='#'" pid="<?php echo $pro_id ; ?>" id="product" class="btn btn-info" style="background-color:#e26bc8;">Order Now</p>
												<?php
													}
													else 
													{ 
												
												echo "<h3> <b style='color:red;'> Out of stock </b>  </h3>";
														
														
													}
												?>
															
																
																
																
															</div> 
														</div>
													</a>
												</div>
								<?php
			
		}
		
	}
		?>					
		</div>

       

     </div>
    </div>

    <div class="carousel-item">
     <div class="row">
	  <div class="img-block">
					
											
											<?php
								
								
								
								include "db.php";

								$product_query = "SELECT * FROM products where product_cat = $hcat1name ORDER BY product_id DESC LIMIT 4,24";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$qty = $row['quantity'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$discount = $row['discount'];
			?>
											
												<div class="col-md-3 pd" style="padding:0px;margin:0px 0px;float:left;">
														<a href="pro_details.php?id= <?php echo $pro_id; ?>" class="title">
														<?php 
														if($discount >0)
															
															{
														
														?>
														<p class="new-box">
															<span class="new-label"> <?php echo $discount ;?> % OFF</span>
														</p>
														
															<?php } ?>
														<div class="footer-sticky" id="" data-edate="">৳  
														<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
														</div>
														
														<img src="images/<?php echo $pro_image;?>" height="100px" width="100px" class="img-thumbnail">
														<div class="">
															<p class="head">
																<label> <?php echo $pro_title;?> </label>
																
															</p><p class="title">৳ 
															<?php
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $pro_price;?>
												
												
												<?php  } ?>
															
															</p>
															<div class="shop-now">
															
															<?php 
												if($qty > 0)
													
													{
												?>
												
												<p onclick="window.location='#'" pid="<?php echo $pro_id ; ?>" id="product" class="btn btn-info" style="background-color:#e26bc8;">Order Now</p>
												<?php
													}
													else 
													{ 
												
												echo "<h3> <b style='color:red;'> Out of stock </b>  </h3>";
														
														
													}
												?>
															
																
																
																
															</div> 
														</div>
													</a>
												</div>
								<?php
			
		}
		
	}
		?>					
		</div>
	 
      

       

     </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>	


				
										</div>	
                                      </div>											
												
											</div>
				
				
				
			</div>
		</div>
	</section>
	
	
		
                  <?php include"footer.php"?>