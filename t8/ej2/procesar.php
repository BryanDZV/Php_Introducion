<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    require "calendario_funciones.php";

    if (isset($_POST["year"], $_POST["mes"]) && !empty($_POST["year"]) && !empty($_POST["mes"])) {
        $year = $_POST["year"];
        $mes = $_POST["mes"];
        switch (strtolower($mes)) {
            case "enero":
                $mes = 1;
                break;
            case "febrero":
                $mes = 2;
                break;
            case "marzo":
                $mes = 3;
                break;
            case "abril":
                $mes = 4;
                break;
            case "mayo":
                $mes = 5;
                break;
            case "junio":
                $mes = 6;
                break;
            case "julio":
                $mes = 7;
                break;
            case "agosto":
                $mes = 8;
                break;
            case "septiembre":
                $mes = 9;
                break;
            case "octubre":
                $mes = 10;
                break;
            case "noviembre":
                $mes = 11;
                break;
            case "diciembre":
                $mes = 12;
                break;
            default:
                $mes = 0;
        }
        if (validaYear($year)) { //tienes la opcion check date valida todos lso parametros pasados
            if (validarMes($mes)) {
                //var_dump(validarMes(($mes)));
                $datos = calendario_mensual($year, $mes);
                echo pintarCalendarioMensual($datos);
            } else {

                $error = "Mes No Válido";
                header("Location:index.php?error=$error");
            }
        } else {
            $error = "Año No Válido";
            header("Location:index.php?error=$error");
        }
    } else {
        $error = "Error al procesar Datos";
        header("Location:index.php?error=$error");
    }
    ?>
</body>

</html>