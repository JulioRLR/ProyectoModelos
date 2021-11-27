<?php

    include 'conexion.php';

    $descripcion   =  $_POST['descripcion'];
    $precio        =  $_POST['precio'];
    $stock         =  $_POST['stock'];
    $estado        =  $_POST['estado'];
    $detalle       =  $_POST['detalle'];

    $imagen        =  $_FILES['imagen']['name'];

    
     if($imagen)
    {
        $query=mysqli_query($conexion,"INSERT INTO productos(descripcion,precio,stock,estado,detalle,imagen) 
        VALUES('$descripcion','$precio','$stock','$estado','$detalle','$imagen')");
        move_uploaded_file($_FILES['imagen']['tmp_name'], "../img/productos/$imagen");
    }
    else
    {
        $query=mysqli_query($conexion,"INSERT INTO productos(descripcion,precio,stock,estado,detalle,imagen) 
        VALUES('$descripcion','$precio','$stock','$estado','$detalle','img_producto.png')");
    }
    
    if($query)
    {    
        echo 'producto almacenado';
        header("location: ../ListadoProductos.php");
    }
    else
    {
        echo 'Error al guardar';
    }
?>