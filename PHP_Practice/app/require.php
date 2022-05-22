<?php
    // require libraries from folder libraries
    require_once 'libraries/Controller.php';
    require_once 'libraries/Database.php';
    require_once 'helpers/connection_state.php';
    require_once 'config/config.php';

    // check if the api param is not set 
    if(!isset($_GET['apiParams'])){
        require_once 'helpers/session_helper.php';
        require_once 'libraries/Core.php';
        $init = new Core();
    }
?>