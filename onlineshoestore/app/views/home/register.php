<?php
    require APPROOT . '/views/includes/header.php';
?>
    <link rel="stylesheet" href="<?=URLROOT?>/public/css/register.css">
    <title>Register</title>
  </head>
  <body>
    <?php require APPROOT . '/views/includes/navigation.php'?>
    <div class="registerdiv container">
        <h4 class="card-title mt-3 text-center">Create Account</h4>
        <p class="text-center">Get started with your account</p>
            <form action="#" method="post">
            <div id="alert-placeholder"></div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="fullname" id="fullname" class="form-control" placeholder="Full name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="username" id="username" class="form-control" placeholder="Username" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" id="email" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" id="password_register" placeholder="Create password" type="password">
            </div> <!-- form-group// -->                                  
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" onclick="event.preventDefault(); register();"> Create Account  </button>
            </div> <!-- form-group// -->      
        </form>
    </div>
    <?php require APPROOT . '/views/includes/footer.php'?>
    <?php require APPROOT . '/views/includes/bootstrap.php'?>
  </body>
  <?php require APPROOT . '/views/modal/login.php'?>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/config.js"></script>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/home.js"></script>
</html>