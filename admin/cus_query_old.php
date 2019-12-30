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
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Read Messages </h2></center> <hr/>
                </div>
 <div id="page-wrapper" style="overflow:scroll;">
            <div class="row">
               
                <!-- /.col-lg-12 -->
            </div>
								
								
								
							<table class="table">
							<?php
							if (isset($_POST["delete"])) {
								
							$id= $_POST['id'];

							$sql = "DELETE FROM contact WHERE id = '$id' ";
							if (mysqli_query($con,$sql)) {
							echo "
							<center> <div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Message is deleted Successfully..!</b>
							</div></center>
							";
							}}
							if (isset($_POST["unread"])) {
							$id= $_POST['id'];

							$sql = "UPDATE `contact` SET `status`=0 WHERE id = '$id' ";
							if (mysqli_query($con,$sql)) {
							echo "
							<center> <div class='alert alert-success'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Message marked as unread..!</b>
							</div></center>
							";
							}}
?>
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
       
        <th>Customer name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Action</th>
		
		
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM contact where status = 1 ORDER BY id DESC";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['id'];
											$name   = $row['name'];
											$email = $row['email'];
											$mobile = $row['mobile'];
											$message = $row['message'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $message; ?></td>
											<td>
											<form action="cus_query_old.php" method="post">
											<input type="hidden" name="id" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="delete" class="btn btn-danger" value="Delete">
											<input type="submit" name="unread" class="btn btn-success" value="Mark as Unread">
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
       
