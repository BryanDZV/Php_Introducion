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
        $meses = calendario_anual($year);
        echo mostrarCalendarioConArrayWalk($year); //array_walk
    } else {
        header("Location:index.php?resultado=error");
    }
    ?>
</body>

</html>