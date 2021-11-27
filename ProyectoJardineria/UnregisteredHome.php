<!DOCTYPE html>
<html lang="en">
<head>
    <!--Default-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <title>Over the garden</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="UnregisteredHome.php">Over the garden</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="UnregisteredHome.php">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="Servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="Productos.php">Productos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-gold" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item px-3">
                      <a href="Log in.php"><ion-icon size="large" name="person-circle-outline"></ion-icon></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/fotos-de-jardines.png" alt="First slide">
                <div class="carousel-caption">
                    <h3 class="d-block"> Mira nuestros arreglos</h3>
                    <p class="lead d-none d-sm-block">gran variedad en arreglos</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/paisajismo.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h3 class="d-block">Mira nuestras plantas y flores</h3>
                    <p class="lead d-none d-sm-block">gran variedad en arreglos</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/jardines.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h3 class="d-block">Mira los diseños de jardines</h3>
                    <p class="lead d-none d-sm-block">gran variedad en arreglos</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-light">Flores</h2>
            <p class="lead text-muted text-justify">Recibir un ramos de rosas o un arreglo flora puede ser una sorpresa y un momento especial que no quieres olvidar fácilmente. </p>
            <div>
              <div class="mt-6">
              <a href="#">
                <img src="img/flowers.jpg" alt="">
                <div class="bg-light p-4">
                  <h4 class="text-dark">5 consejos para el cuidado de tus flores</h4>
                  <p class="text-muted mb-0">Para que tus flores luzcan más tiempo es importante cuidarlas y aquí te compartimos unos interesantes tips que seguramente no sabías.</p>
                </div>
              </a>
              </div>
              <div class="mt-6">
                <a href="#">
                  <img src="img/flores2.jpg" alt="">
                  <div class="bg-light p-4">
                    <h4 class="text-dark">Las 10 flores favoritas de las mujeres</h4>
                    <p class="text-muted mb-0">Todas las flores provocan sonrisas, hasta aquellas que enviamos a un funeral y tienen el propósito aliviar un poco el dolor.</p>
                  </div>
                </a>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mt-6">
              <a href="#">
                <img src="img/Flores_de.jpeg" alt="">
                <div class="bg-light p-4">
                  <h4 class="text-dark">Razones por las que las flores ayudan a mejorar el ambiente.</h4>
                  <p class="text-muted mb-0">Las flores tienen un impacto muy grande y positivo en el ambiente.</p>
                </div>
              </a>
              </div>
              <div class="mt-6">
                <a href="#">
                  <img src="img/Rutas-Agua.jpg" alt="">
                  <div class="bg-light p-4">
                    <h4 class="text-dark">¿Por qué a las mujeres les gustan las flores?</h4>
                    <p class="text-muted mb-0">Estudios psicológicos demuestran impresionantes impactos de las flores en todas las personas, especialmente las mujeres.</p>
                  </div>
                </a>
                </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-6">
        <p class="text-gold mb-0">Aun hay más</p>
        <a href="#" class="text-muted">Dale click para mirar <ion-icon name="arrow-forward-outline"></ion-icon> </a>
      </div>
    </section>

    <section>
      <div class="container bg-img">
        <h2 class="text-light">Id est laborum</h2>
        <p class="lead text-muted">Duis aute irure dolor in reprehenderit in voluptate</p>
        <div class="row mt-6">
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Excepteur </span> sint occaecat</p>
                  <h5>officia deserunt mollit</h5>
                </div>
                <img src="img/flores6.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Excepteur </span> sint occaecat</p>
                  <h5>officia deserunt mollit</h5>
                </div>
                <img src="img/flores4.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Excepteur </span> sint occaecat</p>
                  <h5>officia deserunt mollit</h5>
                </div>
                <img src="img/flores5.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Excepteur </span> sint occaecat</p>
                  <h5>officia deserunt mollit</h5>
                </div>
                <img src="img/flores8.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-light py-4">
      <div class="container">
        <div class="row">
          <div class="col md-5">
            <ul class="list-inline mb-0">
              <li class="list-inline-item lead mx-2"><ion-icon name="logo-facebook"></ion-icon></li>
              <li class="list-inline-item lead mx-2"><ion-icon name="logo-twitter"></ion-icon></li>
              <li class="list-inline-item lead mx-2"><ion-icon name="logo-instagram"></ion-icon></li>
            </ul>
          </div>
          <div class="col md-5 text-sm-right">
            <small>©2020 All Rights Reserved</small>
          </div>
        </div>
      </div>
    </footer>
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--icons-->
    <script  src = "https://unpkg.com/ionicons@5.0.0/dist/ionicons.js" > </script>
</body>
</html>