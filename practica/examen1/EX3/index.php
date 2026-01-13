<?php
/*EJERCICIO 3 — CHECKBOX ARRAY + VALIDACIÓN

Crear un formulario que permita seleccionar varias aficiones mediante checkbox:

Deportes

Música

Cine

Lectura

Al enviar:

Si no se selecciona ninguna, mostrar error.

Si se seleccionan, mostrar una lista con todas las aficiones elegidas.*/
if (isset($_GET["parametro"])) {
    $parametro = $_GET["parametro"];
} else {
    $parametro = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h2><?php if (isset($parametro)) {
            echo htmlspecialchars($parametro);
        }

        ?></h2>
    <h3><?php if (isset($_GET["aficiones"])) {
            echo htmlspecialchars($_GET["aficiones"]);
        } ?></h3>
    <form action="procesar.php" method="post">
        <h3>Elige una:</h3>
        <input type="checkbox" name="aficion[]" id="" value="deportes">Deportes
        <input type="checkbox" name="aficion[]" id="" value="musica">Música
        <input type="checkbox" name="aficion[]" id="" value="lectura">Lectura
        <input type="checkbox" name="aficion[]" id="" value="correr">Correr

        <input type="submit" value="enviar">Enviar

    </form>

</body>

</html>