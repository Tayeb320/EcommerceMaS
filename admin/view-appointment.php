<?php
session_start();
error_reporting(0);
include('db.php');
if ($_SESSION['type'] == 0) {
  header('location:logout.php');
  } else if($_SESSION['type'] == 1){

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $beautician=$_POST['beauty_name'];
      $status=$_POST['status'];
     
    
     
   $query=mysqli_query($con, "update  appointment set beautician='$beautician',Status='$status' where id='$cid'");
    if ($query) {
    $msg="Status and Beautician has been selected.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

if(isset($_POST['submit1']))
  {
    
    $cid=$_GET['viewid'];
      $beautician=$_POST['beauty_name'];
      
     
   $query=mysqli_query($con, "update  appointment set beautician='$beautician' where id='$cid'");
    if ($query) {
    $msg="Beautician has been changed.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>PMS || View Appointment</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">View Appointment</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<h4>View Appointment:</h4>
						<?php
$cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from appointment where id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						<table class="table table-bordered">
							<tr>
    <th>Appointment Number</th>
    <td><?php  echo $row['invid'];?></td>
  </tr>
  <tr>
<th>Name</th>
    <td><?php  echo $row['name'];?></td>
  </tr>

<tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>
   <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['mobile'];?></td>
  </tr>
   <tr>
    <th>Appointment Date</th>
    <td><?php  echo $row['date'];?></td>
  </tr>
 
<tr>
    <th>Appointment Time</th>
    <td><?php  echo $row['time']?></td>
  </tr>
  
  <tr>
    <th>Services</th>
    <td><?php  echo $row['service'];?></td>
  </tr>

<tr>
    <th>Status</th>
    <td> <?php  
	if($row['status']==0)
	{
		echo" <a class='btn btn-default'>Pending<a/>";
	}
	if($row['status']==1)
	{
		echo"<a class='btn btn-success'>Accepted<a/>";
	}
	if($row['status']==2)
	{
		echo" <a class='btn btn-danger'>Rejected</a>";
	}
	if($row['status']==3)
	{
		echo" <a class='btn btn-primary'>Completed</a>";
	}
	if($row['status']==4)
	{
		echo" <a class='btn btn-danger'>Cancelled</a>";
	}

     ;?></td>
  </tr>
  <tr>
  <th>Selected Beautician</th>
  <td>
  <?php 
  if ($row['beautician'] == "")
  {
	  echo "Not Selected";
  }
  else {
	  $beauty_id = $row['beautician'];
	  $beauty=mysqli_query($con,"select name from beautician where beauty_id='$beauty_id'");
	$cnt=1;
	while ($rowBeauty=mysqli_fetch_array($beauty)) {
		echo $rowBeauty['name'];
		
	  
  }
  
  }
  

  ?>
  </td>
						</table>
						<table class="table table-bordered">
							<?php if($row['status']=="0"){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 

    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="1" selected="true">Accepted</option>
     <option value="2">Rejected</option>
   </select></td>
  </tr>
  <tr>
    <th>Select Beautician</th>
    <td>
   <select name="beauty_name" class="form-control wd-450">
     <option value="">Select</option>
			<?php $query=mysqli_query($con,"select * from beautician");
				while($row=mysqli_fetch_array($query))
					{
					?>
						<option value="<?php echo $row['beauty_id'];?>"><?php echo $row['name'];?></option>
						<?php } ?> 
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-az-primary pd-x-20">Submit</button></td>
  </tr>
  </form>
<?php } else if ($row['status']=="1") { ?>
						</table>
						<table class="table table-bordered">
<form name="submit1" method="post" enctype="multipart/form-data"> 
<tr>
<th>Change Beautician</th>
<td>
	<select name="beauty_name" class="form-control wd-450" >
     <option value="">Select</option>
			<?php $query=mysqli_query($con,"select * from beautician");
				while($row=mysqli_fetch_array($query))
					{
					?>
						<option value="<?php echo $row['beauty_id'];?>"><?php echo $row['name'];?></option>
						<?php } ?> 
   </select>
</td>
</tr>
<tr align="center">
    <td colspan="2"><button type="submit" name="submit1" class="btn btn-az-primary pd-x-20">Submit</button></td>
  </tr>
</form>

						</table>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
<?php }  ?>