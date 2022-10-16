<?php
/*conexion a base de datos*/
include "./conexion.php";

$userName1 = htmlentities(addslashes($_POST["term"]));
$campo = htmlentities(addslashes($_POST["camp"]));

if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

if ($campo == "nombre") {
    $userName2 = htmlentities(addslashes($_POST["nombreUsuario"]));

    $sql = "UPDATE usuarios SET nombre='" . $userName2 . "' WHERE nombre='" . $userName1 . "'";
    if ($obj_conexion->query($sql) === true) {

        $sql2 = "SELECT * FROM _Paciente WHERE nombre='" . $userName1 . "'";
        $result = $obj_conexion->query($sql2);

        if ($result->num_rows > 0) {

            $sql3 = "UPDATE _Paciente SET nombre='" . $userName2 . "' WHERE nombre='" . $userName1 . "'";
            if ($obj_conexion->query($sql3) === true) {

                $SQLRENAME2 = "ALTER TABLE " . $userName1 . "_Preguntas RENAME " . $userName2 . "_Preguntas";
                if ($obj_conexion->query($SQLRENAME2) === true) {

                    echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'

            </script>";

                }

            }

        } else {
            $SQLRENAME = "ALTER TABLE " . $userName1 . "_Preguntas RENAME " . $userName2 . "_Preguntas";
            if ($obj_conexion->query($SQLRENAME) === true) {

                echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'

            </script>";

            }
        }

    }

} else if ($campo == "clave") {

    $clave = htmlentities(addslashes($_POST["clav"]));

    $sql67 = "UPDATE usuarios SET clave='" . $clave . "' WHERE nombre='" . $userName1 . "'";
    if ($obj_conexion->query($sql67) === true) {

        echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'

            </script>";

    }

} else if ($campo == "tipoUsuario") {

    $tipoUsu = htmlentities(addslashes($_POST["tipoUs"]));

    $sql68 = "UPDATE usuarios SET tipoUsuario='" . $tipoUsu . "' WHERE nombre='" . $userName1 . "'";

    if ($obj_conexion->query($sql68) === true) {

        $sql70 = "DROP TABLE " . $userName1 . "_Preguntas";
        if ($obj_conexion->query($sql70) === true) {

            $sql2001 = "SELECT * FROM _Paciente WHERE nombre='" . $userName1 . "'";
            $result2001 = $obj_conexion->query($sql2001);

            if ($result2001->num_rows > 0) {

                $sql7001 = "DELETE FROM _Paciente WHERE nombre='" . $userName1 . "'";
                if ($obj_conexion->query($sql7001) === true) {

                    echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'

            </script>";

                }

            } else {
                $sql8001 = "DELETE FROM medico_Paciente WHERE idPaciente=(SELECT idUsuario FROM usuarios WHERE nombre='" . $userName1 . "')";
                if ($obj_conexion->query($sql8001) === true) {

                    echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'

            </script>";

                }

            }

        }

    }

}

$obj_conexion->close();
