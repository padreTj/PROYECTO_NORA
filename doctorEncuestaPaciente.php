<?php

session_start();

if(!isset($_SESSION['tipoUser']) && !isset($_SESSION['claveUser']) && !isset($_SESSION['usuarioDoctor'])){

  header("Location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-estructura4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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

           
$servername = "localhost";
$username = "id18803800_proyectonora_362";
$password = "ClaveNora362_";
$dbname = "id18803800_databasenora";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

                
                $nombre=$_SESSION['usuarioDoctor'];
                $sql55 = "SELECT * FROM usuarios WHERE nombre='".$nombre."'";
                $result55 = $conn->query($sql55);
                
                if ($result55->num_rows > 0) {
                    
                    $row = mysqli_fetch_array($result55, MYSQLI_ASSOC);
                    $idU= $row["idUsuario"];
                    
                    $sql552 = "SELECT nombre FROM datosPersonales WHERE idUsuario=".$idU;
                $result552 = $conn->query($sql552);
                
                if ($result552->num_rows > 0) {
                    
                    $row2 = mysqli_fetch_array($result552, MYSQLI_ASSOC);
                    $nomb= $row2["nombre"];
                    
                }
                    
                    
                
                    
                }else{
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
                <a href="Doctor.php">Inicio</a>
                <a href="doctorConsultUser.php">Datos Paciente</a>
                <a href="doctorEncuestaPaciente.php">Encuestas Pacientes</a>
                <a href="">Asignar Encuestas</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <div class="container-formularios">
        <div class="formulario">
            <center><br>
               <form name="consultaUsuario" action="Doctor-TableRes.php" method="POST">
                            <center>
                                <h2>Consulta un respuestas.</h2>
                                <div class="tablaFlow">
                                <table border="1" class="tablaUS">
                                    <thead>
                                        <tr>
                                            <th>idUsuario</th>
                                            <th>Nombre</th>
                                            <th>Tipo de Usuario</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    include("./conexion.php");





                                    $sql="SELECT idUsuario,nombre,tipoUsuario FROM usuarios JOIN medico_Paciente ON medico_Paciente.idPaciente=usuarios.idUsuario WHERE idMedico=".$idU;
                                    $ejecutar=mysqli_query($obj_conexion, $sql);
                                    while($fila=mysqli_fetch_array($ejecutar)){
                                    ?>
                                    <tbody>
                                        <tr>
                                           <td><?php echo $fila[0] ?></td>
                                           <td><?php echo $fila[1] ?></td>
                                           <td><?php echo $fila[2] ?></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table><br>
                            </div>
                           <br><br>
                         <b>Escribe el nombre del paciente</b><br>
                            <input type="text" name="term" id="term" placeholder="Nombre Usuario" required><br><br>
                            <script type="text/javascript">
                                $(function() {
                                    $( "#term" ).autocomplete({
                                        source: 'ajax-db-search2.php',
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