<?php
$servername = "localhost";
$username = "id18803800_proyectonora_362";
$password = "ClaveNora362_";
$dbname = "id18803800_databasenora";

$userName1=htmlentities(addslashes($_POST["term"]));



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql55 = "SELECT idUsuario,tipoUsuario FROM usuarios WHERE nombre='".$userName1."'";
$result55 = $conn->query($sql55);
    
if ($result55->num_rows > 0) {

    $row = mysqli_fetch_array($result55, MYSQLI_ASSOC);
    $tipU= $row["tipoUsuario"];
    $idUser= $row["idUsuario"];


    if($tipU=="Paciente"){

        $sql1 = "SELECT * FROM medico_Paciente WHERE idPaciente=".$idUser;
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {


            $sql2 = "DELETE FROM medico_Paciente WHERE idPaciente=".$idUser;
            if ($conn->query($sql2) === TRUE) {


                $sql3 = "DROP TABLE ".$userName1."_Preguntas";
                if ($conn->query($sql3) === TRUE) {

                    $sql1331 = "SELECT * FROM datosPersonales WHERE idUsuario=".$idUser;
                    $result19988 = $conn->query($sql1331);

                    if ($result19988->num_rows > 0) {
                        $sql6692 = "DELETE FROM datosPersonales WHERE idUsuario=".$idUser;
                        if ($conn->query($sql6692) === TRUE) {

                            $sql99 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                            if ($conn->query($sql99) === TRUE) {

                                echo "<script>
                                alert('DELETE EXITOSO');
                                window.location= 'Dash-BajaUser.php'
                                </script>";
                            }
                        }
                    }else{
                        $sql99 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                            if ($conn->query($sql99) === TRUE) {

                                echo "<script>
                                alert('DELETE EXITOSO');
                                window.location= 'Dash-BajaUser.php'
                                </script>";
                            }
                        }
                    }
                }
            }else{
            $sql4 = "DELETE FROM _Paciente WHERE idUsuario=".$idUser;
            if ($conn->query($sql4) === TRUE) {

                $sql3 = "DROP TABLE ".$userName1."_Preguntas";
                if ($conn->query($sql3) === TRUE) {

                    $sql13371 = "SELECT * FROM datosPersonales WHERE idUsuario=".$idUser;
                    $result199828 = $conn->query($sql13371);
                    if ($result199828->num_rows > 0) {
                        $sql662922 = "DELETE FROM datosPersonales WHERE idUsuario=".$idUser;
                        if ($conn->query($sql662922) === TRUE) {
                            $sql66236 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                            if ($conn->query($sql66236) === TRUE) {
                                echo "<script>
                                alert('DELETE EXITOSO');
                                window.location= 'Dash-BajaUser.php'
                                </script>";
                            }
                        }
                    }else{

                        $sql666 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                        if ($conn->query($sql666) === TRUE) {
                            echo "<script>
                            alert('DELETE EXITOSO');
                            window.location= 'Dash-BajaUser.php'
                            </script>";
                        }
                    }
                }
            }
        }
    }else if($tipU=="Doctor"){

        $sql887 = "SELECT * FROM medico_Paciente WHERE idMedico=".$idUser;
        $result001 = $conn->query($sql887);

        if ($result001->num_rows > 0) {

            $sql2001 = "DELETE FROM medico_Paciente WHERE idMedico=".$idUser;
            if ($conn->query($sql2001) === TRUE) {

                $sql133t71 = "SELECT * FROM datosPersonales WHERE idUsuario=".$idUser;
                $result19982y8 = $conn->query($sql133t71);
                if ($result19982y8->num_rows > 0) {


                    $sql6629r22 = "DELETE FROM datosPersonales WHERE idUsuario=".$idUser;
                    if ($conn->query($sql6629r22) === TRUE) {

                        $sql6d66 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                        if ($conn->query($sql6d66) === TRUE) {
                            echo "<script>
                            alert('DELETE EXITOSO');
                            window.location= 'Dash-BajaUser.php'
                            </script>";
                        }
                    }

                }else{

                    $sql6dw66 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                    if ($conn->query($sql6dw66) === TRUE) {
                        echo "<script>
                        alert('DELETE EXITOSO');
                        window.location= 'Dash-BajaUser.php'
                        </script>";
                    }
                }
            }
        }else{

            $sql133tswe71 = "SELECT * FROM datosPersonales WHERE idUsuario=".$idUser;
            $result1998mj2y8 = $conn->query($sql133tswe71);

            if ($result1998mj2y8->num_rows > 0) {
                $sql6629r2y2 = "DELETE FROM datosPersonales WHERE idUsuario=".$idUser;
                if ($conn->query($sql6629r2y2) === TRUE) {


                    $sql6dwd66 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                    if ($conn->query($sql6dwd66) === TRUE) {
                        echo "<script>
                        alert('DELETE EXITOSO');
                        window.location= 'Dash-BajaUser.php'
                        </script>";
                    }
                }
            }else{
                $sql6dwd6e6 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                if ($conn->query($sql6dwd6e6) === TRUE) {
                    echo "<script>
                    alert('DELETE EXITOSO');
                    window.location= 'Dash-BajaUser.php'
                    </script>";
                }
            }
        }
    }else{

        $sql133tswe7w1 = "SELECT * FROM datosPersonales WHERE idUsuario=".$idUser;
        $result1998mjf2y8 = $conn->query($sql133tswe7w1);
        if ($result1998mjf2y8->num_rows > 0) {

            $sql6629dr2y2 = "DELETE FROM datosPersonales WHERE idUsuario=".$idUser;
            if ($conn->query($sql6629dr2y2) === TRUE) {
                $sql6dwdr6e6 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
                if ($conn->query($sql6dwdr6e6) === TRUE) {
                    echo "<script>
                    alert('DELETE EXITOSO');
                    window.location= 'Dash-BajaUser.php'
                    </script>";
                }


            }
        }else{
            $sql6dwdr6e6 = "DELETE FROM usuarios WHERE idUsuario=".$idUser;
            if ($conn->query($sql6dwdr6e6) === TRUE) {
                echo "<script>
                alert('DELETE EXITOSO');
                window.location= 'Dash-BajaUser.php'
                </script>";
            }
        }
        
    }
}else{
    echo "<script>
                alert('No existe ese nombre');
                window.location= 'Dash-BajaUser.php'
                </script>";
}


$conn->close();

?>