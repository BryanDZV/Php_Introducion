<?php
require "./funciones.php";
require "./variables.php";
if (isset($_GET["datos"])) {
    $datosDecode = json_decode($_GET["datos"]);
} else {
    $error = "Acceso no autorizado";
    header("Location: index.php?error=" . urlencode($error));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visual</title>
</head>

<body>
    <h1>Tus checks son:</h1>
    <?php foreach ($datosDecode as $dato) { ?>
        <p><?= htmlspecialchars($dato) ?></p>
    <?php } ?>
    <a href="index.php">Volver al formulario</a>


</body>

</html>