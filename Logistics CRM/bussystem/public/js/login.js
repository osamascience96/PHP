$(function(){

    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#login_form").validate(
        {
            rules:{
                email:{
                    required: true,
                    email: true,
                },
                pass: "required",
            },
        }
    );
});


$("#login").on('click', (e)=>{
    if($("#login_form").valid()){
        document.getElementById("login_form").submit();
    }
});