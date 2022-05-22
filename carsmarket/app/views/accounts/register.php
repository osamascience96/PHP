<!-- include the header -->
<?php require APPROOT . '/views/includes/head.php'; ?>
<!-- including the default styling -->
<link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/register.css">
</head>
<body>
<!-- include the navigation -->
<?php require APPROOT . '/views/includes/navigation.php'?>
<div class="container-fluid">
    <!-- include the table that would display the cars -->
    <div class="container">
        <!-- heading for th reigstration -->
        <h1 class="display-4 text-center">Registration</h1>
        <!-- display the messages if received any -->
        <?php if(!empty($data)){ ?>
            <?php
                $code = $data[0];
                $message = $data[1];
            ?>

            <!-- if there is a success message redirect(using js) to the login and show different message-->
            <?php if($data[0] == 0){?>
                <!-- redirect to the login -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message Code <?=$code?>: </strong> <?=$message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function(){
                        window.location.replace("<?=URLROOT?>/account/login");
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
        <form action="<?=URLROOT?>/account/register_user" method="POST">
            <div class="form-group">
                <label for="user_fullname">Enter Full Name</label>
                <input type="text" placeholder="Your Name" class="form-control" id="user_fullname" name="user_fullname" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="user_type">Select Your Type</label>
                </div>
                <select class="custom-select" id="user_type" name="user_type">
                    <option value="buyer">Buyer</option>
                    <option value="seller">Seller</option>
                </select>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-grouo">
                        <label for="email_address">Enter Your Email Address</label>
                        <input type="email" placeholder="example@domain.com" class="form-control" id="email_address" name="email_address" required>
                        <small id="emailHelp" class="form-text form-muted">We'll need your email address for certain formalities</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-grouo">
                        <label for="password">Enter Your Password</label>
                        <input type="password" placeholder="Your Password" class="form-control" id="password" name="password" required>
                        <small id="emailHelp" class="form-text form-muted">Don't worry your password is secure with us.</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Enter Your Address</label>
                <textarea name="address" class="form-control" placeholder="Your Home Address" id="address" cols="2" rows="2" required></textarea>
                <small id="addressHelp" class="form-text form-muted">We require your address for the delievery of your car, and if you are the seller don't worry your data is safe with us.</small>
            </div>
            <input type="submit" class="btn btn-outline-primary btn-block" value="Sign Up">
        </form>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>