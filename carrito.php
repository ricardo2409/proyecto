<?php
	session_start();
	//session_destroy();
	//print_r($_POST);
	//[tamano] => Lata [mililitros] => 355ml [precioUnitario] => 5 [cantidad] => 4 [calculado] => 20 )
	$idProducto = $_POST["idProducto"];
	$Cantidad = $_POST["cantidad"];
	$Calculado = $_POST["calculado"];
	$producto = $_POST["producto"];

/*	$_SESSION["carrito-".$idProducto."-id"] = $idProducto;
	$_SESSION["carrito-".$idProducto."-producto"] = $producto;
	$_SESSION["carrito-".$idProducto."-cantidad"] = $Cantidad;
	$_SESSION["carrito-".$idProducto."-calculado"] = $Calculado;*/
	$_SESSION["carrito-".$idProducto] = array(
										    "id" => $idProducto,
										    "producto" => $producto,
										    "cantidad" => $Cantidad,
										    "calculado" => $Calculado,
										);
	if(isset($_SESSION["totalCarrito"])){

		$_SESSION["totalCarrito"]+=$Calculado;
	}else{
		$_SESSION["totalCarrito"]=$Calculado;
	}
	//print_r($_SESSION);

	$username = "root";
	$password = "";
	$host = "localhost";

	$infodb = mysql_connect($host, $username, $password) or die("No se pudo conectar");
	$db = mysql_select_db("proyecto", $infodb);

	$query = "SELECT nombreArt FROM articulo WHERE numArt = '$idProducto'";
	$resultado = mysql_query($query);
	$nombre = "";
	while($row = mysql_fetch_assoc($resultado)){
		$nombre = $row['nombreArt'];
	}
	//carrito-R001010-id R001010carrito-R001010-producto RefrescoDeColacarrito-R001010-cantidad 3carrito-R001010-calculado 15
	// foreach($_SESSION as $key => $value){
	// 	echo "<br/>";
	// 	if(substr($key,0,8) == "carrito-"){
	// 		print($key . " " . $value["id"] . " " .$value["producto"]. " ".$value["cantidad"]. " ".$value["calculado"]);
	// 	}
	// }
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>

	<table class = "table table-hover">
		<tr>
			<td>id</td>
			<td>Producto</td>
			<td>Cantidad</td>
			<td> Precio </td>
		</tr>
		<?php
			foreach($_SESSION as $key => $value){
				if(substr($key,0,8) == "carrito-"){
					echo "<tr>";
					echo "<td>".$value["id"]."</td>";
					echo "<td>".$value["producto"]."</td>";
					echo "<td>".$value["cantidad"]."</td>";
					echo "<td>".$value["calculado"]."</td>";
					echo "</tr>";
				}

			}
			echo"<tr>";
			echo"<td></td>";
			echo"<td></td>";
			echo"<td>Total:</td>";
			echo"<td>".$_SESSION["totalCarrito"]."</td>";
		?>
	</table>

</html>