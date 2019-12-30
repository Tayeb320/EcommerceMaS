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
  
  color: black;
}
</style>
 <?php include"header.php";?>
<?php
	if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $d_status=$_POST['del_status'];
      $p_status=$_POST['payment_status'];
     
    
     
   $query=mysqli_query($con, "update  orders set delivery_status='$d_status',p_status='$p_status' where tnx_id='$cid'");
    if ($query) {
    $msg="Status and Beautician has been selected.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
?>


 <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Order Details </h2></center> <hr/>
                </div>
 
 <div id="page-wrapper" style="overflow:scroll;">
 <div class="table">

			<h2 color="Gray">Customer Order Details</h4>
								
								<?php 
							$vid=$_GET['viewid'];
							$product_query = "select * from orders where tnx_id = '$vid' limit 1";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){

										while($row = mysqli_fetch_array($run_query)){
											?>
											<div class="table-responsive">		
								
								
							<table class="table">
							<?php 
											
											$tnx_id   = $row['tnx_id'];
											$name   = $row['full_name'];
											$email   = $row['email'];
											$mobile   = $row['mobile'];
											$address   = $row['address'];
											$date   = $row['date'];
											$d_status   = $row['delivery_status'];
											$pay_status   = $row['p_status'];
											$p_type   = $row['payment_type'];
											$zip_code   = $row['zip_code'];
											$transaction_id   = $row['transaction_id'];
											$acc_nmbr   = $row['acc_nmbr'];
											
											?>
										  <tr>
											<th>Transaction No</th>
											<td>#<?php  echo $tnx_id?></td>
										  
											<th>Placed Order</th>
											<td><?php echo date("F d, Y ", strtotime($date)); ?></td>
										  </tr>
										  <tr>
											<th>Customer Name</th>
											<td><?php  echo $name?></td>
										  
											<th>Mobile</th>
											<td><?php  echo $mobile?></td>
										  </tr>
										  <tr>
											<th>Email</th>
											<td><?php  echo $email?></td>
										  
											<th>Billing Address</th>
											<td><?php  echo $address?></td>
										  </tr>
										  <tr>
											<th>Zip Code</th>
											<td><?php  echo $zip_code?></td>
										  
											<th>Payment By</th>
											<td><?php  echo $p_type?></td>
										  </tr>
										  
										  <?php
											if($p_type =='bkash'){?>
												<tr>
											<th>Account Number</th>
											<td><?php  echo $acc_nmbr?></td>
										  
											<th>Transact Number</th>
											<td><?php  echo $transaction_id?></td>
										  </tr>
											<?php }
										  ?>
										  <tr>
											<th>Payment Status</th>
											<td >
											<?php  
											if($pay_status==0){
												
											echo "Not Completed";
											}
											if($pay_status==1){
												echo "Completed";
											}
											?>
											</td>
										  
											<th>Delivery Status</th>
											<td>
											<?php  
											if($d_status==0){
												
											echo "Pending";
											}
											if($d_status==1){
												echo "Processing";
											}
											if($d_status==2){
												echo "Delivered";
											}
											if($d_status==3){
												echo "Canceled";
											}
											if($d_status==4){
												echo "Returned";
											}
											?>
											</td>
										  </tr>
							
										
							 </table><?php }
							}?>
							</table>
						<table class="table table-bordered">
						<form name="submit" method="post" enctype="multipart/form-data"> 
							<?php if($d_status != "2" or $d_status !="3"){
							if($pay_status=="0"){ ?>

  <tr>
    <th>Change Payment Status</th>
    <td>
   <select name="payment_status" class="form-control wd-450" required="true" >
     <option value="1" selected="true">Completed</option>
     <option value="0">Not Completed</option>
   </select></td>
  </tr>
  <tr>
							<?php } 
							else{?>
							<input type="hidden" class="form-control" name="payment_status"  value="1"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
							<?php }?>
 <?php if($d_status=="0") {?>
    <th color="Green">Change Delivery Status</th>
    <td>
   <select name="del_status" class="form-control wd-450">
	 <option value="1" selected="true">Processing</option>
     <option value="3">Cancel</option>
   </select>
   </td>
 <?php } 
 if($d_status=="1"){ ?>
 <th color="Green">Change Delivery Status</th>
	 <td>
   <select name="del_status" class="form-control  wd-450">
	 <option value="2" selected="true">Delivered</option>
     <option value="4">Return</option>
   </select>
   </td>
 <?php }
 if($d_status=="2"){ ?>
 <th color="Green">Change Delivery Status</th>
	 <td>
   <select name="del_status" class="form-control">
     <option value="4">Return</option>
   </select>
   </td>
 <?php }?>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-success pd-x-20">Submit</button></td>
  </tr>
  
							<?php } ?>
				</form>		</table>
								
							
   <table class="table">
   <thead>
      <tr style="color: skyblue;">
        <th>SL</th>
        <th>Product Image</th>
		<th>Product Name</th>
		<th>Product Quantity</th>
		<th>Cost</th>
      </tr>
    </thead>
    <tbody>
   

							<?php 
							$vid=$_GET['viewid'];
							$product_query = "select orders.*, products.product_title,products.product_image,products.product_price from orders INNER JOIN products on orders.product_id = products.product_id where orders.tnx_id = '$vid'";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
								$total_pay = 0;
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											?>
											<div class="table-responsive">		
								
								
							
							<?php 
							
											$sl++;
											
											$title   = $row['product_title'];
											$qty = $row['qty'];
											$image = $row['product_image'];
											$accnmbr = $row['acc_nmbr'];
											$total = $row['total'];
											$total_pay = $total_pay + $total;
											$state = $row['state'];
											?>

										  <tr>
											<td><b><?php echo $sl; ?></b></td>
											<td><img src="../images/<?php echo $image; ?>" style="height:80px;width:80px;" ></td>
											<td><?php echo $title; ?> </td>
											<td><?php echo $qty; ?> </td>
											<td><?php echo $total; ?> BDT </td>
										  </tr>
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>
  <table class="table">
   <tr> <th>Total Cost:</th> <td> <?php echo $total_pay; ?> BDT </td>  </tr>
   <tr> <th>Delivery Cost:</th> <td> 
   <?php 
   if($state = "Dhaka" and $total_pay<50000){
	   $charge = 50;
   echo "50 BDT"; 
   }
   else if($state = "Dhaka" and $total_pay<50000){
	   $charge = 100;
	   echo "100 BDT";
   }
   else {
	   $charge = 0;
	   echo "Free Shipping";
   }
   ?> 
   </td> </tr>
   <tr> <th>Total Payable Amount:</th> <td> <?php echo $total_pay + $charge; ?> BDT </td> </tr>
  </table>

  <br>  <br> <br>
		</div>
		</div>
		</div>
		</div>
		
		
            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
