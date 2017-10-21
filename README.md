# Listasenlazadas
Son cajas de seleccion en HTML (SELECT) que depende alguno del otro cuando se elige una opcion.


#EJERCICIO4 

El ejercicio esta hecho con ajax y usa las siguientes tablas en el motor de base de datos MYSQL.

CREATE TABLE `categorias` (
 `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
 `categoria` varchar(255) NOT NULL,
 PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1


CREATE TABLE `subcategorias` (
 `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT,
 `subcategoria` varchar(255) NOT NULL,
 `id_categoria` int(11) NOT NULL,
 PRIMARY KEY (`id_subcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1


