<?php
// plantilla: customers_form.php
// variables disponibles: $customers (array)
$templatePath = __FILE__;
?>
<h2>Selecciona cliente</h2>
<form method="post" action="./">
    <input type="hidden" name="action" value="createSale">
    <div class="field">
        <label for="customer">Cliente:</label>
        <select id="customer" name="customer_id" required>
            <?php foreach ($customers as $c): ?>
                <option value="<?= htmlspecialchars($c['id']) ?>">
                    <?= htmlspecialchars($c['firstname'] . ' ' . $c['surname']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="field">
        <button type="submit">Crear venta</button>
    </div>
</form>