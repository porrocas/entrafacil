<section onclick="cerrarNav()" class="preEvents">
    <div>
        <span>puedes encontrar los mejores eventos de Colombia aquí</span>
        <h1 class="fuenteCursiva">¿Busca la experiencia de tu preferencia?</h1>
    </div>
    <article class="contenedorEventos">
        <?php
            for ($i=1; $i < 5; $i++) { 
                echo '
                <div>
                <a href="#">
                    <div class="contImageEvento">
                        <img src="php/dataMulEvents/img/'.$i.'.jfif" alt="comprar entradas en entra fácil boletas">
                    </div>
                    <div class="cont-info-eventos">
                        <h1>Lorem, ipsum dolor sit</h1>
                        <div class="info-lugar-evento">
                            <div class="img-info">
                                <img src="img/calendar.png" alt="fecha de eventos de entrafácil.com compra, crea y vende boletas">
                            </div>
                            <div>
                                <p>19 de diciembre del 2020 - 6:00 pm</p>
                            </div>
                        </div>
                        <div class="info-lugar-evento">
                            <div class="img-info">
                                <img src="img/location-point.png" alt="lugar de eventos de entrafácil.com compra, crea y vende boletas, entradas y demas">
                            </div>
                            <div>
                                <p> Cangri bar zona t - Carrera 13 # 82-37</p>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero similique non et, sunt laboriosam vitae, voluptas odit hic, iure quidem accusamus omnis tenetur ea magni assumenda vel! Ea, veniam eos.</p>
                        <div class="contPrecioEvento">
                            <p>Precio por entrada: $15000</p>
                        </div>
                    </div>
                </a>
            </div>
                ';
            }
        ?>
    </article>
    <section class="contBtnAllEvents">
        <a href="#">Todos los eventos</a>
    </section>
</section>