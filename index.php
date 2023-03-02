<?php
require('includes/templates/header.php');
?>
<!-- contenido -->
<!-- Carruesel ===========================-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button id="btn-carrusel" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button id="btn-carrusel" type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button id="btn-carrusel" type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="img-carrusel" src="images/carrusel/libro1.jpg" alt="">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Aventuras entre las páginas.</h1>
          <p>Descubre un mundo de aventuras entre las páginas de nuestros libros.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img id="img-carrusel" src="images/carrusel/libro2.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1 class="">Historias para todos los gustos.</h1>
          <p>En nuestra librería encontrarás historias para todas las edades y gustos.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img id="img-carrusel" src="images/carrusel/libro3.jpg" alt="">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Sumérgete en la magia de la literatura.</h1>
          <p>Sumérgete en la magia de la literatura con nuestra selección de libros.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<!-- Marketing  ================================================== -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img src="images/libro.jpg" class="rounded-circle" width="140" height="140" alt="">
      <h2 class="fw-normal">Titulo</h2>
      <p>Si eres un amante de la lectura y necesitas encontrar un libro por su título, ¡estás en el lugar
        correcto! En nuestra tienda en línea, ofrecemos una amplia selección de libros de todos los
        géneros y títulos, para que puedas encontrar fácilmente el libro que necesitas.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="images/escritor.jpg" class="rounded-circle" width="140" height="140" alt="">
      <h2 class="fw-normal">Autor</h2>
      <p>Si estás buscando libros por autor, estás en el lugar correcto. Ofrecemos una gran variedad de
        libros de distintos géneros y autores para que puedas encontrar el libro que necesitas de manera
        sencilla y rápida.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="images/editorial.jpg" class="rounded-circle" width="140" height="140" alt="">
      <h2 class="fw-normal">Editorial</h2>
      <p>Si estás buscando libros por editorial, has llegado al lugar adecuado. En nuestra tienda en
        línea, ofrecemos una amplia selección de libros de diferentes editoriales para que puedas
        encontrar el libro que necesitas de manera sencilla y rápida.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- Articulos ========================================-->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">¡Unidos por los libros! <span class="text-muted"> Tu próxima aventura te espera.</span></h2>
      <p class="lead">En nuestra tienda de libros, te invitamos a explorar un mundo de historias emocionantes y conocimientos valiosos.
        Con una amplia selección de géneros y títulos, estamos seguros de que encontrarás algo que te apasione y te haga disfrutar de la lectura.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
      </svg>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading fw-normal lh-1">No juzgues un libro por su portada.<span class="text-muted"> Descubre su verdadera historia.</span></h2>
      <p class="lead">A menudo, las portadas pueden ser engañosas y no reflejar realmente la calidad del contenido que hay en su interior. Por eso, en nuestra
        tienda de libros, nos aseguramos de seleccionar cuidadosamente cada título y ofrecer solo lo mejor a nuestros clientes. ¡Ven y descubre las joyas que
        tenemos esperándote!</p>
    </div>
    <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" />
      </svg>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">Un libro es un viaje que puedes llevar contigo a cualquier parte.</h2>
      <p class="lead">Ya sea que estés buscando un escape de la rutina diaria, o quieras expandir tus horizontes y aprender algo nuevo, un buen libro es la compañía perfecta.
        En nuestra tienda de libros, creemos en la magia de la lectura y estamos comprometidos a ayudarte a encontrar los mejores libros para satisfacer tus necesidades y gustos.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
      </svg>
    </div>
  </div>
  <?php require('includes/templates/footer.php') ?>