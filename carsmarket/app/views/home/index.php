<!-- include the header -->
<?php require APPROOT . '/views/includes/head.php'; ?>
<!-- including the default styling -->
<link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/home.css">
</head>
<body>
<!-- include the navigation -->
<?php require APPROOT . '/views/includes/navigation.php'?>
<div class="container-fluid">
    <!-- include the table that would display the cars -->
    <div class="container">
        <div class="row">
            <?php if(!empty($data)){?>
                <?php foreach($data as $car){ ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($car->photo)?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Model: <?=$car->car_model?></h5>
                                <h6 class="card-title text-primary">Manufacturer: <?=$car->year_of_manufacturer?></h6>
                                <h6 class="card-title text-success">Price: $<?=$car->price?></h6>
                                <p class="card-text"><?=$car->details?></p>
                                <?php if($user_obj){?>
                                    <?php if($user_obj->type == "buyer"){?>
                                        <a href="<?=URLROOT?>/wallet/buy/<?=$car->id?>" class="btn btn-primary btn-block">Buy this Car</a>
                                    <?php }else{?>
                                        <a href="<?=URLROOT?>/profile/updatetype" class="btn btn-info btn-block">Switch Mode to Buy this Car</a>
                                    <?php }?>
                                <?php }else{?>
                                    <a href="<?=URLROOT?>/account/login" class="btn btn-info btn-block">Login to Buy</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php }else{ ?>
                <h1 class="mx-auto display-4 text-info">No Cars Available For Sale!</h1>
            <?php }?>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>