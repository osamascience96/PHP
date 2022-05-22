<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=SITENAME?> - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=URLROOT?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=URLROOT?>/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=URLROOT?>/public/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark" style="background-image: linear-gradient(black, #014923);">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"> <h4> Login </h4> </div>
        <div class="card-body" style="">

          <?php if(isset($_GET['error'])){?>
            <?php $message = $_GET['error']; ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Message!</strong> <?=$message?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }?>

          <form id="login_form" method="POST" action="<?=URLROOT?>/home/login">
            <div class="form-group">
              <label for="inputEmail" class="form-label">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="<?=isset($_COOKIE['user_email_crm']) ? $_COOKIE['user_email_crm'] : "" ?>" required="required" autofocus="autofocus">
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" value="<?=isset($_COOKIE['user_password_crm']) ? $_COOKIE['user_password_crm'] : "" ?>" required="required">
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember_me" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-image: linear-gradient(black, #014923);" id="login">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?=URLROOT?>/Home/register">Register an Account</a>
            <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=URLROOT?>/public/vendor/jquery/jquery.min.js"></script>
    <script src="<?=URLROOT?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=URLROOT?>/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Jquery Plugins -->
    <script src="<?=URLROOT?>/public/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?=URLROOT?>/public/vendor/jquery/additional-methods.min.js"></script>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/login.js"></script>

  </body>

</html>
