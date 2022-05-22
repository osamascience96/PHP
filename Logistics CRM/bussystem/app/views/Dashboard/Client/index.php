<?php 
  require APPROOT . '/views/includes/topnav.php';
?>

    <?php 
        $sessionHelper = new SessionHelper(); 
        
        $is_sub_user = $sessionHelper->get_session_value('is_sub_user');
        $userroles = $sessionHelper->is_session_exists('userroles') ? $sessionHelper->get_session_value('userroles') : array();
    ?>
    
    <div class="row g-3">
        <?php if(!$is_sub_user || count(array_intersect(array(18), $userroles)) > 0){?>
            <div class="offset-md-8"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 d-flex justify-content-end">
                <a href="<?=URLROOT?>/Client/Add" class="btn btn-success">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </a>
            </div>
        <?php }?>

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
    </div>

    <div class="mt-3 mb-3">
        <!-- show all the companies -->
        <table id="companyTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['clientList'] as $client){?>
                    <tr>
                        <td><?=$client->FirstName?></td>
                        <td><?=$client->LastName?></td>
                        <td><?=$client->Email?></td>
                        <td>
                            <?php if(!$is_sub_user || count(array_intersect(array(19), $userroles)) > 0){?>
                                <!-- Edit -->
                                <a href="<?=URLROOT?>/Client/Add?id=<?=$client->id?>" type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            <?php }?>

                            <?php if(!$is_sub_user || count(array_intersect(array(20), $userroles)) > 0){?>
                                <!-- Delete -->
                                <a href="<?=URLROOT?>/Client/del?id=<?=$client->id?>" type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            <?php }?>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        // load the datatables bootstrap on page load
        document.addEventListener('DOMContentLoaded', (event) => {
            // load the datatable bootstrap plugin to the table 
            $("#companyTable").DataTable();
        });
    </script>

<?php require APPROOT . '/views/includes/footer.php' ?>