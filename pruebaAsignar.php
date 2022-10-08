<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<form name="asigPsi" action="phpAsigna.php" method="POST">



<?php
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('localhost', 'id18803800_proyectonora_362', 'ClaveNora362_', 'id18803800_databasenora');
?>








  <select id="standard-select" name="pac">
    <option value="A" selected>Selecciona un paciente</option>


<?php


$query = $mysqli -> query ("SELECT nombre,idUsuario FROM _Paciente ORDER BY idUsuario DESC");
 while ($valores = mysqli_fetch_array($query)) {

  echo '<option value="'.$valores[idUsuario].'">'.$valores[nombre].'</option>';
}


?>


  </select>



<br>

 <select id="standard-select" name="psi">
    <option value="A" selected>Selecciona un psicologo</option>


<?php


$query = $mysqli -> query ("SELECT nombre,idUsuario FROM usuarios WHERE tipoUsuario='Doctor' ORDER BY idUsuario DESC");
 while ($valores = mysqli_fetch_array($query)) {

  echo '<option value="'.$valores[idUsuario].'">'.$valores[nombre].'</option>';
}


?>


  </select>


<br>
            <input type="submit" value="Asignar">

    </form>