<?php include 'Connection.php' ?>
<?php 
if(isset($_POST['hidden_name'])) {
	$_SESSION['step1_option_id'] = $_POST['hidden_id'];
	$_SESSION['step1_option_type'] = $_POST['hidden_type'];
	$_SESSION['step1_option_name'] = $_POST['hidden_name'];
	$_SESSION['step1_option_price'] = $_POST['hidden_price'];
	
	//Update
	$item_array = ['item_id' => $_POST['hidden_id']];
	foreach( $_SESSION['shopping_cart'] as $key => $value ) {
      if( $value['item_id']  == $item_array['item_id']) {
		  $_SESSION['shopping_cart'][$key]['item_step1_option_type'] = $_POST['hidden_type'];
		  $_SESSION['shopping_cart'][$key]['item_step1_option_name'] = $_POST['hidden_name'];
		  $_SESSION['shopping_cart'][$key]['item_step1_option_price'] = $_POST['hidden_price'];
		  header("Location: basket.php");
		  
        }
    }
	
}
//Recall
	$item_array = ['item_id' => $_GET['Product_id']];
    foreach( $_SESSION['shopping_cart'] as $key => $value2 ) {
      if( $value2['item_id']  == $item_array['item_id']) {
		  $_SESSION['step1_option_type'] = $_SESSION['shopping_cart'][$key]['item_step1_option_type'];
		  $_SESSION['step1_option_name'] = $_SESSION['shopping_cart'][$key]['item_step1_option_name'];
		  $_SESSION['step1_option_price'] = $_SESSION['shopping_cart'][$key]['item_step1_option_price'];
        // $_SESSION['cart'][$key]['quantity'] = $value['quantity'] + $product_array['quantity'];
           //$_SESSION['cart'][$key]['price'] = $value['price'] + $product_array['price'];
		  
		  //step 2
		  $_SESSION['step2_option_hidden_alize_forte'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte'];
		  $_SESSION['step2_option_hidden_alize_forte_price'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte_price'];
		  $_SESSION['step2_option_hidden_option_all'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all'];
		  $_SESSION['step2_option_hidden_option_all_price'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all_price'];
		  $_SESSION['step2_option_hidden_option_btn'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_btn'];
		  $_SESSION['step2_option_hidden_option_tint_info'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_tint_info'];
        }
    }


echo $_SESSION['step2_option_hidden_option_all'];
echo $_SESSION['step2_option_hidden_alize_forte'];
echo $_SESSION['step2_option_hidden_option_btn'];
echo $_SESSION['step2_option_hidden_option_tint_info'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Step2</title>
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
			
			<!-- Col1 -->
			<div class="col-sm-12 col-md-12 col-lg-9 step2_col_main_row">
				
				<form method="post" id="target2" action="step3.php" >
					
				<!-- Col1 Start-->
				<!--<p><?php //echo $_SESSION['step1_option_id']; ?></p>
				<p><?php //echo $_SESSION['step1_option_type']; ?></p>
			<p><?php //echo $_SESSION['step1_option_name']; ?></p>
			<p><?php //echo $_SESSION['step1_option_price']; ?></p>-->
				<h5 class="step1_heading4">Select Ad-ons Options</h5>
				
									<!-- Verofocal Lenses Section -->
					<?php
		$fetch_query1 = mysqli_query($conn,"SELECT * FROM lenses_visions_price where id=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
		?>
					<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step2_col">
					
					<!-- COl2 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_2">
						
						<div class="product_question_col_step_2_sub">
						<img src="images/Step2/anti_lens.jpg" class="step2_img3">
						<h5 class="step1_heading">ANTI-REFLECTIVE COATING</h5>	
						<h5 class="step1_heading2">$</h5>
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#staticBackdrop1" class="video_button">
						 <img src="images/Step2/camera.png" class="video_button_img">
						</button>
						<p class="step2_txt">Select Your Colour</p>
							
                                <div class="glasses_main_div1" id="alize">
                                <label class="labl">
                                <input type="checkbox" name="radioname" class="radioname" id="radioname" value="1"/>
                                <!-- my_select_d1 //For div selected funtion -->
                            		<div class="glasses_sub_div my_select_d1">
                            		<img src="images/Step2/brown.png" class="step2_glass_img">
                                	<p class="step2_glass_txt2"><span class="step2_glass_txt">Anti-Reflec</span>($<span id="alize_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											echo $row1['sv_alize'];
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											echo $row1['b_alize'];
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											echo $row1['v_alize'];
										}
										else {}
										?></span>)</p>
                                	</div>
                                    </label>
                            	</div>
                            
                          
                           	<div class="glasses_main_div2" id="forte">
                             <label class="labl">
                                <input type="checkbox" name="radioname" class="radioname" id="rradioname" value="2"/>
                            	<div class="glasses_sub_div my_select_d1">
                            	<img src="images/Step2/green.png" class="step2_glass_img">
                                <p class="step2_glass_txt2"><span class="step2_glass_txt">Forte</span>($<span id="forte_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											echo $row1['sv_forte'];
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											echo $row1['b_forte'];
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											echo $row1['v_forte'];
										}
										else {}
										?></span>)</p>
                                </div>
                                </label>
                            </div>
                            

						</div>
					
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_2">
						
						<div class=" product_question_col_step_2_sub">
						<img src="images/Step2/transition_icon.jpg" class="step2_img3">
						<h5 class="step1_heading" id="transition">TRANSITIONS</h5>	
						<h5 class="step1_heading2">$<span id="transition_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_transition'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_transition']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_transition'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_transition']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_transition'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_transition']; }
										}
										else {}
										?></span></h5>
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#staticBackdrop2" class="video_button">
						 <img src="images/Step2/camera.png" class="video_button_img">
						</button>
                         <p class="step2_txt">Select Your Colour</p>
                         
                         <div class="glasses_main_div1" id="transition_gray">
                         <label class="labl2">
                                <input type="checkbox" name="radioname2" class="radioname2" id="radioname2" value="3"/>
                            	<div class="glasses_sub_div my_select_d2">
                            	<img src="images/Step2/gray.png" class="step2_glass_img">
                                <p class="step2_glass_txt">Gray</p>
                                </div>
                                </label>
                            </div>
                            
                           	<div class="glasses_main_div2" id="transition_brown">
                            <label class="labl2">
                                <input type="checkbox" name="radioname2" class="radioname2" id="rradioname2" value="4"/>
                            	 <div class="glasses_sub_div my_select_d2">
                            	<img src="images/Step2/brown.png" class="step2_glass_img">
                                <p class="step2_glass_txt">Brown</p>
                                </div>
                                </label>
                            </div>
                            
						</div>
					
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_2">
						
						<div class="product_question_col_step_2_sub">
						<img src="images/Step2/polarized_icon.jpg" class="step2_img3">
						<h5 class="step1_heading" id="polarized">POLARIZED</h5>	
						<h5 class="step1_heading2">$<span id="polarized_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_polarised'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_polarised']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_polarised'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_polarised']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_polarised'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_polarised']; }
										}
										else {}
										?></span></h5>
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#staticBackdrop3" class="video_button">
						 <img src="images/Step2/camera.png" class="video_button_img">
						</button>
                        <p class="step2_txt">Select Your Colour</p>
                        
                        <div class="glasses_main_div1" id="polarized_gray">
                        <label class="labl2">
                                <input type="checkbox" name="radioname2" class="radioname2" id="rrradioname2" value="5"/>
                            	<div class="glasses_sub_div my_select_d2">
                            	<img src="images/Step2/gray.png" class="step2_glass_img">
                                <p class="step2_glass_txt">Gray</p>
                                </div>
                                </label>
                            </div>
                            
                           	<div class="glasses_main_div2" id="polarized_brown">
                            <label class="labl2">
                                <input type="checkbox" name="radioname2" class="radioname2" id="rrrradioname2" value="6"/>
                            	 <div class="glasses_sub_div my_select_d2">
                            	<img src="images/Step2/brown.png" class="step2_glass_img">
                                <p class="step2_glass_txt">Brown</p>
                                </div>
                                </label>
                            </div>
                        
						</div>
					
					</div>
					
					<!-- COl4 End -->
					
					<!-- COl4 Start -->
					
					
					
					<!-- COl4 End -->
				
				</div>
					
					<!-- Verifocal Lenses Section End -->
                
                					<!-- Verofocal Lenses Section -->
					
					<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step2_col">
					
					<!-- COl2 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_2">
						<label class="labl3">
                        <input type="checkbox" name="radioname3" class="radioname3" id="radioname3" value="13"/>
						<div class="product_question_col_step_2_sub my_select_d3" id="digital_protection">
						<img src="images/Step2/uv_protection.jpg" class="step2_img3">
						<h5 class="step1_heading" id="digital_protection1">DIGITAL PROTECTION</h5>	
						<h5 class="step1_heading2">$<span id="digital_protection_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_uv'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_uv']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_uv'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_uv']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_uv'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_uv']; }
										}
										else {}
										?></span></h5>
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#staticBackdrop4" class="video_button">
						 <img src="images/Step2/camera.png" class="video_button_img">
						</button>
                        <p class="step2_txt">&nbsp;</p>
                        
						</div>
						</label>
					
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_2">
						
						<div class=" product_question_col_step_2_sub">
						<img src="images/Step2/tint_icon.jpg" class="step2_img3">
						<h5 class="step1_heading" id="tint">TINT</h5>	
						<h5 class="step1_heading2">$<span id="tint_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_tint'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_tint']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_tint'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_tint']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_tint'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_tint']; }
										}
										else {}
										?></span></h5>
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#staticBackdrop5" class="video_button">
						 <img src="images/Step2/camera.png" class="video_button_img">
						</button>
                        <p class="step2_txt">Select Your Colour</p>
                        
                        <div class="glasses_main_div3" id="tint_brown">
							<label class="labl4">
                                <input type="checkbox" name="radioname4" class="radioname4" id="radioname4" value="7"/>
                            	<div class="glasses_sub_div my_select_d4">
                            	<img src="images/Step2/brown.png" class="step2_glass_img2">
                                <p class="step2_glass_txt">Brown</p>
                                </div>
							</label>
                            </div>
                            
                           	<div class="glasses_main_div4" id="tint_green">
								<label class="labl4">
                                <input type="checkbox" name="radioname4" class="radioname4" id="rradioname4" value="8"/>
                            	 <div class="glasses_sub_div my_select_d4">
                            	<img src="images/Step2/green.png" class="step2_glass_img2">
                                <p class="step2_glass_txt">Green</p>
                                </div>
								</label>
                            </div>
                            
                            <div class="glasses_main_div5" id="tint_gray">
								<label class="labl4">
                                <input type="checkbox" name="radioname4" class="radioname4" id="rrradioname4" value="9"/>
                            	 <div class="glasses_sub_div my_select_d4">
                            	<img src="images/Step2/gray.png" class="step2_glass_img2">
                                <p class="step2_glass_txt">Gray</p>
                                </div>
								</label>
                            </div>
                        
                        	
						</div>
					
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_2">
						<label class="labl3">
                        <input type="checkbox" name="radioname3" class="radioname3" id="rradioname3" value="14"/>
						<div class="product_question_col_step_2_sub my_select_d3" id="clear">
						<img src="images/Step2/uv_protection.jpg" class="step2_img3">
						<h5 class="step1_heading" id="clear1">CLEAR</h5>	
						<h5 class="step1_heading2">$<span id="clear_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_clear'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_clear']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_clear'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_clear']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_clear'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_clear']; }
										}
										else {}
										?></span></h5>
						<!-- Button trigger modal -->
						<button type="button" data-toggle="modal" data-target="#staticBackdrop6" class="video_button">
						 <img src="images/Step2/camera.png" class="video_button_img">
						</button>
                        <p class="step2_txt2">Transparent Lense For Everyday Use.</p>
                        
						</div>
						</label>
					
					</div>
					
					<!-- COl4 End -->
					
					<!-- COl4 Start -->
					
					
					
					<!-- COl4 End -->
				
				</div>
					
					<!-- Verifocal Lenses Section End -->
				
				<!-- Tint Coloum Start -->
				
				<div class="step1_col1 col-sm-12 col-md-12 col-lg-12 product_question_col step_1_main_rows">
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<!-- COl1 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<label class="labl3">
                         <input type="checkbox" name="radioname3" class="radioname3" id="rrradioname3" value="9"/>
						<div class="product_question_col_step_1_sub my_select_d3" id="tint_10">
						<h5 class="step1_heading2"><br>CLEAR TINT</h5>	
						<img src="images/Step2/l1.png" class="step1_img step_img_image">
						<h5 class="step1_heading">UV 100% - Visible Light 10%</h5>	
						<p class="step1_text1">Urban Variable light conditions for comfort and appearance.</p>
                        
						</div>
						</label>
						
					</div>
					
					<!-- COl1 End -->
					
					<!-- COl2 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
						<label class="labl3">
                        <input type="checkbox" name="radioname3" class="radioname3" id="rrrradioname3" value="10"/>
						<div class="product_question_col_step_1_sub my_select_d3" id="tint_40">
						<h5 class="step1_heading2"><br>SLIGHTLY TINT</h5>	
						<img src="images/Step2/l2.png" class="step1_img step_img_image">
						<h5 class="step1_heading">UV 100% - Visible Light 40%</h5>	
						<p class="step1_text1">All Environment Variable sunlight - everyday use</p>
						</div>
						</label>
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
						<label class="labl3">
                        <input type="checkbox" name="radioname3" class="radioname3" id="rrrrradioname3" value="11"/>
						<div class=" product_question_col_step_1_sub my_select_d3" id="tint_70">
						<h5 class="step1_heading2"><br>MEDIUM TINT</h5>	
						<img src="images/Step2/l3.png" class="step1_img step_img_image">
						<h5 class="step1_heading">UV 100% - Visible Light 70%</h5>	
						<p class="step1_text1">Sea and mountains Bright sunlight</p>	
						</div>
						</label>
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
						<label class="labl3">
                        <input type="checkbox" name="radioname3" class="radioname3" id="rrrrrradioname3" value="12"/>
						<div class="product_question_col_step_1_sub my_select_d3" id="tint_85">
						<h5 class="step1_heading2"><br>DARK</h5>	
						<img src="images/Step2/l4.png" class="step1_img step_img_image">
						<h5 class="step1_heading">UV 100% - Visible Light 85%</h5>	
						<p class="step1_text1">Sea and mountains Intense conditions</p>
						</div>
						</label>
					</div>
					
					<!-- COl4 End -->
				
				</div>
						
				</div>
			</div>
				<!-- Tint Coloumn End -->
				<?php } ?>
                
				<!-- Step1 pagination Button -->
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_btn_col">
				
					<button type="button" class="btn btn-outline-primary step1_pagination_btn1"><< Previous Step</button>
					<input type="submit" class="btn btn-outline-primary step1_pagination_btn" value="Next Step >>"/>
	
					
				</div>
				
				<!-- Step1 pagination Button -->
				
			</div>
			<!-- Col1 -->
		
			<?php
			$temp_product_id = $_SESSION['step1_option_id'];
		$fetch_query2 = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id AND active=1");
				while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
		?>
			<!-- Col2 -->
			<div class="col-sm-12 col-md-12 col-lg-3 step_img_main_col">
			
				<!-- Col1 -->
				<div class="col-sm-12 col-md-12 col-lg-12 step_img_heading_col product_question_col">
				
					<h5 class="step1_img_heading">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						Your Selected Items
					</h5>
									
				</div>
				
				<!-- Col1 End -->
				
				<p class="step_sub_heading"><?php echo $row2['name']; ?></p>
				
				<!-- Col2 -->
				<div class="col-sm-12 col-md-12 col-lg-12 step_img_main_col step_img_heading_col step_img_heading_col_main">
					
					<img src="images/Products/<?php echo $row2['image']; ?>" class="step_img">
				
				</div>
				<hr>
				
				
				<!-- Col2 End -->
				
				<p class="step_sub_heading">FRAME INFO</p>
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading">Brand:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_brand = $row2['Brand'];
					$fetch_query5 = mysqli_query($conn,"SELECT * FROM brand where id=$temp_brand  AND active=1");
									while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) {
										echo $row5['Brand'];
									}
					 ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading">Colour:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_color = $row2['Frame_Color'];
					$fetch_query6 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_color  AND active=1");
									while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
										echo $row6['Frame_Color'];
									}
					 ?></td>
						
						</tr>
						
						
						<tr>
							<th class="step_side_tbl_heading">Size:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_color = $row2['Frame_Size'];
					$fetch_query6 = mysqli_query($conn,"SELECT * FROM frame_size where id=$temp_color  AND active=1");
									while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
										echo $row6['Frame_Size'];
									}
					 ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading">Gender:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_gender = $row2['Gender'];
					$fetch_query7 = mysqli_query($conn,"SELECT * FROM gender where id=$temp_gender AND active=1");
									while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) {
										echo $row7['Gender'];
									}
					 ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading">Shape:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_shape = $row2['Shape'];
					$fetch_query8 = mysqli_query($conn,"SELECT * FROM shape where id=$temp_shape AND active=1");
									while($row8=mysqli_fetch_array($fetch_query8,MYSQLI_ASSOC)) {
										echo $row8['Shape'];
									}
					 ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading">Material:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_marterial = $row2['Material'];
					$fetch_query9 = mysqli_query($conn,"SELECT * FROM material where id=$temp_marterial AND active=1");
									while($row9=mysqli_fetch_array($fetch_query9,MYSQLI_ASSOC)) {
										echo $row9['Material'];
									}
					 ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading">Measurements:</th>
							<td class="step_side_tbl_data"><?php echo $row2['fm_lense_width'] ." - ".$row2['fm_lense_bt_width']." - ".$row2['fm_stick_width']; ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading_price">Price: </th>
							<td class="step_side_tbl_data_price"><span class="my_theme_col2">$</span><span id="product_price"><?php echo $row2['Price']; ?></span></td>
						
						</tr>	
											
						
					
					</table>
				
				</div>
				
				<!-- COl3 End -->
				<hr>
				<!-- Col2 End -->
				
				<p class="step_sub_heading">Selected Options</p>
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading"><?php
						if($_SESSION['step1_option_type'] == "none") { }
						else { echo $_SESSION['step1_option_type'];
							 }?></th>
							<td class="step_side_tbl_data">&nbsp;</td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step1_option_name']; ?></th>
							<td class="step_side_tbl_data">$<?php echo $_SESSION['step1_option_price']; ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><span id="option_alize_forte2"></span></th>
							<td class="step_side_tbl_data"><span id="option_alize_forte2_price"></span></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><span id="option_all2"></span> <span id="option_btn"></span></th>
							<td class="step_side_tbl_data"><span id="option_all2_price"></span></td>
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><span id="option_tint_info"></span></th>
							
						
						</tr>
						
						<!--
						<tr>
							<th class="step_side_tbl_heading">Size:</th>
							<td class="step_side_tbl_data">Black (1AB0A7)</td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading">Gender:</th>
							<td class="step_side_tbl_data">£168.00</td>
						
						</tr>
						-->
											
						
					
					</table>
				
				</div>
				
				<!-- COl3 End -->
				<hr>
				
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading_price">TOTAL: </th>
							<td class="step_side_tbl_data_price"><span class="my_theme_col2">$</span><span id="mytotal"></span></td>
						
						</tr>
						
					
					
					</table>
				
				</div>
				
				<!-- COl3 End -->

					
			<input type="hidden" name="hidden_alize_forte" id="option_alize_forte" value="<?php if(isset($_SESSION['step2_option_hidden_alize_forte'])) { echo $_SESSION['step2_option_hidden_alize_forte']; } else {} ?>" />
				
			<input type="hidden" name="hidden_alize_forte_price" id="option_alize_forte_price" value="<?php if(isset($_SESSION['step2_option_hidden_alize_forte_price'])) { echo $_SESSION['step2_option_hidden_alize_forte_price']; } else {} ?>" />
				
			<input type="hidden" name="hidden_option_all" id="option_all" value="<?php if(isset($_SESSION['step2_option_hidden_option_all'])) { echo $_SESSION['step2_option_hidden_option_all']; } else {} ?>" />
				
			<input type="hidden" name="hidden_option_all_price" id="option_all_price" value="<?php if(isset($_SESSION['step2_option_hidden_option_all_price'])) { echo $_SESSION['step2_option_hidden_option_all_price']; } else {} ?>" />
				
			<input type="hidden" name="hidden_option_btn" id="option_btn_val" value="<?php if(isset($_SESSION['step2_option_hidden_option_btn'])) { echo $_SESSION['step2_option_hidden_option_btn']; } else {} ?>" />
				
			<input type="hidden" name="hidden_option_tint_info" id="option_tint_info_val" value="<?php if(isset($_SESSION['step2_option_hidden_option_tint_info'])) { echo $_SESSION['step2_option_hidden_option_tint_info']; } else {} ?>" />
				
			<input type="hidden" name="hidden_step1_option_price" id="hidden_step1_option_price" value="<?php echo $_SESSION['step1_option_price']; ?>" />

			</form>
				
			
			</div>
			
			
			
			
			<!-- COl2 -->
			<?php } ?>
			
				
		</div>
		
	</div>
	
	<!-- Modal 01 Start Anti Reflective Coating-->
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ANTI REFLECTIVE COATING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/1T-hHBAPaFg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal 01 End -->	
	

<!-- Modal 02 Start Transition-->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">TRANSITION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/1T-hHBAPaFg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal 02 End -->
	
	
	<!-- Modal 03 Start Polarized-->
<div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">POLARIZED</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/1T-hHBAPaFg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal 03 End -->	
	
	
<!-- Modal 04 Start DIGITAL PROTECTION-->
<div class="modal fade" id="staticBackdrop4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">DIGITAL PROTECTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/4n8HHZuE9WI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal 04 End -->	
	
	

	
<!-- Modal 05 Start TINT-->
<div class="modal fade" id="staticBackdrop5" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">TINT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/4n8HHZuE9WI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal 05 End -->	
	
<!-- Modal 06 Start CLEAR-->
<div class="modal fade" id="staticBackdrop6" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CLEAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/4n8HHZuE9WI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal 06 End -->	
	

		
		
<?php include 'footer.php' ?>		
	
<script>
//sample
$(function() {
 $('#verifocal_best').click(function(){
	 $('#option_type').val("Verifocal");
	 $('#option_name').val("Best");
	 $('#option_price').val($('#verifocal_best_price').text());
	 javascript:document.forms[0].submit();
 });
});	
//Active Function	
$( document ).ready(function() {
	<?php 
	//1
    if(isset($_SESSION['step2_option_hidden_alize_forte'])) {
		if(strpos($_SESSION['step2_option_hidden_alize_forte'], "Anti-Reflec") !== false) { ?>
		$('#radioname').not(this).prop('checked', true);
		$('#option_alize_forte2').text($('#option_alize_forte').val());
		$('#option_alize_forte2_price').text("$"+$('#option_alize_forte_price').val());
		<?php }
		else if(strpos($_SESSION['step2_option_hidden_alize_forte'], "Forte") !== false) { ?>
		$('#rradioname').not(this).prop('checked', true);
		$('#option_alize_forte2').text($('#option_alize_forte').val());
		$('#option_alize_forte2_price').text("$"+$('#option_alize_forte_price').val());
		<?php }
		else {}
	}
	//2
	if(isset($_SESSION['step2_option_hidden_option_all'])) {
		
		if($_SESSION['step2_option_hidden_option_all'] == "TRANSITIONS") { 
				if($_SESSION['step2_option_hidden_option_btn'] == "(Gray)") { ?>
				$('#radioname2').not(this).prop('checked', true);
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php }
				else if($_SESSION['step2_option_hidden_option_btn'] == "(Brown)") { ?>
				$('#rradioname2').not(this).prop('checked', true);
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php	}
				else {} ?>
		<?php }
		else if($_SESSION['step2_option_hidden_option_all'] == "POLARIZED") { 
				if($_SESSION['step2_option_hidden_option_btn'] == "(Gray)") { ?>
				$('#rrradioname2').not(this).prop('checked', true);
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php }
				else if($_SESSION['step2_option_hidden_option_btn'] == "(Brown)") { ?>
				$('#rrrradioname2').not(this).prop('checked', true);
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php	}
				else {} ?>
		<?php }
		else if($_SESSION['step2_option_hidden_option_all'] == "DIGITAL PROTECTION") { ?>
		$('#computer').addClass('step_active');
		<?php }
		else if($_SESSION['step2_option_hidden_option_all'] == "TINT") { 
				if($_SESSION['step2_option_hidden_option_btn'] == "(Brown)") { ?>
				$('#radioname4').not(this).prop('checked', true);
				$('#pills-home').addClass('active');
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php }
				else if($_SESSION['step2_option_hidden_option_btn'] == "(Green)") { ?>
				$('#rradioname4').not(this).prop('checked', true);
				$('#pills-home').addClass('active');
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php	}
				else if($_SESSION['step2_option_hidden_option_btn'] == "(Gray)") { ?>
				$('#rrradioname4').not(this).prop('checked', true);
				$('#pills-home').addClass('active');
				//Price Set
				$('#option_btn').text($('#option_btn_val').val());
				$('#option_all2').text($('#option_all').val());
				$('#option_all2_price').text("$"+$('#option_all_price').val());
				<?php	}
				else {} ?>
				<?php 
				//Tint Darkness
				if($_SESSION['step2_option_hidden_option_tint_info'] == "(CLEAR TINT)") { ?>
				$('#rrradioname3').not(this).prop('checked', true);
				//Price Set
				$('#option_tint_info').text($('#option_tint_info_val').val());
				<?php }
				else if($_SESSION['step2_option_hidden_option_tint_info'] == "(SLIGHTLY TINT)") { ?>
				$('#rrrradioname3').not(this).prop('checked', true);
				//Price Set
				$('#option_tint_info').text($('#option_tint_info_val').val());
				<?php	}
				else if($_SESSION['step2_option_hidden_option_tint_info'] == "(MEDIUM TINT)") { ?>
				$('#rrrrradioname3').not(this).prop('checked', true);
				//Price Set
				$('#option_tint_info').text($('#option_tint_info_val').val());
				<?php	}
				else if($_SESSION['step2_option_hidden_option_tint_info'] == "(DARK)") { ?>
				$('#rrrrrradioname3').not(this).prop('checked', true);
				//Price Set
				$('#option_tint_info').text($('#option_tint_info_val').val());
				<?php	}
				else {} ?>
		<?php }
		else if($_SESSION['step2_option_hidden_option_all'] == "28 mm") { ?>
		$('#b_28mm1').addClass('step_active');
		<?php }
		else if($_SESSION['step2_option_hidden_option_all'] == "CLEAR") { ?>
		$('#b_28mm_blended1').addClass('step_active');
		<?php }
		else {}
	}
	//3
	if(isset($_SESSION['step1_option_price'])) {}
	?>
});
	
//Check Box Double Click Set
$(document).ready(function(){
    $('.radioname').click(function() {
        $('.radioname').not(this).prop('checked', false);
    });
});

$(document).ready(function(){
    $('.radioname2').click(function() {
        $('.radioname2').not(this).prop('checked', false);
    });
});
	
$(document).ready(function(){
    $('.radioname3').click(function() {
        $('.radioname3').not(this).prop('checked', false);
    });
});
	
$(document).ready(function(){
    $('.radioname4').click(function() {
        $('.radioname4').not(this).prop('checked', false);
    });
});
	
function total() {
	var a,b,c,d;
	if($('#option_alize_forte_price').val() == "FREE" || $('#option_alize_forte_price').val() == "") {
	   a = 0;
	} else { a = $('#option_alize_forte_price').val(); }
	
	if($('#option_all_price').val() == "FREE" || $('#option_all_price').val() == "") {
	   b = 0;
	} else { b = $('#option_all_price').val(); }
	
	if($('#hidden_step1_option_price').val() == "FREE" || $('#hidden_step1_option_price').val() == "") {
	   c = 0;
	} else { c = $('#hidden_step1_option_price').val(); }
	
	if($('#product_price').text() == "FREE" || $('#product_price').text() == "") {
	   d = 0;
	} else { d = $('#product_price').text(); }
	
	var aa = parseInt(a);
	var bb = parseInt(b);
	var cc = parseInt(c);
	var dd = parseInt(d);
	var total2 = (aa+bb+cc+dd);
	$('#mytotal').text(total2);
}
	

//Anti Reflective
$(function() {
 $('#alize').click(function(){
	 
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 $('.radioname3').prop('checked', false);
	 
	 //Add And Set Price
	 $('#option_alize_forte').val($('#alize').text());
	 $('#option_alize_forte_price').val($('#alize_price').text());
	 $('#option_alize_forte2').text($('#alize').text());
	 $('#option_alize_forte2_price').text("$"+$('#alize_price').text());
	 
	 //Reset Value On Double Click
	 if($(".radioname").prop('checked') == false){
		 $('#option_alize_forte').val("");
	 	 $('#option_alize_forte_price').val("");
    	 $('#option_alize_forte2').text("");
		 $('#option_alize_forte2_price').text("");
	 }
	 
	 //Remove Digital Protection Or Clear Values 
	 if($('#option_all2').text() == "DIGITAL PROTECTION" || $('#option_all2').text() == "CLEAR") {
		$('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
	 
 });
});	

	
	
$(function() {
 $('#forte').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 $('.radioname3').prop('checked', false);
	 
	 //Add And Set Price
	 $('#option_alize_forte').val($('#forte').text());
	 $('#option_alize_forte_price').val($('#forte_price').text());
	 $('#option_alize_forte2').text($('#forte').text());
	 $('#option_alize_forte2_price').text("$"+$('#forte_price').text());
	 
	 //Reset Value On Double Click
	 if($("#rradioname").prop('checked') == false){
		 $('#option_alize_forte').val("");
	 	 $('#option_alize_forte_price').val("");
    	 $('#option_alize_forte2').text("");
		 $('#option_alize_forte2_price').text("");
	 }
	 //Remove Digital Protection Or Clear Values 
	 if($('#option_all2').text() == "DIGITAL PROTECTION" || $('#option_all2').text() == "CLEAR") {
		$('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	
	
//Transitions
$(function() {
 $('#transition_gray').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 
	 //Add And Set Price
	 $('#option_all').val($('#transition').text());
	 $('#option_all_price').val($('#transition_price').text());
	 $('#option_all2').text($('#transition').text());
	 $('#option_all2_price').text("$"+$('#transition_price').text());
	 //Button Set
	 $('#option_btn').text("(Gray)");
	 $('#option_btn_val').val("(Gray)");
	 
	 //Reset Value On Double Click
	 if($(".radioname2").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	

$(function() {
 $('#transition_brown').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	
	 //Add And Set Price
	 $('#option_all').val($('#transition').text());
	 $('#option_all_price').val($('#transition_price').text());
	 $('#option_all2').text($('#transition').text());
	 $('#option_all2_price').text("$"+$('#transition_price').text());
	 //Button Set
	 $('#option_btn').text("(Brown)");
	 $('#option_btn_val').val("(Brown)");
	 
	 //Reset Value On Double Click
	 if($("#rradioname2").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	
	


//Polarized
$(function() {
 $('#polarized_gray').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 
	 //Add And Set Price
	 $('#option_all').val($('#polarized').text());
	 $('#option_all_price').val($('#polarized_price').text());
	 $('#option_all2').text($('#polarized').text());
	 $('#option_all2_price').text("$"+$('#polarized_price').text());
	 //Button Set
	 $('#option_btn').text("(Gray)");
	 $('#option_btn_val').val("(Gray)");
	 
	 //Reset Value On Double Click
	 if($("#rrradioname2").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	

$(function() {
 $('#polarized_brown').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 
	 //Add And Set Price
	 $('#option_all').val($('#polarized').text());
	 $('#option_all_price').val($('#polarized_price').text());
	 $('#option_all2').text($('#polarized').text());
	 $('#option_all2_price').text("$"+$('#polarized_price').text());
	 //Button Set
	 $('#option_btn').text("(Brown)");
	 $('#option_btn_val').val("(Brown)");
	 
	 //Reset Value On Double Click
	 if($("#rrrradioname2").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	
	
//Digital Protection
$(function() {
 $('#digital_protection').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 $('.radioname').prop('checked', false);
	 
	 //Add And Set Price
	 $('#option_all').val($('#digital_protection1').text());
	 $('#option_all_price').val($('#digital_protection_price').text());
	 $('#option_all2').text($('#digital_protection1').text());
	 $('#option_all2_price').text("$"+$('#digital_protection_price').text());
	 //Button Set
	 $('#option_btn').text("");
	 $('#option_btn_val').val("");
	 
	 //Remove Forte Or Alize Price
	 $('#option_alize_forte').val("");
	 $('#option_alize_forte_price').val("");
     $('#option_alize_forte2').text("");
	 $('#option_alize_forte2_price').text("");
	 
	 //Reset Value On Double Click
	 if($(".radioname3").prop('checked') == true){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
		 $('#option_alize_forte').val("");
	 	 $('#option_alize_forte_price').val("");
    	 $('#option_alize_forte2').text("");
		 $('#option_alize_forte2_price').text("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	
	
//Tint
$(function() {
 $('#tint_brown').click(function(){
	 $('.radioname3').prop('checked', false);
	 //Add And Set Price
	 $('#option_all').val($('#tint').text());
	 $('#option_all_price').val($('#tint_price').text());
	 $('#option_all2').text($('#tint').text());
	 $('#option_all2_price').text("$"+$('#tint_price').text());
	 //Button Set
	 $('#option_btn').text("(Brown)");
	 $('#option_btn_val').val("(Brown)");
	 
	 //Remove Forte Or Alize Price
	 $('#option_alize_forte').val("");
	 $('#option_alize_forte_price').val("");
     $('#option_alize_forte2').text("");
	 $('#option_alize_forte2_price').text("");
	 
	 //Reset Value On Double Click
	 if($(".radioname4").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
		 $('#pills-home').removeClass('active');
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
	
 });
});	
	
$(function() {
 $('#tint_green').click(function(){
	 $('.radioname3').prop('checked', false);
	  //Add And Set Price
	 $('#option_all').val($('#tint').text());
	 $('#option_all_price').val($('#tint_price').text());
	 $('#option_all2').text($('#tint').text());
	 $('#option_all2_price').text("$"+$('#tint_price').text());
	 //Button Set
	 $('#option_btn').text("(Green)");
	 $('#option_btn_val').val("(Green)");
	 
	 //Remove Forte Or Alize Price
	 $('#option_alize_forte').val("");
	 $('#option_alize_forte_price').val("");
     $('#option_alize_forte2').text("");
	 $('#option_alize_forte2_price').text("");
	 
	 //Reset Value On Double Click
	 if($("#rradioname4").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
		 $('#pills-home').removeClass('active');
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	
	
$(function() {
 $('#tint_gray').click(function(){
	 $('.radioname3').prop('checked', false);
	  //Add And Set Price
	 $('#option_all').val($('#tint').text());
	 $('#option_all_price').val($('#tint_price').text());
	 $('#option_all2').text($('#tint').text());
	 $('#option_all2_price').text("$"+$('#tint_price').text());
	 //Button Set
	 $('#option_btn').text("(Gray)");
	 $('#option_btn_val').val("(Gray)");
	 
	 //Remove Forte Or Alize Price
	 $('#option_alize_forte').val("");
	 $('#option_alize_forte_price').val("");
     $('#option_alize_forte2').text("");
	 $('#option_alize_forte2_price').text("");
	 
	 //Reset Value On Double Click
	 if($("#rrradioname4").prop('checked') == false){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
		 $('#pills-home').removeClass('active');
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
 });
});	
	
//Clear
$(function() {
 $('#clear').click(function(){
	 //Remove Class
	 $('#pills-home').removeClass('active');
	 $('.radioname4').prop('checked', false);
	 $('.radioname').prop('checked', false);
	 $('.radioname2').prop('checked', false);
	 
	 //Remove Forte Or Alize Price
	 $('#option_alize_forte').val("");
	 $('#option_alize_forte_price').val("");
     $('#option_alize_forte2').text("");
	 $('#option_alize_forte2_price').text("");
	 
	 //Add And Set Price
	 $('#option_all').val($('#clear1').text());
	 $('#option_all_price').val($('#clear_price').text());
	 $('#option_all2').text($('#clear1').text());
	 $('#option_all2_price').text("$"+$('#clear_price').text());
	 //Button Set
	 $('#option_btn').text("");
	 $('#option_btn_val').val("");
	 
	 //Reset Value On Double Click
	 if($("#rradioname3").prop('checked') == true){
		 $('#option_all').val("");
	 	 $('#option_all_price').val("");
    	 $('#option_all2').text("");
		 $('#option_all2_price').text("");
		 $('#option_btn').text("");
		 $('#option_btn_val').val("");
		 $('#option_alize_forte').val("");
	 	 $('#option_alize_forte_price').val("");
    	 $('#option_alize_forte2').text("");
		 $('#option_alize_forte2_price').text("");
	 }
	 //Clear Detail Tint
	 $('#option_tint_info').text("");
	 $('#option_tint_info_val').val("");
	 
	 //Total Price
	 total();
	 
 });
});	



//tint show
$(function() {
 $('.glasses_main_div3').click(function(){
	 $('.radioname').prop('checked', false);
	 $('.radioname2').prop('checked', false);
	 $('#pills-home').addClass('active');
 });
});	
	
$(function() {
 $('.glasses_main_div4').click(function(){
	 $('.radioname').prop('checked', false);
	 $('.radioname2').prop('checked', false);
	 $('#pills-home').addClass('active');
 });
});	
	
$(function() {
 $('.glasses_main_div5').click(function(){
	 $('.radioname').prop('checked', false);
	 $('.radioname2').prop('checked', false);
	 $('#pills-home').addClass('active');
 });
});	

//Tint Detail Option
$(function() {
 $('#tint_10').click(function(){
	 $('#option_tint_info').text("(CLEAR TINT)");
	 $('#option_tint_info_val').val("(CLEAR TINT)");
	 
	 //Reset Value On Double Click
	 if($("#rrradioname3").prop('checked') == true){
		 $('#option_tint_info').text("");
		 $('#option_tint_info_val').val("");
	 	
	 }
	 
	 //Total Price
	 total();
 });
});	
	
$(function() {
 $('#tint_40').click(function(){
	 $('#option_tint_info').text("(SLIGHTLY TINT)");
	 $('#option_tint_info_val').val("(SLIGHTLY TINT)");
	 
	 //Reset Value On Double Click
	 if($("#rrrradioname3").prop('checked') == true){
		 $('#option_tint_info').text("");
		 $('#option_tint_info_val').val("");
	 	
	 }
	 
	 //Total Price
	 total();
 });
});	
	
$(function() {
 $('#tint_70').click(function(){
	 $('#option_tint_info').text("(MEDIUM TINT)");
	 $('#option_tint_info_val').val("(MEDIUM TINT)");
	 
	 //Reset Value On Double Click
	 if($("#rrrrradioname3").prop('checked') == true){
		 $('#option_tint_info').text("");
		 $('#option_tint_info_val').val("");
	 	
	 }
	 
	 //Total Price
	 total();
 });
});	
	
$(function() {
 $('#tint_85').click(function(){
	 $('#option_tint_info').text("(DARK)");
	 $('#option_tint_info_val').val("(DARK)");
	 
	 //Reset Value On Double Click
	 if($("#rrrrrradioname3").prop('checked') == true){
		 $('#option_tint_info').text("");
		 $('#option_tint_info_val').val("");
	 	
	 }
	 
	 //Total Price
	 total();
 });
});	

$( document ).ready(function() {
    //Total Price
	 total();
});

</script>	

</body>
</html>