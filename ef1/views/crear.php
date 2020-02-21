<main id="mainP" onclick="cerrarNav()">
    <div class="contSimio floating hideDesktop">
        <img src="img/bgEventos.png" alt="crear evento entra fácil y vende boletas">
    </div>

    <div id="loadProgress">
        <div id="load">
        </div>
        <div id="progess">
            <p id="porcentaje" class="hideDesktop">0% completado</p>
        </div>
    </div>

    <br>
    <br>

    <div class="titleP">
        <span>En 3 sencillos pasos tendrás tu evento disponible para todos!</span>
        <h1 class="fuenteCursiva">Crea tu evento y vende sus entradas.</h1>
    </div>

    <div class="contFormDataEvento">
        <p> <span>1</span> Datos del evento</p>
        <hr>
        <form action="#">
            <input onchange="barL()" id="input1" type="text" placeholder="Nombre del evento *" required>
            <input onchange="barL()" id="input2" type="text" placeholder="Slogan del evento *" required>
            <input onchange="barL()" id="input3" type="text" placeholder="Nombre del representante del evento *" required>
            <textarea onchange="barL()" id="input4" placeholder="Descripción del evento *" required></textarea>
            <input onchange="barL()" id="input5" type="tel" placeholder="Numero de Whatsapp / contacto *" required>
            <input type="url" placeholder="Url del evento en Facebook">
            <input type="url" placeholder="Url del evento en Instagram">
        </form>
    </div>
    <div class="contFormDataEvento">
        <p> <span>2</span> Datos de fecha, hora y ubicación del evento</p>
        <hr>
        <form action="#">
            <p>Fecha del evento</p>
            <input onchange="barL()" id="input6" type="date" required>
            <p>Hora de inicio del evento</p>
            <input onchange="barL()" id="input7" type="time" required>
            <p>Ubicación</p>
            <input onchange="barL()" type="text" placeholder="Ubicación del evento" name="clientAddress" id="clientAddress" required> 
            <i>Por favor selecciona una ubicación ofrecida por google para una correcta visualización del lugar del evento.</i>
        </form>
    </div>
    <div class="contFormDataEvento">
        <p> <span>3</span> Póster, boletas y precio</p>
        <hr>
        <form action="#">
            <p>Ingresa el póster de tu evento</p> 
            <input onchange="barL()" id="input8" type="file" accept="image/*" required>
            <input onchange="barL()" id="input9" type="number" min="5" placeholder="Numero de boletas a la venta" required>
            <input onchange="barL()" id="input10" type="number" min="5000" step="1000" placeholder="Precio por boleta $15000" required>
            <input id="btnCrear" type="submit" value="Crear Evento">
        </form>
    </div>
</main>