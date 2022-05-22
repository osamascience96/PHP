<?php include('Connection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Review</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Review</a></div>
	  <h1>Review</h1>
  </div>

  <div style="margin: 10px" class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Reviews</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Id</th>
                  <th>Customer Id</th>
				<th>Customer Review</th>
                  <th>Stars</th>
					<th>Approve</th>
                  <th colspan="3">Action</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              
              $con=mysqli_connect("localhost", "root", "", "feelgoodcontact");
              $query="select * from customer_review where active=1";
              $res=mysqli_query($con, $query);

              while($row=mysqli_fetch_array($res))
              {
                $id = $row['id'];
                $prodid = $row['Product_id'];
                $custid = $row['Customer_id'];
				  $custrev = $row['Customer_review'];
				   $stars = $row['stars'];
				  $approve=$row['Approve'];
                $created = $row['created_at'];
                $updated = $row['updated_at'];
                
                echo'<tr>';
                echo "<td style = 'text-align : center'>$id</td>";
                echo "<td style = 'text-align : center'>$prodid</td>";
                echo "<td style = 'text-align : center'>$custid</td>";
			  echo "<td style = 'text-align : center'>$custrev</td>";
			  echo "<td style = 'text-align : center'>$stars</td>";
				echo "<td style = 'text-align : center'>$approve</td>";
				  if($approve==1)
				  {
					  echo "<td colspan='3' style='text-align: center'><button style='margin-left:5px; padding-left: 10px; padding-right: 10px'  class='btn btn-mini btn-danger add-sglasses-action-btn' onclick=\"window.location.href='unaproved_review.php?review_id=$id'\"><i class='fa fa-close'></i> </button>";
				  }
				  else
				  {
					 echo "<td colspan='3' style='text-align: center'><button style='padding-left: 10px; padding-right: 12px' class='btn btn-mini btn-warning add-sglasses-action-btn' onclick=\"window.location.href='approved_review.php?review_id=$id'\"><i class='fa fa-check'></i> </button>";  
				  }
				  echo "<button style='margin-left:5px; padding-left: 10px; padding-right: 10px'  class='btn btn-mini btn-danger add-sglasses-action-btn' onclick=\"window.location.href='delete_review.php?delete_review_id=$id'\"><i class='icon-trash'></i></button></td>";
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
