<?php
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    setcookie("nombreGuardado", $nombre, time() + 60, "/");

    header("Location:index.php");
} else {

    header("Location:index.php");
}
