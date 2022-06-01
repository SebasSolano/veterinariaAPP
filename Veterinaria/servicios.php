<?php

include_once("DbManager.php");

$objecto = new DBManager();

class Servicios{


    function ObtenerCalendario($conexion){

        $sql = "SELECT * FROM calendario";
        $rec = mysqli_query($conexion, $sql);

        return $rec;

    }

    function ObtenerCliente($conexion){

        $sql = "SELECT * FROM clientes";
        $rec = mysqli_query($conexion, $sql);

        return $rec;

    }

    function ObtenerHistorial($conexion){

        $sql = "SELECT * FROM historial";
        $rec = mysqli_query($conexion, $sql);

        return $rec;

    }

    function ObtenerMascotas($conexion){

        $sql = "SELECT * FROM mascotas";
        $rec = mysqli_query($conexion, $sql);

        return $rec;

    }

    function ObtenerPesos($conexion){

        $sql = "SELECT * FROM pesos";
        $rec = mysqli_query($conexion, $sql);

        return $rec;

    }

    function ObtenerMascotaAlias($alias,$conexion){

        $sql = "SELECT * FROM mascotas WHERE alias='$alias'";
        $rec = mysqli_query($conexion, $sql);

        return $rec;


    }

    function totalCalendario($conexion){
        $sql = "SELECT COUNT(*) AS total FROM calendario";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function totalClientes($conexion){
        $sql = "SELECT COUNT(*) AS total FROM clientes";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function totalHistorial($conexion){
        $sql = "SELECT COUNT(*) AS total FROM historial";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function totalMascotas($conexion){
        $sql = "SELECT COUNT(*) AS total FROM mascotas";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function totalPeso($conexion){
        $sql = "SELECT COUNT(*) AS total FROM pesos";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function EliminarCalendario($id, $conexion){

        $sql = "DELETE FROM calendario WHERE id_calendario='$id'";

        $rec = mysqli_query($conexion, $sql);
    }


    function EliminarCliente($id, $conexion){

        $sql = "DELETE FROM clientes WHERE id_cliente='$id'";

        $rec = mysqli_query($conexion, $sql);
    }

    function EliminarHitorial($id, $conexion){

        $sql = "DELETE FROM historial WHERE id_historial='$id'";

        $rec = mysqli_query($conexion, $sql);
    }

    function EliminarMascota($id, $conexion){

        $sql = "DELETE FROM mascotas WHERE id_mascota='$id'";

        $rec = mysqli_query($conexion, $sql);

        $sql = "DELETE FROM historial WHERE id_mascota='$id'";

        $rec = mysqli_query($conexion, $sql);

        $sql = "DELETE FROM pesos WHERE id_mascota='$id'";

        $rec = mysqli_query($conexion, $sql);
    }

    function EliminarPeso($id, $conexion){

        $sql = "DELETE FROM pesos WHERE id_peso='$id'";

        $rec = mysqli_query($conexion, $sql);
    }

    function AgregarCalendario($f_vacuna,$enfermedad , $conexion){

        $sql = "INSERT INTO calendario(f_vacuna, enfermedad) VALUES('$f_vacuna','$enfermedad')";

        $rec = mysqli_query($conexion, $sql);

    }

    function EditarCalendario($id, $f_vacuna,$enfermedad , $conexion){

        $sql = "UPDATE calendario SET f_vacuna='$f_vacuna', enfermedad='$enfermedad' 
        WHERE id_calendario = '$id'";

        $rec = mysqli_query($conexion, $sql);

    }


    function AgregarCliente($nombres,$apellidos  , $n_cuenta, $direccion,$telefono, $dni,  $conexion){

        $sql = "INSERT INTO clientes(nombres, apellidos, n_cuenta, direccion, telefono, dni) 
        VALUES('$nombres','$apellidos', '$n_cuenta', '$direccion', '$telefono', '$dni')";

        $rec = mysqli_query($conexion, $sql);

    }

    function EditarCliente($id_cliente, $nombres,$apellidos, $n_cuenta, $direccion,$telefono, $dni,  $conexion){

        $sql = "UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', n_cuenta='$n_cuenta', 
        direccion='$direccion', telefono='$telefono', dni='$dni' WHERE id_cliente = '$id_cliente'";

        $rec = mysqli_query($conexion, $sql);

    }

    function AgregarHistorial($id_mascota,$enfermedad, $f_enfermedad, $id_calendario,  $conexion){

        $sql = "INSERT INTO historial(id_mascota, enfermedad, f_enfermedad, id_calendario) 
        VALUES('$id_mascota','$enfermedad', '$f_enfermedad', '$id_calendario')";

        $rec = mysqli_query($conexion, $sql);

    }

    function EditarHistorial($id_historial, $id_mascota,$enfermedad, $f_enfermedad, $id_calendario,  $conexion){

        $sql = "UPDATE historial SET id_mascota='$id_mascota', enfermedad='$enfermedad', 
        f_enfermedad='$f_enfermedad', id_calendario='$id_calendario' WHERE id_historial = '$id_historial'";

        $rec = mysqli_query($conexion, $sql);

    }

    function AgregarMascota($id_cliente,$alias, $especie, $raza, $color,$f_nacimiento,   $conexion){

        $sql = "INSERT INTO mascotas(id_cliente, alias, especie, raza, color, f_nacimiento) 
        VALUES('$id_cliente','$alias', '$especie', '$raza', '$color', '$f_nacimiento')";

        $rec = mysqli_query($conexion, $sql);

    }

    function EditarMascota($id_mascota, $id_cliente,$alias, $especie, $raza, $color,$f_nacimiento, $peso_medio, $conexion){

        $sql = "UPDATE mascotas SET id_cliente='$id_cliente', alias='$alias', especie='$especie', 
        raza='$raza', color='$color', f_nacimiento='$f_nacimiento', peso_medio='$peso_medio' WHERE id_mascota = '$id_mascota'";

        $rec = mysqli_query($conexion, $sql);

    }

    //FUNCIONES DE PESO

    function AgregarPeso($id_mascota,$peso_actual, $fecha, $conexion){

        $sql = "INSERT INTO pesos(id_mascota, peso_actual, fecha) 
        VALUES('$id_mascota','$peso_actual', '$fecha')";

        $rec = mysqli_query($conexion, $sql);

    }

    function EditarPeso($id_peso, $id_mascota,$peso_actual, $fecha, $conexion){

        $sql = "UPDATE pesos SET id_mascota='$id_mascota', peso_actual='$peso_actual', fecha='$fecha' WHERE id_peso = '$id_peso'";

        $rec = mysqli_query($conexion, $sql);

    }

    function totalPesosID($id, $conexion){
        $sql = "SELECT COUNT(*) AS total FROM pesos WHERE id_mascota = '$id'";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function PromedioID($id, $conexion){
        $sql = "SELECT AVG(peso_actual) AS promedio FROM pesos WHERE id_mascota = '$id'";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }

    function EditarMascota2($id_mascota, $peso_medio, $conexion){

        $sql = "UPDATE mascotas SET peso_medio='$peso_medio' WHERE id_mascota = '$id_mascota'";

        $rec = mysqli_query($conexion, $sql);

    }

    function EliminarPeso2($id, $conexion){

        $sql = "DELETE FROM pesos WHERE id_mascota='$id'";

        $rec = mysqli_query($conexion, $sql);
    }

    function BuscarFamilia($id_cliente, $conexion){

        $sql = "SELECT * FROM clientes WHERE id_cliente='$id_cliente'";
        $rec = mysqli_query($conexion, $sql);

        return $rec;
    }








}

?>