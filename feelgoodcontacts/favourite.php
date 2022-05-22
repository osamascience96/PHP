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

	<div class="col-md-12 col-sm-12 col-lg-12">
			
			<div class="row fav_main_row">
				<div class="col-md-12 col-sm-12 col-lg-12">
				<h2 class="fav_main_title">MY SAVED ITEMS</h2>
					<hr class="fav_main_hr">
				</div>
				<?php 
				if(!empty($_SESSION['favourite_cart']))
						{
						$total = 0;
						foreach($_SESSION['favourite_cart'] as $keys => $values) 
						{
							$tempo = $values['item_id'];
				$fetch_query = mysqli_query($conn,"SELECT * FROM product where id=$tempo AND active=1");
				
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
					<a href="?action2=delete2&id=<?php echo $values['item_id']?>"><button type="button"  class="btn btn-danger product_fav_button"><i class="fa fa-times" aria-hidden="true"></i>
</button></a>
                    
                    
                    <?php 
							}
							else {
								?>
                                <!--<button type="submit" name="add_to_fav" class="btn btn-outline-danger product_fav_button"><i class="far fa-heart"></i></button>-->
                                <?php
							}
						}
					}
					else {
						?>
                        <!--<button type="submit" name="add_to_fav" class="btn btn-outline-danger product_fav_button"><i class="far fa-heart"></i></button>-->
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
				}
				?>
				
				
				
			</div><!--Row End-->
			
        </div>
        <!-- Col02 End -->
	
	
	
	
	
<?php include 'footer.php' ?>	


</body>
</html>