<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
	$rol = $_SESSION["usuario"]["Rol"];

	if($rol!=="2"){
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Tabla de usuarios</title>		
	</head>
	<body>
		<?php 
		require 'cabecera.php';
		$pedidos = cargar_pedidos();		
		if($pedidos === FALSE){
			echo "<p class='error'>Error al conectar con la base datos</p>";
			exit;
		}
		echo "<h1>". "USUARIOS". "</h1>";
	
		echo "<table>"; //abrir la tabla
		echo "<tr><th>CodPed</th><th>Fecha</th><th>Enviado</th><th>Restaurante</th><th>Modificar</th></tr>";
		foreach($pedidos as $pedido){
			$cod = $pedido['CodPed'];
			$fecha = $pedido['Fecha'];
			$enviado = $pedido['Enviado'];
			$restaurante = $pedido['Restaurante'];							
			echo "<tr><td>$cod</td><td>$fecha</td><td>$enviado</td><td>$restaurante</td>
			<td><form action = 'cambiar_estado.php' method = 'POST'>
			<input type = 'submit' value='Modificar'><input name = 'cod' type='hidden' value = '$cod'>
			</form></td></tr>";
		}
		echo "</table>";
		?>				
	</body>
</html>