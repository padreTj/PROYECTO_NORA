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




$nombre1=htmlentities(addslashes($_POST["nombreReal"]));
$apePat=htmlentities(addslashes($_POST["apellidoPaterno"]));
$apeMa=htmlentities(addslashes($_POST["apellidoMaterno"]));
$age=htmlentities(addslashes($_POST["edad"]));
$sex=htmlentities(addslashes($_POST["sexo"]));
$correoE=htmlentities(addslashes($_POST["correoElectronico"]));

$nombreUser=$_SESSION['tipoUser'];
$claveUser=$_SESSION['claveUser'];





$sql3 = "SELECT idUsuario FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."'";
$res = mysqli_query($conn, $sql3);
$arr = mysqli_fetch_array($res);

$idUser=$arr[0];





$sql33 = "SELECT * FROM datosPersonales WHERE idUsuario ='".$idUser."'";
$result33 = $conn->query($sql33);



if ($result33->num_rows > 0) {





    echo "<script>
    alert('ya hay un valor en dp');
    
</script>";



$sql88 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Paciente'";
$result55 = $conn->query($sql88);


$sql99 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Doctor'";
$result66 = $conn->query($sql99);


$sql11 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Admin'";
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
       
          window.location= 'Dashboard.php'
         
</script>";

}
 


}else{




    $sql = "INSERT INTO datosPersonales (idUsuario,nombre,apellidoPaterno,apellidoMaterno,edad,sexo,correoE)
    VALUES (".$idUser.", '".$nombre1."', '".$apePat."','".$apeMa."',".$age.",'".$sex."','".$correoE."')";
    
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Registro exitoso,vuelve a iniciar sesion <3');
            
    </script>";
    $_SESSION['valiForm']=1;
    $_SESSION['nombreValiForm']=$nombreUser;
            } else {
            echo "<script>
                    alert('Ocurrio un error inesperado');
                    window.location= 'index.php'
        </script>";}
    
    

$sql88 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Paciente'";
$result55 = $conn->query($sql88);


$sql99 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Doctor'";
$result66 = $conn->query($sql99);


$sql11 = "SELECT * FROM usuarios WHERE nombre ='".$nombreUser."' AND clave='".$claveUser."' AND tipoUsuario='Admin'";
$result77 = $conn->query($sql11);



if ($result55->num_rows > 0) {

        
        session_destroy();
          echo "<script>
             
              window.location= 'Paciente.php'
             
  </script>";
} else if($result66->num_rows > 0){


       
session_destroy();
          echo "<script>
           
              window.location= 'Doctor.php'
             
  </script>";

}else if($result77->num_rows > 0){

session_destroy();
          echo "<script>
           
              window.location= 'Dashboard.php'
             
  </script>";

}

    


}



$conn->close();




?>