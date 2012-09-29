<h3>Administrar Tipo de Socios</h3>
<table id="listTipoSocios" class="table table-striped">
        <thead>
            <tr> 
                <th style="width: 60%;">Descripción</th>
                <th style="width: 40%;">Acciones</th> 
            </tr>
        </thead>
        <?php
        foreach ($this->Listtiposocio as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['descripcion'] . '</td>';
            echo '<td> <a href="' . URL . 'tiposocio/edit/' . $value['id'] . '"><i class="icon-edit"> </i> Editar</a> <a class="del" href="' . URL . 'tiposocio/delete/' . $value['id'] . '"><i class="icon-remove-circle"> </i> Borrar</a></td>';
            echo '</tr>';
        }
        ?>
</table>

<a id="nuevotiposocio-btn" href="<?php echo URL; ?>tiposocio/nuevo/" class="btn btn-primary"/>Nuevo</a>
