<?php include 'Connection.php' ?>
<?php include 'login_check.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manage Address Book </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	
<?php include 'header.php' ?>
	
	<!--1st Row Start-->
<div class="container home_product_section">
	<div class="row">
    	
        
        <!-- Col01 Start -->
        <?php include 'customer-menu.php' ?>
		
		<!-- Col01 End -->
		<?php 
	$temp_id = $_SESSION['id'];
	$fetch_queryy = mysqli_query($conn,"SELECT * FROM customers where id=$temp_id AND active=1");
	while($roww=mysqli_fetch_array($fetch_queryy,MYSQLI_ASSOC)) {
		?>
	<!-- Product Section Start -->	
		
		<!-- Col2 STart -->
		<div class="col-sm-9 col-md-9 col-lg-9 my_address_col">
			<div class="col-sm-2 col-md-2 col-lg-2 product_question_col"><br></div>
			
			
			<!--Col1 Start -->
			<div class="col-sm-8 col-md-8 col-lg-8 product_question_col">
				<h5 class="my_address_heading">Your Address</h5>
				
				<!-- Table Start -->
				<div class="container-fluid bgcol2 myaddress_container">
					<form>
					  <div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*First Name</label>
						<div class="col-sm-8">
						  <input type="text" name="first_name" class="form-control myaddress_txt_box" id="inputPassword" placeholder="" value="<?php echo $roww['first_name']; ?>">
						</div>
					  </div>
					  <div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Last Name</label>
						<div class="col-sm-8">
						  <input type="text" name="last_name" class="form-control myaddress_txt_box" id="inputPassword" placeholder="" value="<?php echo $roww['last_name']; ?>">
						</div>
					  </div>
					
					   <div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Country</label>
						<div class="col-sm-8">
						  
							<select name="country_state" class="form-control myaddress_txt_box">
								<?php if($roww['country_state'] == "" || $roww['country_state'] == null) { ?>
							  <option selected="selected" value="">--select--</option>
								<option value="Albania">Albania</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Belgium">Belgium</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Channel Islands - Guernsey">Channel Islands - Guernsey</option>
								<option value="Channel Islands - Jersey">Channel Islands - Jersey</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Denmark">Denmark</option>
								<option value="Estonia">Estonia</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="Germany">Germany</option>
								<option value="Greece">Greece</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="Ireland">Ireland</option>
								<option value="Italy">Italy</option>
								<option value="Latvia">Latvia</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Malta">Malta</option>
								<option value="Netherlands">Netherlands</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Norway">Norway</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Spain">Spain</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
							  <?php } else {?>
							  <option value="<?php echo $roww['country_state']; ?>" selected="selected"><?php echo $roww['country_state']; ?></option>
								<option value="">--select--</option>
								<option value="Albania">Albania</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Belgium">Belgium</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Channel Islands - Guernsey">Channel Islands - Guernsey</option>
								<option value="Channel Islands - Jersey">Channel Islands - Jersey</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Denmark">Denmark</option>
								<option value="Estonia">Estonia</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="Germany">Germany</option>
								<option value="Greece">Greece</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="Ireland">Ireland</option>
								<option value="Italy">Italy</option>
								<option value="Latvia">Latvia</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Malta">Malta</option>
								<option value="Netherlands">Netherlands</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Norway">Norway</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Spain">Spain</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
							  <?php } ?>
							  
							</select>
							
						</div>
					  </div>
						
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Post Code</label>
						<div class="col-sm-4">
						  
						<input type="text" name="postal_code" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
							
						</div>
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">Find Address</label>
					  </div>
						
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Address Line 1</label>
						<div class="col-sm-8">
						  <input type="text" name="address1" class="form-control myaddress_txt_box" id="inputPassword" placeholder="" value="<?php 
								if($roww['address1'] == "" || $roww['address1'] == null) { 
									echo "";
							  } else { echo $roww['address1'];} ?>">
						</div>
				   </div>	
					
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">Address Line 2</label>
						<div class="col-sm-8">
						  <input type="text" name="address2" class="form-control myaddress_txt_box" id="inputPasswaddord" placeholder="" value="<?php 
								if($roww['address2'] == "" || $roww['address2'] == null) { 
									echo "";
							  } else { echo $roww['address2'];} ?>">
						</div>
					 </div>
						
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*City / Town</label>
						<div class="col-sm-8">
						  <input type="text" name="city_town" class="form-control myaddress_txt_box" id="inputPassword" placeholder="" value="<?php 
								if($roww['city_town'] == "" || $roww['city_town'] == null) { 
									echo "";
							  } else { echo $roww['city_town'];} ?>">
						</div>
					 </div>
						
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">County / State</label>
							<div class="col-sm-8">
						  		<input type="text" name="country_state" class="form-control myaddress_txt_box" id="inputPassword" placeholder="" value="<?php 
								if($roww['country_state'] == "" || $roww['country_state'] == null) { 
									echo "";
							  } else { echo $roww['country_state'];} ?>">
							</div>
				 			</div>		
				
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">Mobile</label>
								<div class="col-sm-8">
						  
								<input type="text" pattern="[0-9]{10,12}" maxlength="12" minlength="10" name="phone"  class="form-control myaddress_txt_box" id="inputPassword" placeholder="" value="<?php 
								if($roww['phone'] == "" || $roww['phone'] == null) { 
									echo "";
							  } else { echo $roww['phone'];} ?>">
							
								</div>
								<!--<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">Clear</label>-->
					 		 </div>		
						
							<!--<div class="form-group row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
								  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label myaddress_lbl" for="gridCheck1">
									  Make this My Billing Address
									</label>
								  </div>
								</div>
							</div>-->
						
						
							<div class="form-group row">
								<div class="col-sm-4"><br><!--Cancel--></div>
								<div class="col-sm-8">
								  <div class="form-check">
									<button type="button" class="btn btn-primary btn-lg btn-block myaddress_btn">UPDATE ADDRESS</button>

								  </div>
								</div>
							</div>
						
					</form>
			   </div>		
				
				<!-- Table End -->
				
				<h5 class="my_address_heading">My Delivery Address</h5>
				<p class="myaddress_lbl">
				No existing address found.
				</p>
			
			</div>
			
			
			<!-- COl1 End -->
			
			
			
			<!--Col2 Start --
			<div class="col-sm-6 col-md-6 col-lg-6 product_question_col">
				
				<h5 class="my_address_heading">Add Billing Address</h5>
				
				<!-- Table Start --
				<div class="container-fluid myaddress_container">
					<form>
					  <div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*First Name</label>
						<div class="col-sm-8">
						  <input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
						</div>
					  </div>
					  <div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Last Name</label>
						<div class="col-sm-8">
						  <input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
						</div>
					  </div>
					
					   <div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Country</label>
						<div class="col-sm-8">
						  
							<select class="form-control myaddress_txt_box">
							  <option>United Kingdom</option>
							</select>
							
						</div>
					  </div>
						
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Post Code</label>
						<div class="col-sm-4">
						  
						<input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
							
						</div>
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">Find Address</label>
					  </div>
						
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*Address Line 1</label>
						<div class="col-sm-8">
						  <input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
						</div>
				   </div>	
					
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">Address Line 2</label>
						<div class="col-sm-8">
						  <input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
						</div>
					 </div>
						
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">*City / Town</label>
						<div class="col-sm-8">
						  <input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
						</div>
					 </div>
						
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label myaddress_lbl">County / State</label>
							<div class="col-sm-8">
						  		<input type="password" class="form-control myaddress_txt_box" id="inputPassword" placeholder="">
							</div>
				 			</div>		
				
											
							<div class="form-group row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
								  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label myaddress_lbl" for="gridCheck1">
									  Make this My Billing Address
									</label>
								  </div>
								</div>
							</div>
						
						
							<div class="form-group row">
								<div class="col-sm-4">Cancel</div>
								<div class="col-sm-8">
								  <div class="form-check">
									<button type="button" class="btn btn-primary btn-lg btn-block myaddress_btn">Add Address</button>

								  </div>
								</div>
							</div>
						
					</form>
			   </div>		
				
				<!-- Table --
				
				<h5 class="my_address_heading">My Billing Address</h5>

				<p class="myaddress_lbl">
				No existing address found.
				</p>

				
			</div>
			
			
			<!-- COl2 End -->
			
			
			
		</div>

		<!-- Col2 End -->
		<?php } ?>
	</div>
	
</div>	
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>