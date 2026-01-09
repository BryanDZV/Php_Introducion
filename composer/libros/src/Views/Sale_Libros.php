<h1>Seleccionar libros</h1>

<form method="POST" action="index.php?action=procesar">
    <input type="hidden" name="customer_id" value="<?= $customerId ?>">

    <?php foreach ($libros as $l): ?>
        <?= $l['title'] ?>
        <input type="number" name="libros[<?= $l['id'] ?>]" value="0" min="0"><br>
    <?php endforeach; ?>

    <button>Finalizar compra</button>
</form>