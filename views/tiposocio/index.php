<h3>Administrar Tipo de Socios</h3>
<div class="input-append">
<input class="span2" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button">Buscar</button>
</div>
<div id="paging_container1" class="contgrilla">

    <ul class="col2"> 
        <li class="encabezado">Descripción</li>
        <li class="encabezado">Acciones</li> 
    </ul>

    <ul class="grilla col2">
        <?php
        foreach ($this->Listtiposocio as $key => $value) {
            echo '<li>' . $value['descripcion'] . '</li>';
            echo '<li> <a href="' . URL . 'tiposocio/edit/' . $value['id'] . '"><i class="icon-edit"> </i> Editar</a> <a class="del" href="' . URL . 'tiposocio/delete/' . $value['id'] . '"><i class="icon-remove-circle"> </i> Borrar</a></li>';
        }
        ?>
    </ul>
    <div class="page_navigation"></div>
    <a id="nuevotiposocio-btn" href="<?php echo URL; ?>tiposocio/nuevo/" class="btn btn-primary"/>Nuevo</a>
</div>


