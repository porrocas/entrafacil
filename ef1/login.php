<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include('views/meta.php');
    ?>

    <title>EntraFácil.com crea tus eventos y vende sus entradas.</title>

    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">

    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header Index Main  -->

    <?php
        include('views/header.php');
    ?>

    <!-- Bottom Header Index Main  -->

    <main>
        <div class="opacity"></div>
        <div class="contContenido">
            <div class="msjBienvenida">
                <p>EntraFácil es tu aliado perfecto, tanto para Organizadores o Asistentes, siempre te daremos una mano e iremos juntos en la Experiencia.</p>
            </div>
            <div class="contInicio">
                <div class="contBlanco">
                    <div class="inicioRedes">
                        <h1>Inicie Sesión Ahora</h1>
                        <p>Para un acceso mas rápido y seguro, Inicie sesión con una red social.</p>
                        <div class="btnRedes">
                            <div>
                                <a href="#" class="cont-fb">
                                    <div class="cont-fb-img">
                                        <img src="img/facebook.png" alt="inicio de sesión entra fácil con facebook">
                                    </div>
                                    <div class="cont-fb-txt">
                                        <p>Facebook</p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="cont-g">
                                    <div class="cont-g-img">
                                        <img src="img/google.png" alt="inicio de sesión entra fácil con google">
                                    </div>
                                    <div class="cont-g-txt">
                                        <p>Google +</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="contOr">
                        <hr>
                        <p>OR</p>
                        <hr>
                    </div>
                    <form action="#" class="formInicioSesion">
                        <p>User:</p>
                        <input type="text" placeholder="Usuario" required>
                        <p>Password</p>
                        <input type="password" placeholder="Password" required>
                        <input type="submit" value="Sign In">
                    </form>
                    <div class="contOr">
                        <hr>
                        <p>OR</p>
                        <hr>
                    </div>
                    <div class="contCrear">
                        <p>Aun no tienes Cuenta?</p>
                        <a href="#"> Crea Una.</a>
                    </div>
                </div>
                <div class="copy">
                    <p>© 2019 EntraFácil.com All rights reserved | Design by <a href="#">Daniel Mateus</a></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>