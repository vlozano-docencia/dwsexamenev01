<header>
 Usuario: <?php echo $_SESSION['usuario']['correo']?>
 <?php 
 if($_SESSION['usuario']['Rol']==0){ 
    ?>
 <a href="categorias.php">Home</a>
 <a href="carrito.php">Ver carrito</a> 
<?php 
}
if($_SESSION['usuario']['Rol']==1){ 
?>
 <a href="pedidos.php">Ver Pedidos</a>
<?php
}
if($_SESSION['usuario']['Rol']==2){ 
?>
 <a href="restaurantes.php">Ver Restaurantes</a>
<?php } ?>
 <a href="logout.php">Cerrar sesión</a>
</header>
<hr>