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
        <h2>Register</h2>

        <!-- creating the form to sign in  -->
        <form action="<?=URLROOT?>/users/register" method="POST">
            <!-- username -->
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?=$data['usernameError']?>
            </span>
            <!-- email -->
            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?=$data['emailError']?>
            </span>
            <!-- password -->
            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?=$data['passwordError']?>
            </span>
            <!-- confirm password -->
            <input type="password" placeholder="Confirm Password *" name="confirm_password">
            <span class="invalidFeedback">
                <?=$data['confirm_passwordError']?>
            </span>
            <!-- button -->
            <button id="submit" type="submit" value="submit">Submit</button>

            <!-- option to register -->
            <p class="options">
                Already a member? <a href="<?=URLROOT?>/users/login">Login to Continue!</a>
            </p>
        </form>
    </div>
</div>