<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/canada.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <title>Canada</title>
</head>
<body>
<?php 
include("header-log.php");
?>  
     <!--Imagen principal de entrada de pagina web-->
     <div class="back">
        <div><img src="../imagen/canada/back.jpg" alt=""></div>
        <div class="titulo text-white">Canada</div>
    </div>
    <!--Fin imagen principal de pagina web-->
    <!--Vuelos disponibles-->
    <div class="container mt-5 fs-5">
        <p>Vuelos disponibles ></p>
    </div>
    <div class="container rounded-4 border border-1 border-black w-100 p-0 my-5">
        <div class="row">
            <div class="col-8 mt-4">
                <div class="row d-flex mx-auto my-4 w-75 border border-black border-1 rounded-5">
                    <div class="col py-1 d-flex py-1" id="origen">
                        <img src="../imagen/argentina/plane.png" alt="" class="">
                        <x class="mt-2"> <b>ORIGEN:</b> San Salvador (El Salvador)</x>
                    </div>
                    <div class="col d-flex border border-top-0 border-end-0 border-bottom-0 border-black" id="origen">
                        <img src="../imagen/argentina/end.png" alt="" class="mt-2">
                        <x class="mt-3"> <b>DESTINO:</b> Toronto (Canada)</x>
                    </div>
                </div>
                <!---->
                <div class="row d-flex mx-auto my-4 w-75 border border-black border-1 rounded-5">
                    <div class="col py-1 d-flex py-1" id="origen">
                        <img src="../imagen/argentina/calendar.png" alt="" class="" id="calendar">
                        <x class="mt-2"> <b>IDA:</b> <input type="date" class="border-0 mx-2"></x>
                    </div>
                    <div class="col d-flex border border-top-0 border-end-0 border-bottom-0 border-black" id="origen">
                        <img src="../imagen/argentina/calendar.png" alt="" class="mt-1" id="calendar">
                        <x class="mt-2"> <b>VUELTA:</b> <input type="date" class="border-0 mx-2 my-1"></x>
                    </div>
                </div>
            <div class="d-flex " id="boton">
                <button type="button" class="mx-auto border-0 px-3 py-2 my-3 text-white rounded-4">Tomar vuelo</button>
            </div>
            </div>
            <!---->
            <div class="col-4">
                <img src="../imagen/canada/toronto.jpg" alt="" class="w-100 rounded-4 pe-0">
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>