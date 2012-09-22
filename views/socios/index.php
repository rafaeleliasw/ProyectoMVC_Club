<div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><?=$row['population']?></td>
                            <td><?=$row['internet_users']?></td>
                            <td><?=$row['penetration']?></td>
                            <td><?=$row['world_users']?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>