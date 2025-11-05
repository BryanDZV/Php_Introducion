<?php
session_start();
if (isset($_SESSION["nombre"]) && isset($_SESSION["edad"])) {
    echo  $_SESSION["nombre"] = "nuevoNombre" . "---" . $_SESSION["edad"];

    if (isset($_SESSION["edad"])) {
        echo "la edad fue borrada";
    } else {
        echo $_SESSION["edad"];
    }
} else {
    echo "alguna variable noe exite";
}
