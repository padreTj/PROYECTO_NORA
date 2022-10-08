<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "encuestaICBC.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
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
                                
                                
                            $nomm = $_POST['nombreTerm'];
      
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