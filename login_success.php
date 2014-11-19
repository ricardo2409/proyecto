<?php
	session_start();
	if(!isset($_COOKIE['loggedin'])){
		header("location:index.php");
	}
	
?>
<html>
<head>
	<script type="text/javascript">
		function calcula(elemento, numero, id){
			var valorTextField = elemento.value;
			document.getElementById(id).value = valorTextField * numero;
		}
	</script>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<style>
		#top{
			position: absolute;
			top:1%;
			height: 45px;
			width: 100%;
		}
		#bottom{
			position: absolute;
			top:70px;
			left:1%;
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
			    <td>Volumen<td>
			    
			  </tr>
			  <tr>
			    <td><img src="fotos/cola.jpg" alt="cola" style="width:130px;height:100px"></td>
			    <td>Refresco de cola</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R001010')"/></td>
				    			<td> <input name="calculado" type="text" id="R001010"/></td>
				    			<input type="hidden" name="idProducto" value="R001010">
				    			<input type="hidden" name="producto" value="Cola Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R001021')"/></td>
				    			<td> <input name="calculado" type="text" id="R001021"/></td>
				    			<input type="hidden" name="idProducto" value="R001021">
				    			<input type="hidden" name="producto" value="Cola Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R001030')"/></td>
				    			<td> <input name="calculado" type="text" id="R001030"/></td>
				    			<input type="hidden" name="idProducto" value="R001030">
				    			<input type="hidden" name="producto" value="Cola Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R001032')"/></td>
				    			<td> <input name="calculado" type="text" id="R001032"/></td>
				    			<input type="hidden" name="idProducto" value="R001032">
				    			<input type="hidden" name="producto" value="Cola Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R001033')"/></td>
				    			<td> <input name="calculado" type="text" id="R001033"/></td>
				    			<input type="hidden" name="idProducto" value="R001033">
				    			<input type="hidden" name="producto" value="Cola Familiar">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R001034')"/></td>
				    			<td> <input name="calculado" type="text" id="R001034"/></td>
				    			<input type="hidden" name="idProducto" value="R001034">
				    			<input type="hidden" name="producto" value="Cola Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/colalight.jpg" alt="colalight" style="width:130px;height:100px"></td>
			    <td>Refresco de cola light</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R001110')"/></td>
				    			<td> <input name="calculado" type="text" id="R001110"/></td>
				    			<input type="hidden" name="idProducto" value="R001110">
				    			<input type="hidden" name="producto" value="Cola Light Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R001121')"/></td>
				    			<td> <input name="calculado" type="text" id="R001121"/></td>
				    			<input type="hidden" name="idProducto" value="R001121">
				    			<input type="hidden" name="producto" value="Cola Light Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R001130')"/></td>
				    			<td> <input name="calculado" type="text" id="R001130"/></td>
				    			<input type="hidden" name="idProducto" value="R001130">
				    			<input type="hidden" name="producto" value="Cola Light Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R001132')"/></td>
				    			<td> <input name="calculado" type="text" id="R001132"/></td>
				    			<input type="hidden" name="idProducto" value="R001132">
				    			<input type="hidden" name="producto" value="Cola Light Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R001133')"/></td>
				    			<td> <input name="calculado" type="text" id="R001133"/></td>
				    			<input type="hidden" name="idProducto" value="R001133">
				    			<input type="hidden" name="producto" value="Cola Light Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R001134')"/></td>
				    			<td> <input name="calculado" type="text" id="R001134"/></td>
				    			<input type="hidden" name="idProducto" value="R001134">
				    			<input type="hidden" name="producto" value="Cola Light Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/toronja.jpg" alt="toronja" style="width:130px;height:100px"></td>
			    <td>Agua de Toronja </td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R002010')"/></td>
				    			<td> <input name="calculado" type="text" id="R002010"/></td>
				    			<input type="hidden" name="idProducto" value="R002010">
				    			<input type="hidden" name="producto" value="Toronja Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R002021')"/></td>
				    			<td> <input name="calculado" type="text" id="R002021"/></td>
				    			<input type="hidden" name="idProducto" value="R002021">
				    			<input type="hidden" name="producto" value="Toronja Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R002030')"/></td>
				    			<td> <input name="calculado" type="text" id="R002030"/></td>
				    			<input type="hidden" name="idProducto" value="R002030">
				    			<input type="hidden" name="producto" value="Toronja Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R002032')"/></td>
				    			<td> <input name="calculado" type="text" id="R002032"/></td>
				    			<input type="hidden" name="idProducto" value="R002032">
				    			<input type="hidden" name="producto" value="Toronja Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R002033')"/></td>
				    			<td> <input name="calculado" type="text" id="R002033"/></td>
				    			<input type="hidden" name="idProducto" value="R002033">
				    			<input type="hidden" name="producto" value="Toronja Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R002034')"/></td>
				    			<td> <input name="calculado" type="text" id="R002034"/></td>
				    			<input type="hidden" name="idProducto" value="R002034">
				    			<input type="hidden" name="producto" value="Toronja Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/toronjalight.jpg" alt="toronjalig" style="width:130px;height:100px"></td>
			    <td>Agua de Toronja Light</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R002110')"/></td>
				    			<td> <input name="calculado" type="text" id="R002110"/></td>
				    			<input type="hidden" name="idProducto" value="R002110">
				    			<input type="hidden" name="producto" value="Toronja Light Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R002121')"/></td>
				    			<td> <input name="calculado" type="text" id="R002121"/></td>
				    			<input type="hidden" name="idProducto" value="R002121">
				    			<input type="hidden" name="producto" value="Toronja Light Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R002130')"/></td>
				    			<td> <input name="calculado" type="text" id="R002130"/></td>
				    			<input type="hidden" name="idProducto" value="R002130">
				    			<input type="hidden" name="producto" value="Toronja Light Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R002132')"/></td>
				    			<td> <input name="calculado" type="text" id="R002132"/></td>
				    			<input type="hidden" name="idProducto" value="R002132">
				    			<input type="hidden" name="producto" value="Toronja Light Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R002133')"/></td>
				    			<td> <input name="calculado" type="text" id="R002133"/></td>
				    			<input type="hidden" name="idProducto" value="R002133">
				    			<input type="hidden" name="producto" value="Toronja Light Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R002134')"/></td>
				    			<td> <input name="calculado" type="text" id="R002134"/></td>
				    			<input type="hidden" name="idProducto" value="R002134">
				    			<input type="hidden" name="producto" value="Toronja Light Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/manzana.jpg" alt="manzana" style="width:130px;height:100px"></td>
			    <td>Agua de Manzana</td>		
			   <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R003010')"/></td>
				    			<td> <input name="calculado" type="text" id="R003010"/></td>
				    			<input type="hidden" name="idProducto" value="R003010">
				    			<input type="hidden" name="producto" value="Manzana Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R003021')"/></td>
				    			<td> <input name="calculado" type="text" id="R003021"/></td>
				    			<input type="hidden" name="idProducto" value="R003021">
				    			<input type="hidden" name="producto" value="Manzana Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R003030')"/></td>
				    			<td> <input name="calculado" type="text" id="R003030"/></td>
				    			<input type="hidden" name="idProducto" value="R003030">
				    			<input type="hidden" name="producto" value="Manzana Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R003032')"/></td>
				    			<td> <input name="calculado" type="text" id="R003032"/></td>
				    			<input type="hidden" name="idProducto" value="R003032">
				    			<input type="hidden" name="producto" value="Manzana Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R003033')"/></td>
				    			<td> <input name="calculado" type="text" id="R003033"/></td>
				    			<input type="hidden" name="idProducto" value="R003033">
				    			<input type="hidden" name="producto" value="Manzana Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R003034')"/></td>
				    			<td> <input name="calculado" type="text" id="R003034"/></td>
				    			<input type="hidden" name="idProducto" value="R003034">
				    			<input type="hidden" name="producto" value="Manzana Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/manzanalight.jpg" alt="manzanalight" style="width:130px;height:100px"></td>
			    <td>Agua de Manzana Light</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R003110')"/></td>
				    			<td> <input name="calculado" type="text" id="R003110"/></td>
				    			<input type="hidden" name="idProducto" value="R003110">
				    			<input type="hidden" name="producto" value="Manzana Light Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R003121')"/></td>
				    			<td> <input name="calculado" type="text" id="R003121"/></td>
				    			<input type="hidden" name="idProducto" value="R003121">
				    			<input type="hidden" name="producto" value="Manzana Light Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R003130')"/></td>
				    			<td> <input name="calculado" type="text" id="R003130"/></td>
				    			<input type="hidden" name="idProducto" value="R003130">
				    			<input type="hidden" name="producto" value="Manzana Light Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R003132')"/></td>
				    			<td> <input name="calculado" type="text" id="R003132"/></td>
				    			<input type="hidden" name="idProducto" value="R003132">
				    			<input type="hidden" name="producto" value="Manzana Light Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R003133')"/></td>
				    			<td> <input name="calculado" type="text" id="R003133"/></td>
				    			<input type="hidden" name="idProducto" value="R003133">
				    			<input type="hidden" name="producto" value="Manzana Light Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R003134')"/></td>
				    			<td> <input name="calculado" type="text" id="R003134"/></td>
				    			<input type="hidden" name="idProducto" value="R003134">
				    			<input type="hidden" name="producto" value="Manzana Light Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/naranja.jpg" alt="naranja" style="width:130px;height:100px"></td>
			    <td>Refresco de Naranja</td>		
			   <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R004010')"/></td>
				    			<td> <input name="calculado" type="text" id="R004010"/></td>
				    			<input type="hidden" name="idProducto" value="R004010">
				    			<input type="hidden" name="producto" value="Naranja Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R004021')"/></td>
				    			<td> <input name="calculado" type="text" id="R004021"/></td>
				    			<input type="hidden" name="idProducto" value="R004021">
				    			<input type="hidden" name="producto" value="Naranja Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R004030')"/></td>
				    			<td> <input name="calculado" type="text" id="R004030"/></td>
				    			<input type="hidden" name="idProducto" value="R004030">
				    			<input type="hidden" name="producto" value="Naranja Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R004032')"/></td>
				    			<td> <input name="calculado" type="text" id="R004032"/></td>
				    			<input type="hidden" name="idProducto" value="R004032">
				    			<input type="hidden" name="producto" value="Naranja Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R004033')"/></td>
				    			<td> <input name="calculado" type="text" id="R004033"/></td>
				    			<input type="hidden" name="idProducto" value="R004033">
				    			<input type="hidden" name="producto" value="Naranja Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R004034')"/></td>
				    			<td> <input name="calculado" type="text" id="R004034"/></td>
				    			<input type="hidden" name="idProducto" value="R004034">
				    			<input type="hidden" name="producto" value="Naranja Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/naranjalight.jpg" alt="naranjalight" style="width:130px;height:100px"></td>
			    <td>Refresco de Naranja Light</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R004110')"/></td>
				    			<td> <input name="calculado" type="text" id="R004110"/></td>
				    			<input type="hidden" name="idProducto" value="R004110">
				    			<input type="hidden" name="producto" value="Naranja Light Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R004121')"/></td>
				    			<td> <input name="calculado" type="text" id="R004121"/></td>
				    			<input type="hidden" name="idProducto" value="R004121">
				    			<input type="hidden" name="producto" value="Naranja Light Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R004130')"/></td>
				    			<td> <input name="calculado" type="text" id="R004130"/></td>
				    			<input type="hidden" name="idProducto" value="R004130">
				    			<input type="hidden" name="producto" value="Naranja Light Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R004132')"/></td>
				    			<td> <input name="calculado" type="text" id="R004132"/></td>
				    			<input type="hidden" name="idProducto" value="R004132">
				    			<input type="hidden" name="producto" value="Naranja Light Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R004133')"/></td>
				    			<td> <input name="calculado" type="text" id="R004133"/></td>
				    			<input type="hidden" name="idProducto" value="R004133">
				    			<input type="hidden" name="producto" value="Naranja Light Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R004134')"/></td>
				    			<td> <input name="calculado" type="text" id="R004134"/></td>
				    			<input type="hidden" name="idProducto" value="R004134">
				    			<input type="hidden" name="producto" value="Naranja Light Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/ponche.jpg" alt="ponche" style="width:130px;height:100px"></td>
			    <td>Refresco de Ponche</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R005010')"/></td>
				    			<td> <input name="calculado" type="text" id="R005010"/></td>
				    			<input type="hidden" name="idProducto" value="R005010">
				    			<input type="hidden" name="producto" value="Ponche Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R005021')"/></td>
				    			<td> <input name="calculado" type="text" id="R005021"/></td>
				    			<input type="hidden" name="idProducto" value="R005021">
				    			<input type="hidden" name="producto" value="Ponche Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R005030')"/></td>
				    			<td> <input name="calculado" type="text" id="R005030"/></td>
				    			<input type="hidden" name="idProducto" value="R005030">
				    			<input type="hidden" name="producto" value="Ponche Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R005032')"/></td>
				    			<td> <input name="calculado" type="text" id="R005032"/></td>
				    			<input type="hidden" name="idProducto" value="R005032">
				    			<input type="hidden" name="producto" value="Ponche Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R005033')"/></td>
				    			<td> <input name="calculado" type="text" id="R005033"/></td>
				    			<input type="hidden" name="idProducto" value="R005033">
				    			<input type="hidden" name="producto" value="Ponche Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R005034')"/></td>
				    			<td> <input name="calculado" type="text" id="R005034"/></td>
				    			<input type="hidden" name="idProducto" value="R005034">
				    			<input type="hidden" name="producto" value="Ponche Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/ponchelight.jpg" alt="ponchelight" style="width:130px;height:100px"></td>
			    <td>Refresco de Ponche Light</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="5"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,5,'R005110')"/></td>
				    			<td> <input name="calculado" type="text" id="R005110"/></td>
				    			<input type="hidden" name="idProducto" value="R005110">
				    			<input type="hidden" name="producto" value="Ponche Light Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Mediano"></td>
				    			<td> <input type="text" name="mililitros" value="700ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'R005121')"/></td>
				    			<td> <input name="calculado" type="text" id="R005121"/></td>
				    			<input type="hidden" name="idProducto" value="R005121">
				    			<input type="hidden" name="producto" value="Ponche Light Bote Mediano">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'R005130')"/></td>
				    			<td> <input name="calculado" type="text" id="R005130"/></td>
				    			<input type="hidden" name="idProducto" value="R005130">
				    			<input type="hidden" name="producto" value="Ponche Light Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'R005132')"/></td>
				    			<td> <input name="calculado" type="text" id="R005132"/></td>
				    			<input type="hidden" name="idProducto" value="R005132">
				    			<input type="hidden" name="producto" value="Ponche Light Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Familia"></td>
				    			<td> <input type="text" name="mililitros" value="2500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="25"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,25,'R005133')"/></td>
				    			<td> <input name="calculado" type="text" id="R005133"/></td>
				    			<input type="hidden" name="idProducto" value="R005133">
				    			<input type="hidden" name="producto" value="Ponche Light Familia">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Reunion"></td>
				    			<td> <input type="text" name="mililitros" value="3000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="30"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,30,'R005134')"/></td>
				    			<td> <input name="calculado" type="text" id="R005134"/></td>
				    			<input type="hidden" name="idProducto" value="R005134">
				    			<input type="hidden" name="producto" value="Ponche Light Reunion">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/aguanatural.jpg" alt="aguanatural" style="width:130px;height:100px"></td>
			    <td>Agua Natural</td>		
			   <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Chico"></td>
				    			<td> <input type="text" name="mililitros" value="600ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="6"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,6,'A111020')"/></td>
				    			<td> <input name="calculado" type="text" id="A111020"/></td>
				    			<input type="hidden" name="idProducto" value="A111020">
				    			<input type="hidden" name="producto" value="Agua Bote Chico">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'A111030')"/></td>
				    			<td> <input name="calculado" type="text" id="A111030"/></td>
				    			<input type="hidden" name="idProducto" value="A111030">
				    			<input type="hidden" name="producto" value="Agua Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Misil"></td>
				    			<td> <input type="text" name="mililitros" value="1500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="15"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,15,'A111031')"/></td>
				    			<td> <input name="calculado" type="text" id="A111031"/></td>
				    			<input type="hidden" name="idProducto" value="A111031">
				    			<input type="hidden" name="producto" value="Agua Misil">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Galon Plus"></td>
				    			<td> <input type="text" name="mililitros" value="5000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="40"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,40,'A111040')"/></td>
				    			<td> <input name="calculado" type="text" id="A111040"/></td>
				    			<input type="hidden" name="idProducto" value="A111040">
				    			<input type="hidden" name="producto" value="Agua Galon Plus">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/aguamineral.jpg" alt="aguamineral" style="width:130px;height:100px"></td>
			    <td>Agua Mineral</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Chico"></td>
				    			<td> <input type="text" name="mililitros" value="600ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="6"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,6,'A111120')"/></td>
				    			<td> <input name="calculado" type="text" id="A111120"/></td>
				    			<input type="hidden" name="idProducto" value="A111120">
				    			<input type="hidden" name="producto" value="Agua Mineral Bote Chico">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'A111130')"/></td>
				    			<td> <input name="calculado" type="text" id="A111130"/></td>
				    			<input type="hidden" name="idProducto" value="A111130">
				    			<input type="hidden" name="producto" value="Agua Mineral Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/agualimon.jpg" alt="agualimon" style="width:130px;height:100px"></td>
			    <td>Agua de Limon</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Chico"></td>
				    			<td> <input type="text" name="mililitros" value="600ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="6"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,6,'A112020')"/></td>
				    			<td> <input name="calculado" type="text" id="A112020"/></td>
				    			<input type="hidden" name="idProducto" value="A112020">
				    			<input type="hidden" name="producto" value="Agua Limon Bote Chico">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'A112030')"/></td>
				    			<td> <input name="calculado" type="text" id="A112030"/></td>
				    			<input type="hidden" name="idProducto" value="A112030">
				    			<input type="hidden" name="producto" value="Agua Limon Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Misil"></td>
				    			<td> <input type="text" name="mililitros" value="1500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="15"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,15,'A112031')"/></td>
				    			<td> <input name="calculado" type="text" id="A112031"/></td>
				    			<input type="hidden" name="idProducto" value="A112031">
				    			<input type="hidden" name="producto" value="Agua Limon Misil">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Galon Plus"></td>
				    			<td> <input type="text" name="mililitros" value="5000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="40"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,40,'A112040')"/></td>
				    			<td> <input name="calculado" type="text" id="A112040"/></td>
				    			<input type="hidden" name="idProducto" value="A112040">
				    			<input type="hidden" name="producto" value="Agua Limon Galon Plus">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/agualimonmineral.jpg" alt="agualimonmineral" style="width:130px;height:100px"></td>
			    <td>Agua de limon mineral</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Chico"></td>
				    			<td> <input type="text" name="mililitros" value="600ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="6"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,6,'A112120')"/></td>
				    			<td> <input name="calculado" type="text" id="A112120"/></td>
				    			<input type="hidden" name="idProducto" value="A112120">
				    			<input type="hidden" name="producto" value="Agua Limon Mineral Chico">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'A112130')"/></td>
				    			<td> <input name="calculado" type="text" id="A112130"/></td>
				    			<input type="hidden" name="idProducto" value="A112130">
				    			<input type="hidden" name="producto" value="Agua Limon Mineral Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/aguajamaica.jpg" alt="aguajamaica" style="width:130px;height:100px"></td>
			    <td>Agua de Jamaica</td>		
			  <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Bote Chico"></td>
				    			<td> <input type="text" name="mililitros" value="600ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="6"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,6,'A113020')"/></td>
				    			<td> <input name="calculado" type="text" id="A113020"/></td>
				    			<input type="hidden" name="idProducto" value="A113020">
				    			<input type="hidden" name="producto" value="Agua Jamaica Bote Chico">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="10"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,10,'A113030')"/></td>
				    			<td> <input name="calculado" type="text" id="A113030"/></td>
				    			<input type="hidden" name="idProducto" value="A113030">
				    			<input type="hidden" name="producto" value="Agua Jamaica Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Misil"></td>
				    			<td> <input type="text" name="mililitros" value="1500ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="15"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,15,'A113031')"/></td>
				    			<td> <input name="calculado" type="text" id="A113031"/></td>
				    			<input type="hidden" name="idProducto" value="A113031">
				    			<input type="hidden" name="producto" value="Agua Jamaica Misil">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Galon Plus"></td>
				    			<td> <input type="text" name="mililitros" value="5000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="40"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,40,'A113040')"/></td>
				    			<td> <input name="calculado" type="text" id="A113040"/></td>
				    			<input type="hidden" name="idProducto" value="A113040">
				    			<input type="hidden" name="producto" value="Agua Jamaica Galon Plus">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/jugonaranja.jpg" alt="jugonaranja" style="width:130px;height:100px"></td>
			    <td>Jugo de Naranja</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J011010')"/></td>
				    			<td> <input name="calculado" type="text" id="J011010"/></td>
				    			<input type="hidden" name="idProducto" value="J011010">
				    			<input type="hidden" name="producto" value="Jugo Naranja Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J011030')"/></td>
				    			<td> <input name="calculado" type="text" id="J011030"/></td>
				    			<input type="hidden" name="idProducto" value="J011030">
				    			<input type="hidden" name="producto" value="Jugo Naranja Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J011032')"/></td>
				    			<td> <input name="calculado" type="text" id="J011032"/></td>
				    			<input type="hidden" name="idProducto" value="J011032">
				    			<input type="hidden" name="producto" value="Jugo Naranja Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/jugonaranjasinpulpa.jpg" alt="jugonaranjasinpulpa" style="width:130px;height:100px"></td>
			    <td>Jugo de Naranja sin pulpa</td>		
			     <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J011110')"/></td>
				    			<td> <input name="calculado" type="text" id="J011110"/></td>
				    			<input type="hidden" name="idProducto" value="J011110">
				    			<input type="hidden" name="producto" value="Jugo Naranja s/p Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J011130')"/></td>
				    			<td> <input name="calculado" type="text" id="J011130"/></td>
				    			<input type="hidden" name="idProducto" value="J011130">
				    			<input type="hidden" name="producto" value="Jugo Naranja s/p Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J011132')"/></td>
				    			<td> <input name="calculado" type="text" id="J011132"/></td>
				    			<input type="hidden" name="idProducto" value="J011132">
				    			<input type="hidden" name="producto" value="Jugo Naranja s/p Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			  <tr>
			    <td><img src="fotos/jugouva.jpg" alt="jugouva" style="width:130px;height:100px"></td>
			    <td>Jugo de Uva</td>		
			     <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J012010')"/></td>
				    			<td> <input name="calculado" type="text" id="J012010"/></td>
				    			<input type="hidden" name="idProducto" value="J012010">
				    			<input type="hidden" name="producto" value="Jugo Uva Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J012030')"/></td>
				    			<td> <input name="calculado" type="text" id="J012030"/></td>
				    			<input type="hidden" name="idProducto" value="J012030">
				    			<input type="hidden" name="producto" value="Jugo Uva Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J012032')"/></td>
				    			<td> <input name="calculado" type="text" id="J012032"/></td>
				    			<input type="hidden" name="idProducto" value="J012032">
				    			<input type="hidden" name="producto" value="Jugo Uva Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			   <tr>
			    <td><img src="fotos/jugopina.jpg" alt="jugopina" style="width:130px;height:100px"></td>
			    <td>Jugo de Piña</td>		
			    <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J013010')"/></td>
				    			<td> <input name="calculado" type="text" id="J013010"/></td>
				    			<input type="hidden" name="idProducto" value="J013010">
				    			<input type="hidden" name="producto" value="Jugo Pina Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J013030')"/></td>
				    			<td> <input name="calculado" type="text" id="J013030"/></td>
				    			<input type="hidden" name="idProducto" value="J013030">
				    			<input type="hidden" name="producto" value="Jugo Pina Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J013032')"/></td>
				    			<td> <input name="calculado" type="text" id="J013032"/></td>
				    			<input type="hidden" name="idProducto" value="J013032">
				    			<input type="hidden" name="producto" value="Jugo Pina Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			   <tr>
			    <td><img src="fotos/jugodurazno.jpg" alt="jugodurazno" style="width:130px;height:100px"></td>
			    <td>Jugo de Durazno</td>		
			     <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J014010')"/></td>
				    			<td> <input name="calculado" type="text" id="J014010"/></td>
				    			<input type="hidden" name="idProducto" value="J014010">
				    			<input type="hidden" name="producto" value="Jugo Durazno Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J014030')"/></td>
				    			<td> <input name="calculado" type="text" id="J014030"/></td>
				    			<input type="hidden" name="idProducto" value="J014030">
				    			<input type="hidden" name="producto" value="Jugo Durazno Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J014032')"/></td>
				    			<td> <input name="calculado" type="text" id="J014032"/></td>
				    			<input type="hidden" name="idProducto" value="J014032">
				    			<input type="hidden" name="producto" value="Jugo Durazno Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			   <tr>
			    <td><img src="fotos/jugomanzana.jpg" alt="jugomanzana" style="width:130px;height:100px"></td>
			    <td>Jugo de Manzana</td>		
			     <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J015010')"/></td>
				    			<td> <input name="calculado" type="text" id="J015010"/></td>
				    			<input type="hidden" name="idProducto" value="J015010">
				    			<input type="hidden" name="producto" value="Jugo Manzana Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J015030')"/></td>
				    			<td> <input name="calculado" type="text" id="J015030"/></td>
				    			<input type="hidden" name="idProducto" value="J015030">
				    			<input type="hidden" name="producto" value="Jugo Manzana Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J015032')"/></td>
				    			<td> <input name="calculado" type="text" id="J015032"/></td>
				    			<input type="hidden" name="idProducto" value="J015032">
				    			<input type="hidden" name="producto" value="Jugo Manzana Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			   <tr>
			    <td><img src="fotos/jugomango.jpg" alt="jugomango" style="width:130px;height:100px"></td>
			    <td>Jugo de Mango</td>		
			     <td>
			    	<table>
			    		<tr>
			    			<td>Tamaño</td>
			    			<td>Volumen</td>
			    			<td>Precio </td>
			           		<td>Cantidad</td>
			    			<td>Total</td>
			    			<td>Agregar</td>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Lata"></td>
				    			<td> <input type="text" name="mililitros" value="355ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="7"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,7,'J016010')"/></td>
				    			<td> <input name="calculado" type="text" id="J016010"/></td>
				    			<input type="hidden" name="idProducto" value="J016010">
				    			<input type="hidden" name="producto" value="Jugo Mango Lata">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Personal"></td>
				    			<td> <input type="text" name="mililitros" value="1000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="20"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,20,'J016030')"/></td>
				    			<td> <input name="calculado" type="text" id="J016030"/></td>
				    			<input type="hidden" name="idProducto" value="J016030">
				    			<input type="hidden" name="producto" value="Jugo Mango Personal">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		<tr>
			    			<form action="carrito.php" method="POST">
				    			<td> <input type="text" name="tamano" value="Amigos"></td>
				    			<td> <input type="text" name="mililitros" value="2000ml"></td>
				    			<td> <input type="text" name="precioUnitario" value="32"></td>
				           		<td> <input name= "cantidad" type="text" onblur="calcula(this,32,'J016032')"/></td>
				    			<td> <input name="calculado" type="text" id="J016032"/></td>
				    			<input type="hidden" name="idProducto" value="J016032">
				    			<input type="hidden" name="producto" value="Jugo Mango Amigos">
				    			<td><input type="submit"></td>
			    			</form>
			    		</tr>
			    		
			    		
			    	</table>
			    </td>
			  </tr>
			</table>
		</div>
	</body>	
</html>