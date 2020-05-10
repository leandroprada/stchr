<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];

if (isset($_SESSION['userloggedname'])) {
	
	$firstname = $_SESSION['userloggedname']
}

elseif (isset($_SESSION['userloggedmail'])) {
	
	$firstname = $_SESSION['userloggedmail']
}

else {
	
	$firstname = "Usuario";
}

if ($_SESSION['login'] == "validated") {
	include "./content/resources/content_logged_in.php";
	}
else {
	include "./content/resources/content_not_logged_in.php";
	}

?>