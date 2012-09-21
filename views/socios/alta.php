<form id="socio" method="post" action="socios/add" class="form-horizontal">
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
        <div class="controls">
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" />
        </div>
    </div>

</form>
