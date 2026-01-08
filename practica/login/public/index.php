<?php


require __DIR__ . '/../vendor/autoload.php';


use Bryan\Login\Model\BD;
use Bryan\Login\Service\Logs;

$db1 = BD::getInstace(); //aqui creamos la conexion es como el new db
$db1->getConexion(); //te da un pdo object y es la que necesitas para hacer querys 
var_dump($db1);

echo "<br>";
$log1 = Logs::getInstance();
$log2 = Logs::getInstance();
$log1->setLogs("hola1");
$log2->setLogs("hola2");
print_r($log1->getLogs()); // Array ( [0] => Mensaje 1 [1] => Mensaje 2 )