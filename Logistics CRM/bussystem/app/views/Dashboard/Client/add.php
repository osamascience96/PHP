<?php 
  require APPROOT . '/views/includes/topnav.php';
?>

    <form id="addclientform" method="post" action="<?=URLROOT?>/Client/Save">
        <div class="row g-3">
            
            <div class="col-xs-12 col-sm-12 col-md-8">
                <?php
                    if(isset($_GET['error'])){
                        $error = $_GET['error'];
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Message!</strong> <?=$error?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }?>
            </div>
            <div class="offset-md-4"></div>

            <?php if(isset($data['client'])){?>
                <input type="hidden" name="id" value="<?=$data['client']->id?>">
                <input type="hidden" name="user_id" value="<?=$data['client']->user_id?>">
            <?php }?>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Enter First Name" value="<?=isset($data['client']) ? $data['client']->FirstName : "" ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Enter Last Name" value="<?=isset($data['client']) ? $data['client']->LastName : "" ?>">
                </div>
            </div>
            <div class="offset-md-4"></div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Enter Email Address" value="<?=isset($data['client']) ? $data['client']->Email : "" ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password" required>
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <input id="client_btn" type="submit" class="btn btn-success" value="Save Client">
                </div>
            </div>
        </div>
    </form>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/client.js"></script>
    
<?php require APPROOT . '/views/includes/footer.php' ?>