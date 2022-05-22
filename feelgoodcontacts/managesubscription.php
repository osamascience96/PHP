<?php include 'Connection.php' ?>
<?php include 'login_check.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Details</title>
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

			<h5 class="myaccount_heading">Communication Preferences</h5>
			<!-- 1st Row -->
			
			<div class="col-sm-12 col-md-12 col-lg-12 product_question_col subscription_main_col">
				<!-- Col1 -->
				<div class="col-sm-6 col-md-6 col-lg-6 product_question_col subscription_sub_col1 subscription_main_col">
					
					<p class="subscription_txt1"><b>Offers & Promotions</b></p>
					<p class="subscription_txt2">
					I'd like to receive<br>
					<b>money-saving offers and promotions:</b>
					</p>
			
					<div class="form-check form-check-inline subscription_radio_option">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes, I'm in</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No thank you</label>
					</div>
					
					
				</div>
				
				<!-- Col1 -->
				
				
				
				<!-- Col1 -->
				<div class="col-sm-6 col-md-6 col-lg-6 product_question_col subscription_sub_col2">
					
					<p class="subscription_txt1"><b>Health Advice & Tips </b></p>
					<p class="subscription_txt2">
					I'd like to receive<br>
					<b>health advice & tips:</b>
					</p>
			
					<div class="form-check form-check-inline subscription_radio_option">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Yes, I'm in</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">No thank you</label>
					</div>
					
				</div>
				
				<!-- Col1 -->
				
			</div>
			
			<!-- 1st Row -->
			
			<!-- 2nd Row -->
			<div class="col-sm-12 col-md-12 col-lg-12 product_question_col subscription_col2">
			
				<p class="subscription_txt1"><b>Reminder to Re-order </b></p>
				
				<p>Please tick:</p>
				
				<form class="form-inline">
					
					<div class="form-check mb-2 mr-sm-2">
    					<input class="form-check-input subscription_checkbox" type="checkbox" id="inlineFormCheck">
						<label class="form-check-label" for="inlineFormCheck">
						  Email
						</label>
  					</div>
  						<label class="sr-only subscription_input_txt" for="inlineFormInputName2">Email</label>
  						<input type="email" class="form-control mb-2 mr-sm-2 subscription_input_box" id="inlineFormInputName2" placeholder="Email">


				</form>
				
				<form class="form-inline subscription_form">
					
					<div class="form-check mb-2 mr-sm-2">
    					<input class="form-check-input subscription_checkbox" type="checkbox" id="inlineFormCheck">
						<label class="form-check-label" for="inlineFormCheck">
						  SMS
						</label>
  					</div>
  						<label class="sr-only subscription_input_txt" for="inlineFormInputName2">SMS</label>
  						<input type="text" class="form-control mb-2 mr-sm-2 subscription_input_box2" id="inlineFormInputName2" placeholder="">


				</form>
			
			</div>
			
			
			<!-- 2nd Row End -->
			

		</div>

		<!-- Col2 End -->

	</div>
	
</div>	
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>