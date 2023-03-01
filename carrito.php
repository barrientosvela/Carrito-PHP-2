<?php
require('includes/conexion.php');
require('../includes/utiles.php');

$titulo = limpiar($_REQUEST['titulo']);
$autor = limpiar($_REQUEST['autor']);
$portada = limpiar($_REQUEST['portada']);
$cantidad = limpiar($_REQUEST['cantidad']);
$precio = limpiar($_REQUEST['precio']);



?>