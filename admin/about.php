 <?php include"header.php";?>
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> About Us </h2></center> <hr/>
                </div>
 
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		  
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a> <a href="about.php"> / About us</a>
                    </li>
                    
                    
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> About us</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
										<?php
										
										$product_query = "SELECT * from about  ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											
											$id   = $row['id'];
											$desc   = $row['description'];
										
										?>
										<form action="" method="post"  >
                                            
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <textarea type="text" name="description"class="form-control" placeholder="write ..." value=""> <?php echo $desc;?> </textarea>

                                                    </div>
                                                </div>
                                            </div>
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="about" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
										
							<?php  }  } ?>
                                        </fieldset>
										
										
                                    </div>
                                </div>
								
								
								
								
								
								
								
							<?php
							
							if(isset($_POST["about"]))
								
								{
								$desc = $_POST["description"];	
								
								
								
								  $sql = "UPDATE about SET description ='$desc'
							  WHERE id = $id ";
										
										if(mysqli_query($con,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>About us is updated</b>
													</div>";
											
											
											?>
										
									<script type="text/javascript">
									<!--
									function Redirect() {
									window.location="about.php";
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
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
