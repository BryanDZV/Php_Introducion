<?php
$productos = [
    ["id" => 1, "nombre" => "Teclado", "precio" => 20],
    ["id" => 2, "nombre" => "Ratón", "precio" => 10],
    ["id" => 3, "nombre" => "Pantalla", "precio" => 150]
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <div>
        <h1>
            <?php
            if (isset($_GET["parametro"])) {
                $parametro = $_GET["parametro"];
                echo htmlspecialchars($parametro);
            }

            ?>
        </h1>
    </div>
    <form action="./procesar.php" method="post">
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Seleccionar Producto</th>
            </thead>
            <tbody>
                <?php
                foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?= $producto["id"] ?></td>
                        <td><?= $producto["nombre"] ?></td>
                        <td><?= $producto["precio"] ?></td>
                        <td><input type="checkbox" name="seleccion[]" value="<?= $producto["id"] ?>" id=""></td>





                    </tr>

                <?php } ?>
            </tbody>
        </table>
        <input type="submit" value="enviar">
    </form>
</body>

</html>