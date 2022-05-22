<!Doctype html>
<html>
    <head>
        <title>Sample Form</title>
    </head>
    <body>
        <!-- making the simple form -->
        <?php if(!isset($_COOKIE['email_cookie'])){?>
            <form method="Post" action="sample2.php">
                <label for="email_ref">Email</label>
                <input id="email_ref" type="email" name="user_email" >
                <br>
                <br>
                <label for="pass_ref">Password</label>
                <input id="pass_ref" type="password" name="user_password">
                <br>
                <br>
                <input type="submit" name="submit_btn" >
            </form>
        <?php }else{
                header('Location:index.php?message=cookies_set_for_login');
            }?>
    </body>
</html>