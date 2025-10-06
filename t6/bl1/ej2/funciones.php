<?php
function remark($buscar, $cadena)
{
    // echo "hola desde remark";
    // echo "<br>";
    // echo "" . $buscar . "<br>" . $cadena . "";
}

function remove($buscar, $cadena)
{
    /*echo "hola desde remove";
    echo "<br>";
    echo "" . $bsucar . "<br>" . $cadena . "";*/
    $reemplazo = str_replace(strtolower($buscar), "", $cadena); //str_replace(buscar, reemplazar, texto) cambia una por otra.
    return $reemplazo;
}
