<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Seleccionar cliente</title>
    <link rel="stylesheet" href="/../../../../composer/libros/src/Views/styleSaleCliente.css">
</head>

<body>
    <div>
        <?php if (!empty($error)): ?>
            <p style="color:red"><?= $error ?></p>
        <?php endif; ?>

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

    </div>
    <div>
        <a href="/../../../../composer/libros/src/Views/Crear_Cliente.php">Crear Cliente</a>
    </div>


</body>

</html>