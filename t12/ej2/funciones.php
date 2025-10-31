<?php
require "./datos.php";


function obtenerDatos($idioma_actual)
{
    global  $traducciones;
    return $traducciones[$idioma_actual];
};
