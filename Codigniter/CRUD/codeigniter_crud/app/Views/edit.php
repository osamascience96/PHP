<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - Edit</title>
    <link rel="stylesheet" href="<?=base_url()?>/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
        use Config\Services;
        $validation = Services::validation();
    ?>
    <?php
        require_once 'includes/navbar.php'
    ?>
    <div class="container">
        <h3>Edit User - <?=$user['user_id']?></h3>
        <hr>
        <form action="/edit" method="post">
            <input type="hidden" name="id" value="<?=$user['user_id']?>">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?=$user['name']?>" class="form-control">
                        <!-- Error -->
                        <?php if($validation->getError('name')){?>
                            <span class="text-danger"><?=$validation->getError('name');?></span>
                        <?php }?>
                    </div>
                </div>
                <div class="offset-md-6"></div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?=$user['email']?>" class="form-control">
                        <!-- Error -->
                        <?php if($validation->getError('email')){?>
                            <span class="text-danger"><?=$validation->getError('email');?></span>
                        <?php }?>
                    </div>
                </div>
                <div class="offset-md-6"></div>

                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?=base_url()?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="<?=base_url()?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>