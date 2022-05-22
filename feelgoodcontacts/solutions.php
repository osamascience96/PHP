<?php include 'Connection.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Solutions</title>
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
        <div class="col-md-3 col-sm-3 col-lg-3 contact_lense_aside">
        	<div class="accordion" id="accordionExample">
			  <div class="card">
				<div class="card-header" id="headingOne">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Types of Solutions
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					  
                      <?php 
				$fetch_query = mysqli_query($conn,"SELECT * FROM types_of_solutions where id!=0 AND active=1");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
				?>  
					<li class="brand_contactlense_category_ul_list">
					<a href="solutions.php?tos=<?php echo $row['id']; ?>" class="brand_contactlense_category_ul_list_link">
					<?php echo $row['Solution_Type']; ?>
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
					 Popular Solutions
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					<?php 
				$fetch_query2 = mysqli_query($conn,"SELECT * FROM popular_solutions where id!=0 AND active=1");
				while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
				?>  
                    
					<li class="brand_contactlense_category_ul_list">
					<a href="solutions.php?ps=<?php echo $row2['id']; ?>" class="brand_contactlense_category_ul_list_link">
					<?php echo $row2['Popular_Solutions']; ?>
					</a>	
					</li>
					
					<?php } ?>
				  </ul>
					
				</div>
			  </div>
			
					
				
			<!-- Category Two End -->
	

			</div>

        </div>
		
		<!-- Col01 End -->
		
	<!-- Product Section Start -->	
		
	<!-- Col2 STart -->
	<div class="col-sm-12 col-md-9 col-lg-9 bgcol1 contact_shop_col2">
				
		<!-- Main Heading Start -->
		<div class="col-sm-12 col-md-12 col-lg-8 bgcol1 contact_lense_shop_heading_col">
			<h5 class="contact_lense_shop_heading">Contact Lens Solutions</h5>
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
							<select class="form-control form-control-sm contact_lense_filter" onChange="window.open(this.value, '_self')">
								<option class="contact_lense_filter_option" value="solutions.php">Popular</option>
                                <?php 
								if(isset($_GET['price'])) {
								if($_GET['price']==2) {	
								?>
								<option class="contact_lense_filter_option" value="solutions.php?price=2" selected>Price Low To High</option>
								<?php }
								else {?>
                                
								<option class="contact_lense_filter_option" value="solutions.php?price=2">Price Low To High</option>
								
							<?php	}
								if($_GET['price']==1) {	
								?>
								<option class="contact_lense_filter_option" value="solutions.php?price=1" selected>Price High To Low</option>	
								<?php 
									}
									else { ?>
										
                                        <option class="contact_lense_filter_option" value="solutions.php?price=1">Price High To Low</option>	
									<?php }
									
								}
								else {?>
                                <option class="contact_lense_filter_option" value="solutions.php?price=2">Price Low To High</option>
                                  <option class="contact_lense_filter_option" value="solutions.php?price=1">Price High To Low</option>	
								<?php
								}?>
							</select>

						</div>	
							<!-- Col1 End -->

							<!-- Col2 Start -->
						<div class="col-sm-4 col-md-4 col-lg-4 bgcol1 contact_lense_filter_col1">
						<p class="Contact_filter_heading">Filter By</p>

							<select class="form-control form-control-sm contact_lense_filter"onChange="window.open(this.value, '_self')" target="self">
                            <?php
                            if(isset($_GET['tos'])) {
							?>
							<option class="contact_lense_filter_option" value="solutions.php?tos=<?php echo $_GET['tos'] ?>">
                            <?php
							$temp_tos = $_GET['tos'];
							$fetch_queryi = mysqli_query($conn,"SELECT * FROM types_of_solutions where id=$temp_tos AND active=1");
				while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
					echo $rowi['Solution_Type'];
				}
							?>
                            </option>
                            <?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_solutions where id!=0 AND id!=$temp_tos AND active=1");
								?>
                                <option class="contact_lense_filter_option" value="solutions.php">All</option>
                                <?php
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="solutions.php?tos=<?php echo $rowii['id'] ?>"><?php echo $rowii['Solution_Type'] ?></option>
                                <?php
									}	
									?>
                            
                            
							<?php						
							}
							else {
								?>
								<option class="contact_lense_filter_option" value="solutions.php">All</option>
								<?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM types_of_solutions where id!=0 AND active=1");
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="solutions.php?tos=<?php echo $rowii['id'] ?>"><?php echo $rowii['Solution_Type'] ?></option>
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
		
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="solutions.php?tos=1" class="t-none">
							<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn">
								MULTI-PURPOSE
							</button>
                            </a>
					</div>
				<!-- Col1 End -->


				<!-- Col2 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="solutions.php?tos=2" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn">SALINE</button>
					</a>
                    </div>
				<!-- Col2 End -->

				<!-- Col3 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="solutions.php?tos=3" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn">PEROXIDE</button>
					</a>
                    </div>
				<!-- Col3 End -->

				<!-- Col4 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
                    <a href="solutions.php?tos=4" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn">TRAVEL PACK</button>
					</a>
                    </div>
				<!-- Col4 End -->

				<!-- Col5 Start -->
					<div class="col-sm-3 col-md-3 col-lg-3 home_heading_col contact_lense_col solution_col">
                    <a href="solutions.php?tos=5" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn soultion_btn"> RIGID & GAS PERMEABLE</button>
                        </a>
					</div>
				<!-- Col5 End -->
			
				<!-- Col6 Start -->
					<div class="col-sm-1 col-md-1 col-lg-1 home_heading_col contact_lense_col solution_col">
					
					</div>
				<!-- Col5 End -->

				
		
		</div>
		
		<!-- Contact Lens Shop button End -->
				  
		<!-- Product Section Start -->
		
			 <!-- Col02 Start -->
        <div class="col-md-12 col-sm-12 col-lg-12 contact_lense_col">
			
			<div class="row">
			
				<?php 
				if(isset($_GET['tos'])) {
					$temp_tos = $_GET['tos'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions=$temp_tos AND active=1");
				}
				else if(isset($_GET['ps'])) {
					$temp_ps = $_GET['ps'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions=$temp_ps AND active=1");
				}
				else if(isset($_GET['price'])) {
					$pr = $_GET['price'];
					if($pr == 1) {
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions!=0 AND active=1 ORDER BY price DESC");	
					}
					else if($pr == 2) {
						$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions!=0 AND active=1 ORDER BY price ASC");	
					}
					else {
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions!=0 AND active=1");		
					}
				}
				else {
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions!=0 AND active=1");
				}
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
				?>
				<!--Col1-->
				<div class="col-md-6 col-sm-6 col-lg-4 product_card_col">
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
					<img src="images/Products/<?php echo $row['image']; ?>" class="product_image">
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
							<h5 class="product_days_category">
							<?php
							$find_type = $row['Types_of_Solutions'];
							 $fetch_query2 = mysqli_query($conn,"SELECT * FROM Types_of_Solutions where id=$find_type AND active=1");
				while($roww=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
					echo $roww['Solution_Type'];
				} 
				?></h5>
							</div>
						</div>
					
					</div>
				</div>
				<!--Col1 End-->
				<?php }?>
			</div><!-- Row End -->		
		</div>
		<!-- Col2 End -->	  
				  
				  
				  
		<!-- Product Section End -->		  
				  
				  
			 </div>
		
		<!-- Tab1 End -->
			 
		<!-- Tab2 Start -->	 
			 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="col-sm-12 col-md-12 col-lg-12 bgcol1 contact_shop_tab2_col">
					<p class="contact_description_sub_text">
					Contact lens solution is essential in keeping your contact lenses clean and comfortable. All monthly and two weekly contact lenses require cleaning and storing in solution every night. Contact lens solutions are designed to disinfect and clean your lenses to ensure they are free from bacteria and debris.	
					</p>
					
					<p class="contact_description_sub_text">
					We stock a wide selection of cheap contact lens solutions that will suit your needs. This means that you can find the ideal solution for you and your contact lenses.
					</p>
					
					
					<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/comfi-all-in-one-solution-1-month-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/renu-multi-plus-solution-1-month-pack-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/opti-free-puremoist-travel-pack-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
					
					<h5 class="tab2_description_heading">Types of contact lens solution</h5>
					<h5 class="tab2_description_sub_heading">Multi-Purpose</h5>
					
					<p class="contact_description_sub_text">
					Compatible with every soft contact lens, including lenses made from silicone hydrogel, multi-purpose solutions are a highly convenient choice when it comes to cleaning, disinfecting, storing and rinsing your contact lenses.
					</p>
					
					<p class="contact_description_sub_text">
					You can rely on one bottle of multi-purpose solution to look after your monthly or two weekly contact lenses, eliminating the need to splash out on multiple products.
					</p>
					
					<p class="contact_description_sub_text">
					Some of our most popular multi-purpose solutions include, ReNu Multi-Purpose Solution, Complete RevitaLens and comfi All-in-One Solution.
					</p>
					
				<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/comfi-all-in-one-solution-3-month-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/renu-multi-purpose-solution-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/options-multi-plus-solution-3-bottles-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
				
					<h5 class="tab2_description_sub_heading">Saline Solutions and Contact Lens Cleaners</h5>
					
					<p class="contact_description_sub_text">
					Saline solutions and contact lens cleaners should be used in conjunction with each other to help you maintain a successful contact lens cleaning routine.
					</p>
					
					<p class="contact_description_sub_text">
					Contact lens cleaners achieve a thorough clean and disinfection of your contact lenses, removing dirt, protein or lipid build-up from your lenses. Try Oté Clean from Oté Optics, the perfect deep clean solution for minimal irritation and sensitive eyes..
					</p>
					
					<p class="contact_description_sub_text">
					Saline solutions are used for rinsing and storing your lenses, leaving them feeling fresh and comfortable to wear. Saline solutions are also important at this stage for helping to ensure the lenses are free from any remaining cleaner or disinfecting solution after being disinfected. Our most popular saline solutions include, Lens Plus and Sensitive Eyes Plus.
					</p>
					
					<p class="contact_description_sub_text">
					Suitable to add to contact lens cleaners or solution, protein removal tablets such as Ultrazyme Universal work to increase the intensity of the clean
					</p>
					
					<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/sensitive-eye-plus-saline-solution-thumb825-132-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/lens-plus-solution-360ml-pack-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/ultrazyme-universal-protein-cleaner-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
					
				<h5 class="tab2_description_sub_heading">Peroxide Contact Lens Solutions</h5>
					
					<p class="contact_description_sub_text">
						Hydrogen peroxide solutions will thoroughly clean and disinfect your contact lenses. A preservative-free formula makes hydrogen peroxide solution suitable for dry and sensitive eyes.
					</p>
					
					<p class="contact_description_sub_text">
						You can even use them to store contacts, however the lenses then require neutralisation before they’re suitable for wear. Some hydrogen peroxide solution holders contain a built-in neutraliser that turns the solution into water. An alternative choice is to use a two-step cleaning solution, meaning you’ll need to add a neutralising tablet to the solution and lens after disinfection.
					</p>
					
					<p class="contact_description_sub_text">
						Feel Good Contacts are delighted to stock some of the UK’s best-selling hydrogen peroxide solutions, including AOsept and Oxysept.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/ao-sept-plus-hydraglyde-twin-pack-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/easysept-solution-3-month-pack-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/oxysept-1-step-90-days-pack-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->		
				
					
				<h5 class="tab2_description_sub_heading">Gas Permeable Solutions</h5>
					
					<p class="contact_description_sub_text">
					Rigid gas permeable and hard contact lenses are different to soft contact lenses in that they typically don’t contain water and offer a thicker, yet breathable, structure.
					</p>
					
					<p class="contact_description_sub_text">
					As a result, RGP lenses require a different type of contact lens solution than soft contact lenses, to ensure they’re hygienic, hydrated and safe to wear each day.
					</p>
					
					<p class="contact_description_sub_text">
					Gas permeable solutions such as the Blink Total Care and Boston ranges work to re-wet your lenses and remove deposits after a day’s wear, keeping them fresh and comfortable to wear the next day.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/total-care-disinfecting-storing-and-wetting-120ml-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/boston-simplus-multi-action-solution-thumb788-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Solutions/total_thumb750-131-thumb.jpg" class="contact_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->	
				
				<h5 class="tab2_description_heading solution_description_heading">
					Which contact lens solution is the best?
				</h5>
					
					<p class="contact_description_sub_text">
					This will entirely depend on what you require for your contact lenses and your desired maintenance routine. A multi-purpose or saline solution would be ideal to put soft lenses in every evening after a day’s wear. Contact lens cleaners, hydrogen peroxide and RGP solutions are better for a deep clean or your specific type of lens.
					</p>
					
					<p class="contact_description_sub_text">
					We stock a huge selection of contact lens solution, providing multi-purpose solutions, saline solutions, contact lens cleaners, hydrogen peroxide solutions and rigid gas permeable contact lens solutions.
					</p>
					
					<p class="contact_description_sub_text">
					If you need any help finding out which solution you’ll need to buy to look after your contact lenses, please go through our helpful guide on buying contact lens solution.
					</p>
					
					<p class="contact_description_sub_text">
					If you’d rather get in touch with us directly, phone us on 0800 458 2090 or get in touch with our customer service team today.
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