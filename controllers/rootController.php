<?php

$collector->get('/', function () {
    $con = new UserModel();
    $con1 = new MetaModel();
    include_once 'views/menu.php';
});

