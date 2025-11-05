<?php
require "./funciones.php";
if (isset($_POST["columna"]) && isset($_POST["filas"])) { //(el resto son opcionales).
    $columna = $_POST["columna"];
    $filas = $_POST["filas"];
    $args = [];
    if (!empty($_POST["ancho"])) $args[] = $_POST["ancho"];
    if (!empty($_POST["color"])) $args[] = $_POST["color"];
    if (!empty($_POST["borde"])) $args[] = $_POST["borde"];

    $tabla = crearTabla($columna, $filas, ...$args);

    header("Location:index.php?tabla=" . urlencode($tabla));
} else {
    $error = "error en procesar.php";
    header("Location:index.php?error=$error");
}
