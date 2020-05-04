<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];


if ($_SESSION['login'] == "validated") {
	include "./content/content_logged_in.php";
	}
else {
	include "./content/content_not_logged_in.php";
	}

?>