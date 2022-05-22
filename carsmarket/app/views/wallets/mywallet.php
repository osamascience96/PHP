<!-- include the header -->
<?php require APPROOT . '/views/includes/head.php'; ?>
<!-- including the default styling -->
<link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/mywallet.css">
</head>
<body>
<!-- include the navigation -->
<?php require APPROOT . '/views/includes/navigation.php'?>
<div class="container-fluid">
    <div class="container">
        <div class="row d-flex justify-content-end">
            <h1 class="display-4"><i class="fa fa-money" aria-hidden="true"></i> $<?=$user_obj->wallet_amount?></h1>
        </div>
        <?php if(isset($data['message'])){?>
            <div class="row">
                <?php if($data['message'][0] == 1){?>
                    <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert">
                        <strong>Error!</strong> <?=$data['message'][1]?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }else{?>
                    <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                        <strong>Success!</strong> <?=$data['message'][1]?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <h1 class="display-4 text-center"><?= $user_obj->type == "buyer" ? "Cars Bought" : "Cars Sold"?></h1>
        <div class="row">
            <?php if(!empty($data['carlist'])){?>
                <?php foreach($data['carlist'] as $car){?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img id="carimg" src="data:image/jpg;charset=utf8;base64,<?=base64_encode($car->photo)?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="text-primary">Model: <?=$car->car_model?></h4>
                                <h5 class="text-info">Year Manufacture: <?=$car->year_of_manufacturer?></h5>
                                <h5 class="text-dark">Price: <?=$car->price?></h5>
                                <p class="card-text"><?=$car->details?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php }else{?>
                <h1 class="text-danger mx-auto">No Cars Found!</h1>
            <?php }?>
        </div>
        <?php if($user_obj->type == "seller"){?>
            <hr>
            <h1 class="display-3 text-center text-primary">Post a Car Ad</h1>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="<?=URLROOT?>/wallet/add_car" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="model" placeholder="Car Model" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="year_manufacture" placeholder="Year of Manufacture" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="price" placeholder="Car Price" required>
                        </div>
                        <div class="form-group">
                            <textarea name="details" cols="30" rows="10" class="form-control" placeholder="Car Details" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="car_image_label">Upload Image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="car_image" name="car_image" aria-describedby="car_image_label">
                                <label class="custom-file-label" for="car_image">Choose Your Car Image</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" value="Post Ad" required>
                        </div>
                    </form>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>