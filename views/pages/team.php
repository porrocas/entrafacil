<!-- Page Content -->
<?php
    $nombre = '';
    if(isset($_GET['team'])){
      $nombre=$_GET['team'];
    } else {
      $nombre='0';
    }
?>
<div class="container">

    <div class="row">

        <?php
          switch ($nombre) {
            case 'DanielMateus':
              echo 
                '
                <div class="col-lg-3">
                    <h1 class="my-4">Nuestro Equipo</h1>
                    <div class="list-group">
                        <a href="?team=DanielMateus" class="list-group-item active">Daniel Mateus Ovalle</a>
                        <a href="?team=SebastianCastro" class="list-group-item">Juan Sebastián Castro</a>
                        <a href="?team=ValentinaCaballero" class="list-group-item">Valentina Caballero</a>
                    </div>
                </div>
                ';
              break;
            case 'SebastianCastro':
              echo 
                '
                <div class="col-lg-3">
                    <h1 class="my-4">Nuestro Equipo</h1>
                    <div class="list-group">
                        <a href="?team=DanielMateus" class="list-group-item">Daniel Mateus Ovalle</a>
                        <a href="?team=SebastianCastro" class="list-group-item active">Juan Sebastián Castro</a>
                        <a href="?team=ValentinaCaballero" class="list-group-item ">Valentina Caballero</a>
                    </div>
                </div>
                ';
              break;
            case 'ValentinaCaballero':
              echo 
                '
                <div class="col-lg-3">
                    <h1 class="my-4">Nuestro Equipo</h1>
                    <div class="list-group">
                        <a href="?team=DanielMateus" class="list-group-item">Daniel Mateus Ovalle</a>
                        <a href="?team=SebastianCastro" class="list-group-item">Juan Sebastián Castro</a>
                        <a href="?team=ValentinaCaballero" class="list-group-item active">Valentina Caballero</a>
                    </div>
                </div>
                ';
              break;
            default:
              echo 
                '
                <div class="col-lg-3">
                    <h1 class="my-4">Nuestro Equipo</h1>
                    <div class="list-group">
                        <a href="?team=DanielMateus" class="list-group-item active">Daniel Mateus Ovalle</a>
                        <a href="?team=SebastianCastro" class="list-group-item">Juan Sebastián Castro</a>
                        <a href="?team=ValentinaCaballero" class="list-group-item">Valentina Caballero</a>
                    </div>
                </div>
                ';
              # code...
              break;
          }
        ?>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
                <div class="card-body">
                    <h3 class="card-title">Product Name</h3>
                    <h4>$24.99</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit
                        fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur
                        praesentium animi perspiciatis molestias iure, ducimus!</p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    4.0 stars
                </div>
            </div>
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Product Reviews
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                        similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum.
                        Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                        similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum.
                        Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                        similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum.
                        Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <a href="#" class="btn btn-success">Habla conmigo</a>
                </div>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

    </div>

</div>
<!-- /.container -->