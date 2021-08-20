<?php
$collector->post('/useradd', function () {
    print_r($_POST);
    $con = new UserModel();
    $data = $con->UserCreate($_POST);
    header('Location: ./');
});