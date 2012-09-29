<form id="InsTipoSocioForm" name="InsTipoSocioForm" action="<?php echo URL; ?>tiposocio/add/" method="post">
    <legend>Nuevo Tipo de Socio</legend>
    <div class="control-group">
        <label class="control-label" for="descripcion"><i class="reqfield" rel="tooltip" data-original-title="Campo requerido">*</i> Descripción: </label>
        <div class="controls">
            <input id="descripcion" type="text" name="descripcion" class="required" />
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <input type="submit" class="btn btn-primary" value="Guardar"/> <input id="Cancelar-btn" type="button" value="Cancelar" href="<?php echo URL; ?>tiposocio" class="btn btn-primary"/>
        </div>
    </div>

</form>