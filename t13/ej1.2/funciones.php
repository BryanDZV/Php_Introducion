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

    $letras = str_split($palabra);
    $palabraSecreta = str_repeat("_ ", count($letras));
    return $palabraSecreta;
}
function verificarLetra($letraUsuario, $palabra)
{
    if (in_array($letraUsuario, $palabra)) {
        foreach ($palabra as $i => $letra) {
            if ($letra === $letraUsuario) {
                $estado[$i] = $letraUsuario;  // cambia el _ por la letra
            }
        }
    }
}
