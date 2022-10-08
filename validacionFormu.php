<?php
session_start();

if(!isset($_SESSION['tipoUser']) && !isset($_SESSION['claveUser'])){

  header("Location:index.php");

}




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




$nombreUser=$_SESSION['tipoUser'];
$claveUser=$_SESSION['claveUser'];


                


$sql3 = "SELECT idUsuario FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."'";
$res = mysqli_query($conn, $sql3);
$arr = mysqli_fetch_array($res);

$idUser=$arr[0];



$sql33 = "SELECT * FROM datosPersonales WHERE idUsuario =".$idUser."";
$result33 = $conn->query($sql33);



if ($result33->num_rows > 0) {






    $sql88 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Paciente'";
    $result55 = $conn->query($sql88);
    
    
    $sql99 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Doctor'";
    $result66 = $conn->query($sql99);
    
    
    $sql11 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Administrador'";
    $result77 = $conn->query($sql11);



if ($result55->num_rows > 0) {
   
            
              echo "<script>
                 
                  window.location= 'Paciente.php'
                 
      </script>";
  } else if($result66->num_rows > 0){
  

           
  
              echo "<script>
               
                  window.location= 'Doctor.php'
                 
      </script>";
  
  }else if($result77->num_rows > 0){
  
 
  
              echo "<script>
               
                  window.location= 'Dash-inicio.php'
               
      </script>";
  
  }




    


}else{



    echo "<script>
    window.location= 'formularioDP.php'
</script>";

}



$conn->close();




?>