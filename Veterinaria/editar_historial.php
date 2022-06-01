<?php


session_start();

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
    <title>historial</title>
  </head>
  <body>
  <div class="shadow-sm p-3 mb-5 bg-body rounded">
      <a class="icono" href="historial.php">
      <ion-icon size="large" class="" name="arrow-back-outline" ></ion-icon>
      </a></div>

      <div class="text-center">
        <form class="" method="POST" action="edit_historial.php">
        <h3 class="pb-3">EDITAR HISTORIAL</h3>
                    <div class="carta card rounded shadow-sm text-center">
                    <h6 class="card-title shadow-sm py-2">Editar</h6>
                    <div class="card-body text-center">
                    <div class=" row">
                            <div class="text-center">
                            <label for="id_historial" class="form-label">ID Historial:</label>
                                <input type="number" id="id_historial" name="id_historial" class="input-texto shadow-sm rounded form-control">
                            </div>
                            </div> 
                        <div class=" row">
                            <div class="text-center py-2">
                            <label for="id_mascota" class="form-label">ID Mascota:</label>
                                <input type="number" id="id_mascota" name="id_mascota" class="input-texto shadow-sm rounded form-control">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="text-center">
                            <label for="enfermedad" class="form-label">Enfermedad:</label>
                                <input type="text" id="enfermedad" name="enfermedad" class="input-texto shadow-sm rounded form-control">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="text-center">
                            <label for="f_enfermedad" class="form-label">Fecha De Enfermedad:</label>
                                <input type="date" id="f_enfermedad" name="f_enfermedad" class="input-texto shadow-sm rounded form-control">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="text-center">
                            <label for="id_calendario" class="form-label">ID Calendario:</label>
                                <input type="number" id="id_calendario" name="id_calendario" class="input-texto shadow-sm rounded form-control">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="py-3">
                    <button type="submit" class="shadow-sm boton txt-color incono" ><ion-icon size="large" name="create-outline"></ion-icon></button>
                    </div>
        </form>
    </div>


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