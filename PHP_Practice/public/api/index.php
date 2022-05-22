<?php
    // check if the request method 
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $paramsArray = explode('/', $_GET['apiParams']);

        // check for the first param that checks that if the api file exists or not 
        $api_name = $paramsArray[0];
        unset($paramsArray[0]);

        if(file_exists($api_name . '.php')){
            require_once '../../app/require.php';
            require_once '../../app/Controllers/' . ucwords($api_name) . '.php';
            // check if the second param is not set set the message 
            if(!isset($paramsArray[1])){
                echo 'function name not set after the api name';
                die;
            }
            $functionName = $paramsArray[1];
            unset($paramsArray[1]);
            require_once $api_name . '.php';

            // Call the required function
            $functionName(array_values($paramsArray));
                
        }else{
            echo $api_name .' API file does not exists';
        }
    }else{
        echo json_encode($_POST);
        die;
    }
?>