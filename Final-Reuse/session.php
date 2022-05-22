<?php
   include('config.php');
   session_start();

   define('DirectAccess', TRUE);
   
   if(!isset($_SESSION['loginUser'])){
      header("location:login.php");
      die();
   }

   function authPage($role) {
       if($role == 'member' && !isset($_SESSION['member'])){
           header("location:index.php");
           die();
       }
       if($role == 'admin' && !isset($_SESSION['admin'])){
           header("location:member_home.php");
           die();
       }
   }
?>