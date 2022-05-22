<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=SITENAME?> - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=URLROOT?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=URLROOT?>/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=URLROOT?>/public/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark" style="background-image: linear-gradient(gray, #2144);">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form id="register_form" method="POST" action="<?=URLROOT?>/home/RegisterUser">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstname" class="form-label">First name</label>
                    <input type="text" id="firstname" class="form-control" placeholder="First name" name="firstname" required="required" autofocus="autofocus">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastname" class="form-label">Last name</label>
                    <input type="text" id="lastname" class="form-control" placeholder="Last name" name="lastname">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="confirm" class="form-label">Confirm password</label>
                    <input type="password" id="confirm" class="form-control" placeholder="Confirm password" name="confirm" required="required">
                  </div>
                </div>
              </div>
            </div>
            <button id="register_btn" type="submit" class="btn btn-primary btn-block" name="register" style="background-image: linear-gradient(gray, #2144);">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?=URLROOT?>"> Login Page</a>
            <!-- <a class="d-block small" href="#">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=URLROOT?>/public/vendor/jquery/jquery.min.js" style="background-image: linear-gradient(gray, #2144);"> </script>
    <script src="<?=URLROOT?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=URLROOT?>/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Jquery Plugins -->
    <script src="<?=URLROOT?>/public/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?=URLROOT?>/public/vendor/jquery/additional-methods.min.js"></script>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/register.js"></script>

  </body>

</html>
