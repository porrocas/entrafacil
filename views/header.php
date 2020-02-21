<!-- Image and text -->
<div id="navegadorFixed" class="fixed-top">
    <nav id="navRedes" class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="https://web.facebook.com/entra.facil.73">
            FaceBook
        </a>
        <a class="navbar-brand" href="https://www.instagram.com/entrafacil/?hl=es-la">
            Instagram
        </a>
        <a class="navbar-brand"
            href="https://api.whatsapp.com/send?phone=+573213915844&text=Hola,%20EntraF%C3%A1cil.com%20Necesito%20Tus%20Servicios">
            Whatsapp
        </a>
        <a class="navbar-brand" href="#">
            Twitter
        </a>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand tituloLogo" href="index.php">Entra <span>|Fácil.com</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            function getNameActive(){
                $serverName = $_SERVER["SERVER_NAME"];
                $urlUbi = $_SERVER["REQUEST_URI"];
                $rutaArray = explode('/', $urlUbi);
                $nombreUbi = explode('.', $rutaArray[1]);
                return $nombreUbi[0];
              }

            switch (getNameActive()) {
                case 'index':
                    echo 
                        '
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="eventos.php">Eventos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="aboutUs.php#galeria">Galería</a>
                                    <a class="dropdown-item" href="aboutUs.php#contacto">Contacto</a>
                                    <a class="dropdown-item" href="aboutUs.php">About Us</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="soporte.php">Soporte</a>
                                </div>
                            </li>
                            <li class="nav-item ml-3 btnHeaderCrear">
                                <a class="btn btn-outline-warning" href="crear.php" role="button">Crear Eventos</a>
                            </li>
                        </ul>
                        ';
                    break;
                case 'eventos':
                    echo 
                        '
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="eventos.php">Eventos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="aboutUs.php#galeria">Galería</a>
                                    <a class="dropdown-item" href="aboutUs.php#contacto">Contacto</a>
                                    <a class="dropdown-item" href="aboutUs.php">About Us</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="soporte.php">Soporte</a>
                                </div>
                            </li>
                            <li class="nav-item ml-3 btnHeaderCrear">
                                <a class="btn btn-outline-warning" href="crear.php" role="button">Crear Eventos</a>
                            </li>
                        </ul>
                        ';
                    break;
                case 'aboutUs':
                        echo 
                            '
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="eventos.php">Eventos</a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Menu
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="aboutUs.php#galeria">Galería</a>
                                        <a class="dropdown-item" href="aboutUs.php#contacto">Contacto</a>
                                        <a class="dropdown-item" href="aboutUs.php">About Us</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="soporte.php">Soporte</a>
                                    </div>
                                </li>
                                <li class="nav-item ml-3 btnHeaderCrear">
                                    <a class="btn btn-outline-warning" href="crear.php" role="button">Crear Eventos</a>
                                </li>
                            </ul>
                            ';
                        break;
                case 'soporte':
                        echo 
                            '
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="eventos.php">Eventos</a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Menu
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="aboutUs.php#galeria">Galería</a>
                                        <a class="dropdown-item" href="aboutUs.php#contacto">Contacto</a>
                                        <a class="dropdown-item" href="aboutUs.php">About Us</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="soporte.php">Soporte</a>
                                    </div>
                                </li>
                                <li class="nav-item ml-3 btnHeaderCrear">
                                    <a class="btn btn-outline-warning" href="crear.php" role="button">Crear Eventos</a>
                                </li>
                            </ul>
                            ';
                        break;
                case 'crear':
                        echo 
                            '
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="eventos.php">Eventos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Menu
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="aboutUs.php#galeria">Galería</a>
                                        <a class="dropdown-item" href="aboutUs.php#contacto">Contacto</a>
                                        <a class="dropdown-item" href="aboutUs.php">About Us</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="soporte.php">Soporte</a>
                                    </div>
                                </li>
                                <li class="nav-item ml-3 btnHeaderCrear ">
                                    <a class="btn btn-warning" href="crear.php" role="button">Crear Eventos</a>
                                </li>
                            </ul>
                            ';
                        break;
                default:
                        echo 
                        '
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="eventos.php">Eventos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="aboutUs.php#galeria">Galería</a>
                                    <a class="dropdown-item" href="aboutUs.php#contacto">Contacto</a>
                                    <a class="dropdown-item" href="aboutUs.php">About Us</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="soporte.php">Soporte</a>
                                </div>
                                <li class="nav-item ml-3 btnHeaderCrear">
                                    <a class="btn btn-outline-warning" href="crear.php" role="button">Crear Eventos</a>
                                </li>
                            </li>
                        </ul>
                        ';
                    break;
            }
            
        ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar Eventos" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="admin.php">Hola, Identificate!</a>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
</div>