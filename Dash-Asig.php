
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
    <title>Asigna Psicologo</title>
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
                <form name="asigPsi" action="phpAsigna.php" method="POST">

                            
                                <h1>Asigna un psicologo al paciente.</h1><br>
                                <select name="pac" required>
                                <option selected disabled value="">Selecciona un paciente</option>
                                <?php
                                $query = $mysqli -> query ("SELECT nombre,idUsuario FROM _Paciente ORDER BY idUsuario DESC");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idUsuario].'">'.$valores[nombre].'</option>';
                                }
                                ?>
                            </select> <br><br><br>   

                            <select name="psi" required>
                                <option selected disabled value="">Selecciona un psicologo</option>
                                <?php
                                $query = $mysqli -> query ("SELECT nombre,idUsuario FROM usuarios WHERE tipoUsuario='Doctor' ORDER BY idUsuario DESC");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idUsuario].'">'.$valores[nombre].'</option>';
                                }
                                ?>
                            </select><br><br><br>
                            <input id="submit" type="submit" class="btn btn-primary" value="Asignar Psicologo"></input>
                        </form>
            </center>
        </div>
    </div>
</body>
</html>