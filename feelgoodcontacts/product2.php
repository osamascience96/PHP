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

</head>

<body>

<?php include 'header.php' ?>

<!-- Product Section Start -->
	<?php 
	$tempo = $_GET['product_id'];
		//$product_temp_main_idm = $_SESSION['main_product_id'];
	$fetch_quer = mysqli_query($conn,"SELECT * FROM product where order_number='$tempo' AND active=1");
				while($ro=mysqli_fetch_array($fetch_quer,MYSQLI_ASSOC)) {
					$_SESSION['main_product_id'] = $ro['id'];
					
				}
				
		
	?>
    <div id="result">
    
    </div>


	
<?php include 'footer.php' ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
</body>
</html>


<script>
<?php /*
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
									
		*						
                          

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

/*
<?php 
$att1++;
									
								}
							}
				}
				
	*/			
?>
//Refresh Error
	if (window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
//Glasses
 $('.main_product_colors_div2 .main_product_color_image').click(function(){
    $(this).parent().find('.main_product_color_image').removeClass('selected');
    $(this).addClass('selected');
   // var val = $(this).attr('data-value');
    //alert(val);
    //$(this).parent().find('input').val(val);
});

$(document).ready(function() {
	//1 
	
		 var val = "<?php echo $_GET['product_id'] ?>";
		 //alert(val);
		 $.ajax({
			url:"productview.php",
			type:"POST",
			data:{value:val},
			dataType:"text",
			success:function(data) {
			$('#result').html(data);
			}
		});

	//2
	$(document).on("click", ".main_product_color_image", function (e) {
		 e.preventDefault();
		 var val = $(this).attr('data-value');
		 //alert(val);
		 $.ajax({
			url:"productview.php",
			type:"POST",
			data:{value:val},
			dataType:"text",
			success:function(data) {
			$('#result').html(data);
			}
		});
		e.preventDefault();
	});
	/*
    $('.main_product_color_image').click(function() {
        
		$.ajax({
			url:"productview.php",
			type:"post",
			data:{value:val},
			success:function(response) {
			$('#result').html(response);
			}
		});
    });*/
});

</script>
