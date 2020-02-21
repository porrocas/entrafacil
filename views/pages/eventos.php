<div class="jumbotron mainJumbotron text-dark bg-ligth" style="width: 95%; margin: 10px auto;">
    <h1 class=" text-success">Aca están todos los eventos a los que aun puedes asistir.</h1>
    <p class="lead text-dark">Es muy fácil, solo busca el evento de tu interés, haz clic en Saber Mas, selecciona cuantas entradas quieres y compralas.</p>
    <hr class="my-4">
    <p class="centerTextMuted text-dark">Creando recuerdos inolvidables</p>
</div>

<div class="container-pre-eventos">
    <?php
  for ($i=0; $i < 8; $i++) { 
    echo '
        <div class="card">
            <img id="imgOfEvento" src="../services/img/1.jpg" class="card-img-top imagenesIguales" alt="...">
            <div class="card-body">
                <small class="text-muted">01 de diciembre del 2020 - 18:00 hrs</small>
                <h5 class="card-title">Alistate que estoy suelta como gabete!</h5>
                <p class="card-text d-none d-sm-none d-md-block">EL mejor evento de reggeton y perreo, junto a los mejores artistas, compra tu entrada.</p>
                <div class="cont-btn-evento">
                  <a href="#" class="btn btn-primary">Saber Más</a>
                </div>
            </div>
        </div>
    ';
  }
?>
    <div class="cont-btn-center">
        <a href="#" class="btn btn-success">Cargas Mas</a>
    </div>
</div>