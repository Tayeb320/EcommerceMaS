<?php ob_start(); include"header.php";?>
<?php
	if(isset($_POST['admin_edit'])) {
		$fname = $con->real_escape_string($_POST['fname']);
		$lname = $con->real_escape_string($_POST['lname']);
		$email = $con->real_escape_string($_POST['email']);
		$mobile = $con->real_escape_string($_POST['mobile']);
		$address1 = $con->real_escape_string($_POST['address1']);
		$address2 = $con->real_escape_string($_POST['address2']);
		$password = $con->real_escape_string($_POST['password']);
		
		$sql = "UPDATE user_info SET first_name = '{$fname}', last_name = '{$lname}', ";
		$sql.= "email = '{$email}', mobile = '{$mobile}', address1 = '{$address1}', address2 ='{$address2}'";
		if(!empty($password)) $sql.= ", password = '".md5($password)."' " ;
		$sql.= "WHERE user_id = '{$_SESSION['adminId']}'";
		
		if($con->query($sql) == true) {
			header("Location: admin-profile.php");
		} else echo $con->error;
	}
?>
<?php
	$sql = "SELECT * FROM user_info WHERE user_id = '{$_SESSION['adminId']}' LIMIT 1";
	$admin_info = $con->query($sql)->fetch_array();
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		   <center> <h2 style="background-color:#6bc829;padding:25px;color:white;">Admin Profile</h2></center> <hr/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-3">
					<img src="image/admin.png" class="img-responsive"/>
				</div>
				<div class="col-md-9">
					<h3 style="text-transform: capitalize"><?= $admin_info['first_name'] ?></h3>
					<p style="margin-bottom: 0"><?= $admin_info['email'] ?></p>
					<p style="margin-bottom: 0"><?= $admin_info['mobile'] ?></p>
				</div>
			</div><hr/>
			<div class="row">
				<div class="col-md-6">
				<?php if(!isset($_GET['edit'])){ ?>
					<div class="well">
						<p><strong>First Name:</strong> <?= $admin_info['first_name'] ?></p>
						<p><strong>Last Name:</strong> <?= $admin_info['last_name'] ?></p>
						<p><strong>Email:</strong> <?= $admin_info['email'] ?></p>
						<p><strong>Mobile:</strong> <?= $admin_info['mobile'] ?></p>
						<p><strong>Address 1:</strong> <?= $admin_info['address1'] ?></p>
						<p><strong>Address 2:</strong> <?= $admin_info['address2'] ?></p>
						<p><a href="?edit=1" class="btn btn-info"><i class=""></i> Edit Info</a></p>
					</div>
				<?php } else { ?>
					<div class="well">
						<form action="" method="post">
							<input type="hidden" name="admin_edit" />
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="fname" value="<?= $admin_info['first_name'] ?>" class="form-control" required />
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="lname" value="<?= $admin_info['last_name'] ?>" class="form-control" required />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" value="<?= $admin_info['email'] ?>" class="form-control" required />
							</div>
							<div class="form-group">
								<label>Mobile</label>
								<input type="text" name="mobile" value="<?= $admin_info['mobile'] ?>" class="form-control" required/>
							</div>
							<div class="form-group">
								<label>Address 1</label>
								<textarea name="address1" class="form-control" required><?= $admin_info['address1'] ?></textarea>
							</div>
							<div class="form-group">
								<label>Address 2</label>
								<textarea name="address2" class="form-control" required><?= $admin_info['address2'] ?></textarea>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" />
							</div>
							<div class="form-group">
								<input type="submit" value="Edit" class="btn btn-success" />
							</div>
						</form>
					</div>
				<?php } ?>
				</div>
				<div class="col-md-6">
					<h4>Admin login session: </h4>
					<p><strong>Browser Info</strong><br> <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
					<p><strong>Server Info</strong><br> <?= $_SERVER['SERVER_SIGNATURE'] ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include"footer.php";?>