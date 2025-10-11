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

    if (isset($_POST["year"]) && !empty($_POST["year"])) {
        $year = $_POST["year"];
        if (validaYear($year)) {
            $meses = calendario_anual($year);
            echo pintarCalendarioAnual($meses, $year);
        } else {
            $error = "Año No Válido";
            header("Location:index.php?error=$error");
        }
    } else {
        header("Location:index.php?resultado=error");
    }
    ?>
</body>

</html>