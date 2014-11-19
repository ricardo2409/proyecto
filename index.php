<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<style>
		<style>
			body{
				background-image: (homeback.jpg); 
			}
			#divForma{
				position: absolute;
				left:43%;
				top:400px;

			}
			#background{
				background-size: cover;
			}
		</style>
	</head>
	<body>
		<div id="background">
			<img src ="fotos/homeback.jpg"
		</div>
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