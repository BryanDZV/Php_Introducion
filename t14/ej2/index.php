<?php

require_once __DIR__ . '/customer_modelo.php';

$clientes = [
    new Customer("Javier", "García López", "javier.g@correo.es"),
    new Customer("Ana", "Martínez Pérez", "ana.m@correo.es"),
    new Customer("Luis", "Sánchez Ruiz", "luis.s@correo.es")
];

$libros = [
    new Book("El Quijote", "Cervantes", "978-84-241-1153-6"),
    new Book("Cien años de soledad", "Gabriel García Márquez", "978-84-376-0494-7"),
    new Book("La Ciudad y los Perros", "Mario Vargas Llosa", "978-84-663-3051-9")
];




?>

<!DOCTYPE html>
<html lang="es">

<head>
</head>

<body>
    <?php foreach ($clientes as $cliente): ?>
        <li><?php echo $cliente; ?></li>
    <?php endforeach; ?>
</body>

</html>