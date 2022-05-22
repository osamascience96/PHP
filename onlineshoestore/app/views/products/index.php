<?php
    require APPROOT . '/views/includes/header.php';
?>
    <link rel="stylesheet" href="<?=URLROOT?>/public/css/products.css">
    <title>Products</title>
  </head>
  <body>
    <?php require APPROOT . '/views/includes/navigation.php'?>
    <br>
    <?php
      $session_helper = new SessionHelper();
    ?>
    <div class="product_div container">
      <div class="row">
        <?php for($i=0; $i < count($data); $i++){?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" height="200px" src="<?='data:image/jpeg;base64,'.base64_encode($data[$i]->image)?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?=$data[$i]->name?></h5>
                <p class="card-text"><?=$data[$i]->description?></p>
                <p class="card-text text-primary">$<?=$data[$i]->price?></p>
                <button class="btn btn-outline-primary btn-block" onclick="addtocart(<?=$session_helper->get_session_value('id')?>, <?=$data[$i]->id?>)">Add to Cart <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
    <?php require APPROOT . '/views/includes/bootstrap.php'?>
    <?php require APPROOT . '/views/includes/footer.php'?>
  </body>
  <?php require APPROOT . '/views/modal/login.php'?>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/config.js"></script>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/home.js"></script>
</html>