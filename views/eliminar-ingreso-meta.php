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


    <ul class="list-group">
        <li class="list-group-item"><?= $data2['ingreso_id']; ?></li>
        <li class="list-group-item"><?= $data2['meta_id']; ?></li>
        <li class="list-group-item"><?= $data2['ingreso_valor']; ?></li>
        <li class="list-group-item"><?= $data2['fecha_creacion']; ?></li>
        <li class="list-group-item"><?= $data2['ingreso_fecha']; ?></li>
    </ul>

    <a href="/appblank/metas">Regresar</a>


    
    
    
    
    