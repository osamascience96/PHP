<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Lenses | Add</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
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
    <div id="breadcrumb"> <a href="contact_lenses.php" title="Go to Contact Lenses" class="tip-bottom"><i class="icon-home"></i> Contact Lenses</a> <a href="#" class="current">Add Product </a> </div>
    <h1>Add Product <?php if(isset($_GET['product'])  == "contact_lense") { echo "Contact Lense"; } else{} ?></h1>
  </div>
	<div class="container-fluid">
  <hr>
  <div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span8">
	<div class="widget-box" style="padding-left: 2%;">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Product</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Product Name" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Price :</label>
              <div class="controls">
                <input type="text" name="price" class="span11" placeholder="Price" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sale Price :</label>
              <div class="controls">
                <input type="text" name="sale_price" class="span11" placeholder="Sale Price"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Quantity :</label>
              <div class="controls">
                <input type="text" name="quantity" class="span11" placeholder="Quantity" required/>
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Power Range :</label>
              <div class="controls">
                <input type="text" name="power_range" class="span11" placeholder="6.00 to -12.00" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Base Curve :</label>
              <div class="controls">
                <input type="text" name="base_curve" class="span11" placeholder="8.6mm to 9.0mm" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Diameter :</label>
              <div class="controls">
                <input type="text" name="diameter" class="span11" placeholder="13.6mm to 15.2mm" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Lens Material :</label>
              <div class="controls">
                <input type="text" name="lens_material" class="span11" placeholder="Delefilcon A" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Water Content :</label>
              <div class="controls">
                <input type="text" name="water_content"  class="span11" placeholder="59%" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Oxygen Permeability :</label>
              <div class="controls">
                <input type="text" name="oxygen_permeability" class="span11" placeholder="156 Dk/t" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Product Qty :</label>
              <div class="controls">
                <input type="text" name="product_qty_description" class="span11" placeholder="30 Lenses / Box" required/>
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Product Lense Description :</label>
              <div class="controls">
                <input type="text" name="product_lense_description" class="span11" placeholder="30" required/>
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">Brands Of Contact Lenses :</label>
              <div class="controls">
				<select name="brands_of_contact_lense">
				<option value="None"><span class="col-red">*</span> Select Brand</option>
				<?php
				$fetch_query1 = mysqli_query($conn,"SELECT * FROM brands_of_contact_lenses where active=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row1['id']; ?>"><?php echo $row1['Brands_Name']; ?></option>
				<?php } ?>
				</select>
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Types Of Contact Lenses :</label>
              <div class="controls">
                <select name="types_of_contact_lense">
				<option value="None">Select Type</option>
				<?php
				$fetch_query1 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses where active=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row1['id']; ?>"><?php echo $row1['Contact_Lense_Type']; ?></option>
				<?php } ?>
				</select>
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Shop By Manufacturer :</label>
              <div class="controls">
                <select name="shop_by_manufacturer">
				<option value="None">Select Manufacturer</option>
				<?php
				$fetch_query1 = mysqli_query($conn,"SELECT * FROM shop_by_manufacturer where active=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row1['id']; ?>"><?php echo $row1['Manufacturer_Name']; ?></option>
				<?php } ?>
				</select>
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Optician Brands :</label>
              <div class="controls">
                <select name="optician_brands">
				<option value="None">Select Optician Brand</option>
				<?php
				$fetch_query1 = mysqli_query($conn,"SELECT * FROM optician_brands where active=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) { ?>
				  <option value="<?php echo $row1['id']; ?>"><?php echo $row1['Optician_Brands']; ?></option>
				<?php } ?>
				</select>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label">Product Image :</label>
              <div class="controls">
                <input type="file" name="files[]" required/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="insert_contact_lense" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span2">
	</div>
		</div>
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
</body>
</html>
