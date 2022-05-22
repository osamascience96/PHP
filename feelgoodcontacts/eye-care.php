<?php include 'Connection.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eye Care</title>
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
					Eye Care
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					 <?php 
				$fetch_query = mysqli_query($conn,"SELECT * FROM eye_care where id!=0 AND active=1");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
				?>  
					<li class="brand_contactlense_category_ul_list">
					<a href="eye-care.php?ec=<?php echo $row['id']; ?>" class="brand_contactlense_category_ul_list_link">
					<?php echo $row['Eye_Care']; ?>
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
					 Popular Eye Care
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <ul class="brand_contactlense_category_ul">
					 <?php 
				$fetch_query2 = mysqli_query($conn,"SELECT * FROM popular_eye_care where id!=0 AND active=1");
				while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
				?>  
                
					<li class="brand_contactlense_category_ul_list">
					<a href="eye-care.php?pec=<?php echo $row2['id']; ?>" class="brand_contactlense_category_ul_list_link">
					<?php echo $row2['Popular_Eye_Care'];?>
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
			<h5 class="contact_lense_shop_heading">Eye Care Products</h5>
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
								<option class="contact_lense_filter_option" value="eye-care.php">Popular</option>
                                <?php 
								if(isset($_GET['price'])) {
								if($_GET['price']==2) {	
								?>
								<option class="contact_lense_filter_option" value="eye-care.php?price=2" selected>Price Low To High</option>
								<?php }
								else {?>
                                
								<option class="contact_lense_filter_option" value="eye-care.php?price=2">Price Low To High</option>
								
							<?php	}
								if($_GET['price']==1) {	
								?>
								<option class="contact_lense_filter_option" value="eye-care.php?price=1" selected>Price High To Low</option>	
								<?php 
									}
									else { ?>
										
                                        <option class="contact_lense_filter_option" value="eye-care.php?price=1">Price High To Low</option>	
									<?php }
									
								}
								else {?>
                                <option class="contact_lense_filter_option" value="eye-care.php?price=2">Price Low To High</option>
                                  <option class="contact_lense_filter_option" value="eye-care.php?price=1">Price High To Low</option>	
								<?php
								}?>
							</select>

						</div>	
							<!-- Col1 End -->

							<!-- Col2 Start -->
						<div class="col-sm-4 col-md-4 col-lg-4 bgcol1 contact_lense_filter_col1">
						<p class="Contact_filter_heading">Filter By</p>

							<select class="form-control form-control-sm contact_lense_filter" onChange="window.open(this.value, '_self')" target="self">
                            <?php
                            if(isset($_GET['ec'])) {
							?>
							<option class="contact_lense_filter_option" value="eye-care.php?ec=<?php echo $_GET['ec'] ?>">
                            <?php
							$temp_ec = $_GET['ec'];
							$fetch_queryi = mysqli_query($conn,"SELECT * FROM Eye_Care where id=$temp_ec AND active=1");
				while($rowi=mysqli_fetch_array($fetch_queryi,MYSQLI_ASSOC)) {
					echo $rowi['Eye_Care'];
				}
							?>
                            </option>
                            <?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM Eye_Care where id!=0 AND id!=$temp_ec AND active=1");
								?>
                                <option class="contact_lense_filter_option" value="eye-care.php">All</option>
                                <?php
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="eye-care.php?ec=<?php echo $rowii['id'] ?>"><?php echo $rowii['Eye_Care'] ?></option>
                                <?php
									}	
									?>
                            
                            
							<?php						
							}
							else {
								?>
								<option class="contact_lense_filter_option" value="eye-care.php">All</option>
								<?php
								$fetch_queryii = mysqli_query($conn,"SELECT * FROM Eye_Care where id!=0 AND active=1");
				while($rowii=mysqli_fetch_array($fetch_queryii,MYSQLI_ASSOC)) {
                            ?>
								
								<option class="contact_lense_filter_option" value="eye-care.php?ec=<?php echo $rowii['id'] ?>"><?php echo $rowii['Eye_Care'] ?></option>
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
						<a href="eye-care.php?ec=1" class="t-none">
							<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn">
								EYE DROPS
							</button>
							</a>
					</div>
				<!-- Col1 End -->


				<!-- Col2 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col">
						<a href="eye-care.php?ec=2" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn eyecare_btn">EYE ACCESSORIES</button>
						</a>
					</div>
				<!-- Col2 End -->

				<!-- Col3 Start -->
					<div class="col-sm-3 col-md-3 col-lg-3 home_heading_col contact_lense_col">
						<a href="eye-care.php?ec=3" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn eyecare_btn_large">DRY EYE TREATEMENT</button>
							</a>
					</div>
				<!-- Col3 End -->

				<!-- Col4 Start -->
					<div class="col-sm-3 col-md-3 col-lg-3 home_heading_col contact_lense_col">
						<a href="eye-care.php?ec=4" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn eyecare_btn_large">SUPPLEMENT & HYGIENE </button>
							</a>
					</div>
				<!-- Col4 End -->

				<!-- Col5 Start -->
					<div class="col-sm-2 col-md-2 col-lg-2 home_heading_col contact_lense_col solution_col">
						<a href="eye-care.php?ec=5" class="t-none">
						<button type="button" class="btn btn-primary btn-lg btn-block contact_lense_btn eyecare_btn">TRAVEL ESSENTIALS</button>
						</a>
					</div>
				<!-- Col5 End -->
			
				

				
		
		</div>
		
		<!-- Contact Lens Shop button End -->	
				  
		
		<!-- Product Section Start -->
		
			 <!-- Col02 Start -->
        <div class="col-md-12 col-sm-12 col-lg-12 contact_lense_col">
			
			<div class="row">
			
				<?php 
				if(isset($_GET['ec'])) {
					$temp_ec = $_GET['ec'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Eye_Care=$temp_ec AND active=1");
				}
				else if(isset($_GET['pec'])) {
					$temp_pec = $_GET['pec'];
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Popular_Eye_Care=$temp_pec AND active=1");
				}
				else {
					$fetch_query = mysqli_query($conn,"SELECT * FROM product where Eye_Care!=0 AND active=1");
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
							$find_type = $row['Eye_Care'];
							 $fetch_query2 = mysqli_query($conn,"SELECT * FROM eye_care where id=$find_type AND active=1");
				while($roww=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
					echo $roww['Eye_Care'];
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
					<p class="contact_description_text1">
					Discover a wide range of eye drops and eye care products online at FeelGoodContacts.com. With such a huge selection of eye care products on offer, you’ll no doubt find the ideal product, suited to your exact needs.
					</p>
					
					<p>
					Looking after your eyes couldn’t be more important, whether you’re a contact lens wearer or not. The effects of modern living can take their toll on our eyes, posing a number of threats to both your eye health and your visual acuity. This is why you might find introducing eye care products to your lifestyle an effective way of protecting your eyes and maintaining their health.
					</p>
					
					<p>
					Our range includes dry eye drops and hydrating eye gels, as well as eye drops for contact lens wearers. In addition, we also stock supplements, eye masks and a number of lid wipes for eye hygiene.
					</p>
					
					
					<h5 class="tab2_description_sub_heading">Eye drops</h5>
					
					<p class="contact_description_sub_text">
					We stock a huge range of eye drops, designed to treat a wide variety of eye conditions. Whether you want to add some extra moisture to dry eyes, or prevent blurred vision from excessive tearing, you’ll find the perfect product when you buy eye drops cheaper online at FeelGoodContacts.com.
					</p>
					
					<p class="contact_description_sub_text">
					If you wear contact lenses, FeelGoodContacts.com also stock a variety of cleaning eye drops for contact lenses.
					</p>
					
					<p class="contact_description_sub_text">
					Many of our eye drops can be purchased in small 10ml bottles, or in multi-packs of individual pocket-sized vials. Regardless of which size you choose, you’ll find our eye drops convenient to carry with you on to go, perfect if you’re used to long hours at the office.
					</p>
					
					
					
				<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/blink-n-clean-eye-drops-thumb788-131-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/blink-soothing-eye-drops-bottle-thumb788-131-thumb.jpg"
						class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/systane-ultra-vials-thumb788-131-thumb.jpg"
						class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
				
					<h5 class="tab2_description_sub_heading">Dry eye treatments</h5>
					
					<p class="contact_description_sub_text">
					Dry eye is a very common problem these days for contact lens wearers and non-contact lens wearers alike. A number of factors in the modern workplace and in the outside world can trigger dry eye, including air conditioning, indoor heating, dehydration and prolonged use of computer screens.
					</p>
					
					<p class="contact_description_sub_text">
					Eye drops specifically designed to combat dry eye work by adding artificial tears and lubricating your eyes. These offer an immediate soothing sensation and relieve irritation and discomfort. Some of the dry eye treatment eye drops we stock at FeelGoodContacts.com can even be applied while you have your lenses in.
					</p>
					
					<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/clinitas-soothe-vials-thumb820-132-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/blink-intensive-tears-plus-liquid-gel-thumb788-131-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/clinitas-hydrate-eye-gel-thumb788-131-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->
					
				<h5 class="tab2_description_sub_heading">Supplements & hygiene</h5>
					
					<p class="contact_description_sub_text">
						Looking after your eyes doesn’t always have to mean contact lenses and eye drops. With our selection of daily eyelid wipes, you can ensure your eyes are kept hygienic and prevent infection before it happens. We also stock vitamins and supplements to help you support your vision through your diet.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
				
					
					<!-- Discription Col1 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/blink-lid-clean-wipes-thumb788-131-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/biotrue-daily-eyelid-wipes-thumb788-131-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->		
				
					
				<h5 class="tab2_description_sub_heading">Eye accessories</h5>
					
					<p class="contact_description_sub_text">
						If you’re not a fan of eye drops or gels, you can find a selection of eye masks and sprays available at FeelGoodContacts.com to help treat dry eye, hay fever and a number of other eye conditions.
					</p>
					
					<p class="contact_description_sub_text">
						We also provide a range of cheap contact lens cases to help you look after your two weekly or monthly contact lenses without having to break the bank.
					</p>
					
			<!-- Discription Start -->	
				<div class="col-sm-12 col-md-12 col-lg-12 contact_shop_description_col">
					
					<!-- Discription Col1 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						<img src="images/Shop/Eye care/thera-pearl-eye-mask-thumb788-131-thumb.jpg" class="eyecare_shop_description_img">
					</div>
					<!-- Discription Col1 -->
					
					<!-- Discription Col2 -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						
					</div>
					<!-- Discription Col2 -->
					
					<!-- Discription Col3 -->
					<div class="col-sm-4 col-md-4 col-lg-4 contact_shop_description_img_col">
						
					</div>
					<!-- Discription Col3 -->
					
				</div>	
				<!-- Discription End -->	
	
					
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