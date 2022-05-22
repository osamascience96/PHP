<?php
    require APPROOT . '/views/includes/header.php';
?>
    <link rel="stylesheet" href="<?=URLROOT?>/public/css/checkout.css">
    <title>Products</title>
  </head>
  <body>
    <?php require APPROOT . '/views/includes/navigation.php'?>
    <div class="container">
        <table class="table table-responsive-sm">
            <caption>List of Orders</caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalPrice = 0;?>
                <?php for($i=0; $i < count($data); $i++){?>
                    <tr>
                        <th scope="row"><?=$data[$i]->name?></th>
                        <td>$<?=$data[$i]->price?></td>
                        <td><img src="<?='data:image/jpeg;base64,'.base64_encode($data[$i]->image)?>" width="100"></td>
                        <?php $totalPrice += $data[$i]->price?>
                    </tr>
                <?php }?>
            </tbody>
        </table>
        <h3 class="text-center">Total Price: $<?=$totalPrice?></h3>
        <button class="btn btn-outline-warning btn-block" onclick="checkout()">Checkout</button>
    </div>
    <?php require APPROOT . '/views/includes/bootstrap.php'?>
    <?php require APPROOT . '/views/includes/footer.php'?>
  </body>
  <?php require APPROOT . '/views/modal/login.php'?>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/config.js"></script>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/home.js"></script>
</html>