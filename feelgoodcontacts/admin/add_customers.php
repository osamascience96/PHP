<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Customers | Add</title>
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
<div id="content" >
	<div id="content-header">
    <div id="breadcrumb"> <a href="customers.php"  class="tip-bottom"><i class="icon-home"></i> Customers</a> <a href="#" class="current">Add Customers </a> </div>
    <h1>Add customer <?php if(isset($_GET['product'])  == "contact_lense") { echo "Contact Lense"; } else{} ?></h1>
  </div>
	<div class="container-fluid" >
  <hr>
  <div class="row-fluid">
	 <div class="span2">
		 </div>
	<div class="span8">
	<div class="widget-box" style="padding-left: 2%;">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Customer</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> First Name :</label>
              <div class="controls">
                <input type="text" name="firstname" class="span11" placeholder="First Name" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Last Name :</label>
              <div class="controls">
                <input type="text" name="lastname" class="span11" placeholder="Last Name" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Email</label>
              <div class="controls">
                <input type="text" name="email" class="span11" placeholder="Email" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Password</label>
              <div class="controls">
                <input type="password" name="password" class="span11" placeholder="password" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span>Country</label>
              <div class="controls">
                <input type="text" name="country" class="span11" placeholder="country" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Address1 :</label>
              <div class="controls">
                <input type="text" name="address1" class="span11" placeholder="Address1" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Address2 :</label>
              <div class="controls">
                <input type="text" name="address2" class="span11" placeholder="Address2" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> City Town :</label>
              <div class="controls">
                <input type="text" name="citytown" class="span11" placeholder="citytown" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Country State :</label>
              <div class="controls">
                <input type="text" name="countrystate" class="span11" placeholder="country State" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Phone :</label>
              <div class="controls">
                <input type="text" name="phone" class="span11" placeholder="phone" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Presciption :</label>
              <div class="controls">
                <input type="file" name="files[]" required/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="insert_customer" class="btn btn-success">Save</button>
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
