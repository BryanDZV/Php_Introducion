<?php
/*2 Realizar un programa en PHP en el que se obtengan las tablas de multiplicar. Sacará tantas tablas como indique la constante NUMTABLAS.*/

define("NUMTABLAS", 4);

for ($i = 1; $i <= NUMTABLAS; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $r = $j * $i;
        echo $r . "\n";
    }
    echo "<br>";
    echo "<br>";
}

?>