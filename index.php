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
          <h1>TL</h1>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-3 text-white">Inicio</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Novedades</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Recomendados</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Más leidos</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Sobre nosotros</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="#" method="REQUEST">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" name="buscar">
        </form>

        <div class="text-end">
          <a href="registro.html"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="#"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>
  </header>
  <!-- contenido -->
  <main>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button id="btn-carrusel" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button id="btn-carrusel" type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button id="btn-carrusel" type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img id="img-carrusel" src="/images/carrusel/libro1.jpg" alt="">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Aventuras entre las páginas.</h1>
                    <p>Descubre un mundo de aventuras entre las páginas de nuestros libros.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Genero Aventuras</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img id="img-carrusel" src="/images/carrusel/libro2.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="">Historias para todos los gustos.</h1>
                    <p>En nuestra librería encontrarás historias para todas las edades y gustos.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Genero Historias</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img id="img-carrusel" src="/images/carrusel/libro3.jpg" alt="">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Sumérgete en la magia de la literatura.</h1>
                    <p>Sumérgete en la magia de la literatura con nuestra selección de libros.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Genero Fantasia</a></p>
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


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img src="/images/libro.jpg" class="rounded-circle" width="140" height="140" alt="">
            <h2 class="fw-normal">Titulo</h2>
            <p>Si eres un amante de la lectura y necesitas encontrar un libro por su título, ¡estás en el lugar
                correcto! En nuestra tienda en línea, ofrecemos una amplia selección de libros de todos los
                géneros y títulos, para que puedas encontrar fácilmente el libro que necesitas.</p>
            <p><a class="btn btn-secondary" href="#">Leer más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="/images/escritor.jpg" class="rounded-circle" width="140" height="140" alt="">
            <h2 class="fw-normal">Autor</h2>
            <p>Si estás buscando libros por autor, estás en el lugar correcto. Ofrecemos una gran variedad de
                libros de distintos géneros y autores para que puedas encontrar el libro que necesitas de manera
                sencilla y rápida.</p>
            <p><a class="btn btn-secondary" href="#">Leer más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="/images/editorial.jpg" class="rounded-circle" width="140" height="140" alt="">
            <h2 class="fw-normal">Editorial</h2>
            <p>Si estás buscando libros por editorial, has llegado al lugar adecuado. En nuestra tienda en
                línea, ofrecemos una amplia selección de libros de diferentes editoriales para que puedas
                encontrar el libro que necesitas de manera sencilla y rápida.</p>
            <p><a class="btn btn-secondary" href="#">Leer más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                    class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See
                    for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                    class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                really intended to be actually read, simply here to give you a better view of what this would
                look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">
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
</body>

</html>