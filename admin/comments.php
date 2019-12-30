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
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Comments List </h2></center> <hr/>
                </div>
 <div id="page-wrapper" style="overflow:scroll;">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
							<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
       
        <th>Customer name</th>
		<th>Product id</th>
		<th>Product Name</th>
		<th>comments</th>
		
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT comments.*, products.product_title from comments inner join products on comments.prod_id = products.product_id";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['id'];
											$name   = $row['name'];
											$comments = $row['comments'];
											$proid = $row['prod_id'];
											$pro_name = $row['product_title'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $proid; ?></td>
											<td><?php echo $pro_name; ?></td>
											<td><?php echo $comments; ?></td>
											

											
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="codelete" class="btn btn-danger" value="Delete">
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
       
