<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
</head>

<body>
    <div>
        <?php
        if (isset($_GET["parametro"])) {
            echo htmlspecialchars($_GET["parametro"]);
        } ?>
    </div>
    <form action="./procesar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="enviar">
    </form>

</body>

</html>