<?php 
  require APPROOT . '/views/includes/topnav.php';
?>
    <!-- Container -->
    <div class="row g-3">

        <div class="col-xs-12 col-sm-12 col-md-8">
            <?php
                if(isset($_GET['error'])){
                    $error = $_GET['error'];
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message!</strong> <?=$error?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>
        </div>
        <div class="offset-md-4"></div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <?php $user = $data['user']; ?>
            <?php $roles = $data['roles']; ?>
            <!-- user card -->
            <div class="card">
                <div class="card-header">
                    User Information
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?=$user->first_name?></h5>
                    <p class="card-text"><?=$user->email?></p>
                </div>
            </div>
        </div>
        <div class="offset-md-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <form id="addroleform" action="<?=URLROOT?>/Role/Save" method="post">
                <input type="hidden" name="userid" value="<?=$user->id?>">
                <input type="hidden" name="returnUrl" value="<?=CURRENT_LINK?>">
                <!-- toggle of roles -->
                <?php foreach($roles as $role){?>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="role_<?=$role->id?>" name="roles[]" value="<?=$role->id?>">
                        <label class="custom-control-label" for="role_<?=$role->id?>"><?=$role->role?></label>
                    </div>
                <?php }?>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 d-flex justify-content-start">
            <input type="button" class="btn btn-success" onclick="document.getElementById('addroleform').submit();" value="Save Configuration">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            <?php foreach($data['userRoles'] as $userrole){?>
                $("#role_<?=$userrole->role_id?>").prop('checked', <?=$userrole->is_active == 1 ? 'true' : 'false'?>);
            <?php }?>
        });
    </script>
<?php require APPROOT . '/views/includes/footer.php' ?>