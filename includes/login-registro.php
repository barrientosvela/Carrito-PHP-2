<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
require('includes/conexion.php');
require('includes/utiles.php');
$userError = "";
$_SESSION['autenticado'] = "no";
if (isset($_REQUEST["origen"])) {
    $origen = limpiar($_REQUEST["origen"]);
    if ($origen == "login") {
        // busca datos del login en la db y los comprueba
        $user = limpiar($_REQUEST['user']);
        $pass = limpiar($_REQUEST['pass']);
        // Consulta SQL preparada
        $sqlTotal = "SELECT * FROM user WHERE correo = '$user'";
        $resTotal = $conect->query($sqlTotal);

        if (mysqli_num_rows($resTotal) > 0) {
            $row = mysqli_fetch_array($resTotal);
            $rNombre = $row[1];
            $rUser = $row[2];
            $rPass = $row[3];
            $rAdmin = $row[6];

            $_SESSION['user'] = $rUser;
            $_SESSION['nombre'] = $rNombre;
            $_SESSION['administrador'] = $rAdmin;
            $pass = md5($pass);
            if ($user != $rUser || $pass != $rPass) {
                $userError = "Usuario o contraseña incorrecta";
            } else {
                $_SESSION['autenticado'] = "si";
            }
        } else {
            $userError = "Usuario no registrado";
        }
    } else {
        // inserta datos de registro de usuario
        $name = limpiar($_REQUEST['nombre']);
        $email = limpiar($_REQUEST['email']);
        $pass = limpiar($_REQUEST['pass']);
        $direccion = limpiar($_REQUEST['direccion']);
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
            // Consulta SQL preparada
            $insertUser = "INSERT INTO user (nombre, correo, contrasenia, fechaReg, direccion, administrador) 
      VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conect->prepare($insertUser);
            $stmt->bind_param("ssssss", $name, $email, $pass, $fecha, $direccion, $admin);
            $stmt->execute();
            $_SESSION['autenticado'] = "si";
        } catch (Exception $e) {
            $userError = "Error: " . $e;
        }
    }
}
$_SESSION['userError'] = $userError;
