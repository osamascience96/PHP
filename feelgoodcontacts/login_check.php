<?php 
$db = "feelgoodcontact";
$servername= "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,$db);
if(empty($_SESSION['id'])) {
	session_start();
}


//Logout
if(isset($_GET['out'])) {
	session_unset();
	session_destroy();
	header("location:index.php");
}

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
	
} else {
	header("Location: index.php");
}

?>