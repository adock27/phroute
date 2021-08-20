<?php

$collector->get('/', function () {
    $con = new UserModel();
    $con1 = new MetaModel();
    $data = $con ->UserList();
    $data1 = $con1 ->MetaList();
    include_once 'views/menu.php';
});

