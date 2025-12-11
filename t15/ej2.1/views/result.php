<?php
// plantilla: result.php
// variables posibles: $error, $success
$templatePath = __FILE__;
?>
<h2>Resultado</h2>

<?php if (!empty($error)): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if (!empty($success)): ?>
    <p class="ok"><?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<p><a href="./">Volver al inicio</a></p>