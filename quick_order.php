<?php include 'header.php'; 
include "db.php";
?>

		
		

 
 
 
 
	 <div class="container">
			<div class="row">
			
			<?php
			
			if(isset($_POST["order_now"]))
			{
				
				$location = $_POST["orderLocation"];
				$mobile = $_POST["mobileNumber"];
				$address = $_POST["fullAddress"];
				$productid = $_POST["pro_id"];
				
				$price = $_POST["price"];
				$quantity = 1;
				 $productname = $_POST["pro_name"];
				$img = $_POST["img"];
				$cusname = $_POST["cusname"];
				$tnx_id = 9265*$productid;
				
				$sql = "INSERT INTO `orders`
										(`user_id`,`product_id`,`qty`,`tnx_id`,`p_status`,`full_name`, `address`,`zip_code`,`payment_type`,`total`,`transaction_id`,`acc_nmbr`) 
													VALUES ('0','$productid','1','$tnx_id','pending','$cusname','$address','$mobile','cashon','$price','none','none')";
													if (mysqli_query($con,$sql)) {
														?>
														
														
														
				<div class="container">
			<div class="top-content">
				<h3 class="successfull"> Successfully Posted Your Order! </h3> 
				<h4><p>Thank you so much for ordering us. Our representative will confirm the order by contacting you within the maximum 24 hours. If your order no. <?php echo $tnx_id;?> is confirmed then we will reach your product within the maximum 3 days. You can also review the product if you want to verify it.</p>
				<p>Colour Spray Ltd. always considers the quality of the product and its acceptability to the customer. In that continuation, we promise you always good products. Even then, if the product is broken / damaged / bad, or if the quality is not expected, then we request you to let us know within 24 hours of receiving the product. </p></h4>
			</div>
			<div class="your-data">
				<center><h3><span class="p-title"> YOUR DATA </span></h3>
				<div class="row background-white">
					<div class="col-md-12 ">
						<table border="0" class="table">
							<tbody>
								<tr><td>Name</td><td>:</td><td><?php echo $cusname;?></td></tr>
								<tr><td>Mobile Number</td><td>:</td><td><?php echo $mobile;?> </td></tr>
								<tr><td>Email</td><td>:</td><td> </td></tr>
								<tr><td>Address</td><td>:</td><td><?php echo $address ;?></td></tr>
								<tr><td>Location</td><td>:</td><td><?php 
											if($location == 'dhaka')
											{
												echo"Inside Dhaka";
											}
											if($location == 'other')
											{
												echo"Outside Dhaka";
											}
								
								
								?></td></tr>
								<tr><td>Delivery</td><td>:</td><td>Normal</td></tr>
								<tr><td>Payment Type</td><td>:</td><td>Cash On Delivery</td></tr>
														</tbody>
						</table>
					</div>
				</div>
				
				</center>
			</div>
			
			<div class="your-bill">
			
			
			<h2>Your Ordered Details</h2>
		  <div class="table-responsive">
    				<table class="table">
							<tr>
								
								<th>Product Name</th>
												
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
								<th>Status</th>
								
								
							</tr>
							
							<tr>
								
								<td><?php echo $productname; ?></td>
								
								<td style="text-align:center;">1</td>
								
								<td><?php echo $price; ?></td>
                                <td><?php echo $price; ?></td>
                                <td>Pending</td>
								
                                
                                
								
							</tr>
							
							
						</table>
		  
					</div>
				
			</div>	













				
<style>
			/*----- Thank You Page ----*/
			#thank-you {
				background-color: #f9f8f8;
			}
			#thank-you h2.successfull {
				text-align: center;
				margin: 2em 0;
				font-size: 26px;
				color: #fdb90b;
				text-shadow: 1px 1px 1px #666;
			}
			#thank-you span.p-title {
				text-align: center;
				margin: 1.5em 0;
				background-color: #fdb90b;
				color: #f9f8f8;
				font-size: 20px;
				padding: .3em .6em;
				display: inline-block;
			}
			#thank-you .separator {
				height: 10px;
			}
			#thank-you .background-white {
				background: #fff;
				border: 1px solid #fdb90b;
				padding: .5em;
			}
			#thank-you .your-data, #thank-you .your-bill {
				text-align: center;
			}
			#thank-you .your-data table{
				width: 100%;
				border-collapse: collapse;
				border-spacing: 0;
				border: 0;
			}
			#thank-you .your-data table tr td{
				padding: 2px;
				font-size: 12px;
				text-align: left;
				color: #666
			}
			#thank-you .your-bill p {
				text-align: right;
			}
			#thank-you .your-bill .invoice-print {
				color: #333;
				text-decoration: underline;
				font-size: 18px;
				font-weight: 600;
				font-family: 'Times New Roman';
				cursor: pointer;
			}
			#thank-you .invoice {
				position: relative;
				width: 800px;
				margin: 50px auto;
				text-align: left;
				padding: 50px 65px;
				box-shadow: 0px 0px 20px #ccc;
			}
			#thank-you .invoice-top img {
				max-width: 100%;
				height: 100px;
			}
			#thank-you .invoice-top .tagline h2.company-name{
				font-weight: bold;
				font-size: 28px;
				line-height: 1em;
				text-transform: none;
				margin: 0;
			}
			#thank-you .invoice-top .tagline p{
				text-align: left;
				color: #888;
				font-size: 14px;
				margin-bottom: 0;
				line-height: 19.6px;
			}
			#thank-you .invoice-top .qr {
				text-align: right;
			}
			#thank-you .invoice-middle .invoice-id {
				margin-top: 60px;
				margin-bottom: 40px;
			}
			#thank-you .invoice-middle h1{
				font-size: 50px;
				font-family: 'impact';
				color: #396E00;
				line-height: 50px;
			}
			#thank-you .invoice-middle .invoice-info table{
				width: auto;
				border-collapse: collapse;
				border-spacing: 0;
			}
			#thank-you .invoice-middle .invoice-info table tr td{
				padding: 1px 3px;
			}
			#thank-you .invoice-middle .invoice-bill-to p {
				text-align:left;
				margin-bottom: 2px;
				font-size: 14px;
				color: #000;
			}
			#thank-you .invoice-table .itemLists {
				width: 100%;
				border-collapse: collapse;
				border-spacing: 0;
				margin-top: 40px;
				font-size: 14px;
			}
			#thank-you .invoice-table .itemLists td,#thank-you .invoice-table .itemLists th{
				padding: 10px;
			}
			#thank-you .invoice-table .itemLists td p.ipnaid {
				font-size: 13px;
				color: #333;
				text-align: left;
				margin-bottom: 0px;
			}
			#thank-you .invoice-table .itemLists td p.ipnaid.ipname {
				font-weight: 600;
			}
			#thank-you .invoice-table .itemLists thead tr{
				border-bottom: 2px solid #aaa;
				color: #333;
				font-weight: 600;
			}
			#thank-you .invoice-table .itemLists tbody tr{
				border-bottom: 1px solid #ccc;
				color: #333;
				font-weight: 500;
			}
			#thank-you .invoice-table .itemTotal {
				width: 35%;
				border-collapse: collapse;
				border-spacing: 0;
				margin-top: 10px;
				font-size: 14px;
				float: right;
				color: #333;
			}
			#thank-you .invoice-table .itemTotal tr.subtotal {
				color: #396E00;
				border-top: 2px dotted #aaa;
				font-size: 16px;
			}
			#thank-you .invoice-table .itemTotal tr td{
				padding: 5px;
			}
			#thank-you .invoice-table .payment-info {
				color: #888;
				font-size: 12px;
				margin-top: 20px;
				width: 100%;
				font-weight: normal;
			}
			#thank-you .paid-stamp {
				max-width: 25%;
				display: block;
				margin: 0 auto;
				position: absolute;
				top: 215px;
				right: 71px;
				opacity: .5;
			}
			@media print {
				body * {
					visibility: hidden;
				}
				.invoice, .invoice * {
					visibility: visible;
				}
				.invoice {
					width: 100%;
					position: absolute;
					left: 0;
					top: 0;
				}
			}
		</style>
<div id="page-wrapper hddn">
		<div class="row">
				<div class="col-lg-12">
						<h1 class="page-header" style="text-align:center;">Your Invoice</h1>
						
						

							
							
								<div id="thank-you">
			<div class="your-bill">				
				<div class="background-white">
					<p><span class="invoice-print" onclick="window.print()"><i class="fa fa-print"></i> Print</span></p> 
					<div class="invoice">
						<div class="row invoice-top">
							<div class="col-md-3 col-sm-3 col-xs-3 logo">
								
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 tagline">
								<h2 class="company-name" style="color:green;">Indian Cosmetics Bd</h2>
								<div class="separator"></div>
								<p class="company-address">Suite # 618, 87 BNS Center, Sector # 7, Uttara, Dhaka-1230</p>
								<p class="company-contact"> info@indiancosmeticsbd.com</p>
							</div>
							
						</div>
						
						
						
						
							
						<div class="row invoice-middle">
							<div class="col-md-12 invoice-id">
								<center> <h3 style="color:green;">Invoice</h3> </center>
								<hr/>
								<span style="float:right;color:green;">Phone : 01937084470 </span>
							</div>
							<div class="clearfix"></div>

							<div class="col-md-6 col-sm-6 col-xs-6 invoice-info">
								<table border="0">
								<tr><td>Invoice Id </td><td>:</td><td># 00<?php
echo $productid;
?> </td></tr>
									<tr><td>Day</td><td>:</td><td><?php
echo date("y/m/d");
?> </td></tr>
									<tr><td>Month:</td><td>:</td><td>
									<?php
                                   echo date("M");
                                   ?>
                                  <tr><td>Year:</td><td>:</td><td>
									<?php
                                 echo date("Y");
                                  ?>
									
									
									</td></tr>
									<tr><td>Department</td><td>:</td><td>Salles </td></tr>
									<tr><td>Report Type</td><td>:</td><td> Customer Invoice</td></tr>
								</table>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 invoice-bill-to">
								Bill to: <?php echo $cusname; ?> <br>
								
								Address: <?php echo $address; ?> <br>
								City:<?php echo $location; ?> <br>
								Mobile:<?php echo $mobile; ?> 
																			
																	
							</div>
						</div>
						<div class="row invoice-table">
							<div class="col-md-12">
								<table border="0" class="itemLists">
									<thead>
										<tr><th>Sl No</th><th>Product image</th><th>Name</th><th>quantity</th><th>prize</th><th>Total</th></tr>
									</thead>
									<tbody>
									
									
							
							
							
										  <tr>
											<td>1</td>
											
											<td><img src="images/<?php echo $img; ?>"  style="height: 70px;width:100px;"></td>
											<td><?php echo $productname; ?></td>
											<td>1</td>
											<td><?php echo $price; ?></td>
											
											<td>
										
											<?php 
											$total = $price*1;
											
											
											echo $total."TK";
											
											?></td>
											
											
										  </tr>
										  
							
					
										
									</tbody>
								</table>
								
								<div class="clearfix"></div>
								
								<div class="separator"></div>
								<div class="payment-info">
								<h5>	Total product cost: <b><?php 
											
											
											echo $total."";
											?></b> TK
									
									
									
									</h5>
									
								</div>
								
								
								
						
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
				
							
								
										 
			
			 <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Cost', 'profit'],
               ['2012',  900,      390],
               ['455',  1000,      400],
               ['2014',  1170,      440],
               ['2015',  1250,       480],
               ['2016',  1530,      540]
            ]);

            var options = {title: 'Salling rate (monthly)'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('calendar'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>				
							
					
		
				</div>
		</div>
		<div class="row">
				
		</div>
</div>









			
		</div>
				
				
				<?php
				
			}
			
			else
				
				{
					echo"Connection problem";
					
				}
			
			
			
			?>
			
				
			</div>
			
			
			
	 </div>
														
														
														
														<?php
											
														
													}
				
				
				
				
				
				?>
				
				
 <br><br><br><br>
 
 
 
 
 
<?php include 'footer.php'; ?>
