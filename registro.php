<?php
require('includes/templates/header.php');
require('includes/conexion.php');
?>
<!-- formulario de registro -->
<div class="mx-auto col-md-4 p-5 shadow rounded mt-4">
    <h1>Nuevo Usuario</h1>
    <form action="#" class="my-2" method="#">
        <input type="hidden" name="origen" value="registro">
        <div class="form-group">
            <label for="username">Nombre:</label>
            <input id="nombre" type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="username">Usuario (correo electronico):</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="username">Contraseña:</label>
            <input type="password" class="form-control" name="pass">
        </div>
        <div class="form-group">
            <label for="username">Dirección:</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="si" name="admin">
            <label class="form-check-label" for="flexCheckDefault">
                Administrador
            </label>
        </div>
        <button type="submit" class="btn btn-success mt-4">Registrar</button>
    </form>
</div>
<?php require('includes/templates/footer.php') ?>