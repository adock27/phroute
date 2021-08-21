<?php


// Post 
$collector->post('AddMeta', function () {
    print_r($_POST);
    $con = new MetaModel();
    $data = $con->AddMeta($_POST);
    header('Location: ./metas');
});

$collector->post('UpdateMeta', function () {
    print_r($_POST);
    $con = new MetaModel();
    $data = $con->UpdateMeta($_POST);
    header('Location: ./metas');
});

$collector->get('metas', function () {

    $con   = new MetaModel();
    $data  = $con->GetMetas();
    // print_r($data);
    include_once 'views/metas/metas.php';
});

$collector->get('metas/agregar', function () {
    include_once 'views/metas/agregar.php';
});

$collector->get('metas/ver/{id}', function ($id) {

    $con = new MetaModel();
    $data = $con->GetMetaPorId($id);
    // print_r($data);
    include_once 'views/metas/ver.php';
});

$collector->get('metas/editar/{id}', function ($id) {

    $con = new MetaModel();
    $data = $con->GetMetaPorId($id);
    // print_r($data);
    include_once 'views/metas/editar.php';
});

$collector->get('metas/eliminar/{id}', function ($id) {

    $con = new MetaModel();
    $data = $con->DeleteMeta($id);
    print_r($data);
    header('Location: /appblank/metas');
});

