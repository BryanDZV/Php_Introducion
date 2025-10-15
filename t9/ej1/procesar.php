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
    if (isset($_POST["accion"]) || isset($_POST["numCartas"])) {
        $accion = $_POST["accion"];
        $numCartas = $_POST["numCartas"];
        switch ($accion) {
            case "mostrarParcial":
                echo selecionarCartas(($numCartas));
                // Mostrar $num cartas
                break;
            case "mostrarCompleta":
                // Mostrar toda la baraja
                echo mostrarBarajaCompleta();
                break;
            case "barajear":
                // Barajar
                break;
            case "ordenar":
                // Ordenar
                break;
        }
    }
    ?>

</body>

</html>