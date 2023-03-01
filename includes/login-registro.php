<?php
session_start();
require('../includes/conexion.php');
require('../includes/utiles.php');
$userError = "";
$origen = limpiar($_REQUEST["origen"]);
$_SESSION['autenticado'] = "no";

if ($origen == "login") {

    $user = limpiar($_REQUEST['user']);
    $pass = limpiar($_REQUEST['pass']);
    $result = mysqli_query($conect, "SELECT * FROM user WHERE correo = '$user'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $rNombre = $row[1];
        $rUser = $row[2];
        $rPass = $row[3];
        $rAdmin = $row[6];

        $_SESSION['nombre'] = $rNombre;
        $_SESSION['administrador'] = $rAdmin;
        $pass = md5($pass);
        if ($user != $rUser || $pass != $rPass) {
            $userError = "Usuario o contraseña incorrecta--".$rPass;
        } else {
            $_SESSION['autenticado'] = "si";
        }
    } else {
        $userError = "Usuario no registrado";
    }
} else {
    if ($origen == "registro") {
        $name = limpiar($_REQUEST['nombre']);
        $email = limpiar($_REQUEST['email']);
        $pass = limpiar($_REQUEST['pass']);
        $fecha = date('Y-m-d');

        $_SESSION['nombre'] = $name;
        $_SESSION['user'] = $email;
        $pass = md5($pass);
        if (isset($_REQUEST['admin'])) {
            $admin = $_SESSION['administrador'] = "si";
        } else {
            $admin = $_SESSION['administrador'] = "no";
        }
        try {
            mysqli_query($conect, "INSERT INTO user (id, nombre, correo, contrasenia, fechaReg, direccion, administrador) 
                VALUES ('','$name', '$email', '$pass', '$fecha','','$admin')");
            $_SESSION['autenticado'] = "si";
        } catch (Exception $e) {
            $userError = "Error: " . $e;
        }
    } else {
        echo "<h3>No puede acceder a esta ruta</h3>";
    }
}
$_SESSION['userError'] = $userError;
header('Location: ../index.php');
?>
