<?php
$texto = "hola pepe";
$mayusculas = strtoupper($texto);
$minusculas = strtolower($texto);
$primeraDePalabra = ucwords($texto);
$primeraDeFrase = ucfirst($texto);
echo <<<resu
$mayusculas <br>
$minusculas <br>
$primeraDePalabra <br>
$primeraDeFrase 
resu;
