<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - Home</title>
    <link rel="stylesheet" href="<?=base_url()?>/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once 'includes/navbar.php'
    ?>
    <div class="container">
        <h3>View Users</h3>
        <hr>
        <?php if(!empty($users)){?>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-stripped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($users as $user) {?>
                        <tr>
                            <td><?=$user['user_id']?></td>
                            <td><?=$user['name']?></td>
                            <td><?=$user['email']?></td>
                            <td>
                                <a href="/edit?id=<?=$user['user_id']?>" class="btn btn-primary">Edit</a>
                                <a href="/delete?id=<?=$user['user_id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <?php }else{?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>No Data!</strong> Please Create the Data.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php }?>
    </div>
    <script src="<?=base_url()?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>