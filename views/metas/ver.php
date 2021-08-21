<?php include 'shared/header.php' ?>


<div class="container mt-5">
    <h2>Meta Detalles</h2>
    <p>Detalles de mi meta</p>
    <br>
    <ul class="list-group">
        <li class="list-group-item"><span class="fw-bold">Nombre : </span> <?=$data['meta_nombre']?></li>
        <li class="list-group-item"><span class="fw-bold">Meta : </span> <?=$data['tope']?></li>
    </ul>
    <br>
    <a href="/appblank/metas" class="btn btn-danger">Regresar</a>
</div>