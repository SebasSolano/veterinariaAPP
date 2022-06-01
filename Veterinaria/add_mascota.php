<?php


    $id_cliente = $_POST['id_cliente']; 
    $alias = $_POST['alias']; 
    $especie = $_POST['especie']; 
    $raza  = $_POST['raza']; 
    $color = $_POST['color']; 
    $f_nacimiento = $_POST['f_nacimiento']; 


    //echo $nombres.'<br>';
    //echo $apellidos.'<br>';
    //echo $n_cuenta.'<br>';
    //echo $direccion.'<br>';
    //echo $telefono.'<br>';
    //echo $dni.'<br>';
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    $result = $objconsulta -> AgregarMascota($id_cliente,$alias, $especie, $raza, $color,$f_nacimiento,   $conexion);

    header("Location: tabla_mascota.php");




?>