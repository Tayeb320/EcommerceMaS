<?php
include "header.php";
$ip_add = getenv("REMOTE_ADDR");

?>


 <link rel="stylesheet" type="text/css" href="link/checkoutstyle.css" />



<!-- Checkout Page Start -->

    <div class="container">
        <div class="row" style="background-color:#adc5dfad;">
            <div class="col-12" >
                
                <!-- Checkout Form s-->
                <form action="" method="post" class="checkout-form" >
                   <div class="row row-40" >
                       
                       <div class="col-lg-6 mb-20" style="background-color:#f0faff;">
                          
                           <!-- Billing Address --> <br> 
                           <div id="billing-form" class="mb-40">
						   
						   
                              <center>  <h3 class="checkout-title">Billing Address</h3> </center><hr/>

                               <div class="row">

                                   <div class="col-md-6 col-12 mb-20">
								   <div class="form-group">
                                       <label>Full Name*</label>
                                       <input type="text" id="fullname" class="form-control" name="fullname" placeholder="First Name" required >
									 </div>  
                                   </div>

                                  

                                   <div class="col-md-6 col-12 mb-20">
										<div class="form-group">
									 <label>Email Address*</label>
                                       <input type="email" id="email" name="email"  class="form-control" placeholder="Email Address" required>
                                    </div>
								   </div>

                                   <div class="col-12 mb-20">
								   <div class="form-group">
                                       <label>Address*</label>
                                       <input type="text" id="adr" name="adr" class="form-control" placeholder="Address" required>
									</div>
								  </div>
								  <div class="col-md-6 col-12 mb-20">
									<div class="form-group">                                     
									 <label>Postal Code*</label>
                                       <input type="text" id="zip" name="zip" class="form-control" placeholder="Postal Code" required>
                                   </div>
								   </div>

                                   <div class="col-md-6 col-12 mb-20">
									<div class="form-group">                                     
									 <label>Mobile Number*</label>
                                       <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile number" required>
                                   </div>
								   </div>

                                   
								<div class="col-md-6 col-12 mb-20">
									<div class="form-group">                                     
									 <label>Division*</label>
                                       <input type="text" id="state" name="state"  class="form-control" placeholder="Division" required>
                                   </div>
								   </div>
								   
                                   

                                   <div class="col-md-12 col-12 mb-20">
										<div class="form-group">
										
									  <label>Town/City*</label>
                                       <input type="text" id="city" name="city" class="form-control" placeholder="Town/City" required>
                                   </div>
								   </div>

                                   

                                   

                                   <div class="col-12 mb-20">
                                       
                                   </div>

                               </div>

                           </div>
                           
                           <!-- Shipping Address -->
                          
						   
						  <center>  <input type="submit" name="next" value="Go next" class="btn btn-success  " style="background-color:green;color:yellow;"> </center>
                                  </form>
                           
                       </div>
                      
                       <div class="col-lg-6">
					   
					   <div class="row">
					   <br> 
					   <div class="col-md-1">
					   
					   
					   </div>
					  
					   <div class="col-md-11" style="background-color:#f0faff;">
					    <center>
					 <?php
                       
										$id = $_SESSION["uid"];

										$product_query = "SELECT cart.p_id,cart.user_id,cart.qty,products.product_id,products.product_price,products.discount from cart INNER JOIN products on cart.p_id = products.product_id where cart.user_id = $id";
								$run_query = mysqli_query($con,$product_query);
														if(mysqli_num_rows($run_query) > 0){
										
									$ttl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$pro_id    = $row['product_id'];
											
											
											$qty = $row['qty'];
											$pro_price = $row['product_price'];
											$discont = $row['discount'];
											
											$rate = ($discont * $pro_price) /100;
											
											$pro_price1 = $pro_price -  $rate;
											if($discont > 0)
											{
												$pro_price = $pro_price1;
											}
											if($discont == 0)
											{
												$pro_price = $row['product_price'];
											}
											$ttl = $ttl + ($pro_price*$qty);
											
											
											
										}?>
										<h4>	Cart summary </h4> <hr/>
									<table class="table">	<tr> <td> Subtotal </td> <td>:</td> <td> <?php echo $ttl;?>Tk</td> </tr>
										<tr> <td>	Shipping charge</td> <td>:</td> <td><?php if ($ttl >50000) {echo "Free Delivery"; $charge=0;} else {echo 50; $charge = 50;}?></td> </tr>
										<tr> <td>Grand Total</td> <td>:</td> <td><?php echo $ttl + $charge;?>Tk</td> </tr>
		                            </table>
										
		
				<?php		}

					   ?>
					   
					   </center>
					   
					   </div>
					   
					   
					  
					   
					   </div>
					   
					   
					   <?php 
					   if(isset($_POST["next"]))
						   
						   {
							  
                           $name = 	$_POST["fullname"];
							$email = 	$_POST["email"];
							$adr = 	$_POST["adr"];
							$zip = 	$_POST["zip"];
							$state = 	$_POST["state"];
							$city = 	$_POST["city"];
							$mobile = 	$_POST["mobile"];
							
							
						   
							   
					   
					   ?>
                           <div class="row">
                               
                               <!-- Cart Total -->
                               <div class="col-12 mb-60">
                               
                                   
                                   
                               </div>
                               
                               <!-- Payment Method -->
                               <div class="col-12 mb-60">
							   
							   
							  <aside class="col-sm-12" style="background-color:#f0faff;color:red;">
									<center> 	<h3>payment Option</h3> </center> <hr/>

										<article class="card" style="background-color:#d2d2d2;">
										<div class="card-body ">

										<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
												
											<li class="nav-item">
												<a class="nav-link active" data-toggle="pill" href="#nav-tab-paypal">
												<i class="fab fa-paypal"></i>  Bkash</a></li>
												<li class="nav-item">
												<a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
												<i class="fa fa-university"></i>  Cash On</a></li>
											
										</ul>

										
										
										
										<div class="tab-content">
										
										
										
										
											
											
										 <!-- tab-pane.// -->
										<div class="tab-pane fade show active" id="nav-tab-paypal">
										
										<form action="payment.php" method="post">
										<h4 style="color:green;"> Our bkash number  <b style="color:red;">  01718825371  </b>  </h4>
										<p> Send money to this number </p>
										
										<input type="hidden" class="form-control" name="fullname"  value="<?php echo $name ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="email"  value="<?php echo $email ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="adr"  value="<?php echo $adr ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="zip"  value="<?php echo $zip ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="mobile"  value="<?php echo $mobile ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="state"  value="<?php echo $state ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="city"  value="<?php echo $city ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										
										
										
										<input type="hidden" class="form-control" name="payment_type"  value="bkash"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										<input type="hidden" class="form-control" name="total"  value="<?php echo $ttl ; ?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label" style="color:#444;">Your Bkash number</label>
                                                <div class="col-sm-10"><input type="text" name="acc_nmbr" class="form-control" placeholder=" Bkash number" required ></div>
                                            </div>
											
											<div class="form-group row"><label class="col-sm-2 col-form-label" style="color:#444;">Your Transaction Id</label>
                                                <div class="col-sm-10"><input type="text" name="tnsaction_id" class="form-control" placeholder=" transaction id" required ></div>
                                            </div>
											
											
											
											<div class="input-group mb-3">
											 
											  <input type="submit" class="form-control btn btn-success" name="submit"  value=" Confirm Payment"   aria-label="Default" aria-describedby="inputGroup-sizing-default"  style="background-color:green;color:yellow;">
											</div>
											
										</form>
										</div>
										
										
										
										<div class="tab-pane fade" id="nav-tab-bank">
										<form action="payment.php" method="post">
										
										<input type="hidden" class="form-control" name="fullname"  value="<?php echo $name ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="email"  value="<?php echo $email ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="adr"  value="<?php echo $adr ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="zip"  value="<?php echo $zip ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="mobile"  value="<?php echo $mobile ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="state"  value="<?php echo $state ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="city"  value="<?php echo $city ;?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										<input type="hidden" class="form-control" name="total"  value="<?php echo $ttl ; ?>"   aria-label="Default" aria-describedby="inputGroup-sizing-default" >
										
										
										
										
										
										<input type="hidden" name="acc_nmbr" class="form-control"  value="0" placeholder=" Bkash number">
										<input type="hidden" name="tnx_id" class="form-control" value="none" placeholder=" transaction id">
										
										
				   
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="payment_type" value="cash on" required>
                                    Cash On delivary
                                </label>
                            </div>
                        </li>
                      
					<div class="input-group mb-3">
											 
											  <input type="submit" class="form-control btn btn-success" name="submit"  value=" Confirm Payment"   aria-label="Default" aria-describedby="inputGroup-sizing-default" style="background-color:green;color:yellow;">
											</div>
					</form>
					
					
										</div> 
										
										
										 <!-- tab-pane.// -->
										</div> <!-- tab-content .// -->

										</div> <!-- card-body.// -->
										</article> <!-- card.// -->


	</aside> <!-- col.// -->
							   
							   
                               
                                  
                           
                                   
                                   
                                   
                               </div>
                               
                           </div>
						   
						   <?php 
						   }
						   ?>
                       </div>
                       
                   </div>
                
                
            </div>
        </div>
    </div>

<!-- Checkout Page End --> 





<br> <br> <br> <br> <br> <br> <br> <br>





<?php
include "footer.php";
?>