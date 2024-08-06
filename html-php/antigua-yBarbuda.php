<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsFly</title>
    <!--Parte obligatoria del head-->
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
     <!--Comentario sobre el link para importar la tipografia-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
     <!--Fin tipografia-->  
     <link rel="stylesheet" href="../css/headerr.css">
     <link rel="stylesheet" href="../css/antigua-yBarbuda.css">
     <link rel="stylesheet" href="../css/pie.css">
    <!--Fin head-->
</head>
<body>
<?php 
include("header-log.php");
?> 
  
  <!--Fin header-->   
    <!-- Imagen de Antigua y Barbuda -->
    <div class="antigua-y-barbuda">
        <img src="../imagen/antiguayBarbuda/ofertas-y-destinos-antigua-y-barbuda.jpg" alt="" class="img-antigua-y-barbuda">
        <div class="texto-titulo">
            <h1>Antigua y Barbuda</h1>
        </div>
    </div>
    <!-- DEFINO LA SECCIÓN DE VUELOS DISPONIBLES -->
    <div class="vuelosDisponibles">
        <h2>Vuelos Disponibles</h2>
        <!-- PLANTILLA PARA CADA VUELO DISPONIBLE -->
        <div class="disponible1">
            <div class="datos">
                <div class="zonaArriba">
                    <div class="origen">
                        <p class="origenYdestinoTitulos">Origen</p>
                        <p class="origenYdestinoDatos">San Salvador (El Salvador)</p>
                    </div>
                    <div class="destino">
                        <p class="origenYdestinoTitulos">Destino</p>
                        <p class="origenYdestinoDatos">Saber donde, aún no he visto</p>
                    </div>
                </div>
                <div class="zonaAbajo">
                    <button type="button">Tomar vuelo</button>
                    <div class="fecha">
                        <p class="fechaYhoraTitulos">Fechas:</p>
                        <p class="fechaYhoraDatos">13/03/24</p>
                    </div>
                    <div class="horaDeVuelo">
                        <p class="fechaYhoraTitulos">Hora de vuelo:</p>
                        <p class="fechaYhoraDatos">3:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="imgopcion1"></div>
        </div>
    </div>
</body>
</html>