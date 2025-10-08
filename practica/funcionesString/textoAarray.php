<?php
$texto = "hola,juan";
$palabras = explode(",", $texto); //un array con las palabras separadas por el 1 paramentros
var_dump($palabras); //explode(separador, texto) corta el texto por el separador.
print_r($palabras);
