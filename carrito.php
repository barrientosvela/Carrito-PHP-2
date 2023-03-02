<?php
require('includes/conexion.php');
require('includes/utiles.php');

$titulo = limpiar($_REQUEST['titulo']);
$autor = limpiar($_REQUEST['autor']);
$portada = limpiar($_REQUEST['portada']);
$cantidad = limpiar($_REQUEST['cantidad']);
$precio = limpiar($_REQUEST['precio']);

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
} else {
    $user = "";
}

// Verificar si el usuario está conectado
if (isset($_SESSION['user'])) {
    // Obtener el ID del usuario
    $user_id = $_SESSION['user'];

    // Verificar si el usuario ya tiene un registro de carrito
    $sql = "SELECT * FROM carrito WHERE correo = ?";
    $stmt = $conect->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $carrito = $stmt->fetch();

    if (!$carrito) {
        // Crear un nuevo registro de carrito
        $libros = [
            [
                'id' => "",
                'titulo' => $titulo,
                'autor' => $autor,
                'precio' => $precio,
                'cantidad' => $cantidad
            ]
        ];
        $total = $precio;
        $fecha = date('Y-m-d');
        $stmt = $pdo->prepare("INSERT INTO carrito (id, user_correo, libros, total, fecha) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute(["", $user_id, json_encode($libros), $total, $fecha]);
    } else {
        // Actualizar el registro de carrito existente
        $libros = json_decode($carrito['libros'], true);
        $libro_existente = false;
        foreach ($libros as &$libro_actual) {
            if ($libro_actual['titulo'] == $libro['titulo']) {
                $libro_actual['cantidad']++;
                $libro_existente = true;
                break;
            }
        }
        if (!$libro_existente) {
            $libros[] = [
                'id' => "",
                'titulo' => $titulo,
                'autor' => $autor,
                'precio' => $precio,
                'cantidad' => $cantidad
            ];
        }
        $total = $carrito['total'] + $libro['Precio'];
        $stmt = $pdo->prepare("UPDATE carrito SET libros = ?, total = ? WHERE user_correo = ?");
        $stmt->execute([json_encode($libros), $total, $user_id]);
    }
}
$sqlTotal = "SELECT * FROM carrito WHERE user_correo = $user";
$resTotal = $conect->query($sqlTotal);
?>

<?php require('includes/templates/header.php') ?>


<h4 class="text-center p-5">Cantidad libros en el carrito: <?php mysqli_num_rows($resTotal) ?></h4>
<!-- Muestra tabla con resultados -->
<div class="container">
    <table class="table table-hover">
        <tr class="table-dark">
            <th>titulo</th>
            <th>autor</th>
            <th>precio</th>
            <th>cantidad</th>
            <th></th>
        </tr>
        <?php
        // Mientras haya resultado de la consulta muestra otra fila en la tabla
        while ($arrayCunsulta = mysqli_fetch_array($resTotal)) {
        ?>
            <tr>
                <td><?php echo $arrayCunsulta['titulo'] ?></td>
                <td><?php echo $arrayCunsulta['autor'] ?></td>
                <td><?php echo $arrayCunsulta['precio'] ?></td>
                <td><?php echo $arrayCunsulta['cantidad'] ?></td>
                </tr>
                <form method="REQUEST" action="borrarCarrito.php" style="margin: 10px;">
                    <input type="hidden" name="correo" value="<?php echo $arrayCunsulta['user_correo'] ?>">
                    <button type="submit">Eliminar el carrito</button>
                </form>
        <?php
        }
        ?>
    </table>
</div>


<?php require('includes/templates/footer.php') ?>