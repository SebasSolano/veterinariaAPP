<?php

    $id = $_POST['id_calendario']; 
    $f_vacuna = $_POST['f_vacuna']; 
    $enfermedad = $_POST['enfermedad']; 

    //echo $f_vacuna.'<br>';
    //echo $enfermedad.'<br>';
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    $result = $objconsulta -> EditarCalendario($id, $f_vacuna,$enfermedad , $conexion);

    header("Location: tabla_calendario.php");




?>