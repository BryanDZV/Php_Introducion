<?php
require "./Usuario.php";

$datos = [
    ["nombre" => "Ana", "edad" => 20],
    ["nombre" => "Luis", "edad" => 17]
];

$users = []; // Inicializamos el array vacío

foreach ($datos as $dato) {
    // 1. Creamos el objeto directamente
    // No hace falta llamarlo $user1, $user2... solo $nuevoUsuario temporalmente
    $nuevoUsuario = new Usuario($dato["nombre"], $dato["edad"]);

    // 2. Lo guardamos en el array de objetos
    $users[] = $nuevoUsuario;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tabla Usuarios</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>nombre</th>
                <th>edad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $user es un OBJETO de tipo Usuario, no un array
            foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user->getNombre() ?></td>
                    <td><?= $user->getEdad() ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>