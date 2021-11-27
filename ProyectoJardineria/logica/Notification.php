<?php
    include 'conexion.php';

    $notificacion=$_POST['notificacion'];
    $usuario=$_POST['usuario'];
    $fecha=$_POST['fecha'];

    $eliminar="DELETE  FROM notificacion";
    $confirmacion=mysqli_query($conexion,$eliminar);
    if(!$eliminar)
    {
        echo 'Error 404 pagina no encontrada';
    }
    else
    {
        $insertar = "INSERT INTO notificacion (notificacion,usuario,fecha) VALUES ('$notificacion','$usuario','$fecha')";
        $resultado = mysqli_query($conexion,$insertar);
        if(!$resultado)
        {
            echo '<script>alert("Error de servidor")</script> ';
            header("location: ../CreateNotication.php");
        }
        else
        {
            echo '<script>alert("Notificacion almacenada y enviada")</script> ';
            header("location: ../AdminHome.php");
        }
    }

?>