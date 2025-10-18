<?php
require "./datos.php"; // define $baraja
require "./funciones.php";
// (checkboxes)
if (empty($_POST["ordenar"])) {
    $ordenar = "s";
} else {
    $ordenar = $_POST["ordenar"];
}

if (isset($_POST["palos"])) {
    $palos = $_POST["palos"];
} else {
    $palos = [];
}
$palosString = implode(",", $palos);

if (isset($_POST["accion"]) && isset($_POST["numCartas"])) {
    $accion = $_POST["accion"];
    $numCartas = $_POST["numCartas"];

    $barajaFiltrada = filtrarBarajaPorPalos($baraja, $palos);
    //var_dump($barajaFiltrada);

    switch ($accion) {
        case "mostrarParcial":
            if (!validarNumeroCartas($numCartas)) {
                $error = "Número de cartas inválido";
                header("Location:index.php?error=$error");
            } else {
                $seleccion = seleccionarCartas($numCartas, $barajaFiltrada);

                $barajaOrdenada = ordenar($ordenar, $seleccion);
                $parcial = mostrarCartas($barajaOrdenada);
                header("Location:index.php?parcial=$parcial&numCartas=$numCartas&ordenar=$ordenar&palos=$palosString");
            }


            break;

        case "barajear":
            if (!validarNumeroCartas($numCartas)) {
                $error = "Número de cartas inválido";
                header("Location:index.php?error=$error");
            } else {
                $barajaBarajada = barajear($numCartas, $barajaFiltrada);
                $barajeado = mostrarCartas($barajaBarajada);
                header("Location:index.php?barajeado=$barajeado&numCartas=$numCartas&ordenar=$ordenar&palos=$palosString");
            }

            break;

        case "mostrarCompleta":
            $barajaOrdenada = ordenar($ordenar, $barajaFiltrada);
            $completa = mostrarBarajaCompleta($barajaOrdenada);
            header("Location:index.php?completa=$completa&numCartas=48&ordenar=$ordenar&palos=$palosString");
            break;

        default:
            $error = "Opción no válida";
            header("Location:index.php?error=$error");
            break;
    }
} else {
    $error = "error en procesar.php al recibo de datos en POST";
    header("Location:index.php?error=$error");
}
