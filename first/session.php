<!-- session Practice -->
<?php
    // starting the session, if the session is not created then, it will create the session 
    session_start();

    // checking if the session is created, then 
    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] += 1;
    }else{
        $_SESSION['counter'] = 1;
    }

    $msg = "You have visited the page ".$_SESSION['counter']." times in this session"; 
?>

<!Doctype html>
<html>
    <head>
        <title>Visit Counter</title>
    </head>
    <body>
        <h1> <?=$msg?> </h1>
    </body>
</html>
