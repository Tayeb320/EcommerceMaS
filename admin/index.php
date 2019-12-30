 <?php include"header.php";?>
  <div class="col-lg-12">
                   <center> <h2 style="background-color:#0B0B3B;padding:30px;color:white;"> Welcome to Admin Panel </h2></center> <hr/>
                </div>
 <div id="page-wrapper" style="overflow:scroll;">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
											include "db.php";
											$product_query = "SELECT * FROM comments";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="comments.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sitemap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
											include "db.php";
											$product_query = "SELECT * FROM products";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
									
									
									</div>
                                    <div>Total Products!</div>
                                </div>
                            </div>
                        </div>
                        <a href="products.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
											include "db.php";
											$product_query = "SELECT distinct tnx_id FROM orders where delivery_status = 0";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
									
									
									</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_order.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel" style=" background-color:#3a869c">
                        <div class="panel-heading">
                            <div class="row" style="color:white">
                                <div class="col-xs-3" >
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
											include "db.php";
											$product_query = "SELECT distinct tnx_id FROM orders";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
									
									
									</div>
                                    <div>All Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_order.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                    </div>
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
											include "db.php";
											$product_query = "SELECT * FROM contact where status = 0";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                                    <div>New Messages!</div>
                                </div>
                            </div>
                        </div>
                        <a href="cus_query.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Message</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1>৳ </h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
									
										
											include "db.php";
											$product_query = "select  total from orders where  date(date)=CURDATE() and delivery_status=2";
	                                         $run_query = mysqli_query($con,$product_query);
											 $today = 0;
											while($row=mysqli_fetch_array($run_query))
											{
											$today = $today + $row['total'];

											}
											
											echo $today;
											?>
									
									
									</div>
                                    <div>Todays Sale!</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1>৳ </h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
										$now = new \DateTime('now');
									   $c_month = $now->format('m');
									   $c_year = $now->format('Y');
									   
											include "db.php";
											$product_query = "select  total from orders where delivery_status=2 and date(date)>=(DATE(NOW()) - INTERVAL 7 DAY)";
	                                         $run_query = mysqli_query($con,$product_query);
											 $today = 0;
											while($row=mysqli_fetch_array($run_query))
											{
											$today = $today + $row['total'];

											}
											
											echo $today;
											?>
									
									
									</div>
                                    <div>Last Seven Day's Sale</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel" style=" background-color:#3a869c">
                        <div class="panel-heading" >
                            <div class="row" style="color:white">
                                <div class="col-xs-3" >
											<h1>৳ </h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
											include "db.php";
											$product_query = "select  total from orders where delivery_status=2 and month(date)=$c_month and year(date)=$c_year";
	                                         $run_query = mysqli_query($con,$product_query);
											 $today = 0;
											while($row=mysqli_fetch_array($run_query))
											{
											$today = $today + $row['total'];

											}
											
											echo $today;
											?>
									
									
									</div>
                                    <div>This Month's Sale</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                    </div>
					
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1>৳</h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php 
									include 'db.php';
									
									$now = new \DateTime('now');
								   $c_month = $now->format('m');
								   $c_year = $now->format('Y');
				   

									$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where delivery_status=2 and (month(date)=$c_month and year(date)=$c_year) group by product_id order by total_qty desc";
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
											$profit = ($product_price - $product_cost);
											$net_cost = $net_cost + $product_cost;
											$netprofit = $netprofit + $profit;
											
											
									}
									echo $net_cost;}?></div>
                                    <div>This Month's Cost</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1>৳ </h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php echo $netprofit;?>
									
									
									</div>
                                    <div>This Month's profit!</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1>৳ </h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									
									<?php 
									$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where delivery_status=2 and (month(date)=$c_month-1 and year(date)=$c_year) group by product_id order by total_qty desc";
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
											$profit = ($product_price - $product_cost);
											$net_cost = $net_cost + $product_cost;
											$netprofit = $netprofit + $profit;
											
											
									}
									echo $netprofit;
									}
									?>
									
									</div>
                                    <div>Last Month's Profit!</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel" style=" background-color:#3a869c">
                        <div class="panel-heading" >
                            <div class="row" style="color:white">
                                <div class="col-xs-3" >
											<h1>৳ </h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php 
									$product_query = "select  products.product_image,products.product_title,orders.product_id,sum(orders.qty) as total_qty,sum(orders.total) as total_sell,orders.date,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id where delivery_status=2 group by product_id order by total_qty desc";
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
											$profit = ($product_price - $product_cost);
											$net_cost = $net_cost + $product_cost;
											$netprofit = $netprofit + $profit;
											
											
									}
									echo $netprofit;
									}
									?>
									
									
									</div>
                                    <div>Total Profit</div>
                                </div>
                            </div>
                        </div>
                        <a href="account.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
							
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    
                    <!-- /.panel -->
                    
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                       
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
