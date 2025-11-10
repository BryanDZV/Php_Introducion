<?php
session_start();
require "./funciones.php";
if (empty($_SESSION["palabra"])) {
    header("Location:procesar.php");
} else {
    $palabra = $_SESSION["palabra"];
    $palabraSecreta = $_SESSION["palabraSecreta"];
    var_dump($palabraSecreta);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorcado</title>
</head>

<body>
    <header>
        <h1 class="titulo">Ahorcado</h1>

    </header>
    <main>
        <h1>Tu Palabra: </h1>
        <p><?= $palabra ?></p>
        <p><?= $palabraSecreta ?></p>


    </main>
    <footer>

    </footer>

</body>

</html>