<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Offers | Add</title>
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
    <div id="breadcrumb"> <a href="offers.php"  class="tip-bottom"><i class="icon-home"></i> Offers</a> <a href="#" class="current">Add Offers </a> </div>
    <h1>Add Offers <?php if(isset($_GET['product'])  == "contact_lense") { echo "Contact Lense"; } else{} ?></h1>
  </div>
	<div class="container-fluid">
  <hr>
  <div class="row-fluid" >
	  <div class="span2">
		 </div>
	<div class="span8">
	<div class="widget-box" style="padding-left: 2%;">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Offer</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Name :</label>
              <div class="controls">
                <input type="text" name="name" class="span11" placeholder="Name" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Code :</label>
              <div class="controls">
                <input type="text" name="code" class="span11" placeholder="Code" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Type :</label>
              <div class="controls">
                <select name="type">
					<option value="2for1">2 for 1</option>
					<option value="Order Discpunt">Order Discount</option>
					<option value="Delivery Discount">Delivery Discount</option>
					<option value="Transition Discount">Transition Discount</option>
					<option value="Bifocal">Bifocal</option>
					<option value="Verifocal">Verifocal</option>
					<option value="Over 60's">Over 60's</option>
					<option value="UV Discount">UV Discount</option>
					<option value="Polaroid Discount">Polaroid Discount</option>
					<option value="Tint Discount">Tint Discount</option>
					<option value="AR Alize Discount">AR Alize Discount</option>
					<option value="AR Forte Discount">AR Forte Discount</option>
				</select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Minimum Order Amount</label>
              <div class="controls">
                <input type="text" name="moa" class="span11" placeholder="Minimum Order Account" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Discout Value :</label>
              <div class="controls">
                <input type="text" name="discount" class="span11" placeholder="Discount Value" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Valid From :</label>
              <div class="controls">
                <input type="date" name="vf" class="span11" placeholder="Validfrom" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Valid Till :</label>
              <div class="controls">
                <input type="date" name="vt" class="span11" placeholder="Validtill" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Description :</label>
              <div class="controls">
                <input type="text" name="description" class="span11" placeholder="Description" required/>
              </div>
            </div>
			      
            <div class="form-actions">
              <button type="submit" name="insert_offers" class="btn btn-success">Save</button>
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
