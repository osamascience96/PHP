<?php include 'Connection.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Confirm Order</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">	
</head>

<body>	
<?php include 'header.php' ?>
		<!-- Confirm Order Start -->
	<div class="container">
		<div class="row">
			<!-- Col1 Start -->
			<div class="col-sm-12 col-md-8 col-lg-8">
				<!-- Col1 Start -->
				<div class="col-sm-12 col-md-12 col-lg-12 checkout_heading_col">
					
					<h5 class="checkout_main_heading">Addresses</h5>
					<hr>
				
				</div>
				<!-- Col1 End -->	
				
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col">
					
										
					<!-- Col1 Start -->
					<div class="col-sm-6 col-md-6 col-lg-6 product_question_col">
						
						<h5 class="checkout_sub_heading">Delivery Address</h5>
						
						<!-- Table Start -->
				<div class="container-fluid checkout_container">
					<form>
					  <div class="form-group row">
						
						<div class="col-sm-12">
							<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*First Name">
						</div>
					  </div>
					  <div class="form-group row">
						
						<div class="col-sm-12">
						  <input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*Last Name">
						</div>
					  </div>
					
					   <div class="form-group row">
						
						<div class="col-sm-12">
						  
							<select class="form-control myaddress_txt_box">
							  <option>United Kingdom</option>
							</select>
							
						</div>
					  </div>
						
					<div class="form-group row">
						
						<div class="col-sm-6">
						  
						<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*Post Code">
							
						</div>
						<label for="inputPassword" class="col-sm-6 col-form-label myaddress_lbl">Find Address</label>
					  </div>
						
					<div class="form-group row">
						
						<div class="col-sm-12">
						  <input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*Address Line 1">
						</div>
				   </div>	
					
					<div class="form-group row">
						
						<div class="col-sm-12">
						  <input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="Address Line 2">
						</div>
					 </div>
						
					<div class="form-group row">
						
						<div class="col-sm-12">
						  
							<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*City / Town">
							
						</div>
						
					 </div>
						
						<div class="form-group row">
							
							<div class="col-sm-12">
						  		
								<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="County / State">
								
							</div>
							
				 		</div>
						
						
						<div class="form-group row">
							
							<div class="col-sm-12">
						  		
								<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="Mobile">
								
							</div>
							
				 		</div>
							
						
					</form>
					
			   </div>		
				
				<!-- Table -->
						
						
					</div>
					<!-- Col1 End -->
					
					
					
					<!-- Col1 Start -->
					<div class="col-sm-6 col-md-6 col-lg-6 product_question_col">
						
						<h5 class="checkout_sub_heading">Billing Address</h5>
						
						<!-- Table Start -->
				<div class="container-fluid checkout_container">
					<form>
						
						<div class="form-check checkout_radiobtn_div">
						  
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						  
							<label class="form-check-label checkout_radiobtn_txt" for="exampleRadios1">
							Same as My Delivery Address
						 	</label>
							
						</div>
						
						<div class="form-check checkout_radiobtn_div">
							
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							
						  <label class="form-check-label checkout_radiobtn_txt" for="exampleRadios2">
							Add New Billing Address
						  </label>
							
						</div>
						
					  <div class="form-group row">
						
						<div class="col-sm-12">
							<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*First Name">
						</div>
					  </div>
					  <div class="form-group row">
						
						<div class="col-sm-12">
						  <input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*Last Name">
						</div>
					  </div>
					
					   <div class="form-group row">
						
						<div class="col-sm-12">
						  
							<select class="form-control myaddress_txt_box">
							  <option>United Kingdom</option>
							</select>
							
						</div>
					  </div>
						
					<div class="form-group row">
						
						<div class="col-sm-6">
						  
						<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*Post Code">
							
						</div>
						<label for="inputPassword" class="col-sm-6 col-form-label myaddress_lbl">Find Address</label>
					  </div>
						
					<div class="form-group row">
						
						<div class="col-sm-12">
						  <input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*Address Line 1">
						</div>
				   </div>	
					
					<div class="form-group row">
						
						<div class="col-sm-12">
						  <input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="Address Line 2">
						</div>
					 </div>
						
					<div class="form-group row">
						
						<div class="col-sm-12">
						  
							<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="*City / Town">
							
						</div>
						
					 </div>
						
						<div class="form-group row">
							
							<div class="col-sm-12">
						  		
								<input type="text" class="form-control myaddress_txt_box" id="inputPassword" placeholder="County / State">
								
							</div>
							
				 		</div>
							
						
					</form>
					
			   </div>		
				
				<!-- Table -->
						
						
						
					</div>
					<!-- Col1 End -->
					
					<!-- Sub Heading Start -->
					<div class="col-sm-12 col-md-12 col-lg-12 checkout_heading_col product_question_col">
					
					<h5 class="checkout_main_heading">Shipping</h5>
					<hr>
					
					<table class="table table-borderless">
					  
					  <tbody>
						
						<tr>
						  <th scope="row"></th>
						  <td>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							  <label class="form-check-label" for="exampleRadios1">
								<b>RoyalMail Tracked</b> - Free over £49
							  </label>
							 </div>	
						  </td>
						  <td><b>$3.95</b></td>
						  <td></td>
						</tr>
						
					  </tbody>
					</table>	
						
				
					</div>
					<!-- Sub Heading End -->
					
					<!--Payment Section Start -->
					
					<div class="col-sm-12 col-md-12 col-lg-12 product_question_col">
					
					<h5 class="checkout_main_heading">Payment</h5>
					<hr>
					
					<table class="table table-borderless">
					  
					  <tbody>
						
						<tr>
						  <th scope="row"></th>
						  <td></td>
						  <td>
						  	<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							  <img src="images/Confirm Order/cc-img.jpg">
							 </div>	
						  </td>
						  <td>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							  <img src="images/Confirm Order/paytm-img3.jpg">	
							  </div>	
						  </td>
						  <td></td>
						  <td></td>
						  <td></td>	
						</tr>
						
					  </tbody>
					</table>	
						
				
					</div>
					
					
					<!-- Payment Section End -->
					
					<div class="col-sm-12">
					  <div class="form-check">
						 
						<input class="form-check-input" type="checkbox" id="gridCheck1">
						<label class="form-check-label" for="gridCheck1">
						  I would like to receive friendly reminders when it’s time to re-order. I am aware I can easily unsubscribe from these at any time.
						</label> 
					  </div>
					</div>
					
					<div class="col-sm-12">
					  <div class="form-check">
						 <p></p> 
						<input class="form-check-input" type="checkbox" id="gridCheck1">
						<label class="form-check-label" for="gridCheck1">
						  I agree to the Terms and Conditions, Privacy Policy and Cookie Policy. This includes the supply of dispensing services, which includes 35% of the value on prescription contact lenses and glasses only.
						</label> 
					  </div>
					</div>
					
					<button type="button" class="btn btn-primary btn-lg btn-block confirm_order_btn"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;CONTINUE TO PAYMENT</button>
					
					
				</div>
			
			</div>
			
			<!-- COl1 End -->
			
			
			<!-- Col2 Start -->
			<div class="col-sm-12 col-md-4 col-lg-4">
				
				<div class="col-sm-12 col-md-12 col-lg-12 basket_side_col">
				<!--Col1 -->
				
				<p class="basket_paragraph_heading">Summary</p>
				<hr>
				<p class="checkout_heading">Estimated Delivery Tue 23rd Jun</p>
					
					
				<table class="basket_side_tbl">
					<tr>
						<td><img src="images/Confirm Order/biomedics-55-evolution-asphere-thumb786-131-thumb.jpg" class="order_img"></td>
						<td class="basket_price checkout_txt">Biomedics 55 Evolution</td>
					</tr>
					
					
					<tr>
						<td class="checkout_txt">Right Eye -1 Box</td>
						<td class="basket_price checkout_txt">£3.95</td>
					</tr>
					
					<hr>
					
					
				</table>
				
				<table class="basket_side_tbl">
					<tr>
						<td><img src="images/Confirm Order/biomedics-55-evolution-asphere-thumb786-131-thumb.jpg" class="order_img"></td>
						<td class="basket_price checkout_txt">Biomedics 55 Evolution</td>
					</tr>
					
					
					<tr>
						<td class="checkout_txt">Right Eye -1 Box</td>
						<td class="basket_price checkout_txt">£3.95</td>
					</tr>
					
					<hr>
					
					
				</table>		
					
				<table class="basket_side_tbl">
					<tr>
						<td class="checkout_txt">Subtotal</td>
						<td class="basket_price checkout_txt">£25.80</td>
					</tr>
					
					
					<tr>
						<td class="checkout_txt">Delivery</td>
						<td class="basket_price checkout_txt">£3.95</td>
					</tr>
					
					<hr>
					
					<tr>
						<td class="basket_total_price_heading checkout_txt">Total To Pay</td>
						<td class="basket_total_price checkout_txt">£3.95</td>
					</tr>
					
				</table>
					
				
				
				<!-- Col1 End -->
				</div>
			</div>
			
			<!-- COl2 End -->
			
		</div>
	
	</div>
	
	
	<!-- Basket End -->
	
	
	
	
<?php include 'footer.php' ?>

	
</body>
</html>