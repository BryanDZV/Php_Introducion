<?php
require "./funciones.php";
/*1. Devolver la posición de todas las ocurrencias de una cadena
dentro de otra
Escribir una función personalizada llamada buscar($aguja,$pajar)
que devuelva un array con la posición de todas las ocurrencias de
aguja en pajar, o el valor FALSE en caso de que no haya ninguna.
Probarla con la llamada buscar ('Ana', 'Ana Irene Palma').
*/
$pajar = 'Ana Irena Palma';
$aguja = 'Ana';

$resultado = buscar($aguja, $pajar);
$resultado2 = buscarRecursiva($aguja, $pajar);

if ($resultado === false) {
    echo "No se encontró la cadena.";
} else {
    echo "Encontrada en posiciones: " . implode(", ", $resultado);
}

echo "<br>";



if ($resultado2 === false) {
    echo "No se encontró la cadena.";
} else {
    echo "Encontrada en posiciones: " . implode(", ", $resultado2);
}
