<?php
$servername = "localhost";
$username = "id18803800_proyectonora_362";
$password = "ClaveNora362_";
$dbname = "id18803800_databasenora";

$userName1=htmlentities(addslashes($_POST["term"]));

$campo=htmlentities(addslashes($_POST["camp"]));



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





if($campo=="nombre"){
    $userName2=htmlentities(addslashes($_POST["nombreUsuario"]));



    $sql = "UPDATE usuarios SET nombre='".$userName2."' WHERE nombre='".$userName1."'";
    if ($conn->query($sql) === TRUE) {

        $sql2 = "SELECT * FROM _Paciente WHERE nombre='".$userName1."'";
        $result = $conn->query($sql2);

        if ($result->num_rows > 0) {

            $sql3 = "UPDATE _Paciente SET nombre='".$userName2."' WHERE nombre='".$userName1."'";
            if ($conn->query($sql3) === TRUE) {

$SQLRENAME2="ALTER TABLE ".$userName1."_Preguntas RENAME ".$userName2."_Preguntas";
            if ($conn->query($SQLRENAME2) === TRUE) {

                     echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'
               
            </script>";


            }

            }


        }else{
            $SQLRENAME="ALTER TABLE ".$userName1."_Preguntas RENAME ".$userName2."_Preguntas";
            if ($conn->query($SQLRENAME) === TRUE) {

                echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'
               
            </script>";


            }
        }




        
    }


}else if($campo=="clave"){

    $clave=htmlentities(addslashes($_POST["clav"]));

    $sql67 = "UPDATE usuarios SET clave='".$clave."' WHERE nombre='".$userName1."'";
    if ($conn->query($sql67) === TRUE) {

        echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'
               
            </script>";

    }

}else if($campo=="tipoUsuario"){

    $tipoUsu=htmlentities(addslashes($_POST["tipoUs"]));

    $sql68 = "UPDATE usuarios SET tipoUsuario='".$tipoUsu."' WHERE nombre='".$userName1."'";

    if ($conn->query($sql68) === TRUE) {

        $sql70 = "DROP TABLE ".$userName1."_Preguntas";
        if ($conn->query($sql70) === TRUE) {

            $sql2001 = "SELECT * FROM _Paciente WHERE nombre='".$userName1."'";
        $result2001 = $conn->query($sql2001);


        if ($result2001->num_rows > 0) {

            $sql7001 = "DELETE FROM _Paciente WHERE nombre='".$userName1."'";
            if ($conn->query($sql7001) === TRUE) {

                 echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'
               
            </script>";

            }



        }else{
            $sql8001 = "DELETE FROM medico_Paciente WHERE idPaciente=(SELECT idUsuario FROM usuarios WHERE nombre='".$userName1."')";
            if ($conn->query($sql8001) === TRUE) {

                 echo "<script>
                alert('UPDATE EXITOSO');
                window.location= 'Dash-ModUser.php'
               
            </script>";

            }




        }


















        }


    }



}






$conn->close();

?>