<?php
require('includes/templates/header.php');

$url = 'https://www.textos.info/titulos.atom'; // URL del archivo XML
$xml = simplexml_load_file($url); // Carga el archivo XML

?>
<div class="container">
    <!-- Será el listado de libros -->
    <div class="container">
        <h1 class="m-3 p-3 text-center">Listado alfabético de textos</h1>
        <hr>
        <br class="p-3">
        <h3 class="text-center pb-4"><?php echo $xml->subtitle ?></h3>
        <div class="row">
            <!-- Recorre todas las entradas y muestra los datos -->
            <?php foreach ($xml->entry as $entry) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="text-center">
                                        <?php echo $entry->title;
                                        echo "<a href='https://www.textos.info/autores&letter=".$entry->title."'></a>"
                                        ?>
                                    </h1>
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