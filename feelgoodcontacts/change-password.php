<?php include 'Connection.php' ?>
<?php include 'login_check.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
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

			<h5 class="myaccount_heading">Change Password</h5>
			
			<div class="col-sm-12 col-md-12 col-lg-12 product_question_col password_col">
				
					
				  <div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label password_txt">Current Password</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control password_input_lbl" id="inputEmail3" placeholder="abc@gmail.com">
					</div>
				  </div>
					
				  <div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label password_txt">New Password</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control password_input_lbl" id="inputPassword3" placeholder="">
					</div>
				  </div>
					
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label password_txt">Confirm Password</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control password_input_lbl" id="inputPassword3" placeholder="">
					</div>
				  </div>
				  
				<button type="button" class="btn btn-primary btn-lg btn-block password_btn">
					Save Password
				</button>  
				
			
			</div>


		</div>

		<!-- Col2 End -->

	</div>
	
</div>	
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>