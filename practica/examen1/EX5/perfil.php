<?php
session_start();
if (!isset($_SESSION["user"])) {
    $parametro = "Inicia session primero";
    header("Location:./index.php?parametro=" . $parametro);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <h1><?php if (isset($_GET["mensaje"])) {
            echo htmlspecialchars($_GET["mensaje"]);
        } ?></h1>

</body>

</html>