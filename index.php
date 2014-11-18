<html>
	<head>
		<style>
			body{
				background-color: #0eafef;
			}
			#divForma{
				position: absolute;
				left:40%;
			}
		</style>
	</head>
	<body>
		<div id="divForma">
			<form action="login.php" method="POST">
				<p> Username: </p><input type="text" name="user" />
				<p> Password: </p><input type="password" name="pass" />
				<br/>
				<input type="submit" value="Login" />
			</form>
			<a href="nuevo_usuario.php">Registrarse </a>
		</div>

		
	</body>	
</html>