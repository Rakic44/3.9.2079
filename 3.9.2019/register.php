<?php

	session_start();
	//require_once "util.php";
	if(ISSET($_POST["name"],$_POST["email"],$_POST["password"],$_POST[		"repeatPass"],$_POST["submit"]))
	{
		$name=trim($_POST["name"]);
		$email=trim($_POST["email"]);
		$password=trim(md5($_POST["password"]));
		$rpPass=trim(md5($_POST["repeatPass"]));
		
		if($name != "" && $email != "" && $password != "" && $rpPass != 		"")
		{
			
			$query= sprintf(" INSERT INTO Korisnik 						 (Ime,Email,Password,RepeatPassword)
				Values ('%s','%s','%s','%s')",
				$name,
				$email,
				$password,
				$rpPass
				);
				
				$mysqli= new mysqli("localhost","root","","prijava");
			$mysqli->query($query);
			
			
			if($mysqli->errno)
			{
				 	printf("Greska prilikom registracije (%d) : %s",					$mysqli->errno,$mysqli->error);
					
				
			}
			
			if($password != $rpPass)
			{
				header("location:loz.html");
			}
		
			
			else
			{
				header("location:message.html");
			}
			
			
		
			
		}	
		
		
	}
		
		
?>


<html>
	<head>
			<link  href="css/register.css" rel="StyleSheet" type="text/css">
	</head>
	
	<body>
		<div>
		<form action="" method="POST" enctype="multipart/form-data">
		<div id="login-box">
			<h2>Registruj se</h2>
				<div class="form">	
				<div class="user">
					Name: 
					
				</div>
				
				<input type="text" name="name">
				
				<div class="pass">
					Email:
					
				</div>
					<input type="text" name="email">
					
				<div class="pass">
					Password: 
				<input type="password" name="password">
				
				</div>
				
				<div class="pass">
					Repeat Password: 
				<input type="password" name="repeatPass">
				</div>
				<div class="bottom">
					<input type="submit" name="submit" value="Register">
				</div>
				
				</div>
						
		</div>
	</form>
	</div>
	</body>




</html>