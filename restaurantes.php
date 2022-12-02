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
		$usuarios = cargar_usuarios();		
		if($usuarios === FALSE){
			echo "<p class='error'>Error al conectar con la base datos</p>";
			exit;
		}
		echo "<h1>". "USUARIOS". "</h1>";
	
		echo "<table>"; //abrir la tabla
		echo "<tr><th>Correo</th><th>Clave</th><th>Pais</th><th>CP</th><th>Ciudad</th><th>Direccion</th><th>Rol</th></tr>";
		foreach($usuarios as $usuario){
			$cod = $usuario['CodRes'];
			$Correo = $usuario['Correo'];
			$Clave = $usuario['Clave'];
			$Pais = $usuario['Pais'];	
			$CP = $usuario['CP'];
			$Ciudad = $usuario['Ciudad'];
			$Direccion = $usuario['Direccion'];							
			$Rol = $usuario['Rol'];
			echo "<tr><form action = 'modificar.php' method = 'POST'><td><input type='text' name=Correo value=$Correo></td><td><input type='text'  name=Clave value=$Clave></td><td><input type='text'  name=Pais value=$Pais></td><td><input type='text'  name=CP value=$CP></td><td><input type='text'  name=Ciudad value=$Ciudad></td><td><input type='text'  name=Direccion value='$Direccion'></td><td><input type='text'  name=Rol value=$Rol></td>
			<td>
			<input type = 'submit' value='Modificar'><input name = 'cod' type='hidden' value = '$cod'>
			</td></form></tr>";
		}
		echo "</table>";
		echo "<h1>". "CREAR NUEVO USUARIO". "</h1>";
	
		echo "<table>"; //abrir la tabla
		echo "<tr><th>Correo</th><th>Clave</th><th>Pais</th><th>CP</th><th>Ciudad</th><th>Direccion</th><th>Rol</th></tr>";
		
		echo "<tr><form action = 'crear.php' method = 'POST'><td><input type='text' name=Correo ></td><td><input type='text'  name=Clave ></td><td><input type='text'  name=Pais ></td><td><input type='text'  name=CP ></td><td><input type='text'  name=Ciudad></td><td><input type='text'  name=Direccion></td><td><input type='text'  name=Rol></td>
		<td>
		<input type = 'submit' value='Crear'>
		</td></form></tr>";
		
		echo "</table>";
		?>				
	</body>
</html>