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
    <link rel="stylesheet" href="css/soporte.css">

    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header Index Main  -->

    <?php
        include('views/header.php');
    ?>

    <!-- Bottom Header Index Main  -->

    <!-- crear evento Main  -->

    <main>
        <div>
            <div>
                <img src="img/s1.png" alt="">
            </div>
            <div class="contContactForm">
                <div class="btnWa">
                    <div>
                        <a href="#">Whatsapp Ayuda</a>
                    </div>
                    <div>
                        <a href="#">Whatsapp Ventas</a>
                    </div>
                </div>
                <form action="#">
                    <p>Dejanos tus datos pronto nos contactaremos</p>
                    <input type="text" placeholder="Nombre Completo" required>
                    <input type="text" placeholder="Asunto" required>
                    <input type="tel" placeholder="Numero de contato" required>
                    <input type="submit" value="Contacto">
                </form>
            </div>
        </div>
    </main>

    <!-- Bottom crear evento Main  -->

    <!-- Footer  -->

    <?php
        include('views/footer.php');
    ?>
    
    <!-- Bottom Fotter  -->
</body>
</html>