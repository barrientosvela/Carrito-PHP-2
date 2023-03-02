<?php
require('includes/templates/header.php');

$url = 'https://www.textos.info/novedades.atom'; // URL del archivo XML
$xml = simplexml_load_file($url); // Carga el archivo XML

?>
<div class="container">
    <!-- Será el listado de libros -->
    <div class="container">
        <h1 class="m-3 p-3 text-center">Las últimas Novedades</h1>
        <hr>
        <br class="p-3">
        <h3 class="text-center pb-4"><?php echo $xml->subtitle ?></h3>
        <div class="row">
            <!-- Recorre todas las entradas y muestra los datos -->
            <?php foreach ($xml->entry as $entry) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo $entry->link[4]['href'] ?>" class="card-img img-fluid rounded-start" alt="portada">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $entry->title ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $entry->author->name ?>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Tiene: <?php echo $entry->children('dcterms', true)->extent ?></small>
                                    </p>
                                    <p class="card-text"><small class="text-muted"><?php echo "Idioma: " . $entry->children('dcterms', true)->language ?></small>
                                    </p>
                                    <h3><?php $precio = rand(0, 30);
                                        echo $precio . " €" ?></h3>
                                    <form method="REQUEST" action="carrito.php">
                                        <input type="hidden" name="id" value="<?php echo $entry->id ?>">
                                        <input type="hidden" name="titulo" value="<?php echo $entry->title ?>">
                                        <input type="hidden" name="autor" value="<?php echo $entry->author->name ?>">
                                        <input type="hidden" name="precio" value="<?php echo $precio ?>">
                                        <input type="hidden" name="portada" value="<?php echo $entry->link[4]['href'] ?>">
                                        <input type="hidden" name="cantidad" value="1">
                                        <input type="submit" class="btn btn-primary" value="Agregar al carrito">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php require('includes/templates/footer.php') ?>