<?php

//login.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'connect.php';


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['login'])){

    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':username', $username);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Incorrect username / password combination!');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);

        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){

            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();

            //Redirect to our protected page, which we called home.php
            header('Location: home.php');
            exit;

        } else{
            //$validPassword was FALSE. Passwords do not match.
            die('Incorrect username / password combination!');
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password</label>
    <input type="text" id="password" name="password"><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>

//Step by step explanation of the code above:
//1.We start the session by using the function session_start.
//This function MUST be called on every page.

//2.We require the password_compat library.

//3.We require our connect.php file,
//with connects to MySQL and instantiates the PDO object.

//4.If the POST variable “login” exists, we assume that
//the user is attempting to login to our website.

//5.We grab the field values from our login form.

//6.Using the username that we were supplied with,
//we attempt to retrieve the relevant user from our MySQL table.
//We do this by using a prepared SELECT statement.

//7.If a user with that username exists, we compare the two passwords
//by using the function password_verify (this takes care of the hash comparison for you).

//8.If the password hashes match, we supply the user with a login session.
//We do this by creating two session variables called “user_id” and “logged_in”.

//9.We then redirect the user to home.php, which is our login-protected page.

//Note: You will need to implement your own way of dealing with user errors.
//In this tutorial, I am using the die statement, which is a bit nasty.