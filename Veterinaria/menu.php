<?php




session_start();

include_once('servicios.php');
$conexion = $objecto->connectDB();

$objConsulta = new Servicios;

$result1 = mysqli_fetch_array($objConsulta -> totalCalendario($conexion));
$result2 = mysqli_fetch_array($objConsulta -> totalClientes($conexion));
$result3 = mysqli_fetch_array($objConsulta -> totalHistorial($conexion));
$result4 = mysqli_fetch_array($objConsulta -> totalMascotas($conexion));
$result5 = mysqli_fetch_array($objConsulta -> totalPeso($conexion));



if (isset($_SESSION['k_codigo'])) {




?>


    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style.css">
        <title>Menu</title>
    </head>

    <body>

        <div class="navigation1">
            <div class="menuToggle">
            </div>
            <ul>
                <li class="list active" style="--clr:#f44336;">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="analytics-outline"></ion-icon>
                        </span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="list " style="--clr:#ffa117;">
                    <a href="calendario.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="text">Calendario</span>
                    </a>
                </li>
                <li class="list" style="--clr:#0fc70f;">
                    <a href="clientes.php">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>

                        </span>
                        <span class="text">Clientes</span>
                    </a>
                </li>
                <li class="list" style="--clr:#2196f3;">
                    <a href="historial.php">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>

                        </span>
                        <span class="text">Historial</span>
                    </a>
                </li>
                <li class="list" style="--clr:#b145e9;">
                    <a href="mascotas.php">
                        <span class="icon">
                            <ion-icon name="paw-outline"></ion-icon>

                        </span>
                        <span class="text">Mascotas</span>
                    </a>
                </li>
                <li class="list" style="--clr:blue;">
                    <a href="pesos.php">
                        <span class="icon">
                            <ion-icon name="barbell-outline"></ion-icon>
                        </span>
                        <span class="text">Peso</span>
                    </a>
                </li>
            </ul>
        </div>


        <section class="main">
            <div class="container text-center">
                <div class="card shadow-sm">
                    <div class="card-header">
                    <span><a class="btn btn-outline-danger" href="salir.php"><ion-icon name="exit-outline"></ion-icon></a></span>
                        <span><a class="btn btn-outline-warning" href="index.php"> <ion-icon name="chevron-back-outline"></ion-icon></a></span>
                    </div>
                    <div class="card-body">
                        Bienvenido, <span><?php echo $_SESSION['k_nombre']; ?></span>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Total Clientes <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <span><?php echo $result2['total']; ?></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="container ">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Total Mascotas <ion-icon name="paw-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <span><?php echo $result4['total']; ?></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Total Historial <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <span><?php echo $result3['total']; ?></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="container ">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Total Calendarios <ion-icon name="calendar-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <span><?php echo $result1['total']; ?></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="container ">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Total Pesos <ion-icon name="barbell-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <span><?php echo $result5['total']; ?></span>
                    </div>
                </div>
            </div>
        </section>

        <script>
            const menuToggle = document.querySelector('.menuToggle');
            const navigation1 = document.querySelector('.navigation1');

            menuToggle.onclick = function() {

                navigation1.classList.toggle('open');
            }

            const list = document.querySelectorAll('.list');

            function activeLink() {
                list.forEach((item) => {
                    item.classList.remove('active');
                    this.classList.add('active');
                })
            }

            list.forEach((item) => {
                item.addEventListener('click', activeLink)
            })
        </script>

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