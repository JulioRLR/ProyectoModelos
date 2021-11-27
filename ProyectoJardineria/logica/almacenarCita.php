<?php
    include 'conexion.php';

    $tipo=$_POST['tipo'];
    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];

    $insertar = "INSERT INTO servicio (tipo,fecha,nombre,correo,telefono) VALUES ('$tipo','$fecha','$nombre','$correo','$telefono')";

    $resultado = mysqli_query($conexion,$insertar);
    if(!$resultado)
    {
        echo '<script>alert("Error de servidor")</script> ';
    }
    else
    {
        header("location: ../agendar_Cita.php");//cambiar
    }
?>