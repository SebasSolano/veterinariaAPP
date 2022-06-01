<?php


session_start();

include_once('servicios.php');
$conexion = $objecto -> connectDB();

$objConsulta = new Servicios;



$row = $objConsulta -> ObtenerPesos($conexion);

if (isset($_SESSION['k_codigo'])) {

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
    <title>PESOS</title>
  </head>
  <body>
  <div class="shadow-sm p-3 mb-5 bg-body rounded">
      <a class="icono" href="pesos.php">
      <ion-icon size="large" class="" name="arrow-back-outline" ></ion-icon>
      </a></div>

    <section class="p-3">

    <h3 class="text-center pb-2">PESOS</h3>
            <div class="table-responsive" id="no-more-tables">


            <table class="table bg-white shadow-sm">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>ID</th>
                        <th>ID - Mascota</th>
                        <th>Peso Actual</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($mostrar=mysqli_fetch_array($row)){?>
                    <form id="form1" name="form1" method="POST" action="baja_peso.php">
                    <tr>
                    <td data-title="ID" scope="row"><input type="hidden" id="id" name="id" value="<?php echo $mostrar['id_peso'] ?>" >
                        <?php echo $mostrar['id_peso'] ?></td>
                        <td data-title="ID - Mascota" scope="row"><?php echo $mostrar['id_mascota'] ?></td>
                        <td data-title="Peso Actual"><?php echo $mostrar['peso_actual'] ?></td>
                        <td data-title="Fecha"><?php echo $mostrar['fecha'] ?></td>
                        <td data-title="Dar De Baja"><button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button></td>
                    </tr>

                </tbody>
                </form>
                <?php } ?>
            </table>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>
<?php
} else {
    header('location: login.php');
}
?>