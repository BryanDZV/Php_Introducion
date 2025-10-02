<?php
// Datos de usuarios
$datos = [
    "pedro" => "123456789",
    "lucas" => "987456123",
];

// Función para validar usuario y contraseña
function validarUser($usuario, $password) {
   
    if (isset($datos[$usuario]) && $datos[$usuario] === $password) {
       
        return [
            "usuario" => $usuario,
            "password" => $password
        ];
    } else {
        return false; // Retorna false si no es correcto
    }
}
?>
