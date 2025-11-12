<?php
session_start();
require "./funciones.php";

// RUTA 1: La partida NO existe, hay que inicializarla.
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

    // Enviamos la cabecera de redirección
    header("Location: index.php");
}
// RUTA 2: La partida SÍ existe, procesamos un movimiento.
else {

    // Comprobamos si el jugador envió una letra
    if (isset($_POST["letra"])) {
        $letra = strtolower($_POST["letra"]);
        procesarLetra($letra, $_SESSION["turno"]);
        $_SESSION["turno"] = cambiarTurno($_SESSION["turno"]);
    }

    // Enviamos la cabecera de redirección
    header("Location: index.php");
}

// El script termina aquí naturalmente.
