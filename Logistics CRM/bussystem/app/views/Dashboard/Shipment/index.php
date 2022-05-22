<?php 
  require APPROOT . '/views/includes/topnav.php';
?>
    

    <?php 
        $sessionHelper = new SessionHelper(); 
        
        $is_sub_user = $sessionHelper->get_session_value('is_sub_user');
        $userroles = $sessionHelper->is_session_exists('userroles') ? $sessionHelper->get_session_value('userroles') : array();
    ?>

    <div class="row g-3">
        <?php if(!$is_sub_user || count(array_intersect(array(11), $userroles)) > 0){?>
            <div class="offset-md-8"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 d-flex justify-content-end">
                <a href="<?=URLROOT?>/Shipment/Add" class="btn btn-success">
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
                    <th>Client's Name</th>
                    <th>Company</th>
                    <th>Branch</th>
                    <th>Pick Up Date</th>
                    <th>Expecteds Date</th>
                    <th>Deliever Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['shipments'] as $shipment){?>
                    <tr>
                        <td><?=$shipment->client?></td>
                        <td><?=$shipment->Company?></td>
                        <td><?=$shipment->Branch?></td>
                        <td><?=$shipment->pick_up_date?></td>
                        <td><?=$shipment->expected_deliever_date?></td>
                        <td><?=$shipment->deliever_date?></td>
                        <td>
                            <?php if(!$is_sub_user || count(array_intersect(array(12), $userroles)) > 0){?>
                                <!-- Edit -->
                                <a href="<?=URLROOT?>/Shipment/Add?id=<?=$shipment->id?>" type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            <?php }?>
                            <?php if(!$is_sub_user || count(array_intersect(array(16), $userroles)) > 0){?>
                                <!-- Delete -->
                                <a href="<?=URLROOT?>/Shipment/del?id=<?=$shipment->id?>" type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            <?php }?>
                `       </td>
                    </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Client's Name</th>
                    <th>Company</th>
                    <th>Branch</th>
                    <th>Pick Up Date</th>
                    <th>Expecteds Date</th>
                    <th>Deliever Date</th>
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