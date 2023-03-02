<?php
require('includes/login-registro.php');
if (isset($_SESSION['autenticado'])) {
  $autenticado = $_SESSION['autenticado'];
  $userError = $_SESSION['userError'];
}
?>
<!DOCTYPE html>
<html lang="es">
<header>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de libros</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/basic.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/perfil.css">
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
          <li><a href="<?php echo file_exists('novedades.php') ? 'novedades.php' : '../novedades.php'; ?>" class="nav-link px-3 text-white">Novedades</a></li>
          <li><a href="<?php echo file_exists('populares.php') ? 'populares.php' : '../populares.php'; ?>" class="nav-link px-3 text-white">Más leidos</a></li>
          <li><a href="<?php echo file_exists('titulos.php') ? 'titulos.php' : '../titulos.php'; ?>" class="nav-link px-3 text-white">Títulos</a></li>
          <li><a href="<?php echo file_exists('autores.php') ? 'autores.php' : '../autores.php'; ?>" class="nav-link px-3 text-white">Autores</a></li>
          <li><a href="<?php echo file_exists('etiquetas.php') ? 'etiquetas.php' : '../etiquetas.php'; ?>" class="nav-link px-3 text-white">Etiquetas</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="<?php echo file_exists('busqueda.php') ? 'busqueda.php' : '../busqueda.php'; ?>" method="REQUEST">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" name="buscar">
        </form>
        <?php
        if (isset($autenticado) && $autenticado == "si") {
          $sql = "SELECT * FROM carrito WHERE user_correo = ?";
          $stmt = $conect->prepare($sql);
          $stmt->bind_param("s", $_SESSION['user']);
          $stmt->execute();
          $carrito = $stmt->fetch();
        ?>
          <div class="dropdown text-end">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <p class="m-0"><?php echo $_SESSION['nombre'] ?></p>
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle ms-2">
            </a>
            <ul class="dropdown-menu text-small">
              <?php if ($_SESSION['administrador'] == "si") {
                echo "<li><a class='dropdown-item' href='user.php'>Getión usuarios</a></li>";
              } ?>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="perfil.php?user=$user">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="index.php" onclick="<?php session_destroy() ?>">Cerrar sesión</a></li>
            </ul>
          </div>
        <?php } else { ?>
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>
            <a href="registro.php"><button type="button" class="btn btn-warning">Registro</button></a>
          </div>
        <?php }
        ?>
        <?php if (isset($carrito)) { ?>
          <div>
            <a href="carrito.php"><img src="images/carrito.png" alt="carrito de compras" height="50px" style="padding-left: 150px;"></a>
          </div>
        <?php } ?>
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
          <form method="#" action="#">
            <input type="hidden" name="origen" value="login">
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
                <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="images/rrss/facebook-color.jpeg" alt=""> </a>
                <a href="https://www.google.com" target="_blank" class="px-2"> <img src="images/rrss/google-color.png" alt=""> </a>
                <a href="https://www.github.com" target="_blank" class="px-2"> <img src="images/rrss/github.png" alt=""> </a>
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
  <?php
  if (isset($userError) && $userError != "") { ?>
    <div class="alert alert-warning fade show m-0" role="alert">
      <strong class="mx-1">Advertencia!</strong> <?php echo $userError ?>
    </div>
  <?php } ?>