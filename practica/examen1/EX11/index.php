<?php
$jsonString = file_get_contents("./usuarios.json");
$usuarios = json_decode($jsonString, true);
?>
<!DOCTYPE html>
<html>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?= $usuario["id"] ?></td>
                    <td><?= htmlspecialchars($usuario["nombre"]) ?></td>
                    <td><?= $usuario["edad"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>