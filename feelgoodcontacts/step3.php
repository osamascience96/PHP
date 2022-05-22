<?php include 'Connection.php' ?>
<?php 
if(isset($_POST['hidden_alize_forte'])) {
	$_SESSION['step2_option_hidden_alize_forte'] = $_POST['hidden_alize_forte'];
	$_SESSION['step2_option_hidden_alize_forte_price'] = $_POST['hidden_alize_forte_price'];
	$_SESSION['step2_option_hidden_option_all'] = $_POST['hidden_option_all'];
	$_SESSION['step2_option_hidden_option_all_price'] = $_POST['hidden_option_all_price'];
	$_SESSION['step2_option_hidden_option_btn'] = $_POST['hidden_option_btn'];
	$_SESSION['step2_option_hidden_option_tint_info'] = $_POST['hidden_option_tint_info'];
	
	//Update
	$item_array = ['item_id' => $_SESSION['step1_option_id']];
	foreach( $_SESSION['shopping_cart'] as $key => $value ) {
      if( $value['item_id']  == $item_array['item_id']) {
		  $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte'] = $_POST['hidden_alize_forte'];
		  $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte_price'] = $_POST['hidden_alize_forte_price'];
		  $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all'] = $_POST['hidden_option_all'];
		  $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all_price'] = $_POST['hidden_option_all_price'];
		  $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_btn'] = $_POST['hidden_option_btn'];
		  $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_tint_info'] = $_POST['hidden_option_tint_info'];
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
		  
		  //step 2
		  $_SESSION['step2_option_hidden_alize_forte'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte'];
		  $_SESSION['step2_option_hidden_alize_forte_price'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte_price'];
		  $_SESSION['step2_option_hidden_option_all'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all'];
		  $_SESSION['step2_option_hidden_option_all_price'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all_price'];
		  $_SESSION['step2_option_hidden_option_btn'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_btn'];
		  $_SESSION['step2_option_hidden_option_tint_info'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_tint_info'];
		  
		  //3
		  $_SESSION['step3_package_name'] = $_SESSION['shopping_cart'][$key]['item_step3_package_name'];
		  $_SESSION['step3_package_price'] = $_SESSION['shopping_cart'][$key]['item_step3_package_price'];
		  
		  
		  
        }
    }
echo $_SESSION['step3_package_name'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Step3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	
<?php include 'header.php' ?>
	
<div class="container">
		<form method="post" id="target" action="step4.php" >
		
		<div class="row">
			<?php
		$fetch_query1 = mysqli_query($conn,"SELECT * FROM lenses_visions_price where id=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
		?>
			<!-- Col1 -->
			<div class="col-sm-12 col-md-12 col-lg-9 step_1_main_rows">
				<!-- Col1 Start-->
				
				<div class="step1_col1 col-sm-12 col-md-12 col-lg-12 product_question_col step_1_main_rows">
					
					
					
					<!-- COl1 Start -->
					
					<div class="product_question_col_step_3 col-sm-4 col-md-4 col-lg-4">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<div class="product_question_col_step_3_sub border3-1" id="bronze" name="bronze">
						<img src="images/Step1/distance_icon.png" class="step1_img step_img_image">
						<h5 class="step1_heading">BRONZE</h5>
						<p class="step3_heading_phrase">Comman Worldwide</p>
						<h5 class="step1_heading003">$<span id="bronze_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_standard_15'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_standard_15']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_standard_15'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_standard_15']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_standard_15'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_standard_15']; }
										}
										else {}
										?></span></h5>
						<h6 class="step1_heading004">STANDARD PLASTIC 1.5</h6>
							<hr class="step3_hr">
						<ul class="step3_ul">
							<li class="step3_li">Standard plastic lenses</li>
							<li class="step3_li">Suitable for low prescription</li>
							<li class="step3_li">Not for half/rimless frames</li>
						</ul>
						</div>
                        
						
					</div>
					
					<!-- COl1 End -->
					
					<!-- COl2 Start -->
					
					<div class="product_question_col_step_3 col-sm-4 col-md-4 col-lg-4">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<div class="product_question_col_step_3_sub border3-2" id="impact_resistant" name="impact_resistant">
						<img src="images/Step1/distance_icon.png" class="step1_img step_img_image">
						<h5 class="step1_heading">IMPACT RESISTANT</h5>
						<p class="step3_heading_phrase">Active Life & Children</p>
						<h5 class="step1_heading003">$<span id="impact_resistant_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_poly_159'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_poly_159']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_poly_159'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_poly_159']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_poly_159'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_poly_159']; }
										}
										else {}
										?></span></h5>
						<h6 class="step1_heading004">POLYCARBONATE</h6>
							<hr class="step3_hr">
						<ul class="step3_ul">
							<li class="step3_li">Standard plastic lenses</li>
							<li class="step3_li">Suitable for low prescription</li>
							<li class="step3_li">Not for half/rimless frames</li>
						</ul>
						</div>
                        
						
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="product_question_col_step_3 col-sm-4 col-md-4 col-lg-4">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<div class="product_question_col_step_3_sub border3-3" id="silver" name="silver">
						<img src="images/Step1/distance_icon.png" class="step1_img step_img_image">
						<h5 class="step1_heading">SILVER</h5>
						<p class="step3_heading_phrase">Sportman</p>
						<h5 class="step1_heading003">$<span id="silver_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_hi_index_16'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_hi_index_16']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_hi_index_16'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_hi_index_16']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_hi_index_16'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_hi_index_16']; }
										}
										else {}
										?></span></h5>
						<h6 class="step1_heading004">HI INDEX 1.61</h6>
							<hr class="step3_hr">
						<ul class="step3_ul">
							<li class="step3_li">UPTO 35% thinner than standard plastic lenses</li>
							<li class="step3_li">UPTO 40% lighter than standard plastic lenses</li>
							<li class="step3_li">Suitable for low prescription</li>
							<li class="step3_li">100% UV Protection</li>
							<li class="step3_li">Suitable for rimless frames</li>
						</ul>
						</div>
                        
						
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					<div class="product_question_col_step_3 col-sm-6 col-md-6 col-lg-4">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<div class="product_question_col_step_3_sub border3-4" id="gold" name="gold">
						<img src="images/Step1/distance_icon.png" class="step1_img step_img_image">
						<h5 class="step1_heading">GOLD</h5>
						<p class="step3_heading_phrase">Perfect For All</p>
						<h5 class="step1_heading003">$<span id="gold_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_hi_index_167'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_hi_index_167']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_hi_index_167'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_hi_index_167']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_hi_index_167'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_hi_index_167']; }
										}
										else {}
										?></span></h5>
						<h6 class="step1_heading004">HI INDEX 1.67</h6>
							<hr class="step3_hr">
						<ul class="step3_ul">
							<li class="step3_li">UPTO 45% thinner than standard plastic lenses</li>
							<li class="step3_li">UPTO 45% lighter than standard plastic lenses</li>
							<li class="step3_li">Suitable for mid Range Prescription</li>
							<li class="step3_li">Suitable for rimless frames</li>
						</ul>
						</div>
                        
						
					</div>
					
					<!-- COl4 End -->
					
					<!-- COl5 Start -->
					
					<div class="product_question_col_step_3 col-sm-6 col-md-6 col-lg-4">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<div class="product_question_col_step_3_sub border3-5" id="platinum" name="platinum">
						<img src="images/Step1/distance_icon.png" class="step1_img step_img_image">
						<h5 class="step1_heading">PLATINUM</h5>
						<p class="step3_heading_phrase">Executives</p>
						<h5 class="step1_heading003">$<span id="platinum_price"><?php 
										if($_SESSION['step1_option_type'] == "none" ) {
											if($row1['sv_hi_index_174'] == 0) {
												echo "FREE";
											}
											else { echo $row1['sv_hi_index_174']; }
										}
										else if($_SESSION['step1_option_type'] == "Bifocal") {
											if($row1['b_hi_index_174'] == 0) {
												echo "FREE";
											}
											else { echo $row1['b_hi_index_174']; }
										}
										else if($_SESSION['step1_option_type'] == "Verifocal") {
											if($row1['v_hi_index_174'] == 0) {
												echo "FREE";
											}
											else { echo $row1['v_hi_index_174']; }
										}
										else {}
										?></span></h5>
						<h6 class="step1_heading004">HI INDEX 1.74</h6>
							<hr class="step3_hr">
						<ul class="step3_ul">
							<li class="step3_li">UPTO 60% thinner than Standard & thinnest possible in plastic lenses</li>
							<li class="step3_li">UPTO 45% lighter than standard plastic lenses</li>
							<li class="step3_li">Ideal for high range prescription</li>
							<li class="step3_li">Ensure greatest comfort and appearance</li>
							<li class="step3_li">100% UV Protection</li>
						</ul>
						</div>
                        
						
					</div>
					
					<!-- COl5 End -->
					
				
				</div>
				
				<!-- COl1 End -->
				
				
                
				
				<!-- Step1 pagination Button -->
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_btn_col">
				
					<button type="button" class="btn btn-outline-primary step1_pagination_btn1"><< Previous Step</button>
					<button type="button" class="btn btn-outline-primary step1_pagination_btn">Next Step >></button>
	
					
				</div>
				
				<!-- Step1 pagination Button -->
				
			</div>
			<!-- Col1 -->
		<?php } ?>
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
				<div class="col-sm-12 col-md-12 col-lg-12 step_img_main_col step_img_heading_col step_img_heading_col_bg">
					
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
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step2_option_hidden_alize_forte'] ?></th>
							<td class="step_side_tbl_data"><?php if(!empty($_SESSION['step2_option_hidden_alize_forte_price'])) { echo "$".$_SESSION['step2_option_hidden_alize_forte_price']; }
								else {} ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step2_option_hidden_option_all'] ?> <?php echo $_SESSION['step2_option_hidden_option_btn'] ?></th>
							<td class="step_side_tbl_data"><?php if(!empty($_SESSION['step2_option_hidden_option_all_price'])) { echo "$".$_SESSION['step2_option_hidden_option_all_price']; }
								else {} ?></td>
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step2_option_hidden_option_tint_info'] ?></th>
							
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php if(!empty($_SESSION['step3_package_name'])) { echo $_SESSION['step3_package_name']; }
								else {} ?></th>
							<td class="step_side_tbl_data"><?php if(!empty($_SESSION['step3_package_price'])) { echo "$".$_SESSION['step3_package_price']; }
								else {} ?></td>
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

					
			<!--<input type="hidden" name="hidden_alize_forte" id="option_alize_forte" value="" />
			<input type="hidden" name="hidden_alize_forte_price" id="option_alize_forte_price" value="" />
			<input type="hidden" name="hidden_option_all" id="option_all" value="" />
			<input type="hidden" name="hidden_option_all_price" id="option_all_price" value="" />
			<input type="hidden" name="hidden_option_btn" id="option_btn_val" value="" />
			<input type="hidden" name="hidden_option_tint_info" id="option_tint_info_val" value="" />
			<input type="hidden" name="hidden_step1_option_price" id="hidden_step1_option_price" value="<?php //echo $_SESSION['step1_option_price']; ?>" />-->
				
			<input type="hidden" name="hidden_package_name" id="package_name" value="" />
			<input type="hidden" name="hidden_package_price" id="package_price" value="" />
				<!--Step1-->
			<input type="hidden" name="hidden_step1_option_price" id="hidden_step1_option_price" value="<?php echo $_SESSION['step1_option_price']; ?>" />
				<!--Step2-->
			<input type="hidden" name="hidden_option_alize_forte_price" id="option_alize_forte_price" value="<?php echo $_SESSION['step2_option_hidden_alize_forte_price']; ?>" />
			<input type="hidden" name="hidden_option_all_price" id="option_all_price" value="<?php echo $_SESSION['step2_option_hidden_option_all_price']; ?>" />

			</form>
				
			
			</div>
			
			
			
			
			<!-- COl2 -->
			<?php } ?>
		</div>
		
		
	</div>	
	
		
		
<?php include 'footer.php' ?>		
	
<script>
//Active Function
$( document ).ready(function() {
<?php
	
	if(isset($_SESSION['step3_package_name'])) {
		if($_SESSION['step3_package_name'] == "Bronze") { ?>
		$('#bronze').addClass('step_active');
		<?php }
		else if($_SESSION['step3_package_name'] == "Impact Resistant") { ?>
		$('#impact_resistant').addClass('step_active');
		<?php }
		else if($_SESSION['step3_package_name'] == "Silver") { ?>
		$('#silver').addClass('step_active');
		<?php }
		else if($_SESSION['step3_package_name'] == "Gold") { ?>
		$('#gold').addClass('step_active');
		<?php }
		else if($_SESSION['step3_package_name'] == "Platinum") { ?>
		$('#platinum').addClass('step_active');
		<?php }
		else {}
	}
?>
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
	
	
	
//Bronze
$(function() {
 $('#bronze').click(function(){
	 $('#package_name').val("Bronze");
	 if($('#bronze_price').text() == "") {
		$('#package_price').val(0);
		}
		else {
		$('#package_price').val($('#bronze_price').text());
		}
	 
	 javascript:document.forms[0].submit();
 });
});
	
//Impact Resistant
$(function() {
 $('#impact_resistant').click(function(){
	 $('#package_name').val("Impact Resistant");
	 if($('#impact_resistant_price').text() == "") {
		$('#package_price').val(0);
		}
		else {
		$('#package_price').val($('#impact_resistant_price').text());
		}
	 
	 javascript:document.forms[0].submit();
 });
});
	
//Silver
$(function() {
 $('#silver').click(function(){
	 $('#package_name').val("Silver");
	 if($('#silver_price').text() == "") {
		$('#package_price').val(0);
		}
		else {
		$('#package_price').val($('#silver_price').text());
		}
	 
	 javascript:document.forms[0].submit();
 });
});
	
//Gold
$(function() {
 $('#gold').click(function(){
	$('#package_name').val("Gold");
	 if($('#gold_price').text() == "") {
		$('#package_price').val(0);
		}
		else {
		$('#package_price').val($('#gold_price').text());
		}
	 
	 javascript:document.forms[0].submit();
 });
});
	
//Platinum
$(function() {
 $('#platinum').click(function(){
	 $('#package_name').val("Platinum");
	 if($('#platinum_price').text() == "") {
		$('#package_price').val(0);
		}
		else {
		$('#package_price').val($('#platinum_price').text());
		}
	 
	 javascript:document.forms[0].submit();
 });
});
	
$( document ).ready(function() {
    //Total Price
	 total();
});
</script>
</body>
</html>