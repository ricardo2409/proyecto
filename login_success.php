<?php
	session_start();
	if(!isset($_COOKIE['loggedin'])){
		header("location:index.php");
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<style>
		#top{
			position: absolute;
			top:0px;
			height: 45px;
			width: 100%;
		}
		#bottom{
			position: absolute;
			top:60px;
		}
		#logout{
			position: absolute;
			left:90%;
			top:3%;
			width: 10%;
		}
		#Bienvenido{
			position: absolute;
			font-family: arial;
			font-size: small;
			top:3%;
			width: 90%;
		}
		#Tabla{
			left:10%;
			top:10%;
			text-align: left;
			height: 50px;
			vertical-align: bottom;
		}
	</style>
</head>
	<body>
		<div id="top">
			<div id="Bienvenido">
				<h1> Bienvenido, <?php echo $_SESSION["nombre"]?></h1>
			</div>
			<div id = "logout">
				<a href="logout.php">Logout</a>

			</div>
		</div>
		<div id="bottom">
			<table class="table table-hover">
			  <tr>
			    <td>Foto</td>
			    <td>Refrescos</td>		
			    <td>Cantidad</td>
			    <td>Cart</td>
			  </tr>
			  <tr>
			    <td><img src="fotos/cola.jpg" alt="cola" style="width:130px;height:100px"></td>
			    <td>Refresco de cola</td>		
			    <td><input type="text" name="cantidad" /></td>
			    <td><button type="button">Agregar a orden!</button>
			  </tr>
			</table>
		</div>
	</body>	
</html>