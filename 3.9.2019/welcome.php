<?php

session_start();

?>


<html>

	<head>
		<title>Welcome Page</title>
		<link  href="css/style.css" rel="StyleSheet" type="text/css">
	</head>

	<body>
		<div class="logg">
		<a href="logout.php">LOGOUT</a>
		</div>
		
		<h1> Welcome <?php echo $_POST["name"]; ?> </h1>
	</body>




</html>