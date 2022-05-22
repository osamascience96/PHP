<?php include 'Connection.php' ?>
<?php include 'login_check.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Priscription Verification</title>
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
		
	<!-- Product Section Start -->	
		
		<!-- Col2 STart -->
		<div class="col-sm-9 col-md-9 col-lg-9">

			<h5 class="myaccount_heading">Prescription Verification</h5>
			
			<div class="col-sm-12 col-md-12 col-lg-12 product_question_col password_col">
				
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				  <label class="form-check-label prescription_txt" for="exampleRadios1">
					 I confirm my prescription details are up to date and correct, thereby agreeing for Feel Good Contacts to process my order (to receive my lenses the next working day).
				  </label>
				</div>
				<div class="form-check prescription_div">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				  <label class="form-check-label prescription_txt" for="exampleRadios2">
					I need my prescription checked by uploading a prescription (this may delay my order by up to 3-5 working days).
				  </label>
				</div>
				
			
			</div>
			
			<div class="col-sm-12 col-md-12 col-lg-12 product_question_col prescription_add_col">
					<h5 class="myaccount_heading">PRESCRIPTION</h5>
					<p class="presc_txt">Enter your prescription below, or send it later.</p>
					<p class="presc_txt">All prescriptions will be checked by one of our opticians and verified for any potential errors or delays, and they may contact you if they need to discuss your details any further.</p>
				
				<div class="form-group row">
    				<label for="inputPassword" class="col-sm-2 col-form-label">Name:</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword" placeholder="june2020">
				</div>
					
				</div>
				
				
				
				<table class="table">
				  
				  <tbody>
					  
					  <tr>
					  <th scope="row"></th>
					  <td class="presc_txt">Sphere (SPH) ⓘ </td>
					  <td class="presc_txt"> Cylinder (CYL) ⓘ	</td>
					  <td class="presc_txt"> Axis ⓘ	</td>
					  <td class="presc_txt"> Addition (ADD) ⓘ </td>
					</tr>
					  
					  
					  <tr>
					  <th scope="row">Right</th>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					</tr>
					  
					  
					<tr>
					  <th scope="row">Distance</th>
					  <td>
						  <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td>
	   				  <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td>
						<input class="form-control form-control-sm" type="text" placeholder="">

					  </td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					</tr>
					<tr>
					  <th scope="row">Intermediate	</th>
					  <td>
						  <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td>
		    			 <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td><input class="form-control form-control-sm" type="text" placeholder=""></td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>	
					</tr>
					<tr>
					  <th scope="row">Near</th>
					  <td><select class="form-control form-control-sm">
						  <option>Default select</option>
						</select></td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td><input class="form-control form-control-sm" type="text" placeholder=""></td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>	
					</tr>
					  
					
					  
				  </tbody>
				</table>
				
				
				<table class="table">
				  
				  <tbody>
					  
					  
					  
					  <tr>
					  <th scope="row">Left</th>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					</tr>
					  
					  
					<tr>
					  <th scope="row">Distance</th>
					  <td>
						  <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td>
	   				  <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td>
						<input class="form-control form-control-sm" type="text" placeholder="">

					  </td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					</tr>
					<tr>
					  <th scope="row">Intermediate	</th>
					  <td>
						  <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td>
		    			 <select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td><input class="form-control form-control-sm" type="text" placeholder=""></td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>	
					</tr>
					<tr>
					  <th scope="row">Near</th>
					  <td><select class="form-control form-control-sm">
						  <option>Default select</option>
						</select></td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>
					  <td><input class="form-control form-control-sm" type="text" placeholder=""></td>
					  <td>
						<select class="form-control form-control-sm">
						  <option>Default select</option>
						</select>
					  </td>	
					</tr>
					  
					
					  
				  </tbody>
				</table>
				
				
				<div class="col-sm-12 col-md-12 product_question_col prescription_col">
					
					<div class="form-group row">
    					<label for="inputEmail3" class="col-sm-2 col-form-label">Pupil distance:	</label>
    					<div class="col-sm-4">
						<select class="form-control form-control-sm">
						  <option>select</option>
						</select>    
						</div>
 				   </div>
					
		
				
				</div>
				
				
				<!-- @nd COl -->
				<div class="col-sm-12 col-md-12 product_question_col prescription_col">
					
					<div class="form-group row">
    					
						<label for="inputEmail3" class="col-sm-2 col-form-label">Date </label>
						
    					<div class="col-sm-1 prescription_date_col">
							<select class="form-control form-control-sm">
							  <option>DD</option>
							</select>

						</div>
						
						<div class="col-sm-2 prescription_date_col">
							<select class="form-control form-control-sm">
							  <option>MONTH</option>
							</select>
														
						</div>
						
						<div class="col-sm-1 prescription_date_col">
							<select class="form-control form-control-sm">
							  <option>YY</option>
							</select>
														
						</div>
						
 				   </div>
					
		
				
				</div>
				<!-- 2nd COl -->
				
				<!-- Col3 -->
				
				<div class="col-sm-12 col-md-12 product_question_col prescription_col">
					
					<div class="form-group row">
    					<label for="inputEmail3" class="col-sm-2 col-form-label"> Information:</label>
    					<div class="col-sm-10">
						<textarea class="form-control" id="exampleFormControlTextarea1"></textarea>    
						</div>
 				   </div>
					
		
				
				</div>
				
				<!-- Col3 End -->
				
				
				<!-- Col4 -->
				
				<div class="col-sm-12 col-md-12 product_question_col prescription_col">
					
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
        I confirm that I've read and agree to the Terms and Conditions . I certify that the wearer is over 16 years old and that they are not registered blind or partially sighted. I also confirm that the prescription details above have been entered correctly and I am happy that no errors have been made.
      					  </label>
					</div>
					
				<button type="button" class="btn btn-primary btn-lg btn-block add_presc_btn">Add Prescription</button>
	
					
		
				
				</div>
				
				<!-- Col4 End -->
				
				
				
			
			</div>


		</div>

		<!-- Col2 End -->

	</div>
	
</div>	
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>