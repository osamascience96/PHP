<?php include 'Connection.php' ?>
<?php include 'login_check.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Optician Advices</title>
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

			<h5 class="optical_advice_heading">Optical Advice</h5>
			<hr>
			<p>
			To email our helpful customer service team please click here, or alternatively you can complete the form below. Please provide as much detail as possible in your question. The more detailed your question, the increased likelihood we'll be able to provide a comprehensive answer. (Please note there is a 500 word limit)
			</p>
			
			<p>
			All questions will receive a response within 1-2 working days (excluding public holidays). The response will be one of the following:
			</p>
			
			<ul>
				<li>
				An answer to your question
				</li>
				
				<li>
				A referral to an answer of a question that has already been asked
				</li>
	
				<li>
				A recommendation to discuss the question with your optician because we were unable to answer the question
				</li>
				
				<li>
				To speak to our customer service team instead, please call us on 0800 458 2090 or email us at cs@feelgoodcontacts.com.
				</li>
			</ul>
			
			<form>
			  <div class="form-group">
				<input type="text" class="form-control optician_text_box" id="exampleFormControlInput1" placeholder="My Name">
			  </div>
			  <div class="form-group">
				<input type="email" class="form-control optician_text_box" id="exampleFormControlInput1" placeholder="abc@gmail.com">
			  </div>				

			  <div class="form-group optician_text_box">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
				
			<button type="button" class="btn btn-primary btn-lg btn-block optician_btn">Submit</button>
	
			</form>
			
			


		</div>

		<!-- Col2 End -->

	</div>
	
</div>	
		
		
<?php include 'footer.php' ?>		
	
</body>
</html>