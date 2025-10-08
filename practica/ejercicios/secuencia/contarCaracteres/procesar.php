<?php
if (isset($_POST["texto"]) && isset($_POST["accion"]) && isset($_POST["buscar"])) {
    $texto = $_POST["texto"];
    $accion = $_POST["accion"];
    $buscar = $_POST["buscar"];

    $resultado = "";
    $error = "";

    switch ($accion) {
        case "Numero_Palabras":
            $resultado = "Número de palabras: " . str_word_count($texto);
            break;

        case "Numero Caracteres":
            $resultado = "Número de caracteres: " . strlen($texto);
            break;

        case "Primera pos":
            $pos = strpos(strtolower($texto), strtolower($buscar));
            $resultado = ($pos !== false)
                ? "Primera posición de '$buscar': $pos"
                : "La palabra '$buscar' no se encontró.";
            break;

        case "Ultima pos":
            $pos = strrpos(strtolower($texto), strtolower($buscar));
            $resultado = ($pos !== false)
                ? "Última posición de '$buscar': $pos"
                : "La palabra '$buscar' no se encontró.";
            break;

        default:
            $error = "Acción no válida.";
            break;
    }

    // Redirigir de vuelta con los resultados
    header("Location: index.php?resultado=" . urlencode($resultado) . "&error=" . urlencode($error));
    exit;
} else {
    $error = "Error al obtener los datos del formulario.";
    header("Location: index.php?error=" . urlencode($error));
    exit;
}
