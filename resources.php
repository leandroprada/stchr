<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];

if ($_SESSION['userloggedname'] != NULL) {
	$_SESSION['firstname'] = $_SESSION['userloggedname'];
	
}

if ($_SESSION['userloggedemail'] != NULL) {
	$_SESSION['firstname'] =  $_SESSION['userloggedemail'];
}

if ($_SESSION['login'] == "validated") {
	include "./content/resources/content_logged_in.php";
	}
else {
	include "./content/resources/content_not_logged_in.php";
	}

?>