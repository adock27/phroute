<!-- tabla  -->
<div class="container bg-white card-body shadow mt-3" style="border-radius: 13px;">
   

        <table class="table table-borderless">
            <thead>
                <tr>
                    <th class="col">ID</th>
                    <th>valor ingreso</th>
                    <th>fecha creacion</th>
                    <th>fecha de ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- cuerpo de mis datos  -->
                <?php
                if (count($data_ingreso) > 0) {
                    for ($i = 0; $i < count($data_ingreso); $i++) { ?>
                        <tr>
                            <td><?= $data_ingreso[$i]['ingreso_id']; ?></td>
                            <td>$ <?= number_format($data_ingreso[$i]['ingreso_valor']); ?></td>
                            <td><?= date("F j, Y", strtotime($data_ingreso[$i]['fecha_creacion'])); ?></td>
                            <td><?= date("F j, Y, g:i a", strtotime($data_ingreso[$i]['ingreso_fecha'])); ?></td>
    
                            <td>
                                <a class="btn btn-danger btn-sm" href="/appblank/ingresos/eliminar/<?= $data_ingreso[$i]['ingreso_id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                <?php }
                } else {
                    echo 'Nada';
                } ?>
    
            </tbody>
        </table>
    </div>
</div>