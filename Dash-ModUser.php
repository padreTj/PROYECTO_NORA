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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>




    <title>Modificar Usuario</title>
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
                <a href="Dash-ModUser">Modificar Usuario</a>
                <a href="Dash-BajaUser.php">Baja Usuario</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <div class="container-formularios">
        <div class="formulario">
            <center><br>
                <form name="modU" action="phpModUs.php" method="POST">


                                <b>Escribe el nombre</b><br>
                            <input type="text" name="term" id="term" placeholder="Nombre Usuario" required><br><br>
                            <script type="text/javascript">
                                $(function() {
                                    $( "#term" ).autocomplete({
                                        source: 'ajax-db-search.php',
                                    });
                                });
                            </script> <br><br>






                            <select name="camp" onChange="mostrar(this.value);" required>
                                <option selected disabled value="">Selecciona el campo a modificar</option>
                                <option value="nombre">Nombre</option>
                                <option value="clave">Clave</option>
                                <option value="tipoUsuario">Tipo de usuario</option>

                            </select><br><br><br>

                            <div id="nombre" style="display: none;">
                            <input type="text" name="nombreUsuario" placeholder="Nombre de usuario">
                            </div>

                            <div id="clave" style="display: none;">
                            <input type="text" name="clav" placeholder="Clave de usuario">
                            </div>



                            <div id="tipoUsuario" style="display: none;">

                            <select id="tipoUs" name="tipoUs">
                                <option selected disabled value="">Tipo de usuario</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Paciente">Paciente</option>
                            </select>

                            </div><br><br>

                            <input type="submit" value="Modificar"></input>
                        </form>
            </center>
        </div>
    </div>
</body>
</html>



<script type="text/javascript">

function mostrar(id) {
    if (id == "tipoUsuario") {
        $("#tipoUsuario").show();
        $("#nombre").hide();
        $("#clave").hide();
    }else if(id == "nombre"){
        $("#tipoUsuario").hide();
        $("#nombre").show();
        $("#clave").hide();
    }else if(id == "clave"){
        $("#tipoUsuario").hide();
        $("#nombre").hide();
        $("#clave").show();
    }


}
</script>
