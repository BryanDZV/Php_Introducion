<?php
$texto = "<h1>hola & adios</h1>";
$especiales = htmlspecialchars($texto); //htmlspecialchars() protege el HTML mostrando los símbolos. imprime los simbolos no los cambia por su valor

echo <<<resu
$texto <br>
$especiales
resu;
