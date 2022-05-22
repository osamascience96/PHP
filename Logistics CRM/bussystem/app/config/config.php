<?php
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'busscheduledb');
    // APPlication Root path constant
    define('APPROOT', dirname(__DIR__));
    // URLROOT path contant
    // Note: Please change or remove the port number below, if you are using some or default one
    define('URLROOT', 'http://' . $_SERVER['SERVER_NAME']. ':8080' . '/' . explode('\\', __DIR__)[3]);
    // sitename constant
    define('SITENAME', 'Logistics CRM');
    // set the ip address of the client
    //define('CLIENT_IP_ADDRESS', $ipaddress);
    // Get the Current Link 
    define('CURRENT_LINK', $_SERVER['REQUEST_URI']);
?>