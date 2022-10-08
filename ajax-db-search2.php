<?php
 session_start();
    $servername='localhost';
    $username='id18803800_proyectonora_362';
    $password='ClaveNora362_';
    $dbname = "id18803800_databasenora";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }


                $nombre=$_SESSION['usuarioDoctor'];
                $sql55 = "SELECT * FROM usuarios WHERE nombre='".$nombre."'";
                $result55 = $conn->query($sql55);
                
                if ($result55->num_rows > 0) {
                    
                    $row = mysqli_fetch_array($result55, MYSQLI_ASSOC);
                    $idU= $row["idUsuario"];

                  }


if (isset($_GET['term'])) {





     
   $query = "SELECT usuarios.idUsuario,usuarios.nombre,usuarios.tipoUsuario FROM usuarios JOIN medico_Paciente ON medico_Paciente.idPaciente=usuarios.idUsuario WHERE idMedico=".$idU." AND nombre LIKE '%{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['nombre'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>