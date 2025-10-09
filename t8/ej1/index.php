<?php
/* 1. Sacar la fecha de hoy, mañana, la hora de ahora, y la del próximo lunes. */



// Fecha de hoy
$fechaHoy = date("d/m/Y", time());

// Fecha de mañana (+1 día)
$diaHoy = date("d");
$timestamp = mktime(0, 0, 0, 10, $diaHoy + 1, 2025); //marca de tiempo
$fechaManana = date("d/m/Y", $timestamp);
// Hora actual puede tomar varios parametros estan en https://www.php.net/manual/es/datetime.format.php
$horaAhora = date("H:i:s");


// Fecha del próximo lunes
//$timestamp = strtotime(string $time, int $now = time());

$proximoLunes = date("d/m/Y", strtotime("+4 day"));



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="fechas">
            </h2>
            <h2> Hoy: <?php
                        echo $fechaHoy
                        ?></h2>
            <h2>Mañana: <?php
                        echo $fechaManana
                        ?></h2>
            <h2>Hora actual:<?php
                            echo $horaAhora
                            ?></h2>
            <h2> Próximo lunes:<?php
                                echo $proximoLunes
                                ?></h2>
        </div>

    </main>

</body>

</html>