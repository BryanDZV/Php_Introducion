<?php
$texto = "hola soy Juan y me llamo pepito"; //substr(texto, inicio, longitud) → corta desde posición.
//$extraida = substr($texto, 5, strlen($texto)); //devuevle un string cortado 


//versio para BORRAR con el strpos
$extraida = substr($texto, 0, 4) . " "  . substr($texto, strpos($texto, "me"), strlen($texto));
echo  $extraida;
