
     
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS/bootstrap.min.css">
      <link rel="stylesheet" href="CSS/newUsuario.css">
      <title>Document</title>
</head>
<body>
      
  <div class="form-body">
    
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
          <div class="imagen">
            <img src="./img/Logo3.svg" width="40%">

          </div>
          <h3>Registro de Usuario</h3>
          <p>Ingresa los datos del usuario</p>

          <form name="altaU" action="phpAltaUsuarios.php" method="POST" class="requires-validation" novalidate>

            <div class="col-md-12">
              <input class="form-control" type="text" name="nombreUsuario" placeholder="Nombre de usuario" required>
              <div class="valid-feedback">Usuario correcto</div>
              <div class="invalid-feedback">Ingrese un nombre de usuario</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="password" name="claveUsuario" placeholder="Contraseña" required>
              <div class="valid-feedback">contraseña correecta</div>
              <div class="invalid-feedback">Repita la contraseña</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="password" name="claveUsuario2" placeholder="Contraseña" required>
              <div class="valid-feedback">contraseña correecta</div>
              <div class="invalid-feedback">Ingrese una contraseña</div>
            </div>

            
            <div class="col-md-12">
              <select name="tiposUser" class="form-select mt-3" required>
                <option selected disabled value="">Tipo de usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Doctor">Doctor</option>
                <option value="Paciente">Paciente</option>
              </select>
              <div class="valid-feedback">Tipo de usuario seleccionado</div>
              <div class="invalid-feedback">Porfavor seleccione un tipo de usuario</div>
            </div>

            

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label">Todos los datos son correctos?</label>
              <div class="invalid-feedback">Marca la casilla si ya verificaste que los datos sean correctos</div>
            </div>

            <div class="form-button mt-3">
              <button id="submit" type="submit" class="btn btn-primary">Crear Usuario</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


</body>

<script src="./JS/bootstrap.bundle.min.js"></script>
<script src="./JS/newUsuario.js"></script>
</html>

       