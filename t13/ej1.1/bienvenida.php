<?php
require "./variables.php";

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>
    <h1>Bienvenido, <?= htmlspecialchars($_SESSION["usuario"]) ?> </h1>
    <form action="logout.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
</body>

</html>