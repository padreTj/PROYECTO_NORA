<?php
 

// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('localhost', 'id18803800_proyectonora_362', 'ClaveNora362_', 'id18803800_databasenora');

      
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

                


          

$acum=0;








$query = $mysqli -> query ("SELECT Preguntas.pregunta,Preguntas.idPregunta FROM Preguntas JOIN Paciente8_Preguntas ON  Paciente8_Preguntas.idPregunta = Preguntas.idPregunta WHERE  Paciente8_Preguntas.bandera=1 ORDER BY Preguntas.idPregunta LIMIT 5");





if(mysqli_num_rows($query) > 0){
    
    
    
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
    
    
    
    
    

}else{
    
    
    
    
    
    
    
        
   echo "<center>Ya no hay mas preguntas</center>";
    
    
    
}

 


?>
    


