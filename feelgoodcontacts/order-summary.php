<?php include 'Connection.php' ?>
<?php include 'login_check.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Summary</title>
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

			<h5 class="myaccount_heading">Returns</h5>
			
			<div class="col-sm-12 col-md-12 col-lg-12 ordersummary_col">
				
				<h5 class="myaccount_heading">Looks like you haven't ordered anything, let's get you started…</h5>
				<button type="button" class="btn btn-primary btn-lg btn-block ordersummary_btn">Start Shopping</button>

			</div>	
			
			


		</div>

		<!-- Col2 End -->

	</div>
	
</div>	
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>