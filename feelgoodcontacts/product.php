<?php include 'Connection.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lens Plus Solution Value Pack</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
	
	
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<?php include 'header.php' ?>

<!-- Product Section Start -->
	<?php 
	
	$product_temp_id = $_GET['product_id'];
	
	?>
<div class="container">
	<div class="row">
		
	<!-- Product Image Section -->
		
		<!-- Col1 Start -->	
<div class="col-sm-12 col-md-7 col-lg-7">
	
	<div class="col-sm-12 col-md-12 col-lg-12 pad-0">
    <?php 
				$fetch_query = mysqli_query($conn,"SELECT * FROM product where order_number='$product_temp_id' AND active=1");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
				?>
		<!--<img src="images/products/<?php //echo $row['image']; ?>" class="product_img">-->
    <div class="container dst pad-0">
    <div class="row pad-0">
        <div class="col-md-12 pad-0">
            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                <!-- slides -->
                <div class="carousel-inner">
                
                    <div class="carousel-item active"> <img src="images/Products/<?php echo $row['image']; ?>" alt="Hills"> </div>
                    <?php
					$product_temp_main_id = $row['id'];
					$fetch_query2 = mysqli_query($conn,"SELECT * FROM gallery where Product_id=$product_temp_main_id AND active=1");
				while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
					 ?>
                     
                     
                    <div class="carousel-item"> <img src="images/products/<?php echo $row2['Image_Link']; ?>" alt="Hills"> </div>
					
					<?php
				}
					 ?>
                </div> <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                <?php
					
				?>
                <ol class="carousel-indicators list-inline">
                    <li class="list-inline-item active"> <a id="carousel-selector-0" data-slide-to="0" data-target="#custCarousel"> <img src="images/products/<?php echo $row['image']; ?>" class="img-fluid"> </a> </li>
                    
                    <?php
					$num = 1;
					$fetch_query3 = mysqli_query($conn,"SELECT * FROM gallery where Product_id=$product_temp_main_id AND active=1");
				while($row3=mysqli_fetch_array($fetch_query3,MYSQLI_ASSOC)) {
					 ?>
                    <li class="list-inline-item"> <a id="carousel-selector-<?php echo $num; ?>" data-slide-to="<?php echo $num; ?>" data-target="#custCarousel"> <img src="images/products/<?php echo $row3['Image_Link']; ?>" class="img-fluid"> </a> </li>
                    <?php
					$num++;
				}
					 ?>
                    <!--
                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid"> </a> </li>
                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid"> </a> </li>-->
                </ol>
            </div>
        </div>
    </div>
</div>
		 
        
        
	
	</div>
	
	
</div>
		<!-- Col1 End -->
	
	<!-- Product Image Section -->

<!-- Product Rate Section -->	
	
<!-- Col2 Start -->

<div class="col-sm-12 col-md-5 col-lg-5 product_main_info_div">
	
	<h5 class="product_main_heading">
	<?php echo $row['name']; ?>
	</h5>
	
	<img src="images/Products/Review/review-star-blue.png" class="product_review_img">
	<img src="images/Products/Review/review-star-blue.png" class="product_review_img">
	<img src="images/Products/Review/review-star-blue.png" class="product_review_img">
	<img src="images/Products/Review/review-star-blue.png" class="product_review_img">
	<img src="images/Products/Review/review-star-blue.png"class="product_review_img">
	
	<span><a href="#" class="review_rate_link">4.8 (1.6)</a></span>
    <br>
	<p class=""><?php 
	if($row['Product_Qty_Description'] == 0) {
		
	}
	else {
	echo $row['Product_Qty_Description'];
	}?></p>
	<p class="product_description_heading">Product description</p>
	<?php 
		
		$fetch1 = mysqli_query($conn,"SELECT * FROM product where id=$product_temp_main_id AND Brands_of_Contact_Lenses!=0 AND active=1");
		while($rawt=mysqli_fetch_array($fetch1,MYSQLI_ASSOC)) {
		 echo $rawt['product_lense_description']. " Lenses / box &nbsp;&nbsp;";
		}
		if($row['Brands_of_Contact_Lenses'] != 0) {
			
		
		$fetch2 = mysqli_query($conn,"SELECT * FROM number_of_pack where Product_id=$product_temp_main_id AND active=1");
		while($rawt2=mysqli_fetch_array($fetch2,MYSQLI_ASSOC)) {
		 $temp_ide = $rawt2['NOP_Merge'];
			
			$fetche1 = mysqli_query($conn,"SELECT * FROM product where id=$temp_ide AND active=1");
			while($rawt2e=mysqli_fetch_array($fetche1,MYSQLI_ASSOC)) {
			 ?>
			<a href="<?php echo "product.php?product_id=".$rawt2e['order_number']; ?>" style="text-decoration: none;">
			<?php
				echo $rawt2e['product_lense_description']. " Lenses / box &nbsp;&nbsp;";
				?>
			</a>
				<?php
			}
			
		}
	} else if($row['Types_of_Solutions'] != 0 || $row['Eye_Care'] != 0) {
		$fetch2 = mysqli_query($conn,"SELECT * FROM number_of_pack where Product_id=$product_temp_main_id AND active=1");
		while($rawt2=mysqli_fetch_array($fetch2,MYSQLI_ASSOC)) {
		 $temp_ide = $rawt2['NOP_Merge'];
			
			$fetche1 = mysqli_query($conn,"SELECT * FROM product where id=$temp_ide AND active=1");
			while($rawt2e=mysqli_fetch_array($fetche1,MYSQLI_ASSOC)) {
			 ?>
			<a href="<?php echo "product.php?product_id=".$rawt2e['order_number']; ?>" style="text-decoration: none;">
			<?php
				echo $rawt2e['Product_Qty_Description'];
				?>
			</a>
				<?php
			}
			
		}
	}
	?>
	
	<!-- product Description Table Start -->
	<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_price_section_col">
    					
    					<div class="main_product_colors_div col-md-12 col-sm-12 col-lg-12">
                        <h6 class="product_item_sku">ITEM SKU: <strong><?php echo $row['order_number']; ?></strong></h6>
							<div class="main_product_colors_div2">
                            <?php 
							$att=1;
							//1 Product Merge Check
							$fetch_query2 = mysqli_query($conn,"SELECT * FROM product_merge where Product_id=$product_temp_main_id AND active=1");
							while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
								$temp_merge_id = $row2['Merge'];
								//2 Product Call
								$fetch_query3 = mysqli_query($conn,"SELECT * FROM product where id=$temp_merge_id AND active=1");
								while($row3=mysqli_fetch_array($fetch_query3,MYSQLI_ASSOC)) {
									$temp_frame_color_id = $row3['Frame_Color'];
									//3 Color Call
									$fetch_query4 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_frame_color_id  AND active=1");
									while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) {
								
                            
							?>
                            <img class="main_product_color_image color<?php echo $att ?>" src="images\Shop\glasses\<?php echo $row4['image_link']; ?>">
							
                            
                            <?php
							
							$att++;
									}
								}
							}
							 ?>
							</div>
						</div>
                             
                             
    
    
    
    <?php
			$temp_check = $row['Brands_of_Contact_Lenses']; 
			$temp_check3 = $row['Types_of_Solutions']; 
			$temp_check4 = $row['Eye_Care']; 
					?>
		<form method="post" action="">
		<?php
			if($temp_check != 0) {
			?>
		
		<!-- Product description Check Box Start -->
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
            
			<!-- Col1 Start -->
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col">
				<p></p>
			</div>
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col">
			
					<div class="chiller_bc">
						<input id="left_check" name="left_check" type="checkbox">
						<label for="left_check">Left</label>
						<span></span>
					</div>
					
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col">
			
					<div class="chiller_bc">
						<input id="right_check" name="right_check" type="checkbox">
						<label for="right_check">Right</label>
						<span></span>
					</div>
				
			</div>
			<!-- Col3 End -->
			
		</div>
	
		<!-- Product Check Box End -->
		
		<!-- Product Description List Start -->
		
			<?php 
			$result2=mysqli_query($conn,"SELECT count(*) as total from power where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result2);
			//echo $data['total'];
			
			if($data['total']>=1) {
			?>
			
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
			<p class="product_list_text">
			Power	
			</p>
			
				
				
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				<!-- onmousedown="if(this.options.length>3){this.size=3;}" onchange='this.size=0;' onblur="this.size=0;" -->
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_power" id="left_power">
					<?php 
				$temp_result1=mysqli_query($conn,"SELECT count(*) as temp_total1 from power where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					$data=mysqli_fetch_assoc($temp_result1);
					if($data['temp_total1'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM power where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
						if($raw['Plus'] != NULL || $raw['Plus'] != "") {
					?>
					<option value="+<?php echo $raw['Plus'] ?>" selected>+<?php echo $raw['Plus'] ?></option>
					
					<?php
						}
						elseif ($raw['Minus'] != NULL || $raw['Minus'] != "") { ?>
							<option value="-<?php echo $raw['Minus'] ?>" selected>-<?php echo $raw['Minus'] ?></option>
							
				<?php		}
							else {}
							?>
							
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<optgroup label="Plus">
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM power where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Plus");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Plus'] == NULL || $raw['Plus'] == "" || $raw['Plus'] == 0) {
						
					}
						else {
					?>
					
					<option value="+<?php echo $raw['Plus'] ?>">+<?php echo $raw['Plus'] ?></option>
					<?php 
						}
						} ?>
				  	</optgroup>
					<optgroup label="Minus">
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM power where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Minus");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
						if($raw['Minus'] == NULL || $raw['Minus'] == "" || $raw['Minus'] == 0) {
						
					}
						else {
					?>
					<option value="-<?php echo $raw['Minus'] ?>">-<?php echo $raw['Minus'] ?></option>
					<?php
						}
					} ?>
				  </optgroup>
					<?php } ?>
				  </select>  
                  
        
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
				
				  <select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_power" id="right_power">
					 <?php 
				$temp_result2=mysqli_query($conn,"SELECT count(*) as temp_total2 from power where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					$data=mysqli_fetch_assoc($temp_result2);
					if($data['temp_total2'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM power where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
						if($raw['Plus'] != NULL || $raw['Plus'] != "") {
					?>
					<option value="+<?php echo $raw['Plus'] ?>" selected>+<?php echo $raw['Plus'] ?></option>
					
					<?php
						}
						elseif ($raw['Minus'] != NULL || $raw['Minus'] != "") { ?>
							<option value="-<?php echo $raw['Minus'] ?>" selected>-<?php echo $raw['Minus'] ?></option>
							
				<?php		}
							else {}
							?>
							
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<optgroup label="Plus">
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM power where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Plus");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Plus'] == NULL || $raw['Plus'] == "" || $raw['Plus'] == 0) {
						
					}
						else {
					?>
					<option value="+<?php echo $raw['Plus'] ?>">+<?php echo $raw['Plus'] ?></option>
					<?php 
						}
						} ?>
				  	</optgroup>
					<optgroup label="Minus">
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM power where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Minus");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
						if($raw['Minus'] == NULL || $raw['Minus'] == "" || $raw['Minus'] == 0) {
						
					}
						else {
					?>
					<option value="-<?php echo $raw['Minus'] ?>">-<?php echo $raw['Minus'] ?></option>
					<?php
						}
					} ?>
				  </optgroup>
					<?php } ?>
				  </select>
				
				
				
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
	
		<!-- Product Description List Start -->
		<?php 
			
		}//if
		else {}
				//End ?>
		
		<!-- Product Description List Start -->
		<?php 
			$result3=mysqli_query($conn,"SELECT count(*) as total2 from base_curve where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result3);
			//echo $data['total2'];
			
			if($data['total2']>=1) {
			?>
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				<p class="product_list_text">
					Base Curve	
				</p>
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_bc" id="left_bc">
					 <?php 
				$temp_result3=mysqli_query($conn,"SELECT count(*) as temp_total3 from base_curve where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					$data=mysqli_fetch_assoc($temp_result3);
				
					if($data['temp_total3'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM base_curve where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
						if($raw['Value'] != NULL || $raw['Value'] != "") {
					?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					<?php
						}
							else {}
							?>
							
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM base_curve where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Value");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
			<!--
  			<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_bc" id="left_bc" placeholder="<?php //echo $row['left_bc'] ?>" readonly>-->
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
  			<select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_bc" id="right_bc">
					 <?php 
				$temp_result4=mysqli_query($conn,"SELECT count(*) as temp_total4 from base_curve where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					$data=mysqli_fetch_assoc($temp_result4);
				
					if($data['temp_total4'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM base_curve where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
						if($raw['Value'] != NULL || $raw['Value'] != "" || $raw['Value'] == 0) {
					?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					<?php
						}
							else {}
							?>
							
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM base_curve where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Value");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
				
				<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_bc" id="right_bc" placeholder="<?php //echo $row['right_bc'] ?>" readonly>-->
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
	<?php 
			
		}//if
		else {}
				//End ?>
		<!-- Product Description List Start -->

			
			
		
		<!-- Product Description List3 Start -->
			
			<?php 
			$result3=mysqli_query($conn,"SELECT count(*) as total3 from diameter where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result3);
			//echo $data['total3'];
			
			if($data['total3']>=1) {
			?>
			
			
			
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
			<p class="product_list_text">
			Diameter	
			</p>
			
				
				
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_diameter" id="left_diameter">
					 <?php 
					$temp_result5=mysqli_query($conn,"SELECT count(*) as temp_total5 from diameter where 			Product_id=$product_temp_main_id AND Side_Select='left' and active=1");
					$data=mysqli_fetch_assoc($temp_result5);
				
					if($data['temp_total5'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM diameter where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM diameter where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Value");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
				
  				<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_diameter" id="inlineFormInputName2" placeholder="<?php//echo $row['left_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_diameter" id="right_diameter">
					 <?php 
					$temp_result6=mysqli_query($conn,"SELECT count(*) as temp_total6 from diameter where 			Product_id=$product_temp_main_id AND Side_Select='right' and active=1");
					$data=mysqli_fetch_assoc($temp_result6);
				
					if($data['temp_total6'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM diameter where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM diameter where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Value");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
  			<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_diameter" id="inlineFormInputName2" placeholder="<?php //echo $row['right_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
			
			<?php 
			
		}//if
		else {}
				//End ?>
	
		<!-- Product Description List3 Start -->

		<!-- Product Description List 3.1 Start -->
			
			<?php 
			$result4=mysqli_query($conn,"SELECT count(*) as total4 from cylinder where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result4);
			//echo $data['total3'];
			
			if($data['total4']>=1) {
			?>
			
			
			
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
			<p class="product_list_text">
			Cylinder	
			</p>
			
				
				
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_cylinder" id="left_cylinder">
					 <?php 
					$temp_result7=mysqli_query($conn,"SELECT count(*) as temp_total7 from cylinder where 			Product_id=$product_temp_main_id AND Side_Select='left' and active=1");
					$data=mysqli_fetch_assoc($temp_result7);
				
					if($data['temp_total7'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM cylinder where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM cylinder where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Value DESC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "") {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
				
  				<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_diameter" id="inlineFormInputName2" placeholder="<?php//echo $row['left_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_cylinder" id="right_cylinder">
					 <?php 
					$temp_result8=mysqli_query($conn,"SELECT count(*) as temp_total8 from cylinder where 			Product_id=$product_temp_main_id AND Side_Select='right' and active=1");
					$data=mysqli_fetch_assoc($temp_result8);
				
					if($data['temp_total8'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM cylinder where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM cylinder where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Value DESC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "") {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
  			<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_diameter" id="inlineFormInputName2" placeholder="<?php //echo $row['right_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
			
			<?php 
			
		}//if
		else {}
				//End ?>
	
		<!-- Product Description List 3.1 End -->
			
			
		<!-- Product Description List 3.2 Start -->
			
			<?php 
			$result5=mysqli_query($conn,"SELECT count(*) as total5 from axis where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result5);
			//echo $data['total3'];
			
			if($data['total5']>=1) {
			?>
			
			
			
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
			<p class="product_list_text">
			Axis	
			</p>
			
				
				
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_axis" id="left_axis">
					 <?php 
					$temp_result9=mysqli_query($conn,"SELECT count(*) as temp_total9 from axis where 			Product_id=$product_temp_main_id AND Side_Select='left' and active=1");
					$data=mysqli_fetch_assoc($temp_result9);
				
					if($data['temp_total9'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM axis where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM axis where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Value DESC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
				
  				<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_diameter" id="inlineFormInputName2" placeholder="<?php//echo $row['left_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_axis" id="right_axis">
					 <?php 
					$temp_result10=mysqli_query($conn,"SELECT count(*) as temp_total10 from axis where 			Product_id=$product_temp_main_id AND Side_Select='right' and active=1");
					$data=mysqli_fetch_assoc($temp_result10);
				
					if($data['temp_total10'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM axis where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Value'] ?>" selected><?php echo $raw['Value'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM axis where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Value DESC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Value'] ?>"><?php echo $raw['Value'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
  			<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_diameter" id="inlineFormInputName2" placeholder="<?php //echo $row['right_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
			
			<?php 
			
		}//if
		else {}
				//End ?>
	
		<!-- Product Description List 3.2 End -->
			
			
			
			
			
			
		<!-- Product Description List 3.3 Start -->
			
			<?php 
			$result7=mysqli_query($conn,"SELECT count(*) as total7 from colours where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result7);
			//echo $data['total3'];
			
			if($data['total7']>1) {
			?>
			
			
			
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
			<p class="product_list_text">
			Color	
			</p>
			
				
				
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_color" id="left_color">
					 <?php 
					$temp_result13=mysqli_query($conn,"SELECT count(*) as temp_total13 from colours where Product_id=$product_temp_main_id AND Side_Select='left' and active=1");
					$data=mysqli_fetch_assoc($temp_result13);
				
					if($data['temp_total13'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM colours where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Color'] ?>" selected><?php echo $raw['Color'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM colours where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Color ASC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Color'] == NULL || $raw['Color'] == "") {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Color'] ?>"><?php echo $raw['Color'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
				
  				<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_diameter" id="inlineFormInputName2" placeholder="<?php//echo $row['left_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_color" id="right_color">
					 <?php 
					$temp_result14=mysqli_query($conn,"SELECT count(*) as temp_total14 from colours where Product_id=$product_temp_main_id AND Side_Select='right' and active=1");
					$data=mysqli_fetch_assoc($temp_result14);
				
					if($data['temp_total14'] == 1) { 
						
					$fetch_q = mysqli_query($conn,"SELECT * FROM colours where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) { ?>
					<option value="<?php echo $raw['Color'] ?>" selected><?php echo $raw['Color'] ?></option>
					
					 <?php
						}
					}
				else {
					?>
					<option value="0">----</option>
					<?php 
					$fetch_q = mysqli_query($conn,"SELECT * FROM colours where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Color ASC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Color'] == NULL || $raw['Color'] == "") {
						
					}
						else {
					?>
					<option value="<?php echo $raw['Color'] ?>"><?php echo $raw['Color'] ?></option>
					<?php 
							}
						} ?>
				<?php } ?>
				  </select>
  			<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_diameter" id="inlineFormInputName2" placeholder="<?php //echo $row['right_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
			
			<?php 
			
		}//if
		else {}
				//End ?>
	
		<!-- Product Description List 3.3 End -->
			
		<!-- Product Description List 3.4 Start -->
			
			<?php 
			$result6=mysqli_query($conn,"SELECT count(*) as total6 from quantity_of_boxes where Product_id=$product_temp_main_id and active=1");
			$data=mysqli_fetch_assoc($result6);
			//echo $data['total3'];
			
			if($data['total6']>1) {
			?>
			
			
			
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
			
			<!-- Col1 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
			<p class="product_list_text">
			Qty of Boxes	
			</p>
			
				
				
			</div>
			
			<!-- Col1 End -->
			
			<!-- Col2 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="left_qty" id="left_qty">
					<option value="0">----</option> 
					<?php 
					
					$fetch_q = mysqli_query($conn,"SELECT * FROM quantity_of_boxes where Product_id=$product_temp_main_id AND Side_Select='left' AND active=1 ORDER BY Value DESC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
					else {
					$temp_lense_count = (int)$row['product_lense_description'];
					$temp_value_count = (int)$raw['Value'];
					for($i=1;$i<=$temp_value_count;$i++) {
						
					
					?>
					
					<option value="<?php echo $i ?>"><?php echo $i ?> (<?php echo ($i * $temp_lense_count) ?> lens)</option>
					<?php 
						}
							}
						} ?>
				
				  </select>
				
  				<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_diameter" id="inlineFormInputName2" placeholder="<?php//echo $row['left_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				<select class="custom-select my-1 mr-sm-2 product_select_option2" name="right_qty" id="right_qty">
					<option value="0">----</option> 
					<?php 
					
					$fetch_q = mysqli_query($conn,"SELECT * FROM quantity_of_boxes where Product_id=$product_temp_main_id AND Side_Select='right' AND active=1 ORDER BY Value DESC");
					while($raw=mysqli_fetch_array($fetch_q,MYSQLI_ASSOC)) {
					if($raw['Value'] == NULL || $raw['Value'] == "" || $raw['Value'] == 0) {
						
					}
						else {
					$temp_lense_count = (int)$row['product_lense_description'];
					$temp_value_count = (int)$raw['Value'];
					for($i=1;$i<=$temp_value_count;$i++) {
						
					
					?>
					
					<option value="<?php echo $i ?>"><?php echo $i ?> (<?php echo ($i * $temp_lense_count) ?> lens)</option>
					<?php 
						}
							}
						} ?>
				  </select>
  			<!--<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_diameter" id="inlineFormInputName2" placeholder="<?php //echo $row['right_diameter'] ?>" readonly>-->
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
			
			<?php 
			
		}//if
		else {}
				//End ?>
	
		<!-- Product Description List 3.4 End -->
			
			
			
			
			
			
			
		<?php } 
		
		else if($temp_check3 != 0) {?>
			<?php if($row['Pack']==0) {
			
		}else { ?>
		<select class="custom-select my-1 mr-sm-2 product_select_option2" name="solution_pack" id="solution_pack">
		<?php for($pack=1;$pack<=$row['Pack'];$pack++) { 
		if($pack == 1) { 
			?>
			<option value="<?php echo $pack ?>"><?php echo $pack." Pack" ?></option>
		<?php 
		} else { ?>
			<option value="<?php echo $pack ?>"><?php echo $pack." Packs" ?></option>
			<?php }
		} ?>
		</select>
		<?php 
			  }
		}
		else if($temp_check4 != 0) { ?>
			<?php if($row['Pack']==0) {
			
		}else { ?>
		<select class="custom-select my-1 mr-sm-2 product_select_option2" name="eye_care_pack" id="eye_care_pack">
		<?php for($pack=1;$pack<=$row['Pack'];$pack++) { 
		if($pack == 1) { 
			?>
			<option value="<?php echo $pack ?>"><?php echo $pack." Pack" ?></option>
		<?php 
		} else { ?>
			<option value="<?php echo $pack ?>"><?php echo $pack." Packs" ?></option>
			<?php }
		} ?>
		</select>
		<?php 
			  } 
		}			
		else {} 
			?>
		
					
				
        
        
		<!-- Product Price Section Start -->
		
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
		
			<h5 class="product_amount_heading">Price Per Box</h5>
			<h5 class="product_price_new">£<span id="orignal_price"><?php echo $row['Price'];?></span></h5>
			
		
		</div>
		
		
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col product_last_col">
			<input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>" />
            <input type="hidden" name="hidden_price" id="final_price" value="" />
            <input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>" />
            <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>" />
			<input type="submit" name="add_to_cart" class="btn btn-primary btn-lg btn-block product_price_btn" value="ADD TO BASKET">
            
          
				

		
		</div>
        </form>
	
			
		<!-- Product Price Section End -->
		
		
	</div>
	
	<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col product_last_col">
		
			<p class="product_paragraph">In Stock</p>
			<p class="product_paragraph">Order within 23hrs 38mins for Delivery Tomorrow</p>
		
	</div>
	
	
	<!-- product Description Table End -->
	
</div>	
	
<!-- Col2 End -->	
	
<!-- Product Rate Section -->
		
	
	</div>
	
</div>	

<!-- Product Section End -->
	
	
	<?php
	$temp_check2 = $row['Brand']; 
			if($temp_check2 != 0) {
	 ?>
<!-- Product Frame Info Start -->
	
	<div class="container frame_container">
		<div class="row">
			
			<!-- Col1 Start -->
			<div class="col-sm-3 col-md-3 col-lg-3 product_question_col">
			
				<h5 class="frame_info_heading">Frame Info</h5>
				<table class="frame_info_table">
				<tr>
					<th class="frame_info_list">Brand:</th>
					<td class="frame_info_List_txt">Glassses Direct</td>	
					
				</tr>
				
				<tr>
					<th>Colour:</th>
					<td>Matt Gunmetal</td>	
					
				</tr>
					
				<tr>
					<th>Size:</th>
					<td>Large</td>	
					
				</tr>
					
				
				<tr>
					<th>Style:</th>
					<td>Gunmetal</td>	
					
				</tr>	
					
				
				<tr>
					<th>Type:</th>
					<td>Framed</td>	
					
				</tr>		
					
				</table>
				
				
				<table class="frame_info_table">
					<tr>
						<th class="frame_info_list">Measurements:</th>
						<td clas="frame_info_List_txt">54-17-64</td>
											
					</tr>
				
				</table>
				
				<button type="button" class="btn btn-primary btn-lg frame_info_btn">More Details</button>
				
				
			</div>
			<!-- Col1 End -->
			
			
			<!-- Col2 Start -->
			<div class="col-sm-9 col-md-9 col-lg-9 product_question_col">
			
				<!-- Col1 Start -->
				<div class="col-sm-7 col-md-7 col-lg-7 product_question_col">
					
					<img src="images/Shop/sunglasses/rectangle.e9e2fc9ded4f.svg" class="frame_info_img">
					
				</div>
				
				<!-- Col1 End -->
				
				
				<!-- Col2 Start -->
				<div class="col-sm-5 col-md-5 col-lg-5 product_question_col">
				
					<img src="images/Shop/sunglasses/frame-arm.c3967a162593.svg" class="frame_info_img2">
					
				</div>
				
				<!-- Col2 End -->
				
				
			</div>
			<!-- Col2 End -->
			
			
		
		</div>
		
	</div>
	
<!-- Product Frame Info End	-->
	
	
<!-- Product Sunglasses Tab Start -->	

	<div class="container">
		<div class="row">
			
				
				<!--Col1 -->
				<div class="col-sm-6 col-md-6 col-lg-6 product_question_col">
					
					<h5 class="available_lense_heading">Available Lenses</h5>
					
					<!-- Product Available lense Tab Start -->
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item product_available_lense_tab_li">
						<a class="nav-link nav-link-glasses active product_available_lense_tab_btn" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" role="tab" aria-controls="pills-home pills-home2" aria-selected="true">Single Vision</a>
					  </li>
					  <li class="nav-item product_available_lense_tab_li">
						<a class="nav-link product_available_lense_tab_btn" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" role="tab" aria-controls="pills-profile pills-profile2" aria-selected="false">Bifocals</a>
					  </li>
					  <li class="nav-item product_available_lense_tab_li">
						<a class="nav-link product_available_lense_tab_btn" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Varifocals</a>
					  </li>
						
					  <li class="nav-item product_available_lense_tab_li">
						<a class="nav-link product_available_lense_tab_btn" id="pills-sunglasses-tab" data-toggle="pill" href="#pills-sunglasses" role="tab" aria-controls="pills-sunglasses" aria-selected="false">Sunglasses</a>
					  </li>
						
					
					  <li class="nav-item product_available_lense_tab_li">
						<a class="nav-link product_available_lense_tab_btn" id="pills-reflects-tab" data-toggle="pill" href="#pills-reflects" role="tab" aria-controls="pills-reflects" aria-selected="false">Blue Reflects</a>
					  </li>	
						
						
					</ul>
					<!-- Product Available lense Tab End -->
					
					<!-- Product Available Lense Description Start -->
					
				<div class="tab-content" id="pills-tabContent">
				  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<p class="product_available_lense_tab_txt">
					  Single vision lenses are designed to help you focus on things either near (“Reading”), far (“Distance”) or at arm’s length (“Computer” or “Intermediate”).
					</p>
					  
					<p class="product_available_lense_tab_txt">
					  If you need glasses to see both near and far, you may need Bifocal or Varifocal lenses.
					</p>  
					  
				</div>
				  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<p class="product_available_lense_tab_txt">
						Bifocal lenses are designed to help you focus on things near and far. They provide a distinct separation between the distance and the reading part of the glasses, causing a visible line on the lens.
					</p>
					  
					<p class="product_available_lense_tab_txt">
					  The upper part is used for seeing at a distance. The lower part is used for seeing things close up (e.g. when reading).
					</p>				  
					  
				</div>
				  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<p class="product_available_lense_tab_txt">
					  Single vision lenses are designed to help you focus on things either near (“Reading”), far (“Distance”) or at arm’s length (“Computer” or “Intermediate”).
					</p>
					  
					<p class="product_available_lense_tab_txt">
					  If you need glasses to see both near and far, you may need Bifocal or Varifocal lenses.
					</p>	
					  
				 </div>
			   	  <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
					<p class="product_available_lense_tab_txt">
					  Single vision lenses are designed to help you focus on things either near (“Reading”), far (“Distance”) or at arm’s length (“Computer” or “Intermediate”).
					</p>
					  
					<p class="product_available_lense_tab_txt">
					  If you need glasses to see both near and far, you may need Bifocal or Varifocal lenses.
					</p>
					  
				 </div>
			 	  <div class="tab-pane fade" id="pills-reflects" role="tabpanel" aria-labelledby="pills-reflects-tab">
					<p class="product_available_lense_tab_txt">
					  Single vision lenses are designed to help you focus on things either near (“Reading”), far (“Distance”) or at arm’s length (“Computer” or “Intermediate”).
					</p>
					  
					<p class="product_available_lense_tab_txt">
					  If you need glasses to see both near and far, you may need Bifocal or Varifocal lenses.
					</p>	
				 </div>	
					
				</div>
					
					
					<!-- Product Available Lense Description End -->
					
					
					
				</div>
				<!--Col1 End -->
				
					<!--Col2 -->
				<div class="col-sm-6 col-md-6 col-lg-6 product_question_col">
			
				<div class="tab-content" id="pills-tabContent">
				  <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
					<img src="images/Shop/sunglasses/lens-singlevision.bb6e53b6ffe0.svg" class="avialable_lense_img">	
				  </div>
				  <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
					<img src="images/Shop/sunglasses/lens-bifocals.e004e004917b.svg" class="avialable_lense_img">
				  </div>
				  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<img src="images/Shop/sunglasses/lens-varifocals.d77615c297fe.svg" class="avialable_lense_img">
				  </div>
			   	  <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
					<img src="images/Shop/sunglasses/lens-sun.b137e183a855.svg" class="avialable_lense_img">
				  </div>
			 	  <div class="tab-pane fade" id="pills-reflects" role="tabpanel" aria-labelledby="pills-reflects-tab">
					<img src="images/Shop/sunglasses/lens-bluereflect.f0898621b964.svg" class="avialable_lense_img">	
				 </div>	
					
				</div>
			
				</div>
				<!--Col2 End -->
				
				
			
			
	
		</div>
	</div>
<!-- Product Sunglasses Tab End-->
<?php 
			}
			else {}
?>
	
<!-- Product Review Testimonial Tab Start -->
	
	<div class="container all_main_description">
		<div class="row">
			
			<!-- COl Start -->
			
			<div class="col-sm-12 col-md-12 col-lg-12 product_review_tab_col">
				
				<!-- Col1-->
				<div class="col-sm-12 col-md-12 col-lg-12 bgcol5 product_review_tab_col1">
				<ul class="nav nav-tabs product_review_tab_ul" id="myTab" role="tablist">
				  <li class="nav-item">
					<a class="nav-link active product_review_tab_a" id="descr-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="descr" aria-selected="true">Discription</a>
				  </li>
				 <?php 
				$description1=mysqli_query($conn,"SELECT count(*) as desc_total1 from further_optical_advice where Product_id=$product_temp_main_id and active=1");
				$data=mysqli_fetch_assoc($description1);	
				if($data['desc_total1'] >= 1) {
					
				
				 ?>
					<li class="nav-item">
				<a class="nav-link product_review_tab_a" id="futhur-tab" data-toggle="tab" href="#futhur" role="tab" aria-controls="futhur" aria-selected="false">Furthur Optical Advice</a>
					</li>
				<?php } else {} ?>
					 <?php 
				if($row['Brands_of_Contact_Lenses'] != 0) {
				$description2=mysqli_query($conn,"SELECT count(*) as desc_total2 from product where id=$product_temp_main_id and Product_Detail_Advice!=0 and active=1");
				$data=mysqli_fetch_assoc($description2);	
				if($data['desc_total2'] >= 1) {
					
				
				 ?>
					<li class="nav-item">
				<a class="nav-link product_review_tab_a" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Product Detail Advice</a>
					</li>
				<?php } else {} 
				}
				else {
				$description22=mysqli_query($conn,"SELECT count(*) as desc_total22 from product_detail_advice where  Product_id=$product_temp_main_id and active=1");
				$data=mysqli_fetch_assoc($description22);	
				if($data['desc_total22'] >= 1) {
				 ?>
					<li class="nav-item">
				<a class="nav-link product_review_tab_a" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Product Detail Advice</a>
					</li>
				<?php } else{}
					}	
				?>
				  <!--<li class="nav-item">
					<a class="nav-link product_review_tab_a" id="lense-tab" data-toggle="tab" href="#lense" role="tab" aria-controls="lense" aria-selected="false">Lense</a>
				  </li>-->
				  <!--<li class="nav-item">
					<a class="nav-link product_review_tab_a" id="testi-tab" data-toggle="tab" href="#testi" role="tab" aria-controls="testi" aria-selected="false">Testimonials</a>
				  </li>-->
				
				  <li class="nav-item">
					<a class="nav-link product_review_tab_a" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review</a>
				  </li>	
					<li class="nav-item">
					<a class="nav-link product_review_tab_a" id="guide-tab" data-toggle="tab" href="#guide" role="tab" aria-controls="guide" aria-selected="false">Guides</a>
				  </li>	
					
				</ul>
				
			</div>
				<!-- Col1-->
				
				<!-- Col2-->
				<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="descr" role="tabpanel" aria-labelledby="descr-tab">
					 
					  <p>
						  <br>
						  <?php 
					$fetchew = mysqli_query($conn,"SELECT * FROM product_description where Product_id=$product_temp_main_id AND active=1");
					while($rawew=mysqli_fetch_array($fetchew,MYSQLI_ASSOC)) {
					echo $rawew['Product_Description'];
					}
					
						  ?>
					 </p>
					  
					
				</div>
					<!-- Furthur Optical Advice -->
					<div class="tab-pane fade" id="futhur" role="tabpanel" aria-labelledby="furthur-tab">
					
					   <p>
						  <br>
						  <?php 
					
					$fetchew2 = mysqli_query($conn,"SELECT * FROM further_optical_advice where Product_id=$product_temp_main_id AND active=1");
					while($rawew2=mysqli_fetch_array($fetchew2,MYSQLI_ASSOC)) {
					echo $rawew2['Product_Optical_Advice'];
					}
						  ?>
					 </p>
					  
				  </div>	
					<!-- Furthur Optical Advice End -->
					<!-- Product Detail Advice -->
					<div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab">
					
					  <div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_testimonial_col">
						  <br>
						<?php if ($row['Brands_of_Contact_Lenses'] != 0) {?>
						<table>
							<tr>
								<th>Manufacturer</th>
								<td>
								<?php 
								$temp_rf1 = $row['Shop_by_Manufacturer'];
								$fetching1 = mysqli_query($conn,"SELECT * FROM shop_by_manufacturer where id=$temp_rf1 AND active=1");
								while($rf1=mysqli_fetch_array($fetching1,MYSQLI_ASSOC)) {
								echo $rf1['Manufacturer_Name'];
								}
								?>
								</td>
							</tr>
							<tr>
								<th>Brand</th>
								<td><?php 
								$temp_rf1 = $row['Brands_of_Contact_Lenses'];
								$fetching1 = mysqli_query($conn,"SELECT * FROM brands_of_contact_lenses where id=$temp_rf1 AND active=1");
								while($rf1=mysqli_fetch_array($fetching1,MYSQLI_ASSOC)) {
								echo $rf1['Brands_Name'];
								}
								?></td>
							</tr>
							<tr>
								<th>Wearing type</th>
								<td><?php 
								$temp_rf1 = $row['Types_of_Contact_Lenses'];
								$fetching1 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_rf1 AND active=1");
								while($rf1=mysqli_fetch_array($fetching1,MYSQLI_ASSOC)) {
								echo $rf1['Contact_Lense_Type'];
								}
								?></td>
							</tr>
							<tr>
								<th>Power range</th>
								<td><?php
								if($row['Power_Range'] == "" || $row['Power_Range'] == null || $row['Power_Range'] =='0') {
									echo "none";
								}
								else {echo $row['Power_Range'];}
								
								?></td>
							</tr>
							<tr>
								<th>Base curve(s)</th>
								<td><?php 
								if($row['Base_Curve'] == "" || $row['Base_Curve'] == null || $row['Base_Curve'] ==0 || $row['Base_Curve'] =='0') {
									echo "none";
								}
								else {echo $row['Base_Curve'];}
									?></td>
							</tr>
							<tr>
								<th>Diameter(s)</th>
								<td><?php
									if($row['Diameter'] == "" || $row['Diameter'] == null || $row['Diameter'] ==0 || $row['Diameter'] =='0') {
									echo "none";
									}
									else {echo $row['Diameter'];}
									?></td>
							</tr>
							<tr>
								<th>Lens material</th>
								<td><?php
									if($row['Lens_Material'] == "" || $row['Lens_Material'] == "0") {
									echo "none";
									}
									else {echo $row['Lens_Material'];}
									?></td>
							</tr>
							<tr>
								<th>Water content</th>
								<td><?php 
									if($row['Water_Content'] == "" || $row['Water_Content'] ==null || $row['Water_Content'] ==0 || $row['Water_Content'] =='0') {
									echo "none";
									}
									else {echo $row['Water_Content'];}
									?></td>
							</tr>
							<tr>
								<th>Oxygen permeability</th>
								<td>
								<?php
								if($row['Oxygen_Permeability'] == "" || $row['Oxygen_Permeability'] == null || $row['Oxygen_Permeability'] ==0 || $row['Oxygen_Permeability'] =='0') {
									
									 echo "none";
									}
									else {echo $row['Oxygen_Permeability'];}
								?>
								</td>
							</tr>
						</table>
						  <?php } else if($row['Types_of_Solutions'] != 0  || $row['Eye_Care'] != 0) { 
						  $fetching1 = mysqli_query($conn,"SELECT * FROM product_detail_advice where Product_id=$product_temp_main_id AND active=1");
							while($rf1=mysqli_fetch_array($fetching1,MYSQLI_ASSOC)) {
								echo $rf1['Product_Detail_Advice'];
							}
						  } else {} ?>
					</div> 
					  
				  </div>	
					<!-- Product Detail Advice End -->
				  <div class="tab-pane fade" id="guide" role="tabpanel" aria-labelledby="guide-tab">
					<br>
					  <?php 
					if($row['Brands_of_Contact_Lenses'] != 0) {
						?>
					  <div class="row">
						  
					 <div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col">
						 
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">What are the best contact lenses for dry eyes?</button><br>
						 
					</div> <div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">How to put in contact lenses</button><br>
						
					</div>
						  <div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">How to Read Your Contact Lens Prescription</button><br>
						
					</div><div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">What are the best contact lenses for dry eyes?</button><br>
						
					</div>
				  </div>
				<?php 	
				}
				else if($row['Types_of_Solutions'] != 0  || $row['Eye_Care'] != 0) { ?>
				<div class="row">
						  
					 <div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col">
						 
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='which-contact-lens-solution-do-i-need.php'">Which contact lens solution do i need?</button><br>
						 
					</div> <div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">Travelling with contact lenses</button><br>
						
					</div>
						  <div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='how-to-clean-a-contact-lens-case.php'">How to clean a contact lens case</button><br>
						
					</div><div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">How to clean and store your two weekly and monthly contact lenses</button><br>
						
					</div>
				  </div>
				<?php }
				 else if($row['Eye_Care'] != 0) {?>
					  <div class="row">
						  
					 <div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col">
						 
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='which-contact-lens-solution-do-i-need.php'">Tell-tale signs of an eye infection</button><br>
						 
					</div> <div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">Eye care tips for smartphone users</button><br>
						
					</div>
						  <div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='how-to-clean-a-contact-lens-case.php'">Does drinking coffee damage your vision?</button><br>
						
					</div><div class="col-sm-1 col-md-1 col-lg-1"><br></div>
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_testimonial_col"> 
						
						 <button type="button" class="btn btn-primary btn-lg btn-block product_price_btn_guide" onclick="location.href='what-are-the-best-contact-lenses-for-dry-eyes.php'">Handbag lifesavers for eyes</button><br>
						
					</div>
				  </div>
					  <?php }?>
				  </div>
					<!-- Review Start -->
				  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					
					  <div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_testimonial_col">  
					  <!-- Col1 -->
					  <div class="col-sm-4 col-md-4 col-lg-4 product_question_col" id="review_result">
							<?php if(isset($_SESSION['id'])) { ?>
						  <h5 class="testimonial_heading2">Add a Review</h5>
						  
						  <form method="post" action="Connection.php">
							  
							  
						  <div class="form-group" id="rating-ability-wrapper">
							<label class="control-label" for="rating">
							<span class="field-label-header"></span>
							<span class="field-label-info"></span>
							<input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
							</label>
							<h2 class="bold rating-header" style="">
							<span class="selected-rating">0</span><small> / 5</small>
							</h2>
							<button type="button" class="btnrating btn btn-default btn-sm my_rating" data-attr="1" id="rating-star-1" required>
								<i class="fa fa-star" aria-hidden="true"></i>
							</button>
							<button type="button" class="btnrating btn btn-default btn-sm my_rating" data-attr="2" id="rating-star-2">
								<i class="fa fa-star" aria-hidden="true"></i>
							</button>
							<button type="button" class="btnrating btn btn-default btn-sm my_rating" data-attr="3" id="rating-star-3">
								<i class="fa fa-star" aria-hidden="true"></i>
							</button>
							<button type="button" class="btnrating btn btn-default btn-sm my_rating" data-attr="4" id="rating-star-4">
								<i class="fa fa-star" aria-hidden="true"></i>
							</button>
							<button type="button" class="btnrating btn btn-default btn-sm my_rating" data-attr="5" id="rating-star-5">
								<i class="fa fa-star" aria-hidden="true"></i>
							</button>
						</div>
						  
							<textarea class="form-control" name="review_text" aria-label="With textarea"></textarea>
							 <input type="hidden" name="star_value" id="star_value" />
							  <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $row['id']; ?>" />
							  <input type="hidden" name="cust_id" id="cust_id" value="<?php echo $_SESSION['id']; ?>" />
							  <input type="hidden" name="order_no" id="order_no" value="<?php echo $_GET['product_id']; ?>" />
							  <button type="submit" name="review_btn" id="review_btn" class="btn btn-primary btn-sm btn-block review_submit_button" >Leave A Review</button>
							  
						  </form> 
						  <?php } else { ?>
						  
						  <h5 class="testimonial_heading2">Please Login To Add A Review</h5>
						  <br>
						  <button type="button" onClick="window.location.href='login.php';" class="btn btn-primary btn-lg btn-block review_submit_button" >Login</button><br>
						  <?php } ?>
						  
					  </div>
						  
					  <!-- Col1 End -->
					  
					  <!-- Col2 -->
					  <div class="col-sm-8 col-md-8 col-lg-8 product_question_col">
					  
						<h5 class="testimonial_heading">Reviews</h5>
						  <br><br>
						  <?php 
					$fetch_review = mysqli_query($conn,"SELECT * FROM customer_review where Product_id=$product_temp_main_id AND Approve=1 AND active=1");
					while($row_review=mysqli_fetch_array($fetch_review,MYSQLI_ASSOC)) {
					
					
					?>
						  <img src="images/testimonial.PNG" class="review_image" alt="testimonial">
						  <p class="review_title">~<?php
						$temp_cust_id = $row_review['Customer_id'];
					 $fetch_review2 = mysqli_query($conn,"SELECT * FROM customers where id=$temp_cust_id AND active=1");
					while($row_review2=mysqli_fetch_array($fetch_review2,MYSQLI_ASSOC)) {
					echo $row_review2['first_name'];
					}
							  
							  ?></p>
							<div class="review_div2 col-md-12 col-sm-12 col-lg-12 ">
						<?php for($star=1;$star<=$row_review['stars'];$star++) { ?>
						<img src="images/Products/Review/review-star-blue.png" class="product_review2">
						<!--<img src="images/Products/Review/review-star-blue.png" class="product_review2">
						<img src="images/Products/Review/review-star-blue.png" class="product_review2">
						<img src="images/Products/Review/review-star-blue.png" class="product_review2">
						<img src="images/Products/Review/review-star-blue.png" class="product_review2">-->
						<?php } ?>
						</div>
						 <p class="review_description"><i><?php echo $row_review['Customer_review']; ?></i></p>
							  
						  <hr class="review_hr">
						<?php } ?>
						<!--<p><br>No Reviews Found</p>  -->
						  
					  </div>
					  <!-- Col2 End -->
						 
					</div> 
					  
					  
				  </div>
				</div>
				</div>	
				<!-- Col2-->	
			
			</div>
			
			<!-- Col End -->
		
		
		</div>
	
	</div>
	
<!-- Product Review Testimonial Tab End -->		
	
	
	
<!-- Product Carousel Section Start -->
	
<div class="container">
	<hr>
	<br><br><br>
	<div class="row">
		
		<div class="col-sm-12 col-md-12 col-lg-12">
			<h2 class="mycarousel_class_heading">You May Also Like</h2>
			<hr class="mycarousel_class_hr">
			<?php $tito=1; ?>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators mycarousel_class">
				<li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color:#333;height:6px;"></li>
				<?php 
					$ffetchew2 = mysqli_query($conn,"SELECT * FROM product where id=$product_temp_main_id AND active=1");
					while($rrawew2=mysqli_fetch_array($ffetchew2,MYSQLI_ASSOC)) {
					
					if($rrawew2['Brands_of_Contact_Lenses'] != 0) {
						$temp_Brands_of_Contact_Lenses = $rrawew2['Brands_of_Contact_Lenses'];
					$descript1=mysqli_query($conn,"SELECT count(*) as myesc_total1 from product where Brands_of_Contact_Lenses=$temp_Brands_of_Contact_Lenses AND active=1");
				$data=mysqli_fetch_assoc($descript1);	
				if($data['myesc_total1'] > 5) {
					?>
				<li data-target="#myCarousel" data-slide-to="1" style="background-color:#333;height:6px;"></li>
					<?php } 
					}
					
					else if($rrawew2['Types_of_Solutions'] != 0) {
					$temp_Brands_of_Contact_Lenses = $rrawew2['Types_of_Solutions'];
					$descript1=mysqli_query($conn,"SELECT count(*) as myesc_total1 from product where Types_of_Solutions=$temp_Brands_of_Contact_Lenses AND active=1");
				$data=mysqli_fetch_assoc($descript1);	
				if($data['myesc_total1'] > 5) {
					?>
				<li data-target="#myCarousel" data-slide-to="1" style="background-color:#333;height:6px;"></li>
					<?php } 
					}
					else if($rrawew2['Eye_Care'] != 0) {
					$temp_Brands_of_Contact_Lenses = $rrawew2['Eye_Care'];
					$descript1=mysqli_query($conn,"SELECT count(*) as myesc_total1 from product where Eye_Care=$temp_Brands_of_Contact_Lenses AND active=1");
				$data=mysqli_fetch_assoc($descript1);	
				if($data['myesc_total1'] > 5) {
					?>
				<li data-target="#myCarousel" data-slide-to="1" style="background-color:#333;height:6px;"></li>
					<?php } 
					}
					?>
				
			</ol>   
			<!-- Wrapper for carousel items -->
				
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
					<?php 
					
					
						if($rrawew2['Brands_of_Contact_Lenses'] != 0) {
							$fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses=$temp_Brands_of_Contact_Lenses AND active=1");
						}
						else if($rrawew2['Types_of_Solutions'] != 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions=$temp_Brands_of_Contact_Lenses AND active=1");
					 	}
						else if($rrawew2['Eye_Care'] != 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Eye_Care=$temp_Brands_of_Contact_Lenses AND active=1");
					 	}
						while($rrrawew3=mysqli_fetch_array($fffetchew3,MYSQLI_ASSOC)) {
						
						if($tito <= 4) {
							if($rrrawew3['id'] == $product_temp_main_id) {
								
							}
							else {
									?>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="product.php?product_id=<?php echo $rrrawew3['order_number']; ?>" style="text-decoration: none;">
									<img src="images/Products/<?php echo $rrrawew3['image'] ?>" class="img-responsive img-fluid" alt=""></a>
								</div>
								<div class="thumb-content">
									<a href="product.php?product_id=<?php echo $rrrawew3['order_number']; ?>" style="text-decoration: none;"><h4 class="carousel_my_name"><?php echo  limit_text($rrrawew3['name'], 2) ?></h4></a>
									<p class="item-price"><?php 
										if($rrrawew3['Sale_Price'] == NULL || $rrrawew3['Sale_Price'] == "0" || $rrrawew3['Sale_Price'] == 0 || $rrrawew3['Sale_Price'] == "") { }  else {?><strike class="carousel_my_sale_price">$<?php echo $rrrawew3['Sale_Price'] ?></strike><?php } ?> <span class="carousel_my_price">$<?php echo $rrrawew3['Price']; ?></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
										</ul>
									</div>
									<a href="product.php?product_id=<?php echo $rrrawew3['order_number']; ?>" class="btn btn-primary carousel_my_btn">VIEW AND BUY</a>
								</div>						
							</div>
						</div>
						<?php
						$tito++;
								}
						 }else {}
					}
						
						?>										   
					</div>
				</div> 
				<?php
				 if($tito > 4 && $tito < 8) {
						
						?>
				<div class="item carousel-item">
					<div class="row"><?php 
					 if($rrawew2['Brands_of_Contact_Lenses'] != 0) {
							$fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_Lenses=$temp_Brands_of_Contact_Lenses AND active=1");
						}
					 else if($rrawew2['Types_of_Solutions'] != 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Types_of_Solutions=$temp_Brands_of_Contact_Lenses AND active=1");
					 }
					 else if($rrawew2['Eye_Care'] != 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Eye_Care=$temp_Brands_of_Contact_Lenses AND active=1");
					 }
					 $cnt = 0;
					 while($rrrawew4=mysqli_fetch_array($fffetchew3,MYSQLI_ASSOC)) { 
						 $cnt++;
						 if($rrrawew4['id'] == $product_temp_main_id) {
								
							}
							else {
						if($cnt > 5 && $cnt < 10) {
						?>
						
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="product.php?product_id=<?php echo $rrrawew4['order_number']; ?>" style="text-decoration: none;">
									<img src="images/Products/<?php echo $rrrawew4['image'] ?>" class="img-responsive img-fluid" alt=""></a>
								</div>
								<div class="thumb-content">
									<a href="product.php?product_id=<?php echo $rrrawew4['order_number']; ?>" style="text-decoration: none;"><h4 class="carousel_my_name"><?php echo  limit_text($rrrawew4['name'], 2) ?></h4></a>
									<p class="item-price"><?php 
										if($rrrawew4['Sale_Price'] == NULL || $rrrawew4['Sale_Price'] == "0" || $rrrawew4['Sale_Price'] == 0 || $rrrawew4['Sale_Price'] == "") { }  else {?><strike class="carousel_my_sale_price">$<?php echo $rrrawew4['Sale_Price'] ?></strike><?php } ?> <span class="carousel_my_price">$<?php echo $rrrawew4['Price']; ?></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star carousel_my_star"></i></li>
										</ul>
									</div>
									<a href="product.php?product_id=<?php echo $rrrawew4['order_number']; ?>" class="btn btn-primary carousel_my_btn">VIEW AND BUY</a>
								</div>					
							</div>
						</div>
						<?php
							
						$tito++;
						}
						else {}
							}
						}?>
					</div>
				</div>
				<?php 
							
				 }
				else { }
					
				} ?>
			</div>
			<!-- Carousel controls --
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>-->
		</div>
		</div>
	</div>
</div>	
	<br><br><br><br>
<!-- Product Carousel Section End -->	
	<?php } ?>
						  
	
<?php include 'footer.php' ?>

	
</body>
</html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
<?php 
$att1 = 1; 
$attt1 = 0;
	$fetch_query = mysqli_query($conn,"SELECT * FROM product where order_number='$product_temp_id' AND active=1");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
					$temp_id = $row['id'];

					$attt1++;
 
//1 Product Merge Check
							$fetch_queryy5 = mysqli_query($conn,"SELECT * FROM product_merge where Product_id=$temp_id AND active=1");
							while($roww5=mysqli_fetch_array($fetch_queryy5,MYSQLI_ASSOC)) {
								$temp_merge_id = $roww5['Merge'];
								//2 Product Call
								$fetch_queryy6 = mysqli_query($conn,"SELECT * FROM product where id=$temp_merge_id AND active=1");
								while($roww6=mysqli_fetch_array($fetch_queryy6,MYSQLI_ASSOC)) {
									$temp_frame_color_id = $roww6['Frame_Color'];
									
								
                          

?>

									$('.color<?php echo $att1 ?>').on({
										 'click': function(){
											 $('#prod_image<?php echo $attt1 ?>').attr('src','images/Products/<?php echo $roww6['image']; ?>');
										 }
									 });
 /*
 $('#thumbs').delegate('img','click', function(){
	$('#prod_image<?php// echo $att ?>').attr('src',$(this).attr('src').replace('thumb','large'));
	//$('#description').html($(this).attr('alt'));
});*/

<?php 
$att1++;
									
								}
							}
				}
				
				
?>
jQuery(document).ready(function($){ 
		var op = $('#orignal_price').text();
		$('#final_price').val(op);
		
});
//Price Additions For Cart
$(document).on("change", "#right_qty", function (e) {
		 e.preventDefault();
		var op = $('#orignal_price').text();
		$('#final_price').val(op);
		var fp = parseInt($('#final_price').val());
		var rq = parseInt($('#right_qty').val());
		var lq = parseInt($('#left_qty').val());
		var fn_lq = (fp * lq);
		var fn_rq = (fp * rq);
		var fn = (fn_lq + fn_rq);
		$('#final_price').val(fn);
		e.preventDefault();
	});
	
	$(document).on("change", "#left_qty", function (e) {
		 e.preventDefault();
		var op = $('#orignal_price').text();
		$('#final_price').val(op);
		var fp = parseInt($('#final_price').val());
		var rq = parseInt($('#right_qty').val());
		var lq = parseInt($('#left_qty').val());
		var fn_lq = (fp * lq);
		var fn_rq = (fp * rq);
		var fn = (fn_lq + fn_rq);
		$('#final_price').val(fn);
		e.preventDefault();
	});
	
	
	
	
//Refresh Error
	if (window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
	
	
//Glasses
 $('.main_product_colors_div2 .main_product_color_image').click(function(){
    $(this).parent().find('.main_product_color_image').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
	
//Rating Stars
	jQuery(document).ready(function($){
	    
	$(".btnrating").on('click',(function(e) {
	
	var previous_value = $("#selected_rating").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating").val(selected_value);
	$("#star_value").val(selected_value);
	
	$(".selected-rating").empty();
	$(".selected-rating").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star-"+i).toggleClass('btn-warning');
	$("#rating-star-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star-"+ix).toggleClass('btn-warning');
	$("#rating-star-"+ix).toggleClass('btn-default');
	}
	
	}));
	
		
});

//Review Success
	<?php if(isset($_GET['review'])) { ?>
 $(window).on('load',function(){
        alert("Your Review Is Submitted");
	 	window.location = 'product.php?product_id=<?php echo $_GET['product_id']; ?>';
    });
	
	<?php } else {} ?>
	
</script>
