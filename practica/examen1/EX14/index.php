<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if (isset($_GET["parametro"])) {
        echo htmlspecialchars($_GET["parametro"]);
    } elseif (isset($_GET["mensaje"])) {
        echo htmlspecialchars($_GET["mensaje"]);
    } ?>

    <?php

    if (file_exists("./usuarios.json")) {
        $dato = [];
        $file = file_get_contents("./usuarios.json");
        $jsonArray = json_decode($file, true);
        if (is_array($jsonArray)) {
            $datos = $jsonArray; ?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $value) { ?>
                        <tr>
                            <td><?php echo $value["id"]; ?></td>
                            <td><?php echo $value["nombre"]; ?></td>
                            <td><?php echo $value["edad"]; ?></td>
                        </tr>

                    <?php  }

                    ?>

                </tbody>
            </table>

    <?php }
    } ?>


    <form action="./procesar.php" method="post">
        <input type="text" name="nombre" id="" placeholder="Nombre">
        <input type="number" name="edad" placeholder="Edad">
        <input type="submit" value="enviar">


    </form>

</body>

</html>