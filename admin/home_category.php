 <?php include"header.php";?>
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Home category settings </h2></center> <hr/>
                </div>
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                           
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
										
										<form action="" method="post"  >
                                            
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Home category 1</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="category1" >
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
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="about" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
										
							
                                        </fieldset>
										<?php
							
							if(isset($_POST["about"]))
								
								{
								$desc = $_POST["category1"];	
								
								
								
								  $sql = "UPDATE home_category SET category1 ='$desc'
							  WHERE id = 1 ";
										
										if(mysqli_query($con,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>Home category1  is updated</b>
													</div>";
											
											
											?>
										
									<script type="text/javascript">
									<!--
									function Redirect() {
									window.location="home_category.php";
									}
									document.write("<center>You will be redirected to main page in 2 sec.</center>");
									setTimeout('Redirect()', 2000);
									//-->
									</script>
									<?php
										}
								
								
								
								
								}

                                 ?>




									<fieldset>
										
										<form action="" method="post"  >
                                            
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Home category 2</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="category2" >
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
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="about2" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
										
							
                                        </fieldset>
										<?php
							
							if(isset($_POST["about2"]))
								
								{
								$desc = $_POST["category2"];	
								
								
								
								  $sql = "UPDATE home_category SET category2 ='$desc'
							  WHERE id = 1 ";
										
										if(mysqli_query($con,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>Home category2 is updated</b>
													</div>";
											
											
											?>
										
									<script type="text/javascript">
									<!--
									function Redirect() {
									window.location="home_category.php";
									}
									document.write("<center>You will be redirected to main page in 2 sec.</center>");
									setTimeout('Redirect()', 2000);
									//-->
									</script>
									<?php
										}
								
								
								
								
								}

                                 ?>
								 
								 
								 
								 
								 
									<fieldset>
										
										<form action="" method="post"  >
                                            
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Home category 3</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="category3" >
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
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="about3" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
										
							
                                        </fieldset>
										<?php
							
							if(isset($_POST["about3"]))
								
								{
								$desc = $_POST["category3"];	
								
								
								
								  $sql = "UPDATE home_category SET category3 ='$desc'
							  WHERE id = 1 ";
										
										if(mysqli_query($con,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>Home category3 is updated</b>
													</div>";
											
											
											?>
										
									<script type="text/javascript">
									<!--
									function Redirect() {
									window.location="home_category.php";
									}
									document.write("<center>You will be redirected to main page in 2 sec.</center>");
									setTimeout('Redirect()', 2000);
									//-->
									</script>
									<?php
										}
								
								
								
								
								}

                                 ?>

										
                                    </div>
                                </div>
								
								
								
								
								
								
								
													
								
								
								
								
								
								
								
                                
                            </div>
                    </div>
                </div>
            </div>

        </div>
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
