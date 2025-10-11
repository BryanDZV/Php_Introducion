<?php
function calendario_mensual($year, $mes)
{
    $diasSemana = ["L", "M", "X", "J", "V", "S", "D"];
    $stampMes = mktime(0, 0, 0, $mes, 1, $year);
    //$nombreMes = date("F", $stampMes); en ingles 
    switch (($mes)) {
        case 1:
            $nombreMes = "Enero";
            break;
        case 2:
            $nombreMes = "Febrero";
            break;
        case 3:
            $nombreMes = "marzo";
            break;
        case 4:
            $nombreMes = "abril";
            break;
        case 5:
            $nombreMes = "mayo";
            break;
        case 6:
            $nombreMes = "junio";
            break;
        case 7:
            $nombreMes = "julio";
            break;
        case 8:
            $nombreMes = "agosto";
            break;
        case 9:
            $nombreMes = "septiembre";
            break;
        case 10:
            $nombreMes = "octubre";
            break;
        case 11:
            $nombreMes = "noviembre";
            break;
        case 12:
            $nombreMes = "diciembre";
            break;
        default:
            $nombreMes = 0;
    }
    $numeroDias = cal_days_in_month(CAL_GREGORIAN, $mes, $year);
    $primerDiaSemana = date("N", $stampMes);

    return [
        "mes" => ucwords($nombreMes),
        "diasSemana" => $diasSemana,
        "numeroDias" => $numeroDias,
        "primerDiaSemana" => $primerDiaSemana
    ];
}

function calendario_anual($year)
{
    $meses = [];
    for ($i = 1; $i <= 12; $i++) {
        $meses[] = calendario_mensual($year, $i);
    }
    return $meses;
}

function pintarCalendarioMensual($datos)
{
    $diasSemana = $datos["diasSemana"];
    $numeroDias = $datos["numeroDias"];
    $nombreMes = $datos["mes"];
    $primerDiaSemana = $datos["primerDiaSemana"];

    $tabla = "<table class='calendario-mes'>";
    $tabla .= "<tr><th colspan='7' class='mes-nombre'>$nombreMes</th></tr>";
    $tabla .= "<tr>";

    foreach ($diasSemana as $dia) {
        $tabla .= "<th class='dia-semana'>$dia</th>";
    }
    $tabla .= "</tr><tr>";

    for ($i = 1; $i < $primerDiaSemana; $i++) $tabla .= "<td class='dia'></td>";

    $diaSemana = $primerDiaSemana;
    for ($d = 1; $d <= $numeroDias; $d++) {
        $tabla .= "<td class='dia'>$d</td>";
        if ($diaSemana == 7) {
            $tabla .= "</tr><tr>";
            $diaSemana = 1;
        } else {
            $diaSemana++;
        }
    }


    $tabla .= "</tr></table>";

    return $tabla;
}

function escribir_tabla(&$mes)
{
    $mes = pintarCalendarioMensual($mes); // array de strings HTML
}

function mostrarCalendarioConArrayWalk($year)
{
    $meses = calendario_anual($year);

    array_walk($meses, 'escribir_tabla');

    //  3x4
    $tabla = "<table class='calendario-anual'>";
    $tabla .= "<tr><th colspan='4'>$year</th></tr><tr>"; //colspan cuantas columnas ocupa una fila

    foreach ($meses as $indice => $mes) {
        $tabla .= "<td>$mes</td>";
        if (($indice + 1) % 4 == 0) $tabla .= "</tr><tr>"; //multiplos
    }

    $tabla .= "</tr></table>";
    return $tabla;
}
