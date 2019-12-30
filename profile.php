<style>
table, td, tr, th {
  border-collapse: collapse;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #54aff6;
  color: white;
}
</style>
<?php 
	ob_start(); 
	include "db.php";
	include"header.php";
	if (!isset($_SESSION["uid"])) {
		header("location:login_form.php");
	}
	$id = $_SESSION["uid"];
	if(isset($_POST['user_edit'])) {
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
		$sql.= "WHERE user_id = '{$id}'";
		
		if($con->query($sql) == true) {
			header("Location: profile.php");
		} else echo $con->error;
	}
	;?>
<?php
	$user_query = "SELECT * FROM user_info where user_id = $id ";
	$run_query = mysqli_query($con,$user_query);
	$row = mysqli_fetch_array($run_query);
?>
<div class="container">
	<div class="row">
	<?php 
					   
					   if(isset($_GET["del"]))
						   
						   {
							   
							  $tnx_id = $_GET["del"];

								$sql = "UPDATE orders set delivery_status = 3 WHERE tnx_id = '$tnx_id' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center></br></br> </br>  <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Order has benn Canceled Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="profile.php?vorders";
}

setTimeout('Redirect()', 1000);
//-->
</script>		
														
														
														<?php
														exit();
													}
							   
							   
							   
							   
						   }
					   
					   ?>
		<div class="col-md-12">
			<h3 class="text-center page-header">Hi <?php echo $_SESSION["name"]; ?>, Welcome to your profile </h3>
		</div>
		<div class="col-md-12"><u><strong>Your profile details</strong></u></div>
	</div>
	

<?php if(!isset($_GET['vorders'])) { ?>
	<div class="row">
		<div class="col-md-12">
			<div style="margin: 2em 0">
			<?php if(!isset($_GET['edit'])){ ?>
				<table class="table">
					<tbody>
						<tr><td><strong>First Name</strong></td><td><?= $row['first_name'] ?></td></tr>
						<tr><td><strong>Last Name</strong></td><td><?= $row['last_name'] ?></td></tr>
						<tr><td><strong>Email</strong></td><td><?= $row['email'] ?></td></tr>
						<tr><td><strong>Mobile</strong></td><td><?= $row['mobile'] ?></td></tr>
						<tr><td><strong>Address Line 1</strong></td><td><?= $row['address1'] ?></td></tr>
						<tr><td><strong>Address Line 2</strong></td><td><?= $row['address2'] ?></td></tr>
					</tbody>
				</table>
				<p>
					<a href="?vorders" class="btn btn-info">View order history</a>
					<a href="?edit" class="btn btn-success">Edit Profile</a>
				</p>
			<?php } else { ?>
				<form action="" method="post">
					<input type="hidden" name="user_edit" />
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname" value="<?= $row['first_name'] ?>" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" value="<?= $row['last_name'] ?>" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="<?= $row['email'] ?>" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" value="<?= $row['mobile'] ?>" class="form-control" required/>
					</div>
					<div class="form-group">
						<label>Address 1</label>
						<textarea name="address1" class="form-control" required><?= $row['address1'] ?></textarea>
					</div>
					<div class="form-group">
						<label>Address 2</label>
						<textarea name="address2" class="form-control" required><?= $row['address2'] ?></textarea>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" />
					</div>
					<div class="form-group">
						<input type="submit" value="Edit" class="btn btn-success" />
					</div>
				</form>
			<?php } ?>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="row">
		<h2><u>Your Orders</u></h2>
		<table class="table">
			<thead>
				<tr>
					<th>SL</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Order Issued</th>
					<th>Transaction Id</th>
					<th>No. of Products</th>
					<th>Total Cost</th>
					<th>Payment type</th>
					<th>Address</th>
					<th style="color:white;">Status</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$product_query = "SELECT * ,sum(total) as totalprice, sum(qty) as totalQuantity FROM orders where user_id = $id group by tnx_id";
			$run_query = mysqli_query($con,$product_query);
			if(mysqli_num_rows($run_query) > 0){
				$sl = 0;
				while($row = mysqli_fetch_array($run_query)){
					$sl++;
					$tnx_id   = $row['tnx_id'];
					$name   = $row['full_name'];
					$email = $row['email'];
					$payment_type = $row['payment_type'];
					$address = $row['address'];
					$date =$row['date'];
					$status = $row['delivery_status'];
					$total_cost = $row['totalprice'];
					$total_qty = $row['totalQuantity'];
			?>
				<tr>
					<td><b><?php echo $sl; ?></b></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo date("F d, Y ", strtotime($date)) ?></td>
					<td><?php echo $tnx_id; ?></td>
					<td><?php echo $total_qty; ?></td>
					<td><?php echo $total_cost; ?></td>
					<td><?php echo $payment_type; ?> </td>
					<td><?php echo $address;?></td>
					<td>
					<?php 
						if($status==0)
											{
												echo" <font color='white'><a class='btn btn-primary'>Pending<a/></font>";
												
												if($status==0)
												{?>
													<a class='btn btn-danger' href="profile.php?del=<?= $row['tnx_id']?> " class="btn btn-primary"> Cancel</a>
												<?php } 
											}
						if($status== 1) {
							echo"<a class='btn btn-warning'>Processing</a>";
						}
						if($status== 2) {
							echo"<a class='btn btn-success'>Delivered</a>";
						}
						if($status== 3) {
							echo"<a class='btn btn-danger'>Canceled</a>";
						}
						if($status== 4) {
							echo"<a class='btn btn-danger'>Returned</a>";
						}
						
					?>
						<br><a class='btn btn-primary' href="customer_invoice.php?id=<?= $row['tnx_id'] ?>">View Invoice</a>
					</td>
				</tr>
			<?php }} ?>
			</tbody>
		</table>
	</div>
<?php } ?>
</div>

<?php include"footer.php";?>