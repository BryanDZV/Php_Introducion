<?php
require("./datos.php");

function selecionarCartas($numeroCartas)
{
    global  $baraja;
    $cnt = 0;
    $seleccion = [];
    for ($i = 0; $i < $baraja; $i++) {
        if ($cnt == $numeroCartas) {
            //var_dump($seleccion);
            return $seleccion;
        } else {
            $seleccion[$cnt] = $baraja[$i];
            $cnt++;
        }
    }
}

function mostrarCartas($arraySeleccion)
{
    $manoSeleccion = "";
    foreach ($arraySeleccion as $clave => $valor) {
        // var_dump($valor);
        foreach ($valor as $carta) {
            //var_dump($carta);
            $manoSeleccion .= $carta . "<br>";
        }
    };
    return $manoSeleccion;
}
