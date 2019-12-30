 <?php include"header.php";?>
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Add new admin </h2></center> <hr/>
                </div>
 
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a> <a href="add_admin.php"> / Add Admin</a>
                    </li>
                    
                    
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Add new admin</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
										
										<form action="" method="post"  >
                                            
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Username:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <input type="text" name="username"class="form-control" placeholder="Enter Username" value="" required > 

                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Email:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <input type="email" name="email"class="form-control" placeholder="Enter Email" value="" required > 

                                                    </div>
                                                </div>
                                            </div>
											
											 <div class="form-group row"><label class="col-sm-2 col-form-label">Password:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <input type="password" name="pass"class="form-control" placeholder="Enter Password" value="" required > 

                                                    </div>
                                                </div>
                                            </div>
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="about" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
										
						
                                        </fieldset>
										
										
                                    </div>
                                </div>
								
								
								
								
								
								
								
							<?php
							$uid = $_SESSION['userId'];
							if(isset($_POST["about"]))
								
								{
								$username = $_POST["username"];	
								$email = $_POST["email"];	
								$pass = $_POST["pass"];	
								$pass = md5($pass);
								
								$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
								if(!preg_match($emailValidation,$email)){
									echo "
										<div class='alert alert-warning'>
											<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											<b>this $email is not valid..!</b>
										</div>
									";
									exit();
								}
								//existing email address in our database
								$sql = "SELECT admin_id FROM admin WHERE email = '$email' LIMIT 1" ;
								$check_query = mysqli_query($con,$sql);
								$count_email = mysqli_num_rows($check_query);
								if($count_email > 0){
									echo "
										<div class='alert alert-danger'>
											<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											<b>Email Address is already available Try Another email address</b>
										</div>
									";
									
								}
								
								//existing username in our database
								$sql = "SELECT admin_id FROM admin WHERE username = '$username' LIMIT 1" ;
								$check_query = mysqli_query($con,$sql);
								$count_username = mysqli_num_rows($check_query);
								if($count_username > 0){
									echo "
										<div class='alert alert-danger'>
											<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											<b>Username is already available Try Another Username</b>
										</div>
									";
									exit();
								}
								
								else if ($count_username == 0 and $count_email ==0){
								
								
								
								
								$sql = "INSERT INTO `admin`
													(`username`,`password`,`type`,`email`) 
													VALUES ('$username','$pass','1','$email')";
										
										if(mysqli_query($con,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>New Admin is added</b>
													</div>";
											
											
											?>
										
									<script type="text/javascript">
									<!--
									function Redirect() {
									window.location="add_admin.php";
									}
									document.write("<center>You will be redirected to main page in 2 sec.</center>");
									setTimeout('Redirect()', 2000);
									//-->
									</script>
									<?php
										}
								
								
								
								
								}}

                                 ?>							
								
								
								
								
								
								
								
                                
                            </div>
                    </div>
                </div>
            </div>

        </div>
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
