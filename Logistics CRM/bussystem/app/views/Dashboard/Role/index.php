<?php 
  require APPROOT . '/views/includes/topnav.php';
?>
    <!-- Container  -->

    <div class="row g-3">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <?php
                if(isset($_GET['message_success'])){
                    $message = $_GET['message_success'];
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message!</strong> <?=$message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>
        </div>
        <div class="offset-md-4"></div>
    </div>
    
    <h4 class="text-dark">Choose Employees</h4>
    <div class="mt-3 mb-3">
        <!-- show all the companies -->
        <table id="employeeTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company Id</th>
                    <th>Company Name</th>
                    <th>Branch</th>
                    <th>Join Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['employees'] as $employee){?>
                    <tr>
                        <td><?=$employee->FirstName?></td>
                        <td><?=$employee->CompanyId?></td>
                        <td><?=$employee->CompanyName?></td>
                        <td><?=$employee->BranchName?></td>
                        <td><?=$employee->join_date?></td>
                        <td>
                            <!-- Assign Role -->
                            <a href="<?=URLROOT?>/Role/Add?userId=<?=$employee->user_id?>" type="button" class="btn btn-primary btn-sm">
                                <i class="fas fa-universal-access"></i> Assign Roles
                            </a>
                `       </td>
                    </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Company Id</th>
                    <th>Company Name</th>
                    <th>Branch</th>
                    <th>Join Date</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    <h4 class="text-dark">Choose Clients</h4>
    <div class="mt-3 mb-3">
        <!-- show all the companies -->
        <table id="clientsTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['clients'] as $client){?>
                    <tr>
                        <td><?=$client->FirstName?></td>
                        <td><?=$client->LastName?></td>
                        <td><?=$client->Email?></td>
                        <td>
                            <!-- Assign Role -->
                            <a href="<?=URLROOT?>/Role/Add?userId=<?=$client->user_id?>" type="button" class="btn btn-primary btn-sm">
                                <i class="fas fa-universal-access"></i> Assign Roles
                            </a>
                `       </td>
                    </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>First Name</th>
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
            $("#employeeTable").DataTable();
            $("#clientsTable").DataTable();
        });
    </script>
<?php require APPROOT . '/views/includes/footer.php' ?>