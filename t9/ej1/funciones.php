<?php
function validarNumeroCartas($numCartas)
{
    return is_numeric($numCartas) && $numCartas > 0;
}
function selecionarCartas($numCartas, $baraja)
{
    //coger proporcinalmente  de todas
    $seleccion = [];
    $totalCartas = count($baraja);

    if ($numCartas >= $totalCartas) {
        return $baraja;
    }

    $palos = [];
    foreach ($baraja as $mazo) {

        $palos[$mazo['palo']][] = $mazo;
    }

    while (count($seleccion) < $numCartas) {
        foreach ($palos as $palo => $cartasPalo) {

            $seleccion[] = array_shift($palos[$palo]);
        }
    }

    return $seleccion;
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
function barajear($numCartas, $baraja)
{
    $copiaBaraja = $baraja;
    shuffle($copiaBaraja); //boolean devuelve
    // $claves = array_rand($barajeadas, $numCartas);

    // if (!is_array($claves)) {
    //     $claves = [$claves];
    // }
    $seleccion = array_slice($copiaBaraja, 0, $numCartas); //mas rapido


    // $seleccion = [];
    // foreach ($claves as $i => $clave) {
    //     $seleccion[$i] = $baraja[$clave];
    // }
    return $seleccion;
}

function ordenar($ordenar, $baraja)
{
    $n = count($baraja);
    //buble sort cuando estructurares mal los datos al inicio . Estrucutrar mejor para poder usar ksort , sort, asort
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {

            if ($baraja[$i]['palo'] > $baraja[$j]['palo']) {
                $tmp = $baraja[$i];
                $baraja[$i] = $baraja[$j];
                $baraja[$j] = $tmp;
            } elseif (
                $baraja[$i]['palo'] == $baraja[$j]['palo'] &&
                $baraja[$i]['valor'] > $baraja[$j]['valor']
            ) {
                $tmp = $baraja[$i];
                $baraja[$i] = $baraja[$j];
                $baraja[$j] = $tmp;
            }
        }
    }

    if ($ordenar === 'n') {
        $baraja = array_reverse($baraja);
    }

    return $baraja;
}

function filtrarBarajaPorPalos($baraja, $palosSeleccionados)
{
    if (empty($palosSeleccionados)) {
        return $baraja;
    }

    $resultado = [];

    foreach ($baraja as $carta) {
        if (in_array($carta['palo'], $palosSeleccionados)) {
            $resultado[] = $carta;
        }
    }

    return $resultado;
}
