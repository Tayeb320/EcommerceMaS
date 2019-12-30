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
 
 <div >
                   <center> <h2 style="background-color:#0B0B3B;padding:25px;color:white;"> Products List </h2></center> <hr/>
                </div>
 <div id="page-wrapper">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>Product image</th>
        <th>product name</th>
		<th>category</th>
		<th>quantity </th>
		<th>cost</th>
		
		<th>discount</th>
		<th>prize</th>
		
		
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT products.product_id,products.product_cat,products.product_title,products.product_price,products.product_cost,products.product_desc,products.quantity,products.status,products.product_image,products.discount,products.sub_cateid,categories.cat_id,categories.cat_title from products INNER JOIN categories on products.product_cat = categories.cat_id ORDER BY product_id DESC  ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['product_id'];
											$product_cat   = $row['product_cat'];
											$product_title = $row['product_title'];
											$product_price = $row['product_price'];
											$product_image = $row['product_image'];
											$quantity = $row['quantity'];
											$status = $row['status'];
											$catname = $row['cat_title'];
											$discount = $row['discount'];
											$cost = $row['product_cost'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><img src="../images/<?php echo $product_image; ?>" style="height:60px;width:100px;"></td>
											<td><?php echo $product_title; ?></td>
											<td>
										
										    <?php echo $catname; ?>
										
											</td>
											<td><?php echo $quantity; ?></td>
											<td><?php echo $cost; ?></td>
											
											<td><?php echo $discount; ?> %</td>
											<td>
											
											<?php 
											
											$disc = ($discount * $product_price) / 100;
											$price = $product_price - $disc;
											
											if($discount > 0)
											{ ?>
												<strike style="color:red;"><?php echo $product_price ;?> </strike> &nbsp <b style="color:green;"> <?php echo $price ;?> Tk </b>
										   <?php }
										
											 ?>
											 
											<?php 
											 
											 if($discount == 0)
											{ ?>
												<b style="color:green;"> <?php echo $price ;?> Tk </b>
										   <?php }
										
											 ?>
											
											
											
											</td>
											<td>
										
											<?php 
											if($quantity >0)
											{
												echo"<a class='btn btn-success'> Available</a>";
											}
											else
											{
												echo"<a class='btn btn-warning'> Unavailable</a>";
											}
											
											
											
											?></td>
											
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="delete" class="btn btn-danger" value="Delete">
											</form>
											
											<a href="edit.php?peid=<?php echo $id;?>"class="btn btn-info"> Edit   </a>
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
       
