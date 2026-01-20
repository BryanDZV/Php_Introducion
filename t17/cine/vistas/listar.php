<?php
require "clases/Cartelera.php";
$cartelera = new Cartelera();
$peliculas = $cartelera->listar();
?>

<div class="cartelera">

    <?php foreach ($peliculas as $p): ?>
        <div class="pelicula">

            <img src="<?= $p->caratula ?>" alt="Carátula">

            <div class="contenido">
                <h3><?= $p->titulo['value'] ?></h3>
                <div class="duracion">Duración: <?= $p->duracion ?> min</div>

                <div class="sesiones">
                    <?php foreach ($p->fechas->fecha as $fecha): ?>
                        <strong>Fecha: <?= $fecha['value'] ?></strong>
                        <?php foreach ($fecha->sesiones->sala as $sala): ?>
                            <div>• Sala <?= $sala['value'] ?> – <?= $sala ?></div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="acciones">
                <a class="btn editar" href="index.php?accion=editar&id=<?= $p->titulo['id'] ?>">Editar</a>
                <a class="btn eliminar" href="controller.php?eliminar=<?= $p->titulo['id'] ?>">Eliminar</a>
            </div>

        </div>
    <?php endforeach; ?>

</div>