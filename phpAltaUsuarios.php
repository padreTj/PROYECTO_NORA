<?php
/*conexion a base de datos*/
include "./conexion.php";

//$userName=htmlentities(addslashes($_POST["nombreUsuario"]));
$passWord = htmlentities(addslashes($_POST["exampleInputPassword1"]));
$passWord2 = htmlentities(addslashes($_POST["exampleInputPassword2"]));
$userType = htmlentities(addslashes($_POST["tiposUser"]));

// Check connection
if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

if ($userType == "Paciente") {

    $sqlCantidadPacientes = "SELECT count(idUsuario) as cantidad FROM usuarios WHERE tipoUsuario='Paciente'";
    $resultCantidadPacientes = $obj_conexion->query($sqlCantidadPacientes);

    $sqlUltimoId = "SELECT MAX(idUsuario) as idUsuario FROM usuarios WHERE tipoUsuario='Paciente'";
    $resultUltimoId = $obj_conexion->query($sqlUltimoId);

    if ($resultUltimoId->num_rows > 0) {

        $rowUltimoId = mysqli_fetch_array($resultUltimoId, MYSQLI_ASSOC);
        $UltimoId = $rowUltimoId["idUsuario"];
        $UltimoIdMas1 = $UltimoId + 1;

    }

    if ($resultCantidadPacientes->num_rows > 0) {

        $rowCantidadPacientes = mysqli_fetch_array($resultCantidadPacientes, MYSQLI_ASSOC);
        $cantidadPaci = $rowCantidadPacientes["cantidad"];
        $cantidadPaciMas1 = $cantidadPaci + 1;
        $nombreFinalP = "Paciente" . $cantidadPaciMas1;

        if ($passWord2 == $passWord) {

            $sqlInsertPaciente = "INSERT INTO usuarios (nombre, clave, tipoUsuario)
VALUES ('" . $nombreFinalP . "', '" . $passWord . "', '" . $userType . "')";

            if ($obj_conexion->query($sqlInsertPaciente) === true) {

                $sqlUltimoId2 = "SELECT MAX(idUsuario) as idUsuario FROM usuarios WHERE tipoUsuario='Paciente' AND nombre='" . $nombreFinalP . "'";
                $resultUltimoId2 = $obj_conexion->query($sqlUltimoId2);

                if ($resultUltimoId2->num_rows > 0) {

                    $rowUltimoId2 = mysqli_fetch_array($resultUltimoId2, MYSQLI_ASSOC);
                    $UltimoId2 = $rowUltimoId2["idUsuario"];
                    $UltimoIdMas1_2 = $UltimoId2;

                }

                $sqlCrearTabla = "CREATE TABLE " . $nombreFinalP . "_Preguntas (
    pregID int NOT NULL AUTO_INCREMENT,
    idPregunta int NOT NULL,
    idUsuario int NOT NULL,
    respuesta varchar(40) NULL,
    valor int NULL,
    bandera int NOT NULL,
    PRIMARY KEY (pregID),
    FOREIGN KEY (idPregunta) REFERENCES Preguntas(idPregunta),
    FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
);";

                if ($obj_conexion->query($sqlCrearTabla) === true) {

                    for ($i = 1; $i <= 80; $i++) {
                        $sqlPreguntas = "INSERT INTO " . $nombreFinalP . "_Preguntas(idPregunta, idUsuario,bandera)
        VALUES (" . $i . ", '" . $UltimoIdMas1_2 . "','1')";

                        $obj_conexion->query($sqlPreguntas);

                    }

                    $sql33 = "INSERT INTO _Paciente (idUsuario, nombre)
                VALUES (" . $UltimoIdMas1_2 . ",'" . $nombreFinalP . "')";

                    if ($obj_conexion->query($sql33) === true) {

                        echo json_encode(['respuesta' => true, 'mensaje' => 'El usuario ' . $nombreFinalP . ' fue creado exitosamente!']);

                    } else {
                        echo json_encode(['respuesta' => false, 'mensaje' => 'Hubo un problema al insertar los datos, intente más tarde']);

                    }

                }

            }

        } else {

            echo json_encode(['respuesta' => false, 'mensaje' => 'Hubo un problema al insertar los datos, intente más tarde']);

        }

    } else {

        echo json_encode(['respuesta' => false, 'mensaje' => 'Hubo un problema al insertar los datos, intente más tarde']);

    }

} else {

    $sqlCantidadDef = "SELECT count(idUsuario) as cantidad FROM usuarios WHERE tipoUsuario='" . $userType . "'";

    $resultCantidadDef = $obj_conexion->query($sqlCantidadDef);

    if ($resultCantidadDef->num_rows > 0) {

        $rowCantidadDef = mysqli_fetch_array($resultCantidadDef, MYSQLI_ASSOC);
        $CantidadDef = $rowCantidadDef["cantidad"];
        $cantidadDedMas1 = $CantidadDef + 1;
        $nombreFinalDef = $userType . $cantidadDedMas1;

        if ($passWord2 == $passWord) {

            $sqlInsertDef = "INSERT INTO usuarios (nombre, clave, tipoUsuario)
        VALUES ('" . $nombreFinalDef . "', '" . $passWord . "', '" . $userType . "')";

            if ($obj_conexion->query($sqlInsertDef) === true) {

                echo json_encode(['respuesta' => true, 'mensaje' => 'El usuario ' . $nombreFinalDef . ' fue creado exitosamente!']);

            } else {
                echo json_encode(['respuesta' => false, 'mensaje' => 'Hubo un problema al insertar los datos, intente más tarde']);
            }

        }

    } else {

        echo json_encode(['respuesta' => false, 'mensaje' => 'Hubo un problema al insertar los datos, intente más tarde']);
    }

}

$obj_conexion->close();
