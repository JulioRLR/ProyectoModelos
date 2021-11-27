<?php
    //conexion
    $conexion = mysqli_connect("localhost","root","","jardineria");
    if(!$conexion)
    {
        echo 'Error al conectar la base de datos';
    }
?>