 <?php include"header.php";?>
 
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Customer Details </h2></center> <hr/>
                </div>
 
 <div id="page-wrapper">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
								
								
								
								
								
						<table class="table">				
							

							<?php 
							
							if(isset($_POST["cusdetails"])){
							include "db.php";
							$id = $_POST["uid"];
							$product_query = "SELECT * FROM user_info where user_id = $id limit 1";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											
											$fname   = $row['first_name'];
											$lname   = $row['last_name'];
											
											$email = $row['email'];
											$mobile = $row['mobile'];
											$adress1 = $row['address1'];
											$adress2 = $row['address2'];
											
											?>
							
							
								
							
   
   
							
										  <tr>

											<td>Name</td><td><?php echo $fname.' '.$lname; ?></td> </tr>
										

											<tr><td>Email</td>	<td><?php echo $email; ?></td></tr>
											<tr><td>Mobile No</td>	<td><?php echo $mobile; ?></td></tr>
										<tr><td>Address Line 1</td>	<td><?php echo $adress1; ?></td></tr>
										<tr><td>Address Line 2</td>	<td><?php echo $adress2; ?></td></tr>
											<a href='cus_info.php' class="btn btn-info">Bact to List</a>
											
										
										  <br>
							
							
							<?php
		}
							}
							
							}
							?>
				
					

  </table>

            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
