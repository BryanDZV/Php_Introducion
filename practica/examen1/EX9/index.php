<?php
require "./Usuario.php";

$user1 = new Usuario("bryan", 19);
$user2 = new Usuario("david", 12);
$user3 = new Usuario("juan", 89);

$users = [$user1, $user2, $user3];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpading="7">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Es mayor de Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user->getNombre() ?></td>
                    <td><?= $user->getEdad() ?></td>
                    <td><?= $user->esMayorEdad() ? 'si' : 'no' ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>