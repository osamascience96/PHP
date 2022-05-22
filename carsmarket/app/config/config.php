<?php
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'carsmarket');
    // APPlication Root path constant
    define('APPROOT', dirname(__DIR__));
    // URLROOT path contant
    define('URLROOT', 'http://' . $_SERVER['SERVER_NAME'] . ':8080' . '/' . explode('\\', __DIR__)[3]);
    // sitename constant
    define('SITENAME', 'Cars Market');
?>