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
    <title>calendario</title>
  </head>
  <body>
  <div class="shadow-sm p-3 mb-5 bg-body rounded">
      <a class="icono" href="menu.php">
      <ion-icon size="large" class="" name="arrow-back-outline" ></ion-icon>
      </a>
      
      
    </div>


      <section class="m-5">
      <div class="container text-center">
      <h5 class="text-center py-2">MODULO CALENDARIO</h5>
          <div class="row">
            <div class="p-1 ">
  
                <div class="card shadow-sm rounded-3 carta py-1">
                  <a class="icono" href="tabla_calendario.php">
                  <ion-icon class="icons" name="bar-chart-outline"></ion-icon>
                  <div class="card-body">
                    <h6 class="card-text">Tabla Calendario</h6>
                  </div>
              </a>
                </div>
  
            </div>
            <div class="p-1 py-3">
              
                <div class="card shadow-sm rounded-3 carta">
                  <a class="icono" href="agregar_calendario.php">
                  <ion-icon class="icons" name="add-circle-outline"></ion-icon>
                  <div class="card-body">
                    <h6 class="card-text">Agregar Calendario</h6>
                  </div>
              </a>
                </div>
  
            </div>
            <div class="p-1 py-3">
  
                <div class="card shadow-sm rounded-3 carta" >
                  <a class="icono" href="editar_calendario.php">
                  <ion-icon class="icons" name="create-outline"></ion-icon>
                  <div class="card-body">
                    <h6 class="card-text">Editar Calendario</hh6>
                  </div>
              </a>
                </div>
  
            </div>
          </div>
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