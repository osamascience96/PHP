<?php   
    require APPROOT . 'views/includes/head.php';
?>

<div class="navbar">
    <?php
        require APPROOT . 'views/includes/navigation.php';
    ?>
</div>

<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign In</h2>

        <!-- creating the form to sign in  -->
        <form action="<?=URLROOT?>/users/login" method="POST">
            <!-- username -->
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?=$data['usernameError']?>
            </span>
            <!-- password -->
            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?=$data['passwordError']?>
            </span>
            <!-- button -->
            <button id="submit" type="submit" value="submit">Submit</button>

            <!-- option to register -->
            <p class="options">
                Not Registered Yet? <a href="<?=URLROOT?>/users/register">Create an account!</a>
            </p>
        </form>
    </div>
</div>