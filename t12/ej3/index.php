<?php
include "./funciones.php";

$datosNuevo = $_COOKIE["nombreGuardado"]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1><?php
            if (!empty($datosNuevo)) {
                echo $datosNuevo;
            } ?></h1>
    </header>
    <form action="procesar.php" method="post">
        <input type="text" name="nombre" id="1">
        <input type="submit" value="Enviar">


    </form>

</body>

</html>