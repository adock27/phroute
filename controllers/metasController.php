<?php
$collector->post('/metaadd', function () {
    print_r($_POST);
    $con = new MetaModel();
    $data = $con->MetaCreate($_POST);
    header('Location: ./metas');
});

$collector->post('/ingresoadd', function () {
    print_r($_POST);
    $con = new IngresoModel();
    $data = $con->ingresoCreate($_POST);
    header('Location: ./ver-meta/'.$_POST['id'].'');
});


$collector->get('/metas', function () {

    $con1   = new MetaModel();
    $data1  = $con1->MetaList();
    // print_r($data1);
    include_once 'views/metas.php';
});

$collector->any('ver-meta/{id}', function($id){
    $con1   = new MetaModel();
    $data1  = $con1->GetMeta($id);
    $data2  = $con1->MetaGetIngresos($id);
    // print_r($data1);
    // echo '<br>';
    // print_r($data2);



include_once 'views/ver-meta.php';

});

$collector->any('eliminar-ingreso-meta/{id}', function($id){
    $con1   = new IngresoModel();
    $data2  = $con1->getIngresoPorId($id);
    $mensaje  = $con1->deleteIngresoPorId($id);
    // print_r($data1);
    // echo '<br>';
    // print_r($data2);

    include_once 'views/eliminar-ingreso-meta.php';

});

$collector->any('eliminar-meta/{id}', function($id){
    $con1   = new IngresoModel();
    $mensaje  = $con1->deleteMeta($id);
    header('Location: /appblank/metas');
    // print_r($data1);
    // echo '<br>';
    // print_r($data2);

});
