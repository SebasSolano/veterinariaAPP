<?php

    $id_peso = $_POST['id_peso'];
    $id_mascota = $_POST['id_mascota']; 
    $peso_actual = $_POST['peso_actual']; 
    $fecha = $_POST['fecha'];

    echo $id_peso.'<br>';
    echo $id_mascota.'<br>';
    echo $peso_actual.'<br>';
    echo $fecha.'<br>';
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    $result = $objconsulta -> EditarPeso($id_peso, $id_mascota,$peso_actual, $fecha, $conexion);

    header("Location: tabla_peso.php");




?>