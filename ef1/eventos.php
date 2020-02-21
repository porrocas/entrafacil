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
    <link rel="stylesheet" href="css/eventos.css">

    <!--CSS RESPONSIVE-->
    <link rel="stylesheet" href="css/responsive/default.css">
    <link rel="stylesheet" href="css/responsive/header.css">
    <link rel="stylesheet" href="css/responsive/preEventos.css">
    <link rel="stylesheet" href="css/responsive/footer.css">
    <link rel="stylesheet" href="css/responsive/eventos.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">

    <script defer src="js/interactiveEvento.js"></script>
    <script async defer src="js/configResponsive1.js"></script>

</head>
<body>
    <!-- Header Index Main  -->

    <?php
        include('views/header.php');
    ?>

    <!-- Bottom Header Index Main  -->

    <!--  evento Main  -->

    <?php   
        include('views/evento.php')
    ?>

    <!-- Bottom  evento Main  -->

    <!-- Footer  -->

    <?php
        include('views/footer.php');
    ?>
    
    <!-- Bottom Fotter  -->
</body>
</html>