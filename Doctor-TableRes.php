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
$nomm = $_POST['term'];




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
                <a href="Doctor.php">Asignar Encuestas</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    
    <div class="container-formularios">
        <div class="formulario343">
           
           
           
           <div class="tablaFlow2"><center>
               
               <form name="datosExcel" action="descargarRespuestas.php" method="POST">
               <input type="text" name="nombreTerm" value="<?php echo $nomm;?>" readonly>
               <input type="submit" value="Descargar Excel">
               </form>
               
               
               
               <form name="datosPDF" action="generarPDF.php" method="POST">
            <input type="text" name="nombreTerm2" value="<?php echo $nomm;?>" readonly>
               <input type="submit" value="Descargar PDF">
               </form>
               
               
               
               
               
               </center>
           <table border="1" class="tablaUS2">
                                <thead>
                                    <tr>
                                        <th>idUsuario</th>
                                        <th>Nombre</th>
                                        <th>Pregunta</th>
                                        <th>Respuesta</th>
                                    </tr>
                                </thead>
                                <?php
                                include("./conexion.php");
                                
                                
                            
                            $_SESSION['excelTerm']=$_POST['term'];
                            
                            
                            
                            
                            
                            
                            $sql234=mysqli_query($conn,"SELECT Preguntas.idPregunta,datosPersonales.nombre,pregunta,respuesta FROM Preguntas JOIN ".$nomm."_Preguntas ON ".$nomm."_Preguntas.idPregunta=Preguntas.idPregunta JOIN datosPersonales ON datosPersonales.idUsuario=".$nomm."_Preguntas.idUsuario");
  
  
  if($sql234){
      $sql2="SELECT Preguntas.idPregunta,datosPersonales.nombre,pregunta,respuesta FROM Preguntas JOIN ".$nomm."_Preguntas ON ".$nomm."_Preguntas.idPregunta=Preguntas.idPregunta JOIN datosPersonales ON datosPersonales.idUsuario=".$nomm."_Preguntas.idUsuario";
                                
                                
                                
                             
    $ejecutar2=mysqli_query($obj_conexion, $sql2);
    
    
    while($fila2=mysqli_fetch_array($ejecutar2)){
        ?>
        <tbody>
                                    <tr>
                                        <td><?php echo $fila2[0] ?></td>
                                        <td><?php echo $fila2[1] ?></td>
                                        <td><?php echo $fila2[2] ?></td>
                                        <td><?php echo $fila2[3] ?></td>

                                    </tr>
                                </tbody>
                                 <?php
                                }
                                ?>
                            </table>
                              
                            </div>
                              
        </div>
         
        
    </div>

      

      
      <?php
      
  }else{
      
      echo "<center>No existe ese usuario</center>";
  }
     ?>                       
                            
                            
                            
                            
                            
                            
                            


                            
                              
           
           <br><br>
           
           
     
    
    
                            
                            
                            
     </body>
</html>                       
                            
                            
                            
               