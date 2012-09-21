<p>Envianos tus dudas, sugerencias o comentarios</p>

<div class="alert alert-success" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Muchas gracias por contactarse con nosotros, pronto recibirá una respuesta.
</div>

<div class="alert alert-error" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Lo sentimos, el email no ha sido enviado, intente nuevamente.
</div>

<form id="commentForm" method="post" action="contacto/sendEmail" class="form-horizontal">
    <legend>Formulario de contacto</legend>
    <div class="control-group">
        <label class="control-label" for="nombre">Nombre/s:</label>
        <div class="controls">
            <input class="required" type="text" id="nombre" name="nombre" value="" class="input-xxlarge" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="apellidos">Apellido/s:</label>
        <div class="controls">
            <input class="required" type="text" id="apellidos" name="apellidos" value="" class="input-xxlarge" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="dni">Email:</label>
        <div class="controls">
            <input class="required" type="text" id="email" name="email" value="" class="input-xxlarge"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="telefono">Tel&eacute;fono:</label> 
        <div class="controls">
            <input type="text" id="dni" name="telefono" value="" size="10" maxlength="9" class="input-xlarge" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="dni">Mensaje:</label>
        <div class="controls">
            <textarea class="textarea required" rows="10" name="mensaje" id="mensaje" class="input-xxlarge"> </textarea>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" />
        </div>
    </div>

</form>
  
