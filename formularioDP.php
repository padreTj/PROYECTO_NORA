<?php
session_start();

if(!isset($_SESSION['tipoUser'])){



    session_destroy();

      header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cssFormularioDP.css">
    <title>Datos Personales</title>
</head>
<body>
   

<form name="datosPerForm" action="datosPersonalesALL.php" method="POST">

<div class="form">
      <div class="title">Bienvenido</div>
      <div class="subtitle">Llena los campos con tus datos</div>



      <div class="input-container ic1">
        <input id="firstname" class="input" name="nombreReal" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nombre</label>
      </div>





      <div class="input-container ic2">
        <input id="lastname" class="input" name="apellidoPaterno" type="text" placeholder=" " />
        <div class="cut2"></div>
        <label for="lastname" class="placeholder">Apellido Paterno</label>
      </div>



        <div class="input-container ic2">
        <input id="lastname2" class="input" name="apellidoMaterno" type="text" placeholder=" " />
        <div class="cut2"></div>
        <label for="lastname2" class="placeholder">Apellido Materno</label>
      </div>

<div class="input-container ic2">
        <input id="age" class="input" name="edad" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="age" class="placeholder">Edad</label>
      </div>







      <div class="input-container ic2">
        <input id="email" name="correoElectronico" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
      
      
      <div class="input-container ic2">



<div class="content-select">


        <select name="sexo" id="selectSEX">
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
<option value="Prefiero no decir">Prefiero no decir</option>
</select>
        


</div>

      </div>
      
      
      
      
      
    
      <input type="submit" class="submit" value="Entrar">
</div>
</form>






</body>
</html>