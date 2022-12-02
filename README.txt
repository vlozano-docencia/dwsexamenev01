Nombre de tabla categoria --> categorias
bd.php, linea 64. categorias --> CodCat
correo.php cambiada ruta de autoload.php
bd.php, linea 104. Pedido --> CodPed
bd.php, linea 104. Producto --> CodProd
carrito.php, cambiar comprobacion de carrito vacio para mostrar mensaje.

----

Añadida columna Rol a la tabla restaurantes. Valores INT(1):
	- 0 -> restaurante
	- 1 -> gestor pedidos
	- 2 -> administrador

Añadidos valores de ejemplo:
INSERT INTO `restaurantes`(`Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES ('pedidos@empresa.com','1234','España','28014','Madrid','Calle Ruiz de Alarcon, 23','1')
INSERT INTO `restaurantes`(`Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES ('admin@empresa.com','1234','España','28014','Madrid','Calle Ruiz de Alarcon, 23','2')