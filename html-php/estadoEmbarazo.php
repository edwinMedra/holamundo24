<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esfly</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/estadoEmbarazo.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Comentario sobre el link para importar la tipografia-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <!--Fin tipografia-->
</head> <?php 
include("header-log.php");
?> 

<body>
    <!--Estructura principal de la pagina web-->
    <div class="back">
        <img src="../imagen/estadoEmbarazo/back.png" alt="">
    </div>
    <div class="titulo">
        <p>Mujeres en estado de embarazo</p>
    </div>
    <!--Informacion de pagina web-->
    <div class="container-fluid">
        <div class="row w-50 mx-auto border border-black border-1 rounded-4 my-5 p-3" id="info">
            <div class="col-12 col-lg-3 my-auto">
                <img src="../imagen/estadoEmbarazo/carrito.png" alt="" class="w-100">
            </div>
            <div class="col-12 col-lg-9">
                <h3 class="text-center"><b>¿Puedo volar en estado de embarazo?</b></h3>
                <p>La posibilidad de volar durante el embarazo puede variar dependiendo de la etapa de gestación en la
                    que te encuentres, así como otros aspectos relevantes. Por consiguiente, es fundamental que antes de
                    emprender cualquier vuelo durante este periodo, consultes con tu médico para determinar si es seguro
                    y adecuado para ti en tu situación específica.</p>
            </div>
        </div>
    </div>
    <!---->
    <div class="container-fluid border border-black border-1 w-50 rounded-4 text-center" id="estado">
        <p class="my-auto p-3">Estados de tiempo de embarazo:</p>
    </div>
    <div class="container-fluid my-4">
        <div class="row">
            <!---->
            <div class="col-12 col-lg-6 border border-black border-1 rounded-4 w-25 mx-auto" id="tiempo">
                <div class="row">
                    <h3 class="text-center fs-4 my-3">Embarazos de menos de 30 semanas:</h3>
                    <div class="col-12 p-5"><img src="../imagen/estadoEmbarazo/menos30.png" alt="" class="w-100"></div>
                    <div class="col-12 mx-2 px-4 py-3">
                        <li>
                            Si tienes un embarazo de alto riesgo, solicita a tu médico un certificado que autorice
                            el viaje.
                        </li>
                        <li> Si viajas desde y hacia Perú, las regulaciones requieren que presentes este certificado a
                            partir de la semana 28 de embarazo.</li>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col-12 col-lg-6 border border-black border-1 rounded-4 w-25 mx-auto" id="tiempo">
                <div class="row">
                    <h3 class="text-center fs-4 my-3">Embarazos de mas de 30 semanas:</h3>
                    <div class="col-12 p-5"><img src="../imagen/estadoEmbarazo/mas30.png" alt="" class="w-100"></div>
                    <div class="col-12 mx-2 px-4 py-3">
                        <li>
                            Si necesitas una atención especial antes de tu vuelo, comunícate con nuestro Contact center.
                        </li>
                        <li> Presenta en el counter del aeropuerto un certificado médico que especifique la fecha estimada del parto y que puedes viajar sin riesgo alguno por vía aérea, para cada uno de tus vuelos. Cada certificado debe tener menos de 10 días de emitido.
                        </li>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
    <!---->
    <footer class="mt-3 pt-3">
        <div class="container-fluid pt-2 ps-5"><img src="../imagen/logo.png" alt="" class="logo">
        </div>
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-2">
                    <ul class="">
                        <hr>
                        <li>
                            <h6><b>AYUDA</b></h6>
                        </li>
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
                        <li>
                            <h6><b>ACERCA</b></h6>
                        </li>
                        <li>Ubicación</li>
                        <li>Redes</li>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <ul class="">
                        <hr>
                        <li>
                            <h6><b>ACERCA</b></h6>
                        </li>
                        <li>Ubicación</li>
                        <li>Redes</li>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <ul class="">
                        <hr>
                        <li>
                            <h6><b>NOSOTROS</b></h6>
                        </li>
                        <li>Somos ESfly</li>
                        <li>Alianzas y Beneficios</li>
                        <li>Accecibilidad</li>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <ul class="">
                        <hr>
                        <li>
                            <h6><b>NOSOTROS</b></h6>
                        </li>
                        <li>Somos ESfly</li>
                        <li>Alianzas y Beneficios</li>
                        <li>Accecibilidad</li>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <ul class="">
                        <hr>
                        <li>
                            <h6><b>SIGUENOS</b></h6>
                        </li>
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
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>