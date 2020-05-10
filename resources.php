<?php
 session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];

echo "this is in SESSION";
var_dump ($_SESSION);

if ($_SESSION['userloggedname'] != NULL) {
	echo "ESTOY SETEANDO FIRST NAME (Viene de userloggedname A";
	$firstname = $_SESSION['userloggedname'];
	echo $firstname;
}

if ($_SESSION['userloggedemail'] != NULL) {
	echo "ESTOY SETEANDO FIRST NAME (Viene de userloggedemail A";
	$firstname = $_SESSION['userloggedemail'];
	echo $firstname;
}

var_dump ($firstname);

if ($_SESSION['login'] == "validated") {
	include "./content/resources/content_logged_in.php";
	}
else {
	include "./content/resources/content_not_logged_in.php";
	}

?>