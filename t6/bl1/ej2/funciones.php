<?php
function remove($buscar, $cadena)
{
    // Eliminazsin distinguir mayúsculas)
    $resultado = str_replace($buscar, "", $cadena);
    return $resultado;
}

function replace($buscar, $remplazo, $cadena)
{


    $resultado = str_replace($buscar, $remplazo, $cadena);
    return $resultado;
}

function remark($buscar, $cadena)
{

    $resultadoR = str_replace($buscar, "<mark>$buscar</mark>", $cadena);
    return $resultadoR;
}

function countWords($cadena)
{

    $num = str_word_count($cadena);
    return "Número de palabras: $num";
}

function countVowels($cadena)
{
    $vocales = "aeiouáéíóúAEIOUÁÉÍÓÚ";
    $total = 0;


    for ($i = 0; $i < strlen($cadena); $i++) {
        if (strpos($vocales, $cadena[$i]) !== false) {
            $total++;
        }
    }

    return "Número de vocales: $total";
}
