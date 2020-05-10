<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];

if ($_SESSION['userloggedname'] != NULL) {
	$firstname = $_SESSION['userloggedname']
}
if ($_SESSION['userloggedemail'] != NULL) {
	$firstname = $_SESSION['userloggedemail']
}

var_dump ($firstname);

if ($_SESSION['login'] == "validated") {
	include "./content/resources/content_logged_in.php";
	}
else {
	include "./content/resources/content_not_logged_in.php";
	}

?>