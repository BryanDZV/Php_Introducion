<?php
require 'funciones.php'; 

if (isset($_GET['usuario'])) {
    $usuario = htmlspecialchars($_GET['usuario']);
    echo "<h1>Bienvenido, $usuario</h1>";
} else {
    echo "<h1>No hay usuario definido</h1>";
}
?>
