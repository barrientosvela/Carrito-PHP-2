<?php
$host = "localhost"; // Cambiar si tu base de datos se encuentra en otro servidor
$dbname = "libros_db";
$username = "root";
$password = "";

$conect = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos" . mysqli_connect_error();
    exit;
}
?>