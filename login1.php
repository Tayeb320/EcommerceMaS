<?php 
require_once 'admin/db.php';
include 'header.php';





$errors = array();

if($_POST) {		

	$username = $_POST['username'];
	$password = md5($_POST['password']);


	if(empty($username) || empty($password)) {
		if($username == "") {
			$errors[] = "Username is required";
		} 

		if($password == "") {
			$errors[] = "Password is required";
		}
	} else {
		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$result = $con->query($sql);

		if($result->num_rows == 1) {
			$password = $password;
			// exists
			$mainSql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
			$mainResult = $con->query($mainSql);

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$user_id = $value['type'];
				$user_aid = $value['admin_id'];
				$name = $value['username'];

				// set session
				
				
				$_SESSION['userId'] = $user_id;
				$_SESSION['user_Id'] = $user_aid;
				$_SESSION['name'] = $name;
				
				
				
				
	
	if(isset($_SESSION['userId']))
					
					{
						  ?>

                                            <script type="text/javascript">
                                            	window.location.href='admin/index.php';
                                            </script>


                                            <?php	
					}
					
	
	
	


				
			} else{
				
				$errors[] = "Incorrect username/password combination";
			} // /else
		} else {		
			$errors[] = "Username doesnot exists";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST
?>

<!DOCTYPE html>
<html>
<head>
	<title>Colour Spray Ltd.</title>

	 <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	 <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
					<div class="card">
						  <div class="cardHeader">
							
							<h3> Colour Spray Admin Login</h3>
						  </div>

						 
					</div> 
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> &nbsp Please Sign in</h3>
					</div>
					<div class="panel-body">

						<div class="messages">
							<?php if($errors) {
								foreach ($errors as $key => $value) {
									echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$value.'</div>';										
									}
								} ?>
						</div>

						<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
							<fieldset>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Username</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
								</div>							
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									  <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign in</button>
									</div>
								</div>
							
							</fieldset>
						</form>
						
						
					</div>
					<!-- panel-body -->
					
				</div>
				<!-- /panel -->
				<div class="panel panel-success">
						<div class="panel-heading">
						<center>Copyright@Colour Spray Ltd.<br/>
	  </center>
						</div>
					</div>
					
				
				
					
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	
</body>
</html>







	