<?php
session_start();
	if(isset($_POST["name"],$_POST["email"],$_POST["password"],$_POST["submit"]))
	{
		$name=trim($_POST["name"]);
		$email=trim($_POST["email"]);
		$password=trim(md5($_POST["password"]));
		
		
		if($email != "" && $password != "")
		{
			$query=("
					SELECT *
									
					FROM korisnik k
					WHERE 
						EMAIL= '%s'
						AND LOZINKA='s' 
						AND IME='%s'");
						
			
			
		}
		
	}
?>


<html>
	<head>
			<link  href="css/style.css" rel="StyleSheet" type="text/css">
	</head>
	
	<body>
		<div>
		<form action="welcome.php" method="POST" enctype="multipart/form-data">
		<div id="login-box">
			<h2>Prijavi se</h2>
				<div class="form">
				<div class="user">
					Name: 
				</div>
				<input type="text" name="name">
				
				<div class="user">
					Email: 
				</div>
				
				<input type="text" name="email">
				
				<div class="pass">
					Password: 
			
				<input type="password" name="password">
				</div>
				<div class="bottom">
					<input type="submit" name="submit" value="Log In">
				</div>
				</div>
						
		</div>
	</form>
	</div>
	</body>




</html>