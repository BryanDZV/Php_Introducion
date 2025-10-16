<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    require "./funciones.php";
    $ordenar = "";

    if (isset($_POST["accion"])  && isset($_POST["numCartas"])) {
        $accion = $_POST["accion"];
        $numCartas = $_POST["numCartas"];

        switch ($accion) {
            case "mostrarParcial":
                if (!validarNumeroCartas($numCartas)) {
                    $error = "numero no valido";
                    header("Location:index.php?error=$error");
                } else {
                    $parcial = selecionarCartas(($numCartas));
                    header("Location:index.php?parcial=$parcial");
                }

                // Mostrar $num cartas
                break;
            case "mostrarCompleta":
                // Mostrar toda la baraja
                $completa = mostrarBarajaCompleta();
                header("Location:index.php?completa=$completa");
                break;
            case "barajear":

                // Barajar
                break;
            case "ordenar":
                // Ordenar
                break;
        }
    } else {
        echo "error en procesar.php añ recibio datos ";
    }
    ?>

</body>

</html>