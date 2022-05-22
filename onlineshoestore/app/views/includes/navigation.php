<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?=URLROOT?>"><img src="<?=URLROOT?>/public/img/navbaricon.png" width="30" height="30"> Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=URLROOT?>/product">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=URLROOT?>/home/registeration">Registration</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <?php
        $session_helper_obj = new SessionHelper();
        // check if the session object is set
        $is_login = (bool) isset($_SESSION['login_session']) ? $session_helper_obj->get_session_value('login_session') : false;
      ?>
        <a class="btn btn-outline-primary my-2 my-sm-0" style="margin-right:10px;" href="<?=$is_login == true ? URLROOT . '/product/GetAllCartOrders' : ''?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span id="shop_count" class="text-white">0</span></a>
      <?php
        if($is_login === true){
      ?>
        <a class="btn btn-outline-danger my-2 my-sm-0" href="<?=URLROOT?>/home/logout">Logout</a>
      <?php }else{?>
        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#login_modal">Login</button>
      <?php }?>
    </div>
  </div>
</nav>