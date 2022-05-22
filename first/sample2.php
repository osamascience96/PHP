<?php
    // let the value from database be......
    $sample_email = "user123@gmail.com";
    $sample_pass = "25f9e794323b453885f5181f1b624d0b"; // password in md5 encryption format

    // compare both of the data
    if($sample_email == $_POST['user_email'] && $sample_pass == hash('md5', $_POST['user_password'])){
        // if the email and password are not set in the cookies array then set the cookie
        if(!isset($_COOKIE['email_cookie']) && !isset($_COOKIE['pass_cookie'])){
            setcookie("email_cookie", $_POST['user_email'], time()+3600, "/", "", 1);
            setcookie("pass_cookie", $_POST['user_password'], time()+3600, "/", "", 1);
        }
        header("Location:index.php?message=login_success");
    }else{
        header("Location:index.php?message=login_fail");
    }
?>