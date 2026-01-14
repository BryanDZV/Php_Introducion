<?php
$error = "";
$mensaje = "";
if (!empty($_GET["error"])) {
    $error = $_GET["error"];
} elseif (!empty($_GET["mensaje"])) {
    $mensaje = $_GET["mensaje"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($error) {
        echo $error;
    } elseif ($mensaje) {
        echo $mensaje;
    } ?>

    <form action="procesar.php" method="post">
        <input type="text" name="nombre" id="1">
        <input type="number" name="edad" id="2">
        <input type="submit" value="enviar">
    </form>

</body>

</html>