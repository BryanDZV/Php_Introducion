<?php
$texto = "holas pepito hola";
$resultado = strpos($texto, "hola"); //devuelve la primera posicion donde empieza la palabra 
//no busca la palabra completa, solo busca la primera coincidencia de la cadena "hola" dentro del texto, sin importar si forma parte de otra palabra.
echo $resultado;
