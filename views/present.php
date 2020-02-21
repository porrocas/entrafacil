<?php
  function getNamePage(){
    $urlUbi = $_SERVER["REQUEST_URI"];
    $rutaArray = explode('/', $urlUbi);
    $nombreUbi = explode('.', $rutaArray[1]);
    return $nombreUbi[0];
  }

  switch (getNamePage()) {
    case 'index':
      echo 
          '
          <nav id="present" aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Inicio</li>
              </ol>
          </nav>
          ';
      break;
    case 'eventos':
      echo 
          '
          <nav id="present" aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">eventos</li>
              </ol>
          </nav>
          ';
      break;
    case 'aboutUs':
        echo 
            '
            <nav id="present" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">AboutUS</li>
                </ol>
            </nav>
            ';
        break;
    case 'soporte':
        echo 
            '
            <nav id="present" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Soporte</li>
                </ol>
            </nav>
            ';
        break;
    default:
        echo 
            '
            <nav id="present" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                </ol>
            </nav>
            ';
      break;
  }
?>