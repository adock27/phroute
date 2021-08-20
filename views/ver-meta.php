<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>



    <!-- formulario para un ingreso -->
    <section class="container mt-5">
        <div class="card-body bg-white shadow" style="border-radius: 13px;">
            <!-- titulo de mi meta  -->
            <div class="">
                <h4><?= $data1['meta_nombre'] ?></h4>
                <hr>
            </div>
            Detallado de mi progreso
            <div class="mt-3">
                <form action="../ingresoadd" method="post">
                    <input type="hidden" name="id" id="" value="<?= $id ?>">
                    <div class="d-flex">
                        <input class="form-control me-2" placeholder="Agregar un ingreso a mi meta" type="number" name="valor" id="">
                        <input class="form-control me-2" value="<?php echo date("Y-m-d"); ?>" type="date" name="" id="">
                    </div>

                    <div class="mt-2">
                        <a href="/appblank/metas" class="btn btn-outline-danger">Regresar</a>
                        <input class="btn btn-success" type="submit" name="sumit" value="Agregar" id="">
                    </div>

                </form>
            </div>
        </div>
    </section>


    <div>
        <!-- consultas sql -->
        <!-- <?php
                $con = new IngresoModel();
                $sumaIngresos = $con->GetSumaById($id);
                ?> -->
    </div>

    <!-- <div class="card-body bg-white shadow mt-3">
        Acumulado $
        <?= number_format($sumaIngresos['SUM(ingreso_valor)']) ?>
    </div> -->


    <section>
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
                    if (count($data2) > 0) {
                        for ($i = 0; $i < count($data2); $i++) { ?>
                            <tr>
                                <td><?= $data2[$i]['ingreso_id']; ?></td>
                                <td>$ <?= number_format($data2[$i]['ingreso_valor']); ?></td>
                                <td><?= date("F j, Y", strtotime($data2[$i]['fecha_creacion'])); ?></td>
                                <td><?= date("F j, Y, g:i a", strtotime($data2[$i]['ingreso_fecha'])); ?></td>

                                <td>
                                    <a class="btn btn-outline-danger btn-sm" href="/appblank/eliminar-ingreso-meta/<?= $data2[$i]['ingreso_id']; ?>">Eliminar</a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo 'Nada';
                    } ?>

                </tbody>
            </table>
        </div>
    </section>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">