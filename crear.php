<?php 
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
$Correo = $_POST['Correo'];
$Clave = $_POST['Clave'];
$Pais = $_POST['Pais'];	
$CP = $_POST['CP'];
$Ciudad = $_POST['Ciudad'];
$Direccion = $_POST['Direccion'];							
$Rol = $_POST['Rol'];

$res = crear($Correo, $Clave, $Pais, $CP, $Ciudad, $Direccion, $Rol);
if (!$res){
	echo "Error.";
	var_export($res);
}else{
	header("Location: restaurantes.php");
}

