<?php 
  require APPROOT . '/views/includes/topnav.php';
?>

    <form id="addemployeeform" method="post" action="<?=URLROOT?>/Employee/Save">
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

            <?php $employee = $data['employee']; ?>

            <?php
                if(!empty($employee)){
            ?>
                <input type="hidden" name="id" value="<?=$employee->id?>">
                <input type="hidden" name="userId" value="<?=$employee->user_id?>">
            <?php }?>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Enter First Name" value="<?=!empty($employee) ? $employee->FirstName : "" ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Enter Last Name" value="<?=!empty($employee) ? $employee->LastName : "" ?>">
                </div>
            </div>
            <div class="offset-md-4"></div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Enter Email Address" value="<?=!empty($employee) ? $employee->Email : "" ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password" required>
                </div>
            </div>
            <div class="offset-md-4"></div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="companyslct">
                                Select Company <span class="text-danger">*</span>
                            </label>
                        </div>
                        <select class="custom-select" id="companyslct" name="companyslct" required>
                            <?php foreach($data['companiesList'] as $company){?>
                                <option value="<?=$company->id?>"><?=$company->company_assigned_id?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="branchslct">
                                Select Branch <span class="text-danger">*</span>
                            </label>
                        </div>
                        <select class="custom-select" id="branchslct" name="branchslct" required></select>
                    </div>
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="joingdate" class="form-label">Join Date <span class="text-danger">*</span></label>
                    <input id="joingdate" name="joingdate" type="date" class="form-control" value="<?=!empty($employee) ? $employee->join_date : "" ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="tenureend" class="form-label">Tenure End</label>
                    <input id="tenureend" name="tenureend" type="date" class="form-control" value="<?=!empty($employee) ? $employee->tenure_end : "" ?>" >
                </div>
            </div>
            <div class="offset-md-4"></div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <input id="employee_btn" type="submit" class="btn btn-success" value="Save Employee">
                </div>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            <?php if(!empty($employee)){?>
                $("#companyslct").val('<?=!empty($employee) ? $employee->companyId : "" ?>');

                var settings = {
                    "url": `${window.location.origin}/bussystem/Branch/GetAllCompanyBranches`,
                    "method": "POST",
                    "timeout": 0,
                    "data": {
                    "companyId": <?=$employee->companyId?>
                    }
                };
          
                $.ajax(settings).done(function (response) {
                    var jsonRespnse = JSON.parse(response);

                    // empty the branch ddl
                    $("#branchslct").empty();
                    
                    jsonRespnse.forEach(element => {
                        $("#branchslct").append(`<option value='${element.id}'>${element.name}</option>`);
                    });
                });
            <?php }?>
        });
    </script>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/employee.js"></script>
    
<?php require APPROOT . '/views/includes/footer.php' ?>