<?php 


if (isset($_GET["peid"])) {

     $id = $_GET["peid"];
       include"header.php";
	   
	   ?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:25px;color:white;"> Products List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
							<table class="table">
    
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM products where product_id = $id ";
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
											$cost = $row['product_cost'];
											$description = $row['product_desc'];
											$discount = $row['discount'];
											?>
							
							
							
							<form action="" method="post" enctype="multipart/form-data">
										
											<tr> <td> serial </td> <td><?php echo $sl; ?></td></tr>
											<tr><td> product image </td><td><img src="../images/<?php echo $product_image; ?>" style="height:60px;width:100px;">
											<input type="file" name="image" value="">
											<input type="hidden" name="images" value="<?php echo $product_image; ?>">
											</td></tr>
											
											
											
											<tr><td> Gallary image </td><td>
											<input type="file" name="file_img[]" multiple />
											
											</td></tr>
											
											<tr><td> product Tittle </td><td><input type="text" name="tittle" value="<?php echo $product_title; ?>"></td></tr>
											
											
											<tr><td> product subcategory </td><td>
											<select class="form-control" name="subcategory" >
													<?php
													$product_query = "SELECT * FROM sub_cat ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$subcat_id    = $row['id'];
			$subcat_name   = $row['name'];
             $maincatid   = $row['main_cate']; 			
			?>
                                                        <option value="<?php echo $subcat_id; ?>"><?php echo $subcat_name; ?></option>
                                                       
													   <?php
		}
		
	}
													   ?>
                                                    </select>
											
											</td></tr>
											<tr><td> product cost </td><td><input type="number" name="cost" value="<?php echo $cost; ?>" min="1"></td></tr>
											
											<tr><td> product price </td><td><input type="number" name="price" value="<?php echo $product_price; ?>" min="1"></td></tr>
											
											<tr><td> product discount </td><td><input type="number" name="discount" value="<?php echo $discount; ?>" min="0"></td></tr>
										
											<tr><td> product quantity </td><td><input type="number" name="qty" value="<?php echo $quantity; ?>" min="1"></td></tr>
											<tr><td> product Description </td><td><textarea  name="desc" value=""> <?php echo $description; ?> </textarea></td></tr>
											
											<tr><td> product status </td><td>
											
											</td></tr>
											<tr><td> <div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" >
                                                        <option value="1">Availabe</option>
                                                        <option value="0">Unavailabe</option>
														
                                                    </select>
                                                </div>
                                            </div> </td>
											
											<td>
											
											
											
											
											
											
											
											
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="save" class="btn btn-success" value="save">
											
											
											
											</td>
										  </tr>
										</form>  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

  
  
                              <?php
							  
						if (isset($_POST["save"])) {

									$pid = $_POST["prodid"];	
									$title = $_POST["tittle"];
									$image = $_POST["images"];
									$image1 = $_FILES['image']['name'];
									 $cat = $maincatid;	
									  $subcat = $_POST["subcategory"];	
									  $price = $_POST["price"];	
									   $qty = $_POST["qty"];	 
									   $sts = $_POST["status"];	
									   $co = $_POST["cost"];
										$discount = $_POST["discount"];	
											$description = $_POST["desc"];											
                              
							  
							  if($qty <=0)
								  
								  {
									 echo "<div class='alert alert-danger'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>Invalid product ammount</b>
													</div>";
								  }
								  
								  
								else
									
									{
										
								

                         if($image1 != "")
							 
							 {

							 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be exactly 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }						
                   
				   
				   $image = $file_name;
							 }
							 
							 if($image1 == "")
								 
							 
							 {
								 $image = $_POST["images"];
							 }


								
							  
							  $sql = "UPDATE products SET product_image ='$image',product_title ='$title',product_cat ='$cat',product_price ='$price',product_cost ='$co',quantity ='$qty',status ='$sts',discount ='$discount',product_desc ='$description',status ='$sts',sub_cateid ='$subcat'
							  WHERE product_id = $pid ";
										
										if(mysqli_query($con,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>Product is updated</b>
													</div>";
											
											
											?>
										
								
									<?php
										}
									




							for($i = 0; $i < count($_FILES['file_img']['name']); $i++)
	{
		$filetmp = $_FILES["file_img"]["tmp_name"][$i];
		$filename = $_FILES["file_img"]["name"][$i];
		$filetype = $_FILES["file_img"]["type"][$i];
		
	
	
	
	
							 $errors= array();
   
      $file_ext=strtolower(end(explode('.',$_FILES['file_img']['name'][$i])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
     
      
      if(empty($errors)==true){
         move_uploaded_file($filetmp,"../images/gallary/".$filename);
         echo "";
      }else{
         print_r($errors);
      }
											
											$sql = "INSERT INTO `gallary_image`
													(`image_name`,`product_id`) 
													VALUES ('$filename','$pid')";
													if (mysqli_query($con,$sql)) {
														echo "
															
														";
														
														
														?>
														
							
														
														
														<?php
														
													}
											
											}



									
										
						}   }
						
						
						

							  
							  ?>
            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";
       

	
	
}




?>