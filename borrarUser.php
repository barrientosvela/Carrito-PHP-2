<?php
require('includes/conexion.php');
require('includes/utiles.php');

$id = limpiar($_REQUEST['correo']);
$sql = "DELETE FROM user WHERE correo = ?";
$stmt = $conect->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
header('Location: user.php');
exit;
