<?php
    if(!function_exists($functionName)){
        echo $functionName . '() function not exists';
        die;
    }

    // Call the users controller object
    $class_name = ucwords($api_name);
    $users_controller_object = new $class_name();

    function getusers($paramArray){
        global $users_controller_object;
        echo json_encode($users_controller_object->GetAllUsers());
    }
?>