<?php
session_start();

if (!isset($_SESSION["carrito"])) {
    header("Location: index.php?parametro=" . urlencode("Carrito vacío"));
}
?>

<h1>Carrito</h1>

<ul>
    <?php foreach ($_SESSION["carrito"] as $value): ?>
        <li>Producto ID: <?= htmlspecialchars($value) ?></li>
    <?php endforeach; ?>
</ul>