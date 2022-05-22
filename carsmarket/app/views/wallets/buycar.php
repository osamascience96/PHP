<!-- include the header -->
<?php require APPROOT . '/views/includes/head.php'; ?>
<!-- including the default styling -->
<link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/buycar.css">
</head>
<body>
<!-- include the navigation -->
<?php require APPROOT . '/views/includes/navigation.php'?>
<div class="container-fluid">
    <div id="main" class="container">
        <div class="row d-flex justify-content-end">
            <h1 class="display-4"><i class="fa fa-money" aria-hidden="true"></i> $<?=$user_obj->wallet_amount?></h1>
        </div>
        <div id="submaincontainer" class="row">
            <div class="col-md-5">
                <img id="carimg" src="data:image/jpg;charset=utf8;base64,<?=base64_encode($data->carphoto)?>" class="card-img-top" alt="">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <h4 class="text-primary">Model: <?=$data->carmodel?></h4>
                </div>
                <div class="row">
                    <h4 class="text-info">Price: $<?=$data->carprice?></h4>
                </div>
                <div class="row">
                    <h4 class="text-success">Seller Name: <?=$data->sellername?></h4>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <a href="<?=URLROOT?>/wallet/buycar/<?=$data->carid?>" class="btn btn-outline-success btn-block">Confirm your Payment</a>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>