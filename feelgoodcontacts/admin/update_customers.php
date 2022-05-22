<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Customers | Edit</title>
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
    <div id="breadcrumb"> <a href="customers.php" class="tip-bottom"><i class="icon-home"></i> Customers</a> <a href="#" class="current">Update Customers </a> </div>
    <h1>Update Customers <?php if(isset($_GET['product'])  == "contact_lense") { echo "Contact Lense"; } else{} ?></h1>
  </div>
	<div class="container-fluid">
  <hr>
  <div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span8">
		<?php
		$temp_id = $_GET['customer_id'];
		$_SESSION['upd_id']=$temp_id;
		$fetch_query = mysqli_query($conn,"SELECT * FROM customers where id=$temp_id AND active=1");
				while($rowe=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) { ?>
	<div class="widget-box" style="padding-left: 0%;">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Customers</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> First Name :</label>
              <div class="controls">
                <input type="text" name="firstname" class="span11" placeholder="First Name" value="<?php echo $rowe['first_name']; ?>" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Last Name :</label>
              <div class="controls">
                <input type="text" name="lastname" class="span11" placeholder="Last Name" value="<?php echo $rowe['last_name']; ?>" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Email</label>
              <div class="controls">
                <input type="text" name="email" class="span11" placeholder="Email" value="<?php echo $rowe['email']; ?>" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Password</label>
              <div class="controls">
                <input type="password" name="password" class="span11" placeholder="password" value="<?php echo $rowe['password']; ?>" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span>Country</label>
              <div class="controls">
                <input type="text" name="country" class="span11" placeholder="country" value="<?php echo $rowe['country']; ?>" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Address1 :</label>
              <div class="controls">
                <input type="text" name="address1" class="span11" placeholder="Address1" value="<?php echo $rowe['address1']; ?>" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Address2 :</label>
              <div class="controls">
                <input type="text" name="address2" class="span11" placeholder="Address2" value="<?php echo $rowe['address2']; ?>" required/>
              </div>
            </div>
			  <div class="control-group">
              <label class="control-label"><span class="col-red">*</span> City Town :</label>
              <div class="controls">
                <input type="text" name="citytown" class="span11" placeholder="citytown" value="<?php echo $rowe['city_town']; ?>" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Country State :</label>
              <div class="controls">
                <input type="text" name="countrystate" class="span11" placeholder="country State" value="<?php echo $rowe['country_state']; ?>" required/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"><span class="col-red">*</span> Phone :</label>
              <div class="controls">
                <input type="text" name="phone" class="span11" placeholder="phone" value="<?php echo $rowe['phone']; ?>" required/>
              </div>
            </div>
			<div class="control-group" id="image_edit">
              <label class="control-label">Presciption :</label>
			  <img src="../images/Reglaze/<?php echo $row['presciption']; ?>" width="200px" height="150px" />
              <div class="controls" >
                <input type="file" name="files[]" />
				<input type="hidden" name="presciption_delete_name" value="<?php echo $row['presciption']; ?>"/>
				<input type="hidden" name="customer_id" value="<?php echo $temp_id; ?>"/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="update_customer" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
		<?php } ?>
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

<script>

$('#img_checkbox').change(function(){
    $('#image_edit').toggleClass('d-none');
});
</script>
</body>
</html>
