<?php
// Lógica PHP
$usuario = "Bryan";
$frutas = ["Manzana", "Pera", "Plátano"];
$fecha = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi página PHP</title>
  <!-- CSS externo -->
  <link rel="stylesheet" href="css/estilos.css">
  <!-- JS externo -->
  <script src="js/app.js" defer></script>
</head>
<body>
  <header>
    <h1>Hola, <?php echo $usuario; ?>!</h1>
    <p>Hoy es <?php echo $fecha; ?></p>
  </header>

  <main>
    <section>
      <h2>Lista de Frutas</h2>
      <ul>
        <?php foreach($frutas as $f): ?>
          <li><?php echo $f; ?></li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section>
      <h2>Formulario de contacto</h2>
      <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <footer>
    <p>© 2025 Mi Sitio Web</p>
  </footer>
</body>
</html>
