<?php include 'Connection.php' ?>
<?php 
$att = 1;
$attt = 1;


	$clause = " WHERE ";//Initial clause
	$sql="SELECT * FROM product  ";//Query stub

		if(isset($_POST['material'])) {
        	foreach($_POST['material'] as $c){
				if(!empty($c)){
					$sql .= $clause."Material=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		else if(isset($_POST['framesize'])) {
        	foreach($_POST['framesize'] as $c){
				if(!empty($c)){
					$sql .= $clause."Frame_Size=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		else if(isset($_POST['shape'])) {
        	foreach($_POST['shape'] as $c){
				if(!empty($c)){
					$sql .= $clause."Shape=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		else if(isset($_POST['brand'])) {
        	foreach($_POST['brand'] as $c){
				if(!empty($c)){
					$sql .= $clause."Brand=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		else if(isset($_POST['gender'])) {
        	foreach($_POST['gender'] as $c){
				if(!empty($c)){
					$sql .= $clause."Gender=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		else if(isset($_POST['framecolor'])) {
        	foreach($_POST['framecolor'] as $c){
				if(!empty($c)){
					$sql .= $clause."Frame_Color=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		else {
			$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brand!=0 AND Lens_Colour=0 AND active=1");
		}

	//Standard Query
	//echo $sql;
	//$fetch_query = mysqli_query($conn,"SELECT * FROM product where Material=$tt AND active=1");
	//$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brand!=0 AND Lens_Colour=0 AND active=1");
				


				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
					$temp_id = $row['id'];
				?>
				<!--Col1-->
				<div class="col-md-6 col-sm-6 col-lg-4 product_card_col" onclick="">
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
					<a href="product2.php?product_id=<?php  echo  $row['order_number'];?>">
					<img id="prod_image<?php echo $attt ?>" src="images/Products/<?php echo $row['image']; ?>" class="product_image">
					</a>
                    <?php $attt++; ?>
                    
                    	
						<div class="review_div col-md-12 col-sm-12 col-lg-12 ">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						<img src="images/Products/Review/review-star-blue.png" class="product_review">
						
						<span class="review_text">365 Reviews</span>
						</div>
						
						<div class="product_colors_div col-md-12 col-sm-12 col-lg-12">
							<div class="product_colors_div2">
                            <?php 
							//Count Table Row
							$results2 = $conn->query("SELECT COUNT(*) FROM product_merge where Product_id=$temp_id AND active=1");
							$rows2 = $results2->fetch_row();
							if($rows2[0] != 0) {
					
							//1 Product Merge Check
					$sqql = "SELECT * FROM product_merge where Product_id=$temp_id AND active=1";
							$fetch_query2 = mysqli_query($conn,"SELECT * FROM product_merge where Product_id=$temp_id AND active=1");
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
								
								<img class="product_color_image color<?php echo $att ?>" src="images\Shop\glasses\<?php echo $row4['image_link']; ?>"> 
								
                            <?php
							$att++;
									}
								}
							}
						}
					else {?>
						<img class="product_color_image" src="images\Shop\glasses\black.png" style="visibility: hidden;">
					<?php }
					
									   
							 ?>
							</div>
						</div>
						
						<div class="product_title_container col-md-12 col-sm-12 col-lg-12">
							
							<div class="col-md-9 col-sm-9 col-lg-9 product_title_div1">
                            <a class="product_card_title_a" href="product2.php?product_id=<?php  echo  $row['order_number'];  ?>">
							<h5 class="product_title"><?php echo limit_text2($row['name'], 4);  ?></h5>
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
							<?php /*
							$find_type = $row['Types_of_Contact_Lenses'];
							 $fetch_query2 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$find_type AND active=1");
				while($roww=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
					echo $roww['Contact_Lense_Type'];
				} */
				echo "Free Scratch Resistant Lenses";
				?></h5>
							</div>
						</div>
					
					</div>
				</div>
				<!--Col1 End-->
				<?php 
				}
				
				?>
<script>
<?php 
$att1 = 1; 
$attt1 = 0;
	$clause = " WHERE ";//Initial clause
	$sql="SELECT * FROM product  ";//Query stub

		if(isset($_POST['material'])) {
        	foreach($_POST['material'] as $c){
				if(!empty($c)){
					$sql .= $clause."Material=".$c."";
					$clause = " OR ";//Change  to OR after 1st WHERE
					$fetch_query = mysqli_query($conn,$sql);
				}   

			}
		}
		
		else {
			$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brand!=0 AND Lens_Colour=0 AND active=1");
		}
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
	//Glasses
 $('.product_colors_div2 .product_color_image').click(function(){
    $(this).parent().find('.product_color_image').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
</script>