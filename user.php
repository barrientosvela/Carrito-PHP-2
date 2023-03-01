<?php
require('includes/templates/header.php');
require('includes/conexion.php');

$sqlTotal = "SELECT * FROM user";
$resTotal = $conect->query($sqlTotal);

?>

<h4 class="text-center p-5">Cantidad de usuarios: <?= mysqli_num_rows($resTotal) ?></h4>
<!-- Muestra tabla con resultados -->
<div class="container">
    <table class="table table-hover">
        <tr class="table-dark">
            <th>Nombre</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Fecha de registro</th>
            <th>Administrador</th>
            <th></th>
        </tr>
        <?php
        // Mientras haya resultado de la consulta muestra otra fila en la tabla
        while ($arrayCunsulta = mysqli_fetch_array($resTotal)) {
        ?>
            <tr>
                <td><?php echo $arrayCunsulta['nombre'] ?></td>
                <td><?php echo $arrayCunsulta['correo'] ?></td>
                <td><?php echo $arrayCunsulta['direccion'] ?></td>
                <td><?php echo $arrayCunsulta['fechaReg'] ?></td>
                <td><?php echo $arrayCunsulta['administrador'] ?></td>
                <td>
                    <form method="REQUEST" action="borrarUser.php">
                        <input type="hidden" name="correo" value="<?php echo $arrayCunsulta['correo'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>


<?php require('includes/templates/footer.php') ?>