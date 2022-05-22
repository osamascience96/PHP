

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient(pink,#2144);">
        <li class="nav-item">
          <a class="nav-link" href="<?=URLROOT?>">
            <i class="fas fa-fw fa-home"></i>
            <span>HOMEPAGE</span>
          </a>
        </li>
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-cloud"></i>
            <span>SERVICES</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item " href="urns.php">URNS</a> 
            <a class="dropdown-item " href="caskets.php">CASKETS</a>
            <a class="dropdown-item " href="vehicles.php">VEHICLES</a>
          </div>
        </li>-->
        

        <?php 
          $sessionHelper = new SessionHelper(); 
          
          $is_sub_user = $sessionHelper->get_session_value('is_sub_user');
          $userroles = $sessionHelper->is_session_exists('userroles') ? $sessionHelper->get_session_value('userroles') : array();
        ?>

        <?php if(!$is_sub_user || count(array_intersect(array(1, 3, 4, 5, 13), $userroles)) > 0){?>
          <li class="nav-item">
            <a class="nav-link" href="<?=URLROOT?>/Company">
              <i class="fa fa-building"></i>
              <span>Companies</span></a>
          </li>
        <?php }?>
        
        <?php if(!$is_sub_user || count(array_intersect(array(7, 8, 9, 15), $userroles)) > 0){?>
          <li class="nav-item">
            <a class="nav-link" href="<?=URLROOT?>/Employee">
              <i class="fa fa-users"></i>
              <span>Employees</span></a>
          </li>
        <?php }?>

        <?php if(!$is_sub_user || count(array_intersect(array(17, 18, 19, 20), $userroles)) > 0){?>
          <li class="nav-item">
            <a class="nav-link" href="<?=URLROOT?>/Client">
              <i class="fa fa-user"></i>
              <span>Clients</span></a>
          </li>
        <?php }?>

        <?php if(!$is_sub_user || count(array_intersect(array(6, 5, 14), $userroles)) > 0){?>
          <li class="nav-item">
            <a class="nav-link" href="<?=URLROOT?>/Branch">
              <i class="fa fa-briefcase"></i>
              <span>Offices</span></a>
          </li>
        <?php }?>

        <?php if(!$is_sub_user || count(array_intersect(array(10, 11, 12, 16), $userroles)) > 0){?>
          <li class="nav-item">
            <a class="nav-link" href="<?=URLROOT?>/Shipment">
              <i class="fa fa-truck"></i>
              <span>Shipments</span></a>
          </li>
        <?php }?>
        
        <?php if(!$is_sub_user){?>
          <li class="nav-item">
            <a class="nav-link" href="<?=URLROOT?>/Role">
              <i class="fas fa-user-tag"></i>
              <span>Roles</span></a>
          </li>
        <?php }?>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">