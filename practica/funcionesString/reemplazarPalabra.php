<?php
$texto = "hola bryan";
$reemplazo = str_replace(strtolower("BRYAN"), "pepe", $texto); //str_replace(buscar, reemplazar, texto) cambia una por otra.
echo $reemplazo;
