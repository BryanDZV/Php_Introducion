<?php
// Incluye el archivo de procesamiento, que genera el Captcha y maneja la validación.
require_once 'procesar.php';

// Las variables $captcha_base64 (imagen) y $captcha_code (código secreto) están disponibles.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio Captcha v2 (Separación Avanzada)</title>
</head>

<body>
    <h1>Verificación Captcha</h1>
    <form method="POST" action="index.php">

        <img src="data:image/jpeg;base64,<?php echo $captcha_base64; ?>" alt="Captcha Image">
        <br><br>

        <label for="captcha_input">Escribe las letras que ves:</label>
        <input type="text" name="captcha_input" id="captcha_input" required>

        <input type="hidden" name="captcha_hidden" value="<?php echo htmlspecialchars($captcha_code); ?>">

        <br><br>
        <button type="submit">Verificar</button>
    </form>
</body>

</html>