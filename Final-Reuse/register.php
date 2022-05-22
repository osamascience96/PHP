<!--
    Login page
-->

<?php
Define('DirectAccess', TRUE);

session_start();
require_once('config.php');

if (isset($_SESSION['loginUser'])) {
    header("location:index.php");
}

$errors = [];
$name = $username = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name)) {
        $errors[] = 'Please enter your name.';
    }
    if (empty($username)) {
        $errors[] = 'Please enter your username.';
    }
    if (empty($password)) {
        $errors[] = 'Please enter your password.';
    } else {
        if (empty($confirm_password)) {
            $errors[] = 'Please confirm your password.';
        } else {
            if ($confirm_password != $password) {
                $errors[] = 'Your confirm password do not match your password.';
            }
        }
    }

    if (empty($errors)) {
        include('encryption.php');
        $cryption = new EncryptDecrypt();

        $query = $pdo->prepare('SELECT personnel_id FROM personnel WHERE personnel_login = :username');
        $query2 = $pdo->prepare('SELECT member_id FROM members WHERE username = :username');

        $query->execute(array('username' => $username));
        $query2->execute(array('username' => $username));

        if ($query->rowCount() > 0 || $query2->rowCount() > 0) {
            $errors[] = 'Username already taken.';
        } else {
            $query3 = $pdo->prepare('INSERT INTO members (member_name, username, password) VALUES (:name, :username, :password)');
            $query3->execute(array('name' => $cryption->encrypt($name), 'username' => $username, 'password' => md5($password)));
            echo "<script type='text/javascript'> document.location ='index.php'; </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/gradients.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>

<body>
<div class="login-group absolute-center night-fade-gradient" style="height: auto; margin-top: 50px;margin-bottom: 50px;">
    <div class="d-flex flex-column">
        <h5 class="text-center">Register</h5>
        <?php
        if (!empty($errors)) {
            echo '</br></br>';
            echo '<ul style="color: red; font-weight: bold;">';
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo '</ul>';
        }
        ?>
        </br></br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Member Name" value="<?php echo $name; ?>"/>
            </div>
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $username; ?>"/>
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input name="confirm_password" type="password" class="form-control" placeholder="Confirm password"/>
            </div>
            <br><br>
            <input type="submit" class="btn btn-light btn-block" value="Register"/><br/>
            <a href="login.php" class="btn btn-light btn-block">Login</a><br/>
        </form>
    </div>
</div>
</body>
</html>