<?php
require "./funciones.php";
if (isset($_POST["numeroCartas"]) && !empty($_POST["numeroCartas"])) {
    $numeroCartas = $_POST["numeroCartas"];
    //var_dump($numeroCartas);
    $cartasSeleccion = selecionarCartas($numeroCartas);
    $cartas = mostrarCartas($cartasSeleccion);
    echo "$cartas";
}
