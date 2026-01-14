<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <div>
        <?php if (isset($_GET["parametro"])) {
            echo htmlspecialchars($_GET["parametro"]);
        } elseif (isset($_GET["mensaje"])) {
            $datos = json_decode(file_get_contents("./archivoJson.json"), true);
            if (is_array($datos)) {
                foreach ($datos as $persona) {
                    echo htmlspecialchars($persona["nombre"]);
                    echo " - ";
                    echo htmlspecialchars($persona["edad"]);
                    echo "-----";
                }
            }
        } ?>
    </div>
    <form action="./procesar.php" method="post">
        <input type="text" name="nombre" id="" placeholder="nombre">
        <input type="number" name="edad" id="" placeholder="edad">
        <input type="submit" value="enviar">
    </form>

</body>

</html>