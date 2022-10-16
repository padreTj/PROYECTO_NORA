<?php

session_start();

if (!isset($_SESSION['tipoUser']) && !isset($_SESSION['claveUser']) && !isset($_SESSION['usuarioPaciente'])) {

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-estructura3.css">
    <title>Inicio</title>
</head>
<body>
    <header class="bandaEncabezado">
        <div class="Encabezado">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>

            <div class="logo">
                <h1><?php

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

?></h1>
            </div>

            <nav class="menu">
                    <a href="cerrarSesion.php">Cerrar Sesion</a>
            </nav>
        </div>
    </header>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="barraLateral">

            <nav>
                <a href="Paciente.php">Inicio</a>
                <a href="encuesta.php">Contestar Encuesta</a>
                <a href="">Revisar Comentarios</a>
                <a href="">Modificar datos</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <div class="container-formularios">
        <div class="formulario2">


            <center><br>
                <div class="logo2">
                    <img src="img/Logo3.svg">
                </div>
            </center>



        </div>
    </div>
</body>
</html>