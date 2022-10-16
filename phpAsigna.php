<?php
/*conexion a base de datos*/
include "./conexion.php";

$paciente = htmlentities(addslashes($_POST["pac"]));
$psicologo = htmlentities(addslashes($_POST["psi"]));

// Check connection
if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

$sql = "INSERT INTO medico_Paciente (idPaciente, idMedico)
VALUES ('" . $paciente . "', '" . $psicologo . "')";

if ($obj_conexion->query($sql) === true) {

    $sqlDel = "DELETE FROM _Paciente WHERE idUsuario='" . $paciente . "'";

    if ($obj_conexion->query($sqlDel) === true) {

        echo "<script>
        alert('Registro exitoso');
          window.location= 'Dash-Asig.php'
</script>";

    } else {
        echo "<script>
                alert('Ocurrio un error inesperado');
                window.location= 'Dash-Asig.php'

    </script>";
    }

} else {
    echo "<script>
                alert('Ocurrio un error inesperado');
                window.location= 'Dash-Asig.php'

    </script>";
}

$obj_conexion->close();
