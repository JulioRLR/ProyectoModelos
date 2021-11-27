<?php
    include 'logica/conexion.php'; 

    $codProd=$_REQUEST['codProd'];
    $query=mysqli_query($conexion,"SELECT descripcion,precio,estado,detalle,imagen FROM productos WHERE codProd=$codProd");
    $resultado= mysqli_num_rows($query);
    if ($resultado>0)
    {
      while($data= mysqli_fetch_array($query))
      {
        $nombre_producto=$data['descripcion'];
        $precio=$data['precio'];
        $estado=$data['estado'];
        $detalle=$data['detalle'];
        $imagen=$data['imagen'];
      }
    }
    else
    {
      header("location: Productos.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Default-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <title>Over the garden</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="RegisteredHome.php">Over the garden</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                      <?php
                        session_start();
                        $nombre = $_SESSION['nombre'];
                          
                        if($nombre=='admin')
                        {
                          $_SESSION['nombre']=$nombre;
                          echo '<a class="nav-link" href="AdminHome.php">Home</a>';
                        }
                        else if($nombre=='stockm')
                        {
                          $_SESSION['nombre']=$nombre;
                          echo '<a class="nav-link" href="StockmHome.php">Home</a>';
                        }
                        else
                        {
                          $_SESSION['nombre']=$nombre;
                          echo '<a class="nav-link" href="RegisteredHome.php">Home</a>';
                        }
                      ?>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="Servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-gold" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item px-3">
                      <?php
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
                      <?php

                        if($nombre=='admin')
                        {
                          $_SESSION['nombre']=$nombre;
                          echo "<span><ion-icon size='large' name='key'></ion-icon></span>";
                        }
                        else if($nombre=='stockm')
                        {
                          $_SESSION['nombre']=$nombre;
                          echo "<span><ion-icon size='large' name='archive'></ion-icon></span>";
                        }
                        else
                        {
                          $_SESSION['nombre']=$nombre;
                          echo "<span><ion-icon size='large' name='rose'></ion-icon></span>";
                        }
                        
                      ?>
                      </a>
                      <div class="dropdown-menu bg-light" aria-labelledby="Acount">
                        <?php
                        
                        if($nombre=='admin')
                        {
                          $_SESSION['nombre']=$nombre;
                          echo "<a href='ReporteUsuarios.php' class='dropdown-item'>Reportes</a>";
                          echo "<a href='AdminTareas.php' class='dropdown-item'>Tareas</a>";
                          echo "<a href='CreateNotification.php' class='dropdown-item'>Notificación</a>";
                          echo "<div class='dropdown-divider'></div>";
                          echo "<a href='' data-toggle='modal' data-target='#ModalCenter' class='dropdown-item'>Cerrar Sesion</a>";
                        }
                        else if($nombre=='stockm')
                        {
                          $_SESSION['nombre']=$nombre;
                          echo "<a href='ListadoProductos.php' class='dropdown-item'>Productos</a>";
                          echo "<a class='dropdown-item'>Configuración</a>";
                          echo "<div class='dropdown-divider'></div>";
                          echo "<a href='' data-toggle='modal' data-target='#ModalCenter' class='dropdown-item'>Cerrar Sesion</a>";
                        }
                        else
                        {
                          $_SESSION['nombre']=$nombre;
                          echo "<a class='dropdown-item'>Perfil</a>";
                          echo "<a class='dropdown-item'>Configuración</a>";
                          echo "<div class='dropdown-divider'></div>";
                          echo "<a href='' data-toggle='modal' data-target='#ModalCenter' class='dropdown-item'>Cerrar Sesion</a>";
                        }

                        ?>
                      </div>
                    </li>
                    <li class="nav-item px-3 dropdown dropleft float-right">
                      <a class="nav-link" href="#" id="notification" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><ion-icon size="large" name="notifications-circle"></ion-icon></span>
                      </a>
                      <div class="dropdown-menu bg-light" aria-labelledby="notification">
                        <table class="text-light">
                          <tbody>
                            <tr>
                              <?php
                                include 'logica/conexion.php';
            
                                $query = mysqli_query( $conexion ,"SELECT * FROM notificacion");
                                $resultado = mysqli_num_rows($query);
                                if($resultado>0)
                                {
                                  while($data = mysqli_fetch_array($query))
                                  {
                              ?> 
                              <tr>
                                <td class="dropdown-item"><?php echo $data["notificacion"]; ?></td>
                                <td class="dropdown-item"><?php echo $data["usuario"]; ?></td>
                                <td class="dropdown-item"><?php echo $data["fecha"]; ?></td>
                              </tr>     
                              <?php
                                  }
                                }
                              ?> 
                              </tr>
                          </tbody>
                        </table>
                      </div>
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

    <div class="container-fluid text-light">
      <div class="row">
        <?php
          include 'logica/conexion.php'; 

          $query=mysqli_query($conexion,"SELECT codProd,descripcion,precio,stock,estado,detalle,imagen FROM productos WHERE codProd=$codProd");

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
        <div class="col-5 text-center">
          <img src="<?php echo $imagen; ?>" alt="<?php echo $nombre_producto; ?>">
        </div>
        <div class="col-4 text-justify">
          <h1 class="text-light text-center"><?php echo $nombre_producto; ?></h1>
          <h4><?php echo $precio; ?></h4>
          <h6><?php echo $detalle; ?></h6>
        </div>
        <div class="col-3 text-center">
          <h1>$<?php echo $precio; ?></h1>
          <h5>Envio GRATIS. <a href="#" class="text-info" >Detalles</a> </h5>
          <p>Cómpralo antes y elige envío en 1 día al completar tu pedido.</p>
          <h3><?php echo $estado ?></h3>
          <form action="">
            <label for="">Cantidad: </label>
            <input type="number" value="1">
            <button class="btn btn-warning mt-4" >Comprar</button>
          </form>
        </div>
        <?php
          }
        ?>
      </div>     
    </div>

    <section>
      <div class="container bg-img">
        <h2 class="text-light">Productos Destacados</h2>
        <p class="lead text-light">Estos son algunos de nuestros productos que mas han encantado</p>
        <div class="row mt-6">
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> macetas </span> perfectas para tu casa </p>
                  <h5>Macetas de muchos tamaños</h5>
                </div>
                <img src="img/flores12.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Tenemos </span> de todo tipo de </p>
                  <h5>Suculentas</h5>
                </div>
                <img src="img/flores15.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Con </span> Maceta </p>
                  <h5>Planta de Agave</h5>
                </div>
                <img src="img/flores11.jpg" alt="" class="image-fluid rounded">
              </a>
            </div>
          </div>
          <div class="col md-4">
            <div class="blog-item position-relative rounded mg-5">
              <a href="">
                <div class="blog-info position-absolute">
                  <p class="text-gold mb-3"> <span class="font-weigt bold"> Planta </span> de interior </p>
                  <h5>Browallia speciosa</h5>
                </div>
                <img src="img/flores10.jpg" alt="" class="image-fluid rounded">
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