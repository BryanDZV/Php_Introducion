<?php

function cargarJSON()
{
    $ruta = file_get_contents("./datos.json");
    $datos = json_decode($ruta, true);
    return $datos;
}
function obtenerPalabra()
{
    $datos = cargarJSON();

    $grupos = array_keys($datos);


    $grupo_key = $grupos[array_rand($grupos)];
    $grupo = $datos[$grupo_key];


    $palabra_key = array_rand($grupo);
    $palabra = $grupo[$palabra_key];


    return $palabra;
}
function palabraGuion($palabra)
{

    $palabraSecreta = preg_replace("/[a-zA-ZáéíóúÁÉÍÓÚñÑ]/u", "_", $palabra);


    $palabraSecreta = implode(" ", preg_split("/ /", trim($palabraSecreta), -1, PREG_SPLIT_NO_EMPTY));

    return $palabraSecreta;
}
