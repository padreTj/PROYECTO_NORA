<?php
session_start();
if (!isset($_SESSION['tipoUser']) && !isset($_SESSION['claveUser'])) {
    header("Location:index.php");
}
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('localhost', 'root', '', 'proyecto_nora');
$nombreU = $_SESSION['tipoUser'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-3.min.css" rel="stylesheet">
    <link href="" rel="stylesheet">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       

        <div id="content-wrapper" class="d-flex flex-column">

            <div class="text-white" style="background-color: #A87C4D;"><center>
                Telefono: 664 7625 882
            </center></div>
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
<?php

/*conexion a base de datos*/
include "./conexion.php";

// Check connection
if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

$nombre = $_SESSION['usuarioPaciente'];
$sql55 = "SELECT * FROM usuarios WHERE nombre='" . $nombre . "'";
$result55 = $obj_conexion->query($sql55);

if ($result55->num_rows > 0) {

    $row = mysqli_fetch_array($result55, MYSQLI_ASSOC);
    $idU = $row["idUsuario"];

    $sql552 = "SELECT nombre FROM datosPersonales WHERE idUsuario=" . $idU;
    $result552 = $obj_conexion->query($sql552);

    if ($result552->num_rows > 0) {

        $row2 = mysqli_fetch_array($result552, MYSQLI_ASSOC);
        $nomb = $row2["nombre"];

    }

} else {
    echo "no";
}
echo $nomb;

?></span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->


    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

    <div class="card">
  <h5 class="card-header">Preguntas</h5>
  <div class="card-body mx-auto">

  <div class="preguntas">

<form name="preguForm" action="phpEnviarPregResu.php" method="POST">

    <div class="form">
        <div class="subtitle">

            <?php

                try {
                    $acum = 0;

                    $todoMin = strtolower($nombreU);
                    $primerMayu = ucfirst($todoMin);

                    $query = $mysqli->query("SELECT Preguntas.pregunta,Preguntas.idPregunta FROM Preguntas JOIN " . $primerMayu . "_Preguntas ON " . $primerMayu . "_Preguntas.idPregunta = Preguntas.idPregunta WHERE " . $primerMayu . "_Preguntas.bandera=1 ORDER BY Preguntas.idPregunta LIMIT 5");

                    if (mysqli_num_rows($query) == 0) {

                        echo "<center>Ya no hay mas preguntas.$primerMayu</center>";

                    } else {

                        while ($valores = mysqli_fetch_array($query)) {
                            $acum++;
                            $nume = $valores['idPregunta'];
                            echo '' . $nume . '.- ' . $valores['pregunta'] . '<br><input type="radio" id="si" name="res' . $acum . '" value="Si" required>
                            <label for="si">Si</label><br>
                            <input type="radio" id="no" name="res' . $acum . '" value="No" required>
                            <label for="no">No</label><br><br>
                            ';

                        }
                        echo "<input type='submit' class='submit' value='Enviar'>";

                    }
                    } catch (Exception $e) {
                        echo'<script type="text/javascript">
                        alert("Tarea Guardada");
                        window.location.href="index.php";
                        </script>';
                    }
            ?>
    </div>
</div>
</div>
  
</div>
</div>


    </div>


            </div>

            <!-- Footer -->
    <footer class="footer bg-white text-center ">
        <div class="container">
            <div class="copyright text-center">
                <span>Copyright &copy; ICABC 2022</span>
            </div>
        </div>
    </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrando sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Cerrar Sesión" si estas listo para salir.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="cerrarSesion.php">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>