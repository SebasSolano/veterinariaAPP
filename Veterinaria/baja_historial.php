<?php


    $id = $_POST['id'];
    
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;
    

    $result = $objconsulta -> EliminarHitorial($id, $conexion);

    header("Location: tabla_historial.php");

?>