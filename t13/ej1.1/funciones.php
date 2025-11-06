<?php

function validarDNI($dni)
{
    $dni = strtoupper($dni);
    if (preg_match('/^[0-9]{8}[A-Z]$/', $dni)) {
        $numero = substr($dni, 0, 8);
        $letra = substr($dni, -1);
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letraCorrecta = $letras[$numero % 23];
        return $letra === $letraCorrecta;
    }
    return false;
}

function esEuropea($pais)
{
    $paises = json_decode(file_get_contents("./datos/paises.json"), true);
    return in_array($pais, $paises);
}

function validarRegistro($datos)
{
    $errores = [];

    if (strlen($datos["nombre"]) < 3) {
        $errores["nombre"] = "El nombre es demasiado corto.";
    }

    if (!validarDNI($datos["dni"])) {
        $errores["dni"] = "El DNI no es válido o la letra no coincide.";
    }

    if (!esEuropea($datos["pais"])) {
        $errores["pais"] = "El país debe ser europeo.";
    }

    if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
        $errores["email"] = "El correo no es válido.";
    }

    if ($datos["edad"] < 18) {
        $errores["edad"] = "Debes ser mayor de edad.";
    }

    return $errores;
}
