<?php
 session_start();

require 'dbconn.inc.php';

 $email = $_POST['username'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $sql = "SELECT email FROM users WHERE email=? OR username=?";
 
 
 //this code is to get the user name
 //SELECT name FROM users WHERE (username = "lprada" OR email = NULL);

 
	$queryn1 = "SELECT name FROM users WHERE (username=";
	$queryn2 = '"'.$username.'";';	
	$queryn2 = ' OR email = ';	
	$queryn4 = '"'.$email.'");';	
	
	$queryn = $queryn1.$queryn2.$queryn4.$queryn4;
	$resultn = mysqli_query($conn,$queryn);
	$rown = mysqli_fetch_row($resultn);
	$name = $rown[0];
 
 echo "este es el nombre del usuario":
 var_dump ($name);
  
  if (isset($username)) {
	// This query below first gets the list of courses for that username, then queries the table courses, using that id
	
	$query1 = "SELECT course FROM users WHERE username=";
	$query2 = '"'.$username.'";';	
	$query = $query1.$query2;
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_row($result);
	$coursesforthisuser = $row[0];
	$coursesforthisuser = explode(",",$coursesforthisuser);
	
	
	
	
	foreach ($coursesforthisuser as $course_id) {
			$query3 = "SELECT course_name FROM courses WHERE course_id=";
			$query4 = '"'.$course_id.'";';	
			$queryc = $query3.$query4;
			$resultc = mysqli_query($conn,$queryc);
			$rowc = mysqli_fetch_row($resultc);
			$courses_nameforthisuser = $rowc[0];
				
			Echo 'el numero de curso '.$course_id.' de este usuario, se corresponde con el curso '.$courses_nameforthisuser;
			}
	
	echo "pasé por aca! y el valor de $row es".$coursesforthisuser;
  }
  
 	

 
	  


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>STCHR Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<span class="login100-form-title p-b-32">
						The course/s for this user are <?php  var_dump($coursesforthisuser); 
						
						
						
						
						?>
					</span>
				
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
