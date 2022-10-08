<?php
$servername = "localhost";
$username = "id18803800_proyectonora_362";
$password = "ClaveNora362_";
$dbname = "id18803800_databasenora";

//$userName=htmlentities(addslashes($_POST["nombreUsuario"]));
$passWord=htmlentities(addslashes($_POST["exampleInputPassword1"]));
$passWord2=htmlentities(addslashes($_POST["exampleInputPassword2"]));
$userType=htmlentities(addslashes($_POST["tiposUser"]));



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




if($userType=="Paciente"){


    $sqlCantidadPacientes = "SELECT count(idUsuario) as cantidad FROM usuarios WHERE tipoUsuario='Paciente'";
    $resultCantidadPacientes = $conn->query($sqlCantidadPacientes);

    $sqlUltimoId = "SELECT MAX(idUsuario) as idUsuario FROM usuarios WHERE tipoUsuario='Paciente'";
    $resultUltimoId = $conn->query($sqlUltimoId);


    if ($resultUltimoId->num_rows > 0) {

        $rowUltimoId = mysqli_fetch_array($resultUltimoId, MYSQLI_ASSOC);
    $UltimoId= $rowUltimoId["idUsuario"];
    $UltimoIdMas1=$UltimoId+1;

    }




    if ($resultCantidadPacientes->num_rows > 0) {


    $rowCantidadPacientes = mysqli_fetch_array($resultCantidadPacientes, MYSQLI_ASSOC);
    $cantidadPaci= $rowCantidadPacientes["cantidad"];
    $cantidadPaciMas1=$cantidadPaci+1;
    $nombreFinalP="Paciente".$cantidadPaciMas1;



if($passWord2==$passWord){


$sqlInsertPaciente = "INSERT INTO usuarios (nombre, clave, tipoUsuario)
VALUES ('".$nombreFinalP."', '".$passWord."', '".$userType."')";


    if ($conn->query($sqlInsertPaciente) === TRUE) {




        
               $sqlUltimoId2 = "SELECT MAX(idUsuario) as idUsuario FROM usuarios WHERE tipoUsuario='Paciente' AND nombre='".$nombreFinalP."'";
                $resultUltimoId2 = $conn->query($sqlUltimoId2);


                if ($resultUltimoId2->num_rows > 0) {

        $rowUltimoId2 = mysqli_fetch_array($resultUltimoId2, MYSQLI_ASSOC);
    $UltimoId2= $rowUltimoId2["idUsuario"];
    $UltimoIdMas1_2=$UltimoId2;


    }



        $sqlCrearTabla="CREATE TABLE ".$nombreFinalP."_Preguntas (
    pregID int NOT NULL AUTO_INCREMENT,
    idPregunta int NOT NULL,
    idUsuario int NOT NULL,
    respuesta varchar(40) NULL,
    valor int NULL,
    bandera int NOT NULL,
    PRIMARY KEY (pregID),
    FOREIGN KEY (idPregunta) REFERENCES Preguntas(idPregunta),
    FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
);";

if ($conn->query($sqlCrearTabla) === TRUE) {

   
               for($i=1;$i<=80;$i++){
                     $sqlPreguntas = "INSERT INTO ".$nombreFinalP."_Preguntas(idPregunta, idUsuario,bandera)
        VALUES (".$i.", '".$UltimoIdMas1_2."','1')";
        
        
        $conn->query($sqlPreguntas);
               
                   
                   
               }


               $sql33 = "INSERT INTO _Paciente (idUsuario, nombre)
                VALUES (".$UltimoIdMas1_2.",'".$nombreFinalP."')";
            
            
            if ($conn->query($sql33) === TRUE) {

                echo json_encode(['respuesta' => true,'mensaje' =>'El usuario '.$nombreFinalP.' fue creado exitosamente!']);




            }else{
                echo json_encode(['respuesta' => false,'mensaje' =>'Hubo un problema al insertar los datos, intente más tarde']);

            }


}



    }


}else{

    echo json_encode(['respuesta' => false,'mensaje' =>'Hubo un problema al insertar los datos, intente más tarde']);


}













    }else{


        echo json_encode(['respuesta' => false,'mensaje' =>'Hubo un problema al insertar los datos, intente más tarde']);

    }






}else{

$sqlCantidadDef = "SELECT count(idUsuario) as cantidad FROM usuarios WHERE tipoUsuario='".$userType."'";

$resultCantidadDef = $conn->query($sqlCantidadDef);

if ($resultCantidadDef->num_rows > 0) {

    $rowCantidadDef= mysqli_fetch_array($resultCantidadDef, MYSQLI_ASSOC);
    $CantidadDef= $rowCantidadDef["cantidad"];
    $cantidadDedMas1=$CantidadDef+1;
    $nombreFinalDef=$userType.$cantidadDedMas1;


    if($passWord2==$passWord){

        $sqlInsertDef = "INSERT INTO usuarios (nombre, clave, tipoUsuario)
        VALUES ('".$nombreFinalDef."', '".$passWord."', '".$userType."')";


            if ($conn->query($sqlInsertDef) === TRUE) {

                echo json_encode(['respuesta' => true,'mensaje' =>'El usuario '.$nombreFinalDef.' fue creado exitosamente!']);



            }else{
                echo json_encode(['respuesta' => false,'mensaje' =>'Hubo un problema al insertar los datos, intente más tarde']);
            }



    }


}else{

    echo json_encode(['respuesta' => false,'mensaje' =>'Hubo un problema al insertar los datos, intente más tarde']);
}







}



$conn->close();

?>