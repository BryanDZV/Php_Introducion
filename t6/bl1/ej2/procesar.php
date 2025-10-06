<?php
require "./funciones.php";
if (
    isset($_POST["buscar"]) && !empty(trim($_POST["buscar"]))
    && isset($_POST["accion"]) && !empty(trim($_POST["accion"])) && isset($_POST["accion"]) && !empty(trim($_POST["accion"]))
) {
    $buscar = trim($_POST["buscar"]);
    $accion = trim($_POST["accion"]);
    $cadena = trim($_POST["cadena"]);


    //echo    "" . $buscar . "<br>" . $accion . "<br>" . $cadena;
    $resultado = "";
    if ($accion == "Remark") {
        global $resultado;
        $resultado = remark($buscar, $cadena);
        // echo $resultado;
    } elseif ($accion == "Remove") {

        $resultado = remove($buscar, $cadena);
        // echo $resultado;
    }
};
