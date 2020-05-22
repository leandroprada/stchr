<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];
/* This section sets the firstname to session coming from user's name logged in either by email or username*/
if ($_SESSION['name'] != NULL) {
	$_SESSION['firstname'] = $_SESSION['name'];
}

elseif ($_SESSION['name'] == NULL){
	$_SESSION['firstname'] =  "usuario";
}

/* This section sets the user security level group to session coming from user logged in either by email or username*/
if ($_SESSION['userloggedbyemailcourse'] != NULL) {
	$_SESSION['course'] = $_SESSION['userloggedbyemailcourse'];
	
}

if ($_SESSION['userloggedbyeusernamecourse'] != NULL) {
	$_SESSION['course'] =  $_SESSION['userloggedbyeusernamecourse'];
}
				
				

if ($_SESSION['login'] == "validated") {
	include "./content/resources/resources_logged_in.php";
	}
else {
	include "./content/resources/resources_not_logged_in.php";
	}

?>