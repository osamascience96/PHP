<?php 
  require APPROOT . '/views/includes/topnav.php';
?>
    <!-- Container  -->
    <div class="row g-3">
      
      <?php 
        $sessionHelper = new SessionHelper(); 
        
        $is_sub_user = $sessionHelper->get_session_value('is_sub_user');
        $userroles = $sessionHelper->is_session_exists('userroles') ? $sessionHelper->get_session_value('userroles') : array();
      ?>

      <?php if(isset($_GET['error'])){
                $message = $_GET['error'];
            ?>
            <div class="offset-md-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message!</strong> <?=$message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
      <?php }?>

      <?php 
        $access = count(array_intersect(array(3), $userroles)) > 0;
        
        if(!$is_sub_user || $access){
      ?>
        <div class="offset-md-8"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 d-flex justify-content-end">
          <a href="<?=URLROOT?>/Company/Add" type="button" class="btn btn-primary">Add a Company</a>
        </div>
      <?php }?>

      <canvas id="piechart"></canvas>
    </div>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/home.js"></script>
<?php require APPROOT . '/views/includes/footer.php' ?>