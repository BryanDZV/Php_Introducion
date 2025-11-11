<?php
session_start();
require "./funciones.php";

// Inicializar partida si no hay datos
if (empty($_SESSION["palabra"])) {
    $_SESSION["palabra"] = obtenerPalabra();
    $_SESSION["palabraSecreta"] = palabraGuion($_SESSION["palabra"]);
    $_SESSION["erroresJ1"] = 0;
    $_SESSION["aciertosJ1"] = 0;
    $_SESSION["erroresJ2"] = 0;
    $_SESSION["aciertosJ2"] = 0;
    $_SESSION["letras_usadas"] = [];
    $_SESSION["turno"] = 1; // Jugador 1 empieza
    header("Location:index.php");
}

// Procesar letra enviada por el jugador
if (isset($_POST["letra"])) {
    $letra = strtolower($_POST["letra"]);
    procesarLetra($letra, $_SESSION["turno"]);
    $_SESSION["turno"] = cambiarTurno($_SESSION["turno"]);
}

// Redirigir a index para mostrar la partida
header("Location:index.php");
