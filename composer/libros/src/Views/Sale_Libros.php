<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Seleccionar libros</title>
    <link rel="stylesheet" href="/../../../../composer/libros/src/Views/styleLibros.css">
</head>

<body>

    <h2>Seleccionar libros</h2>

    <form method="post" action="index.php?action=procesar">

        <input type="hidden" name="customer_id" value="<?php echo $customerId; ?>">

        <table border="1">
            <tr>
                <th>Libro</th>
                <th>Precio (€)</th>
                <th>Stock</th>
                <th>Cantidad</th>

            </tr>

            <?php
            $total = 0;

            foreach ($libros as $libro) {

                echo "<tr>";
                echo "<td>{$libro['title']}</td>";
                echo "<td>{$libro['price']}</td>";
                echo "<td>{$libro['stock']}</td>";
                echo "<td>";
                echo "<input type='number' min='0' name='libros[{$libro['id']}]' value='0'>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <button type="submit">Finalizar compra</button>
    </form>

</body>

</html>