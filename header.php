
<?php include"db.php";
$ip_add = getenv("REMOTE_ADDR");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <!-- Required meta tags -->
	<meta charset="UTF-8">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="assets/img/Icon/favicon.png">
	<link rel="shortcut icon" href="favicon.ico" type="assets/img/Icon/favicon.png">
	<!-- Author Meta -->
	<meta name="author" content="Colourspray">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- Site Title -->
  <title>Online shop</title>
  <!--Main Css 1.0-->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="link/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="asset/css/myresponsive.css">

</head>
<body>
	<!-- <div class="preloader">
		<img src="assets/img/Icon/loader.gif" class="loader">
	</div> -->


	<!-- Sidebar Top Menu -->
	<header class="header-area">
		<!--header top area-->
		<div id="top-bar">
			<div class="container">
				<div class="row justify-content-end">				
					<div class="span8 col-lg-8 text-right">
						<div class="account pull-right">
							<ul class="user-menu">				
								<?php 
                                      if(isset($_SESSION["uid"]))
									  { ?> 
								        <li><a href="profile.php"><span class="icon fas fa-user"></span> <span class="text">My Account</span></a></li>
										
								        <li><a href="track.php"><span class="icon fa fa-map-marker"></span> <span class="text">Track Order</span></a></li>
								  
										<li><a href="logout.php"><span class="icon fas fa-lock"></span> <span class="text">Logout</span></a></li>  
										  
									<?php  }
                                 ?>

								<?php 
                                      if(!isset($_SESSION["uid"]))
									  { ?> 
										<li><a href="login_form.php"><span class="icon fas fa-lock"></span> <span class="text">Login </span></a></li>

                              <li><a href="customer_registration.php?register=1"><span class="icon fas fa-lock"></span> <span class="text">Register</span></a></li>										
										  
									<?php  }
                                 ?>								 
										
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header middle area-->
		<div class="header-mid-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12 logo-area">
						<a href="index.php">
							<img src="images/logo.png">
						</a>
					</div>
					<div class="col-lg-8 col-md-8 col-6 menu-area">
						<!--Header Menu-->
						<ul class="navbar-nav ml-auto">
							<li class="nav-item"><a class="nav-link active" href="index.php"><span class="fas fa-home"></span> Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
							
							<li class="nav-item"><a class="nav-link" href="newproduct.php">New products</a></li>
							
							<li class="nav-item"><a class="nav-link" href="offer.php">Offer</a></li>
							<li class="nav-item"><a class="nav-link" href="tranding.php">Trending products</a></li>
							<li class="nav-item"><a class="nav-link" href="shop.php">All products</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
						</ul>
					</div>
					<div class="col-lg-1 col-md-1 col-6 cart-area">
						<div class="cart-area-content">
							<span class="icon fas fa-shopping-basket"></span>
							<span class="badge">0</span>
							<div class="wrapp-minicart">
								
								<div class="single-cart-items">
									
										 <div id="cart_product">
								
								</div>
								
								</div>
								<div class="cart-checkout">
									<h2>Subtotal: <span>
									
									<?php
								
								if(isset($_SESSION["uid"]))
									
									{
									
									$id = $_SESSION["uid"];

										$product_query = "SELECT cart.p_id,cart.user_id,cart.qty,products.product_id,products.product_price,products.discount from cart INNER JOIN products on cart.p_id = products.product_id where cart.user_id = $id";
								$run_query = mysqli_query($con,$product_query);
														if(mysqli_num_rows($run_query) > 0){
										
									$ttl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$pro_id    = $row['product_id'];
											
											
											$qty = $row['qty'];
											$pro_price = $row['product_price'];
											$discont = $row['discount'];
											
											$rate = ($discont * $pro_price) /100;
											
											$pro_price1 = $pro_price -  $rate;
											if($discont > 0)
											{
												$pro_price = $pro_price1;
											}
											if($discont == 0)
											{
												$pro_price = $row['product_price'];
											}
											$ttl = $ttl + ($pro_price*$qty);
											
											
											
										}?>
										
								
									
									৳  <?php echo $ttl;?>
		                           
										
		
				<?php		}

									
										
									}
									
									else
									{
										
										
										$product_query = "SELECT cart.id,cart.p_id,cart.ip_add,cart.user_id,cart.qty,products.product_id,products.product_price,products.discount from cart INNER JOIN products on cart.p_id = products.product_id where cart.ip_add = '$ip_add' AND cart.user_id = -1
 ";
								$run_query = mysqli_query($con,$product_query);
														if(mysqli_num_rows($run_query) > 0){
										
									$ttl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$pro_id    = $row['product_id'];
											
											
											$qty = $row['qty'];
											$pro_price = $row['product_price'];
											$discont = $row['discount'];
											
											$rate = ($discont * $pro_price) /100;
											
											$pro_price1 = $pro_price -  $rate;
											if($discont > 0)
											{
												$pro_price = $pro_price1;
											}
											if($discont == 0)
											{
												$pro_price = $row['product_price'];
											}
											$ttl = $ttl + ($pro_price*$qty);
											
																							
											
											
										} ?>
										
									৳  <?php echo $ttl;?>
					<?php	}
										
									}
								
							
								
								
								
								
								
								?>
									
									
									</span></h2>
									<a href="shop.php" class="butn">Continue shopping</a>
									<a href="cart.php" class="butn">Check Out</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-2 col-sm-2 col-3">
						
						<div class="vertical_megamenu ">
							<h2 class="menu-title"><span class="fas fa-bars"></span> <span class="text">All Departments</span></h2>
							<ul class="megamenu-list">
								
								
								
								
								<?php 
									$product_query = "SELECT * FROM categories ";
											$run_query = mysqli_query($con,$product_query);
											if(mysqli_num_rows($run_query) > 0){
												
											
												while($row = mysqli_fetch_array($run_query)){
													$catid    = $row['cat_id'];
													$catname   = $row['cat_title'];
													
													
													
							
							
							?>
							
							
							 
							 <li class="nav-item"><a class="nav-link" href="productby_cat.php?cid=<?php echo $catid;?>"><span class="icon"><img src="assets/img/Icon/massage-1.png" alt=""></span> <span class="text"><?php echo $catname;?></span><span class="drowpdown-icon fas fa-caret-right"></span></a>
									<ul class="dropdown-menu-area">
											<?php 
									$product_query1 = "SELECT * FROM sub_cat where main_cate = $catid ";
											$run_query1 = mysqli_query($con,$product_query1);
											if(mysqli_num_rows($run_query1) > 0){
												
											
												while($row1 = mysqli_fetch_array($run_query1)){
													$subcatid    = $row1['id'];
													$subcatname   = $row1['name'];
													
													
													
							
							
							?>
									
											<li class="nav-item"><a href="productby_cat.php?scid=<?php echo $subcatid;?>" class="nav-link"><?php echo $subcatname;?></a></li>
										

											<?php } } ?>
									</ul>
								</li>
							 
							 
							 
							<?php 
												}
												
											}
							?>
								
								
								
								
								
								
								
							</ul>
						</div>
						
						
						
						
						
					</div>
					<div class="col-lg-9 col-md-10 col-sm-10 col-9">
						<div class="search-box-area">
							
							
							<form action="search.php" method="post" >
								<div class="search-overlay"></div>
								<div class="col-md-11">
								<input type="text" class="form-control" name="name" value="" placeholder="Search Item" required />
								</div>
								
								<div class="col-md-1">
								<input type="submit" class="btn btn-primary" name="search" value="search"/>
								
								</div>
								
								
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>