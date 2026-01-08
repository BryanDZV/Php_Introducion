<?php

use Bryan\Crud\Config\DataBase;
use Bryan\Crud\Models\CustomerModel;

require __DIR__ . "/vendor/autoload.php";


$action = $_GET["action"] ?? "login";

switch ($action) {
    case 'login':

        break;
    case 'logout':
        # code...
        break;
    case 'listUser':
        # code...
        break;
    case 'createUser':
        # code...
        break;
    case 'editUser':
        # code...
        break;
    case 'deleteUser':
        # code...
        break;

    default:
        echo "opcion no valida";
        break;
}














$model = new CustomerModel();
$uno = 1;
$cliente = $model->getById(1);
//print_r($cliente);

foreach ($cliente as $campo => $valor) {
    echo "$campo: $valor <br>";
}

$cliente = $model->getAll();
//print_r($cliente);
foreach ($cliente as $fila => $valor) {
    echo "<br>";
    foreach ($valor as $campo => $valorCampo) {
        echo "$campo: $valorCampo <br>";
    }
}

$custid = 5;
$cname = "pepe";
$email = "pepe@pepe.com";
$phone = 99999992;
$address = "calle pepe";
$cliente = $model->create($custid, $cname, $email, $phone, $address);
