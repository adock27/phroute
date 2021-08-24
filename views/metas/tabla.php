<div class="bg-white card-body shadow" style="border-radius: 13px;">
    <div class="table-responsive">
        <table class="table table-hover table-borderless align-middle table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Invertido</th>
                    <th>Restante</th>
                    <!-- <th>Progreso</th> -->
                    <th>Meta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php for ($i = 0; $i < count($data); $i++) { ?>
                    <tr>
                        <td><?= ucwords($data[$i]['meta_nombre']); ?></td>
                        <td> <?= number_format($data[$i]['total']); ?> </td>
                        <td><?= number_format($data[$i]['tope'] - $data[$i]['total']); ?></td>

                        <td>
                            <?php $total = ($data[$i]['total']*100)/$data[$i]['tope']?>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" style="width: <?=$total?>%;" aria-valuenow="<?=$total?>" aria-valuemin="0" aria-valuemax="100"><?=round($total)?>%</div>
                            </div>
                        </td>
                        <td>$ <?= number_format($data[$i]['tope']); ?></td>
                        <td>
                            <a class="btn " href="metas/ver/<?= $data[$i]['meta_id']; ?>"><i class="bi bi-eye"></i></a>
                            <a class="btn " href="metas/editar/<?= $data[$i]['meta_id']; ?>"><i class="bi bi-pencil"></i></a>
                            <a class="btn " href="metas/eliminar/<?= $data[$i]['meta_id']; ?>"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>