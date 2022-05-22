<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Glasses | Add</title>
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
    <div id="breadcrumb">
		<?php if($_GET['type'] == "gender") { ?>
		<a href="gender2.php" title="Gender" class="tip-bottom"><i class="icon-home"></i>Gender</a> <a href="#" class="current">Add Category </a> 
	  	<?php } else  if($_GET['type'] == "brand") {  ?>
		<a href="brand2.php" title="Brand" class="tip-bottom"><i class="icon-home"></i>Brand</a> <a href="#" class="current">Add Category </a> 
		<?php } else  if($_GET['type'] == "shape") {  ?>
		<a href="shape2.php" title="Shape" class="tip-bottom"><i class="icon-home"></i> Shape</a> <a href="#" class="current">Add Category </a> 
		<?php } else  if($_GET['type'] == "frame_color") {  ?>
		<a href="frame_color2.php" title="Frame Color" class="tip-bottom"><i class="icon-home"></i>Frame Color</a> <a href="#" class="current">Add Category </a> 
		<?php } else  if($_GET['type'] == "lens_size") {  ?>
		<a href="lens_size2.php" title="Lens Size" class="tip-bottom"><i class="icon-home"></i>Lens Size</a> <a href="#" class="current">Add Category </a> 
		<?php } else  if($_GET['type'] == "material") {  ?>
		<a href="material2.php" title="Material" class="tip-bottom"><i class="icon-home"></i> Material</a> <a href="#" class="current">Add Category </a> 
		<?php } else  if($_GET['type'] == "lens_color") {  ?>
		<a href="lens_color2.php" title="Lens Color" class="tip-bottom"><i class="icon-home"></i> Lens Color</a> <a href="#" class="current">Add Category </a> 
		<?php } else{} ?>
	  </div>
    <h1>Add Category <?php if(isset($_GET['product'])  == "contact_lense") { echo "Contact Lense"; } else{} ?></h1>
  </div>
	<div class="container-fluid">
  <hr>
		<?php if($_GET['type'] == "gender") { ?>
  <div class="row-fluid">
	<div class="span3">
	</div>
	<div class="span6">
	<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Gender</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label" style="text-align: center;">Gender Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Gender Name" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_gender" class="btn btn-success" style="float:right;">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span3">
	</div>
		</div>
	<?php } else  if($_GET['type'] == "lens_size") {  ?>
		
		<div class="row-fluid">
	<div class="span3">
	</div>
	<div class="span6">
	<div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Lens Size</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label" style="text-align: center;">Lens Size  :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Lens Size " />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_lens_size" class="btn btn-success" style="float:right;">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span3">
	</div>
</div>
	<?php } else  if($_GET['type'] == "material") {  ?>
		
		<div class="row-fluid">
	<div class="span3">
	</div>
	<div class="span6">
	<div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Material</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label" style="text-align: center;">Material Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Material Name" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_material" class="btn btn-success" style="float:right;">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span3">
	</div>
</div>
	<?php } else  if($_GET['type'] == "brand") {  ?>
		
		<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span8">
	<div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Brand</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Brand Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Brand Name" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Brand Image :</label>
              <div class="controls">
                <input type="file" name="files[]" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_brand" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span2">
	</div>
</div>
	<?php } else  if($_GET['type'] == "frame_color") {  ?>
		
		<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span8">
	<div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Frame Color</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Frame Color Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Frame Color Name" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Frame Color Image :</label>
              <div class="controls">
                <input type="file" name="files[]" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_frame_color" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span2">
	</div>
</div>
	<?php } else  if($_GET['type'] == "shape") {  ?>
		
		<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span8">
	<div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Shape</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Shape Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Shape Name" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Shape Image :</label>
              <div class="controls">
                <input type="file" name="files[]" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_shape" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span2">
	</div>
</div>
	<?php } else  if($_GET['type'] == "lens_color") {  ?>
		
		<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span8">
	<div class="widget-box" >
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Lens</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Lens Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Lens Name" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Lens Image :</label>
              <div class="controls">
                <input type="file" name="files[]" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="add_sun_lens_color" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
	</div>
	  <div class="span2">
	</div>
</div>
	<?php } ?>
	
		
		
		
		
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
