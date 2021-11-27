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
            <a class="navbar-brand" href="AdminHome.php">Over the garden</a>
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
                        <a class="nav-link" href="Productos.php">Productos</a>
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

    <section>
      <div class="container">
        <h2 class="text-center text-light">Te ofrecemos estos servicios</h2>
        <div class="row mt-6">
          <div class="col-6">
            <a href="#">
              <img class="rounded" src="img/Flores_de.jpeg" alt="">
              <div class="bg-light p-4 rounded-bottom">
                <h4 class="text-dark">Arreglos para Eventos</h4>
                <p class="text-muted text-justify mb-0">Las flores son vida para su evento y proporcionan un entorno exclusivo. 
                  En <strong> <b> Over the garden </b> </strong> le asesoramos en su elección para evitar problemas de elección .</p>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="#">
              <img class="rounded" src="img/Rutas-Agua.jpg" alt="">
              <div class="bg-light p-4 rounded-bottom">
                <h4 class="text-dark">Iluminación</h4>
                <p class="text-muted text-justify mb-0">La iluminación de jardines y terrazas exteriores es fundamental en las noches de verano. 
                  Para disfrutar del encanto de esas veladas, le ofrecemos soluciones ideales de iluminación exterior.</p>
              </div>
            </a>          
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-6">
            <a href="#">
              <img class="rounded" src="img/cesped.jpg" alt="">
              <div class="bg-light p-4 rounded-bottom">
                <h4 class="text-dark">Cesped Artificial</h4>
                <p class="text-muted text-justify mb-0">Los acabados realistas del césped artificial lo convierten en un elemento perfecto para complementar 
                    jardines de diseño. Ofrecemos diferentes calidades con diferentes precios para adaptarnos a sus necesidades.</p>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="#">
              <img class="rounded" src="img/Riego.jpg" alt="">
              <div class="bg-light p-4 rounded-bottom">
                <h4 class="text-dark">Sistema de Riego</h4>
                <p class="text-muted text-justify mb-0">Los sistemas de riego automático son la mejor solución para el suministro de agua en su jardín. 
                También somos instalamos sistemas de riego por goteo para un ahorro de agua.</p>
              </div>
            </a>          
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-6">
            <a href="#">
              <img class="rounded" src="img/Diseño de Jardines4.jpg" alt="">
              <div class="bg-light p-4 rounded-bottom">
                <h4 class="text-dark">Diseño de Jardines</h4>
                <p class="text-muted text-justify mb-0">Nuestros paisajistas realizan una proyección en 3D para optimizar el sitio al máximo. 
                Si su jardín es pequeño y desea hacer reforma, conseguirá un espacio que no imaginaba.</p>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="#">
              <img class="rounded" src="img/Diseño de Jardines3.jpg" alt="">
              <div class="bg-light p-4 rounded-bottom">
                <h4 class="text-dark">Mantenimiento de Jardines</h4>
                <p class="text-muted text-justify mb-0">Un jardín descuidado pierde todo su encanto y sabemos que no es sencillo compaginar 
                    el trabajo con la jardinería. Por eso le ofrecemos nuestras manos jardineras profesionales para el mantenimiento de su jardín.</p>
              </div>
            </a>          
          </div>
        </div>
        <div class="text-center mt-6">
          <a href="agendar_Cita.php" class="text-gold">Agenda tu Cita ¡YA!</a>
          <ion-icon size="large" class="text-gold ml-3" name="arrow-redo-circle"></ion-icon> 
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