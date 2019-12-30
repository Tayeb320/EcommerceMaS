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
 <?php include"header.php";?>
 
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;">Accounts </h2></center> <hr/>
                </div>
 
 <div id="page-wrapper">
            <!-- /.row -->
			
			<div class="row table col-md-5">
               
			   <center> Day wise/ Monthly/ Yearly report </center> <hr/>
			   
			   <form action="report1.php" method="post">
			   
			   <label> From  </label>
			   <input type="date" name="from" class="form-control" /> 
			   
			    <label> To  </label>
			   <input type="date" name="to" class="form-control" /> 
			   <br/>
			   
			   <center> <input type="submit" name="search" class="btn btn-primary" />  </center>
			   
			   
			   
			   
			   
			   </form>
			   <br/>
			   
				   <br/>
				
            </div>
			
			 <div class="row">
                <div class="col-md-7">
				
				<div class="panel-success">
							<div class="panel-heading">
							<b> PROFIT FROM SELLING ON THIS MONTH</b>
						    </div>
							<div class="panel-body">
                	
								
							<table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Item Image</th>
        <th>Item</th>
		<th>Total Quantity</th>
		<th>Total Cost</th>
		<th>Total Sell</th>
		<th>Profit</th>
		
      </tr>
    </thead>
    <tbody>
				
<?php

include 'db.php';
	
				   $now = new \DateTime('now');
				   $c_month = $now->format('m');
				   $c_year = $now->format('Y');
				   

	$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$c_month and year(date)=$c_year) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit= 0;
		$net_cost= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];
?>

<tr>
	<td><?php echo $sl; ?></td>
	<td><img src="../images/<?php echo $product_image; ?>" style="height:60px;width:100px;"></td>
	<td><?php echo $product_title; ?></td>
	<td><?php echo $quantity?></td>
	<td><?php echo $product_cost?></td>
	<td><?php echo $product_price?></td>
	<td>
	<?php 
		$profit = ($product_price - $product_cost);
		$net_cost = $net_cost + $product_cost;
		$netprofit = $netprofit + $profit;
		echo $profit."TK";
		?>
	</td>
</tr>

<?php
	}
}
?>
				
					
					 </tbody>
  </table>
				<center> <h3> <b> Net Cost: <?php if(isset($net_cost)){echo $net_cost;} ?>TK <b> </h3> </center>
				<center> <h3> <b> Net Profit: <?php if(isset($netprofit)){echo $netprofit;} ?>TK <b> </h3> </center>
                </div>
				 </div>
				  </div>
				
				<div class="col-md-5">
                  		<div class="panel-success">
							<div class="panel-heading">
							EXPENSES
						    </div>
							<div class="panel-body">
							
										
							<table class="table">
										<thead>
										  <tr>
											<th>SL</th>
											<th>Expenses type</th>
											<th>Amount</th>
											
											
										  </tr>
										  
										</thead>
								<tbody>
										<tr>
											<td>1</td>
											<td>House rent</td>
											<td>2000TK</td>
											
											
											
										  </tr>	
										  <tr>
											<td>2</td>
											<td>Workers salary</td>
											<td>3000TK</td>
											
											
											
										  </tr>	

			
								</tbody>
							</table>										  
							 
						    </div>
							 
						</div>
			<center> <h3> <b> Total Cost: 5000TK <b> </h3> </center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
			
			<div class="row">		
				<div class="col-md-7 col-lg-12">
			
					<div class="panel panel-success">
																		<div class="panel-heading"> 
																		<i class="glyphicon glyphicon-calendar"></i> 
																		SALES REPORT OF LAST SIX MONTH
																		</div>
																		<div class="panel-body">
																			<div id="calendar"></div>
																		</div>	
																	</div>
			    </div>
				
				
<?php
	include 'db.php';
				   
		$month1 = date('m', strtotime('0 month'));
		$monthM = date('F', strtotime('0 month'));
		$year1 = date('Y', strtotime('0 month'));
		$month2 = date('m', strtotime('-1 month'));
		$monthM1 = date('F', strtotime('-1 month'));
		$year2 = date('Y', strtotime('-1 month'));
		$month3 = date('m', strtotime('-2 month'));
		$monthM2 = date('F', strtotime('-2 month'));
		$year3 = date('Y', strtotime('-2 month'));
		$month4 = date('m', strtotime('-3 month'));
		$monthM3 = date('F', strtotime('-3 month'));
		$year4 = date('Y', strtotime('-3 month'));
		$month5 = date('m', strtotime('-4 month'));
		$monthM4 = date('F', strtotime('-4 month'));
		$year5 = date('Y', strtotime('-4 month'));
		$month6 = date('m', strtotime('-5 month'));
		$monthM5 = date('F', strtotime('-5 month'));
		$year6 = date('Y', strtotime('-5 month'));

		$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$month2 and year(date)=$year2) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit1= 0;
		$net_cost1= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];

	
			$profit = ($product_price - $product_cost);
			$net_cost1 = $net_cost1 + $product_cost;
			$netprofit1 = $netprofit1 + $profit;
			
	}}
			$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$month3 and year(date)=$year3) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit2= 0;
		$net_cost2= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];

	
			$profit = ($product_price - $product_cost);
			$net_cost2 = $net_cost2 + $product_cost;
			$netprofit2 = $netprofit2 + $profit;
	
}}

$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$month4 and year(date)=$year4) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit3= 0;
		$net_cost3= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];

	
			$profit = ($product_price - $product_cost);
			$net_cost3 = $net_cost3 + $product_cost;
			$netprofit3 = $netprofit3 + $profit;
	
}}

$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$month4 and year(date)=$year4) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit3= 0;
		$net_cost3= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];

	
			$profit = ($product_price - $product_cost);
			$net_cost3 = $net_cost3 + $product_cost;
			$netprofit3 = $netprofit3 + $profit;
	
}}

$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$month5 and year(date)=$year5) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit4= 0;
		$net_cost4= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];

	
			$profit = ($product_price - $product_cost);
			$net_cost4 = $net_cost3 + $product_cost;
			$netprofit4 = $netprofit4 + $profit;
	
}}

$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where (month(date)=$month6 and year(date)=$year6) and delivery_status=2 group by product_id order by total_qty desc";
		$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit5= 0;
		$net_cost5= 0;
		while($row = mysqli_fetch_array($run_query)){
			$sl++;
			$product_image = $row['product_image'];

			$product_title = $row['product_title'];
			$quantity = $row['total_qty'];
			$product_cost = $row['product_cost'] *  $quantity;
			$product_price = $row['total_sell'];

	
			$profit = ($product_price - $product_cost);
			$net_cost5 = $net_cost5 + $product_cost;
			$netprofit5 = $netprofit5 + $profit;
	
}}
?>
				
				
				
				<div class="col-md-5 col-lg-12">
			
					<div class="panel-success">
						<div class="panel-heading">
			
			                REVENUE
					    </div>
						
						<div class="panel-body">
							 <b> Net profit: <?php if(isset($netprofit)){ $final_profit = $netprofit + $netprofit1 + $netprofit2 + $netprofit3 + $netprofit4 + $netprofit5; echo $final_profit;}?>TK <b>  <br>
								 <b> Total cost: <?php $total_cost= $net_cost + $net_cost1 + $net_cost2 + $net_cost3 + $net_cost4 + $net_cost5 ; echo $total_cost ?> <b> <br/>
								 <b> Other Expenses: 5000 Tk <b> <br/>
								 .......................................<br>
								 <b> Income: <?php if(isset($final_profit)){$a=$final_profit;}else{$a = 0;}  echo $p = $a-5000;?>TK <b>  
								 
								
								
								<?php
								if($a>0)
								{
									?>
									<div class="panel-success">
									<div class="panel-heading">
			
			                You are in profit. Your total revenue <?php echo $p;?> TK
					    </div>
							</div>		
									<?php
								}
							else
							{
								?>
								
								<div class="panel-danger">
								<div class="panel-heading">
			
			                You are in loss. Your total revenue <?php echo $a;?> TK
					    </div>
						</div>
								<?php
								
							}
								?>
		                 
								 
					    </div>
			
			
					</div>
			    </div>
			
			</div>
			
			
			
			
			
			 <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['MONTH', 'PROFIT', 'COST'],
               ['<?php  echo $monthM;?>',  <?php echo $netprofit;?>,      <?php echo $net_cost;?>],
               ['<?php  echo $monthM1;?>',  <?php echo $netprofit1;?>,      <?php echo $net_cost1;?>],
               ['<?php  echo $monthM2?>',  <?php echo $netprofit2;?>,      <?php echo $net_cost2;?>],
               ['<?php  echo $monthM3;?>',  <?php echo $netprofit3;?>,      <?php echo $net_cost3;?>],
               ['<?php  echo $monthM4;?>',  <?php echo $netprofit4;?>,      <?php echo $net_cost4;?>],
               ['<?php  echo $monthM5;?>',  <?php echo $netprofit5;?>,      <?php echo $net_cost5;?>],
               
            ]);

            var options = {title: 'Salling rate (monthly)'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('calendar'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>

			
			
			
			
								
								
			
            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
