document.addEventListener('DOMContentLoaded', (event) => {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#addclientform").validate(
        {
            rules:{
                firstname: "required",
                email:{
                    required: true,
                    email: true,
                },
                password: "required",
            },
        }
    );

    $("#client_btn").on('click', (e)=>{
        if($("#addclientform").valid()){
            document.getElementById("addclientform").submit();
        }
    });
});