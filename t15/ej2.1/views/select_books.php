<?php
// plantilla: select_books.php
// variables disponibles: $books (array), $sale_id (int)
$templatePath = __FILE__;
?>
<h2>Añadir libros a la venta #<?= htmlspecialchars((string)$sale_id) ?></h2>

<form method="post" action="./">
    <input type="hidden" name="action" value="processBooks">
    <input type="hidden" name="sale_id" value="<?= htmlspecialchars((string)$sale_id) ?>">

    <div class="field">
        <label for="books">Libros (Ctrl/Comando para seleccionar varios):</label><br>
        <select id="books" name="books[]" multiple size="8" style="width:100%">
            <?php foreach ($books as $b): ?>
                <option value="<?= htmlspecialchars($b['id']) ?>">
                    <?= htmlspecialchars($b['title']) ?> (stock: <?= htmlspecialchars($b['stock']) ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <h3>Cantidades (rellena sólo las que uses)</h3>
    <?php foreach ($books as $b): ?>
        <div class="field">
            <label>
                <?= htmlspecialchars($b['title']) ?>:
                <input type="number" name="quantity[<?= htmlspecialchars($b['id']) ?>]" min="1" step="1" placeholder="cantidad">
            </label>
        </div>
    <?php endforeach; ?>

    <div class="field">
        <button type="submit">Procesar venta</button>
    </div>
</form>