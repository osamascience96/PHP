<?php include 'Connection.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php include 'header.php' ?>
	
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 reglaze_main">
			<h2 class="reglaze_heading">REGLAZE</h2>
			<hr>
		<p>This is the process whereby the optical laboratory technician will put new lenses into your existing frames! Whether you've broken a lens or simply changed prescription, you don’t need to buy new glasses if your old frames are still in good condition.</p>
			<p><strong>
			Select the type of frame that you would like to send us for reglazing and then on next page select your lens options.
				</strong></p>
		</div>
		
		
	</div>	
	
	<div class="row reglaze_row_2">
		<?php
		$todo = 1;
		$fetch_query1 = mysqli_query($conn,"SELECT * FROM reglaze where active=1");
		while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
		if($todo != 2) { 
		?>
		
		<!-- Col 01 Start-->
		<div class="col-md-4 col-sm-4 col-lg-4 reglaze_option_div">
		<img src="images/Reglaze/<?php echo $row1['image'] ?>" class="reglaze_option_image">
		<h4 class="reglaze_option_title"><?php echo $row1['name'] ?></h4>
		<h3 class="reglaze_option_price">£<?php echo $row1['price'] ?></h3>
		<button type="button" class="btn btn-primary btn-md reglaze_option_btn">Choose Lenses</button>
		</div>
		<!-- Col 01 End-->
		<?php 
		}
		else {
		?>
		<!-- Col 02 Start-->
		<div class="col-md-4 col-sm-4 col-lg-4 reglaze_option_div2">
		<img src="images/Reglaze/<?php echo $row1['image'] ?>" class="reglaze_option_image">
		<h4 class="reglaze_option_title"><?php echo $row1['name'] ?></h4>
		<h3 class="reglaze_option_price">£<?php echo $row1['price'] ?></h3>
		<button type="button" class="btn btn-primary btn-md reglaze_option_btn">Choose Lenses</button>
		</div>
		<!-- Col 02 End-->
		<?php
			}
			$todo++;
		} 
		?>
		<!-- Col 03 Start-
		<div class="col-md-4 col-sm-4 col-lg-4 reglaze_option_div">
		<img src="images/Reglaze/full-rim-reglaze.png" class="reglaze_option_image">
		<h4 class="reglaze_option_title">Rimless Reglaze</h4>
		<h3 class="reglaze_option_price">£10.00</h3>
		<button type="button" class="btn btn-primary btn-md reglaze_option_btn">Choose Lenses</button>
		</div>
		<!-- Col 03 End-->
		
	</div>
	
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 reglaze_main">
			<p><strong>NOTE:</strong> If the frame is unable to withstand the high temperatures during the re-glazing process and subsequently breaks, this is at the customer's own risk. Especially older plastic frames which tend to have minute hairline fractures that are more susceptible to cause a frame breakage during this process.</p>

			<p>Nevertheless, this is an unlikely occurrence as all our lenses are refitted by experienced, qualified laboratory technicians using the latest Optical glazing machinery to an extremely high standard and to the same quality you would expect from your local Optician.</p>

			<p>If you have a question about the re-glaze process, please feel free to contact our customer service department: Tel: 0208 150 1950, Fax: 0208 150 1950 or e-mail: info@primeglasses.com</p>

			<p>It is our company policy NOT to refund or exchange any re-glazed product, unless the lenses have a manufacturing defect.</p>
		</div>
		
		
	</div>
	
</div>


	

<?php include 'footer.php' ?>
