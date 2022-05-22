<?php

//home.php

/**
 * Start the session.
 */
session_start();


/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}


/**
 * Print out something that only logged in users can see.
 */

echo 'Congratulations! You are logged in!';

//Step-by-step:

//I start the session by using session_start. This is important,
// as our login system will not work without a valid user session.

//We check to see if the user has the required session variables (user ID and login timestamp).
// If the user does not have either of these session variables,
// we simply redirect them back to the login.php page. Obviously, you can customize this to suit your own needs.

//We print out a test message, just to show that the login system is functioning as expected.