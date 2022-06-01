<?php

    $nombres = $_POST['nombres']; 
    $apellidos = $_POST['apellidos']; 
    $n_cuenta = $_POST['n_cuenta']; 
    $direccion = $_POST['direccion']; 
    $telefono = $_POST['telefono']; 
    $dni = $_POST['dni']; 

    //echo $nombres.'<br>';
    //echo $apellidos.'<br>';
    //echo $n_cuenta.'<br>';
    //echo $direccion.'<br>';
    //echo $telefono.'<br>';
    //echo $dni.'<br>';
    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    $result = $objconsulta -> AgregarCliente($nombres,$apellidos, $n_cuenta, $direccion,$telefono, $dni,  $conexion);

    header("Location: tabla_cliente.php");




?>