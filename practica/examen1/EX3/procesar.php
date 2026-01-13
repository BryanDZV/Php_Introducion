<?php
$parametro = "";
if (!isset($_POST["aficion"])) {
    $parametro = urlencode("tienes que elegir alguna aficion");
} else {
    $parametro = urlencode("tus aficiones son:");
    $datos = urlencode(implode(",", $_POST["aficion"]));
}
header("Location:./index.php?parametro=" . $parametro . "&aficiones=" . $datos);
