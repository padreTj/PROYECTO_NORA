
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>ICABC</title>
    <link rel="icon" href="Gob.png">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

  </head>

 

<body>
    
<main>
 
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>

<section class="vh-100">
    <div class="d-flex justify-content-center align-items-center shadow-lg" style="background-image:url(top.jpg);">

        <img class="mb-4 mt-5" src="Gob.png" alt="" width="190" height="230">

</div>


<div class="container py-5 mt-2">

<div class="row d-flex justify-content-center align-items-center" >
    <div class="col col-xl-5 col-lg-6 col-md-7">
        <div>
            <div class="d-flex align-items-center">

              
                <div class="card-body">

                  <form id="frmUsu" method="POST">

<center>
  <h1 class="h3 mb-3 fw-normal"><b>Inicia sesión</b></h1>
</center>
                      
                    
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="Nombre de usuario">
                          <label for="floatingInput">Nombre de usuario</label>
                        </div>
                        <div class="form-floating mb-4">
                          <input type="password" class="form-control" name="cavee" id="floatingPassword" placeholder="Contraseña">
                          <label for="floatingPassword">Contraseña</label>
                        </div>
                    
                        <button class="w-100 btn btn-lg shadow text-white" style="background-color: #A87C4D;" type="button" id="btnEnv"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> Entrar</button>
                       
                      </form>
                </div>

            </div>
        </div>
    </div>
</div>

</div>


<footer class="bg-dark text-center text-white">
    <div class="container p-4">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
            </div>
          </div>
      <section class="mb-2 py-4">
        <p>
            INSTITUTO DE PSIQUIATRÍA DEL ESTADO DE BAJA CALIFORNIA<br>

            CALLE 11va. # 1753, ENTRE RÍO VERDE Y RÍO ATOYAC, COL.  MEXICALI, SECCIÓN SEGUNDA.  C. P. 21396<br>
            
            RFC: IPE-010112861 <br>
            
            TEL. (686) 8 42 70 50, (686) 842 70 85<br>
            
            IPEBC SALUD MENTAL
        </p>
      </section>
      <section class="">
      </section>
    </div>
    <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://ipebc.gob.mx/">ipebc.gob.mx</a>
    </div>
  </footer>
</section>









  
</main>

</body>
    

</html>

<script type="text/javascript">

        let boton_enviar = document.querySelector('#btnEnv');

        let ca = document.getElementById('floatingInput');
        let ca2 = document.getElementById('floatingPassword');

    

        boton_enviar.addEventListener('click', e => {
            e.preventDefault();


            if(ca.value === "" || ca2.value === ""){
                swal("Hey!", "Llena todos los campos porfavor..", "warning");
            }else{
                
                
              
                        const formulario = document.querySelector('#frmUsu');
                const form = new FormData(formulario);
                const peticion = {
                    body:form,
                    method:'POST'
                };
            fetch('phpLogin.php',peticion)
                .then(res => res.json())
                .then(res => {

                    if (res['respuesta']) {
                        
                        
                        
                        
                        
                        
                        
                        swal("Login exitoso!",res['mensaje'], "success", {
  buttons: {
    catch: {
      text: "Ok!",
      value: "ok",
    }
  },
})
.then((value) => {
  switch (value) {
 
    case "ok":
      formulario.reset();
    window.location= 'validacionFormu.php';
      break;
 
    default:
     formulario.reset();
                        window.location= 'validacionFormu.php';
  }
});
                        
                    }else{
                        swal("Error", res['mensaje'], "error");
                    }


                });
                    
                
            
            }

        });

</script>