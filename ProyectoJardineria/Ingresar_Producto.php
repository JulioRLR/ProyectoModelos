<!DOCTYPE html>
<html lang="en">
<head>
    <!--Default-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Registre.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <title>Registrar Producto</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="StockmHome.php">Over the garden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-3">
                    <a class="nav-link" href="StockmHome.php">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                
                <li class="nav-item px-3">
                  <?php
                    session_start();
                    $nombre = $_SESSION['nombre'];

                    if(!isset($nombre))
                    {
                      header("location: Log in.php");
                    }
                    else
                    {
                      echo "<p class='nav-link text-gold'>$nombre </p>";
                    }
                  ?>
                </li>
                <li class="nav-item px-3 dropdown">
                  <a class="nav-link" href="#" id="Acount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><ion-icon size="large" name="archive"></ion-icon></span>
                  </a>
                  <div class="dropdown-menu bg-light" aria-labelledby="Acount">
                    <a href="ListadoProductos.php" class="dropdown-item">Productos</a>
                    <a href="" class="dropdown-item">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a href="" data-toggle="modal" data-target="#ModalCenter" class="dropdown-item">Cerrar Sesion</a>
                  </div>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-gold" href="#">Acerca de</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="modal-dialog text-center mt-6">
      <div class="col-sm-11">
        <div class="modal-content">  
          <div class="col-12">
            <img src="img/Planta.jpeg"  alt="avatar" class="avatar"> 
          </div>
          <form action="logica/guardar_producto.php" method="POST" enctype="multipart/form-data" class="col-12">
          <div class="form-group">
              <label class="text-dark">Descripción de Producto</label>
              <input type="text" class="form-control" name="descripcion" required>
            </div>
            <div class="form-group">
            <label class="text-dark">Precio del Producto</label>
              <input type="text" class="form-control" name="precio" required>
            </div>
            <div class="form-group">
            <label class="text-dark">Cantidad</label>
              <input type="number" class="form-control" name="stock" required>
            </div>
            <div class="form-group">
            <label class="text-dark">Existencia en Almacen</label>
              <input type="text" class="form-control" name="estado" placeholder="¿Hay en existencia?" required>
            </div>
            <div class="form-group">
              <label class="text-dark">Detalles del Producto</label>
                <textarea class="form-control" rows="5" name="detalle"></textarea>
            </div>
            <div class="form-group">
              <div class="photo text-dark">
                <label for="foto">Foto</label>
                      <div class="prevPhoto">
                      <span class="delPhoto notBlock">X</span>
                      <label for="foto"></label>
                      </div>
                      <div class="upimg">
                      <input type="file" name="imagen" id="foto">
                      </div>
                      <div id="form_alert"></div>
              </div>
            </div>
            <button type="submit" class="btn btn-success m-3"> <ion-icon name="save" size = "small"></ion-icon> Guardar </button>
          </form>
        </div>
      </div>  
    </div>

    <section>
      <div class="container">
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
    <script src="js/functions.js"> </script>
</body>
</html>