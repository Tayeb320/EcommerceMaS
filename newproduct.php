<?php include"header.php";?>
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

<!-- coppy js popup CSS Style -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.main.js"></script>
		
	<!-- end coppy js popup CSS Style -->	
        <script src="asset/js/modernizrr.js"></script>
	<!--Start Footer Area
	=============================================-->
<section class="product-catagory">
	<div class="listings-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 wrap-title">
					<ul class="title_breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="#" class="active">Arish Bionaturals</a></li>
					</ul>
				</div>
				<div class="col-lg-3 entry-title text-right">
					<h1>Arish Bionaturals</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="left-side-area">
				
				<h5 class="left-sidebarmanutitle" style="color:#444;">SHOP BY CATAGORY</h5> <hr>
							<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
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
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#Fashion<?php echo $sl;?>">
												
												<a href="shop.php?cid=<?php echo $catid ;?>"> <?php echo $catname ;?> </a>
											</a>
										</h4>
									</div>
									
								</div>
								
								<?php
												}
												
											}
								?>
								
								
							</div><!--/category-productsr-->
				
					<div class="single-tab">
						<h2>More products</h2>
						<div class="items-details">
						
						
						<?php
								
								$limit = 8;
								$start = 4;
								
								include "db.php";
								$product_query = "SELECT * FROM products ORDER BY  product_id DESC LIMIT $start,$limit";
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
						
						
						
						
							<div class="single-items">
								<div class="item-img product-thumb">
									<a href="pro_details.php?id=<?php echo $pro_id; ?>">
										<img src="images/<?php echo $pro_image;?>" alt="" class="product-img">
									</a>
								</div>
								<div class="item-content">
									<!--Title-->
								<a href="pro_details.php?id=<?php echo $pro_id; ?>">	<h4><?php echo $pro_title; ?></h4> </a>
									<!--Ratings-->
									
									<!--Price-->
									<div class="item-price">
										<?php 
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											
												
												<ins><span>BDT <?php echo $price;?>/-</span></ins>
											<del><span>BDT <?php echo $pro_price;?>/-</span></del>
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												<ins><span>BDT <?php echo $pro_price;?>/-</span></ins>
											<del><span></span></del>
												
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
					
				</div>
			</div>
			<div class="col-lg-9">
				<div class="right-side-area">
					<h1 class="page-title">New Products</h1>
					
					<!--Header Nav Menu
					=================================-->
					<div class="header-nev-area">
						<div class="row">
							<div class="col-lg-7 text-right">
								<ul class="nav nav-tabs">
									<li class="active"><a class="active" data-toggle="tab" href="#grid-view"><span class="fas fa-th-large"></span></a></li>
									<li><a data-toggle="tab" href="#list-view"> <span class="fas fa-list"></span></a></li>
								</ul>
								<div class="catalog-ordering">
									<span>Short by</span>
									<select class="order-dropdown">
										<option value="">Default</option>
										<option value="">Popularity</option>
										<option value="">Rating</option>
										<option value="">Date</option>
										<option value="">Price</option>
									</select>
								</div>
								<div class="product-number">
									<span>Short by</span>
									<select class="count-dropdown">
										<option value="">12</option>
										<option value="">24</option>
										<option value="">36</option>
										<option value="">48</option>
									</select>
								</div>
							</div>
							<div class="col-lg-5 text-right">
								<div class="page_number">
									<a href="#" uk-icon ="icon: chevron-left"></a>
									<a href="#" class="active">1</a>
									<a href="#">2</a>
									<a href="#" uk-icon ="icon: chevron-right"></a>
								</div>
							</div>
						</div>
					</div>

							
					<!--Product view-->
					<div class="tab-content ProductCatagoryView">
						<div id="grid-view" class="tab-pane GridProductView fade in active show">
							<div class="row">
							
							
							<?php
							

						
									
								
								
								include "db.php";
							
								$product_query = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0,20 ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$qty = $row['quantity'];
			$discount = $row['discount'];
			$description = $row['product_desc'];
			?>
			
			
			
			
			
			
			
			
			<div class="col-lg-3">
									<div class="single-items">
									<?php 
											if($discount > 0)
											{
											?>
											<span><span class="new-label1"><?php echo $discount ;?>% OFF</span></span>
											
											<?php } ?>
										
										<div class="items-img">
											<img src="images/<?php echo $pro_image ;?>" style="height: 120px; width: 173px;">
											<a href="pro_details.php?id=<?php echo $pro_id; ?>" class="img-preview-btn"><span class="fas fa-eye"></span></a>
										</div>
										<h2> <?php echo $pro_title;?></h2>
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
										<div class="productPrice">
										
										
										<?php 
											if($discount >0)
												
												{
												$disc = ($discount * $pro_price) / 100;
											$price = $pro_price - $disc;	
											?>
											
												
												<ins><span>BDT <?php echo $price;?>/-</span></ins>
											<h7><del><span>BDT <?php echo $pro_price;?>/-</span></del></h7>
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												<ins><span>BDT <?php echo $pro_price;?>/-</span></ins>
											<del><span></span></del>
												
												<?php  } ?>
										
										
										
										
											
										</div>
										<div class="addCart">
										
										<?php 
                       if($qty >0)


					   { ?>
												
												
												<a href="#" pid="<?php echo $pro_id ; ?>" id="product"  class="butn_round add" ><span class="cart-icon"></span>Add to cart</a>

											<?php	 }


						   
					?><?php 
                       if($qty <1)


					   {
						 echo "<a style='color:red;'> Out of stock </a>";  
					   } ?>
										
										
											
											
										</div>
									</div>
								</div>
			
			
			
			
			
			
			
			
			
			
			
			
				
								
						<?php
			
		}
		
	}
	
	
								
								
								
								
								
								
								
							
							
							
							?>
							
							
								
								
							</div>
						</div>	
					</div>
				
					<!--Bottom Nav Menu
					=================================-->
				
					</div>
				</div>
			</div>
		</div>
</section>


	<?php include"footer.php";?>