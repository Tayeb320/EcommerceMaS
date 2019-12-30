 <?php include"header.php";?>
  <div class="col-lg-12">
                 <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Add Product </h2></center> <hr/>
  </div>
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    </li>
                    
                    
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
				
				
				<?php
				if( isset($_GET["cid"]) && isset($_GET["scid"]))
				{
					
					$cateid = $_GET["cid"];
					$scateid = $_GET["scid"];
					
				$product_query = "SELECT * FROM categories where cat_id = $cateid ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$cid   = $row['cat_id'];
											$ctittle   = $row['cat_title'];	
							}
							}
							
							
							
							$product_query = "SELECT * FROM sub_cat where id = $scateid ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$sscid   = $row['id'];
											$sctittle   = $row['name'];	
							}
							}
					
				?>
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Product info</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
										
										<form action="insertpro.php" method="post" enctype="multipart/form-data" >
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                                <div class="col-sm-10"><input type="text" name="name"class="form-control" placeholder="Product name"></div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="" class="form-control" placeholder="product cost" value="<?php echo $ctittle;?>" readonly>
													
													<input type="hidden" name="category" class="form-control" placeholder="product cost" value="<?php echo $cid;?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Sub Category</label>
                                                <div class="col-sm-10">
                                                  <input type="text" name="" class="form-control" placeholder="product cost" value="<?php echo $sctittle;?>" readonly>


													<input type="hidden" name="sub_category" class="form-control" placeholder="product cost" value="<?php echo $sscid;?>" readonly>
                                                </div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">product cost:</label>
                                                <div class="col-sm-10"><input type="number" name="cost" class="form-control" placeholder="product cost" min="1"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Price:</label>
                                                <div class="col-sm-10"><input type="number" name="prize" class="form-control" placeholder="enter price"min="1"></div>
                                            </div>
											
											 <div class="form-group row"><label class="col-sm-2 col-form-label">Discount:</label>
                                                <div class="col-sm-10"><input type="number" name="discount" class="form-control" placeholder="product discount" min="0"></div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">quantity:</label>
                                                <div class="col-sm-10"><input type="number" name="qty" class="form-control" placeholder="enter quantity" min="1"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <textarea type="text" name="desc"class="form-control" placeholder="write ..." value=""> </textarea>

                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" >
                                                        <option value="1">Available</option>
                                                        <option value="0">Unavailable</option>
														
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">image name:</label>
                                                <div class="col-sm-10"><input type="file" name="image" class="form-control" placeholder="image name"></div>
                                            </div>
											
											
											
											
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="submit1" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" ></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
                                    </div>
                                </div>
								
								
								
								
								
								
								
								
								
								
								
								
                            </div>
                    </div>
					
					
					
					<?php
					
					}
					else {
						
						echo "<script>window.location = 'product.php'; </script>";
						
					}
					?>
                </div>
            </div>

        </div>
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
