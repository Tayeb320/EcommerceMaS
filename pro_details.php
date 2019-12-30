<?php include"header.php";?>
        <!-- Bootstrap CSS  -->
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

        <!-- Dhaka Solution CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />

<!-- coppy js popup CSS Style -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.main.js"></script>
		
	<!-- end coppy js popup CSS Style -->	
        <script src="asset/js/modernizrr.js"></script>
	




 <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<div class="partition">
			<div class="container">
				<div class="row">
					<!--
					<div class="col-md-3 col-xs-12 col-sm-4 hddn">
						<div class="left-sidebar3" >
							<img src="asset/images/photo.jpg">
							
						</div>
						<div class="liftsideimg">
							<img src="asset/images/maxresdefault_live.jpg">
						</div>
						<div class="liftsideimg">
							<img src="asset/images/photo.jpg">
						</div>
						
					</div>
					-->
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="baby-faishon-text ">
							<div class="hr">
								<div class="col-md-7">
									<ul class="pajeurl">
										<li><a href="index.php">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
										<li><a href="products/fashion/all" class="text-capitalize">fashion <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
										<li><a class="text-capitalize">all man</a></li>
									</ul>
								</div>
								<div class="col-md-5 hddn">
									<div class="toolbar-sorter">
											
									</div>
								</div>
								
							</div>
						
						</div>
						<div class="row hrbotder">
						
						
						
						<?php
			
			if(isset($_GET["id"]))
				
				{
			$data = array();
			$id = $_GET["id"];
			$sql_query = "SELECT * FROM products where product_id = ?";
		
		$stmt = $con->stmt_init();
		if($stmt->prepare($sql_query)) {	
			// Bind your variables to replace the ?s
			$stmt->bind_param('s', $id);
			// Execute query
			$stmt->execute();
			// store result 
			$stmt->store_result();
			$stmt->bind_result($data['product_id'], 
					$data['product_cat'],
					$data['product_title'],
					$data['product_price'],
					$data['product_cost'],
					$data['quantity'],
					$data['status'],
					$data['product_desc'],
					$data['product_image'],
					$data['product_keywords'],
					$data['discount'],
					$data['sub_cateid']
					);
			$stmt->fetch();
			$stmt->close();
		}
			
			?>
			
						
						
						
						
							<div class="row b-b-p-t">
								<div class="single-page">
									<div class="single-page-row" id="detail-21">
										<div class="col-md-6">
											<div class="productbgimg ">
												<img src="images/<?php echo $data['product_image']; ?>" style="height:470px;width:100%;">
												
											</div>
											
											
											<div class="cardsmallimg ">
											
											<?php
											
											$pid = $_GET["id"];
						$product_query = "SELECT * FROM gallary_image where product_id = $pid ORDER BY id DESC limit 4 ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$imgid   = $row['id'];
											$imgname   = $row['image_name'];
											
											?>
											
											
											
										<a href="images/gallary/<?php echo $imgname; ?>" >	<img  src="images/gallary/<?php echo $imgname; ?>" style="height:70px;width:80px;"> </a>
											<?php
										} }
											?>
											</div>
										</div>
										<div class="col-md-6 " style="padding-left:30px;">
										
											<div class="cardditeltop">
												<div class="col-md-12 pnamecirdsmall" style="padding-left:0px;">	
													<h4 class="pnamecird"><?php echo $data['product_title']; ?>
													<?php
								
								$product_query1 = "SELECT *, sum(rating) as total, COUNT(*) as total_user FROM  tbl_rating where product_id = '$id'  ";
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
							    <center>  <b style="color:red;font-size:25px;"> * * *  </b> </center>
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
								?></h4>
												</div>
												<div class="col-md-6" style="padding-right:0px;">
												</div>
												<div class="col-md-6" style="padding-right:0px;">
													
													<ul class="stocknum ">
														<li>In Stock</li>
														<li><b><?php echo $data['quantity']; ?> </b></li>
														
													</ul>
												</div>
											</div>
											
											<div class="col-md-12" style="padding-right:0px;">
												<?php 
							if($data['discount'] > 0)
							{
							?>
							<p class="mb-3">
						
						<label>Discount <?php echo $data['discount'] ; ?> %</label> 
					</p> 
					
							<?php }
					?>
												<p class="cardpri">BDT 
												
												
											<?php 
											if($data['discount'] >0)
												
												{
												$disc = ($data['discount'] * $data['product_price']) / 100;
											$price = $data['product_price'] - $disc;	
											?>
											
												<span class="item_price"><?php echo $price;?>Tk</span> &nbsp
												<del><?php echo $data['product_price'];?> Tk</del>
												
												<?php  } ?>
												
												
												
												<?php 
											if($data['discount'] == 0)
												
												{
													
											?>
											
												<span class="item_price"><?php echo $data['product_price'];?> Tk</span>
												<del></del>
												
												<?php  } ?>
												
												</p>
												
												
										</div>	
											
											<ul class="contatytopul">
												
												
												
												
												<?php 
												if($data['quantity'] > 0)
													
													{
												?>
												<li class="add-to-card">
												<a href="#" pid="<?php echo $data['product_id'] ; ?>" id="product"  class="btn btn-primary" >Order now</a>
													
												</li>
												<li class="add-to-wishlist">
													<a href="" data-toggle = "modal" data-target="#new" class="btn btn-warning">Buy now</a>
												</li>
												
												<?php
													}
													else 
													{ 
												
												echo "<h3> <b style='color:red;'> Out of stock </b>  </h3>";
														
														
													}
												?>
											</ul>
											
											
											<div class="forodermin">
											<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
												<div class="col-md-5" style="padding:0px;">
													<p class="freeor">Free Shipping Returns</p>
													<small class="freeora">Order over 50000 Bdt</small>
												</div>
												<div class="col-md-7" style="padding:0px;">
													<div class="logoiconopad">
														<div class="logoiconad">
															<i class="fa fa-phone" aria-hidden="true"></i>						
														</div>
														<div class="logoiconpad">
															<p class="pnormelad">Call for Order</p>
															<p class="pstrongad">+01733973329</p>																				
														</div>
													</div>
												</div>
											</div>
											
											<p class="freeor1">Delivered In</p>
											<p class="freeora1">Inside Dhaka:2/3 Working Days; Outside Dhaka: 5 Working Days.</p>
											<p class="freeora1">Cash on Delivery Available </p>
											
											
										</div>
										
										 
									</div>
								</div>
							</div>
							
							
							
							
							
							
							
							
								<div class="row b-b-p-t">
									<div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading " style="width:100%;">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Description</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Review</a></li>
                           
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
						<h4> <?php echo $data['product_title'];?> </h4> <hr/>
						<p> <?php echo $data['product_desc'];?>  </p>
						</div>
                        <div class="tab-pane fade" id="tab2default">
						
						<div class="panel-body">
						<center> <h4>  Product review </h4></center> <hr/>
						
						<?php
		include "rate.php"; ?>
						
						
						
						<ul id="comments">
						
						<?php 
						$pid = $_GET["id"];
						$product_query = "SELECT * FROM comments where prod_id = $pid ORDER BY id DESC limit 5 ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['id'];
											$name   = $row['name'];
											$comments = $row['comments'];
											$proid = $row['prod_id'];
						?>
						
						   <li> <h4> <span class="glyphicon glyphicon-user"></span> &nbsp <?php echo $name ;?> </h4>   <?php echo $comments;?> </li>
						  
						 <?php
										}
										
							}
							
						 ?>
						  
						  
						</ul>
												<ul id="comments">
																																							
													<div class="reviews-bottom">
														<h4>  Your Review </h4>
														
														 <a href="rate.php?id=<?php echo $data['product_id'];?>"> Give us product rating</a>
														
														<p> Help to improve product quality...</p>
														
														<form action=""  method="post">
															<input type="hidden" name="comment_submit" value="1">
															<input type="hidden" name="prid" value="100100">
															<div class="form-group">
																<label>Your Comment </label>
																<textarea type="text" class="form-control" name="message" required="" placeholder="message..."></textarea>
															</div>	
															<div class="row">
																<div class="col-md-6 form-group">
																	<label>Your Name </label>
																	<input type="text" class="form-control" value="" name="name"  required="">
																</div>
																<div class="col-md-6 form-group">
																	<label>Your Email </label>
																	<input type="email" class="form-control" value="" name="email"  required="">
																</div>
																<div class="clearfix"></div>
															</div>
															<input type="submit" name="comment" class="btn btn-success" value="Submit">
														</form>
														
													</div>
												</ul>
												
												
												
												<?php 
												
												if(isset($_POST["comment"]))
												{
												$name = $_POST["name"];
												$email = $_POST["email"];
												$message = $_POST["message"];
												
												$sql = "INSERT INTO `comments`
													(`name`, `email`, `comments`, `prod_id`) 
													VALUES ('$name','$email','$message','$pid')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your review is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="pro_details.php?id=<?php echo $pid;?>";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}												
													
												}
												?>
											</div>
						
						
						</div>
                        
                    </div>
                </div>
            </div>
        </div>
							
							</div>
							
							
							
							
							
						
						
							
								
								<?php
								
				}
				else
				{
					echo"No product to show ";
					
				}
								?>
						</div>
						
						
						
						
					</div>
					
					
				</div>
				
					<div class="row b-b-p-t">
																
								<div class="cart-table1">
										<div class=" text-center">
										<div class="row b-b-p-t">
								<div class="col-md-4">
								
								</div>
								<div class="col-md-4">
									 <h2>Related Products</h2> <hr/>
								</div>
								<div class="col-md-4">
								
								</div>
								
								</div>
											<div class="img-block">
											
											<?php
								
								$limit = 4;
								$start = 0;
								
								include "db.php";
								$cat = $data['product_cat'];
								$product_query = "SELECT * FROM products where product_cat = $cat  ORDER BY product_id DESC LIMIT $start,$limit";
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
														
														<img src="images/<?php echo $pro_image;?>">
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
												
												<p onclick="window.location='#'" pid="<?php echo $data['product_id'] ; ?>" id="product" class="adddtocart-le">Order Now</p>
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
				
			</div>
		</div>
		
		
         <div class = "modal fade" id = "new" role = "dialog">
            <div class = "modal-dialog modal-lg">
               <div class = "modal-content">
                  <div class = "modal-header">      
                     <button type = "button" class="close" data-dismiss = "modal">×</button>
                     
                  </div>
                  <div class = "modal-body">
                     
					 
					 <div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-heading">Cart Information</div>
												<div class="panel-body">
																									<table class="table">
														<thead><tr><th>Item Info</th><th>Quantity</th><th>Unit Price</th><th>Total</th></tr></thead>
														<tbody>
															<tr>
															
															
															<?php  
															$prodid = $_GET["id"];

								$product_query = "SELECT * FROM products where product_id = $prodid ";
								$run_query = mysqli_query($con,$product_query);
								if(mysqli_num_rows($run_query) > 0){
									
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			
			
			$pro_name = $row['product_title'];
			
			$price = $row['product_price'];
			$img = $row['product_image'];
				$discount = $row['discount'];
			
															?>
																<td><?php echo $pro_name;?></td>
																<td class="aprqty">1</td>
																
																<td>BDT 
																
																<?php
											if($discount >0)
												
												{
												$disc = ($discount * $row['product_price']) / 100;
											$price = $row['product_price'] - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $row['product_price'];?>
												
												
												<?php  } ?>
																
																
																
																</td>
																<td class="aprstotal">BDT 
																
																<?php
											if($discount >0)
												
												{
												$disc = ($discount * $row['product_price']) / 100;
											$price = $row['product_price'] - $disc;	
											?>
											 <?php echo $price;?>
												
												
												<?php  } ?>
												
												
												
												<?php 
											if($discount == 0)
												
												{
													
											?>
											
												 <?php echo $row['product_price'];?>
												
												
												<?php  } ?>
																
																</td>
																
																<?php 
																
		}
								}
																?>
																
															</tr>
															<tr>
																<td colspan="6" class="text-right">
																	
																	<p><small>* Delivery charge BDT 50 Tk</small></p>
																	
																	<p><strong>Total: </strong> <span class="aprstotal">BDT <?php echo $price+50;?></span></p>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-success">
												<div class="panel-heading">
													<strong>Your Information</strong>
												</div>
												<div class="panel-body">
													<div class="col-md-8 col-md-offset-2">
														
													<form action="quick_order.php" method="post">	
														<div class="form-group">
															<label>Delivery Location</label>
															<select name="orderLocation" class="form-control">
																<option value="dhaka">Inside dhaka city</option>
																<option value="other">Outside dhaka city</option>
															</select>
														</div>
														<input type="hidden" name="pro_name" value="<?php echo $pro_name ; ?>" class="form-control" placeholder="Enter Your Number" required="">
														<input type="hidden" name="price" value="<?php echo $price+50 ; ?>" class="form-control" placeholder="Enter Your Number" required="">
														<input type="hidden" name="pro_id" value="<?php echo $pro_id ; ?>" class="form-control" placeholder="Enter Your Number" required="">
														<input type="hidden" name="img" value="<?php echo $img ; ?>" class="form-control" placeholder="Enter Your Number" required="">
														
														
														<div class="form-group">
															<label>Your Full name</label>
															<input type="text" name="cusname" value="" class="form-control" placeholder="Enter Your name" required="">
														</div>
														<div class="form-group">
															<label>Your Mobile Number</label>
															<input type="text" name="mobileNumber" value="" class="form-control" placeholder="Enter Your Number" required="">
														</div>
														<div class="form-group">
															<label>Delivery Address</label>
															<textarea class="form-control" name="fullAddress" placeholder="Enter Your Delivery Address"></textarea>
														</div>
														
													
													</div>
												</div>
											</div>
										</div>
									</div>
					 
                  </div>
                  <div class = "modal-footer">
				  <input type="submit" name="order_now" class = "btn btn-success" >
				  
				  </form>
                     <button type = "button" class = "btn btn-primary" data-dismiss = "modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
		 
		 
		 
		<a id="yt-totop" class="backtotop" href="#"><i class="fa fa-angle-up"></i> Top </a>
    <!-- End Team Member Section -->
    
       <!-- Dhaka Solution JS File -->
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/js/owl.carousel.min.js"></script>
        <script src="asset/js/jquery.appear.js"></script>
        <script src="asset/js/jquery.fitvids.js"></script>
        <script src="asset/js/jquery.nicescroll.min.js"></script>
        <script src="asset/js/lightbox.min.js"></script>
        <script src="asset/js/count-to.js"></script>
        <script src="asset/js/styleswitcher.js"></script>
        
        <script src="asset/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="asset/js/script.js"></script> 
        
  <?php include"footer.php";?>