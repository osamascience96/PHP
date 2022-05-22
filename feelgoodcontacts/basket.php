<?php include 'Connection.php' ?>
<?php
	echo $_SESSION['step1_option_id'];
/*
	$item_array = ['item_id' => $_GET['step1_option_id']];
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
		  
		  //4
		  $_SESSION['step4_prescription_name'] = $_SESSION['shopping_cart'][$key]['item_step4_presc_name'];
		  
        }
    }*/
	
	//Step 1
	unset($_SESSION['step1_option_type']);
	unset($_SESSION['step1_option_name']);
	unset($_SESSION['step1_option_price']);
	//Step 2
	unset($_SESSION['step2_option_hidden_alize_forte']);
	unset($_SESSION['step2_option_hidden_alize_forte_price']);
	unset($_SESSION['step2_option_hidden_option_all']);
	unset($_SESSION['step2_option_hidden_option_all_price']);
	unset($_SESSION['step2_option_hidden_option_btn']);
	unset($_SESSION['step2_option_hidden_option_tint_info']);
	//Step 3
	unset($_SESSION['step3_package_name']);
	unset($_SESSION['step3_package_price']);
	//Step 4
	unset($_SESSION['step4_prescription_name']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Basket</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">	
</head>

<body>	

<?php include 'header.php' ?>
		<!-- Basket Start -->
	<div class="container">
		<div class="row">
			<!-- Col1 Start -->
			<div class="col-sm-12 col-md-7 col-lg-8">
				<h5 class="basket_heading">My Basket</h5>
				
				<div class="col-sm-12 col-md-12 col-lg-12">
				
					<!-- Basket Table Start -->
					<div class="container basket_th_cont">
					  <div class="row">
						<div class="col-4 basket_hd">
						  <strong>Product</strong>
						</div>
						<div class="col-4 basket_hd">
						  <strong>Quantity</strong>
						</div>
						<div class="col-2 basket_hd">
						  <strong>Price</strong>
						</div>
						  <div class="col-2 basket_hd">
						  <strong>Remove</strong>
						</div>
					  </div>
					</div>
					
					<div class="container">
					  
                      <?php 
					  if(!empty($_SESSION['shopping_cart']))
						{
						$total = 0;
						$mynum = 1;
						foreach($_SESSION['shopping_cart'] as $keys => $values) 
						{
							$fetch_query = mysqli_query($conn,"SELECT * FROM product where id=".$values['item_id']." AND active=1");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
					$temp_lense_count = $row['product_lense_description'];
				  		?>
						<div class="row">
						  <div class="col-4">
							 <img src="images/Products/<?php echo $values['item_image'];?>" class="basket_product_img">
						  </div>
						  <?php if($row['Brand'] == 0 || $row['Brand'] == null) { ?>
						 <div class="col-4">
							 Left:
							<select class="form-control basket_product_quantity" disabled>
								<option value="<?php echo $values['item_left_qty'] ?> "><?php echo $values['item_left_qty'] ?> (<?php echo ($values['item_left_qty'] * $temp_lense_count) ?> lens) &nbsp; &nbsp; &nbsp; &nbsp;</option>
							</select>
							 Right:
							 <select class="form-control basket_product_quantity" disabled> 
								<option value="<?php echo $values['item_right_qty'] ?> "><?php echo $values['item_right_qty'] ?> (<?php echo ($values['item_right_qty'] * $temp_lense_count) ?> lens) &nbsp; &nbsp; &nbsp; &nbsp;</option>
							</select>
						  </div>
						  <?php } else {?>
							<div class="col-4">
							<strong>Used For:</strong> 
							<?php if(empty($values['item_step1_option_type']) || $values['item_step1_option_type'] == "none") { } else {?>
							<?php echo $values['item_step1_option_type']; ?>
							<?php } ?>
							<?php if(empty($values['item_step1_option_name'])) { } else {?>
							<?php echo "(".$values['item_step1_option_name'].")"; ?>
							<?php } ?><a href="step1.php?Product_id=<?php echo $values['item_id']; ?>"><i class="fas fa-pencil-alt"></i>edit</a>
							<br>
							
							<?php if(empty($values['item_step2_option_hidden_option_all']) || $values['item_step2_option_hidden_option_all'] == "none") { } else {?>
							<strong>Lenses:</strong> 
							<?php echo $values['item_step2_option_hidden_option_all']; ?>
							<?php } ?>
							<?php if(empty($values['item_step2_option_hidden_option_btn'])) { } else {?>
							<?php echo $values['item_step2_option_hidden_option_btn']; ?>
							<?php } ?>
							<?php if(empty($values['item_step2_option_hidden_alize_forte'])) { } else {?>
							<?php echo $values['item_step2_option_hidden_alize_forte']; ?>
							<?php } ?>
							<?php if(empty($values['step2_option_hidden_option_tint_info'])) { } else {?>
							<?php echo "(".$values['step2_option_hidden_option_tint_info'].")"; ?>
							<?php } ?>
								<?php if(empty($values['item_step2_option_hidden_option_all']) || $values['item_step2_option_hidden_option_all'] == "none") { } else {?>
							 <a href="step2.php?Product_id=<?php echo $values['item_id']; ?>"><i class="fas fa-pencil-alt"></i>edit</a>
							<?php } ?>
							<br>
							
							<?php if(empty($values['item_step3_package_name']) || $values['item_step3_package_name'] == "none") { } else {?>
							<strong>Package:</strong> 
							<?php echo $values['item_step3_package_name']; ?> <a href="step3.php?Product_id=<?php echo $values['item_id']; ?>"><i class="fas fa-pencil-alt"></i>edit</a>
							<?php } ?>
							<br>
							<?php if(empty($values['item_step4_presc_name']) || $values['item_step4_presc_name'] == "none") { } else {?>
							<strong>Prescription:</strong> 
							<?php echo $values['item_step4_presc_name']; ?> <a href="step4.php?Product_id=<?php echo $values['item_id']; ?>&edit=1"><i class="fas fa-pencil-alt"></i>edit</a>
							<?php } ?>
							 
						  </div>
							
						  <?php } ?>
						  <div class="col-2">$<?php echo $values['item_price'];?>
                          <br>
                          <?php //echo $values['item_left_check'];?>
                          <?php //echo $values['item_right_check'];?>
                          <?php //echo $values['item_left_power'];?>
                          <?php //echo $values['item_right_power'];?>
                          <?php //echo $values['item_left_bc'];?>
                          <?php //echo $values['item_right_bc'];?>
                          <?php //echo $values['item_left_diameter'];?>
                          <?php //echo $values['item_right_diameter'];?>
						  <?php //echo $values['item_left_cylinder'];?>
                          <?php //echo $values['item_right_cylinder'];?>
						  <?php //echo $values['item_left_axis'];?>
                          <?php //echo $values['item_right_axis'];?>
						  <?php //echo $values['item_left_color'];?>
                          <?php //echo $values['item_right_color'];?>
                          <?php //echo $values['item_left_qty'];?>
                          <?php //echo $values['item_right_qty'];?>
                          
                          </div>
						  <div class="col-2 basket_product_remove"><a href="basket.php?action=delete&id=<?php echo $values['item_id']?>">X</a></div>
						</div>
						
						<?php if($row['Brand'] == 0 || $row['Brand'] == null) { ?>
						<div class="row info_row">
							<div class="col-12">
								<p>[Left <strong>:</strong> Right]<br>
									
									<?php if($values['item_left_power'] == "0" || $values['item_left_power'] == 0 || $values['item_left_power'] == null || $values['item_left_power'] == "" || $values['item_right_power'] == "0" || $values['item_right_power'] == 0 || $values['item_right_power'] == null || $values['item_right_power'] == "") { } else {?>
									<strong>Power: </strong><?php echo $values['item_left_power']." : ".$values['item_right_power']; ?>, 
									<?php } ?>
									
									<?php if($values['item_left_bc'] == "0" || $values['item_left_bc'] == 0 || $values['item_left_bc'] == null || $values['item_left_bc'] == "" || $values['item_right_bc'] == "0" || $values['item_right_bc'] == 0 || $values['item_right_bc'] == null || $values['item_right_bc'] == "") { } else {?>
									<strong>Base Curve: </strong><?php echo $values['item_left_bc']." : ".$values['item_right_bc']; ?>,
									<?php } ?>
									
									<?php if($values['item_left_diameter'] == "0" || $values['item_left_diameter'] == 0 || $values['item_left_diameter'] == null || $values['item_left_diameter'] == "" || $values['item_right_diameter'] == "0" || $values['item_right_diameter'] == 0 || $values['item_right_diameter'] == null || $values['item_right_diameter'] == "") { } else {?>
									<strong>Diameter: </strong><?php echo $values['item_left_diameter']." : ".$values['item_right_diameter']; ?>,
									<?php } ?>
									
									<?php if($values['item_left_cylinder'] == "0" || $values['item_left_cylinder'] == 0 || $values['item_left_cylinder'] == null || $values['item_left_cylinder'] == "" || $values['item_right_cylinder'] == "0" || $values['item_right_cylinder'] == 0 || $values['item_right_cylinder'] == null || $values['item_right_cylinder'] == "") { } else {?>
									<strong>Cylinder: </strong><?php echo $values['item_left_cylinder']." : ".$values['item_right_cylinder']; ?>,
									<?php } ?>
									
									<?php if($values['item_left_axis'] == "0" || $values['item_left_axis'] == 0 || $values['item_left_axis'] == null || $values['item_left_axis'] == "" || $values['item_right_axis'] == "0" || $values['item_right_axis'] == 0 || $values['item_right_axis'] == null || $values['item_right_axis'] == "") { } else {?>
									<strong>Axis: </strong><?php echo $values['item_left_axis']." : ".$values['item_right_axis']; ?>,
									<?php } ?>
									
									<?php if(empty($values['item_left_color']) && empty($values['item_right_color'])) { } else {?>
									<strong>Color: </strong><?php echo $values['item_left_color']." : ".$values['item_right_color']; ?>
									<?php } ?>
								</p>
							</div> 
						</div>
						<?php } else { echo "<hr>"; } ?>
                        <?php 
				}
							$mynum++;
			}

}
	
						?>
						 
					  
					  </div>
					
					
					
					
				</div>
			
			</div>
			
			<!-- COl1 End -->
			
			
			<!-- Col2 Start -->
			<div class="col-sm-12 col-md-5 col-lg-4 ">
				
				<div class="col-sm-12 col-md-12 col-lg-12 basket_side_col">
				<!--Col1 -->
				
				<p class="basket_paragraph_heading">Summary</p>
				<hr>
				<p>Estimated Delivery <strong>3-6</strong> Working Days</p>
					
				<table class="basket_side_tbl">
					<tr>
						<td>Subtotal</td>
						<td class="basket_price">£<span id="basket_total"><?php
							$tot = 0;
					  if(!empty($_SESSION['shopping_cart']))
						{
						
						foreach($_SESSION['shopping_cart'] as $keys => $values) 
						{
							
						$tot = $tot + $values['item_price'];
						
						}
						 echo $tot;
					  }?></span></td>
					</tr>
					
					
					<tr>
						<td>Delivery</td>
						<td class="basket_price">£<span id="delivery">3.95</span></td>
					</tr>
					
					<hr>
					
					<tr>
						<td class="basket_total_price_heading">Total To Pay</td>
						<td class="basket_total_price">£<span id="final_price"></span></td>
					</tr>
					
				</table>
					
				<button type="button" onclick="document.location='checkout.php'" class="btn btn-primary btn-lg btn-block basket_btn">Proceed To Checkout</button>
	
				
				<!-- Col1 End -->
				</div>
			</div>
			
			<!-- COl2 End -->
			
		</div>
	
	</div>
	
	
	<!-- Basket End -->
	
	<!-- Product Carousel Section Start -
	
<!-- Product Carousel Section End -->
	
	
<?php include 'footer.php' ?>

<script>
jQuery(document).ready(function($){ 
		var bt = parseInt($('#basket_total').text());
		var de = parseInt($('#delivery').text());
		var fn = (bt+de);
		$('#final_price').text(fn);	
});

function total() {
	var a,b,c,d,e;
	if($('#step2_option_hidden_alize_forte_price').val() == "FREE" || $('#step2_option_hidden_alize_forte_price').val() == "") {
	   a = 0;
	} else { a = $('#step2_option_hidden_alize_forte_price').val(); }
	
	if($('#step2_option_hidden_option_all_price').val() == "FREE" || $('#step2_option_hidden_option_all_price').val() == "") {
	   b = 0;
	} else { b = $('#step2_option_hidden_option_all_price').val(); }
	
	if($('#step1_option_price').val() == "FREE" || $('#step1_option_price').val() == "") {
	   c = 0;
	} else { c = $('#step1_option_price').val(); }
	
	if($('#product_price').text() == "FREE" || $('#product_price').text() == "") {
	   d = 0;
	} else { d = $('#product_price').text(); }
	
	if($('#step3_package_price').val() == "FREE" || $('#step3_package_price').val() == "") {
	   e = 0;
	} else { e = $('#step3_package_price').val(); }
	
	var aa = parseInt(a);
	var bb = parseInt(b);
	var cc = parseInt(c);
	var dd = parseInt(d);
	var ee = parseInt(e);
	var total2 = (aa+bb+cc+dd+ee);
	//$('#mytotal').text(total2);
	//$('#hidden_price').val(total2);
}
	

	
</script>
	
	
</body>
</html>