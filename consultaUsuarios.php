<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<style>
    
    .caja{
        height: 200px;
	width: 250px;

	background: #f1f1f1;
	overflow-y: scroll;
    }
</style>
 
</head>
<body> 

<h1>Consultar usuarios</h1>
 <form name="consultaUsuario" action="tablaUserNom.php" method="POST">
<div class="caja">

 <table border="1">
   <thead>
              <tr>
<th>Nombre</th>
<th>Tipo de Usuario</th>
</tr>
</thead>


<?php
include("./conexion.php");




$sql="SELECT nombre,tipoUsuario FROM usuarios ORDER BY idUsuario DESC";
$ejecutar=mysqli_query($obj_conexion, $sql);
while($fila=mysqli_fetch_array($ejecutar)){
?>
 <tbody>
<tr>
  <td><?php echo $fila[0] ?></td>
   <td><?php echo $fila[1] ?></td>
 </tr>
</tbody>


<?php

}

?>
</table>

</div>


<br>

<b>Escribe el nombre</b>

     <input type="text" name="term" id="term" placeholder="Nombre Usuario">  


<script type="text/javascript">
  $(function() {
     $( "#term" ).autocomplete({
       source: 'ajax-db-search.php',
     });
  });
</script>



 <input type="submit" value="Buscar">





</form>






</body>
</html>