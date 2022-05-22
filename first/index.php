<!Doctype html>
<html>
    <head>
        <title>Osama Ahmed PHP</title>
    </head>
    <body>
        <h1>Osama Ahmed PHP</h1>
        <pre>
            The ASCII art of the first letter is 
            ****************
            *              *
            *              *
            *              *
            *              *
            *              *
            *              *
            *              *
            *              *
            *              *
            *              *
            ****************
        </pre>
        <h4>The SHA-256 for my name is <?php echo(hash('sha256', 'Osama Ahmed'));?></h4>

        <h1>Contents of the $_GET array</h1>
        <p>Using print_r:</p>
        <pre>
        <?php
            print_r($_GET);
        ?>
        </pre>
        <p>Using var_dump:</p>
        <pre>
        <?php
            var_dump($_GET);
        ?>
        </pre>


        <!-- apply logic -->
        <?php if(isset($_GET['message'])){?>
            <?php if($_GET['message'] == "login_fail"){?>
                <h1>Login Failed</h1>
            <?php }else{?>
                <h1>Login Successful</h1>
            <?php }
            }

            if($_GET['message'] == "cookies_set_for_login"){
        ?>
            <h1 style="color:green;">User is the registered User of this dummy website.</h1>
        <?php }?>

    </body>
</html>