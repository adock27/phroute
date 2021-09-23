<?php include 'shared/header.php' ?>


<div class="container mt-5">
    <h2><?= ucwords($data['meta_nombre']) ?></h2>
    <p>Detallado de mi meta:</p>
    <br>
    <ul class="list-group">
        <li class="list-group-item"><span class="fw-bold">Nombre : </span> <?= ucwords($data['meta_nombre']) ?></li>
        <li class="list-group-item"><span class="fw-bold">Meta : $ </span> <?= number_format($data['tope']) ?></li>
        <li class="list-group-item"><span class="fw-bold">Fecha Creacion : </span> <?= date("F j, Y", strtotime($data['fecha'])); ?></li>
    </ul>
</div>

<div class="container mt-5">
    <h3>Movimientos</h3>
    <p>Agrega un nuevo movimiento:</p>
    <?php include_once './views/ingresos/agregar.php' ?>
    <?php include_once './views/metas/movimientos.php' ?>
</div>