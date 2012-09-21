<div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>Tipo Socio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?=$row['tipoSocio']?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>