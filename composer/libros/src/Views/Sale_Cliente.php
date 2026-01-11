<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Seleccionar cliente</title>
</head>

<body>

    <h2>Seleccionar cliente</h2>

    <form method="post" action="index.php?action=libros">
        <select name="customer_id">
            <?php
            foreach ($clientes as $cliente) {
                echo "<option value='{$cliente['id']}'>";
                echo $cliente['firstname'] . " " . $cliente['surname'];
                echo "</option>";
            }
            ?>
        </select>

        <button type="submit">Continuar</button>
    </form>

</body>

</html>