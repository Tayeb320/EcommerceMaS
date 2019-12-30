<?php
include"db.php";
 session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
  include"header.php";
if (isset($_POST["submit"])) {

	# code...
	
		
		$cm_user_id = $_SESSION["uid"];
		
		
		
		
		$fullname = $_POST["fullname"];;
		$email = $_POST["email"];
		$address = $_POST["adr"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zip = $_POST["zip"];
		$mobile = $_POST["mobile"];
		$paymenttype = $_POST["payment_type"];
		$total = $_POST["total"];
	
        $acc_nmbr = $_POST["acc_nmbr"];
		if($paymenttype=="bkash"){
			
		$transaction_nmbr = $_POST["tnsaction_id"];
		}
		else{
			$transaction_nmbr= "Cash On";
		}

		include_once("db.php");
		$sql = "SELECT cart.p_id,cart.qty,products.product_id,products.product_price,products.discount FROM cart INNER JOIN products on cart.p_id = products.product_id WHERE cart.user_id = '$cm_user_id'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			$qty = [];
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = (int)$row["p_id"];
			$product_price[] = (int)$row["product_price"];
			$discount[] = (int)$row["discount"];
			$qty[] = (int)$row["qty"];
			$tnx_id = rand(963852,96215948)+$cm_user_id + $row["p_id"];
			
			}

			for ($i=0; $i < count($product_id); $i++) { 
			
			$rate = ($discount[$i] * $product_price[$i]) /100;
											
											$pro_price1 = $product_price[$i] -  $rate;
											if($discount[$i] > 0)
											{
												$pro_price = $pro_price1;
											}
											if($discount[$i] == 0)
											{
												$pro_price = $product_price[$i];
											}
											$ttl = $pro_price*$qty[$i];
			    
				$sql = "INSERT INTO orders (user_id,product_id,tnx_id,qty,full_name,email,address,city,state,zip_code,payment_type,acc_nmbr,transaction_id,total,mobile) VALUES ('$cm_user_id','".$product_id[$i]."','".$tnx_id."','".$qty[$i]."','$fullname','$email','$address','$city','$state','$zip','$paymenttype','$acc_nmbr','$transaction_nmbr', '$ttl', '$mobile')";
				mysqli_query($con,$sql);
				
				
				
				
				
				
						$sql = "SELECT quantity FROM products WHERE product_id = '$product_id[$i]'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			
			$qty1= $row["quantity"];
			$qty1 = $qty1 -$qty[$i] ;
			
			}
				
		}	
				
				
				
				
				
				
				
				
				$sql1 = "UPDATE products SET quantity ='$qty1'
							  WHERE product_id = $product_id[$i] ";
				mysqli_query($con,$sql1);
				
			}

			$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
			if (mysqli_query($con,$sql)) {
				?>
				

               			
							<link rel="stylesheet" href="css/bootstrap.min.css"/>
							<script src="js/jquery2.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="main.js"></script>
							<style>
								table tr td {padding:10px;}
							</style>
					
					
						<p><br/></p>
						<p><br/></p>
						<p><br/></p>
						<div class="container-fluid">
						
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="panel panel-default">
										<div class="panel-heading"></div>
										<div class="panel-body">
											<h1>Thank You </h1>
											<hr/>
											<p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your payment process is 
											successfully completed and your Transaction id is <b><?php echo $tnx_id; ?></b><br/>
											you can continue your Shopping <br/></p>
											<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
											<a href="customer_invoice.php?id=<?php echo $tnx_id;?> " class="btn btn-success btn-lg"> view invoice</a>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					
                         
				<?php
			}
		}else{?><br><br><br><br>
		<div class="catagory-title col-12 text-center"><h1> 🤵:><?php echo $_SESSION["name"]; ?>, No Product on your cart to make a payment..!</h1><br><br><br><br><br><br><br><br>
		<?php 
		}
		
	
}?>



<?php include"footer.php";?>	


















































