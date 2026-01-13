<?php
$parametro = "";
if (!isset($_POST["accion"])) {
    $parametro = urlencode("acceso incorrecto");
    header("Location:./index.php?parametro=" . $parametro);
} else {
    if (empty($_POST["accion"])) {
        $parametro = urlencode("error no hay tag");
        header("Location:./index.php?parametro=" . $parametro);
    } else {

        switch ($_POST["accion"]) {
            case 'aceptar':
                $parametro = urlencode("Formulario Aceptado");
                header("Location:./index.php?parametro=" . $parametro);
                break;
            case 'cancelar':
                $parametro = urlencode("Operacion Cancelada");
                header("Location:./index.php?parametro=" . $parametro);
                break;

            default:
                # code...
                break;
        }
    }
}
