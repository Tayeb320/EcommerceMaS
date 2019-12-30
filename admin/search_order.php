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
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Order Search </h2></center> <hr/>
                </div>
 
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home <a> <a href="search_order.php">/ Search Order</a>
                    </li>
                    
                    
                </ol>
            
						<h3>Search Order</h3><br><br>
	<div class="form-body">
							<form method="post" name="search" action="">
								

  
							 <div class="form-group"> <label for="exampleInputEmail1">Search by Transaction Number/ Name / Contact No</label> 
							 <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
						
							<br>
							  <button type="submit" name="search" class="btn btn-primary btn-sm">Search</button> </form> 
						</div>

<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 

						<table class="table table-responsive">
						<thead>
      <tr style="color: skyblue;">
        <th>SL</th>
        <th>Customer name</th>
		<th>Mobile</th>
		<th>Product Quantity</th>
		<th>Total Cost</th>
		<th>Transaction Id</th>
		<th>Payment Status</th>
		<th>Delivery Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT *,sum(total) as totalprice, sum(qty) as totalQuantity from orders where tnx_id like '%$sdata%' || full_name like '%$sdata%' || mobile like '%$sdata%' group by tnx_id ORDER BY order_id DESC";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$user_id = $row['user_id'];
											$user_name;
											$mobile;
											
											$query=mysqli_query($con,"select * from user_info where user_id = $user_id");
											while($row1=mysqli_fetch_array($query))
												{
													$user_name = $row1['first_name'];
													$mobile = $row1['mobile'];
													
												 }
											
											$sl++;
											$orderid   = $row['order_id'];
											$name   = $user_name;
											$qty = $row['totalQuantity'];
											$mobile = $mobile;
											$total_cost = $row['totalprice'];
											$tnx_id = $row['tnx_id'];
											$pay_status = $row['p_status'];
											$d_status = $row['delivery_status'];
											
											?>
							
							
							
							
										  <tr>
											<td><b><?php echo $sl; ?></b></td>
										
											<td><?php echo $name; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $qty; ?></td>
											<td><?php echo $total_cost; ?></td>
											<td><?php echo $tnx_id; ?></td>
											<td>
											
											<?php  
											if($pay_status==0){
												
											echo "Not Completed";
											}
											if($pay_status==1){
												echo "Completed";
											}
											?>
										
											</td>
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
											?>
											</td>
											
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $tnx_id;?>">
											<input type="submit" name="orderdelete" class="btn btn-danger" value="Delete">
											<a class="dropdown-item btn btn-primary" href="order_invoice.php?viewid=<?php echo $tnx_id;?>"> View Invoice</a>
				
								 
											</form>

                      

											
											</td>
										  </tr>
							
											 <?php 
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?></tbody> </table> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
