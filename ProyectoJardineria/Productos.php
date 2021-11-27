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
                    <li class="nav-item px-3">
                      <ul>
                        <li class="submenu text-light text-center">
                        <span><ion-icon size="large" name="cart"></ion-icon></span>
                          <div class="text-center text-dark" id="carrito">                                    
                            <table id="lista-carrito" class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Imagen</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Precio</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn btn-light border">Vaciar Carrito</a>
                          </div>
                        </li>
                      </ul>
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
      <h1 class="text-center text-light">Productos</h1>
        <div id="lista-cursos" class="card-group">
          <?php
              include 'logica/conexion.php';

              $sql_page=mysqli_query($conexion,"SELECT COUNT(*) as total_registros FROM productos");
              $result_products=mysqli_fetch_array($sql_page);
              $total_registro=$result_products['total_registros'];

              $por_pagina=3;

              if(empty($_GET['pagina']))
              {
                $pagina=1;
              }
              else
              {
                $pagina=$_GET['pagina'];
              }

              $desde=($pagina-1)*$por_pagina;
              $total_paginas=ceil($total_registro/$por_pagina);

              $query=mysqli_query($conexion,"SELECT codProd,descripcion,precio,detalle,imagen,id FROM productos LIMIT $desde,$por_pagina");

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
            <div class="card bg-dark block-4-image col-4">
              <img class="card-img-top m-0" src="<?php echo $imagen; ?>" alt="<?php echo $resultado["descripcion"] ?>">
              <div class="card-body text-center">
                <h4 class="card-title"><a href=""><?php echo $resultado['descripcion']; ?></a></h4>
                <p class="card-text text-gold precio">$<?php echo $resultado['precio']; ?></p>
                <p class="card-text text-light"><?php echo $resultado['detalle']; ?></p>
                <a class="btn btn-primary agregar-carrito" data-id="<?php  echo$resultado['id']; ?>"><ion-icon  name="cart"></ion-icon></a>
                <a href="DetallesProductos.php?codProd=<?php echo$resultado['codProd'] ?>" class="btn btn-success"><ion-icon name="add-circle"></ion-icon>Comprar</a>
              </div>
            </div>    
          <?php
              }
          ?>
        </div>
        <div >
          <ul class="pagination pagination-lg float-right">

            <?php
              if($pagina !=1)
              {

            ?>

            <li class="page-item"> <a class="page-link" href="?pagina=<?php echo 1; ?> "> |< </a> </li>
            <li class="page-item"> <a class="page-link" href="?pagina=<?php echo $pagina-1 ?>"> << </a> </li>
            <?php
              }
              for($i=1; $i<=$total_paginas;$i++)
              {
                if($i==$pagina)
                {
                  echo '<li class="page-item active"> '.$i.' </li>';
                }
                else
                {
                  echo '<li class="page-item"> <a class="page-link" href="?pagina='.$i.'"> '.$i.' </a> </li>';
                }
              }
              if($pagina!=$total_paginas)
              {

            ?>
            <li class="page-item"> <a class="page-link" href="?pagina=<?php echo $pagina+1 ?>">>></a> </li>
            <li class="page-item"> <a class="page-link" href="?pagina=<?php echo $total_paginas; ?>">>|</a> </li>
              <?php } ?>
          </ul>
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
    <script src="js/carrito.js"></script>
</body>
</html>