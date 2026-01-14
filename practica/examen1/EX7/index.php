<?php $usuarios = [
    ["id" => 1, "nombre" => "Ana", "edad" => 20],
    ["id" => 2, "nombre" => "Luis", "edad" => 17],
    ["id" => 3, "nombre" => "María", "edad" => 25]
]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EDAD</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $value) { ?>
                <tr>
                    <td><?= $value["id"] ?></td>
                    <td>
                        <?= $value["nombre"] ?>
                        <br>
                        <?php if ($value["edad"] < 18) {
                            echo htmlspecialchars("menor de edad");
                        } ?>
                    </td>
                    <td><?= $value["edad"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>