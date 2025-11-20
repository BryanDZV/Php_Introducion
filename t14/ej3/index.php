<?php
require_once __DIR__ . "/autoload.php";

use  Clases\Triangulo;

$triangulo = new Triangulo("Triangulo1", 4, 4, 4, "green", 30);
echo $triangulo->getArea();
