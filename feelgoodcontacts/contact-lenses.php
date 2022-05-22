<?php include 'Connection.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Lenses</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
<?php include 'header.php' ?>
	
	<!--1st Row Start-->
<div class="container home_product_section">
	<div class="row">
    	
        
        <!-- Col01 Start -->
        <div class="col-md-3 col-sm-3 col-lg-3 contact_lense_aside">
        	<div class="accordion" id="accordionExample">
			  <div class="card">
				<div class="card-header" id="headingOne">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Brands of Contact Lenses
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					  
					<?php 
				$fetch_query6 = mysqli_query($conn,"SELECT * FROM brands_of_contact_lenses where id!=0 AND active=1");
				while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
				?>  
					<li class="brand_contactlense_category_ul_list">
					<a href="contact-lenses.php?bocl=<?php echo $row6['id']; ?>" class="brand_contactlense_category_ul_list_link">
					<?php echo $row6['Brands_Name']; ?>
					</a>	
					</li>
                    
                 <?php } ?>
					
				  </ul>
					
				</div>
			  </div>
				
				
			<!-- Category Two Start -->
					
				<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Types of Contact Lenses
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					  
					<?php 
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND active=1");
				while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) {
				?>
					<li class="brand_contactlense_category_ul_list">
					<a href="contact-lenses.php?pm=<?php echo $row5['id']; ?>" class="brand_contactlense_category_ul_list_link">
					<?php echo $row5['Contact_Lense_Type']; ?>	
					</a>	
					</li>
                    <?php } ?>
                    
					<hr class="category_underline">  
					<li class="brand_contactlense_category_ul_list">
					<a href="contact-lenses.php?pm=10" class="brand_contactlense_category_ul_list_link">
					Cheap Contact Lenses
					</a>	
					</li>
					<li class="brand_contactlense_category_ul_list">
					<a href="contact-lenses.php?pm=11" class="brand_contactlense_category_ul_list_link">
					No Prescription Lenses	
					</a>	
					</li>
					
					
				  </ul>
					
				</div>
			  </div>
			
					
				
			<!-- Category Two End -->
				
			<!-- Category Three Start -->
				
			<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Shop By Manufacturer
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					  
					<?php 
						$fetch_query4 = mysqli_query($conn,"SELECT * FROM shop_by_manufacturer where id!=0 AND active=1");
					while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) {
					?>
						<li class="brand_contactlense_category_ul_list">
						<a href="contact-lenses.php?sbm=<?php echo $row4['id']; ?>" class="brand_contactlense_category_ul_list_link">
						<?php echo $row4['Manufacturer_Name'];	?>
						</a>	
						</li>
						
					<?php } ?>	
				  </ul>
					
				</div>
			  </div>
				
				
			<!-- Category Three End -->
				
			<!-- Category Four Start -->
				
				<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Optician Brands </button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					<?php 
						$fetch_query3 = mysqli_query($conn,"SELECT * FROM optician_brands where id!=0 AND active=1");
						while($row3=mysqli_fetch_array($fetch_query3,MYSQLI_ASSOC)) {
					?>
						<li class="brand_contactlense_category_ul_list">
						<a href="optician_brands.php?ob=<?php echo $row3['id']; ?>" class="brand_contactlense_category_ul_list_link">
						<?php echo $row3['Optician_Brands']; ?>	
						</a>	
						</li>
					<?php } ?>
				  </ul>
				</div>
			  </div>
			<!-- Category Four End -->
			</div>

        </div>
		
		<!-- Col01 End -->
		
	<!-- Product Section Start -->	
		
	<!-- Col2 STart -->
	<div class="col-sm-12 col-md-9 col-lg-9 bgcol1 contact_shop_col2">
				
		<!-- Main Heading Start -->
		<div class="col-sm-12 col-md-12 col-lg-8 bgcol1 contact_lense_shop_heading_col">
			<h5 class="contact_lense_shop_heading">Contact Lenses</h5>
		</div>
		<!-- Main Heading Start -->
		
		<!-- Main tab Start -->
	<div class="col-sm-12 col-md-12 col-lg-4 contac_lense_shop_tab_col">
			<ul class="nav nav-tabs contac_lense_shop_tab_col_ul" id="myTab" role="tablist">
				  <li class="nav-item contac_lense_shop_tab_col_ul_list">
					<a class="nav-link active contac_lense_shop_tab_col_ul_link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product List</a>
				  </li>
				  <li class="nav-item contac_lense_shop_tab_col_ul_list">
					<a class="nav-link contac_lense_shop_tab_col_ul_link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Description</a>
				  </li>
				  
			</ul>

		
		
	</div>
		<!-- Main Tab End -->
		
		<!-- Description Tab Start -->
		<!-- Tab1 Start -->
	<div class="col-sm-12 col-md-12 col-lg-12 tab_description_col">
		
		 <div class="tab-content tab_description" id="myTabContent">
			 
			  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				
				  <!-- Drop Down Filter Start -->	
					<div class="col-sm-12 col-md-12 col-lg-12 contact_lense_shop_filter_col bgcol3">

						<!-- Col1 -->	
						<div class="col-sm-4 col-md-4 col-lg-4 bgcol1 contact_lense_filter_col1">	

							<p class="Contact_filter_heading">Sort By</p>
							<select class="form-control form-control-sm contact_lense_filter" name="popular" onChange="window.open(this.value, '_self')">
								<option class="contact_lense_filter_option" value="contact-lenses.php">Popular</option>
                                <?php
								//0
								if(isset($_GET['pm']) && isset($_GET['pm2'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&pm2=<?php echo $_GET['pm2']; ?>&price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&pm2=<?php echo $_GET['pm2']; ?>&price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&pm2=<?php echo $_GET['pm2']; ?>&price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&pm2=<?php echo $_GET['pm2']; ?>&price=1">Price High To Low</option>	
										<?php }

									}
								//0.5
								else if(isset($_GET['pm']) && isset($_GET['price'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=1">Price High To Low</option>	
										<?php }
								}
								//1
								else if(isset($_GET['Product_merge'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $_GET['Product_merge']; ?>&price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $_GET['Product_merge']; ?>&price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $_GET['Product_merge']; ?>&price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $_GET['Product_merge']; ?>&price=1">Price High To Low</option>	
										<?php }

									}
								//2
								else if(isset($_GET['pm'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm']; ?>&price=1">Price High To Low</option>	
										<?php }

									}
								//3
								else if(isset($_GET['bocl'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php echo $_GET['bocl']; ?>&price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php echo $_GET['bocl']; ?>&price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php echo $_GET['bocl']; ?>&price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php echo $_GET['bocl']; ?>&price=1">Price High To Low</option>	
										<?php }

									}
								//4
								else if(isset($_GET['sbm'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm']; ?>&price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm']; ?>&price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm']; ?>&price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm']; ?>&price=1">Price High To Low</option>	
										<?php }

									}
								//8
								else if(isset($_GET['price'])) {
									if($_GET['price']==2) {	
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?price=2" selected>Price Low To High</option>
									<?php }
									else {?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?price=2">Price Low To High</option>

								<?php	}
								if($_GET['price']==1) {	
								?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?price=1" selected>Price High To Low</option>	
									<?php 
										}
										else { ?>

											<option class="contact_lense_filter_option" value="contact-lenses.php?price=1">Price High To Low</option>	
										<?php }

									}
								else {?>
                                <option class="contact_lense_filter_option" value="contact-lenses.php?price=2">Price Low To High</option>
                                  <option class="contact_lense_filter_option" value="contact-lenses.php?price=1">Price High To Low</option>	
								<?php
								}
								?>
							
								
							</select>

						</div>	
							<!-- Col1 End -->

							<!-- Col2 Start -->
						<div class="col-sm-4 col-md-4 col-lg-4 bgcol1 contact_lense_filter_col1">
						<p class="Contact_filter_heading">Filter By</p>

							<select class="form-control form-control-sm contact_lense_filter" name="all" onChange="window.open(this.value, '_self')" target="self">
                            <?php
							if(isset($_GET['pm']) && isset($_GET['pm2'])) {
								?>
								<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm'] ?>&pm2=<?php echo $_GET['pm2'] ?>">
								<?php
								$temp_tocl = $_GET['pm2'];
								$fetch_queryi = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_tocl AND active=1");
								while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
								echo $rowi['Contact_Lense_Type'];
								}
								?>
								</option>
								<?php
								//Sub IF
								if($_GET['pm']==1){ //daily
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1">All</option>
								<?php if($_GET['pm2'] == 5) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1&pm2=5">Astigmatism/Toric</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 4) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1&pm2=4">Coloured</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 6) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1&pm2=6">Multifocal</option>
								<?php } ?>
									<?php
								}
								else if($_GET['pm']==3){//two weekly
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3">All</option>
								<?php if($_GET['pm2'] == 5) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3&pm2=5">Astigmatism/Toric</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 8) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3&pm2=8">Extended Wear</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 6) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3&pm2=6">Multifocal</option>
								<?php } ?>
									<?php
								}
								else if($_GET['pm']==2){//monthly
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2">All</option>
								<?php if($_GET['pm2'] == 5) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=5">Astigmatism/Toric</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 4) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=4">Coloured</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 6) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=6">Multifocal</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 8) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=8">Extended Wear</option>
								<?php } ?>
									<?php
								}
								else if($_GET['pm']==5){//toric
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5">All</option>
								<?php if($_GET['pm2'] == 3) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=3">Two Weekly</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 1) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=1">Daily</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 8) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=8">Extended Wear</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 2) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=2">Monthly</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 6) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=6">Multifocal</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 7) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=7">Yearly</option>
								<?php } ?>
									<?php
								}
								else if($_GET['pm']==6){//multifocal
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6">All</option>
								<?php if($_GET['pm2'] == 5) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=5">Astigmatism/Toric</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 3) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=3">Two Weekly</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 1) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=1">Daily</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 8) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=8">Extended Wear</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 2) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=2">Monthly</option>
								<?php } ?>
									<?php
								}
								else if($_GET['pm']==4){//colours
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=4">All</option>
								<?php if($_GET['pm2'] == 1) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=4&pm2=1">Daily</option>
								<?php } ?>
								<?php if($_GET['pm2'] == 2) {} else { ?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=4&pm2=2">Monthly</option>
								<?php } ?>
									<?php
								}
								?>
								<?php
								
							}
							
							else if(isset($_GET['bocl']) && isset($_GET['pm2'])) {
								?>
								<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php echo $_GET['bocl'] ?>&pm2=<?php echo $_GET['pm2'] ?>">
								<?php
								$temp_tocl = $_GET['pm2'];
								$fetch_queryi = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_tocl AND active=1");
								while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
								echo $rowi['Contact_Lense_Type'];
								}
								?>
								</option>
								<?php
									$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND id!=$temp_tocl AND active=1");
									?>
									<option class="contact_lense_filter_option?bocl=<?php echo $_GET['bocl'] ?>" value="contact-lenses.php">All</option>
									<?php
									while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
									?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php echo $_GET['bocl'] ?>&pm2=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
									<?php
									}	
								
							}
							else if(isset($_GET['sbm']) && isset($_GET['pm2'])) {
								?>
								<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm'] ?>&pm2=<?php echo $_GET['pm2'] ?>">
								<?php
								$temp_tocl = $_GET['pm2'];
								$fetch_queryi = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_tocl AND active=1");
								while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
								echo $rowi['Contact_Lense_Type'];
								}
								?>
								</option>
								<?php
									$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND id!=$temp_tocl AND active=1");
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm'] ?>">All</option>
									<?php
									while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
									?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php echo $_GET['sbm'] ?>&pm2=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
									<?php
									}	
								
							}
							else if(isset($_GET['bocl'])) {
								?>
								<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
								<?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND active=1");
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="contact-lenses.php?bocl=<?php $_GET['bocl']?>&pm2=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
                                <?php
									}	
							}
							else if(isset($_GET['sbm'])) {
								?>
								<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
								<?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND active=1");
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="contact-lenses.php?sbm=<?php $_GET['sbm']?>&pm2=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
                                <?php
									}	
							}
							else if(isset($_GET['pm'])) {
								if($_GET['pm']==1){ //daily
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1&pm2=5">Astigmatism/Toric</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1&pm2=4">Coloured</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=1&pm2=6">Multifocal</option>
									<?php
								}
								else if($_GET['pm']==3){//two weekly
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3&pm2=5">Astigmatism/Toric</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3&pm2=8">Extended Wear</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=3&pm2=6">Multifocal</option>
									<?php
								}
								else if($_GET['pm']==2){//monthly
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=5">Astigmatism/Toric</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=4">Coloured</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=6">Multifocal</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=2&pm2=8">Extended Wear</option>
									<?php
								}
								else if($_GET['pm']==5){//toric
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=3">Two Weekly</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=1">Daily</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=8">Extended Wear</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=2">Monthly</option>2
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=6">Multifocal</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=5&pm2=7">Yearly</option>
									<?php
								}
								else if($_GET['pm']==6){//multifocal
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=5">Astigmatism/Toric</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=3">Two Weekly</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=1">Daily</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=8">Extended Wear</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=6&pm2=2">Monthly</option>
									<?php
								}
								else if($_GET['pm']==4){//colours
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=4&pm2=1">Daily</option>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=4&pm2=2">Monthly</option>
									<?php
								}
								else {
									?>
								<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm'] ?>">
								<?php
								$temp_tocl = $_GET['pm'];
								$fetch_queryi = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_tocl AND active=1");
								while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
								echo $rowi['Contact_Lense_Type'];
								}
								?>
								</option>
								<?php
									$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND id!=$temp_tocl AND active=1");
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $_GET['pm'] ?>">All</option>
									<?php
									while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
									?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?pm=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
									<?php
									}
								}
								?>
								<?php
							}
                            else if(isset($_GET['Product_merge'])) {
							?>
								<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $_GET['Product_merge'] ?>">
								<?php
								$temp_tocl = $_GET['Product_merge'];
								$fetch_queryi = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_tocl AND active=1");
								while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
								echo $rowi['Contact_Lense_Type'];
								}
								?>
								</option>
								<?php
									$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND id!=$temp_tocl AND active=1");
									?>
									<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
									<?php
									while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
									?>

									<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
									<?php
									}	
								?>
                            
                            
							<?php						
							} 
							else {
								?>
								<option class="contact_lense_filter_option" value="contact-lenses.php">All</option>
								<?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id!=0 AND active=1");
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="contact-lenses.php?Product_merge=<?php echo $rowii['id'] ?>"><?php echo $rowii['Contact_Lense_Type'] ?></option>
                                <?php
									}	
								 } ?>
							</select>
						</div>
							<!-- Col2 End -->
						<!-- Col3 Start -->
						<div class="col-sm-4 col-md-4 col-lg-4 bgcol1 contact_lense_filter_col1">
						
						</div>
							<!-- Col3 End -->
					</div>
		<!-- Drop Down Filter End -->
				  
			<!-- Contact Lens Shop button Start -->
		
		<div class="col-sm-12 col-md-12 col-lg-12 bgcol1 contact_lense_shop_col contact_lense_col">
		<?php if(isset($_GET['pm'])) { ?>
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                     <a href="contact-lenses.php?pm=1" class="t-none">
							<button type="button" class="btn btn-primary btn-lg btn-block 
														 <?php 
														 if(isset($_GET['pm']) && $_GET['pm'] == 1) {
															 echo "contact_lense_btn_active";
														 }
														 else {
															 echo "contact_lense_btn";
														 }
														 
														 ?>">DAILY</button>
                      </a>
					</div>
				<!-- Col1 End -->


				<!-- Col2 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="contact-lenses.php?pm=3" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block <?php 
														 if(isset($_GET['pm']) && $_GET['pm'] == 3) {
															 echo "contact_lense_btn_active";
														 }
														 else {
															 echo "contact_lense_btn";
														 }
														 
														 ?>">TWO WEEKLY</button>
                        </a>
					</div>
				<!-- Col2 End -->

				<!-- Col3 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="contact-lenses.php?pm=2" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block <?php 
														 if(isset($_GET['pm']) && $_GET['pm'] == 2) {
															 echo "contact_lense_btn_active";
														 }
														 else {
															 echo "contact_lense_btn";
														 }
														 
														 ?>">MONTHLY</button>
                        </a>
					</div>
				<!-- Col3 End -->

				<!-- Col4 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="contact-lenses.php?pm=5" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block <?php 
														 if(isset($_GET['pm']) && $_GET['pm'] == 5) {
															 echo "contact_lense_btn_active";
														 }
														 else {
															 echo "contact_lense_btn";
														 }
														 
														 ?>">TORIC</button>
                        </a>
					</div>
				<!-- Col4 End -->

				<!-- Col5 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="contact-lenses.php?pm=6" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block <?php 
														 if(isset($_GET['pm']) && $_GET['pm'] == 6) {
															 echo "contact_lense_btn_active";
														 }
														 else {
															 echo "contact_lense_btn";
														 }
														 
														 ?>">MULTI FOCAL</button>
                        </a>
					</div>
				<!-- Col5 End -->

				<!-- Col6 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="contact-lenses.php?pm=4" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block <?php 
														 if(isset($_GET['pm']) && $_GET['pm'] == 4) {
															 echo "contact_lense_btn_active";
														 }
														 else {
															 echo "contact_lense_btn";
														 }
														 
														 ?>">COLOURS</button>
                        </a>
					</div>
				<!-- Col6 End -->
			<?php } ?>
		
		</div>		  
		
		<!-- Contact Lens Shop button End -->	  
				  
		
				  
				  
		<!-- Product Section Start -->
		
			 <!-- Col02 Start -->
        <div class="col-md-12 col-sm-12 col-lg-12 contact_lense_col">
			
			<div class="row">
			
				
				<?php 
				/*if(isset($_GET['bocl'])) {
					$bocl = $_GET['bocl'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses=$bocl AND active=1");
				}
				else if(isset($_GET['tocl'])) {
					$tocl = $_GET['tocl'];				
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Contact_Lenses=$tocl AND active=1");
				}
				else if(isset($_GET['sbm'])) {
					$sbm = $_GET['sbm'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Shop_By_Manufacturer=$sbm AND active=1");
				}
				else if(isset($_GET['ob'])) {
					$ob = $_GET['ob'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Optician_Brands=$ob AND active=1");
				}
				else if(isset($_GET['price'])) {
					$pr = $_GET['price'];
					if($pr == 1) {
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses!=0 AND active=1 ORDER BY price DESC");	
					}
					else if($pr == 2) {
							$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses!=0 AND active=1 ORDER BY price ASC");	
					}
					else {
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses!=0 AND active=1");
					}
				}
				else {
				$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses!=0 AND active=1");
				}*/
				
				
				//test filter code
				//$query = "SELECT * FROM category_merge";
				
				$filtered_get = array_filter($_GET); // removes empty values from $_GET
				$keynames = array_keys($filtered_get);
				
				//if($keynames[0] == "Product_merge") 
					//echo "match";
				

				if (count($filtered_get)) { // not empty
					//$query .= " WHERE";

					 // make array of key names from $filtered_get
					$t=0;
					$my_val2 = 0;
					foreach($filtered_get as $key => $value)
					{
					    //for val 2
						
					    if($keynames[0] == "pm" && isset($keynames[1]) == "pm2") {
							
							if($my_val2 == 0) {
							$query = "SELECT id, Product_merge, category_merge.Product_id
							FROM category_merge
							INNER JOIN(
							SELECT DISTINCT Product_id
							FROM category_merge WHERE Product_merge=".$_GET['pm']. " OR " . "Product_merge=".$_GET['pm2'].
							" AND Type='cl' AND  active=1 GROUP BY Product_id
							HAVING COUNT(id) >1
							)temp ON category_merge.Product_id= temp.Product_id";
							}
							$my_val2++;
							$t=0;
						}
						else if($keynames[0] == "pm") {
							$query = "SELECT * FROM category_merge";
							$query .= " WHERE";
							$query .= " Product_merge=$value AND";
							$query .= " Type='cl' AND  active=1";
							$t=0;
						}
						else if($keynames[0] == "Product_merge") {
							$query = "SELECT * FROM category_merge";
							$query .= " WHERE";
							$query .= " $key=$value AND";
							$query .= " Type='cl' AND  active=1";
							$t=0;
						}
						else if($keynames[0] == "bocl") {
							$query = "SELECT * FROM product";
							$query .= " WHERE";
							$query .= " Brands_of_Contact_Lenses=$value AND";
							$query .= " active=1";
							$t=1;
						}
						else if($keynames[0] == "sbm") {
							$query = "SELECT * FROM product";
							$query .= " WHERE";
							$query .= " Shop_by_Manufacturer=$value AND";
							$query .= " active=1";
							$t=1;
						}
						else {
						}
						
						 /*if (count($filtered_get) > 1 && (count($filtered_get) > $key)) { // more than one search filter, and not the last
						  //$query .= " AND";
						   if($t==0) { $query .= " $key=$value OR"; }
						   else { $query .= " Product_merge=$value AND"; }
					   }
						else if (count($filtered_get) <= 1 && (count($filtered_get) > $key)) { // more than one search filter, and not the last
						  $query .= " $key=$value AND";
						   //if($t==0) { $query .= " $key=$value OR"; }
						  // else { $query .= " Product_merge=$value AND"; }
					   } else {}
						$t++;*/
					}
					//$query .= " Type='cl' AND  active=1";
				}else{
					$t=0;
					$query = "SELECT DISTINCT * FROM `category_merge` LEFT JOIN product ON category_merge.Product_id = product.id";
				}
					//el se 
						//$query .= " WHERE Type='cl' AND  active=1";
				
				// if the count above is zero, then 
				// select the distinct query 
				
				// echo $query;	
				$tee = 0;
				$wez = mysqli_query($conn,$query);
				while($pm=mysqli_fetch_array($wez,MYSQLI_ASSOC)) { 
				if($t==1) {//for column table name change according to given condition
				$temp_range = $pm['id'];
				}
				else if($t==0) {
					
					if($tee == 0) {
						if($pm['Product_id'] == $pm['Product_id']) {
							$temp_range = 0;
						}
					}
					else {
					$temp_range = $pm['Product_id'];}
					$tee++;
					
				}
			$fetch_query = mysqli_query($conn,"SELECT * FROM product WHERE id=$temp_range AND Brands_of_Contact_Lenses!=0 AND active=1 ");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
				?>
				<!--Col1-->
				<div class="col-md-6 col-sm-6 col-lg-4 product_card_col" >
					<div class="product_card col-md-12 col-sm-12 col-lg-12 col_pad_none">
                    <form action="" method="post">
                    <input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row['Price']; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>" />
            <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>" />
            <?php 
			if(!empty($_SESSION['favourite_cart']))
						{
						foreach($_SESSION['favourite_cart'] as $keys => $values) 
						{
							if($values['item_id'] == $row['id']) {
								
							
				  		?>
					<button type="submit" name="add_to_fav" class="btn btn-danger product_fav_button"><i class="far fa-heart"></i></button>
                    
                    
                    <?php 
							}
							else {
								?>
                                <button type="submit" name="add_to_fav" class="btn btn-outline-danger product_fav_button"><i class="far fa-heart"></i></button>
                                <?php
							}
						}
					}
					else {
						?>
                        <button type="submit" name="add_to_fav" class="btn btn-outline-danger product_fav_button"><i class="far fa-heart"></i></button>
					<?php 	
					}
					?>
                    </form>
					<a href="product.php?product_id=<?php  echo  $row['order_number'];?>">
					<img id="prod_image" src="images/Products/<?php echo $row['image']; ?>" class="product_image" >
						</a>
						<div class="review_div col-md-12 col-sm-12 col-lg-12 ">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						
						<span class="review_text">365 Reviews</span>
						</div>
						
						<div class="product_colors_div col-md-12 col-sm-12 col-lg-12">
							<!--<div class="product_colors_div2">
							<i class="fas fa-circle" style="color:#ff3; font-size:20px;"></i>
							<i class="fas fa-circle" style="color:#005EFF;font-size:20px;"></i>
							<i class="fas fa-circle" style="color:#0cd;font-size:20px;"></i>
							<i class="fas fa-circle" style="color:#ff8009;font-size:20px;"></i>
							<i class="fas fa-circle" style="color:#0cf;font-size:20px;"></i>
							</div>-->
						</div>
						
						<div class="product_title_container col-md-12 col-sm-12 col-lg-12">
							
							<div class="col-md-9 col-sm-9 col-lg-9 product_title_div1">
							<a class="product_card_title_a" href="product.php?product_id=<?php  echo  $row['order_number'];  ?>">
                            <h5 class="product_title"><?php 
								

								echo limit_text($row['name'], 3); 
							
							?></h5>
                            </a>
							</div>
							
							<div class="col-md-3 col-sm-3 col-lg-3 product_title_div2">
								<?php
								if($row['Sale_Price'] == NULL || $row['Sale_Price'] == "0" || $row['Sale_Price'] == 0 || $row['Sale_Price'] == "") { ?>
								<h5 class="product_sale_price" style="visibility: hidden"><del>&#8356;<?php echo $row['Sale_Price']; ?></del></h5>
								<?php	
									
								}
							else {
								?>
								<h5 class="product_sale_price"><del>&#8356;<?php echo $row['Sale_Price']; ?></del></h5>
								<?php
								
							}
								?>
							
							<h5 class="product_price">&#8356;<?php echo $row['Price']; ?></h5>
							</div>
							
						</div>
						<br>
						
						<div class="product_title_container col-md-12 col-sm-12 col-lg-12">
							<div class="col-md-12 col-sm-12 col-lg-12 product_category_title_div">
							<a href="#" class="product_card_bottom_category"><h5 class="product_days_category">
							<?php
							$find_type = $row['Types_of_Contact_Lenses'];
							 $fetch_query2 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$find_type AND active=1");
				while($roww=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
					echo $roww['Contact_Lense_Type'];
				} 
				?></h5></a>
							</div>
						</div>
                        
					
					</div>
				</div>
				<!--Col2 End-->
				<?php 
					}
				}
				?>
                
			</div><!-- Row End -->		
		</div>
		<!-- Col2 End -->	  
				  
				  
				  
		<!-- Product Section End -->		  
		</div>
		
		<!-- Tab1 End -->
			 
		<!-- Tab2 Start -->	 
			 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="col-sm-12 col-md-12 col-lg-12 bgcol1 contact_shop_tab2_col">
					<p class="contact_description_text1">
					Order your contact lenses online from the UK’s no.1 choice for contact lenses, eye care, contact lens solutions and sunglasses to save time and money. We offer top contact lens brands up to 50% cheaper than high street opticians and when you order by 11:59pm you can receive your next day contact lenses for free on orders over £49. Make sure you get your quality contact lenses for the cheapest price in the UK with our Price Match Guarantee!
					</p>
					
					<p>
					Our wide range of lenses includes 1-day, two weekly, monthly, toric, multifocal and coloured lenses. We stock leading contact lens brands including, Acuvue, Focus Dailies, Air Optix and Biofinity to name a few. We also stock the branded equivalent of all opticians such as Specsavers, Boots and Vision Express contact lenses at a fraction of the cost. For this reason, you will always be able to find exactly what you’re looking for!
					</p>
					
					<h5 class="tab2_description_heading">What types of contact lenses are there?</h5>
					<h5 class="tab2_description_sub_heading">Daily contact lenses</h5>
					
					<p class="contact_description_sub_text">
					Convenience and comfort are some of the major benefits of choosing daily contact lenses. Not to mention you can enjoy the freedom of wearing non-prescription sunglasses when it's bright outside.
					</p>
					
					<p class="contact_description_sub_text">
					Dailies can be worn for a full day then simply thrown away after. This means no cleaning or storing and minimal risk of infection. Our most popular daily disposable contact lenses are 1-Day Acuvue Moist, Dailies AquaComfort Plus, Focus Dailies All Day Comfort and Dailies Total 1 by Alcon.
					</p>
					
				<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/1-day-acuvue-moist246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/dailies-aqua-comfort-plus246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/focus-dailies-all-day-comfort246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
				
					<h5 class="tab2_description_sub_heading">Weekly contact lenses</h5>
					
					<p class="contact_description_sub_text">
					Designed for a full two weeks of daily wear before needing to be replaced, weekly (or two weekly contact lenses) are an effective compromise between monthlies and dailies. Some two weekly lenses can even be worn continuously for up to a week, allowing you the freedom to choose your own contact lens routine. The Acuvue range includes weekly contact lenses such as Acuvue Oasys and Acuvue Advance.
					</p>
					
					<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/acuvue-oasys246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/acuvue-oasys-for-astigmatism-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/acuvue-advance-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
					
				<h5 class="tab2_description_sub_heading">Monthly contact lenses</h5>
					
					<p class="contact_description_sub_text">
						Monthly lenses are the most affordable option. They can be stored, cleaned and reused every day for as long as 30 days. Not only are they great value for money but they are favoured by those who have a busy lifestyle and are always on the go. The most popular monthly contact lenses on the UK market include Biofinity by CooperVision, Air Optix Aqua and PureVision.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/air-optix-aqua246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/biofinity-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/proclear-sphere-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->		
				
					
				<h5 class="tab2_description_sub_heading">Extended Wear lenses</h5>
					
					<p class="contact_description_sub_text">
						Extended wear contact lenses offer you the freedom to decide how you want to wear your lenses. You can wear your contact lenses day and night for a week or a month, depending on the contact lens, or increase their longevity by cleaning and storing them every night. Extended wear is an option with popular brands such as CooperVision's Biofinity and Acuvue Oasys. As well as the specially designed Air Optix Night & Day Aqua.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/acuvue-oasys246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/biofinity-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/acuvue-oasys-for-astigmatism-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->	
				
				<h5 class="tab2_description_sub_heading">Toric contact lenses for astigmatism</h5>
					
					<p class="contact_description_sub_text">
					Toric contact lenses especially counter the effects of astigmatism and offer clear, uninterrupted vision. Astigmatism often results in haziness or blurriness for the sufferer’s vision. Toric contacts are available in daily, two weekly and monthly editions, from best-selling ranges including 1-Day Acuvue Moist for Astigmatism, Dailies AquaComfort Plus Toric, Acuvue Oasys for Astigmatism and Proclear Toric.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/1-day-acuvue-moist-astigmatism246-0-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/acuvue-oasys-for-astigmatism-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/dailies-aqua-comfort-plus-toric-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->	
				
			<h5 class="tab2_description_sub_heading">Multifocal contact lenses</h5>
					
					<p class="contact_description_sub_text">
					Eliminate the need for bifocal glasses or varifocal lenses when you wear multifocal contacts. If you suffer from presbyopia, you can still enjoy the same freedom as contact lens wearers. Try best-selling multifocal contact lenses, available at the best UK prices, with 1-Day Acuvue Moist Multifocal, Air Optix Aqua Multifocal and Dailies AquaComfort Plus Multifocal.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/1-day-acuvue-moist-multifocal-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/air-optix-aqua-multifocal-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/dailies-aquacomfort-plus-multifocal-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
					
				
				<h5 class="tab2_description_sub_heading">Coloured contact lenses</h5>
					
					<p class="contact_description_sub_text">
					Available in a wide range of different prescription powers, or as cosmetic contact lenses, colour contacts offer visual correction while making a bold fashion statement. Whether you want to subtly enhance your eye colour or introduce a new shade entirely, Feel Good Contacts stock the best-selling coloured lenses around. Choose from leading brands such as FreshLook Colorblends, Air Optix Color and 1-Day Acuvue Define - Sparkle and Shimmer.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/freshlook-colorblends246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/freshlook-1-day-10-pk-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/air-optix-colors-thumb786-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
					
				<h5 class="tab2_description_sub_heading">Silicone hydrogel contact lenses</h5>
					
					<p class="contact_description_sub_text">
					Beneficial to those who suffer from dry eyes, silicone hydrogel contact lenses are some of the most popular lenses around. They allow more oxygen into the eye than standard hydrogel lenses, promising increased comfort and hygiene. You can find quality silicone hydrogel lenses including, 1 Day Acuvue TruEye, comfi Pure 1 Day, Dailies Total 1, Acuvue Oasys, comfi Air, Air Optix Aqua and Biofinity.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/comfi-pure30-thumb1042-132-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/comfi-air-3-lenses-pack-thumb1019-132-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Contact Lense/dailies-total-1246-0-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->	
				
				<h5 class="tab2_description_heading">
					Do I need my prescription to buy contact lenses at Feel Good Contacts?
				</h5>
				
				<p class="contact_description_sub_text">
					Feel Good Contacts pride ourselves on making things as easy as possible and being the UK's top online contact lenses supplier. That’s why you can buy contacts online without a prescription. We don’t require you to show us your prescription before purchase, unlike most opticians that will encourage you to buy your contacts directly after an eye test.
				</p>
				<p class="contact_description_sub_text">
					Having said that, you do need to know your prescription requirements to buy your contact lens online, so we can provide the right contact lenses for you. If you need any help understanding what your prescription figures mean, or where to find them after an eye test, visit our prescription page. 
				</p>
					
				<h5 class="tab2_description_heading">
					How to look after your contact lenses
				</h5>
				
				<p class="contact_description_sub_text">
				Unless you’re wearing daily disposables lenses, you’re going to need to know how to clean and store your contact lenses properly. This way you’ll avoid any problems, such as irritation and infection, and ensure optimum eye health.
				</p>
				<p class="contact_description_sub_text">
				That’s why we’ve created a helpful contact lens care guide, that lets you know just which contact lens solution you’ll need, and what to do with your lenses after a day’s wear.
				</p>
					
				<h5 class="tab2_description_heading">
					How do I put in and take out my contact lenses?
				</h5>
				
				<p class="contact_description_sub_text">
				Once you’ve got the hang of it, applying and removing your contact lenses is a walk in the park. However, we understand that making the jump can be daunting for glasses wearers.
				</p>
				<p class="contact_description_sub_text">
				So, we’ve made things easier for you with a step-by-step guide on how to put in, and take out, your contact lenses.
				</p>
					
				<h5 class="tab2_description_heading">
					How many hours a day should you wear contact lenses?
				</h5>
				
				<p class="contact_description_sub_text">
				In general, you should wear your contact lenses for up to 10-12 hours a day. However, your optician will discuss your individual wearing schedule with you. This is because it will depend on several characteristics including your eyes and lifestyle. Wearing lenses longer than the time you have been recommended could lead to dry, irritated and red eyes.
				</p>
				
				<h5 class="tab2_description_heading">
				Is it okay to buy contact lenses online?
				</h5>
				
				<p class="contact_description_sub_text">
				Yes, you can buy contact lenses online. Simply ensure you have your contact lens prescription at hand and that you order from a reputable online contact lens retailer such as Feel Good Contacts. We stock top brand contact lenses that go through quality checks from the manufacturers. If you’re unsure, read our guide on our guide on buying contact lenses online online any further questions you may have.
				</p>
				
				<h5 class="tab2_description_heading">
				What contact lenses are best?
				</h5>
				
				<p class="contact_description_sub_text">
				Your optician will help determine which contact lenses are suitable for you and your eyes. We've put together all the information you need on our favourite lenses at Feel Good Contacts and to explain why they are so popular.
				</p>
					
				<p class="contact_description_sub_text">
				Buy cheap contact lenses online at Feel Good Contacts without compromising on quality or comfort. For any questions on how to order contact lenses online, please don’t hesitate to contact our helpful and friendly customer service team. Contact us today by phone, WhatsApp, email or send us a message through LiveChat in the bottom right-hand corner.
				</p>		
					
				</div>
			</div>
		<!-- Tab2 End -->
	  	</div>
		
	</div>	
		
		<!-- Description Tab End -->	
			
			
		
	</div>
	<!-- Col2 End -->
       
		
	</div>
</div>
	
<?php include 'footer.php' ?>	


</body>
</html>