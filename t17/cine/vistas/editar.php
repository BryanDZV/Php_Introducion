<?php
require "clases/Cartelera.php";
$cartelera = new Cartelera();
$p = $cartelera->obtenerUno($_GET['id']);
?>

<h1>✏ Editar película</h1>

<form action="controller.php" method="post">

    <input type="hidden" name="id" value="<?= $p->titulo['id'] ?>">

    <div class="preview">
        <img src="<?= $p->caratula ?>" alt="Carátula">
    </div>

    <input type="text" name="titulo" value="<?= $p->titulo['value'] ?>" required>

    <input type="number" name="duracion" value="<?= $p->duracion ?>" required>

    <input type="text" name="caratula" value="<?= $p->caratula ?>" placeholder="URL de imagen">

    <button name="editar">Guardar cambios</button>

</form>

<h3>➕ Añadir sesión</h3>

<form action="controller.php" method="post">

    <input type="hidden" name="id" value="<?= $p->titulo['id'] ?>">

    <input type="date" name="fecha" required>

    <input type="number" name="sala" placeholder="Sala" required>

    <input type="time" name="hora" required>

    <button name="addSesion">Añadir sesión</button>

</form>