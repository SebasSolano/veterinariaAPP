<?php


    $id_mascota = $_POST['id_mascota']; 
    $peso_actual = $_POST['peso_actual']; 
    $fecha = $_POST['fecha'];


    include_once('servicios.php');

    $conexion = $objecto -> connectDB();

    $objconsulta = new Servicios;

    //Total de veces que se registro el peso de la mascota
    $result = $objconsulta -> totalPesosID($id_mascota, $conexion);
    $res1 = mysqli_fetch_array($result);

    //if total > 9
    if($res1['total'] >= 10){

        //Promedio de todos los pesos de la mascota
        $result = $objconsulta -> PromedioID($id_mascota, $conexion);
        $res2 = mysqli_fetch_array($result);

        //modificar peso_medio en tabla mascota
        $result = $objconsulta -> EditarMascota2($id_mascota,$res2['promedio'], $conexion);

        //elimar registros de peso de esa mascota
        $result = $objconsulta -> EliminarPeso2($id_mascota, $conexion);

    }


    $result = $objconsulta -> AgregarPeso($id_mascota,$peso_actual, $fecha, $conexion);

    header("Location: tabla_peso.php");




?>