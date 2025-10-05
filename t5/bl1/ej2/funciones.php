<?php
/*Devolver la posición de todas las ocurrencias de una cadena
dentro de otra
Escribir una función personalizada llamada buscar($aguja,$pajar)
que devuelva un array con la posición de todas las ocurrencias de
aguja en pajar, o el valor FALSE en caso de que no haya ninguna.
Probarla con la llamada buscar ('Ana', 'Ana Irene Palma').
*/

$datos = [
    "pedro" => "123456789",
    "lucas" => "987456123",
];
function validarUser($usuario, $password)
{
    global $datos;
    return isset($datos[$usuario]) && $datos[$usuario] === $password;
}
