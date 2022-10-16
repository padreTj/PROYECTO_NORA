<?php
session_start();

try {
    $nnoo = htmlentities(addslashes($_POST["nome"]));
    $paww = htmlentities(addslashes($_POST["cavee"]));

    include "./conexion.php";
// Check connection
    if ($obj_conexion->connect_error) {
        die("Connection failed: " . $obj_conexion->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE nombre ='" . $nnoo . "' AND clave='" . $paww . "' AND tipoUsuario='Paciente'";
    $result = $obj_conexion->query($sql);

    $sql2 = "SELECT * FROM usuarios WHERE nombre ='" . $nnoo . "' AND clave='" . $paww . "' AND tipoUsuario='Doctor'";
    $result2 = $obj_conexion->query($sql2);

    $sql3 = "SELECT * FROM usuarios WHERE nombre ='" . $nnoo . "' AND clave='" . $paww . "' AND tipoUsuario='Administrador'";
    $result3 = $obj_conexion->query($sql3);

    if ($result->num_rows > 0) {

        $_SESSION['usuarioPaciente'] = $_POST['nome'];
        $mayuUP = ucfirst($_SESSION['usuarioPaciente']);
        $_SESSION['tipoUser'] = $mayuUP;
        $_SESSION['claveUser'] = $_POST['cavee'];

        echo json_encode(['respuesta' => true, 'mensaje' => 'Bienvenido Paciente!']);

    } else if ($result2->num_rows > 0) {

        $_SESSION['usuarioDoctor'] = $_POST['nome'];
        $_SESSION['tipoUser'] = $_SESSION['usuarioDoctor'];
        $_SESSION['claveUser'] = $_POST['cavee'];
        echo json_encode(['respuesta' => true, 'mensaje' => 'Bienvenido Doctor!']);

    } else if ($result3->num_rows > 0) {
        $_SESSION['usuarioAdmin'] = $_POST['nome'];
        $_SESSION['tipoUser'] = $_SESSION['usuarioAdmin'];
        $_SESSION['claveUser'] = $_POST['cavee'];
        echo json_encode(['respuesta' => true, 'mensaje' => 'Bienvenido Admin!']);

    } else {
        echo json_encode(['respuesta' => false, 'mensaje' => 'El nombre o contraseña son incorrectos..']);

    }
    $obj_conexion->close();

} catch (Exception $e) {

    die("Error: " . $e->getMessage());

}
