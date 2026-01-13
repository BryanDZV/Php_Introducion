<?php

/*EJERCICIO 2 — DOS SUBMIT + CONTROL DE FLUJO

Crear un formulario con:

un campo nombre

dos botones submit: Aceptar y Cancelar

Dependiendo del botón pulsado:

Si se pulsa Aceptar, se mostrará “Formulario aceptado”.

Si se pulsa Cancelar, se mostrará “Operación cancelada”.*/
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
    <?php if (isset($parametro)) {
        echo htmlspecialchars($parametro);
    }


    ?>
    <form action="./procesar.php" method="post">
        <input type="text" name="nombre" required placeholder="nombre">
        <button type="submit" name="accion" value="aceptar">Aceptar</button>
        <button type="submit" name="accion" value="cancelar">Cancelar</button>
    </form>

</body>

</html>