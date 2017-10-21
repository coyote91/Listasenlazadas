<?php
/**
* @Project Login PHP-MYSQL
* @copyright (c) 2016
* @author David Fernando Ramirez Gonzalez <david.f.r91@hotmail.com>
* @license GNU-GPL  http://www.gnu.org/licenses/ http://es.wikipedia.org/wiki/GNU_General_Public_License
* @since Version 1.0
*/

$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
	$conexion = new PDO('mysql:host=localhost;dbname=transcarga', 'root','',$opciones );
  //$conexion = new PDO('mysql:host=localhost;dbname=id982014_transcarga', 'id982014_root','prueba',$opciones );
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);




?>
