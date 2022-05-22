<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Lenses | Edit</title>
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Product View </a> </div>
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
                  <th>Power Range</th>
                  <td><?php echo $row3['Power_Range']; ?></td>
                </tr>
				 <tr class="odd gradeX">
                  <th>Diameter</th>
                  <td><?php echo $row3['Diameter']; ?></td>
                </tr>
				 <tr class="odd gradeX">
                  <th>Lense Material</th>
                  <td><?php echo $row3['Lens_Material']; ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Water Content</th>
                  <td><?php echo $row3['Water_Content']; ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Oxygen Permeability</th>
                  <td><?php echo $row3['Oxygen_Permeability']; ?></td>
                </tr>
				 <tr class="odd gradeX">
                  <th>Product Quantity</th>
                  <td><?php echo $row3['Product_Qty_Description']; ?></td>
                </tr>
                <tr class="odd gradeX">
                  <th>Product Lense Description</th>
                  <td><?php $temp_lense_count = $row3['product_lense_description'];
						echo $row3['product_lense_description']; ?></td>
                </tr>
				   <tr class="odd gradeX">
                  <th>Brands Of Contact Lenses</th>
                  <td><?php
				$temp_product_id2 = $row3['Brands_of_Contact_Lenses'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM brands_of_contact_lenses where id=$temp_product_id2 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Brands_Name']; ?>"><?php echo $row4['Brands_Name']; ?></option>
				<?php } ?></td>
                </tr>
				   <tr class="odd gradeX">
                  <th>Types Of Contact Lenses</th>
                  <td><?php
				$temp_product_id3 = $row3['Types_of_Contact_Lenses'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where id=$temp_product_id3 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Contact_Lense_Type']; ?>"><?php echo $row4['Contact_Lense_Type']; ?></option>
				<?php } ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Shop By Manufacturer</th>
                  <td><?php
				$temp_product_id4 = $row3['Shop_by_Manufacturer'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM shop_by_manufacturer where id=$temp_product_id4 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Manufacturer_Name']; ?>"><?php echo $row4['Manufacturer_Name']; ?></option>
				<?php } ?></td>
                </tr>
				  <tr class="odd gradeX">
                  <th>Optican Brands</th>
                  <td><?php
				$temp_product_id5 = $row3['Optician_Brands'];										 	
				$fetch_query4 = mysqli_query($conn,"SELECT * FROM optician_brands where id=$temp_product_id5 AND active=1");
				while($row4=mysqli_fetch_array($fetch_query4,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row4['Optician_Brands']; ?>"><?php echo $row4['Optician_Brands']; ?></option>
				<?php } ?></td>
                </tr>
              </tbody>
				<?php } ?>
            </table>
          </div>
        </div>
			</div>
		</div>
		<!-- *************** ROW 2 ***************** -->
		<div class="row-fluid">
			
			<!-- Power Start -->	
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Power</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal" data-toggle="modal" class="btn btn-primary power_view_btn">View Power</a>
					<div id="myModal" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Power</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
                <tr>
                  <th colspan="2">Plus</th>
                </tr>
				
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM power where Side_Select='left' AND Plus!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row5['Plus']; ?></td>
						<td><button type="submit" name="power_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
				<thead>
                <tr>
                  <th colspan="2">Minus</th>
                </tr>
				
              </thead>
              <tbody>
                <tr>
				<?php
                  $fetch_query6 = mysqli_query($conn,"SELECT * FROM power where Side_Select='left' AND Minus!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row6['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td>-<?php echo $row6['Minus']; ?></td>
					<td><button type="submit" name="power_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
                </tr>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
                <tr>
                  <th colspan="2">Plus</th>
                </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM power where Side_Select='right' AND Plus!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row7['Plus']; ?></td>
						<td><button type="submit" name="power_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
                
              </tbody>
				<thead>
                <tr>
                  <th colspan="2">Minus</th>
                </tr>
				
              </thead>
              <tbody>
                <?php
                  $fetch_query8 = mysqli_query($conn,"SELECT * FROM power where Side_Select='right' AND Minus!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row8=mysqli_fetch_array($fetch_query8,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row8['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td>-<?php echo $row8['Minus']; ?></td>
				  <td><button type="submit" name="power_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						Left Range:
						<form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="left_range_from" required>
						<option selected>Select From</option>
						<optgroup label="Plus">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<optgroup label="Plus">
						<optgroup label="Minus">
						<option value="-1">-1</option>
						<option value="-2">-2</option>
						<option value="-3">-3</option>
						<option value="-4">-4</option>
						<option value="-5">-5</option>
						<option value="-6">-6</option>
						<option value="-7">-7</option>
						<option value="-8">-8</option>
						<optgroup label="Minus">
						</select>
						
						<label>Till:</label>
						<select class="power_range" name="left_range_till" required>
						<option selected>Select Till</option>
						<optgroup label="Plus">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<optgroup label="Plus">
						<optgroup label="Minus">
						<option value="-1">-1</option>
						<option value="-2">-2</option>
						<option value="-3">-3</option>
						<option value="-4">-4</option>
						<option value="-5">-5</option>
						<option value="-6">-6</option>
						<option value="-7">-7</option>
						<option value="-8">-8</option>
						<optgroup label="Minus">
						</select>
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="left_power_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  Right Range:
						  <form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="right_range_from" required>
						<option selected>Select From</option>
						<optgroup label="Plus">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<optgroup label="Plus">
						<optgroup label="Minus">
						<option value="-1">-1</option>
						<option value="-2">-2</option>
						<option value="-3">-3</option>
						<option value="-4">-4</option>
						<option value="-5">-5</option>
						<option value="-6">-6</option>
						<option value="-7">-7</option>
						<option value="-8">-8</option>
						<optgroup label="Minus">
						</select>
						
						
						<label>Till:</label>
						<select class="power_range" name="right_range_till" required>
						<option selected>Select Till</option>
						<optgroup label="Plus">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<optgroup label="Plus">
						<optgroup label="Minus">
						<option value="-1">-1</option>
						<option value="-2">-2</option>
						<option value="-3">-3</option>
						<option value="-4">-4</option>
						<option value="-5">-5</option>
						<option value="-6">-6</option>
						<option value="-7">-7</option>
						<option value="-8">-8</option>
						<optgroup label="Minus">
						</select>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" name="right_power_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					<div class="span12" style="margin-left:0px;"><hr></div>
					  
					  <div class="span6" style="margin-left:0px;">
						  <form action="" method="post">
						  <label class="control-label">Left Value :</label>
						  <div class="controls">
							<input type="text" class="span11" name="left_power_value" placeholder="Left Value" />
						  </div>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button class="btn btn-inverse power_range_btn2" name="left_power_btn">Add Left</button>
						  </form>
					  </div>
					  
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						  <label class="control-label">Right Value :</label>
						  <div class="controls">
							<input type="text" name="right_power_value" class="span11" placeholder="Right Value" />
						  </div>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button class="btn btn-inverse power_range_btn2" name="right_power_btn">Add Right</button>
						  </form>
					  </div>
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Power End -->				


			<!-- Base Curve Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Base Curve</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal2" data-toggle="modal" class="btn btn-warning power_view_btn">View Base Curve</a>
					<div id="myModal2" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Power</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM base_curve where Side_Select='left' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row5['Value']; ?></td>
						<td><button type="submit" name="base_curve_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM base_curve where Side_Select='right' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row7['Value']; ?></td>
						<td><button type="submit" name="base_curve_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						Left Range:
						<form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="left_range_from" required>
						<option selected>Select From</option>
						<option value="8.0">8.0</option>
						<option value="8.1">8.1</option>
						<option value="8.2">8.2</option>
						<option value="8.3">8.3</option>
						<option value="8.4">8.4</option>
						<option value="8.5">8.5</option>
						<option value="8.6">8.6</option>
						<option value="8.7">8.7</option>
						<option value="8.8">8.8</option>
						<option value="8.9">8.9</option>
						<option value="9.0">9.0</option>
						<option value="9.1">9.1</option>
						<option value="9.2">9.2</option>
						<option value="9.3">9.3</option>
						<option value="9.4">9.4</option>
						<option value="9.5">9.5</option>
						</select>
						
						<label>Till:</label>
						<select class="power_range" name="left_range_till" required>
						<option selected>Select Till</option>
						<option value="8.0">8.0</option>
						<option value="8.1">8.1</option>
						<option value="8.2">8.2</option>
						<option value="8.3">8.3</option>
						<option value="8.4">8.4</option>
						<option value="8.5">8.5</option>
						<option value="8.6">8.6</option>
						<option value="8.7">8.7</option>
						<option value="8.8">8.8</option>
						<option value="8.9">8.9</option>
						<option value="9.0">9.0</option>
						<option value="9.1">9.1</option>
						<option value="9.2">9.2</option>
						<option value="9.3">9.3</option>
						<option value="9.4">9.4</option>
						<option value="9.5">9.5</option>
						</select>
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="left_base_curve_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  Right Range:
						  <form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="right_range_from" required>
						<option selected>Select From</option>
						<option value="8.0">8.0</option>
						<option value="8.1">8.1</option>
						<option value="8.2">8.2</option>
						<option value="8.3">8.3</option>
						<option value="8.4">8.4</option>
						<option value="8.5">8.5</option>
						<option value="8.6">8.6</option>
						<option value="8.7">8.7</option>
						<option value="8.8">8.8</option>
						<option value="8.9">8.9</option>
						<option value="9.0">9.0</option>
						<option value="9.1">9.1</option>
						<option value="9.2">9.2</option>
						<option value="9.3">9.3</option>
						<option value="9.4">9.4</option>
						<option value="9.5">9.5</option>
						</select>
						
						
						<label>Till:</label>
						<select class="power_range" name="right_range_till" required>
						<option selected>Select Till</option>
						<option value="8.0">8.0</option>
						<option value="8.1">8.1</option>
						<option value="8.2">8.2</option>
						<option value="8.3">8.3</option>
						<option value="8.4">8.4</option>
						<option value="8.5">8.5</option>
						<option value="8.6">8.6</option>
						<option value="8.7">8.7</option>
						<option value="8.8">8.8</option>
						<option value="8.9">8.9</option>
						<option value="9.0">9.0</option>
						<option value="9.1">9.1</option>
						<option value="9.2">9.2</option>
						<option value="9.3">9.3</option>
						<option value="9.4">9.4</option>
						<option value="9.5">9.5</option>
						</select>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" name="right_base_curve_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					<div class="span12" style="margin-left:0px;"><hr></div>
					  
					  <div class="span6" style="margin-left:0px;">
						  <form action="" method="post">
						  <label class="control-label">Left Value :</label>
						  <div class="controls">
							<input type="text" class="span11" name="left_base_curve_value" placeholder="Left Value" />
						  </div>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button class="btn btn-inverse power_range_btn2" name="left_base_curve_btn">Add Left</button>
						  </form>
					  </div>
					  
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						  <label class="control-label">Right Value :</label>
						  <div class="controls">
							<input type="text" name="right_base_curve_value" class="span11" placeholder="Right Value" />
						  </div>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button class="btn btn-inverse power_range_btn2" name="right_base_curve_btn">Add Right</button>
						  </form>
					  </div>
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Base Curve End -->

			
			
		</div>
		<!-- *************** ROW 2 ***************** -->
		<div class="row-fluid">
			
			<!--Diameter Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Diameter</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal3" data-toggle="modal" class="btn btn-info power_view_btn">View Diameter</a>
					<div id="myModal3" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Power</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM diameter where Side_Select='left' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row5['Value']; ?></td>
						<td><button type="submit" name="diameter_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM diameter where Side_Select='right' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row7['Value']; ?></td>
						<td><button type="submit" name="diameter_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						Left Range:
						<form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="left_range_from" required>
						<option selected>Select From</option>
						<option value="13.1">13.1</option>
						<option value="13.2">13.2</option>
						<option value="13.3">13.3</option>
						<option value="13.4">13.4</option>
						<option value="13.5">13.5</option>
						<option value="13.6">13.6</option>
						<option value="13.7">13.7</option>
						<option value="13.8">13.8</option>
						<option value="13.9">13.9</option>
						<option value="14.1">14.1</option>
						<option value="14.2">14.2</option>
						<option value="14.3">14.3</option>
						<option value="14.4">14.4</option>
						<option value="14.5">14.5</option>
						<option value="14.6">14.6</option>
						<option value="14.7">14.7</option>
						<option value="14.8">14.8</option>
						<option value="14.9">14.9</option>
						<option value="15.1">15.1</option>
						<option value="15.2">15.2</option>
						<option value="15.3">15.3</option>
						<option value="15.4">15.4</option>
						<option value="15.5">15.5</option>
						<option value="15.6">15.6</option>
						<option value="15.7">15.7</option>
						<option value="15.8">15.8</option>
						<option value="15.9">15.9</option>
						</select>
						
						<label>Till:</label>
						<select class="power_range" name="left_range_till" required>
						<option selected>Select Till</option>
						<option value="13.1">13.1</option>
						<option value="13.2">13.2</option>
						<option value="13.3">13.3</option>
						<option value="13.4">13.4</option>
						<option value="13.5">13.5</option>
						<option value="13.6">13.6</option>
						<option value="13.7">13.7</option>
						<option value="13.8">13.8</option>
						<option value="13.9">13.9</option>
						<option value="14.1">14.1</option>
						<option value="14.2">14.2</option>
						<option value="14.3">14.3</option>
						<option value="14.4">14.4</option>
						<option value="14.5">14.5</option>
						<option value="14.6">14.6</option>
						<option value="14.7">14.7</option>
						<option value="14.8">14.8</option>
						<option value="14.9">14.9</option>
						<option value="15.1">15.1</option>
						<option value="15.2">15.2</option>
						<option value="15.3">15.3</option>
						<option value="15.4">15.4</option>
						<option value="15.5">15.5</option>
						<option value="15.6">15.6</option>
						<option value="15.7">15.7</option>
						<option value="15.8">15.8</option>
						<option value="15.9">15.9</option>
						</select>
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="left_diameter_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  Right Range:
						  <form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="right_range_from" required>
						<option selected>Select From</option>
						<option value="13.1">13.1</option>
						<option value="13.2">13.2</option>
						<option value="13.3">13.3</option>
						<option value="13.4">13.4</option>
						<option value="13.5">13.5</option>
						<option value="13.6">13.6</option>
						<option value="13.7">13.7</option>
						<option value="13.8">13.8</option>
						<option value="13.9">13.9</option>
						<option value="14.1">14.1</option>
						<option value="14.2">14.2</option>
						<option value="14.3">14.3</option>
						<option value="14.4">14.4</option>
						<option value="14.5">14.5</option>
						<option value="14.6">14.6</option>
						<option value="14.7">14.7</option>
						<option value="14.8">14.8</option>
						<option value="14.9">14.9</option>
						<option value="15.1">15.1</option>
						<option value="15.2">15.2</option>
						<option value="15.3">15.3</option>
						<option value="15.4">15.4</option>
						<option value="15.5">15.5</option>
						<option value="15.6">15.6</option>
						<option value="15.7">15.7</option>
						<option value="15.8">15.8</option>
						<option value="15.9">15.9</option>
						</select>
						
						
						<label>Till:</label>
						<select class="power_range" name="right_range_till" required>
						<option selected>Select Till</option>
						<option value="13.1">13.1</option>
						<option value="13.2">13.2</option>
						<option value="13.3">13.3</option>
						<option value="13.4">13.4</option>
						<option value="13.5">13.5</option>
						<option value="13.6">13.6</option>
						<option value="13.7">13.7</option>
						<option value="13.8">13.8</option>
						<option value="13.9">13.9</option>
						<option value="14.1">14.1</option>
						<option value="14.2">14.2</option>
						<option value="14.3">14.3</option>
						<option value="14.4">14.4</option>
						<option value="14.5">14.5</option>
						<option value="14.6">14.6</option>
						<option value="14.7">14.7</option>
						<option value="14.8">14.8</option>
						<option value="14.9">14.9</option>
						<option value="15.1">15.1</option>
						<option value="15.2">15.2</option>
						<option value="15.3">15.3</option>
						<option value="15.4">15.4</option>
						<option value="15.5">15.5</option>
						<option value="15.6">15.6</option>
						<option value="15.7">15.7</option>
						<option value="15.8">15.8</option>
						<option value="15.9">15.9</option>
						</select>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" name="right_diameter_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					<div class="span12" style="margin-left:0px;"><hr></div>
					  
					  <div class="span6" style="margin-left:0px;">
						  <form action="" method="post">
						  <label class="control-label">Left Value :</label>
						  <div class="controls">
							<input type="text" class="span11" name="left_diameter_value" placeholder="Left Value" />
						  </div>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button class="btn btn-inverse power_range_btn2" name="left_diameter_btn">Add Left</button>
						  </form>
					  </div>
					  
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						  <label class="control-label">Right Value :</label>
						  <div class="controls">
							<input type="text" name="right_diameter_value" class="span11" placeholder="Right Value" />
						  </div>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button class="btn btn-inverse power_range_btn2" name="right_diameter_btn">Add Right</button>
						  </form>
					  </div>
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Diameter End -->
			
			<!-- Cylinder Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Cylinder</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal4" data-toggle="modal" class="btn btn-danger power_view_btn">View Cylinder</a>
					<div id="myModal4" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Cylinder</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM cylinder where Side_Select='left' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row5['Value']; ?></td>
						<td><button type="submit" name="cylinder_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM cylinder where Side_Select='right' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row7['Value']; ?></td>
						<td><button type="submit" name="cylinder_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						Left Range:
						<form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="left_range_from" required>
						<option selected>Select From</option>
						<option value="-0.50">-0.50</option>
						<option value="-0.75">-0.75</option>
						<option value="-1.00">-1.00</option>
						<option value="-1.25">-1.25</option>
						<option value="-1.50">-1.50</option>
						<option value="-1.75">-1.75</option>
						<option value="-2.00">-2.00</option>
						<option value="-2.25">-2.25</option>
						<option value="-2.50">-2.50</option>
						<option value="-2.75">-2.75</option>
						<option value="-3.00">-3.00</option>
						<option value="-3.25">-3.25</option>
						<option value="-3.50">-3.50</option>
						<option value="-3.75">-3.75</option>
						<option value="-4.00">-4.00</option>
						<option value="-4.25">-4.25</option>
						<option value="-4.50">-4.50</option>
						<option value="-4.75">-4.75</option>
						<option value="-5.00">-5.00</option>
						<option value="-5.25">-5.25</option>
						<option value="-5.50">-5.50</option>
						<option value="-5.75">-5.75</option>
						<option value="-6.00">-6.00</option>
						</select>
						
						<label>Till:</label>
						<select class="power_range" name="left_range_till" required>
						<option selected>Select Till</option>
						<option value="-0.50">-0.50</option>
						<option value="-0.75">-0.75</option>
						<option value="-1.00">-1.00</option>
						<option value="-1.25">-1.25</option>
						<option value="-1.50">-1.50</option>
						<option value="-1.75">-1.75</option>
						<option value="-2.00">-2.00</option>
						<option value="-2.25">-2.25</option>
						<option value="-2.50">-2.50</option>
						<option value="-2.75">-2.75</option>
						<option value="-3.00">-3.00</option>
						<option value="-3.25">-3.25</option>
						<option value="-3.50">-3.50</option>
						<option value="-3.75">-3.75</option>
						<option value="-4.00">-4.00</option>
						<option value="-4.25">-4.25</option>
						<option value="-4.50">-4.50</option>
						<option value="-4.75">-4.75</option>
						<option value="-5.00">-5.00</option>
						<option value="-5.25">-5.25</option>
						<option value="-5.50">-5.50</option>
						<option value="-5.75">-5.75</option>
						<option value="-6.00">-6.00</option>
						</select>
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="left_cylinder_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  Right Range:
						  <form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="right_range_from" required>
						<option selected>Select From</option>
						<option value="-0.50">-0.50</option>
						<option value="-0.75">-0.75</option>
						<option value="-1.00">-1.00</option>
						<option value="-1.25">-1.25</option>
						<option value="-1.50">-1.50</option>
						<option value="-1.75">-1.75</option>
						<option value="-2.00">-2.00</option>
						<option value="-2.25">-2.25</option>
						<option value="-2.50">-2.50</option>
						<option value="-2.75">-2.75</option>
						<option value="-3.00">-3.00</option>
						<option value="-3.25">-3.25</option>
						<option value="-3.50">-3.50</option>
						<option value="-3.75">-3.75</option>
						<option value="-4.00">-4.00</option>
						<option value="-4.25">-4.25</option>
						<option value="-4.50">-4.50</option>
						<option value="-4.75">-4.75</option>
						<option value="-5.00">-5.00</option>
						<option value="-5.25">-5.25</option>
						<option value="-5.50">-5.50</option>
						<option value="-5.75">-5.75</option>
						<option value="-6.00">-6.00</option>
						</select>
						
						
						<label>Till:</label>
						<select class="power_range" name="right_range_till" required>
						<option selected>Select Till</option>
						<option value="-0.50">-0.50</option>
						<option value="-0.75">-0.75</option>
						<option value="-1.00">-1.00</option>
						<option value="-1.25">-1.25</option>
						<option value="-1.50">-1.50</option>
						<option value="-1.75">-1.75</option>
						<option value="-2.00">-2.00</option>
						<option value="-2.25">-2.25</option>
						<option value="-2.50">-2.50</option>
						<option value="-2.75">-2.75</option>
						<option value="-3.00">-3.00</option>
						<option value="-3.25">-3.25</option>
						<option value="-3.50">-3.50</option>
						<option value="-3.75">-3.75</option>
						<option value="-4.00">-4.00</option>
						<option value="-4.25">-4.25</option>
						<option value="-4.50">-4.50</option>
						<option value="-4.75">-4.75</option>
						<option value="-5.00">-5.00</option>
						<option value="-5.25">-5.25</option>
						<option value="-5.50">-5.50</option>
						<option value="-5.75">-5.75</option>
						<option value="-6.00">-6.00</option>
						</select>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" name="right_cylinder_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					<div class="span12" style="margin-left:0px;"><hr></div>
					  
					  <div class="span6" style="margin-left:0px;">
						  <form action="" method="post">
						  <label class="control-label">Left Value :</label>
						  <div class="controls">
							<input type="text" class="span11" name="left_cylinder_value" placeholder="Left Value" />
						  </div>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button class="btn btn-inverse power_range_btn2" name="left_cylinder_btn">Add Left</button>
						  </form>
					  </div>
					  
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						  <label class="control-label">Right Value :</label>
						  <div class="controls">
							<input type="text" name="right_cylinder_value" class="span11" placeholder="Right Value" />
						  </div>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button class="btn btn-inverse power_range_btn2" name="right_cylinder_btn">Add Right</button>
						  </form>
					  </div>
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Cylinder End -->
			
			
			
		</div>
		
		<!-- *************** ROW 2.5 ***************** -->
		<div class="row-fluid">
			
			<!-- Axis Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Axis</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal5" data-toggle="modal" class="btn btn-success power_view_btn">View Axis</a>
					<div id="myModal5" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Axis</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM axis where Side_Select='left' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row5['Value']; ?></td>
						<td><button type="submit" name="axis_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM axis where Side_Select='right' AND Value!=0 AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row7['Value']; ?></td>
						<td><button type="submit" name="axis_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						Left Range:
						<form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="left_range_from" required>
						<option selected>Select From</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						<option value="32">32</option>
						<option value="33">33</option>
						<option value="34">34</option>
						<option value="35">35</option>
						<option value="36">36</option>
						<option value="37">37</option>
						<option value="38">38</option>
						<option value="39">39</option>
						<option value="40">40</option>
						<option value="41">41</option>
						<option value="42">42</option>
						<option value="43">43</option>
						<option value="44">44</option>
						<option value="45">45</option>
						<option value="46">46</option>
						<option value="47">47</option>
						<option value="48">48</option>
						<option value="49">49</option>
						<option value="50">50</option>
						<option value="51">51</option>
						<option value="52">52</option>
						<option value="53">53</option>
						<option value="54">54</option>
						<option value="55">55</option>
						<option value="56">56</option>
						<option value="57">57</option>
						<option value="58">58</option>
						<option value="59">59</option>
						<option value="60">60</option>
						<option value="61">61</option>
						<option value="62">62</option>
						<option value="63">63</option>
						<option value="64">64</option>
						<option value="65">65</option>
						<option value="66">66</option>
						<option value="67">67</option>
						<option value="68">68</option>
						<option value="69">69</option>
						<option value="70">70</option>
						<option value="71">71</option>
						<option value="72">72</option>
						<option value="73">73</option>
						<option value="74">74</option>
						<option value="75">75</option>
						<option value="76">76</option>
						<option value="77">77</option>
						<option value="78">78</option>
						<option value="79">79</option>
						<option value="80">80</option>
						<option value="81">81</option>
						<option value="82">82</option>
						<option value="83">83</option>
						<option value="84">84</option>
						<option value="85">85</option>
						<option value="86">86</option>
						<option value="87">87</option>
						<option value="88">88</option>
						<option value="89">89</option>
						<option value="90">90</option>
						<option value="91">91</option>
						<option value="92">92</option>
						<option value="93">93</option>
						<option value="94">94</option>
						<option value="95">95</option>
						<option value="96">96</option>
						<option value="97">97</option>
						<option value="98">98</option>
						<option value="99">99</option>
						<option value="100">100</option>
						<option value="101">101</option>
						<option value="102">102</option>
						<option value="103">103</option>
						<option value="104">104</option>
						<option value="105">105</option>
						<option value="106">106</option>
						<option value="107">107</option>
						<option value="108">108</option>
						<option value="109">109</option>
						<option value="110">110</option>
						<option value="111">111</option>
						<option value="112">112</option>
						<option value="113">113</option>
						<option value="114">114</option>
						<option value="115">115</option>
						<option value="116">116</option>
						<option value="117">117</option>
						<option value="118">118</option>
						<option value="119">119</option>
						<option value="120">120</option>
						<option value="121">121</option>
						<option value="122">122</option>
						<option value="123">123</option>
						<option value="124">124</option>
						<option value="125">125</option>
						<option value="126">126</option>
						<option value="127">127</option>
						<option value="128">128</option>
						<option value="129">129</option>
						<option value="130">130</option>
						<option value="131">131</option>
						<option value="132">132</option>
						<option value="133">133</option>
						<option value="134">134</option>
						<option value="135">135</option>
						<option value="136">136</option>
						<option value="137">137</option>
						<option value="138">138</option>
						<option value="139">139</option>
						<option value="140">140</option>
						<option value="141">141</option>
						<option value="142">142</option>
						<option value="143">143</option>
						<option value="144">144</option>
						<option value="145">145</option>
						<option value="146">146</option>
						<option value="147">147</option>
						<option value="148">148</option>
						<option value="149">149</option>
						<option value="150">150</option>
						<option value="151">151</option>
						<option value="152">152</option>
						<option value="153">153</option>
						<option value="154">154</option>
						<option value="155">155</option>
						<option value="156">156</option>
						<option value="157">157</option>
						<option value="158">158</option>
						<option value="159">159</option>
						<option value="160">160</option>
						<option value="161">161</option>
						<option value="162">162</option>
						<option value="163">163</option>
						<option value="164">164</option>
						<option value="165">165</option>
						<option value="166">166</option>
						<option value="167">167</option>
						<option value="168">168</option>
						<option value="169">169</option>
						<option value="170">170</option>
						<option value="171">171</option>
						<option value="172">172</option>
						<option value="173">173</option>
						<option value="174">174</option>
						<option value="175">175</option>
						<option value="176">176</option>
						<option value="177">177</option>
						<option value="178">178</option>
						<option value="179">179</option>
						<option value="180">180</option>
						</select>
						
						<label>Till:</label>
						<select class="power_range" name="left_range_till" required>
						<option selected>Select Till</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						<option value="32">32</option>
						<option value="33">33</option>
						<option value="34">34</option>
						<option value="35">35</option>
						<option value="36">36</option>
						<option value="37">37</option>
						<option value="38">38</option>
						<option value="39">39</option>
						<option value="40">40</option>
						<option value="41">41</option>
						<option value="42">42</option>
						<option value="43">43</option>
						<option value="44">44</option>
						<option value="45">45</option>
						<option value="46">46</option>
						<option value="47">47</option>
						<option value="48">48</option>
						<option value="49">49</option>
						<option value="50">50</option>
						<option value="51">51</option>
						<option value="52">52</option>
						<option value="53">53</option>
						<option value="54">54</option>
						<option value="55">55</option>
						<option value="56">56</option>
						<option value="57">57</option>
						<option value="58">58</option>
						<option value="59">59</option>
						<option value="60">60</option>
						<option value="61">61</option>
						<option value="62">62</option>
						<option value="63">63</option>
						<option value="64">64</option>
						<option value="65">65</option>
						<option value="66">66</option>
						<option value="67">67</option>
						<option value="68">68</option>
						<option value="69">69</option>
						<option value="70">70</option>
						<option value="71">71</option>
						<option value="72">72</option>
						<option value="73">73</option>
						<option value="74">74</option>
						<option value="75">75</option>
						<option value="76">76</option>
						<option value="77">77</option>
						<option value="78">78</option>
						<option value="79">79</option>
						<option value="80">80</option>
						<option value="81">81</option>
						<option value="82">82</option>
						<option value="83">83</option>
						<option value="84">84</option>
						<option value="85">85</option>
						<option value="86">86</option>
						<option value="87">87</option>
						<option value="88">88</option>
						<option value="89">89</option>
						<option value="90">90</option>
						<option value="91">91</option>
						<option value="92">92</option>
						<option value="93">93</option>
						<option value="94">94</option>
						<option value="95">95</option>
						<option value="96">96</option>
						<option value="97">97</option>
						<option value="98">98</option>
						<option value="99">99</option>
						<option value="100">100</option>
						<option value="101">101</option>
						<option value="102">102</option>
						<option value="103">103</option>
						<option value="104">104</option>
						<option value="105">105</option>
						<option value="106">106</option>
						<option value="107">107</option>
						<option value="108">108</option>
						<option value="109">109</option>
						<option value="110">110</option>
						<option value="111">111</option>
						<option value="112">112</option>
						<option value="113">113</option>
						<option value="114">114</option>
						<option value="115">115</option>
						<option value="116">116</option>
						<option value="117">117</option>
						<option value="118">118</option>
						<option value="119">119</option>
						<option value="120">120</option>
						<option value="121">121</option>
						<option value="122">122</option>
						<option value="123">123</option>
						<option value="124">124</option>
						<option value="125">125</option>
						<option value="126">126</option>
						<option value="127">127</option>
						<option value="128">128</option>
						<option value="129">129</option>
						<option value="130">130</option>
						<option value="131">131</option>
						<option value="132">132</option>
						<option value="133">133</option>
						<option value="134">134</option>
						<option value="135">135</option>
						<option value="136">136</option>
						<option value="137">137</option>
						<option value="138">138</option>
						<option value="139">139</option>
						<option value="140">140</option>
						<option value="141">141</option>
						<option value="142">142</option>
						<option value="143">143</option>
						<option value="144">144</option>
						<option value="145">145</option>
						<option value="146">146</option>
						<option value="147">147</option>
						<option value="148">148</option>
						<option value="149">149</option>
						<option value="150">150</option>
						<option value="151">151</option>
						<option value="152">152</option>
						<option value="153">153</option>
						<option value="154">154</option>
						<option value="155">155</option>
						<option value="156">156</option>
						<option value="157">157</option>
						<option value="158">158</option>
						<option value="159">159</option>
						<option value="160">160</option>
						<option value="161">161</option>
						<option value="162">162</option>
						<option value="163">163</option>
						<option value="164">164</option>
						<option value="165">165</option>
						<option value="166">166</option>
						<option value="167">167</option>
						<option value="168">168</option>
						<option value="169">169</option>
						<option value="170">170</option>
						<option value="171">171</option>
						<option value="172">172</option>
						<option value="173">173</option>
						<option value="174">174</option>
						<option value="175">175</option>
						<option value="176">176</option>
						<option value="177">177</option>
						<option value="178">178</option>
						<option value="179">179</option>
						<option value="180">180</option>
						</select>
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="left_axis_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  Right Range:
						  <form action="" method="post">
						<label>From:</label>
						<select class="power_range" name="right_range_from" required>
						<option selected>Select From</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						<option value="32">32</option>
						<option value="33">33</option>
						<option value="34">34</option>
						<option value="35">35</option>
						<option value="36">36</option>
						<option value="37">37</option>
						<option value="38">38</option>
						<option value="39">39</option>
						<option value="40">40</option>
						<option value="41">41</option>
						<option value="42">42</option>
						<option value="43">43</option>
						<option value="44">44</option>
						<option value="45">45</option>
						<option value="46">46</option>
						<option value="47">47</option>
						<option value="48">48</option>
						<option value="49">49</option>
						<option value="50">50</option>
						<option value="51">51</option>
						<option value="52">52</option>
						<option value="53">53</option>
						<option value="54">54</option>
						<option value="55">55</option>
						<option value="56">56</option>
						<option value="57">57</option>
						<option value="58">58</option>
						<option value="59">59</option>
						<option value="60">60</option>
						<option value="61">61</option>
						<option value="62">62</option>
						<option value="63">63</option>
						<option value="64">64</option>
						<option value="65">65</option>
						<option value="66">66</option>
						<option value="67">67</option>
						<option value="68">68</option>
						<option value="69">69</option>
						<option value="70">70</option>
						<option value="71">71</option>
						<option value="72">72</option>
						<option value="73">73</option>
						<option value="74">74</option>
						<option value="75">75</option>
						<option value="76">76</option>
						<option value="77">77</option>
						<option value="78">78</option>
						<option value="79">79</option>
						<option value="80">80</option>
						<option value="81">81</option>
						<option value="82">82</option>
						<option value="83">83</option>
						<option value="84">84</option>
						<option value="85">85</option>
						<option value="86">86</option>
						<option value="87">87</option>
						<option value="88">88</option>
						<option value="89">89</option>
						<option value="90">90</option>
						<option value="91">91</option>
						<option value="92">92</option>
						<option value="93">93</option>
						<option value="94">94</option>
						<option value="95">95</option>
						<option value="96">96</option>
						<option value="97">97</option>
						<option value="98">98</option>
						<option value="99">99</option>
						<option value="100">100</option>
						<option value="101">101</option>
						<option value="102">102</option>
						<option value="103">103</option>
						<option value="104">104</option>
						<option value="105">105</option>
						<option value="106">106</option>
						<option value="107">107</option>
						<option value="108">108</option>
						<option value="109">109</option>
						<option value="110">110</option>
						<option value="111">111</option>
						<option value="112">112</option>
						<option value="113">113</option>
						<option value="114">114</option>
						<option value="115">115</option>
						<option value="116">116</option>
						<option value="117">117</option>
						<option value="118">118</option>
						<option value="119">119</option>
						<option value="120">120</option>
						<option value="121">121</option>
						<option value="122">122</option>
						<option value="123">123</option>
						<option value="124">124</option>
						<option value="125">125</option>
						<option value="126">126</option>
						<option value="127">127</option>
						<option value="128">128</option>
						<option value="129">129</option>
						<option value="130">130</option>
						<option value="131">131</option>
						<option value="132">132</option>
						<option value="133">133</option>
						<option value="134">134</option>
						<option value="135">135</option>
						<option value="136">136</option>
						<option value="137">137</option>
						<option value="138">138</option>
						<option value="139">139</option>
						<option value="140">140</option>
						<option value="141">141</option>
						<option value="142">142</option>
						<option value="143">143</option>
						<option value="144">144</option>
						<option value="145">145</option>
						<option value="146">146</option>
						<option value="147">147</option>
						<option value="148">148</option>
						<option value="149">149</option>
						<option value="150">150</option>
						<option value="151">151</option>
						<option value="152">152</option>
						<option value="153">153</option>
						<option value="154">154</option>
						<option value="155">155</option>
						<option value="156">156</option>
						<option value="157">157</option>
						<option value="158">158</option>
						<option value="159">159</option>
						<option value="160">160</option>
						<option value="161">161</option>
						<option value="162">162</option>
						<option value="163">163</option>
						<option value="164">164</option>
						<option value="165">165</option>
						<option value="166">166</option>
						<option value="167">167</option>
						<option value="168">168</option>
						<option value="169">169</option>
						<option value="170">170</option>
						<option value="171">171</option>
						<option value="172">172</option>
						<option value="173">173</option>
						<option value="174">174</option>
						<option value="175">175</option>
						<option value="176">176</option>
						<option value="177">177</option>
						<option value="178">178</option>
						<option value="179">179</option>
						<option value="180">180</option>
						
						</select>
						
						
						<label>Till:</label>
						<select class="power_range" name="right_range_till" required>
						<option selected>Select Till</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						<option value="32">32</option>
						<option value="33">33</option>
						<option value="34">34</option>
						<option value="35">35</option>
						<option value="36">36</option>
						<option value="37">37</option>
						<option value="38">38</option>
						<option value="39">39</option>
						<option value="40">40</option>
						<option value="41">41</option>
						<option value="42">42</option>
						<option value="43">43</option>
						<option value="44">44</option>
						<option value="45">45</option>
						<option value="46">46</option>
						<option value="47">47</option>
						<option value="48">48</option>
						<option value="49">49</option>
						<option value="50">50</option>
						<option value="51">51</option>
						<option value="52">52</option>
						<option value="53">53</option>
						<option value="54">54</option>
						<option value="55">55</option>
						<option value="56">56</option>
						<option value="57">57</option>
						<option value="58">58</option>
						<option value="59">59</option>
						<option value="60">60</option>
						<option value="61">61</option>
						<option value="62">62</option>
						<option value="63">63</option>
						<option value="64">64</option>
						<option value="65">65</option>
						<option value="66">66</option>
						<option value="67">67</option>
						<option value="68">68</option>
						<option value="69">69</option>
						<option value="70">70</option>
						<option value="71">71</option>
						<option value="72">72</option>
						<option value="73">73</option>
						<option value="74">74</option>
						<option value="75">75</option>
						<option value="76">76</option>
						<option value="77">77</option>
						<option value="78">78</option>
						<option value="79">79</option>
						<option value="80">80</option>
						<option value="81">81</option>
						<option value="82">82</option>
						<option value="83">83</option>
						<option value="84">84</option>
						<option value="85">85</option>
						<option value="86">86</option>
						<option value="87">87</option>
						<option value="88">88</option>
						<option value="89">89</option>
						<option value="90">90</option>
						<option value="91">91</option>
						<option value="92">92</option>
						<option value="93">93</option>
						<option value="94">94</option>
						<option value="95">95</option>
						<option value="96">96</option>
						<option value="97">97</option>
						<option value="98">98</option>
						<option value="99">99</option>
						<option value="100">100</option>
						<option value="101">101</option>
						<option value="102">102</option>
						<option value="103">103</option>
						<option value="104">104</option>
						<option value="105">105</option>
						<option value="106">106</option>
						<option value="107">107</option>
						<option value="108">108</option>
						<option value="109">109</option>
						<option value="110">110</option>
						<option value="111">111</option>
						<option value="112">112</option>
						<option value="113">113</option>
						<option value="114">114</option>
						<option value="115">115</option>
						<option value="116">116</option>
						<option value="117">117</option>
						<option value="118">118</option>
						<option value="119">119</option>
						<option value="120">120</option>
						<option value="121">121</option>
						<option value="122">122</option>
						<option value="123">123</option>
						<option value="124">124</option>
						<option value="125">125</option>
						<option value="126">126</option>
						<option value="127">127</option>
						<option value="128">128</option>
						<option value="129">129</option>
						<option value="130">130</option>
						<option value="131">131</option>
						<option value="132">132</option>
						<option value="133">133</option>
						<option value="134">134</option>
						<option value="135">135</option>
						<option value="136">136</option>
						<option value="137">137</option>
						<option value="138">138</option>
						<option value="139">139</option>
						<option value="140">140</option>
						<option value="141">141</option>
						<option value="142">142</option>
						<option value="143">143</option>
						<option value="144">144</option>
						<option value="145">145</option>
						<option value="146">146</option>
						<option value="147">147</option>
						<option value="148">148</option>
						<option value="149">149</option>
						<option value="150">150</option>
						<option value="151">151</option>
						<option value="152">152</option>
						<option value="153">153</option>
						<option value="154">154</option>
						<option value="155">155</option>
						<option value="156">156</option>
						<option value="157">157</option>
						<option value="158">158</option>
						<option value="159">159</option>
						<option value="160">160</option>
						<option value="161">161</option>
						<option value="162">162</option>
						<option value="163">163</option>
						<option value="164">164</option>
						<option value="165">165</option>
						<option value="166">166</option>
						<option value="167">167</option>
						<option value="168">168</option>
						<option value="169">169</option>
						<option value="170">170</option>
						<option value="171">171</option>
						<option value="172">172</option>
						<option value="173">173</option>
						<option value="174">174</option>
						<option value="175">175</option>
						<option value="176">176</option>
						<option value="177">177</option>
						<option value="178">178</option>
						<option value="179">179</option>
						<option value="180">180</option>
						</select>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" name="right_axis_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					<div class="span12" style="margin-left:0px;"><hr></div>
					  
					  <div class="span6" style="margin-left:0px;">
						  <form action="" method="post">
						  <label class="control-label">Left Value :</label>
						  <div class="controls">
							<input type="text" class="span11" name="left_axis_value" placeholder="Left Value" />
						  </div>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button class="btn btn-inverse power_range_btn2" name="left_axis_btn">Add Left</button>
						  </form>
					  </div>
					  
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						  <label class="control-label">Right Value :</label>
						  <div class="controls">
							<input type="text" name="right_axis_value" class="span11" placeholder="Right Value" />
						  </div>
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button class="btn btn-inverse power_range_btn2" name="right_axis_btn">Add Right</button>
						  </form>
					  </div>
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Axis End -->

			<!-- Color Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Colours</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal6" data-toggle="modal" class="btn btn-primary power_view_btn">View Colours</a>
					<div id="myModal6" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Colours</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM colours where Side_Select='left' AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row5['Color']; ?></td>
						<td><button type="submit" name="colours_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM colours where Side_Select='right' AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td><?php echo $row7['Color']; ?></td>
						<td><button type="submit" name="colours_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						<form action="" method="post">
						<label>Add Left Color:</label>
						<select class="power_range" name="left_range_color" required>
						<option value="none" selected>Select From</option>
						<?php
						$fetch_query7 = mysqli_query($conn,"SELECT * FROM contact_lense_color where active=1");
						while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
						<option class="text-captilize" value="<?php echo $row7['name']; ?>"><?php echo $row7['name']; ?></option>
						<?php } ?>
						</select>
						
						
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="left_colours_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						<label>Add Right Color:</label>
						<select class="power_range" name="right_range_color" required>
						<option value="none" selected>Select From</option>
						<?php
						$fetch_query7 = mysqli_query($conn,"SELECT * FROM contact_lense_color where active=1");
						while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
						<option class="text-captilize" value="<?php echo $row7['name']; ?>"><?php echo $row7['name']; ?></option>
						<?php } ?>
						</select>
						
						
						
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" name="right_colours_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Color End -->
		</div>


		<!-- *************** ROW 3 ***************** -->
		<div class="row-fluid">
			
			<!-- Quantity Of Boxes Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Quantity Of Boxes</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal7" data-toggle="modal" class="btn btn-warning power_view_btn">View Quantity Of Boxes</a>
					<div id="myModal7" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Quantity Of Boxes</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style="width:50%;float:left; margin-left: 0px;">
              <thead>
				 <tr>
				 <th colspan="2">Left</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM quantity_of_boxes where Side_Select='left' AND Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td id="qty1"><?php $temp_qty = (int) $row5['Value']; ?>
					  <?php echo $temp_qty ?> (<?php echo ($temp_qty * $temp_lense_count) ?> lens)</td>
						<td><button type="submit" name="quantity_of_boxes_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			<table class="table table-bordered table-striped" style="width:50%;">
              <thead>
				  <tr>
				 <th colspan="2">Right</th>
				 </tr>
				
              </thead>
              <tbody>
                  <?php
				$fetch_query7 = mysqli_query($conn,"SELECT * FROM quantity_of_boxes where Side_Select='right' AND Product_id=$temp_product_id  AND active=1");
					while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row7['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  <td id="qty2"><?php $temp_qty = (int) $row7['Value']; ?>
					  <?php echo $temp_qty ?> (<?php echo ($temp_qty * $temp_lense_count) ?> lens)</td>
						<td><button type="submit" name="quantity_of_boxes_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
					</form>
                </tr>
				<?php } ?>
              </tbody>
            </table>
			
			
              </div>
            </div>
			
		
				<hr>
					  	  
				
					<div class="span6" style="margin-left:0px;">
						<form action="" method="post">
						<label>Add Left Qty Of Box:</label>
						<select class="power_range" name="left_range_quantity_of_box" required>
						<option selected>Select From</option>
						<option class="text-captilize" value="1"><?php echo 1; ?> (<?php echo (1 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="2"><?php echo 2; ?> (<?php echo (2 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="3"><?php echo 3; ?> (<?php echo (3 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="4"><?php echo 4; ?> (<?php echo (4 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="5"><?php echo 5; ?> (<?php echo (5 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="6"><?php echo 6; ?> (<?php echo (6 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="7"><?php echo 7; ?> (<?php echo (7 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="8"><?php echo 8; ?> (<?php echo (8 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="9"><?php echo 9; ?> (<?php echo (9 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="10"><?php echo 10; ?> (<?php echo (10 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="11"><?php echo 11; ?> (<?php echo (11 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="12"><?php echo 12; ?> (<?php echo (12 * $temp_lense_count) ?> lens)</option>
						</select>
						
						
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" id="qty_btn1" name="left_quantity_of_box_range_btn" class="btn btn-inverse power_range_btn">Add Left</button>
						</form>
					</div>
					 
					  <div class="span6" style="margin-left:6px;">
						  <form action="" method="post">
						<label>Add Right Qty Of Box:</label>
						<select class="power_range" name="right_range_quantity_of_box" required>
						<option selected>Select From</option>
						<option class="text-captilize" value="1"><?php echo 1; ?> (<?php echo (1 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="2"><?php echo 2; ?> (<?php echo (2 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="3"><?php echo 3; ?> (<?php echo (3 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="4"><?php echo 4; ?> (<?php echo (4 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="5"><?php echo 5; ?> (<?php echo (5 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="6"><?php echo 6; ?> (<?php echo (6 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="7"><?php echo 7; ?> (<?php echo (7 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="8"><?php echo 8; ?> (<?php echo (8 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="9"><?php echo 9; ?> (<?php echo (9 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="10"><?php echo 10; ?> (<?php echo (10 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="11"><?php echo 11; ?> (<?php echo (11 * $temp_lense_count) ?> lens)</option>
						<option class="text-captilize" value="12"><?php echo 12; ?> (<?php echo (12 * $temp_lense_count) ?> lens)</option>
						</select>
						
						
						
							  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
					  <button type="submit" id="qty_btn2" name="right_quantity_of_box_range_btn" class="btn btn-inverse  power_range_btn">Add Right</button>
					  </form>
						</div>
					
					
          <h6 style="visibility: hidden;">2</h6>
							
					
				  </div>
       			</div>
			</div>
			<!-- Quantity Of Boxes End -->
			
			<!-- Add Number Of Pack Start -->
			<div class="span6">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
					<h5>Add Number Of Pack Option</h5>
				  </div>
				  <div class="widget-content">
					  <a href="#myModal8" data-toggle="modal" class="btn btn-danger power_view_btn">View Number Of Packs</a>
					<div id="myModal8" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Add Number Of Pack Option</h3>
              </div>
              <div class="modal-body">
                	<table class="table table-bordered table-striped" style=" margin-left: 0px;">
              <thead>
				 <tr>
				 <th>Order No#</th>
				 <th>Name</th>
				 <th>Number Of Pack</th>
				 <th>Delete</th>
				 </tr>
              </thead>
              <tbody>
				<?php
				$fetch_query5 = mysqli_query($conn,"SELECT * FROM number_of_pack where Product_id=$temp_product_id  AND active=1");
					while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) { ?>
                <tr>
					<form action="" method="post">
					<input type="hidden" name="delete_id" value="<?php echo $row5['id']; ?>" />
					<input type="hidden" name="prod_id" value="<?php echo $row['id']; ?>" />
                  		<?php
						$temp_number_of_pack_id = $row5['NOP_Merge'];
						$fetch_query99 = mysqli_query($conn,"SELECT * FROM product where id=$temp_number_of_pack_id  AND active=1");
						while($row99=mysqli_fetch_array($fetch_query99,MYSQLI_ASSOC)) {	
						?>
						<td><?php echo $row99['order_number']; ?></td>
						<td><?php echo $row99['name']; ?></td>
						<td><?php echo $row99['product_lense_description']; ?> Lenses / box</td>
						<td><button type="submit" name="number_of_pack_delete" class="btn btn-danger btn-mini"><i class="icon-trash"></i></a></button></td>
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
						<label>Add Number Of Packs:</label>
						<select class="power_range" name="range_number_of_pack" required>
						<option selected>Select From</option>
						<?php
						$fetch_query99 = mysqli_query($conn,"SELECT * FROM product where Brands_of_Contact_lenses!=0  AND active=1");
						while($row99=mysqli_fetch_array($fetch_query99,MYSQLI_ASSOC)) {
						?>
						<option class="text-captilize" value="<?php echo $row99['id']; ?>">
						<?php echo $row99['order_number']." | ". $row99['name']." | ". $row99['product_lense_description']." Lenses / box"; ?>
						</option>
						<?php } ?>
						</select>
						
						
							<input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
							 <button type="submit" name="number_of_pack_range_btn" class="btn btn-inverse power_range_btn">Add Number Off Pack</button>
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

<!-- *************** ROW 5 ***************** -->
		<div class="row-fluid">
			
			
			<div class="span12">
				<div class="widget-box">
				  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
					<h5>Furthur Optical Advice</h5>
				  </div>
				  <div class="widget-content">
					<div class="control-group">
					  <form action="" method="post">
						<div class="controls">
						  <textarea class="textarea_editor2 span12" rows="6" name="further_optical_advice" placeholder="Enter text ...">
							<?php
							$fetch_query88 = mysqli_query($conn,"SELECT * FROM further_optical_advice where Product_id=$temp_product_id  AND active=1");
							while($row88=mysqli_fetch_array($fetch_query88,MYSQLI_ASSOC)) {	  
							echo $row88['Product_Optical_Advice'];  
							}?>
						  </textarea>
						  <input type="hidden" name="prod_id" value="<?php echo $_GET['product_id']; ?>">
						  <button type="submit" name="further_optical_advice_btn" class="btn btn-success ">Update</button>
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
