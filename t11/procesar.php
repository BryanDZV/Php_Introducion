<?php
require "./funciones.php";
if (isset($_POST["columna"]) && isset($_POST["filas"]) || isset($_POST["ancho"]) || isset($_POST["color"]) || isset($_POST["borde"])) {
    $columna = $_POST["columna"];
    $filas = $_POST["filas"];
    $ancho = $_POST["ancho"];
    $color = $_POST["color"];
    $borde = $_POST["borde"];
    $tabla = crearTabla(
        $columna,
        $filas,
        $ancho,
        $color,
        $border
    );
    header("Location:index.php?tabla=$tabla");
} else {
    $error = "error en procesar.php";
    header("Location:index.php?error=$error");
}
