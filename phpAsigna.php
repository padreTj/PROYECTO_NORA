<?php
$servername = "localhost";
$username = "id18803800_proyectonora_362";
$password = "ClaveNora362_";
$dbname = "id18803800_databasenora";

$paciente=htmlentities(addslashes($_POST["pac"]));
$psicologo=htmlentities(addslashes($_POST["psi"]));



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO medico_Paciente (idPaciente, idMedico)
VALUES ('".$paciente."', '".$psicologo."')";



     if ($conn->query($sql) === TRUE) {
         
         
         
         
         $sqlDel="DELETE FROM _Paciente WHERE idUsuario='".$paciente."'";
         
         
         
          if ($conn->query($sqlDel) === TRUE) {
              
              
                
        echo "<script>
        alert('Registro exitoso');
          window.location= 'Dash-Asig.php'
</script>";
              
              
          }else{
               echo "<script>
                alert('Ocurrio un error inesperado');
                window.location= 'Dash-Asig.php'
               
    </script>";
          }
         
         

      } else {
        echo "<script>
                alert('Ocurrio un error inesperado');
                window.location= 'Dash-Asig.php'
               
    </script>";
      }

    















   


$conn->close();
?>