<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=URLROOT?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
        $session_helper = new SessionHelper();
        $user_obj = $session_helper->is_session_exists('user_object') == true ? $session_helper->get_session_value('user_object') : "";
      ?>
      <li class="nav-item active">
        <?php if($user_obj){?>
          <?php
            // select the user type 
            $user_type = $user_obj->type;
          ?>
          <?php if($user_type == "buyer"){?>
            <a class="nav-link text-primary" href="<?=URLROOT?>/profile/updatetype">Switch to Seller <span class="sr-only">(current)</span></a>  
          <?php }else{?>
            <a class="nav-link text-info" href="<?=URLROOT?>/profile/updatetype">Switch to Buyer <span class="sr-only">(current)</span></a>
          <?php }?>
        <?php }else{?>
          <a class="nav-link" href="<?=URLROOT?>/account/register">Register <span class="sr-only">(current)</span></a>
        <?php }?>
      </li>
      <?php if($user_obj){?>
        <li class="nav-item">
          <a href="<?=URLROOT?>/profile/myprofile" class="nav-link text-dark">Profile </a>
        </li>
      <?php }?>
      <?php if($user_obj){?>
        <li class="nav-item">
          <a href="<?=URLROOT?>/wallet/mywallet" class="nav-link text-success">Wallet: $<?=$user_obj->wallet_amount?> </a>
        </li>
      <?php }?>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <?php if($user_obj){?>
        <a class="btn btn-outline-danger my-2 my-sm-0" href="<?=URLROOT?>/account/logout">Logout</a>
      <?php }else{?>
        <a class="btn btn-outline-primary my-2 my-sm-0" href="<?=URLROOT?>/account/login">Login</a>
      <?php }?>
    </div>
  </div>
</nav>