<?php
session_start();

if (!isset($_SESSION['tipoUser']) && !isset($_SESSION['claveUser'])) {

    header("Location:index.php");

}

/*conexion a base de datos*/
include "./conexion.php";

// Check connection
if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

$nombreUser = $_SESSION['tipoUser'];
$claveUser = $_SESSION['claveUser'];

$sql3 = "SELECT idUsuario FROM usuarios WHERE nombre ='" . $nombreUser . "' AND clave='" . $claveUser . "'";
$res = mysqli_query($obj_conexion, $sql3);
$arr = mysqli_fetch_array($res);

$idUser = $arr[0];

$sql33 = "SELECT * FROM datosPersonales WHERE idUsuario =" . $idUser . "";
$result33 = $obj_conexion->query($sql33);

if ($result33->num_rows > 0) {

    $sql88 = "SELECT * FROM usuarios WHERE nombre ='" . $nombreUser . "' AND clave='" . $claveUser . "' AND tipoUsuario='Paciente'";
    $result55 = $obj_conexion->query($sql88);

    $sql99 = "SELECT * FROM usuarios WHERE nombre ='" . $nombreUser . "' AND clave='" . $claveUser . "' AND tipoUsuario='Doctor'";
    $result66 = $obj_conexion->query($sql99);

    $sql11 = "SELECT * FROM usuarios WHERE nombre ='" . $nombreUser . "' AND clave='" . $claveUser . "' AND tipoUsuario='Administrador'";
    $result77 = $obj_conexion->query($sql11);

    if ($result55->num_rows > 0) {

        echo "<script>

                  window.location= 'Paciente.php'

      </script>";
    } else if ($result66->num_rows > 0) {

        echo "<script>

                  window.location= 'Doctor.php'

      </script>";

    } else if ($result77->num_rows > 0) {

        echo "<script>

                  window.location= 'Dash-inicio.php'

      </script>";

    }

} else {

    echo "<script>
    window.location= 'formularioDP.php'
</script>";

}

$obj_conexion->close();
