<?php 
session_start();

require_once 'db.php';

// echo $_SESSION['userId'];

if(!isset($_SESSION['userId'])) {
		
	echo "<script>window.location = '../login1.php'; </script>";
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ecommerce shopping System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; position: fixed;
    width: 100%;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="index.php" style="color:#ffffff;font-size: 25PX;
margin-top: 5px;"><center>Colour Spray <br>Eshop Admin Panel</center></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="background-color:white;">
                
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo strtoupper($_SESSION['name'])?> &nbsp &nbsp <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="change_pass.php" ><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
						<li class="divider"></li>
						<li>
                           <a href="add_admin.php" style="color:#0b0b3b;"> <i class="fa fa-user fa-fw"></i> Add New admin</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul><br>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background-color:#85b2ff;color:white; min-height:1000px; position: fixed;">
                <div class="sidebar-nav navbar-collapse">
				<h3 style="background-color:#7d828a;color:white;padding:28px;margin-top: 11px;
    margin-bottom: 3px;">Admin Dashboard</h3>
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php" style="color:#0b0b3b;"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#" style="color:#0b0b3b;"><i class="fa fa-book fa-fw"></i> Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="View_order.php" style="color:#0b0b3b;">All Orders</a>
                                </li>
								<li>
                                    <a href="new_order.php" style="color:#0b0b3b;">New Orders</a>
                                </li>
								<li>
                                    <a href="processing_order.php" style="color:#0b0b3b;">Processing Orders</a>
                                </li>
								<li>
                                    <a href="completed_order.php" style="color:#0b0b3b;">Completed Orders</a>
                                </li>
				
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="search_order.php" style="color:#0b0b3b;"><i class="fa fa-search fa-fw"></i> Search Order</a>
                        </li>
						 <li>
                            <a href="#" style="color:#0b0b3b;"><i class="fa fa-users fa-fw"></i> Customers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cus_info.php" style="color:#0b0b3b;">View customer</a>
                                </li>
								
								<li>
                                    <a href="cus_query.php" style="color:#0b0b3b;">Customers Query</a>
                                </li>
								<li>
                                    <a href="cus_query_old.php" style="color:#0b0b3b;">Old Customers Query</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#" style="color:#0b0b3b;"><i class="fa fa-sitemap fa-fw"></i> Product Section<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="products.php" style="color:#0b0b3b;">View products</a>
                                </li>
								<li>
                                    <a href="comments.php" style="color:#0b0b3b;"> Customer Reviews</a>
                                </li>
                                <li>
                                    <a href="addproduct.php" style="color:#0b0b3b;">Add products</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#" style="color:#0b0b3b;"><i class="fa fa-bar-chart-o fa-fw"></i> Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="category.php" style="color:#0b0b3b;">View categories</a>
                                </li>
								<li>
                                    <a href="subcategory.php" style="color:#0b0b3b;">View subcategories</a>
                                </li>
                                <li>
                                    <a href="addcategory.php" style="color:#0b0b3b;">Add category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="account.php" style="color:#0b0b3b;"><i class="fa fa-table fa-fw"></i> Accounts</a>
                        
                        <li>
                            <a href="#" style="color:#0b0b3b;"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="about.php" style="color:#0b0b3b;">About us</a>
                                </li>
								<li>
                                    <a href="home_category.php" style="color:#0b0b3b;">Home Category settings</a>
                                </li>
                                <li>
                                    <a href="marque.php" style="color:#0b0b3b;">Marque Settings</a>
                                </li>
								<li>
                                    <a href="Banner.php" style="color:#0b0b3b;">Banner Settings</a>
                                </li>
								<li>
                                    <a href="slider.php" style="color:#0b0b3b;">Slider Settings</a>
                                </li>
								
								<li>
                                    <a href="terms.php" style="color:#0b0b3b;">Terms & Condition</a>
                                </li>
								
								
								
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     
                        
						
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
		
		<br><br><br>