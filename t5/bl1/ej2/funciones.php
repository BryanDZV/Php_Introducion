<?php

$datos = [
    "pedro" => "123456789",
    "lucas" => "987456123",
];
function validarUser($usuario, $password) {
    global $datos; 
    return isset($datos[$usuario]) && $datos[$usuario] === $password;
}

?>
