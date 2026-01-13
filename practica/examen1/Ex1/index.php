<?php
/*
EJERCICIO 1 — FORMULARIO + VALIDACIÓN + FLUJO

Se desea crear una aplicación en PHP que muestre un formulario con los campos:

nombre

edad

Al enviar el formulario:

Si falta algún dato, se mostrará un mensaje de error.

Si la edad es menor de 18, se mostrará “Acceso denegado”.

En caso contrario, se mostrará “Acceso permitido”.

El formulario y la lógica deben estar separados en distintos archivos.
No se permite el uso de exit.*/

if (empty($_GET["parametro"])) {
    $parametro = "";
} else {
    $parametro = $_GET["parametro"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <?php if (isset($parametro)) {
        echo htmlspecialchars($parametro);
    }

    ?>
    <form action="Procesar.php" method="post">

        <input type="text" name="nombre" id="1" placeholder="Nombre" required>
        <input type="number" name="edad" id="2" placeholder="Edad" required>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>