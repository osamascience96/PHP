document.addEventListener('DOMContentLoaded', (event) => {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#addemployeeform").validate(
        {
            rules:{
                firstname: "required",
                email:{
                    required: true,
                    email: true,
                },
                password: "required",
                companyslct: "required",
                branchslct: "required",
                joingdate: "required",
            },
        }
    );

    $("#employee_btn").on('click', (e)=>{
        if($("#addemployeeform").valid()){
            document.getElementById("addemployeeform").submit();
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