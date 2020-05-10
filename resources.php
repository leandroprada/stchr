<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];

var_dump ($_SESSION);

if ($_SESSION['login'] == "validated") {
	include "./content/resources/content_logged_in.php";
	}
else {
	include "./content/resources/content_not_logged_in.php";
	}

?>