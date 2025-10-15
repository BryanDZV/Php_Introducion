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