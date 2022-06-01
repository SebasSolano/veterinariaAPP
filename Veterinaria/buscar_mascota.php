<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>BUSCAR</title>
  </head>
  <body>
  <div class="shadow-sm p-3 mb-5 bg-body rounded">
      <a class="icono" href="index.php">
      <ion-icon size="large" class="" name="arrow-back-outline" ></ion-icon>
      </a></div>

      <div class="text-center ">
        <form class="" method="POST" action="mostrar_mascota.php">
        <h3 class="pb-3 txt-color">BUSCAR MASCOTA</h3>
                    <div class="carta txt-color card rounded shadow-sm text-center">
                    <h6 class="card-title shadow-sm py-2">ALIAS</h6>
                    <div class="card-body text-center">
                        <div class=" row">
                            <div class="text-center ">
                                <input type="text" id="alias" name="alias" class="input-texto text-center shadow-sm rounded form-control txt-color">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="py-3">
                        <button type="submit" class="shadow-sm boton txt-color incono" ><ion-icon name="search-outline"></ion-icon></button>
                    </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>