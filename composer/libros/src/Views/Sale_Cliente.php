<h1>Nueva venta</h1>

<form method="POST" action="index.php?action=libros">
    <select name="customer_id" required>
        <?php foreach ($clientes as $c): ?>
            <option value="<?= $c['id'] ?>">
                <?= $c['firstname'] . " " . $c['surname'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Continuar</button>
</form>