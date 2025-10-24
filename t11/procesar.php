<?php
require "./funciones.php";
if (isset($_POST["columna"]) && isset($_POST["filas"])) {
    $columna = $_POST["columna"];
    $filas = $_POST["filas"];
    $tabla = crearTabla($columna, $filas);
    header("Location:index.php?tabla=$tabla");
} else {
    $error = "error en procesar.php";
    header("Location:index.php?error=$error");
}
