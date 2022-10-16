<?php
session_start();

if (!isset($_SESSION['usuarioAdmin'])) {

    header("Location:index.php");
}

// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('localhost', 'id18803800_proyectonora_362', 'ClaveNora362_', 'id18803800_databasenora');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-estructura2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <title>Consulta Usuario</title>
</head>
<body>
    <header class="bandaEncabezado">
        <div class="Encabezado">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>

            <div class="logo">
                <h1>ICABC</h1>
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
                <a href="Dash-inicio.php">Inicio</a>
                <a href="Dash-AltaUsuario.php">Alta Usuario</a>
                <a href="Dash-Asig.php">Asignar Psicologo</a>
                <a href="Dash-ConsultUser.php">Consultar Usuarios</a>
                <a href="Dash-ModUser.php">Modificar Usuario</a>
                <a href="Dash-BajaUser.php">Baja Usuario</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <div class="container-formularios">
        <div class="formulario">
            <center><br>
                <form name="consultaUsuario" action="Dash-TableUser.php" method="POST">
                            <center>
                                <h2>Consulta un usuario.</h2>
                                <div class="tablaFlow">
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Tipo de Usuario</th>
                                        </tr>
                                    </thead>

                                    <?php
include "./conexion.php";

$sql = "SELECT nombre,tipoUsuario FROM usuarios";
$ejecutar = mysqli_query($obj_conexion, $sql);
while ($fila = mysqli_fetch_array($ejecutar)) {
    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $fila[0] ?></td>
                                            <td><?php echo $fila[1] ?></td>


                                        </tr>
                                    </tbody>
                                    <?php
}
?>
                                </table><br>
                            </div>

                            <br><br>
                        <b>Escribe el nombre del usuario</b><br>
                            <input type="text" name="term" id="term" placeholder="Nombre Usuario" required><br><br>
                            <script type="text/javascript">
                                $(function() {
                                    $( "#term" ).autocomplete({
                                        source: 'ajax-db-search.php',
                                    });
                                });
                            </script>



                            <input type="submit" value="Buscar">

                            </center>
                        </form>
            </center>
        </div>
    </div>
</body>
</html>