<?php
session_start();
require_once "./autoload.php";
require_once "./datos/datos.php";

use clases\Circulo;
use clases\Cuadrado;
use clases\Triangulo;
use clases\Rectangulo;

// ruta 1
if (!empty($_POST["eleccion"])) {

    $eleccion = $_POST["eleccion"];

    if (isset($figuras[$eleccion])) {
        $_SESSION["eleccion"] = $eleccion;
        $_SESSION["datoTipo"] = $figuras[$eleccion];

        header("Location: ./vistas/formulario.php");
        return;
    } else {
        $error = "Elección no válida";
        header("Location: index.php?error=" . urlencode($error));
        return;
    }
}

// ruta 2
elseif (!empty($_POST) && !empty($_SESSION["eleccion"])) {

    $tipo = $_SESSION["eleccion"];

    //  nombre → array RGB
    if (!empty($_POST['color']) && isset($colores[$_POST['color']])) {
        $color = $colores[$_POST['color']];
    } else {
        $color = [0, 0, 0];
    }

    // Crear el objeto según tipo
    switch ($tipo) {
        case 'circulo':
            $figura = new Circulo($color, $_POST['size'], $_POST['radio']);
            break;

        case 'cuadrado':
            $figura = new Cuadrado($color, $_POST['size'], $_POST['lado']);
            break;

        case 'triangulo':
            $figura = new Triangulo($color, $_POST['size'], $_POST['ladoA'], $_POST['ladoB'], $_POST["ladoC"]);
            break;

        case 'rectangulo':
            $figura = new Rectangulo($color, $_POST['size'], $_POST['base'], $_POST['altura']);
            break;

        default:
            header("Location: index.php?error=Tipo de figura desconocido");
            return;
    }

    $_SESSION["resultado"] = [
        "tipo"       => $tipo,
        "area"       => $figura->getArea(),
        "perimetro"  => $figura->getPerimetro(),
        "color"      => $figura->getColor(),
        "size"       => $figura->getSize(),
        "rutaImagen" => $figura->dibujar()
    ];

    header("Location: ./vistas/vistaFigura.php");
    return;
}

// ruta error
else {
    header("Location: index.php?error=" . urlencode("No has enviado datos"));
    return;
}
