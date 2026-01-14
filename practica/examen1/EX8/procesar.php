<?php
require "./utilidades.php";
$parametro = "";
if (!isset($_POST["nombre"])) {
    $parametro = urlencode("pon tu nombre primero");
} else {
    if (empty($_POST["nombre"])) {
        $parametro = urlencode("no puede estar vacio el nombre");
    } else {
        $mensaje = urlencode("tu nombre es");
        $nombreLimpiado = urlencode(limpiar($_POST["nombre"]));
    }
}

if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
} elseif (isset($mensaje)) {
    header("Location:./index.php?mensaje=" . $mensaje . "&nombre=" . $nombreLimpiado);
}
