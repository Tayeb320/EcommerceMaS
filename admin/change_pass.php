 <?php
session_start();
error_reporting(0);
include('db.php');

if(isset($_POST['submit']))
{
$adminid=$_SESSION['user_Id'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select admin_id from admin where admin_id='$adminid' and   password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update admin set password='$newpassword' where admin_id='$adminid'");
$msg= "Your password successfully changed"; 
} else {

$msg="Your current password is wrong";
}



}

  
?>
 <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
 <?php include"header.php";?>
  <div >
                   <center> <h2 style="background-color:#0B0B3B;padding:25px;color:white;"> Update Password </h2></center> <hr/>
                </div>
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a><a href="change_pass.php"> / Settings</a>
                    </li>
                    
                    
                </ol>
            </div>
        </div>

            
                   <div class="container">         
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Reset Your Password :</h4>
						</div>
						<div class="form-body">
							<form method="post" name="changepassword" onsubmit="return checkpass();" action="">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
$adminid=$_SESSION['user_Id'];

$ret=mysqli_query($con,"select * from admin where admin_id=$adminid");
if(mysqli_num_rows($ret) > 0){
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div class="form-group"> 
							 <label for="exampleInputEmail1">Current Password</label> 
							 <input type="password" name="currentpassword" class="form-control" required= "true" value=""> 
							 </div> 
							 <div class="form-group"> 
							 <label for="exampleInputPassword1">New Password</label> 
							 <input type="password" name="newpassword" class="form-control" value="" required="true"> 
							 </div>
							 <div class="form-group"> 
							 <label for="exampleInputPassword1">Confirm Password</label> 
							 <input type="password" name="confirmpassword" class="form-control" value="" required="true"> 
							 </div>
							  
							  <button type="submit" name="submit" class="btn btn-default">Change</button> </form> 
						</div>
<?php }} ?>
										
								
								
								
                                
                            </div>
							</div>
                    </div>
                </div>
            </div>

        </div>
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
