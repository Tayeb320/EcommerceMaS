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

        <!-- Dhaka Solution CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">

<!-- coppy js popup CSS Style -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="asset/js/jquery.main.js"></script>
		
	<!-- end coppy js popup CSS Style -->	
        <script src="asset/js/modernizrr.js"></script>
			<script type="text/javascript" src="asset/js/jquery-1.9.1.min.js"></script>   
    <script type="text/javascript" src="asset/js/jssor.js"></script>
    <script type="text/javascript" src="asset/js/jssor.slider.js"></script>  
        <!-- Start Header Section -->
        <div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<img src="asset/images/slider/contact-us-banner.png">
					</div>
				</div>
			</div>
        </div>
        <!-- End Header Section -->
		
		<div class="partitio">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="col-md-4 text-center">
							<img class="usp-img" src="asset/images/email.png" alt="">
							<div class="contacttext-box">
								<h3 class="sub-heading">Email</h3>
								<p class="usp-text">
								<a href="mailto:info@colourspray.net">info@colourspray.net</a>
								</p>
							</div>
						</div>
						<div class="col-md-4 col-xs-12 col-sm-12 text-center">
							<img class="usp-img" src="asset/images/phone.png" alt="">
							<div class="contacttext-box">
								<h3 class="sub-heading">Phone</h3>
								<p class="usp-text">
								<a href="mailto:help@.com">+880 1612 265 687</a> <br>
								<a href="mailto:help@.com">+880 1611 472 230</a>
								</p>
							</div>
						</div>
						<div class="col-md-4 col-xs-12 col-sm-12 text-center">
							<img class="usp-img" src="asset/images/social.png" alt="">
							<div class="contacttext-box">
								<h3 class="sub-heading">Social</h3>
								<div class="content-column" style="padding:0px;">
									<a href="https://www.facebook.com"><img class="social-icon" src="asset/images/fb-icon.png" alt=""></a>
									<a href="http://twitter.com/"><img class="social-icon" src="asset/images/twitter-icon.png" alt=""></a>
									<a href="http://instagram.com"><img class="social-icon" src="asset/images/insta-icon.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12">
						<div class="gmap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12">
						<div class="getintus">
							<h4><strong>Get in Touch</strong></h4>
					<?php 
					if(isset($_POST["submit"]))
						
						{
							$name = $_POST["name"];
							$email = $_POST["email"];
							$mobile = $_POST["mobile"];
							$message = $_POST["message"];
							$sql = "INSERT INTO `contact`
													(`name`, `email`, `mobile`, `message`) 
													VALUES ('$name','$email','$mobile','$message')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your massage is sent to the admin Successfully..!</b>
															</div></center>
														";
														
														
														
													}
						}
					?>
							<form action="" method="post" >
								<div class="form-group">
									<input type="text" class="form-control" name="name" value="" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" value="" placeholder="E-mail">
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" name="mobile" value="" placeholder="Phone">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
								</div>
								<button class="btn btn-default" type="submit" name="submit">
									<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="newsletter_block_left" class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-4" style="padding-left:0px;color:#fff; ">
							<h4>Newsletter</h4>
						</div>
						<div class="col-md-8" style="padding-left:0px">
							<form action="" method="post">
								<div class="form-group1">
									<input class="newsletter-input" id="newsletter-input" type="text" name="email"  value="Enter your e-mail">
									<button type="submit" name="submitNewsletter" class="button-small">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
									</button>
										
								</div>
							</form>
						</div>	
					</div>	
					<div class="col-md-6">
						<div class="col-md-8" style="padding-left:0px;color:#fff;text-align: right;">
							<h4>Follow us</h4>
						</div>
						<div class="col-md-4" style="padding-left:0px">
							<ul class="socail">
								<li>
									<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-skype" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>	
					</div>	
				</div>	
			</div>			
		</div>
	
	
<?php include"footer.php";?>