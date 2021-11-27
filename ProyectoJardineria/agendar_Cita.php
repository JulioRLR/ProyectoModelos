<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <title>Agenda</title>
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
                        <a class="nav-link" href="RegisteredHome.php">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="Productos.php">Productos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-gold" href="#">Acerca de</a>
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
                        <span><ion-icon size="large" name="rose-outline"></ion-icon></span>
                      </a>
                      <div class="dropdown-menu bg-light" aria-labelledby="Acount">
                        <a href="" class="dropdown-item">Perfil</a>
                        <a href="" class="dropdown-item">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a href="" data-toggle="modal" data-target="#ModalCenter" class="dropdown-item">Cerrar Sesion</a>
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
    
    <div id="contenido">
      <div class="container text-light">

          <h1>Solicitar cita para Atencion</h1>
          <div class="row">
              <div class="col-6">
                  <label for="tweet">Ingrese La cita de la siguiente manera:</label>
                  <form action="logica/almacenarCita.php" method="POST">
                    <div class="form-group">
                      <label for="txtType">Tipo de Servicio:</label>
                      <select class="form-control" name="tipo" id="txtType">
                        <option>Diseño de Jardines</option>
                        <option>Sistema de Riego</option>
                        <option>Mantenimiento de Jardines</option>
                        <option>Cesped Artificial</option>
                        <option>Iluminación</option>
                        <option>Arreglos para Eventos</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="txtDate">Fecha de Servicio</label>
                      <input type="date" class="form-control" name="fecha" id="txtDate">
                    </div>
                    <div class="form-group">
                      <label for="txtName">Nombre Completo</label>
                      <input type="text" class="form-control" name="nombre" id="txtName">
                    </div>
                    <div class="form-group">
                      <label for="txtEmail">Correo de Contacto</label>
                      <input type="email" class="form-control" placeholder="ejemplo@correo.com" name="correo" id="txtEmail">
                    </div>
                    <div class="form-group">
                      <label for="txtTel">Telefono</label>
                      <input type="text" class="form-control" name="telefono" id="txtTel">
                    </div>

                    <button type="button" class="btn btn-primary" id="btnShowCita">Mostrar Cita</button>

                    <button type="submit" class="btn btn-success m-4">Enviar</button>
                  </form>
              </div>
              <div class="col-6 text-center">
                <!--Modificar-->
                  <h2>Mis Soliciudes</h2>
                  <table class="table text-light" id="CitaTable" >
                    <thead class="thead-light" >
                      <tr>
                        <th>Servicio</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>

  <div class="container text-center">
    <h3 class="text-light" > <ion-icon name="today" size="large" class="mr-5"></ion-icon> Nos encontramos algo ocupados en estas fechas</h3>
    <ul class="list-group">
      <?php
        include 'logica/conexion.php'; 

        $query=mysqli_query($conexion,"SELECT fecha FROM servicio");

        while($resultado=mysqli_fetch_array($query))
        {
      ?>
      <li class="list-group-item"><?php echo $resultado["fecha"] ?></li>
      <?php
        }  
      ?>
    </ul>
  </div>

    <section>
      <div class="container bg-img">
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
    <script src="js/bussinesLogic.js"></script>
    <script src="js/uiLogic.js"></script>
</body>
</html>