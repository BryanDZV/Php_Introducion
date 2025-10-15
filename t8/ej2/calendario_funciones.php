<?php


function validaYear($year)
{
    if (is_numeric($year) && $year > 1977 &&  $year < 9999) {
        return true;
    }
}

function validarMes($mes)
{
    return is_numeric($mes) && $mes >= 1 && $mes <= 12;
}
function calcularDias($year, $mes)
{
    return cal_days_in_month(CAL_GREGORIAN, $mes, $year);
}

function calendario_mensual($year, $mes)
{

    //var_dump($mes);
    $diasSemana = ["L", "M", "X", "J", "V", "S", "D"];
    $nDias = calcularDias($year, $mes);
    $timestamp = mktime(0, 0, 0, $mes, 1, $year);
    //var_dump($timestamp);
    $meses = [
        'January' => 'enero',
        'February' => 'febrero',
        'March' => 'marzo',
        'April' => 'abril',
        'May' => 'mayo',
        'June' => 'junio',
        'July' => 'julio',
        'August' => 'agosto',
        'September' => 'septiembre',
        'October' => 'octubre',
        'November' => 'noviembre',
        'December' => 'diciembre'
    ];
    $nombreMesIngles = date("F", $timestamp);
    $nombreMes = ucfirst($meses[$nombreMesIngles]);
    $primerDiaSemana = date("N", $timestamp); //el numero del primer dia con N
    return [
        "mes" => $nombreMes,
        "diasSemana" => $diasSemana,
        "numeroDias" => $nDias,
        "primerDiaSemana" => $primerDiaSemana
    ];
}
function pintarCalendarioMensual($datos)
{
    $diasSemana = $datos['diasSemana'];
    $numeroDias = $datos['numeroDias'];
    $nombreMes = $datos['mes'];
    $primerDiaSemana = $datos['primerDiaSemana'];

    $tabla = "<table class='calendario-mes' border='1' style='border-collapse: collapse; text-align: center;'>";

    $tabla .= "<tr><th colspan='7'>$nombreMes</th></tr>";
    $tabla .= "<tr>";

    foreach ($diasSemana as $dia) {
        $tabla .= "<th>$dia</th>";
    }
    $tabla .= "</tr><tr>";

    for ($i = 1; $i < $primerDiaSemana; $i++) $tabla .= "<td></td>";

    $diaSemana = $primerDiaSemana;
    for ($d = 1; $d <= $numeroDias; $d++) {
        $tabla .= "<td>$d</td>";
        if ($diaSemana == 7) {
            $tabla .= "</tr><tr>";
            $diaSemana = 1;
        } else {
            $diaSemana++;
        }
    }
    while ($diaSemana <= 7) {
        $tabla .= "<td></td>";
        $diaSemana++;
    }



    $tabla .= "</tr></table>";

    return $tabla;
}
