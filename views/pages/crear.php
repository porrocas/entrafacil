<div class="container">
    <div class="py-3 text-center">
        <h2>Crea tu evento, completa los datos.</h2>
        <p class="lead">Estas a un paso de vender tus boletas en EntraFácil.com, Descubre lo fácil que es, por favor
            completa el siguiente formulario correctamente.</p>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Datos de tu evento.</h4>
            <form class="needs-validation">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="address">Póster Promocional de tu evento.</label>
                        <input type="file" class="form-control-file" id="address" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Nombre del evento *</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Nombre del evento *"
                            required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lastName">Slogan del evento</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Slogan del Evento">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Representante del evento *</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username"
                            placeholder="Nombre del representante del evento *" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Descripción del evento *</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="tel">Numero de Contacto *</label>
                    <input type="tel" class="form-control" placeholder=" Numero de contacto evento *" required>
                </div>

                <div class="mb-3">
                    <label for="address">Ubicación del evento</label><br>
                    <small class="text-muted" for="state">Por favor selecciona con una recomendación de google, asi
                        podremos mostrar la ubicación con la posición exacta en el mapa.</small>
                    <input type="text" class="form-control mt-1" placeholder="Ubicación del evento" name="clientAddress"
                        id="clientAddress" required>
                </div>

                <div class="form-group row">
                    <label class="col-8" for="example-datetime-local-input" class="col-2 col-form-label">Fecha y Hora del evento *</label>
                    <div class="col-6">
                        <input class="form-control" type="datetime-local" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Numero de boletas</label>
                        <input min="5" type="number" class="form-control" placeholder="500 (Example)" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Precio por boleta</label>
                        <input min="0" step="1000" type="number" class="form-control" placeholder="$70000" required>
                        <small class="text-muted mt-1" for="state">Si quieres que tus entradas sean gratis escribe
                            0</small>
                    </div>
                </div>

                <hr class="mb-3">

                <div class="row">
                    <label class="col-md-12">Códigos Promocionales</label>
                    <div class="col-md-6 mb-3">
                        <input min="0" max="100" type="number" class="form-control" placeholder="  Descuento en %">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="  Promo Code">
                    </div>
                </div>

                <hr class="mb-3">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Subir Evento</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>