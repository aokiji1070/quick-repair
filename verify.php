<?php
 
$dbhost="localhost";  // hostname
$dbuser="root"; // mysql username
$dbpass=""; // mysql password
$db="fix_and_go"; // database you want to use
 
$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
 
//you can also directly write values in mysqli_connect():
 
// $conn=mysqli_connect("localhost", "root", "", "test");

if( isset($_POST['username']) and isset($_POST['password']) ) {
	$user=$_POST['username'];
	$pass=$_POST['password'];

	$ret=mysqli_query( $conn, "SELECT * FROM utilisateurs WHERE username='$user' AND password='$pass'") or die("Could not execute query: " .mysqli_error($conn));
	$row = mysqli_fetch_assoc($ret);
	
	if($row["role"] == "admin") {
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['loggedIn'] = true;
		$_SESSION['role'] = "admin";
		header("Location: admin_page.php");	
	}

	elseif($row["role"] == "repairer"){
		$_SESSION['user'] = $user;
		$_SESSION['loggedIn'] = true;
		$_SESSION['role'] = "repairer";
		header("Location: reparation.php");
	}
	
	
	else {
		header("Location: login_page.php");

	}
}
?>