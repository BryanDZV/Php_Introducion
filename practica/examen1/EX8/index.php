<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion</title>
</head>

<body>
    <div>
        <?php
        if (isset($_GET["mensaje"]) && isset($_GET["nombre"])) {
            echo htmlspecialchars($_GET["mensaje"]);
            echo htmlspecialchars($_GET["nombre"]);
        } elseif (isset($_GET["parametro"])) {
            echo htmlspecialchars($_GET["parametro"]);
        }
        ?>


    </div>
    <form action="./procesar.php" method="post">
        <input type="text" name="nombre" placeholder="PON TU NOMBRE">
        <input type="submit" value="enviar">
    </form>

</body>

</html>