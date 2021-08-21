
<div class="bg-white card-body shadow" style="border-radius: 13px;">
            <div class="table-responsive">
                <table class="table table-hover table-borderless align-middle ">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Invertido</th>
                            <th>Restante</th>
                            <th>Progreso</th>
                            <th>Meta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php for ($i = 0; $i < count($data); $i++) { ?>
                            <tr>
                                <td><?= $data[$i]['meta_nombre']; ?></td>
                                <td>suma</td>

                                <td> restante </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="<?= $data[$i]['tope']; ?>"></div>
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