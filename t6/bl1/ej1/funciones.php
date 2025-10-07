<?php
$pajar = 'Ana Irena Palma';
$aguja = 'Ana';


function buscar($aguja, $pajar)
{
        $posiciones = [];
        $pos = 0;

        while (($pos = strpos($pajar, $aguja, $pos)) !== false) {
                $posiciones[] = $pos;
                $pos += strlen($aguja);
        }

        return empty($posiciones) ? false : $posiciones;
}



function buscarRecursiva($aguja, $pajar, $inicio = 0)
{
        $pos = strpos($pajar, $aguja, $inicio);

        if ($pos === false) {
                return false; // Caso base
        }

        // Llamada recursiva
        $resto = buscar($aguja, $pajar, $pos + strlen($aguja));


        if ($resto === false) {
                return [$pos];
        } else {

                $resultado = []; //es dinamico 
                foreach ($resto as $r) {
                        $resultado[] = $r;
                }
                return $resultado;
        }
}
