<?php
session_start();
if (!isset($_SESSION['usuarioPaciente']) && !isset($_SESSION['claveUser'])) {
    header("Location:index.php");
}
/*conexion a base de datos*/
include "./conexion.php";

if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

include "./conexion.php";
$nombreU = $_SESSION['usuarioPaciente'];
$sqlNUEVO2 = "SELECT Preguntas.idPregunta FROM Preguntas JOIN " . $nombreU . "_Preguntas ON " . $nombreU . "_Preguntas.idPregunta = Preguntas.idPregunta WHERE " . $nombreU . "_Preguntas.bandera=1 ORDER BY Preguntas.idPregunta LIMIT 1";
$ejecutar2 = mysqli_query($obj_conexion, $sqlNUEVO2);

while ($fila3 = mysqli_fetch_array($ejecutar2)) {
    $acum = $fila3[0];
}

$acum2 = 0;

$sqlNUEVO = "SELECT Preguntas.pregunta FROM Preguntas JOIN " . $nombreU . "_Preguntas ON " . $nombreU . "_Preguntas.idPregunta = Preguntas.idPregunta WHERE " . $nombreU . "_Preguntas.bandera=1 ORDER BY Preguntas.idPregunta LIMIT 5";
$ejecutar = mysqli_query($obj_conexion, $sqlNUEVO);

while ($fila = mysqli_fetch_array($ejecutar)) {

    $acum2++;

    $PREGUN = $fila[0];

    $respu = htmlentities(addslashes($_POST["res" . $acum2]));

    if (($respu) == "Si") {

        $sqlNUEVO2 = "SELECT valorSi FROM Preguntas WHERE pregunta='" . $PREGUN . "'";
        $ejecutar2 = mysqli_query($obj_conexion, $sqlNUEVO2);

        while ($fila2 = mysqli_fetch_array($ejecutar2)) {

            $valorSi_1 = $fila2[0];

        }

        $sql = "UPDATE " . $nombreU . "_Preguntas SET respuesta='" . $respu . "' WHERE idPregunta=" . $acum;
        $sql2 = "UPDATE " . $nombreU . "_Preguntas SET valor=" . $valorSi_1 . " WHERE idPregunta=" . $acum;
        $sql4 = "UPDATE " . $nombreU . "_Preguntas SET bandera=0 WHERE idPregunta=" . $acum;

        if ($obj_conexion->query($sql) === true) {

            if ($obj_conexion->query($sql2) === true) {

                if ($obj_conexion->query($sql4) === true) {
                    echo "<script>
            alert('Registro exitoso');
            window.location= 'encuesta.php'
            </script>";
                }
            }
        }

    } else if (($respu) == "No") {

        $sqlNUEVO22 = "SELECT valorNo FROM Preguntas WHERE pregunta='" . $PREGUN . "'";
        $ejecutar22 = mysqli_query($obj_conexion, $sqlNUEVO22);

        while ($fila22 = mysqli_fetch_array($ejecutar22)) {
            $valorSi_12 = $fila22[0];
        }
        $sql2 = "UPDATE " . $nombreU . "_Preguntas SET respuesta='" . $respu . "' WHERE idPregunta=" . $acum;
        $sql22 = "UPDATE " . $nombreU . "_Preguntas SET valor=" . $valorSi_12 . " WHERE idPregunta=" . $acum;
        $sql42 = "UPDATE " . $nombreU . "_Preguntas SET bandera=0 WHERE idPregunta=" . $acum;

        if ($obj_conexion->query($sql2) === true) {

            if ($obj_conexion->query($sql22) === true) {

                if ($obj_conexion->query($sql42) === true) {
                    echo "<script>
            alert('Registro exitoso');
            window.location= 'encuesta.php'
            </script>";
                }

            }
        }

    }
    $acum++;

}
$obj_conexion->close();
