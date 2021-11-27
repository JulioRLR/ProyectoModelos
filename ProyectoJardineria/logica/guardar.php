<?php
    include 'conexion.php';

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];

    $validacion = mysqli_query($conexion,"SELECT nombre , correo FROM usuario WHERE nombre = '$nombre' OR correo='$correo' ");
    $consulta = mysqli_fetch_array($validacion);
    if($consulta > 0)
    {
        echo '<script>alert("usuario o correo ya existentes")</script> ';
        header("location: ../Registre.php");
    }
    else
    {
        $insertar = "INSERT INTO usuario (nombre,correo,contrasena) VALUES ('$nombre','$correo','$contrasena')";

        $resultado = mysqli_query($conexion,$insertar);
        if(!$resultado)
        {
            echo '<script>alert("Error de servidor")</script> ';
            header("location: ../Registre.php");
        }
        else
        {
            echo '<script>alert("Usuario Registrado")</script> ';
            header("location: ../Log in.php");//cambiar
        }
    }
?>