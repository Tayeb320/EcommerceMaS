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
 
 <div class="container">
			
			<center><h3 style="color:Green">Track your order<br><h3><hr>
			<form action="" method="post">
			<input type="text" name="tnx" value="" placeholder="Enter Transaction No"/>
			<input class= "btn btn-success" type="submit" name="submit" value="Track" required=true />
			</form>
			</center>
			
			<?php 
			
			
			if(isset($_POST["tnx"]) and $_POST["tnx"]!="")
			{
					$id = $_POST["tnx"];?>
					
					<div class="row">
		
			<?php 
			$product_query = "SELECT * ,sum(total) as totalprice, sum(qty) as totalQuantity FROM orders where tnx_id = $id group by tnx_id";
			$run_query = mysqli_query($con,$product_query);
			if(mysqli_num_rows($run_query) > 0){?>
			
			<h2><u>Your Orders</u></h2>
		<table class="table">
			<thead>
				<tr>
					
					<th>Transaction Id</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Order Issued</th>
					
					<th>No. of Products</th>
					<th>Total Cost</th>
					<th>Payment type</th>
					<th>Billing Address</th>
					<th style="color:white;">Status</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
				
				
				
				while($row = mysqli_fetch_array($run_query)){
				
					$tnx_id   = $row['tnx_id'];
					$name   = $row['full_name'];
					$email = $row['email'];
					$payment_type = $row['payment_type'];
					$payment_status = $row['p_status'];
					$address = $row['address'];
					$date =$row['date'];
					$status = $row['delivery_status'];
					$total_cost = $row['totalprice'];
					$total_qty = $row['totalQuantity'];
			?>
				<tr>
					<td><?php echo $tnx_id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo date("F d, Y ", strtotime($date)) ?></td>
					
					<td><?php echo $total_qty; ?></td>
					<td><?php echo $total_cost; ?></td>
					<td><?php
					if($payment_status){
					echo "Completed"; 
					}
					else{
						echo "Not Completed";
					}
					?> 
					</td>
					<td><?php echo $address;?></td>
					<td>
					<?php 
						if($status==0)
											{
												echo" <font color='white'><a class='btn btn-primary'>Pending<a/></font>";
												
												if($status==0)
												{?>
													<a class='btn btn-danger' href="profile.php?del=<?= $row['tnx_id']?> " class="btn btn-primary"> Cancel</a>
												<?php } 
											}
						if($status== 1) {
							echo"<a class='btn btn-warning'>Processing</a>";
						}
						if($status== 2) {
							echo"<a class='btn btn-success'>Delivered</a>";
						}
						if($status== 3) {
							echo"<a class='btn btn-danger'>Canceled</a>";
						}
						
					?>
						<br><a class='btn btn-primary' href="customer_invoice.php?id=<?= $row['tnx_id'] ?>">View Invoice</a>
					</td>
				</tr>
				
				<center>
				</tbody>
				
		</table>
		
			<?php }}
			
			else {
				
				echo"</br></br></br><center> <a class='btn btn-warning'> No result found</a> </center>";

			}

			?>
			</center>
			
	</div>


							<?php 
							
				
			}
			else {?><h3 style="color:red"><?php
				echo "</br>👨‍✈️:>Please Enter Your Transaction No...";
			}
			
			?>
			</h3>
		
 </div>
 
 </br></br>
 
  <?php include"footer.php";?>
 