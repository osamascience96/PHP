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
		<?php 
		$temp_id = $_SESSION['id'];
	$fetch_queryy = mysqli_query($conn,"SELECT * FROM customers where id=$temp_id AND active=1");
	while($roww=mysqli_fetch_array($fetch_queryy,MYSQLI_ASSOC)) {
		?>
		<!-- Col2 STart -->
		<div class="col-sm-9 col-md-9 col-lg-9">
			<form method="post" action="">
			<h5 class="myaccount_heading">Personal Details</h5>
			
			   <div class="col-sm-12 col-md-12 col-lg-12 product_question_col detail_main_col">
				         <!-- Col1 Start -->
				<div class="col-sm-12 col-md-12 col-lg-6 product_question_col">
					
					<div class="form-group row">
						<label for="inputPassword" class="col-4 col-form-label detail_lbl">*First Name</label>

						<div class="col-8">
						  <input type="text" name="first_name" class="form-control detail_input" id="inputPassword" placeholder="<?php echo $roww['first_name']; ?>">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputPassword" class="col-4 col-form-label detail_lbl">*Last Name</label>

						<div class="col-8">
						  <input type="text" name="last_name" class="form-control detail_input" id="inputPassword" placeholder="<?php echo $roww['last_name']; ?>">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputPassword" class="col-4 col-form-label detail_lbl">*Gender</label>

						<div class="col-8">
						  <select class="form-control detail_input" id="exampleFormControlSelect1" name="gender">
							  <?php if($roww['gender'] == "" || $roww['gender'] == null) { ?>
							  <option value="" selected>Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							  <?php } else {?>
							  <?php if($roww['gender'] == "Male") { ?>
							  <option value="">Select Gender</option>
							  <option value="Male" selected>Male</option>
							  <option value="Female">Female</option>
							  <?php } else {?>
							  <option value="">Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female" selected>Female</option>
							  <?php }?>
							  <?php } ?>
						</select>
						</div>
					</div>
					
					
					
					
				   </div>
				<!-- Col1 Start -->
				
				<!-- Col2 Start -->
				<div class="col-sm-6 col-md-6 col-lg-6  product_question_col">
					
					<div class="col-sm-12 col-md-12 col-lg-12  product_question_col">
					
					<div class="form-group row">
						<label for="inputPassword" class="col-4 col-form-label detail_lbl">*Email</label>

						<div class="col-8">
						  <input type="email" name="email" class="form-control detail_input" id="inputPassword" placeholder="<?php echo $roww['email']; ?>" >
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputPassword" class="col-4 col-form-label detail_lbl">*Mobile</label>

						<div class="col-8">
							
							
							
							<div class="" style="width:100%;float:left;margin-left:1%;margin-right:1%;">
								  <input type="text" pattern="[0-9]{10,12}" maxlength="12" minlength="10" name="phone" class="form-control detail_input" id="inputEmail3" placeholder="<?php 
								if($roww['phone'] == "" || $roww['phone'] == null) { 
									echo "0123456789";
							  } else { echo $roww['phone'];} ?>" >
							</div>
							
						</div>
					</div>
					
					<!--<div class="form-group row">
						<label for="inputPassword" class="col-4 col-form-label detail_lbl">*Gender</label>

						<div class="col-8">
						 
							<div class="" style="width:25%;float:left;">
								      <input type="text" class="form-control detail_input" id="inputEmail3" placeholder="44">

							</div> 
							
							<div class="" style="width:73%;float:left;margin-left:1%;margin-right:1%;">
								  <input type="text" class="form-control detail_input" id="inputEmail3" placeholder="">
							</div>
							
							
							
						</div>
					</div>-->
					
					
					<!--<div class="form-group row">
						
						<div class="col-12">
						  	
							<div class="" style="width:60%;float:left;">
								<label for="inputPassword" class="col-form-label detail_lbl">*How often do you wear lenses?</label>

							</div> 
							
							<div class="" style="width:38%;float:left;margin-left:1%;margin-right:1%;">
								<select class="custom-select my-1 mr-sm-2 detail_input" id="inlineFormCustomSelectPref">
									<option selected>Select</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							
						</div>
					</div>-->
					
				</div>
					
					
				<?php } ?>	
				</div>
				<!-- Col2 Start -->
				   
		<!-- Button Col Start -->
			
			<div class="col-sm-12 col-md-12 col-lg-12 detail_btn_col product_question_col">
					
				<button type="submit" name="personal_detail" class="btn btn-primary btn-lg btn-block detail_btn">Save</button>

			
			</div>
			
			
		<!-- Button Col End -->			   
				   
				
	</div>
			
		
			</form>
		</div>
	</div>
	</div>
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>