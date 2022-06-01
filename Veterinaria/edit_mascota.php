<?php

    $id_mascota = $_POST['id_mascota'];
    $id_cliente = $_POST['id_cliente']; 
    $alias = $_POST['alias']; 
    $especie = $_POST['especie']; 
    $raza  = $_POST['raza']; 
    $color = $_POST['color']; 
    $f_nacimiento = $_POST['f_nacimiento'];
    $peso_medio = $_POST['peso_medio']; 


    //echo $nombres.'<br>';
    //echo $apellidos.'<br>';
    //echo $n_cuenta.'<br>';
    //echo $direccion.'<br>';
    //echo $telefono.'<br>';
    //echo $dni.'<br>';
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    $result = $objconsulta -> EditarMascota($id_mascota, $id_cliente,$alias, $especie, $raza, $color,$f_nacimiento, $peso_medio,  $conexion);

    header("Location: tabla_mascota.php");




?>