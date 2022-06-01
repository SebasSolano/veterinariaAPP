<?php

    $id_historial = $_POST['id_historial'];
    $id_mascota = $_POST['id_mascota']; 
    $enfermedad = $_POST['enfermedad']; 
    $f_enfermedad  = $_POST['f_enfermedad']; 
    $id_calendario = $_POST['id_calendario']; 


    //echo $nombres.'<br>';
    //echo $apellidos.'<br>';
    //echo $n_cuenta.'<br>';
    //echo $direccion.'<br>';
    //echo $telefono.'<br>';
    //echo $dni.'<br>';
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    $result = $objconsulta -> EditarHistorial($id_historial, $id_mascota,$enfermedad, $f_enfermedad, $id_calendario,  $conexion);

    header("Location: tabla_historial.php");




?>