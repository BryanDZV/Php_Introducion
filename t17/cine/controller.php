<?php
require "clases/Cartelera.php";

$cartelera = new Cartelera();

if (isset($_POST['crear'])) {
    $cartelera->crear($_POST['titulo'], $_POST['duracion'], $_POST['imagen']);
}

if (isset($_POST['editar'])) {
    $cartelera->editar($_POST['id'], $_POST['titulo'], $_POST['duracion'], $_POST['caratula']);
}

if (isset($_POST['addSesion'])) {
    $cartelera->añadirSesion($_POST['id'], $_POST['fecha'], $_POST['sala'], $_POST['hora']);
}

if (isset($_GET['eliminar'])) {
    $cartelera->eliminar($_GET['eliminar']);
}

header("Location: index.php");
