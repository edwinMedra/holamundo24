<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Importación de librerias-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/pie.css" />
  <link rel="stylesheet" href="../css/ReservaAsiento_vueloNormal.css" />
  <title>Información sobre vuelos</title>
</head>

<body><?php 
include("header-log.php");
?> 
  <div class="back">
    <img src="../imagen/datosVuelo/fondo.png" alt="" />
    <div class="titulo"><p >Información sobre vuelos</p></div>
  </div>
  <!---->

<div class="container mt-5 mb-5">
  <div class="row">


    <div class=" mt-5 mp-5 col-md-12 col-sm-12 col-lg-6">
      <div class="card">
        <img src="../imagen/ReservaAsiento_vueloNormal/normal.png" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title">Asientos comunes</h5>
          <p class="card-text mt-3 ps-4 pe-4">Posee asientos cómodos, en los cuales pasrán un agradable viaje hasta su  lugar de destino, pero estos
             no  pueden recostarse, no poseen menú online, pero pueden obtener algun aperitivos que les ofrezca la azafata sin ningún
            problema. </p>

            <div class="d-flex justify-content-center">
              <a href="#"><button type="button" class="btn btn-primary mt-4">¡Tomar vuelo! </button></a>
            </div>
          
        </div>
      </div>
    </div>

    <div class=" mt-5 mp-5 col-md-12 col-sm-12 col-lg-6">
      <div class="card">
        <img src="../imagen/ReservaAsiento_vueloNormal/vip.png" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title">Asientos VIP</h5>
          <p class="card-text mt-4 ps-4 pe-4">
            <li class=" ps-4 pe-4"><b>Asientos super cómodos:</b>Permiten recostarse al punto de acomodar libremente su cabeza y piernas sin 
              generar molestias a los demás pasajeros.</li><br>
            <li class="ps-4 pe-4"><b>Menú online:</b>Consta de un menú online el cual podrá ordenar desde su móvil algo 
              del bufet.</li></p>

          <div class="d-flex justify-content-center">
            <a href="#"><button type="button" class="btn btn-primary ">¡Tomar vuelo! </button></a>
          </div>
            
        </div>
      </div>
    </div>



  </div>
</div>

    <!--FOOTER-->
  <footer class="mt-3 pt-3">
    <div class="container-fluid pt-2 ps-5"><img src="../imagen/logo.png" alt="" class="logo">
    </div>
    <div class="container-fluid text-white">
    <div class="row">
        <div class="col-6 col-sm-4 col-md-2" >
            <ul class="">
                <hr>
                <li><h6><b>AYUDA</b></h6></li>
                <li>Contáctanos</li>
                <li>Métodos de pago</li>
                <li>Cambios y devoluciones</li>
                <li>Preguntas frecuentes</li>
                <li>Promociones</li>
            </ul>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>ACERCA</b></h6></li>
                <li>Ubicación</li>
                <li>Redes</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>ACERCA</b></h6></li>
                <li>Ubicación</li>
                <li>Redes</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>NOSOTROS</b></h6></li>
                <li>Somos ESfly</li>
                <li>Alianzas y Beneficios</li>
                <li>Accecibilidad</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>NOSOTROS</b></h6></li>
                <li>Somos ESfly</li>
                <li>Alianzas y Beneficios</li>
                <li>Accecibilidad</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>SIGUENOS</b></h6></li>
                <i class="bi bi-whatsapp"> 7720-9970</i><br>
                <i class="bi bi-instagram"> ESfly_official</i><br>
                <i class="bi bi-facebook"> ESfly_official</i><br>
                <i class="bi bi-youtube"> ESfly-official</i><br>
        </div>
    </div>    
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>