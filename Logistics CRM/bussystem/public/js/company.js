document.addEventListener('DOMContentLoaded', (event) => {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#addcompanyform").validate(
        {
            rules:{
                name: "required",
                company_id:{
                    required: true,
                    pattern: "^BG[0-9]{10}$"
                },
                address: "required",
            },
        }
    );

    $("#company_btn").on('click', (e)=>{
        if($("#addcompanyform").valid()){
            document.getElementById("addcompanyform").submit();
        }
    });
});