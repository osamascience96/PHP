<?php 
  require APPROOT . '/views/includes/topnav.php';
?>

    <form id="addbranchform" method="post" action="<?=URLROOT?>/Branch/Save">
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

            <?php if(isset($data['branch'])){?>
                <input type="hidden" name="id" value="<?=$data['branch']->id?>">
            <?php }else{?>
                <input type="hidden" name="companyid" value="<?=$data['companyid']?>">
            <?php }?>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Enter Name" value="<?=isset($data['branch']) ? $data['branch']->name : ""?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="company_id" class="form-label">For Company</label>
                    <input id="company_id" name="company_id" type="text" class="form-control" placeholder="BG-123456789-XX" value="<?=$data['companyassign']?>" disabled>
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Enter Address" value="<?=isset($data['branch']) ? $data['branch']->address : ""?>" required>
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <input id="branch_btn" type="submit" class="btn btn-success" value="Save Branch">
                </div>
            </div>
        </div>
    </form>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/branch.js"></script>
    
<?php require APPROOT . '/views/includes/footer.php' ?>