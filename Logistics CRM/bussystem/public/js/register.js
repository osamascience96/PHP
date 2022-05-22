$(function(){

    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#register_form").validate(
        {
            rules:{
                firstname: "required",
                email:{
                    required: true,
                    email: true,
                },
                password: "required",
                confirm: {
                    required: true,
                    equalTo: "#password"
                },
            },
        }
    );
});


$("#register_btn").on('click', (e)=>{
    if($("#register_form").valid()){
        document.getElementById("register_form").submit();
    }
});