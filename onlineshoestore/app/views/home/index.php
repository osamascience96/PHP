<?php
    require APPROOT . '/views/includes/header.php';
?>
    <link rel="stylesheet" href="<?=URLROOT?>/public/css/home.css">
    <title>Home</title>
  </head>
  <body>
    <?php require APPROOT . '/views/includes/navigation.php'?>
    <!-- image slider -->
    <div id="carouseldatatarget" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouseldatatarget" data-slide-to="0" class="active"></li>
        <li data-target="#carouseldatatarget" data-slide-to="1"></li>
        <li data-target="#carouseldatatarget" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" height="700px" src="<?=URLROOT?>/public/img/male_shoes.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="700px" src="<?=URLROOT?>/public/img/female_shoes.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="700px" src="<?=URLROOT?>/public/img/kids_shoes.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouseldatatarget" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouseldatatarget" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <h3 class="text-center">Online Shoes Store</h3>
      <p class="text-center">A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture, with appearance originally being tied to function. Though the human foot is adapted to varied terrain and climate conditions, it is still vulnerable to environmental hazards such as sharp rocks and temperature extremes, which shoes protect against. Some shoes are worn as safety equipment, such as steel-soled boots which are required on construction sites.</p>
      <p class="text-center">Additionally, fashion has often dictated many design elements, such as whether shoes have very high heels or flat ones. Contemporary footwear varies widely in style, complexity and cost. Basic sandals may consist of only a thin sole and simple strap and be sold for a low cost. High fashion shoes made by famous designers may be made of expensive materials, use complex construction and sell for hundreds or even thousands of dollars a pair. Some shoes are designed for specific purposes, such as boots designed specifically for mountaineering or skiing, while others have more generalized usage such as sneakers which have transformed from a special purpose sport shoe into a general use shoe.</p>
    </div>
    <br>
    <?php require APPROOT . '/views/includes/footer.php'?>
    <?php require APPROOT . '/views/includes/bootstrap.php'?>
  </body>
  <?php require APPROOT . '/views/modal/login.php'?>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/config.js"></script>
  <script type="text/javascript" src="<?=URLROOT?>/public/javascript/home.js"></script>
</html>