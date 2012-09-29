<form id="UpdateTipoSocioForm" name="UpdateTipoSocioForm" method="post" action="<?php echo URL;?>tipoSocio/editSave/<?php echo $this->tiposocio[0]['id']; ?>">
	<input id="descripcion" type="text" name="descripcion" class="required" value="<?php echo $this->tiposocio[0]['descripcion']; ?>" /></br>
	<input type="submit" class="btn btn-primary" value="Guardar"/> <input id="Cancelar-btn" type="button" value="Cancelar" href="<?php echo URL;?>tiposocio" class="btn btn-primary"/>
</form>
