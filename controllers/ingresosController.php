<?php

// aqui van mis post
// Post 
$collector->post('AddIngreso', function () {
    print_r($_POST);
    $con = new IngresoModel();
    $data = $con->AddIngreso($_POST);
    header('Location: ./metas/ver/'.$_POST['id'].'');
});


$collector->get('ingresos/agregar/{id}', function ($id) {


    
    include_once 'views/ingresos/agregar.php';
});




$collector->get('ingresos/eliminar/{id}', function ($id) {

    
    $con_meta = new IngresoModel();
    $id_meta = $con_meta->GetIngresoPorId($id);
    $data = $con_meta->DeleteIngresoPorId($id);
    
    // print_r($id_meta);

    header('Location: /appblank/metas/ver/'.$id_meta['meta_id'].'');
});