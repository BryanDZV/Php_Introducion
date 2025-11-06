<?php
function cargarJSON($ruta)
{
    if (file_exists($ruta)) {
        $json = file_get_contents($ruta);
        return json_decode($json, true);
    }
    return [];
}

function obtenerTraduccion($idioma)
{
    $traducciones = cargarJSON("./data/traducciones.json");
    return $traducciones[$idioma];
}
function obtenerColores()
{
    $colores = cargarJSON("./data/colores.json");
    return $colores;
}
