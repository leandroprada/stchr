<?php
 session_start();


if ($_SESSION['namebyuser'] != NULL) {
	$_SESSION['firstname'] = $_SESSION['namebyuser'];
	
}

if ($_SESSION['namebyemail'] != NULL) {
	$_SESSION['firstname'] =  $_SESSION['namebyemail'];
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