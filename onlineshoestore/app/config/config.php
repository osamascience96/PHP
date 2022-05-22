<?php
    // database localmachine params
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'shoestore');  
    // APPlication Root path constant
    define('APPROOT', dirname(__DIR__));
    // URLROOT path contant
    // for working in local machine
    define('URLROOT', 'http://' . $_SERVER['SERVER_NAME'] . '/' . explode('\\', __DIR__)[3]);
?>