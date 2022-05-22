<?php 
  require APPROOT . '/views/includes/topnav.php';
?>


    <?php 
        $sessionHelper = new SessionHelper(); 
        
        $is_sub_user = $sessionHelper->get_session_value('is_sub_user');
        $userroles = $sessionHelper->is_session_exists('userroles') ? $sessionHelper->get_session_value('userroles') : array();
    ?>
    
    <div class="row g-3">
        <?php if(!$is_sub_user || count(array_intersect(array(8), $userroles)) > 0){?>
            <div class="offset-md-8"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 d-flex justify-content-end">
                <a href="<?=URLROOT?>/Employee/Add" class="btn btn-success">
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
                    <th>Company ID</th>
                    <th>Company Name</th>
                    <th>Branch Name</th>
                    <th>Join Date</th>
                    <th>Tenure End</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['employeeList'] as $employee){?>
                    <tr>
                        <td><?=$employee->FirstName?></td>
                        <td><?=$employee->LastName?></td>
                        <td><?=$employee->Email?></td>
                        <td><?=$employee->CompanyId?></td>
                        <td><?=$employee->CompanyName?></td>
                        <td><?=$employee->BranchName?></td>
                        <td style="width: 10%;"><?=$employee->join_date?></td>
                        <td style="width: 10%;"><?=$employee->tenure_end?></td>
                        <td style="width: 10%;">
                            <?php if(!$is_sub_user || count(array_intersect(array(9), $userroles)) > 0){?>
                                <!-- Edit -->
                                <a href="<?=URLROOT?>/Employee/Add?id=<?=$employee->id?>" type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            <?php }?>
                            <?php if(!$is_sub_user || count(array_intersect(array(15), $userroles)) > 0){?>
                                <!-- Delete -->
                                <a href="<?=URLROOT?>/Employee/del?id=<?=$employee->id?>" type="button" class="btn btn-danger btn-sm">
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
                    <th>Company ID</th>
                    <th>Company Name</th>
                    <th>Branch Name</th>
                    <th>Join Date</th>
                    <th>Tenure End</th>
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