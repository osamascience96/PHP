<?php 
  require APPROOT . '/views/includes/topnav.php';
?>

    <form id="addcompanyform" method="post" action="<?=URLROOT?>/Company/Save">
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

            <?php
                $company = null;

                if(isset($data['company'])){
                    $company = $data['company'];
                
            ?>
                <input type="hidden" name="id" value="<?=$company->id?>">
            <?php }?>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Enter Name" value="<?=$company != null ? $company->name : ""?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="company_id" class="form-label">Company Assigned Id <span class="text-danger">*</span></label>
                    <input id="company_id" name="company_id" type="text" class="form-control" placeholder="BG-123456789-XX" value="<?=$company != null ? $company->company_assigned_id : ""?>" required>
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Enter Address" value="<?=$company != null ? $company->address : ""?>" required>
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <input id="company_btn" type="submit" class="btn btn-success" value="Save Company">
                </div>
            </div>
        </div>
    </form>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/company.js"></script>
    
<?php require APPROOT . '/views/includes/footer.php' ?>