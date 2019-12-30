 <style>
table, td, tr, th {
  border-collapse: collapse;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #54aff6;
  color: white;
}
</style>
 <?php include"header.php";?>
 
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Customer List </h2></center> <hr/>
                </div>
 <div id="page-wrapper" style="overflow:scroll;">
            <div class="row">
               
                <!-- /.col-lg-12 -->
            </div>
								
				
								
							<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>Customer name</th>
        <th>Email</th>
		<th>Phone</th>
		<th>Address</th>

		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM user_info where type=0 ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$uid   = $row['user_id'];
											$fname   = $row['first_name'];
											$lname = $row['last_name'];
											$email   = $row['email'];
											$mobile = $row['mobile'];
											$address1 = $row['address1'];
								
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><?php echo $fname.' '.$lname; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?> </td>
											<td><?php echo $address1; ?></td>
											
											<td>
											<form action="view.php" method="post">
											<input type="hidden" name="uid" class="btn btn-danger" value="<?php echo $uid;?>">
											<input type="submit" name="cusdetails" class="btn btn-info" value="View">
								
											</form>

                      

											
											</td>
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
