<?php
function validarNumeroCartas($numCartas)
{
    return is_numeric($numCartas) && $numCartas > 0;
}
function selecionarCartas($numCartas, $baraja)
{
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
        // $manoSeleccion .= "<td>{$valor['valor']}</td>";
        $manoSeleccion .= "<td> <img src='{$valor['imagen']}' alt='imagen' width='100'></td>";



        if (($clave + 1) % 8 == 0) {
            $manoSeleccion .= "</tr><tr>";
        }
        //var_dump($valor);
    };
    $manoSeleccion .= "</tr></table>";
    return $manoSeleccion;
}

function mostrarBarajaCompleta($baraja)
{
    $completa = mostrarCartas($baraja);
    return $completa;
};
function barajear($arrayCaso) {};
