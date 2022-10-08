
<center>
    <h1>Tabla de usuarios</h1>
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
                                
                                
                            
      
                                $sql2="SELECT * FROM usuarios";
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
</center>
