<!-- include the header -->
<?php require APPROOT . '/views/includes/head.php'; ?>
<!-- including the default styling -->
<link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/myprofile.css">
</head>
<body>
<!-- include the navigation -->
<?php require APPROOT . '/views/includes/navigation.php'?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1 class="display-4">Profile</h1>
        </div>
        <div class="row">
            <div class="col-5">
                <h1 class="text-primary"><?=$user_obj->name?></h1>
                <h4 class="text-info"><?=$user_obj->email?></h4>
                <h5 class="text-warning"><?=$user_obj->address?></h5>    
            </div>
            <div class="col-7">
                <h1 class="text-dark text-right">My Wallet Amount: <span class="text-info">$<?=$user_obj->wallet_amount?></span></h1>
            </div>
        </div>
        <hr class="text-dark">
        <h1 class="display-4 text-primary text-center">Add Money to Wallet</h1>
        <div class="row">
            <?php if(isset($data['message'])){?>
                <?php if($data['message'][0] == 1){?>
                    <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert">
                        <strong>Error!</strong> <?=$data['message'][1]?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }else if($data['message'][0] == 0){?>
                    <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                        <strong>Success!</strong> <?=$data['message'][1]?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }?>
            <?php }?>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="<?=URLROOT?>/profile/addamount" method="POST">
                    <div class="form-group">
                        <input type="number" class="form-control" name="amount" placeholder="Enter Amount" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="creditcard" placeholder="Enter your Credit Card Number" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="cvv" placeholder="Enter CVV" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary btn-block" value="Add to Wallet" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>