<?php



require 'funciones.php';

if (isset($_GET['usuario'])) {
    $usuario = htmlspecialchars($_GET['usuario']);
    echo "<h1>Error en los datos</h1>";
    echo "<p> seras redirigido al formulario en 4 segunds.</p>";
    header("Refresh:4; url=index.php");
} else {
}
?>;