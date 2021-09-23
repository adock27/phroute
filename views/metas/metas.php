<?php include 'shared/header.php' ?>




<div class="container mt-5">

    <h1>Metas</h1>
    <br>
<div class="row">
    <div class="col">
        <div class="card card-body">
            Numero de metas: <?= count($data)?>
        </div>
    </div>
</div>
    <a href="/appblank/metas/agregar" class="btn btn-success">Nueva meta</a>
    <br>
    <br>
    <?php include_once './views/metas/tabla.php' ?>
</div>