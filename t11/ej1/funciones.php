<?php
function crearTabla($columna, $fila, $ancho = 'auto', $color = 'red', $bordes = '1px solid black')
{
    $tabla = "<table style='border-collapse: collapse; margin: 10px;'>";

    for ($i = 0; $i < $fila; $i++) {
        $tabla .= "<tr>";
        for ($j = 0; $j < $columna; $j++) {
            $tabla .= "<td style='width: $ancho; height: 40px; background: $color; border: $bordes; text-align: center;'>
                        Fila " . ($i + 1) . ", Col " . ($j + 1) . "
                      </td>";
        }
        $tabla .= "</tr>";
    }

    $tabla .= "</table>";
    return $tabla;
}
