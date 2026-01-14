<?php

function limpiar($string)
{
    $n = strtoupper(trim(strip_tags($string)));
    return $n;
}
