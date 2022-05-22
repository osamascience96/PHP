<?php include 'Connection.php' ?>


<div class="container">
	<div class="row">
		
	<!-- Product Image Section -->
		
		<!-- Col1 Start -->	
<div class="col-sm-12 col-md-6 col-lg-7">
	<div class="col-sm-12 col-md-12 col-lg-12 pad-0" >
    <?php
	
    $product_temp_id = $_POST['value'];
	
	
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
                
                    <div class="carousel-item active"> <img id="prod_image" src="images/Products/<?php echo $row['image']; ?>" alt="Hills"> </div>
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
                    <li class="list-inline-item active"> <a id="carousel-selector-0" data-slide-to="0" data-target="#custCarousel"> <img id="prod_image2" src="images/products/<?php echo $row['image']; ?>" class="img-fluid"> </a> </li>
                    
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

<div class="col-sm-12 col-md-6 col-lg-5 product_main_info_div">
	
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
	
	<!-- product Description Table Start -->
	<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_price_section_col">

    					
    					<div class="main_product_colors_div col-md-12 col-sm-12 col-lg-12">
                        <h6 class="product_item_sku">ITEM SKU: <strong><?php echo $row['order_number']; ?></strong></h6>
							<div class="main_product_colors_div2">
                            <?php 
							$att=1;
							$product_temp_main_idm = $_SESSION['main_product_id'];
							//1 Product Merge Check
							$fetch_query2 = mysqli_query($conn,"SELECT * FROM product_merge where Product_id=$product_temp_main_idm AND active=1");
							while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
								$temp_merge_id = $row2['Merge'];
								//2 Product Call
								$fetch_query3 = mysqli_query($conn,"SELECT * FROM product where id=$temp_merge_id AND active=1");
								while($row3=mysqli_fetch_array($fetch_query3,MYSQLI_ASSOC)) {
									$temp_frame_color_id = $row3['Frame_Color'];
									$temp_order_number = $row3['order_number'];
									//3 Color Call
									$fetch_query4 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_frame_color_id  AND active=1");
									while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) {
								
                            
							?>
                            <img id="mycolor" class="main_product_color_image color<?php echo $att ?>" src="images\Shop\glasses\<?php echo $row4['image_link']; ?>" data-value="<?php echo $temp_order_number; ?>">
							<?php $_SESSION['temp_product_id'] = $temp_order_number; ?>
                            
                            <?php
							
							$att++;
									}
								}
							}
							 ?>
							</div>
						</div>
                             
                             
    
    
    <form method="post" id="frm" action="">
    <?php
			$temp_check = $row['Brands_of_Contact_Lenses']; 
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
				
				
				  <select class="custom-select my-1 mr-sm-2 product_select_option" name="left_power" id="left_power">
					<option selected>---</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				  </select>
				
				
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
			
				
				  <select class="custom-select my-1 mr-sm-2 product_select_option" name="right_power" id="right_power">
					<option selected>---</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				  </select>
				
				
				
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
	
		<!-- Product Description List Start -->
		
		
		<!-- Product Description List Start -->
		
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
  			<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_bc" id="left_bc" placeholder="8.6">
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
  			<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_bc" id="right_bc" placeholder="8.6">
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
	
		<!-- Product Description List Start -->

		
		<!-- Product Description List3 Start -->
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
				
  				<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="left_diameter" id="inlineFormInputName2" placeholder="14.2">
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
  			<input type="text" class="form-control mb-2 mr-sm-2 product_input_lbl" name="right_diameter" id="inlineFormInputName2" placeholder="14.2">
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
	
		<!-- Product Description List3 Start -->

		
		<!-- Product Description List4 Start -->
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
				
				
				  <select class="custom-select my-1 mr-sm-2 product_select_option" name="left_qty" id="inlineFormCustomSelectPref">
					<option selected>1 (5 lenses)</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				  </select>
				
				
			</div>
			
			<!-- Col2 End -->
			
			<!-- Col3 Start -->
			
			<div class="col-sm-4 col-md-4 col-lg-4 product_question_col product_sub_col">
				
				  <select class="custom-select my-1 mr-sm-2 product_select_option" name="right_qty" id="inlineFormCustomSelectPref">
					<option selected>1 (5 lenses)</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				  </select>
					
				
			</div>
			
			<!-- Col3 End -->
			
		
		</div>
	
		<!-- Product Description List4 Start -->
		<?php } else {} ?>
        
        
		<!-- Product Price Section Start -->
		
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col">
		
			<h5 class="product_amount_heading">Price Per Piece:</h5>
			<h5 class="product_price_new">£<?php echo $row['Price'];?></h5>
			
		
		</div>
		
		
		<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_list_col product_last_col">
			<input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row['Price']; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>" />
            <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>" />
			
			<input type="button" name="sd" onclick="window.location.href='step1.php?Product_id=<?php echo $row['id']; ?>';" class="btn btn-primary btn-lg btn-block product_price_btn" value="CHECK OUT WITH LENSES">
			
			<input type="submit" id="cowl" name="add_to_cart" class="btn btn-primary btn-lg btn-block product_price_btn" value="CHECK OUT WITHOUT LENSES">
            
          
				

		
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
			<div class="col-sm-12 col-md-5 col-lg-3 product_question_col">
			
				<h5 class="frame_info_heading">Frame Info</h5>
				<table class="frame_info_table">
				<tr>
					<th class="frame_info_list">Brand:</th>
					<td class="frame_info_List_txt"><?php 
					$temp_brand = $row['Brand'];
					$fetch_query5 = mysqli_query($conn,"SELECT * FROM brand where id=$temp_brand  AND active=1");
									while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) {
										echo $row5['Brand'];
									}
					 ?></td>	
					
				</tr>
				
				<tr>
					<th>Colour:</th>
					<td><?php 
					$temp_color = $row['Frame_Color'];
					$fetch_query6 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_color  AND active=1");
									while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
										echo $row6['Frame_Color'];
									}
					 ?></td>	
					
				</tr>
					
				<tr>
					<th>Size:</th>
					<td class="product2_size"><?php 
					$temp_color = $row['Frame_Size'];
					$fetch_query6 = mysqli_query($conn,"SELECT * FROM frame_size where id=$temp_color  AND active=1");
									while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
										echo $row6['Frame_Size'];
									}
					 ?></td>	
					
				</tr>
					
				
				<tr>
					<th>Gender:</th>
					<td><?php 
					$temp_gender = $row['Gender'];
					$fetch_query7 = mysqli_query($conn,"SELECT * FROM gender where id=$temp_gender AND active=1");
									while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) {
										echo $row7['Gender'];
									}
					 ?></td>	
					
				</tr>	
					
				
				<tr>
					<th>Shape:</th>
					<td><?php 
					$temp_shape = $row['Shape'];
					$fetch_query8 = mysqli_query($conn,"SELECT * FROM shape where id=$temp_shape AND active=1");
									while($row8=mysqli_fetch_array($fetch_query8,MYSQLI_ASSOC)) {
										echo $row8['Shape'];
									}
					 ?></td>	
					
				</tr>	
                
                <tr>
					<th>Material:</th>
					<td><?php 
					$temp_marterial = $row['Material'];
					$fetch_query9 = mysqli_query($conn,"SELECT * FROM material where id=$temp_marterial AND active=1");
									while($row9=mysqli_fetch_array($fetch_query9,MYSQLI_ASSOC)) {
										echo $row9['Material'];
									}
					 ?></td>	
					
				</tr>		
					
				</table>
				
				
				<table class="frame_info_table">
					<tr>
						<th class="frame_info_list">Measurements:</th>
						<td class="frame_info_List_txt2"><?php echo $row['fm_lense_width'] ." - ".$row['fm_lense_bt_width']." - ".$row['fm_stick_width']; ?></td>
											
					</tr>
				
				</table>
				
				<button type="button" class="btn btn-primary btn-lg frame_info_btn" data-toggle="modal" data-target="#exampleModal">More Details</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title my_modal_title" id="exampleModalLabel">Measurements</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						Frames have the size printed on the inside of the arms, with these you can use our Best Fit Machine to find a pair with the same fit as your own frame!<br>

<p class="center_it"><span class="my_theme_col">54</span>-17-140<br>
	The first number is <span class="my_theme_col">lens diameter</span></p>

						  <p class="center_it">54-<span class="my_theme_col">17</span>-140<br>
							  The second number is <span class="my_theme_col">bridge width</span></p>

						  <p class="center_it">54-17-<span class="my_theme_col">140</span><br>
							  The third number is <span class="my_theme_col">arm length</span></p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						
					  </div>
					</div>
				  </div>
				</div>
				<!-- Modal End-->
				
			</div>
			<!-- Col1 End -->
			
			
			<!-- Col2 Start -->
			<div class="col-sm-12 col-md-7 col-lg-9 product_question_col">
			
				<!-- Col1 Start -->
				<div class="col-sm-12 col-md-12 col-lg-7 product_question_col">
					<div class="frame_height">|<br><span class="frame_height2"><?php echo $row['fm_height'] ?>mm</span><br>|</div>
					<div class="frame_bt_width "><hr class="frame_bt_width_hr2"><p class="frame_bt_width2"><?php echo $row['fm_lense_bt_width'] ?>mm</p></div>
					<img src="images/Shop/sunglasses/rectangle.e9e2fc9ded4f.svg" class="frame_info_img">
					<div class=""><p>Frame width: <?php echo $row['fm_width']; ?>mm</p></div>
					<div class="frame_lense_width"><hr class="frame_lense_width_hr2"><p class="frame_lense_width2"><?php echo $row['fm_lense_width'] ?>mm</p></div>
				</div>
				
				<!-- Col1 End -->
				
				
				<!-- Col2 Start -->
				<div class="col-sm-12 col-md-12 col-lg-5 product_question_col">
					<div class="fm_stick_measurement"><p><?php echo $row['fm_lense_width'] ." - ".$row['fm_lense_bt_width']." - ".$row['fm_stick_width']; ?></p></div>
					
					<img src="images/Shop/sunglasses/frame-arm.c3967a162593.svg" class="frame_info_img2">
					
					<div class="frame_stick_width"><hr class="frame_stick_width_hr2"><p class="frame_stick_width2"><?php echo $row['fm_stick_width'] ?>mm</p></div>
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
				<div class="col-sm-12 col-md-7 col-lg-6 product_question_col">
					
					<h5 class="available_lense_heading">Available Lenses</h5>
					
					<!-- Product Available lense Tab Start -->
					<ul class="nav nav-pills nav-pills2 mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item nav-item2 product_available_lense_tab_li">
						<a class="nav-link nav-link3 nav-link-glasses active product_available_lense_tab_btn my_single_vision" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" role="tab" aria-controls="pills-home pills-home2" aria-selected="true">Single Vision</a>
					  </li>
					  <li class="nav-item nav-item2 product_available_lense_tab_li">
						<a class="nav-link nav-link3 product_available_lense_tab_btn my_bifocals" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" role="tab" aria-controls="pills-profile pills-profile2" aria-selected="false">Bifocals</a>
					  </li>
					  <li class="nav-item nav-item2 product_available_lense_tab_li">
						<a class="nav-link nav-link3 product_available_lense_tab_btn my_varifocals" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Varifocals</a>
					  </li>
						
					  <li class="nav-item nav-item2 product_available_lense_tab_li">
						<a class="nav-link nav-link3 product_available_lense_tab_btn my_sunglasses" id="pills-sunglasses-tab" data-toggle="pill" href="#pills-sunglasses" role="tab" aria-controls="pills-sunglasses" aria-selected="false">Sunglasses</a>
					  </li>
						
					
					  <li class="nav-item nav-item2 product_available_lense_tab_li">
						<a class="nav-link nav-link3 product_available_lense_tab_btn my_blue_reflects" id="pills-reflects-tab" data-toggle="pill" href="#pills-reflects" role="tab" aria-controls="pills-reflects" aria-selected="false">Blue Reflects</a>
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
					  Varifocal lenses are designed to help you focus on things near and far, and everything in between. They allow you to see objects at all distances, and offer a smooth progression from long distance vision at the top of the lens, through intermediate distance in the middle portion, right through to very close objects at the bottom of the lens.
					</p>
					 
					  
				 </div>
			   	  <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
					<p class="product_available_lense_tab_txt">
					  Sunglasses lenses feature a UV400 coating which offers 100% protection from harmful UVA and UVB rays. To further improve visual comfort and reduce eye strain, we recommend Polarised or Transitions® light adaptive lenses.
					</p>
					  
					
					  
				 </div>
			 	  <div class="tab-pane fade" id="pills-reflects" role="tabpanel" aria-labelledby="pills-reflects-tab">
					<p class="product_available_lense_tab_txt">
					  Digital Protection BlueReflect™ lenses are recommended for anyone spending a significant amount of time in front of digital devices (computer, tablet, smartphone or TV).
					</p>
					  
					<p class="product_available_lense_tab_txt">
					  BlueReflect™ lenses use a special coating to help reflect a portion of the blue light emitted by digital devices and artificial light. This coating also incorporates scratch resistant and anti-glare benefits, giving you clearer vision while using digital devices.
					</p>	
				 </div>	
					
				</div>
					
					
					<!-- Product Available Lense Description End -->
					
					
					
				</div>
				<!--Col1 End -->
				
					<!--Col2 -->
				<div class="col-sm-12 col-md-5 col-lg-6 product_question_col">
			
				<div class="tab-content" id="pills-tabContent">
				  <div class="tab-pane fade show active my_single" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
					<img src="images/Shop/sunglasses/lens-singlevision.bb6e53b6ffe0.svg" class="avialable_lense_img" id="my_main_img">	
				  </div>
				  <div class="tab-pane fade my_bifocal" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
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
	
	<div class="container">
		<div class="row">
			
			<!-- COl Start -->
			
			<div class="col-sm-12 col-md-12 col-lg-12 product_review_tab_col">
				
				<!-- Col1-->
				<div class="col-sm-12 col-md-12 col-lg-12 bgcol5 product_review_tab_col1">
				<ul class="nav nav-tabs product_review_tab_ul" id="myTab" role="tablist">
				  <li class="nav-item">
					<a class="nav-link active product_review_tab_a" id="descr-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="descr" aria-selected="true">Discription</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link product_review_tab_a" id="lense-tab" data-toggle="tab" href="#lense" role="tab" aria-controls="lense" aria-selected="false">lense</a>
				  </li>
					
				  <!--<li class="nav-item">
					<a class="nav-link product_review_tab_a" id="testi-tab" data-toggle="tab" href="#testi" role="tab" aria-controls="testi" aria-selected="false">Testimonials</a>
				  </li>-->
				
				  <li class="nav-item">
					<a class="nav-link product_review_tab_a" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review</a>
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
				  <div class="tab-pane fade" id="lense" role="tabpanel" aria-labelledby="lense-tab">
						<br>
					   <h5>Our Lense Option</h5>
					  
					  <table class="product_lense_tbl">
					  	<tr>
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							
						  
						</tr>
						  
						  
						 <tr>
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
						  
						</tr> 
						  
						<tr>
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							<td class="product_lense_tbl_data">
							<img src="images/Shop/sunglasses/tick-right.png">
							<span>FREE Single Vision Lenses</span>	
							</td>
							
							
						  
						</tr>  
					  
					  </table>
					  
				 </div>
				
					
				  <!--<div class="tab-pane fade" id="testi" role="tabpanel" aria-labelledby="testi-tab">
					 
					<div class="col-sm-12 col-md-12 col-lg-12 product_question_col product_testimonial_col">  
					  <!-- Col1 --
					  <div class="col-sm-4 col-md-4 col-lg-4 product_question_col">
							
						  <h5 class="testimonial_heading2">Add a testimonial</h5>
						  <p><br></p>
						  
					  </div>
					  <!-- Col1 End -->
					  
					  <!-- Col2 --
					  <div class="col-sm-8 col-md-8 col-lg-8 product_question_col">
					  
						<h5 class="testimonial_heading">Testimonial</h5>
						<p><br>No Testimonials Found</p>  
						  
					  </div>
					  <!-- Col2 End --
					</div> 
					  
				 </div>-->
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
							  <input type="hidden" name="order_no" id="order_no" value="<?php echo $row['order_number']; ?>" />
							  <button type="submit" name="review_btn2" id="review_btn" class="btn btn-primary btn-sm btn-block review_submit_button" >Leave A Review</button>
							  
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
					else if($rrawew2['Brand'] != 0 && $rrawew2['LENS_COLOUR'] == 0) {
					$temp_Brands_of_Contact_Lenses = $rrawew2['Brand'];
					$descript1=mysqli_query($conn,"SELECT count(*) as myesc_total1 from product where Brand=$temp_Brands_of_Contact_Lenses AND LENS_COLOUR=0 AND active=1");
				$data=mysqli_fetch_assoc($descript1);	
				if($data['myesc_total1'] > 5) {
					?>
				<li data-target="#myCarousel" data-slide-to="1" style="background-color:#333;height:6px;"></li>
					<?php } 
					}
					else if($rrawew2['Brand'] != 0 && $rrawew2['LENS_COLOUR'] != 0) {
					$temp_Brands_of_Contact_Lenses = $rrawew2['Brand'];
					$descript1=mysqli_query($conn,"SELECT count(*) as myesc_total1 from product where Brand=$temp_Brands_of_Contact_Lenses AND LENS_COLOUR!=0 AND active=1");
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
						else if($rrawew2['Brand'] != 0 && $rrawew2['LENS_COLOUR'] == 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Brand=$temp_Brands_of_Contact_Lenses AND LENS_COLOUR=0 AND active=1");
					 	}
						else if($rrawew2['Brand'] != 0 && $rrawew2['LENS_COLOUR'] != 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Brand=$temp_Brands_of_Contact_Lenses AND LENS_COLOUR!=0 AND active=1");
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
									<a href="product2.php?product_id=<?php echo $rrrawew3['order_number']; ?>" style="text-decoration: none;">
									<img src="images/Products/<?php echo $rrrawew3['image'] ?>" class="img-responsive img-fluid" alt=""></a>
								</div>
								<div class="thumb-content">
									<a href="product2.php?product_id=<?php echo $rrrawew3['order_number']; ?>" style="text-decoration: none;"><h4 class="carousel_my_name"><?php echo  limit_text($rrrawew3['name'], 4) ?></h4></a>
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
									<a href="product2.php?product_id=<?php echo $rrrawew3['order_number']; ?>" class="btn btn-primary carousel_my_btn">VIEW AND BUY</a>
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
					 else if($rrawew2['Brand'] != 0 && $rrawew2['LENS_COLOUR'] == 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Brand=$temp_Brands_of_Contact_Lenses AND LENS_COLOUR=0 AND active=1");
					 	}
					 else if($rrawew2['Brand'] != 0 && $rrawew2['LENS_COLOUR'] != 0) {
						 $fffetchew3 = mysqli_query($conn,"SELECT * FROM product where Brand=$temp_Brands_of_Contact_Lenses AND LENS_COLOUR!=0 AND active=1");
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
									<a href="product2.php?product_id=<?php echo $rrrawew4['order_number']; ?>" style="text-decoration: none;">
									<img src="images/Products/<?php echo $rrrawew4['image'] ?>" class="img-responsive img-fluid" alt=""></a>
								</div>
								<div class="thumb-content">
									<a href="product2.php?product_id=<?php echo $rrrawew4['order_number']; ?>" style="text-decoration: none;"><h4 class="carousel_my_name"><?php echo  limit_text($rrrawew4['name'], 4) ?></h4></a>
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
									<a href="product2.php?product_id=<?php echo $rrrawew4['order_number']; ?>" class="btn btn-primary carousel_my_btn">VIEW AND BUY</a>
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
	<?php } 





?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
//Button For Form Submit
$('#cowl').click(function() {
  
	$("#frm").ajaxForm({url: 'server.php', type: 'post'})
	
});
	
//Active Button
	 $('.nav-pills2 .product_available_lense_tab_li').click(function(){
    $(this).parent().find('.product_available_lense_tab_li').removeClass('selected');
	$(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
//Show Image Tab
$(function() {
 $('.my_single_vision').click(function(){
   $("#my_main_img").attr('src',"images/Shop/sunglasses/lens-singlevision.bb6e53b6ffe0.svg");
  
 });
});
$(function() {
 $('.my_bifocals').click(function(){
   $("#my_main_img").attr('src',"images/Shop/sunglasses/lens-bifocals.e004e004917b.svg");
   
 });
});
$(function() {
 $('.my_varifocals').click(function(){
   $("#my_main_img").attr('src',"images/Shop/sunglasses/lens-varifocals.d77615c297fe.svg");
   
 });
});
$(function() {
 $('.my_sunglasses').click(function(){
   $("#my_main_img").attr('src',"images/Shop/sunglasses/lens-sun.b137e183a855.svg");
   
 });
});
$(function() {
 $('.my_blue_reflects').click(function(){
   $("#my_main_img").attr('src',"images/Shop/sunglasses/lens-bluereflect.f0898621b964.svg");
   
 });
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
	 	window.location = 'product2.php?product_id=<?php echo $_GET['product_id']; ?>';
    });
	
	<?php } else {} ?>
</script>