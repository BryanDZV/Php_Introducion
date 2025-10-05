<?php
//str_pad(texto, largo, relleno, tipo) → rellena a la derecha, izquierda o ambos lados.
$texto = "bryan";
$izquierdaRelleno = str_pad($texto, 10, "*", STR_PAD_LEFT);
$derechaRelleno = str_pad($texto, 10, "-", STR_PAD_RIGHT); //largo total= size del string
$ambosRelleno = str_pad($texto, 10, "|", STR_PAD_BOTH);

echo <<<resu
$izquierdaRelleno<br>
$derechaRelleno<br>
$ambosRelleno
resu;
