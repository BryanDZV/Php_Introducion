<?php
$texto = "pepe dice";
$resultado = str_word_count($texto, 0); //modo 0: número de palabrasque tien el string solo palabras
$resultadoArray = str_word_count($texto, 1); //// modo 1: array con las palabras de la cadena
echo $resultado;
echo "<br>";

var_dump($resultadoArray);
print_r($resultadoArray);
