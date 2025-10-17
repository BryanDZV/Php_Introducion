   <?php
    require "./datos.php"; // define $baraja
    require "./funciones.php";
    if (isset($_POST["accion"])  && isset($_POST["numCartas"])) {
        $accion = $_POST["accion"];
        $numCartas = $_POST["numCartas"];
        $error = "";

        switch ($accion) {
            // Mostrar $num cartas
            case "mostrarParcial":
                //var_dump($numCartas);
                if (validarNumeroCartas($numCartas)) {
                    $parcial = selecionarCartas($numCartas, $baraja);

                    header("Location:index.php?parcial=$parcial");
                } else {
                    $error = "numero de Cartas debe ser mayor a 0";
                    header("Location:index.php?error=$error");
                }
                break;
            case "mostrarCompleta":
                // Mostrar toda la baraja
                $completa = mostrarBarajaCompleta($baraja);
                header("Location:index.php?completa=$completa");
                break;
            case "shufle":
                // Mostrar barajeada segun caso


                break;
            default:
                $error = "opcion no valida";
                header("Location:index.php?error=$error");
                break;
        }
    } else {
        $error = "error en procesar.php al recibio datos en post";
        header("Location:index.php?error=$error");
    }

    ?>
