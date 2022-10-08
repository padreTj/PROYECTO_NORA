<?php
 session_start();

if(!isset($_SESSION['tipoUser']) && !isset($_SESSION['claveUser'])){

  header("Location:index.php");
}
 
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('localhost', 'id18803800_proyectonora_362', 'ClaveNora362_', 'id18803800_databasenora');


$nombreU=$_SESSION['tipoUser'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/cssFormularioDP.css">
    <title>Inicio</title>
</head>
<body>
    <header class="bandaEncabezado">
        <div class="Encabezado">
           
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

                
                $nombre=$_SESSION['usuarioPaciente'];
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
                <a href="Paciente.php">Regresar</a>
            </nav>
        </div>
    </header>
    <input type="checkbox" id="btn-menu">
    
    <div class="container-formularios">




  <form name="preguForm" action="phpEnviarPregResu.php" method="POST">
  
<div class="form">
    <div class="subtitle">
        
        
        <?php

$acum=0;


$todoMin=strtolower($nombreU);
$primerMayu=ucfirst($todoMin);



$query = $mysqli -> query ("SELECT Preguntas.pregunta,Preguntas.idPregunta FROM Preguntas JOIN ".$primerMayu."_Preguntas ON ".$primerMayu."_Preguntas.idPregunta = Preguntas.idPregunta WHERE ".$primerMayu."_Preguntas.bandera=1 ORDER BY Preguntas.idPregunta LIMIT 5");





if(mysqli_num_rows($query) == 0){
    
    echo "<center>Ya no hay mas preguntas.$primerMayu</center>";
    
   
    
    
    
    
    

}else{
    
    
    
    
    
    
    
        
   
    while ($valores = mysqli_fetch_array($query)) {
$acum++;
  $nume=$valores['idPregunta'];
  echo ''.$nume.'.- '.$valores['pregunta'].'<br><input type="radio" id="si" name="res'.$acum.'" value="Si">
<label for="si">Si</label><br>
<input type="radio" id="no" name="res'.$acum.'" value="No">
<label for="no">No</label><br><br>
';

}
    echo "<input type='submit' class='submit' value='Enviar'>";
    
    
    
}

 


?>
     </div>   
        
        
           
           
         
        
    
        
    </div>

 </form


