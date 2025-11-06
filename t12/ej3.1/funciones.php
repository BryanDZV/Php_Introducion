<?php
function obtenerDatos($idioma_actual)
{
    $json = file_get_contents("./datos.json");
    $traducciones = json_decode($json, true);
    return $traducciones[$idioma_actual];
}
