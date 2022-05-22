<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sunglasses</title>
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Sunglasses</a> </div>
    <h1>Sunglasses</h1>
  </div>
  <div class="container-fluid">
    <hr>
	<div class="row-fluid">
		 <div class="span12">
			 <ul class="quick-actions">
              <li class="bg_lb"> <a href="gender2.php"> <i class="icon-book"></i> Gender </a> </li>
              <li class="bg_lg"> <a href="brand2.php"> <i class="icon-tasks"></i> Brand</a> </li>
              <li class="bg_ly"> <a href="shape2.php"> <i class="icon-calendar"></i> Shape </a> </li>
              <li class="bg_lo"> <a href="frame_color2.php"> <i class="icon-user"></i> Frame Color</a> </li>
			  <li class="bg_lb"> <a href="lens_color2.php"> <i class="icon-user"></i> Lens Color</a> </li>
			  <li class="bg_lg"> <a href="lens_size2.php"> <i class="icon-eye-open"></i> Lens Size</a> </li>
			  <li class="bg_lg"> <a href="material2.php"> <i class="icon-eye-open"></i> Material</a> </li>
            </ul>
		</div>
	</div>
	  <hr>
	  <div class="row-fluid">
		 <div class="span6">
			  <button onClick="window.location.href='product_add5.php?product=contact_lense'" class="btn btn-success add-sglasses-btn"><i class="icon-plus"></i> Add Sunglasses</button><br><br>
		</div>
		  
		  <div class="span6">
			  <form action="" method="post">
			  <button name="search_btn5" type="submit" class="btn btn-success search-sglasses-btn">Search</button>
			 <input type="text" name="search_text"  class="contact_lense_search" placeholder="Order No, Name" />
			  </form>
		</div>
	  </div>
    <div class="row-fluid">
		 
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> 
			 
              
          </div>
			
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Stock NO #</th>
                  <th>Name</th>
                  <th>Brand</th>
                  <th>Gender</th>
				  <th>Shape</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
				 <?php
				if (isset($_GET['pageno'])) {
					$pageno = $_GET['pageno'];
				} else {
					$pageno = 1;
				}
	//2
				$no_of_records_per_page = 20;
				$offset = ($pageno-1) * $no_of_records_per_page; 
	//3
				$total_pages_sql = "SELECT COUNT(*) FROM product where Brand!=0 AND Lens_Colour!=0";
			$result = mysqli_query($conn,$total_pages_sql);
			$total_rows = mysqli_fetch_array($result)[0];
			$total_pages = ceil($total_rows / $no_of_records_per_page);
	
				if(isset($_GET['search'])) {
				$my_search = $_GET['search'];
				$fetch_query = mysqli_query($conn,"SELECT * FROM product  where name LIKE '%$my_search%' OR order_number LIKE '%$my_search%' AND Brand!=0 AND Lens_Colour!=0 AND active=1");
				}
				else {
				$fetch_query = mysqli_query($conn,"SELECT * FROM product where Brand!=0 AND Lens_Colour!=0 AND active=1 LIMIT $offset, $no_of_records_per_page");
				}
				while($row=mysqli_fetch_array($fetch_query,MYSQLI_ASSOC)) {

					?>
                <tr class="odd gradeX">
                  <td><?php echo $row['order_number']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php
					$temp_brand_id = $row['Brand'];
					$fetch_query1 = mysqli_query($conn,"SELECT * FROM brand where id=$temp_brand_id AND Type='Sunglasses' AND active=1");
					while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
						echo $row1['Brand'];
					}
				  ?></td>
                  <td class="center"> <?php
					$temp_brand_id = $row['Gender'];
					$fetch_query1 = mysqli_query($conn,"SELECT * FROM gender where id=$temp_brand_id AND Type='Sunglasses' AND active=1");
					while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
						echo $row1['Gender'];
					}
				  ?></td>
				  <td class="center"> <?php
					$temp_brand_id = $row['Shape'];
					$fetch_query1 = mysqli_query($conn,"SELECT * FROM shape where id=$temp_brand_id AND Type='Sunglasses' AND active=1");
					while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
						echo $row1['Shape'];
					}
				  ?></td>
                  <td class="center">
					  <center>
					<button class="btn btn-mini btn-warning add-sglasses-action-btn" onclick="window.location.href='product_edit5.php?product_id=<?php echo $row['id']; ?>'">&nbsp;&nbsp;<i class="icon-pencil"></i> &nbsp;</button>
					<button class="btn btn-mini btn-success add-sglasses-action-btn" onclick="window.location.href='product_view5.php?product_id=<?php echo $row['id']; ?>'">&nbsp;&nbsp;<i class="icon-eye-open"></i> &nbsp;</button>
					<button class="btn btn-mini btn-danger add-sglasses-action-btn" onclick="window.location.href='sunglasses.php?delete_sunglasses_product=<?php echo $row['id']; ?>'">&nbsp;&nbsp;<i class="icon-trash"></i> &nbsp;</button>
						  </center>
				  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
			  <!--<ul class="pagination">
					<li><a href="?pageno=1">First</a></li>
					<li class="<?php //if($pageno <= 1){ echo 'disabled'; } ?>">
						<a href="<?php //if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
					</li>
					<li class="<?php //if($pageno >= $total_pages){ echo 'disabled'; } ?>">
						<a href="<?php //if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
					</li>
					<!--<li><a href="?pageno=<?php //echo $total_pages; ?>">Last</a></li>
				</ul>-->
			  <?php if(isset($_GET['search'])) {} else { ?> 
			  <div class="pagination">
              <ul>
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>"><a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" >Prev</a></li>
				<?php for($t=1;$t<=$total_pages;$t++) {
				if($t == $pageno) {
				?>
                <li class="active"> <a href="?pageno=<?php echo $t; ?>"><?php echo $t; ?></a> </li>
				<?php
				} else { ?>
				<li class=""> <a href="?pageno=<?php echo $t; ?>"><?php echo $t; ?></a> </li>
					<?php
					}
				} ?>
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
              </ul>
            </div>
			  <?php } ?>
          </div>
        </div>
        
       
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
