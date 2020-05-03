<?php
 session_start();
$_SESSION['username'] = $_POST['username'];


if ($_SESSION['login'] = "validated") {
	
	echo 'Usuario registrado';}

else {
	
echo 'Usuario no registrado';
	
}

?>