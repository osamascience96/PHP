<?php
    // require the request_helper
    require_once 'helpers/request_helper.php';
    // requre the client helper
    require_once 'helpers/client_helper.php';
    // require the config file for the constants
    require_once 'config/config.php';
    // require the singleton class of the object
    require_once 'helpers/connection_state.php';
    // require the base class of the database
    require_once 'libraries/Database.php';
    // require the base controller
    require_once 'libraries/Controller.php';
    // require the session helper
    require_once 'helpers/session_helper.php';
    // require the core
    require_once 'libraries/Core.php';
    $init = new Core();
?>