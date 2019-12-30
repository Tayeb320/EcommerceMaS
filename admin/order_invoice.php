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
 
  <!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
								<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

                                <style>body {
    background-color: #000
}

.padding {
    padding: 2rem !important
}

.card {
    margin-bottom: 30px;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
}

.card-header {
    background-color: #fff;
    border-bottom: 1px solid #e6e6f2
}

h3 {
    font-size: 20px
}

h5 {
    font-size: 15px;
    line-height: 26px;
    color: #3d405c;
    margin: 0px 0px 15px 0px;
    font-family: 'Circular Std Medium'
}

.text-dark {
    color: #3d405c !important
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'></script>
                            </head>
                            <body>
                            <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
    <div class="card">
	<a class="btn btn-success" href="search_order.php"> Go Back </a>
	
	<?php 
	include "db.php";
							$vid=$_GET['viewid'];
							$product_query = "select * from orders where tnx_id = '$vid' limit 1";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){

										while($row = mysqli_fetch_array($run_query)){
											?>
											
							<?php 
											
											$tnx_id   = $row['tnx_id'];
											$name   = $row['full_name'];
											$email   = $row['email'];
											$mobile   = $row['mobile'];
											$address   = $row['address'];
											$date   = $row['date'];
											$d_status   = $row['delivery_status'];
											$pay_status   = $row['p_status'];
											$p_type   = $row['payment_type'];
											$zip_code   = $row['zip_code'];
											$state   = $row['state'];
											$city   = $row['city'];
											
											?>
	<div id="printableArea"> 
        <div class="card-header p-4 ">
            <a class="pt-2 d-inline-block" href="index.php" data-abc="true">Colour Spray Ltd.</a>
            <div class="float-right">
                <h3 class="mb-0">Invoice #<?php echo $tnx_id ;?></h3>
                <?php echo date("F d, Y ", strtotime($date)); ?>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5 class="mb-3">From:</h5>
                    <h3 class="text-dark mb-1">Colour Spray e-Shop</h3>
                    <div>Jaynal Market, Alam Plaza, (Opposite Jaynal Tower)</div>
                    <div>Uttara, Dhaka-1230 Bangladesh</div>
                    <div>Email: contact@colourspray.com</div>
                    <div>Phone: +8801635229697</div>
                </div>
                <div class="col-sm-6 ">
                    <h5 class="mb-3">To:</h5>
                    <h3 class="text-dark mb-1"><?php echo $name ;?></h3>
                    <div><?php echo  "$address,"." $zip_code,"."$city" ;?></div>
                    <div><?php echo "$state, Bangladesh"?></div>
                    <div>Email: <?php echo $email ;?></div>
                    <div>Contact: +880<?php echo $mobile ;?></div>
                </div>
            </div>
							<?php } } ?>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th class="center">Image</th>
                            <th class="center">Item</th>
                            <th class="right">Price(BDT)</th>
                            <th class="right">Discount (%)</th>
                            <th class="center">Qty</th>
                            <th class="right">Total(BDT)</th>
                        </tr>
                    </thead>
					<?php 
							$vid=$_GET['viewid'];
							$product_query = "select orders.*, products.product_title,products.product_image,products.product_price,products.discount from orders INNER JOIN products on orders.product_id = products.product_id where orders.tnx_id = '$vid'";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
								$total_pay = 0;
								$sub_total = 0;
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											?>
												
								
								
							
							<?php 
							
											$sl++;
											
											$title   = $row['product_title'];
											$per_price   = $row['product_price'];
											$discount   = $row['discount'];
											$qty = $row['qty'];
											$image = $row['product_image'];
											$accnmbr = $row['acc_nmbr'];
											$total = $row['total'];
											$qty_price = $per_price * $qty;
											$sub_total = $sub_total + $qty_price;
											$total_pay = $total_pay + $total;
											$state = $row['state'];
											?>
					
                    <tbody>
                        <tr>
                            <td class="center"><?php echo $sl; ?> </td>
							<td class="left"><img src="../images/<?php echo $image; ?>" style="height:80px;width:80px;" ></td>
                            <td class="left"><?php echo $title; ?> </td>
                            <td class="right"><?php echo $per_price; ?></td>
                            <td class="center"><?php echo $discount ; ?></td>
                            <td class="center"><?php echo $qty; ?></td>
                            <td class="right"><?php echo $qty_price; ?></td>
                        </tr>
                    </tbody>
					<?php } } ?>
                </table>
            </div>
			
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Subtotal</strong>
                                </td>
                                <td class="right"><?php echo $sub_total; ?> BDT</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Discount</strong>
                                </td>
                                <td class="right"><?php echo $sub_total - $total_pay; ?> BDT</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Total</strong> </td>
                                <td class="right">
                                    <strong class="text-dark"><?php echo $total_pay; ?> BDT</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
		
        <div class="card-footer bg-white">
            <strong class="mb-0">Colour Spray Ltd., Uttara,Dhaka-1230, Bangladesh</strong>
        </div>
		
    </div>
	<hr>
		<p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  onclick="printDiv('printableArea')" ></i>
</p>
</div>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
            
			</body>
                        </html>
						
						
					
