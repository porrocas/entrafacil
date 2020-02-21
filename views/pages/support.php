<div class="jumbotron mainJumbotron text-dark bg-ligth" style="width: 95%; margin: 10px auto;">
    <h1 class=" text-success">Soporte.</h1>
    <p class="lead text-dark">Tienes algun problema, No te preocupes, tenemos asistencia casi inmediata.</p>
    <hr class="my-4">
    <p class="centerTextMuted text-dark">Asesorate con expertos</p>
</div>
<br>
<hr>
<br>
<form style="width: 90%; margin: 10px auto;" id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Nombre Completo *</label>
                    <input id="form_name" type="text" name="name" class="form-control"
                        placeholder="Nombre Completo *" required="required"
                        data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Teléfono *</label>
                    <input id="form_lastname" type="tel" name="surname" class="form-control"
                        placeholder="Numero de contacto *" required="required"
                        data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control"
                        placeholder="Please enter your email *" required="required"
                        data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Asunto *</label>
                    <select id="form_need" name="need" class="form-control" required="required"
                        data-error="Please specify your need.">
                        <option value=""></option>
                        <option value="Request quotation">Técnico</option>
                        <option value="Request order status">Ventas</option>
                        <option value="Request copy of an invoice">Alianzas</option>
                        <option value="Other">Otros</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Mensaje *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Escribe tu mensaje *"
                        rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Enviar Mensaje">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> PQRS
            </div>
        </div>
    </div>

</form>