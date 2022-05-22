<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Offers</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header"><br>
	<h2 style="color:#fff;font-size: 32px;margin-left: 0.7%;margin-top:-0.3%;">LENSES HUB</h2>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <!--<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>-->
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li><!--
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
    </li>-->
    <!--<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>-->
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch--
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php include 'dashboard_aside.php' ?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Offers</a></div>
	  <h1>Offers</h1>
  </div>
<div class="container-fluid">
<hr>
	  <div class="row-fluid">
		 <div class="span6">
			  <button onClick="window.location.href='add_offers.php'" class="btn btn-success add-sglasses-btn"><i class="icon-plus"></i> Add Offers</button><br><br>
		</div>
		  
		  <div class="span6">
			  <br>
		</div>
	  </div>	

  <div class="widget-box">
          
	  		
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Code</th>
				 <th>Type</th>
				 <th>Minimum Order Count</th>
				 <th>Discount value</th>
				 <th>Valid from</th>
				 <th>Valid till</th>
				 <th>description</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                  <th colspan="3">Action</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              
              $con=mysqli_connect("localhost", "root", "", "feelgoodcontact");
              $query="select * from offer where active=1";
              $res=mysqli_query($con, $query);

              while($row=mysqli_fetch_array($res))
              {
                $id = $row['id'];
                $name = $row['name'];
                $code = $row['code'];
				  $type = $row['type'];
                $minimum_order_count = $row['minimum_order_amount'];
                $discount_value = $row['discount_value'];
				  $validfrom = $row['valid_from'];
                $validupto = $row['valid_upto'];
				  $active=1;
				  $descript = $row['description'];
                $created = $row['created_at'];
                $updated = $row['updated_at'];
                
                echo'<tr>';
                echo "<td style = 'text-align : center'>$id</td>";
                echo "<td style = 'text-align : center'>$name</td>";
                echo "<td style = 'text-align : center'>$code</td>";
				  echo "<td style = 'text-align : center'>$type</td>";
                echo "<td style = 'text-align : center'>$minimum_order_count</td>";
                echo "<td style = 'text-align : center'>$discount_value</td>";
				  echo "<td style = 'text-align : center'>$validfrom</td>";
                echo "<td style = 'text-align : center'>$validupto</td>";
				  echo "<td style = 'text-align : center'>$descript</td>";
                echo "<td style = 'text-align : center'>$created</td>";
                echo "<td style = 'text-align : center'>$updated</td>";
                echo "<td colspan='3' style='text-align: center'><button style='padding-left: 8px; padding-right: 10px' class='btn btn-mini btn-warning add-sglasses-action-btn' onclick=\"window.location.href='update_offers.php?offers_id=$id'\"><i class='icon-pencil'></i> </button>";
			  echo "<button style='margin-left:5px; padding-left: 10px; padding-right: 2px'  class='btn btn-mini btn-danger add-sglasses-action-btn' onclick=\"window.location.href='delete_offers.php?delete_offers_id=$id'\"><i class='icon-trash'></i> &nbsp;</button></td>";
                
                echo '</tr>';
              }
              
              ?>
              </tbody>
            </table>
          </div>
        </div>
    
    
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
