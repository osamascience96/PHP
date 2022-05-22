<?php
    $server = "127.0.0.1";
    $port = "21";
    $user = "root";
    $pass = "root";

    $connect = ftp_connect($server, $port);

    if($connect){
        echo 'Connection Eastablished to the Server';
        echo '<br>';
        $ftp_result = ftp_login($connect, $user, $pass);
        if($ftp_result){
            echo 'Connected to the Server with Login Credentials';
        }else{
            echo 'Invalid Login Credentials';
        }
    }else{
        echo 'Connection unsuccessful';
    }
?>