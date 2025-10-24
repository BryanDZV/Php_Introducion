<?php
function crearTabla($columna, $fila, $ancho = 'auto', $color = 'red', $bordes = 1)
{
    // Validate inputs to ensure they are numbers
    $columna = (int)$columna;
    $fila = (int)$fila;
    $bordes = (int)$bordes;

    // Build inline style from parameters
    $style = "width: {$ancho}px; border: {$bordes}px solid {$color}; border-collapse: collapse;";
    $cellStyle = "border: {$bordes}px solid {$color}; padding: 5px;";

    $tabla = "<table style='{$style}'>";
    $tabla .= "<thead><tr><th colspan='{$columna}' style='{$cellStyle}'>Tabla Generada</th></tr></thead>";
    $tabla .= "<tbody>";

    for ($i = 0; $i < $fila; $i++) {
        $tabla .= "<tr>";
        for ($j = 0; $j < $columna; $j++) {
            $tabla .= "<td style='{$cellStyle}'>Fila " . ($i + 1) . ", Col " . ($j + 1) . "</td>";
        }
        $tabla .= "</tr>";
    }

    $tabla .= "</tbody></table>";
    return $tabla;
}

function mostrarTabla() {};
