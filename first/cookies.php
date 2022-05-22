<!doctype html>
<?php
    // setting the php cookies 
    setcookie("name", "osama", time()+3600, "/", "", 0);
    setcookie("age", "24", time()+3600, "/", "", 0);
?>
<html>
    <head>
        <title>Cookies in PHP</title>
    </head>
    <body>
        <?php if(isset($_COOKIE)){ echo("Cookies are set"); }?>
        <br>
        <?php echo($_COOKIE["name"]);?>
        <br>
        <?php echo($_COOKIE["age"]);?>
    </body>
</html>