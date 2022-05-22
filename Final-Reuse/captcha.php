<!--
    Creates a 5 digit number for captcha.
    Not a safe method, can easily be scraped.
-->

<?php
    if(!defined('DirectAccess')) {
        die('You cannot access this page directly.');
    }

    $rand_number = rand(10000, 99999);
    $_SESSION['captcha'] = $rand_number;
    echo $rand_number;
?>
