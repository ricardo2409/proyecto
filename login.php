<?php
	$username = "root";
	$password = "";
	$host = "localhost";

	$infodb = mysql_connect($host, $username, $password) or die("No se pudo conectar");
	$db = mysql_select_db("proyecto", $infodb);
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];

	//proteccion
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);

	$query = "SELECT * FROM usuarios WHERE username = '$myusername' and password = '$mypassword'";
	$resultado = mysql_query($query);
	$nombre = "";
	while($row = mysql_fetch_assoc($resultado)){
		$nombre = $row['nombre'];
	}
	$contador = mysql_num_rows($resultado);


	mysql_close();

	if($contador==1)
	{
	
		session_start();
		$_SESSION['nombre'] = $nombre;
		$segundos = 120 + time();
		setcookie(loggedin, date("F jS - g:1 a"), $segundos);
		header("location:login_success.php");
	}else {
		echo 'Usuario o password invalidos';
	}


?>