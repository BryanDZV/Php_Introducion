<?php
/*EJERCICIO 4 — SELECT + COOKIE

Crear un formulario con un <select> para elegir idioma:

Español

Inglés

Al enviar:

Guardar el idioma en una cookie durante 1 día.

Mostrar el idioma seleccionado al recargar la página.

Incluir un botón para borrar la cookie.*/
if (isset($_GET["borrarCookie"])) {
    $parametro = urlencode("cookie borrada");
    setcookie("idioma", "", time() - 3600);
} elseif (!isset($_POST["idioma"])) {
    $parametro = urlencode("tienes que selecionar 1 idioma");
} else {
    if (empty($_POST["idioma"])) {
        $parametro = urlencode("tienes que selecionar 1 idioma");
    } else {
        $parametro = urlencode("tu idioma es:");

        $idioma = $_POST["idioma"];
        setcookie("idioma", $idioma, time() + 86400);
    }
}

header("Location:./index.php?parametro=" . $parametro);
