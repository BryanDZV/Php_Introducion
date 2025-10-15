<?php
require("./datos.php");

function selecionarCartas($numCartas)
{
    global  $baraja;
    $cnt = 0;
    $seleccion = [];
    for ($i = 0; $i < $baraja; $i++) {
        if ($cnt == $numCartas) {
            //var_dump("seleccion", $seleccion);
            return mostrarCartas($seleccion);
        } else {
            $seleccion[$cnt] = $baraja[$i];
            $cnt++;
        }
    }
}

function mostrarCartas($arraySeleccion)
{
    $manoSeleccion = "<table class='tabla-carta'>";
    $manoSeleccion .= "<tr>";
    foreach ($arraySeleccion as $clave => $valor) {
        //echo $clave;
        $manoSeleccion .= "<td>{$valor['valor']}</td>";
        $manoSeleccion .= "<td> <img src='{$valor['imagen']}' alt='imagen' width='100'></td>";



        if (($clave + 1) % 8 == 0) {
            $manoSeleccion .= "</tr><tr>";
        }
        //var_dump($valor);
    };
    $manoSeleccion .= "</tr></table>";
    return $manoSeleccion;
}

function mostrarBarajaCompleta()
{
    global $baraja;
    $completa = mostrarCartas($baraja);
    return $completa;
}
