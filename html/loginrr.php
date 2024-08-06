<?php
error_reporting(0);
session_start();
include("conex.php");
$sesion = $_SESSION['correo'];
if (!($sesion == null || $sesion == '')){
  echo " <script> window.location.href = '../html-php/index.php'</script> "; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

      <!--Comentario sobre el link para importar la tipografia-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
      <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
      <!--Fin tipografia-->  
      
      <link rel="stylesheet" href="../css/registro.css">
    <title>Login</title>
</head>


<body>
<!--INICIA REGISTRO 3-->

<section>

  <div class="row g-0">


    <div class="col-lg-5 col-md-12 col-sm-12 d-flex flex-column justify-content-center align-items-center min-vh-100">
      <div class="px-lg-5 py-lg-4 p-4 w-100">
        <h1 class="font-weight-bold text-center">
        <a href="../html/index.php">
            <img src="../imagen/header/favicon.png" class="img-fluid"></a><b>Iniciar sesión</b>
        </h1>
    
        <form class="mb-5 mt-5 g-0" method="post" action="validar.php">

          <div class="mb-5">
            <label for="exampleImputEmail" class="form-label font-weight-bold">
              <img src="../imagen/login/correo.png" class="img"> Correo</label>
            <input type="email" class="form-control mb-2" placeholder="Ingresa tu correo" id="correo" name="correo">
          </div>
    
          <div class="mb-3">
            <label for="exampleImputPassword" class="form-label font-weight-bold">
              <img src="../imagen/login/contraseña.png" class="img"> Contraseña
            </label>
            <i class="ojo bx bx-show-alt mt-2" id="togglePassword"></i>
            <input type="password" class="pass form-control mb-2" placeholder="Ingresa tu contraseña" id="pass" name="pass">
          </div>
          <button type="submit" class="btn btn-primary w-100 mt-3" name="ingreso">Ingresar</button>
        </form>
        <div class="text-center   w-100  g-0">
          <p class="d-inline-block mb-0">¿Aun no tienes cuenta?</p><a href="registro.php" class=" font-weight-bold text-decoration-none"> Registrarse</a><br>
          <p class="d-inline-block mb-0">ERROR AL INICIA SESION</p><br>
          <p class="d-inline-block mb-0">INTENTE DE NUEVO</p><br>
        </div>
      </div>
    </div>
    

    <div class="col-lg-7 col-md-12 col-sm-12 d-none d-lg-block g-0">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    
        <div class="carousel-inner">
          <div class="carousel-item img-1 min-vh-100 active" data-bs-interval="6000">
            <img src="../imagen/login/fondo2.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item img-2 min-vh-100" data-bs-interval="7000">
            <img src="../imagen/login/fondo3.png" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item img-3 min-vh-100" data-bs-interval="7000">
            <img src="../imagen/login/fondo4.png" class="d-block w-100" alt="...">
          </div>
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
    
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    


    </div>
  </div>
</section>
    <!--TERMINA REGISTRO-->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--OJO DE CONTRASEÑA INTENTO 4-->
<script>
  const pass = document.getElementById("pass");
  const icon = document.getElementById("togglePassword");

  icon.addEventListener("click", e => {
    if (pass.type === "password") {
      pass.type = "text";
      icon.classList.remove("bx-show-alt");
      icon.classList.add("bx-hide");
    } else {
      pass.type = "password";
      icon.classList.add("bx-show-alt");
      icon.classList.remove("bx-hide");
    }
  });

  // MODO OSCURO Y CLARO DE LA PAGINA
const temaOscuro = () => {
    document.querySelector("body").setAttribute("data-bs-theme", "dark");
    document.querySelector("#dl-icon").setAttribute("class", "bi bi-sun-fill");
    localStorage.setItem("theme", "dark");
}

const temaClaro = () => {
    document.querySelector("body").setAttribute("data-bs-theme", "light");
    document.querySelector("#dl-icon").setAttribute("class", "bi bi-moon-fill");
    localStorage.setItem("theme", "light");
}

const cambiarTema = () => {
    document.querySelector("body").getAttribute("data-bs-theme") === "light" ? temaOscuro() : temaClaro();
}

// PARA GUARDAR EL COLOR DE LA PAGINA (tutorial 2)
window.addEventListener('load', () => {
    const theme = localStorage.getItem("theme");
    if (theme === "dark") {
        temaOscuro();
    } else {
        temaClaro();
    }
});



</script>

</html>



