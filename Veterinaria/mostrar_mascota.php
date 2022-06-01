<?php

$alias = $_POST['alias'];

include_once('servicios.php');
$conexion = $objecto -> connectDB();

$objConsulta = new Servicios;



$row = $objConsulta -> ObtenerMascotaAlias($alias,$conexion);



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MASCOTAS</title>
  </head>
  <body>
  <div class="shadow-sm p-3 mb-5 bg-body rounded">
      <a class="icono" href="buscar_mascota.php">
      <ion-icon size="large" class="" name="arrow-back-outline" ></ion-icon>
      </a></div>

    <section class="p-3">

    <h3 class="text-center pb-2 txt-color">MASCOTAS ENCONTRADAS</h3>
            <div class="table-responsive  " id="no-more-tables">


            <table class="table bg-white shadow-sm ">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Alias</th>
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Familia</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($mostrar=mysqli_fetch_array($row)){?>
                    <tr>
                        <td  data-title="Alias" scope="row"><?php echo $mostrar['alias']; ?></td>
                        <td  data-title="Especie"><?php echo $mostrar['especie']; ?></td>
                        <td  data-title="Raza"><?php echo $mostrar['raza']; ?></td>
                        <?php
                            
                            $result = $objConsulta -> BuscarFamilia($mostrar['id_cliente'], $conexion);
                            $res = mysqli_fetch_array($result);
                         ?>
                         <td data-title="Familia"><?php echo $res['apellidos']; ?></td>
                        
                    </tr>

                </tbody>
                <?php } ?>
            </table>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>