<!DOCTYPE html>
<html lang="es">
<head>

    <?php
        include('views/meta.php');
    ?>

    <title>EntraFácil.com crea tus eventos y vende sus entradas.</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/preEventos.css">
    <link rel="stylesheet" href="css/preTarifas.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/preSoporte.css">

    <!--CSS RESPONSIVE-->
    <link rel="stylesheet" href="css/responsive/default.css">
    <link rel="stylesheet" href="css/responsive/header.css">
    <link rel="stylesheet" href="css/responsive/preEventos.css">
    <link rel="stylesheet" href="css/responsive/preTarifas.css">
    <link rel="stylesheet" href="css/responsive/preSoporte.css">
    <link rel="stylesheet" href="css/responsive/footer.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">

    <script async defer src="js/scrollHeader.js"></script>
    <script async defer src="js/configResponsive.js"></script>

</head>
<body>
    <!-- Header Index Main  -->

    <?php
        include('views/header.php');
    ?>

    <div onclick="cerrarNav()" class="bgImage hideMobile">  
        <img src="img/bgMobile.jpg" alt="">
    </div>

    <div class="bgVideo hideDesktop">
        <video id="videoPresent" autoplay muted loop>
            <source src="multimedia/bg1.mp4" type="video/mp4">
        </video>
    </div>


    <div onclick="cerrarNav()" class="presentHeader">
        <h1 class="fuenteCursiva">¿Donde deseas estar?</h1>
        <p>Entrafácil.com es una plataforma que permite crear eventos y vender entradas. Los asistentes pueden comprar entradas de forma sencilla y totalmente segura, en cualquier parte, incluso sin salir de su casa o a la vuelta de la esquina.</p>
        <div>
            <a href="crear.php" class="btnMain">Crear Evento</a>
            <a href="eventos.php">Comprar Entradas</a>
        </div>
    </div>

    <div class="contRedesSociales">
        <div>
            <a href="#">
                <img src="img/facebook.png" alt="redes sociales entra fácil compra crea y vende tus entradas">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="img/whatsapp.png" alt="redes sociales entra fácil compra crea y vende tus entradas">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="img/instagram.png" alt="redes sociales entra fácil compra crea y vende tus entradas">
            </a>
        </div>
    </div>

    <div class="agradecimientos">
        <p>Lo mejor de la fiesta, es la experiencia.</p>
    </div>

    <!-- Bottom Header Index Main  -->

    <!-- Mostrar Eventos Index Main  -->

    <?php
        include('views/preEventos.php');
    ?>

    <!-- Bottom Mostrar Eventos Index Main  -->

    <!-- Mostrar tarifas Index Main  -->

    <?php
        include('views/preTarifas.php');
    ?>

    <!-- Bottom tarifas Eventos Index Main  -->

    <!-- Mostrar soporte Index Main  -->

    <?php
        include('views/preSoporte.php');
    ?>

    <!-- Bottom sopporte Eventos Index Main  -->
    
    <!-- Footer  -->

    <?php
        include('views/footer.php');
    ?>
    
    <!-- Bottom Fotter  -->

</body>
</html>