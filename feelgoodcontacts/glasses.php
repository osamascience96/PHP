<?php include 'Connection.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Glasses</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
	
	
</head>

<body>

<?php include 'header.php' ?>

<!-- Row 1 Start  -->
<div class="container glasses_slider_container">
    <div class="row">
        
        <!-- Col1 Start -->
        <div class="col-sm-4 col-md-4 col-lg-4 glasses-slider">
			<a href="#">	
        		<img src="images/Shop/glasses/eyeglasses_women-banner.jpg"  class="glasses_slider_img">
			</a>	
        </div>
        <!-- Col1 End -->
        
        <!-- Col2 Start -->
        <div class="col-sm-4 col-md-4 col-lg-4 glasses-slider">
			<a href="#">	
        		<img src="images/Shop/glasses/eyeglasses_men-banner.jpg" class="glasses_slider_img">
			</a>	
        </div>
        <!-- Col2 End -->
        
        <!-- Col3 Start -->
        <div class="col-sm-4 col-md-4 col-lg-4 glasses-slider">
			<a href="#"> 	
        		<img src="images/Shop/glasses/glasses-page-uk.jpg" class="glasses_slider_img">
			</a>	
        </div>
        <!-- Col3 End -->
        
        
       
    </div>
</div>
<!-- Row 2 End  -->

	
<!-- Glasses Page Client Start -->
	
	<div class="container glasses_client_container">
		<div class="row">
			<diV class="col-sm-12 col-md-12 col-lg-12 glasses_slider_col">
				
				<img src="images/Shop/glasses/rayban.png" class="glasses_clients_img">
				<img src="images/Shop/glasses/oakley.png" class="glasses_clients_img">
				<img src="images/Shop/glasses/superdry.png" class="glasses_clients_img">
				<img src="images/Shop/glasses/feelgoodcollection.png" class="glasses_clients_img">
				<img src="images/Shop/glasses/oneill.png" class="glasses_clients_img">
				<img src="images/Shop/glasses/polaroid.png" class="glasses_clients_img">
				<img src="images/Shop/glasses/tommy-hilfiger.png" class="glasses_clients_img">
			
			
			</diV>
		
		</div>
	</div>
	
<!-- Glasses Page Client End -->	
	
<!-- Glasses Page Main Heading Start -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 glasses_main_heading_col">
				
				<h5 class="glasses_main_heading">Buy glasses online cheaper</h5>
			
			</div>
		
		</div>
	</div>
	
<!-- Glasses Page Main Heading Start -->
	
<!-- Glasses Product Category Section Start -->
	
<div class="container home_product_section">
	<div class="row">
    	
        
        <!-- Col01 Start -->
        <div class="col-md-3 col-sm-3 col-lg-3 contact_lense_aside">
        	<div class="accordion" id="accordionExample">
			  <div class="card">
				<div class="card-header" id="headingOne">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Gender
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					  
					<!--
						<div class="form-check form-check-inline">
						  <input class="form-check-input gender_checkbox" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label gender_checkbox_lbl" for="inlineCheckbox1">Women</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input gender_checkbox" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label gender_checkbox_lbl" for="inlineCheckbox2">Men</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input gender_checkbox" type="checkbox" id="inlineCheckbox3" value="option3">
						  <label class="form-check-label gender_checkbox_lbl" for="inlineCheckbox3">Unisex</label>
						</div>
					-->
					
					<!-- Bootsnip Gender CheckBox Start -->
					<form method="post" action="">
				<div class="bootsnip_brand_checkbox_div">
					<?php 
				$fetch_query = mysqli_query($conn,"SELECT * FROM gender where id!=0 AND Type='Glasses' AND active=1");
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {
				?>  
                    <div class="chiller_bc">
						<input id="<?php echo $row['Gender']; ?>" type="checkbox" name="gender[]" class="mycheck_gender" value="<?php echo $row['id']; ?>">
						<label for="<?php echo $row['Gender']; ?>"><?php echo $row['Gender']; ?></label>
						<span></span>
					</div>
					<?php } ?>				
  				</div>
					</form>
					<!-- Bootsnip Gender Checkbox End -->
					
				</div>
			  </div>
				
				
			<!-- Category Two Start -->
					
				<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Brand
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				
				 <!-- Bootsnip Brand Checkbox Start -->
					<form method="post" action="">
				<div class="bootsnip_brand_checkbox_div">
                <?php 
				$fetch_query2 = mysqli_query($conn,"SELECT * FROM Brand where id!=0 AND Type='Glasses' AND active=1");
				while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
				?>  
					<div class="chiller_bc">
						<input id="<?php echo $row2['Brand']; ?>" type="checkbox" name="brand[]" class="mycheck_brand" value="<?php echo $row2['id']; ?>">
						<label for="<?php echo $row2['Brand']; ?>"><?php echo $row2['Brand']; ?></label>
						<span></span>
					</div>
                 <?php } ?>
					
  				</div>
					</form>
				 <!-- Bootsnip Brand Checkbox End -->
					
				</div>
			  </div>
			
					
				
			<!-- Category Two End -->
				
			<!-- Category Three Start -->
				
			<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Shape
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  
					 <!-- Bootsnip Brand Checkbox Start -->
					<form method="post" action="">
				<div class="bootsnip_brand_checkbox_div">
                <?php 
				$fetch_query3 = mysqli_query($conn,"SELECT * FROM shape where id!=0 AND Type='Glasses' AND active=1");
				while($row3=mysqli_fetch_array($fetch_query3,MYSQLI_ASSOC)) {
				?>  
                
					<div class="chiller_bc">
						<input id="<?php echo $row3['Shape'];?>" type="checkbox" name="shape[]" class="mycheck_shape" value="<?php echo $row3['id']; ?>">
						<label for="<?php echo $row3['Shape'];?>">
						<img src="images/header/Glasses/Frames/<?php echo $row3['image_link'];?>" class="glasses_checkbox_img">
						<?php echo $row3['Shape'];?>
						</label>
						<span></span>
					</div>
  				<?php } ?>
                
                </div>
					</form>
				 <!-- Bootsnip Brand Checkbox End -->
					
				</div>
			  </div>
				
				
			<!-- Category Three End -->
				
			<!-- Category Four Start -->
				
			<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Frame Color
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  
				<!-- Frame Color Checkbox Start -->
					
					 
					<form method="post" action="">
				<div class="bootsnip_brand_checkbox_div">
                <?php 
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM frame_color where id!=0 AND Type='Glasses' AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) {
				?>  
					<div class="chiller_bc">
						<input id="<?php echo $row4['Frame_Color']; ?>" type="checkbox" name="framecolor[]" class="mycheck_framecolor" value="<?php echo $row4['id']; ?>">
						<label for="<?php echo $row4['Frame_Color']; ?>">
						<img src="images/Shop/glasses/<?php echo $row4['image_link']; ?>">	
						<?php echo $row4['Frame_Color']; ?>
						</label>
						<span></span>
					</div>
				<?php } ?>
					
				 <!-- Frame Color Checkbox End -->	
					
				</div>
					</form>
		  </div>
				
				
		<!-- Category Four End -->
			 
				
		<!-- Category Five Start -->
				
			<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Frame Size
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  
				<!-- Bootsnip Frame Size CheckBox Start -->
					<form method="post" action="">
					<div class="bootsnip_brand_checkbox_div">
                    <?php 
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM frame_size where id!=0 AND Type='Glasses' AND active=1");
				while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) {
				?>  
					<div class="chiller_bc">
						<input id="<?php echo $row5['Frame_Size']; ?>" type="checkbox" name="framesize[]" class="mycheck_framesize" value="<?php echo $row5['id']; ?>">
						<label for="<?php echo $row5['Frame_Size']; ?>"><?php echo $row5['Frame_Size']; ?></label>
						<span></span>
					</div>
                    <?php } ?>
					
				
										
  				</div>
					</form>
					
					<!-- Bootsnip Frame Size Checkbox End -->
					
				</div>
		  </div>
				
				
		<!-- Category Five End -->		
				
		
		<!-- Category Six Start -->
				
			<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
					<button class="btn btn-link btn_brand_contactlense_category " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					 Material
					</button>
				  </h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				  
				<!-- Frame Color Checkbox Start -->
					 
                     <?php 
				$fetch_query6 = mysqli_query($conn,"SELECT * FROM material where id!=0 AND Type='Glasses' AND active=1");
				while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
				?> 
					 <div class="frame_checkbox_div">
                     <form method="post" action="">
						   <div class="chiller_fc">
						<input id="<?php echo $row6['Material']; ?>" type="checkbox" name="material[]" class="mycheck_material" value="<?php echo $row6['id']; ?>">
						<label for="<?php echo $row6['Material']; ?>">
						<?php echo $row6['Material']; ?>
						</label>
						<span></span>
					  </div>
					  </form>
					</div>
                    <?php } ?>
					
					
					
	
					
					
 
				<!-- Frame Color Checkbox End -->	
					
				</div>
		  </div>
				
				
		<!-- Category Six End -->		
				
				

			</div>

        </div>
	</div>
		<!-- Col01 End -->
		
		<!-- Col02 Start -->
        <div class="col-md-9 col-sm-12 col-lg-9	">
			
			<div class="row" id="result">
			
				
				
			</div>
			<!-- Row End -->		
		</div>
		<!-- Col2 End -->
		
	</div><!-- Row End -->
</div> <!-- Container End -->	
				
	<!--Glasses Product Category Section End -->	

<?php include 'footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>

	

//Glasses
 $('.product_colors_div2 .product_color_image').click(function(){
    $(this).parent().find('.product_color_image').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});

	
$(document).ready(function() {
		$.ajax({
			url:"glasses_search.php",
			type:"POST",
			dataType:"text",
			success:function(data) {
			$('#result').html(data);
			}
		});
	
//CheckBox Search Material
	$(document).on("change", ".mycheck_material", function (e) {
		 e.preventDefault();
		$.post('glasses_search.php',$('form').serialize(),function(data){
     $('#result').html(data);
		})
		e.preventDefault();
	});
	
	//CheckBox Search Frame_Size
	$(document).on("change", ".mycheck_framesize", function (e) {
		 e.preventDefault();
		$.post('glasses_search.php',$('form').serialize(),function(data){
     $('#result').html(data);
		})
		e.preventDefault();
	});
	
	//CheckBox Search Shape
	$(document).on("change", ".mycheck_shape", function (e) {
		 e.preventDefault();
		$.post('glasses_search.php',$('form').serialize(),function(data){
     $('#result').html(data);
		})
		e.preventDefault();
	});
	
	//CheckBox Search Brand
	$(document).on("change", ".mycheck_brand", function (e) {
		 e.preventDefault();
		$.post('glasses_search.php',$('form').serialize(),function(data){
     $('#result').html(data);
		})
		e.preventDefault();
	});
	
	//CheckBox Search Gender
	$(document).on("change", ".mycheck_gender", function (e) {
		 e.preventDefault();
		$.post('glasses_search.php',$('form').serialize(),function(data){
     $('#result').html(data);
		})
		e.preventDefault();
	});
	
	//CheckBox Search Gender
	$(document).on("change", ".mycheck_framecolor", function (e) {
		 e.preventDefault();
		$.post('glasses_search.php',$('form').serialize(),function(data){
     $('#result').html(data);
		})
		e.preventDefault();
	});
	
	
});
	
	
</script>