document.addEventListener('DOMContentLoaded', (event) => {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#addbranchform").validate(
        {
            rules:{
                name: "required",
                address: "required",
            },
        }
    );

    $("#branch_btn").on('click', (e)=>{
        if($("#addbranchform").valid()){
            document.getElementById("addbranchform").submit();
        }
    });
});