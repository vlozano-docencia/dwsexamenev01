<?php 
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
$cod = $_POST['cod'];
$res = cambiar_estado($cod);
if (!$res){
	echo "Error.";
	var_export($res);
}else{
	header("Location: pedidos.php");
}

