 <?php include"header.php";?>
   <div class="col-lg-12">
                 <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Add category </h2></center> <hr/>
  </div>
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            
							
							
							
							
							<div class="panel-body">

                                        <fieldset>
										
										<form action="insertpro.php" method="post" enctype="multipart/form-data" >
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Category Name:</label>
                                                <div class="col-sm-10"><input type="text" name="catname"class="form-control" placeholder="Category Name"></div>
                                            </div>
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label">Category image:</label>
                                                <div class="col-sm-10"><input type="file" name="image"class="form-control" placeholder="Category image"></div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" >
                                                        <option value="1">Available</option>
                                                        <option value="0">Unavailable</option>
														
                                                    </select>
                                                </div>
                                            </div>
                                          
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="cate" class="form-control btn btn-success" placeholder="image name"></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
                                    </div>
                    </div>
                </div>
            </div>

        </div>
                        <!-- /.panel-body -->
						
						
						<h2 style="color:#0B0B3B;text-align:center;"> Add subcategory </h2><hr/>
						
						
						 <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            
							
							
							
							
							<div class="panel-body">

                                        <fieldset>
										
										<form action="insertpro.php" method="post" >
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">sub category Name:</label>
                                                <div class="col-sm-10"><input type="text" name="subcatname" class="form-control" placeholder="Sub category Name"></div>
                                            </div>
											
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label">main category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="main" >
													<?php
													$product_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$cat_id    = $row['cat_id'];
			$cat_name   = $row['cat_title']; 
			?>
                                                        <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                                                       
													   <?php
		}
		
	}
													   ?>
                                                    </select>
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
                                          
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="subcate" class="form-control btn btn-success" placeholder="image name"></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
                                    </div>
                    </div>
                </div>
            </div>

        </div>
						
						
						
						 <?php include"footer.php";?>
       
