<?php
$datos = [
    "Ana" => [8, 9, 7],
    "Luis" => 6,
    "María" => [10, 9, 9],
    "Pedro" => 5
];

foreach ($datos as $nombre => $valor) {
    echo "Alumno: $nombre → ";

    // Si el valor es un array, recórrelo
    if (is_array($valor)) {
        foreach ($valor as $nota) {
            echo "$nota ";
        }
    } else {
        // Si no, solo muestra el valor
        echo $valor;
    }

    echo "<br>";
}
