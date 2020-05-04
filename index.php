<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];


if (isset($_SESSION['login'])) {
	include "./content/content_index.php";
	}
else {
	include "./content/content_index_not_logged_in.php";
	}

?>