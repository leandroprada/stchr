<?php
 session_start();

// This section sets the firstname to "usuario" if the name is not in the session variable
if ($_SESSION['name'] == "") {
	$_SESSION['name'] =  "usuario";
	
}

if ($_SESSION['login'] == "validated") {
	include "./content/resources/resources_logged_in.php";
	}
else {
	include "./content/resources/resources_not_logged_in.php";
	}


?>