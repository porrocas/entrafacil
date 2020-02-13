<div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
        <h1 class="display-4">¿Donde deseas estar?</h1>
        <p class="lead">Entrafácil.com es una plataforma que permite crear eventos y vender entradas. Los asistentes
            pueden comprar entradas de forma sencilla y totalmente segura, en cualquier parte, incluso sin salir de su
            casa o en la vuelta de la esquina.</p>
    </div>
    <div class="contBtnJumbo">
        <button type="button" class="btn btn-outline-success">Eventos</button>
        <button type="button" class="btn btn-success">Crear Evento</button>
    </div>
</div>

<div class="container-pre-eventos">
    <?php
  for ($i=0; $i < 8; $i++) { 
    echo '
        <div class="card" style="width: 18rem;">
            <img id="imgOfEvento" src="../src/img/1.jfif" class="card-img-top imagenesIguales" alt="...">
            <div class="card-body">
                <small class="text-muted">01 de diciembre del 2020 - 18:00 hrs</small>
                <h5 class="card-title">Alistate que estoy suelta como gabete!</h5>
                <p class="card-text">EL mejor evento de reggeton y perreo, junto a los mejores artistas, compra tu entrada.</p>
                <div class="cont-btn-evento">
                  <a href="#" class="btn btn-primary">Saber Más</a>
                </div>
            </div>
        </div>
    ';
  }
?>
    <div class="cont-btn-center">
        <a href="#" class="btn btn-success">Todos los eventos</a>
    </div>
</div>