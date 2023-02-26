<?php session_start();
// Cuando pulsa el boton de Registrar recoje los datos
if (isset($_REQUEST['reg'])) {
    $name = $_REQUEST['nombre'];
    $user = $_REQUEST['nick'];
    $pass = $_REQUEST['pass'];
    $email = $_REQUEST['email'];
    if (isset($_REQUEST['admin'])) {
        $admin = "si";
    } else {
        $admin = "no";
    }
    $fecha = date('Y-m-d', time());

    require('includes/conexion.php');
    try {
        $result = mysqli_query($conect, "INSERT INTO user (id, nombre, correo, contrasenia, fechaReg, direccion, administrador) 
            VALUES ('','$name', '$email', '$pass', '$fecha','','$admin')");
        if ($result) {
            $_SESSION['registro'] = true;
        } else {
            $_SESSION['registro'] = false;
        }
    } catch (Exception $e) {
    }
    header('Location: ../index.php');
} ?>
<!DOCTYPE html>
<html lang="es">
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de libros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/basic.css">
</header>

<body>
    <header class="p-3 bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center px-5 mb-lg-0 text-white text-decoration-none">
                    <h1 id="logo">TL</h1>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-3 text-white">Inicio</a></li>
                    <li><a href="#" class="nav-link px-3 text-white">Novedades</a></li>
                    <li><a href="#" class="nav-link px-3 text-white">Recomendados</a></li>
                    <li><a href="#" class="nav-link px-3 text-white">Más leidos</a></li>
                    <li><a href="#" class="nav-link px-3 text-white">Sobre nosotros</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="#" method="REQUEST">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" name="buscar">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>
                    <a href="registro.html"><button type="button" class="btn btn-warning">Registro</button></a>
                </div>
            </div>
        </div>
    </header>
    <!-- Login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Acceso Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="$_REQUEST" action="logica/validaUser.php">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Usuario / Email:</label>
                            <input type="text" class="form-control" id="recipient-name" name="user">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="recipient-name" name="pass">
                        </div>
                        <div class="mx-3 py-2 bordert">
                            <div class="text-center py-3">
                                <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a>
                                <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a>
                                <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="registro.html"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Registrate</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contenido -->
    <div class="mx-auto col-md-4 p-5 shadow rounded mt-4">
        <h1>Nuevo Usuario</h1>
        <form action="#" class="my-2" method="request">
            <div class="form-group">
                <label for="username">Nombre:</label>
                <input id="nombre" type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="username">Nick:</label>
                <input type="text" class="form-control" name="nick">
            </div>
            <div class="form-group">
                <label for="username">Contraseña:</label>
                <input type="text" class="form-control" name="pass">
            </div>
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="si" name="admin">
                <label class="form-check-label" for="flexCheckDefault">
                    Administrador
                </label>
            </div>
            <button type="submit" class="btn btn-success mt-4" name="reg">Registrar</button>
        </form>
    </div>
    <!-- footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://es-es.facebook.com/" target="_blank"><img id="rrss" src="images/rrss/facebook.png" alt="facebook"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/" target="_blank"><img id="rrss" src="images/rrss/instagram.png" alt="instagram"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://es.linkedin.com/" target="_blank"><img id="rrss" src="images/rrss/linkedin.png" alt="linkedin"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://twitter.com/?lang=es" target="_blank"><img id="rrss" src="images/rrss/gorjeo.png" alt="twitter"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://es.linkedin.com/" target="_blank"><img id="rrss" src="images/rrss/tik-tok.png" alt="tik-tok"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/" target="_blank"><img id="rrss" src="images/rrss/youtube.png" alt="youtube"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.whatsapp.com/?lang=es" target="_blank"><img id="rrss" src="images/rrss/whatsapp.png" alt="whatsapp"></a></li>
            </ul>
        </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>