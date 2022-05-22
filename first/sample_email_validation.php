<!doctype html>
<html>
    <head>
        <title>E-Mail and Passowrd</title>
    </head>
    <body>
        <?php if(isset($_GET['message'])){?>
            <!-- response according to the message -->
            <?php if($_GET['message'] == 'success'){ ?>
                <h3 style="color:green;">Successful Login!</h3>
            <?php }else{ ?>
                <h3 style="color:red;">Login Failed!</h3>
            <?php } 
        } ?>

        <!-- creating the form that validates that validates the email and passowrd -->
        <form method="post" action="validate_user_account.php">
            <label for="email_ref">Enter Email</label>
            <input id="email_ref" type="email" name="email">
            <br>
            <label for="password_ref">Enter Password</label>
            <input id="password_ref" type="password" name="password">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>