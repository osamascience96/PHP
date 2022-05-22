<?php 
  require APPROOT . '/views/includes/topnav.php';
?>

    <form id="addShipmentForm" method="post" action="<?=URLROOT?>/Shipment/Save">
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

            <?php $shipment = $data['shipment']; ?>

            <?php if(!empty($shipment)){?>
                <input type="hidden" name="id" value="<?=$shipment->id?>">
            <?php }?>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="companyslct">
                                Select Company <span class="text-danger">*</span>
                            </label>
                        </div>
                        <select class="custom-select" id="companyslct" name="companyslct" required>
                            <?php foreach($data['companyList'] as $company){?>
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
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="clientslct">
                                Select Client <span class="text-danger">*</span>
                            </label>
                        </div>
                        <select class="custom-select" id="clientslct" name="clientslct" required>
                            <?php foreach($data['clientList'] as $client){?>
                                <option value="<?=$client->id?>"><?=$client->FirstName?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="from_address" class="form-label">From Address <span class="text-danger">*</span></label>
                    <input id="from_address" name="from_address" type="text" class="form-control" value="<?=!empty($shipment) ? $shipment->from_address : "" ?>" placeholder="From which Address" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="to_address" class="form-label">To Address <span class="text-danger">*</span></label>
                    <input id="to_address" name="to_address" type="text" class="form-control" value="<?=!empty($shipment) ? $shipment->to_address : "" ?>" placeholder="Where to Send" required>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="pick_up_date" class="form-label">Pick Up Date <span class="text-danger">*</span></label>
                    <input id="pick_up_date" name="pick_up_date" type="date" class="form-control" value="<?=!empty($shipment) ? $shipment->pick_up_date : "" ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="deliver_date" class="form-label">Deliever Date </label>
                    <input id="deliver_date" name="deliver_date" type="date" value="<?=!empty($shipment) ? $shipment->deliever_date : "" ?>" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="expected_deliever_date" class="form-label">Expected Deliever Date <span class="text-danger">*</span></label>
                    <input id="expected_deliever_date" name="expected_deliever_date" type="date" value="<?=!empty($shipment) ? $shipment->expected_deliever_date : "" ?>" class="form-control" required>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <input id="shipment_btn" type="submit" class="btn btn-success" value="Save Shipment">
                </div>
            </div>
        </div>
    </form>

    <!-- Include JS Register -->
    <script src="<?=URLROOT?>/public/js/shipment.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            <?php if(!empty($shipment)){?>
                $("#companyslct").val('<?=!empty($shipment) ? $shipment->companyId : "" ?>');
                $("#clientslct").val('<?=!empty($shipment) ? $shipment->clientId : "" ?>');

                var settings = {
                    "url": `${window.location.origin}/bussystem/Branch/GetAllCompanyBranches`,
                    "method": "POST",
                    "timeout": 0,
                    "data": {
                    "companyId": <?=$shipment->companyId?>
                    }
                };
          
                $.ajax(settings).done(function (response) {
                    var jsonRespnse = JSON.parse(response);

                    // empty the branch ddl
                    $("#branchslct").empty();
                    
                    jsonRespnse.forEach(element => {
                        $("#branchslct").append(`<option value='${element.id}'>${element.name}</option>`);
                    });
                }).done(() => {
                    $("#branchslct").val('<?=!empty($shipment) ? $shipment->branch_id : "" ?>');
                });
            <?php }?>
        });
    </script>
    
<?php require APPROOT . '/views/includes/footer.php' ?>