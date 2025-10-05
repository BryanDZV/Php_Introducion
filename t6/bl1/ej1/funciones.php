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
