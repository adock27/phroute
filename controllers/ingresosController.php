<?php

// aqui van mis post

$collector->post('/agregarIngreso', function () {
    print_r($_POST);
    $con = new MetaModel();
    $data = $con->MetaCreate($_POST);
    header('Location: ./metas');
});