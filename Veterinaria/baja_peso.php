<?php


    $id = $_POST['id'];
    
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;
    

    $result = $objconsulta -> EliminarPeso($id, $conexion);

    header("Location: tabla_peso.php");

?>