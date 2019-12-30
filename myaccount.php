

<?php 

if (!isset($_SESSION["uid"])) {
	header("location:login_form.php");
}
include"header.php";?>
<!--header part 2 end-->
<!--Menu-->
<div class="container">
	<div class="row">
	
	        <center> <h3>Hi, &nbsp <?php echo $_SESSION["name"];?>   Welcome to your account </h3> </center><br><br><br>
	
	          Your Account Details 
			 <hr/>
			 				
				<table class="table">				
							

							<?php 
							include "db.php";
							$id = $_SESSION["uid"];
							$product_query = "SELECT * FROM orders where user_id = $id limit 1";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$orderid   = $row['order_id'];
											$name   = $row['full_name'];
											
											$email = $row['email'];
											
											$adress = $row['address'];
											$city = $row['city'];
											$state = $row['state'];
											$zip = $row['zip_code'];
											
											?>
							
							
								
							
   
   
							
										  <tr>

											<td>Name</td><td><?php echo $name; ?></td> </tr>
										

											<tr><td>Email</td>	<td><?php echo $email; ?></td></tr>
										<tr><td>Address</td>	<td><?php echo $adress; ?></td></tr>
										<tr><td>City</td>	<td><?php echo $city; ?></td></tr>
										<tr><td>State</td>	<td><?php echo $state; ?></td></tr>
										<tr><td>Zip</td>	<td><?php echo $zip; ?></td></tr>
											
											
										 
										  
							
							
							<?php
		}
							}
							?>
				
					

  </table>
		
		</div>
	</div>
</div>
<!--Slider END-->






<?php include"footer.php";?>