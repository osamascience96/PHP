<!-- include the header -->
<?php require APPROOT . '/views/includes/head.php'; ?>
<!-- including the default styling -->
<link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/login.css">
</head>
<body>
<!-- include the navigation -->
<?php require APPROOT . '/views/includes/navigation.php'?>
<div class="container-fluid">
    <!-- include the table that would display the cars -->
    <div class="container">
        <!-- heading for th reigstration -->
        <h1 class="display-4 text-center">Login</h1>
        <!-- display the messages if received any -->
        <?php if(!empty($data)){ ?>
            <?php
                $code = $data[0];
                $message = $data[1];
            ?>
            <!-- if there is a success message redirect(using js) to the login and show different message-->
            <?php if($data[0] == 0){?>
                <!-- redirect to the Home page -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message Code <?=$code?>: </strong> <?=$message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function(){
                        window.location.replace("<?=URLROOT?>");
                    });
                </script>
            <?php }else{?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message Code <?=$code?>: </strong> <?=$message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>
        <?php }?>
        <form action="<?=URLROOT?>/account/login_user" method="POST">
            <div class="form-grouo">
                <label for="email">Enter Your Email Address</label>
                <input type="email" placeholder="example@domain.com" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-grouo">
                <label for="password">Enter Your Password</label>
                <input type="password" placeholder="Your Password" class="form-control" id="password" name="password" required>
            </div>
            <br />
            <div class="form-group">
                <input type="submit" class="btn btn-outline-info btn-block" value="Login">
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>