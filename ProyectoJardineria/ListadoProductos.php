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
    <title>Over the garden</title>
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
                        <a class="nav-link" href="Productos.php">Productos</a>
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
                          echo "<p class='nav-link text-gold'> Bienvenido de nuevo $nombre </p>";
                        }
                      ?>
                    </li>
                    <li class="nav-item px-3 dropdown">
                      <a class="nav-link" href="#" id="Acount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><ion-icon size="large" name="archive"></ion-icon></span>
                      </a>
                      <div class="dropdown-menu bg-light" aria-labelledby="Acount">
                        <a href="" class="dropdown-item">Productos</a>
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

    <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalCenterTitle">Cerrar Sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">¿Deseas Cerrar Sesion?</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" role="link" onclick="window.location='UnregisteredHome.php'" class="btn btn-danger" >Cerrar Sesión</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <h2 class="text-light"><span class="m-5"><ion-icon name="file-tray-full"></ion-icon></span> Inventario</h2>
        <a href="Ingresar_Producto.php" role="button">
          <span class="float-right m-3"><ion-icon size="large" name="add-circle"></ion-icon></span>
        </a>
        <table class="table table-striped bg-dark text-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Estado</th>
                <th scope="col">Detalle</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'logica/conexion.php'; 

                $query=mysqli_query($conexion,"SELECT codProd,descripcion,precio,stock,estado,detalle,imagen FROM productos WHERE estado='Hay en Existencia'");

                while($resultado=mysqli_fetch_array($query))
                {
                  if($resultado['imagen'] != 'img_producto.png')
                  {
                    $imagen= 'img/productos/'.$resultado['imagen'];
                  }
                  else
                  {
                    $imagen='img/'.$resultado['imagen'];
                  }
              ?>
              <tr>
                <th scope="row"><?php echo $resultado["codProd"]; ?></th>
                <td><?php echo $resultado["descripcion"]; ?></td>
                <td><?php echo $resultado["precio"]; ?></td>
                <td><?php echo $resultado["stock"]; ?></td>
                <td><?php echo $resultado["estado"]; ?></td>
                <td><?php echo $resultado["detalle"]; ?></td>
                <td class="img-products"> <img src="<?php echo $imagen; ?>" alt="<?php echo $resultado["descripcion"];?> "> </td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="ConfirmarEliminar.php?codProd=<?php echo $resultado["codProd"]; ?>"><ion-icon name="create-outline" size="small"></ion-icon>Editar</a>
                    <a class="btn btn-danger" href="Eliminar_Producto.php?codProd=<?php echo $resultado["codProd"]; ?>"><ion-icon name="trash-outline" size="small"></ion-icon>Eliminar</a>
                  </div>
                </td>
              </tr>
              <tr>
                <?php
                  }  
                ?>
            </tbody>
          </table>
    </div>

    <section>
      <div class="container">
        <h2 class="text-light">Id est laborum</h2>
        <p class="lead text-light">Duis aute irure dolor in reprehenderit in voluptate</p>
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