<?php

/*Ejercicio 2 — Acceder a la sesión desde otra página

Objetivo: entender cómo los datos persisten entre páginas.*/
session_start();
echo "estoy en la pagina 2";
echo "<br>";
echo "el valor de session desde otra pagina:" . $_SESSION["nombre"];

/*Ejercicio 3 — Añadir más variables de sesión

Objetivo: usar $_SESSION como un array asociativo.*/

$_SESSION["nombre"] = "carla";
$_SESSION["edad"] = 48;
$_SESSION["curso"] = 2;

echo $_SESSION["nombre"] . "<br>" . $_SESSION["edad"] . "<br>" . $_SESSION["curso"];
