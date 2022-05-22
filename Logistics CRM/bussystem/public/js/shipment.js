document.addEventListener('DOMContentLoaded', (event) => {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#addShipmentForm").validate(
        {
            rules:{
                companyslct: "required",
                branchslct: "required",
                clientslct: "required",
                from_address: "required",
                to_address: "required",
                pick_up_date: "required",
                expected_deliever_date: "required"
            },
        }
    );

    $("#shipment_btn").on('click', (e)=>{
        if($("#addShipmentForm").valid()){
            document.getElementById("addShipmentForm").submit();
        }
    });

    // get current selected company
    var companyId = $("#companyslct").val();
    GetAllCompanyBranches(companyId);

    function GetAllCompanyBranches(companyId){
        var settings = {
            "url": `${window.location.origin}/bussystem/Branch/GetAllCompanyBranches`,
            "method": "POST",
            "timeout": 0,
            "data": {
              "companyId": companyId
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
    }

    $("#companyslct").on('change', (event) => {
        var companyId = $("#companyslct").val();
        GetAllCompanyBranches(companyId);
    });
});