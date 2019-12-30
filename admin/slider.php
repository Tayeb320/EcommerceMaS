 <?php include"header.php";?>
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Update Slider </h2></center> <hr/>
                </div>
 
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2 style="color:#0B0B3B;text-align:center;">Slider Section</h2>
               
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            
							
							
							
							
							<div class="panel-body">

                                        <fieldset>
										
										<form action="" method="post" enctype="multipart/form-data" >
                                            
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label">Slider1:</label>
                                                <div class="col-sm-10"><input type="file" name="image"class="form-control" placeholder="Product name"></div>
                                            </div>
											
                                          
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="slider1" class="form-control btn btn-success" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
										
										
										
										<fieldset>
										
										<form action="" method="post" enctype="multipart/form-data" >
                                            
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label">Slider2:</label>
                                                <div class="col-sm-10"><input type="file" name="image"class="form-control" placeholder="Product name"></div>
                                            </div>
											
                                          
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="slider2" class="form-control btn btn-success" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
										<fieldset>
										
										<form action="" method="post" enctype="multipart/form-data" >
                                            
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label">Slider3:</label>
                                                <div class="col-sm-10"><input type="file" name="image"class="form-control" placeholder="Product name"></div>
                                            </div>
											
                                          
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="slider3" class="form-control btn btn-success" value="update"></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
										
										
										
									<?php 
										if(isset($_POST["slider1"]))
											
											{
												
												 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/slider/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }				
	  
	  
										$sql = "UPDATE slider SET slider1 ='$file_name' WHERE id = 1 ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>slider is updated</b>
				</div>";
		
		
		?>
	
<script type="text/javascript">
<!--
function Redirect() {
window.location="slider.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
<?php
	}
	  
											}
											
											
											
											
											if(isset($_POST["slider2"]))
											
											{
												
												 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/slider/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }				
	  
	  
										$sql = "UPDATE slider SET slider2 ='$file_name' WHERE id = 1 ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>slider is updated</b>
				</div>";
		
		
		?>
	
<script type="text/javascript">
<!--
function Redirect() {
window.location="slider.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
<?php
	}
	  
											}
											
										



											if(isset($_POST["slider3"]))
											
											{
												
												 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/slider/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }				
	  
	  
										$sql = "UPDATE slider SET slider3 ='$file_name' WHERE id = 1 ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>slider is updated</b>
				</div>";
		
		
		?>
	
<script type="text/javascript">
<!--
function Redirect() {
window.location="slider.php";
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
       
