<?php
	$username = "root";
	$password = "";
	$host = "localhost";

	$infodb = mysql_connect($host, $username, $password) or die("No se pudo conectar");
	$db = mysql_select_db("proyecto", $infodb);
	
	

	if( isset($_POST['usuarios']) && isset($_POST['passwords'])){
		$usuario = $_POST['usuarios'];
		$password = $_POST['passwords'];
		$nombre = $_POST['nombre'];

		$query = mysql_query("SELECT * FROM usuarios WHERE username = '$usuario'");
		if(mysql_num_rows($query) > 0){
			//header("location:nuevo_usuario.php");
			echo 'Usuario ya existe, favor de elegir otro.';
		}else {
			mysql_query("INSERT INTO usuarios (username, password, nombre) VALUES ('$usuario', '$password', '$nombre')");
			echo "¡ Usuario creado exitosamente !";
			header("location:index.php");
		}
	
	}
	mysql_close();

?>


<html>
	<body>
		<h1>Registro</h1>
			<form action="" method ="POST">
				<p> Usuario: </p><input type="text" name="usuarios" />
				<p> Password: </p><input type="password" name="passwords" />
				<p> Nombre: </p><input type="text" name="nombre" />
			</br>
				<input type="submit" value="Registrarse"/>

			</form>
	</body>
</hmtl>