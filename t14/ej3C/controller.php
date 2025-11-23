<?php
session_start();
require_once "./autoload.php";
require_once "./datos/datos.php";

use clases\Circulo;
use clases\Cuadrado;
use clases\Triangulo;
use clases\Rectangulo;

/*
    ================================
    RUTA 1: VIENE DE index.php
    ================================
    Aquí solo viene "eleccion".
    Guardamos los campos que debe pedir
    y redirigimos a formulario.php.
*/

if (!empty($_POST["eleccion"])) {

    $tipo = $_POST["eleccion"];

    if (!isset($figuras[$tipo])) {
        header("Location: index.php?error=Tipo+no+válido");
    } else {
        $_SESSION["datoTipo"]  = $figuras[$tipo];   // ej: ["color","size","lado"]
        $_SESSION["tipoFigura"] = $tipo;            // ej: "cuadrado"

        header("Location: formulario.php");
    }

    // Aquí no usamos exit ni return, simplemente termina el flujo natural del archivo.
}



/*
    ===================================
    RUTA 2: VIENE DE formulario.php
    ===================================
    Ahora ya vienen TODOS los datos:
    - color
    - size
    - lados, radio, base, altura según la figura

    Creamos el objeto con SWITCH.
*/ elseif (!empty($_POST) && !empty($_SESSION["tipoFigura"])) {

    $tipo = $_SESSION["tipoFigura"];   // ejemplo: "triangulo"

    // Procesar color (si no existe, color negro)
    if (!empty($_POST['color']) && isset($colores[$_POST['color']])) {
        $color = $colores[$_POST['color']];
    } else {
        $color = [0, 0, 0];
    }

    $figura = null;

    // ==========================
    // CREAR OBJETO CON SWITCH
    // ==========================
    switch ($tipo) {

        case "circulo":
            $figura = new Circulo(
                $color,
                $_POST["size"],
                $_POST["radio"]
            );
            break;

        case "cuadrado":
            $figura = new Cuadrado(
                $color,
                $_POST["size"],
                $_POST["lado"]
            );
            break;

        case "triangulo":
            $figura = new Triangulo(
                $color,
                $_POST["size"],
                $_POST["ladoA"],
                $_POST["ladoB"],
                $_POST["ladoC"]
            );
            break;

        case "rectangulo":
            $figura = new Rectangulo(
                $color,
                $_POST["size"],
                $_POST["base"],
                $_POST["altura"]
            );
            break;

        default:
            header("Location: index.php?error=Tipo+de+figura+desconocido");
            return; // vale por el switch
    }

    // =======================================
    // GUARDAR RESULTADO EN LA SESIÓN
    // =======================================
    $_SESSION["resultado"] = [
        "tipo"       => $tipo,
        "area"       => $figura->getArea(),
        "perimetro"  => $figura->getPerimetro(),
        "color"      => $figura->getColor(),
        "size"       => $figura->getSize(),
        "rutaImagen" => $figura->dibujar()
    ];

    // Mandamos a la vista final
    header("Location: vistas/vistaFigura.php");
    // sin return ni exit
}



/*
    ==========================
    RUTA DE ERROR
    ==========================
*/ else {
    header("Location: index.php?error=" . urlencode("No+has+enviado+datos"));
    // sin return ni exit
}
