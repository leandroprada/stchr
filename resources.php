<?php
 session_start();

var_dump ($_SESSION);
/* This section sets the firstname to session coming from user logged in either by email or username
if ($_SESSION['userloggedname'] != NULL) {
	$_SESSION['firstname'] = $_SESSION['userloggedname'];
	
}

if ($_SESSION['userloggedemail'] != NULL) {
	$_SESSION['firstname'] =  $_SESSION['userloggedemail'];
}
elseif ($_SESSION['userloggedemail'] == NULL){
	$_SESSION['firstname'] =  "usuario";
}

/* This section sets the user security level group to session coming from user logged in either by email or username
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
*/

?>