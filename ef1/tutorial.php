<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include('views/meta.php');
    ?>

    <title>EntraFácil.com crea tus eventos y vende sus entradas.</title>

    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tutorial.css">

    <!--CSS RESPONSIVE-->
    <link rel="stylesheet" href="css/responsive/default.css">
    <link rel="stylesheet" href="css/responsive/header.css">
    <link rel="stylesheet" href="css/responsive/footer.css">
    <link rel="stylesheet" href="css/responsive/tutorial.css">

    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
    
    <script async defer src="js/configResponsive1.js"></script>
    <script async defer src="js/interactiveEvento.js"></script>
</head>
<body>
    <!-- Header Index Main  -->

    <?php
        include('views/header.php');
    ?>

    <!-- Bottom Header Index Main  -->

    <main id="mainP">
        <div class="contTituTutorial">
            <span>Organizador, organiza tus ideas.</span>
            <h1 class="fuenteCursiva">Tutorial para organizadores</h1>
        </div>
        <div class="classImgTxt">
            <div>
                <img src="img/t1.png" alt="tutorial para organizadores entra facil">
            </div>
            <div>
                <p>EntraFácil como tu aliado te brindara toda la ayuda que necesites, por esta razón a dispuesto soporte técnico y diferentes herramientas que necesitaras, ahora puedes ser cada vez mejor!</p>
            </div>
        </div>
        <div class="classImgTxt reverse">
            <div>
                <img src="img/t2.png" alt="tutorial para organizadores entra facil">
            </div>
            <div>
                <p>Para vender las entradas de tu evento solo tienes que completar 3 sencillos pasos dando clic en el siguiente link <a href="crear.php">Crear Evento</a>.</p>
            </div>
        </div>
        <div class="classImgTxt bgOsc">
            <div class="margenSup">
                <img src="img/t3.png" alt="tutorial para organizadores entra facil">
            </div>
            <div>
                <p>No tendrás que hacer tediosos domicilios para entregar las boletas, las boletas llegan al celular de tu asistente una vez se realice el pago.</p>
            </div>
        </div>
        <div class="classImgTxt bgOsc reverse">
            <div class="margenSup">
                <img src="img/t4.png" alt="tutorial para organizadores entra facil">
            </div>
            <div>
                <p>De la seguridad nos encargamos nosotros, no te preocupes porque las boletas se pierdan, nuestra plataforma esta blindada contra fraudes y nuestros pagos en linea están asegurados por PayU la plataforma de pagos mas grande en america latina</p>
            </div>
        </div>
        <div class="classImgTxt">
            <div class="margenSup">
                <img src="img/t5.png" alt="tutorial para organizadores entra facil">
            </div>
            <div class="margenSup">
                <p>No todo es felicidad, para poder estar en linea y ayudarlos EntraFácil solo cobrara el 5% + $900 por boleta vendida de tus eventos. Todas las boletas vendidas al momento de finalizar el evento serán pagadas al organizador, a tu cuenta de ahorros o puedes contactarnos para saber como realizarte el pago.</p>
            </div>
        </div>
    </main>

    <!-- Footer  -->

    <?php
        include('views/footer.php');
    ?>
    
    <!-- Bottom Fotter  -->
</body>
</html>