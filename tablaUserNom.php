
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/cssTablaEmpSuc.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">


    <title>Consultas</title>
  </head>

  <body>
    
    <center>

<h1>Datos del usuario</h1>

</center>
    <div class="caja">
      
      
       


<center>



<div class="table-wrapper">
  

 <table border="1">
   <thead>
              <tr>
<th>idUsuario</th>
<th>Nombre</th>
<th>Contraseña</th>
<th>Tipo de Usuario</th>
</tr>
</thead>


<?php
include("./conexion.php");


$nomm = $_POST['term'];


$sql="SELECT idUsuario,nombre,clave,tipoUsuario FROM usuarios WHERE nombre='".$nomm."'";
$ejecutar=mysqli_query($obj_conexion, $sql);
while($fila=mysqli_fetch_array($ejecutar)){
?>
 <tbody>
<tr>
  <td><?php echo $fila[0] ?></td>
   <td><?php echo $fila[1] ?></td>
   <td><?php echo $fila[2] ?></td>
  <td><?php echo $fila[3] ?></td>
 </tr>
</tbody>


<?php

}

?>
</table>
<br>
<a href="consultaUsuarios.php">volver</a>




</div>



</center>



    </div>
    
    
 
  </body>
</html>