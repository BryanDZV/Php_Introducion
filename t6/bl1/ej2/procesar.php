<?php
require "./funciones.php";

if (
    isset($_POST["buscar"]) && !empty(trim($_POST["buscar"])) &&
    isset($_POST["accion"]) && !empty(trim($_POST["accion"])) &&
    isset($_POST["cadena"]) && !empty(trim($_POST["cadena"])) &&
    isset($_POST["remplazo"]) && !empty(trim($_POST["remplazo"]))
) {
    $buscar = trim($_POST["buscar"]);
    $accion = trim($_POST["accion"]);
    $cadena = trim($_POST["cadena"]);
    $remplazo = trim($_POST["remplazo"]);

    $resultado = "";
    $resultadoR = "";

    if ($accion == "Replace") {
        $resultado = replace($buscar, $remplazo, $cadena);
    } elseif ($accion == "Remove") {
        $resultado = remove($buscar, $cadena);
    } elseif ($accion == "Remark") {
        $resultadoR = remark($buscar, $cadena);
    } elseif ($accion == "Count Words") {
        $resultado = countWords($cadena);
    } elseif ($accion == "Count Vowels") {
        $resultado = countVowels($cadena);
    } elseif ($accion == "Lower Case") {
        $resultado = strtolower($cadena);
    } elseif ($accion == "Upper Case") {
        $resultado = strtoupper($cadena);
    } else {
        $resultado = "Acción no válida.";
    }

    header("Location: index.php?resultado=" . ($resultado) . "&resultadoR=" . ($resultadoR));
} else {
    $resultado = "ERROR AL COMPROBAR DATOS procesar.php  ";
    header("Location: index.php?resultado=" . ($resultado));
}
