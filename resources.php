<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];

if ($_SESSION['firstnamebyuser'] != NULL) {
	$_SESSION['firstname'] = $_SESSION['firstnamebyuser'];
	
}

if ($_SESSION['firstnamebyemail'] != NULL) {
	$_SESSION['firstname'] =  $_SESSION['firstnamebyemail'];
}
elseif ($_SESSION['userloggedemail'] == NULL){
	$_SESSION['firstname'] =  "usuario";
}

if ($_SESSION['login'] == "validated") {
	include "./content/resources/resources_logged_in.php";
	}
else {
	include "./content/resources/resources_not_logged_in.php";
	}

?>