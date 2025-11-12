<?php
session_start();
require "./funciones.php";

// RUTA 1:
if (empty($_SESSION["palabra"])) {

    // Inicializamos todas las variables
    $_SESSION["palabra"] = obtenerPalabra();
    $_SESSION["palabraSecreta"] = palabraGuion($_SESSION["palabra"]);
    $_SESSION["erroresJ1"] = 0;
    $_SESSION["aciertosJ1"] = 0;
    $_SESSION["erroresJ2"] = 0;
    $_SESSION["aciertosJ2"] = 0;
    $_SESSION["letras_usadas"] = [];
    $_SESSION["turno"] = 1; // Jugador 1 empieza

    header("Location: index.php");
}
// RUTA 2:
else {

    // envió una letra
    if (isset($_POST["letra"])) {
        $letra = strtolower($_POST["letra"]);
        procesarLetra($letra, $_SESSION["turno"]);
        $_SESSION["turno"] = cambiarTurno($_SESSION["turno"]);
    }


    header("Location: index.php");
}
