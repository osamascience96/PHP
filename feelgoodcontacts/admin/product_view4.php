<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Glasses | View</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<?php include 'dashboard_aside.php' ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="glasses.php" title="Go to Glasses" class="tip-bottom"><i class="icon-home"></i> Glasses</a> <a href="#" class="current">Product View </a> </div>
    <h1>Product View <?php if(isset($_GET['product'])  == "contact_lense") { echo "Contact Lense"; } else{} ?></h1>
  </div>
	<div class="container-fluid">
  <hr>
  		<div class="row-fluid">
			<div class="span6">
				<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
            <h5>Product Images</h5>
          </div>
          <div class="widget-content">
            <ul class="thumbnails" style="padding-right: 3%;">
				<?php
				$temp_product_id = $_GET['product_id'];
				$fetch_query1 = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id  AND active=1");
					while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) { ?>
              <li class="span12"> <a> <img src="../images/Products/<?php echo $row1['image']; ?>" alt="" class="product_view_image"> </a>
                <div class="actions"> <!--<a title="" class="" href="#"><i class="icon-pencil"></i></a>--> <a class="lightbox_trigger" href="../images/Products/<?php echo $row1['image']; ?>"><i class="icon-search"></i></a> </div>
              </li>
			<?php } ?>
            </ul>
            <ul class="thumbnails">
			<?php
				$fetch_query2 = mysqli_query($conn,"SELECT * FROM gallery where Product_id=$temp_product_id  AND active=1");
					while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) { ?>
			  <form action="" method="post">
              <li class="span3"> <a> <img src="../images/Products/<?php echo $row2['Image_Link']; ?>" alt="" > </a>
                <div class="actions"> <button type="submit" class="btn image_delete" name="delete_gallery_image"><i class="icon-trash"></i></button> <a class="lightbox_trigger" href="../images/Products/<?php echo $row2['Image_Link']; ?>"><i class="icon-search"></i></a> </div>
				<input type="hidden" name="delete_id" value="<?php echo $row2['id']; ?>" />
				<input type="hidden" name="delete_file" value="<?php echo $row2['Image_Link']; ?>" />
              </li>
			  </form>
				<?php } ?>
				<li class="span12">
				<div class="control-group">
				  <label class="control-label">Add Gallery Images :</label>
				  <div class="controls">
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						<input type="file" name="files[]" multiple >
						<input type="submit" class="btn btn-success" name="gallery_btn" value="UPLOAD">
					</form>
				</div>
              </li>
            </ul>
          </div>
        </div>
			</div>
			<div class="span6">
				 <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Product Basic Details:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
               
              </thead>
				<?php
				$fetch_query3 = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id  AND active=1");
					while($row3=mysqli_fetch_array($fetch_query3,MYSQLI_ASSOC)) { ?>
              <tbody>
                <tr class="odd gradeX">
                  <th>Stock ID</th>
                  <td><?php echo $row3['order_number']; ?></td>
                </tr>
				 <tr class="odd gradeX">
                  <th>Name</th>
                  <td><?php echo $row3['name']; ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Price</th>
                  <td><?php echo $row3['Price']; ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Sale Price</th>
                  <td><?php echo $row3['Sale_Price']; ?></td>
                </tr>
				 <tr class="odd gradeX">
                  <th>Quantity</th>
                  <td><?php echo $row3['Quantity']; ?></td>
                </tr>
				   <tr class="odd gradeX">
                  <th>Brand</th>
                  <td><?php
				$temp_product_id2 = $row3['Brand'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM brand where id=$temp_product_id2 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Brand']; ?>"><?php echo $row4['Brand']; ?></option>
				<?php } ?></td>
                </tr>
				   <tr class="odd gradeX">
                  <th>Gender</th>
                  <td><?php
				$temp_product_id3 = $row3['Gender'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM gender where id=$temp_product_id3 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Gender']; ?>"><?php echo $row4['Gender']; ?></option>
				<?php } ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Shape</th>
                  <td><?php
				$temp_product_id4 = $row3['Shape'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM shape where id=$temp_product_id4 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Shape']; ?>"><?php echo $row4['Shape']; ?></option>
				<?php } ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Frame Color</th>
                  <td><?php
				$temp_product_id5 = $row3['Frame_Color'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_product_id5 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Frame_Color']; ?>"><?php echo $row4['Frame_Color']; ?></option>
				<?php } ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Frame Size</th>
                  <td><?php
				$temp_product_id5 = $row3['Frame_Size'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM frame_size where id=$temp_product_id5 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Frame_Size']; ?>"><?php echo $row4['Frame_Size']; ?></option>
				<?php } ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Material</th>
                  <td><?php
				$temp_product_id5 = $row3['Material'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM material where id=$temp_product_id5 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Material']; ?>"><?php echo $row4['Material']; ?></option>
				<?php } ?></td>
                </tr>
              </tbody>
				<?php } ?>
            </table>
          </div>
        </div>
			</div>
		</div>
		

		<!-- *************** ROW 3 ***************** -->
		<div class="row-fluid">
			
			<!-- Frame Size Description Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Frame Size Description</h5>
				  </div>
				<?php
				$t_id = $_GET['product_id'];
				$fetch_queryff = mysqli_query($conn,"SELECT * FROM product where id=$t_id AND active=1");
				while($rowff=mysqli_fetch_array($fetch_queryff,MYSQLI_ASSOC)) { ?>
				 	<div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Frame Height :</label>
              <div class="controls">
                <input type="text" name="fm_height" class="span11" value="<?php echo $rowff['fm_height']?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Frame Lense Width :</label>
              <div class="controls">
                <input type="text" name="fm_lense_width" class="span11" value="<?php echo $rowff['fm_lense_width']?>" />
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label">Padding B/W Lense :</label>
              <div class="controls">
                <input type="text" name="fm_lense_bt_width" class="span11" value="<?php echo $rowff['fm_lense_bt_width']?>" />
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label">Frame Stick Width :</label>
              <div class="controls">
                <input type="text" name="fm_stick_width" class="span11" value="<?php echo $rowff['fm_stick_width']?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Frame Width :</label>
              <div class="controls">
                <input type="text" name="fm_width" class="span11" value="<?php echo $rowff['fm_width']?>"/>
				  <input type="hidden" name="prod_id" class="span11" value="<?php echo $_GET['product_id']; ?>" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="update_size_description" class="btn btn-success bttn">Save</button>
            </div>
          </form>
						<?php } ?>
        </div>
       			</div>
			</div>
			<!-- Frame Size Description End -->
			
			<!-- Add Number Of Pack Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Add Frame Colors</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal8" data-toggle="modal" class="btn btn-danger power_view_btn">View Frame Colors</a>
					<div id="myModal8" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Add Frame Colors</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style=" margin-left: 0px;">
              <thead>
				 <tr>
				 <th>Order No#</th>
				 <th>Name</th>
				 <th>Color</th>
				 <th>Delete</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM product_merge where Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  		<?php
						$temp_merge_color = $row5['Merge'];
						$fetch_query99 = mysqli_query($conn,"SELECT * FROM product where id=$temp_merge_color  AND active=1");
						while($row99=mysqli_fetch_array($fetch_query99,MYSQLI_ASSOC)) {	
						?>
						<td><?php echo $row99['order_number']; ?></td>
						<td><?php echo $row99['name']; ?></td>
						<td><?php
							$temp_my_color = $row99['Frame_Color'];
							$fetch_query00 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_my_color  AND active=1");
							while($row00=mysqli_fetch_array($fetch_query00,MYSQLI_ASSOC)) { ?>
							<img src="../images/Shop/glasses/<?php echo $row00['image_link']; ?>"/>
							<?php } ?>
						</td>
						<td><button type="submit" name="glasses_variant_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
						<?php } ?>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span12" style="margin-left:0px;">
						<form action="" method="post">
						<label>Add Frame Colors:</label>
						<select class="power_range" name="variant" required>
						<option selected>Select From</option>
						<?php
						$fetch_query99 = mysqli_query($conn,"SELECT * FROM product where Brand!=0 AND Lens_Colour=0 AND active=1");
						while($row99=mysqli_fetch_array($fetch_query99,MYSQLI_ASSOC)) {
						?>
						<option class="text-captilize" value="<?php echo $row99['id']; ?>">
						<?php
							$temp_color_id = $row99['Frame_Color'];
							$fetch_query00 = mysqli_query($conn,"SELECT * FROM frame_color where Type='Glasses' AND active=1 AND id=$temp_color_id");
						while($row00=mysqli_fetch_array($fetch_query00,MYSQLI_ASSOC)) {
							echo  $row00['Frame_Color'] ." | ";
						}
							echo $row99['order_number']." | ". $row99['name']; ?>
						</option>
						<?php } ?>
						</select>
						
						
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="add_variant_glasses" class="btn btn-inverse power_range_btn">Add Frame Colors</button>
						</form>
					</div>
					 
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Add More Lense Product End -->
			
		</div>
		<!-- *************** ROW 4 ***************** -->
		<div class="row-fluid">
			
			
			<div class="span12">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
					<h5>Product Description</h5>
				  </div>
				  <div class="widget-content">
					<div class="control-group">
					  <form action="" method="post">
						<div class="controls">
						  <textarea class="textarea_editor span12" rows="6" name="product_description" placeholder="Enter text ...">
							<?php
							$fetch_query88 = mysqli_query($conn,"SELECT * FROM product_description where Product_id=$temp_product_id  AND active=1");
							while($row88=mysqli_fetch_array($fetch_query88,MYSQLI_ASSOC)) {	  
							echo $row88['Product_Description'];  
							}?>
						  </textarea>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button type="submit" name="product_description_btn" class="btn btn-success ">Update</button>
						</div>
					  </form>
					</div>
				  </div>
				</div>
			</div>
			
			
		</div>

<!-- *************** ROW 6 ***************** -
		<div class="row-fluid">
			
			
			<div class="span12">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
					<h5>Product Detail Advice</h5>
				  </div>
				  <div class="widget-content">
					<div class="control-group">
					  <form action="" method="post">
						<div class="controls">
						  <textarea class="textarea_editor3 span12" rows="6" name="product_detail_advice" placeholder="Enter text ...">
							<?php
							$fetch_query88 = mysqli_query($conn,"SELECT * FROM product_detail_advice where Product_id=$temp_product_id  AND active=1");
							while($row88=mysqli_fetch_array($fetch_query88,MYSQLI_ASSOC)) {	  
							echo $row88['Product_Detail_Advice'];  
							}?>
						  </textarea>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button type="submit" name="product_detail_advice_btn" class="btn btn-success ">Update</button>
						</div>
					  </form>
					</div>
				  </div>
				</div>
			</div>
			
			
		</div>

-->
	</div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
	$('.textarea_editor2').wysihtml5();
	$('.textarea_editor3').wysihtml5();
</script>
<script>
	if($('#qty1').text() != "") {
	   $('#qty_btn1').prop('disabled', true);
	}
	else {
	   
	}
	if($('#qty2').text() != "") {
	   $('#qty_btn2').prop('disabled', true);
	}
	else {
	   
	}
	
</script>

</body>
</html>
