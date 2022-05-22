<?php
    // start the php session 
    session_start();

    // check if the session is already being started
    function checkSessionStarted(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
            return;
        }

        return true;
    }
?>