<?php include 'Connection.php' ?>
<?php //unset($_SESSION['step1_option_id']);
	 //$_SESSION['shopping_cart'][] = [ 'item_id'=> 11];
		
    $item_array = ['item_id' => $_GET['Product_id']];
    foreach( $_SESSION['shopping_cart'] as $key => $value ) {
      if( $value['item_id']  == $item_array['item_id']) {
		  $_SESSION['step1_option_type'] = $_SESSION['shopping_cart'][$key]['item_step1_option_type'];
		  $_SESSION['step1_option_name'] = $_SESSION['shopping_cart'][$key]['item_step1_option_name'];
		  $_SESSION['step1_option_price'] = $_SESSION['shopping_cart'][$key]['item_step1_option_price'];
        // $_SESSION['cart'][$key]['quantity'] = $value['quantity'] + $product_array['quantity'];
           //$_SESSION['cart'][$key]['price'] = $value['price'] + $product_array['price'];
		  
        }
    }
//print_r($_SESSION);

	echo $_SESSION['step1_option_type'];
	echo $_SESSION['step1_option_name'];
	echo $_SESSION['step1_option_price'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Step1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	
<?php include 'header.php' ?>
	
	<div class="container">
		<form method="post" id="target" action="step2.php" >
		
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
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
                   		<!--
         	            <label class="labl">
    					<input type="radio" name="radioname" value="one_value" checked="checked"/>
                        </label>-->
						<div class="product_question_col_step_1_sub" id="distance" name="distance">
						<img src="images/Step1/distance_icon.png" class="step1_img step1_img_main">
						<h5 class="step1_heading">Distance</h5>	
						<h5 class="step1_heading2"><?php if($row1['sv_distance'] == 0) { echo "FREE";} else { ?>
							
							$<span id="distance_price"><?php echo $row1['sv_distance'] ?></span>
							<?php } ?></h5>
						<h6 class="step1_heading3">this is likely to be you if:</h6>
						<p class="step1_text1">You wear your glasses for general everyday use such as driving or watching TV.</p>
                        <p class="step1_text2">>></p>
						</div>
                        
						
					</div>
					
					<!-- COl1 End -->
					
					<!-- COl2 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
						<div class="product_question_col_step_1_sub" id="reading" name="reading">
						<img src="images/Step1/reading_icon.png" class="step1_img step1_img_main">
						<h5 class="step1_heading">Reading</h5>	
						<h5 class="step1_heading2"><?php if($row1['sv_reading'] == 0) { echo "FREE";} else { ?>
							
							$<span id="reading_price"><?php echo $row1['sv_reading'] ?></span>
							<?php } ?></h5>
						<h6 class="step1_heading3">this is likely to be you if:</h6>
						<p class="step1_text1">You wear your glasses for reading, paperwork or close work.</p><br> 
						<p class="step1_text2">>></p>
						</div>
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
						
						<div class=" product_question_col_step_1_sub" id="computer" name="computer">
						<img src="images/Step1/computer_icon.png" class="step1_img step1_img_main">
						<h5 class="step1_heading">Computer</h5>	
						<h5 class="step1_heading2"><?php if($row1['sv_computer_work'] == 0) { echo "FREE";} else { ?>
							
							$<span id="computer_price"><?php echo $row1['sv_computer_work'] ?></span>
							<?php } ?></h5>
						<h6 class="step1_heading3">this is likely to be you if:</h6>
						<p class="step1_text1">You wear glasses when you're using the computer.</p><br> 
						<p class="step1_text2">>></p>	
						</div>
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					<div class="product_question_col_step_1 col-sm-3 col-md-3 col-lg-3">
						
						<div class="product_question_col_step_1_sub" id="non_prescription" name="non_prescription">
						<img src="images/Step1/glasses_icon.png" class="step1_img step1_img_main">
						<h5 class="step1_heading">Non prescription</h5>	
						<h5 class="step1_heading2"><?php if($row1['sv_glasses_only'] == 0) { echo "FREE";} else { ?>
							
							$<span id="glasses_only_price"><?php echo $row1['sv_glasses_only'] ?></span>
							<?php } ?></h5>
						<h6 class="step1_heading3">this is likely to be you if:</h6>
						<p class="step1_text1">You want glasses without prescription lenses, purely for fashion use. </p>
						<p class="step1_text2">>></p>
						</div>
					</div>
					
					<!-- COl4 End -->
				
				</div>
				
				<!-- COl1 End -->
				
				<!-- Col2 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_main_col2">
					<div class="col-sm-6 col-md-6 col-lg-6 step1_bifocal">
                    <label class="labl3">
    					<input type="radio" name="radioname" class="radioname3" value="one_value"/>
                    	<div class="step1_bifocal_sub my_select_d3" id="step1_bifocal">
                    	<img src="images/Step1/bifocal_icon.png" class="step2_img">
                        <h5 class="step1_heading">BIFOCAL</h5>
                        <h5 class="step1_heading2">Starting at <?php echo $row1['b_28mm']; ?>$</h5>
                        <p class="step1_text1">(With Line)</p>	
						<p class="step1_text2">>></p>
                        </div>
                         </label>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-6 step1_varifocal">
                    <label class="labl3" >
    					<input type="radio" name="radioname" class="radioname3" value="one_value2"  />
                    	<div class="step1_varifocal_sub my_select_d3" id="step1_varifocal">
                    	<img src="images/Step1/verfocial_icon.png" class="step2_img">
                        <h5 class="step1_heading">Verifocal</h5>
                        <h5 class="step1_heading2">Starting at <?php echo $row1['v_standard']; ?>$</h5>
                        <p class="step1_text1">(With Line)</p>	
						<p class="step1_text2">>></p>	
                        </div>
                        </label>
                    </div>
					
				</div>
				
				<!-- Col2 End -->
				
				<!-- Col3 Start -->
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_varifocal_des">
				
					<h5 class="step1_heading4">Select Varifocal Lenses</h5>
					
					<!-- Verofocal Lenses Section -->
					
					<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_col1">
					
					<!-- COl2 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_1" id="verifocal_standard" name="verifocal_standard">
						
						<div class="product_question_col_step_1_sub" id="verifocal_standard1">
						<img src="images/Step1/verifocal-lenses-standard.jpeg" class="step1_img3">
						<h5 class="step1_heading01">Verifocal Standard</h5>	
						<h5 class="step1_heading02">$<span id="verifocal_standard_price"><?php echo $row1['v_standard']; ?></span></h5>
						
						</div>
					
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_1" id="verifocal_better" name="verifocal_better">
						
						<div class=" product_question_col_step_1_sub" id="verifocal_better1">
						<img src="images/Step1/verifocal-lenses-better.jpeg" class="step1_img3">
						<h5 class="step1_heading01">Verifocal Better</h5>	
						<h5 class="step1_heading02">$<span id="verifocal_better_price"><?php echo $row1['v_better']; ?></span></h5>
							
						</div>
					
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					<div class="col-sm-4 col-md-4 col-lg-4 product_question_col_step_1" id="verifocal_best" name="verifocal_best">
						
						<div class="product_question_col_step_1_sub" id="verifocal_best1" >
						<img src="images/Step1/verifocal-lenses-best.jpeg" class="step1_img3">
						<h5 class="step1_heading01">Verifocal Best</h5>	
						<h5 class="step1_heading02">$<span id="verifocal_best_price"><?php echo $row1['v_best']; ?></span></h5>
						
						</div>
					
					</div>
					
					<!-- COl4 End -->
					
					<!-- COl4 Start -->
					
					
					
					<!-- COl4 End -->
				
				</div>
					
					<!-- Verifocal Lenses Section End -->
					
				</div>
				
				<!-- Col3 End -->
                
                
                
                <!-- Bifocal Coloumn Start -->
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_bifocal_des">
				
					<h5 class="step1_heading4">Select Bifocal Lenses</h5>
					
					<!-- Verofocal Lenses Section -->
					<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_col1">
					
					<!-- COl2 Start -->
					
					<div class="col-sm-3 col-md-3 col-lg-3 product_question_col_step_1" id="b_28mm" name="b_28mm">
						
						<div class="product_question_col_step_1_sub" id="b_28mm1">
						<img src="images/Step1/lenses-and-tints-img1.jpeg" class="step1_img3">
						<h5 class="step1_heading">Bifocal Benifits</h5>	
						<h5 class="step1_heading2">$<span id="b_28mm_price"><?php echo $row1['b_28mm']; ?></span></h5>
						<p class="step1_text1">BF D28 Description: D28 SEGMENT 28 MM</p>
						</div>
					
					</div>
					
					<!-- COl2 End -->
					
					<!-- COl3 Start -->
					
					<div class="col-sm-3 col-md-3 col-lg-3  product_question_col_step_1" id="b_28mm_blended" name="b_28mm_blended">
						
						<div class=" product_question_col_step_1_sub" id="b_28mm_blended1">
						<img src="images/Step1/lenses-and-tints-img2.jpeg" class="step1_img3">
						<h5 class="step1_heading">Bifocal Benifits</h5>	
						<h5 class="step1_heading2">$<span id="b_28mm_blended_price"><?php echo $row1['b_28mm_blended']; ?></span></h5>
						<p class="step1_text1">BF R 28 Description: R28 ROUND SEGMENT 28MM</p>	
						</div>
					
					</div>
					
					<!-- COl3 End -->
					
					<!-- COl4 Start -->
					
					<div class="col-sm-3 col-md-3 col-lg-3 product_question_col_step_1" id="b_35mm" name="b_35mm">
						
						<div class="product_question_col_step_1_sub" id="b_35mm1">
						<img src="images/Step1/lenses-and-tints-img3.jpeg" class="step1_img3">
						<h5 class="step1_heading">Bifocal Benifits</h5>	
							<h5 class="step1_heading2">$<span id="b_35mm_price"><?php echo $row1['b_35mm']; ?></span></h5>
						<p class="step1_text1">BF D 35 Description: D35 SEGMENT 35 MM</p>
						</div>
					
					</div>
                    
                    <div class="col-sm-3 col-md-3 col-lg-3 product_question_col_step_1" id="b_full_width" name="b_full_width">
						
						<div class="product_question_col_step_1_sub" id="b_full_width1">
						<img src="images/Step1/lenses-and-tints-img4.jpeg" class="step1_img3">
						<h5 class="step1_heading">Bifocal Benifits</h5>	
						<h5 class="step1_heading2">$<span id="b_full_width_price"><?php echo $row1['b_full_width']; ?></span></h5>
                        <p class="step1_text1">BF E Description: EXECUTIVE BIFOCAL HALF AND HALF</p>
						
						</div>
					
					</div>
                    
                   
					
					<!-- COl4 End -->
					
					<!-- COl4 Start -->
					
					
					
					<!-- COl4 End -->
				
				</div>
					

					
					
				</div>
				
				<!-- Bifocal Coloumn End -->
                
				
				<!-- Step1 pagination Button -->
				<div class="col-sm-12 col-md-12 col-lg-12 product_question_col step1_btn_col">
					<!--<?php /*if(isset($_SESSION['step1_option_type'])) { ?> 
					<form action="" method="post">
					<input type="hidden" name="prod_id" value="<?php echo $_GET['Product_id']; ?>">
						
					<input type="hidden" name="step1_type" value="<?php echo $_SESSION['step1_option_type']; ?>">
					<input type="hidden" name="step1_name" value="<?php echo $_SESSION['step1_option_name']; ?>">
					<input type="hidden" name="step1_price" value="<?php echo $_SESSION['step1_option_price']; ?>">
					<button type="submit" name="update_step1" class="btn btn-outline-primary step1_pagination_btn">Update</button>
					</form>
					<?php }  else { ?>  <?php } */?>-->
					<button type="button" class="btn btn-outline-primary step1_pagination_btn1"><< Previous Step</button>
					<button type="button" class="btn btn-outline-primary step1_pagination_btn">Next Step >></button>
					
	
					
				</div>
				
				<!-- Step1 pagination Button -->
				
			</div>
			<!-- Col1 -->
		<?php } ?>
			<?php
			$temp_product_id = $_GET['Product_id'];
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
							<td class="step_side_tbl_data_price"><span class="my_theme_col2">$</span><?php echo $row2['Price']; ?></td>
						
						</tr>				
						
					
					</table>
				
				</div>
				
				<!-- COl3 End -->
				<hr>
				
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading_price">TOTAL: </th>
							<td class="step_side_tbl_data_price"><span class="my_theme_col2">$</span><?php echo $row2['Price']; ?></td>
						
						</tr>
						
					
					
					</table>
				
				</div>
				
				<!-- COl3 End -->


			
			</div>
			
			
			<!-- COl2 -->
			<?php } ?>
		</div>
		
		
	</div>
	<input type="hidden" name="hidden_id" id="option_id" value="<?php echo $_GET['Product_id']; ?>" />
	<input type="hidden" name="hidden_type" id="option_type" value="" />
	<input type="hidden" name="hidden_name" id="option_name" value="" />
	<input type="hidden" name="hidden_price" id="option_price" value="" />
	
	</form>
		
<?php include 'footer.php' ?>		
<script>
//On Load
//Active Function
$( document ).ready(function() {
	<?php 
	//1
    if(isset($_SESSION['step1_option_type'])) {
		if($_SESSION['step1_option_type'] == "Bifocal") { ?>
		$('#step1_bifocal').addClass('step_type_active');
		$(".step1_bifocal_des").addClass('step1_bifocal_des_show');
		<?php }
		else if($_SESSION['step1_option_type'] == "Verifocal") { ?>
		$('#step1_varifocal').addClass('step_type_active');
		$(".step1_varifocal_des").addClass('step1_varifocal_des_show');
		<?php }
		else {}
	}
	//2
	if(isset($_SESSION['step1_option_name'])) {
		if($_SESSION['step1_option_name'] == "Distance") { ?>
		$('#distance').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Reading") { ?>
		$('#reading').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Computer") { ?>
		$('#computer').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Non Prescription") { ?>
		$('#non_prescription').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "28 mm") { ?>
		$('#b_28mm1').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "28 mm Blended") { ?>
		$('#b_28mm_blended1').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "35 mm") { ?>
		$('#b_35mm1').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Full Width") { ?>
		$('#b_full_width1').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Standard") { ?>
		$('#verifocal_standard1').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Better") { ?>
		$('#verifocal_better1').addClass('step_active');
		<?php }
		else if($_SESSION['step1_option_name'] == "Best") { ?>
		$('#verifocal_best1').addClass('step_active');
		<?php }
		else {}
	}
	//3
	if(isset($_SESSION['step1_option_price'])) {}
	?>
});
	
	
//Distance
$(function() {
 $('#distance').click(function(){
	 $('#option_type').val("none");
	 $('#option_name').val("Distance");
	 if($('#distance_price').text() == "") {
		$('#option_price').val(0);
		}
		else {
		$('#option_price').val($('#distance_price').text());
		}
	 
	 javascript:document.forms[0].submit();
 });
});
	
//Reading
$(function() {
 $('#reading').click(function(){
	 $('#option_type').val("none");
	 $('#option_name').val("Reading");
	 if($('#reading_price').text() == "") {
		$('#option_price').val(0);
		}
		else {
		$('#option_price').val($('#reading_price').text());
		}
	 javascript:document.forms[0].submit();
 });
});
	
//Computer
$(function() {
 $('#computer').click(function(){
	 $('#option_type').val("none");
	 $('#option_name').val("Computer");
	 if($('#computer_price').text() == "") {
		$('#option_price').val(0);
		}
		else {
		$('#option_price').val($('#computer_price').text());
		}
	 javascript:document.forms[0].submit();
 });
});
	
//Non Prescription
$(function() {
 $('#non_prescription').click(function(){
	 $('#option_type').val("none");
	 $('#option_name').val("Non Prescription");
	 if($('#glasses_only_price').text() == "") {
		$('#option_price').val(0);
		}
		else {
		$('#option_price').val($('#glasses_only_price').text());
		}
	 javascript:document.forms[0].submit();
 });
});
	
//Bifocal D28
$(function() {
 $('#b_28mm').click(function(){
	 $('#option_type').val("Bifocal");
	 $('#option_name').val("28 mm");
	 $('#option_price').val($('#b_28mm_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
//Bifocal R28
$(function() {
 $('#b_28mm_blended').click(function(){
	 $('#option_type').val("Bifocal");
	 $('#option_name').val("28 mm Blended");
	 $('#option_price').val($('#b_28mm_blended_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
//Bifocal D35
$(function() {
 $('#b_35mm').click(function(){
	 $('#option_type').val("Bifocal");
	 $('#option_name').val("35 mm");
	 $('#option_price').val($('#b_35mm_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
//Bifocal Executive
$(function() {
 $('#b_full_width').click(function(){
	 $('#option_type').val("Bifocal");
	 $('#option_name').val("Full Width");
	 $('#option_price').val($('#b_full_width_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
//Varifocal Standard
$(function() {
 $('#verifocal_standard').click(function(){
	 $('#option_type').val("Verifocal");
	 $('#option_name').val("Standard");
	 $('#option_price').val($('#verifocal_standard_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
//Varifocal Better
$(function() {
 $('#verifocal_better').click(function(){
	 $('#option_type').val("Verifocal");
	 $('#option_name').val("Better");
	 $('#option_price').val($('#verifocal_better_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
//Varifocal Best
$(function() {
 $('#verifocal_best').click(function(){
	 $('#option_type').val("Verifocal");
	 $('#option_name').val("Best");
	 $('#option_price').val($('#verifocal_best_price').text());
	 javascript:document.forms[0].submit();
 });
});
	
</script>
</body>
</html>