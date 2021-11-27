<?php
    session_start();
    include 'conexion.php';

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];

    $query= mysqli_query($conexion,"SELECT * FROM usuario WHERE nombre='$nombre' AND contrasena='$contrasena'");
    if($resultado=mysqli_fetch_assoc($query))
    {
      if($nombre=='admin')
      {
        $_SESSION['nombre']=$nombre;
        header("location: ../AdminHome.php");
      }
      else if($nombre=='stockm')
      {
        $_SESSION['nombre']=$nombre;
        header("location: ../StockmHome.php");
      }
      else
      {
        $_SESSION['nombre']=$nombre;
        header("location: ../RegisteredHome.php");
      }
    }
    else
    {
      echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
      sleep(3);
      header("location: ../Registre.php");
    }

?>