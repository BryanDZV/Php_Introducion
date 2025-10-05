<?php
$texto = "hola soy Juan y me llamo pepito"; //substr(texto, inicio, longitud) → corta desde posición.
$extraida = substr($texto, 5, strlen($texto)); //devuevle un string cortado 
echo  $extraida;
