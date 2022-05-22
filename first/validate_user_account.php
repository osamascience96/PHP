<?php
    // let the email and passowrd of the user be...
    $user_email = "osama@email.com";
    $user_password = "25f9e794323b453885f5181f1b624d0b";

    if(isset($_POST['email']) && isset($_POST['password'])){
        // the data is providede,

        // checking the email 
        $email = $_POST['email'];
        $password = $_POST['password'];

        // validating the email
        if( ($email == $user_email) && (hash('md5', $password) == $user_password) ){
            header("Location:sample_email_validation.php?message=success");
        }else{
            header("Location:sample_email_validation.php?message=failure");
        }
    }
?>