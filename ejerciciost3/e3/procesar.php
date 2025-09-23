<?php

/*Realizar un pequeño programa en el que nos pida un DNI y nos visualiza la letra correspondiente.
Tres versiones:
1)	Href
2)	Un formulario en un html o php y un php que lo procesa
3)	Un único php que visualiza el formulario y lo procesa
*/

$dato = null;//me evito el notice si uso el dato en algun lugar y no he podido definirla antes

if (isset($_GET["dni1"]) && is_numeric($_GET["dni1"])) {//compruebo que existe no es null y es numérico
    $dato = $_GET["dni1"];
    $x = $dato % 23;// Calcula el resto de la división entre 23=indice de la letra
   
    $letrasDNI = [
        'T', 'R', 'W', 'A', 'G', 'M', 'Y', 
        'F', 'P', 'D', 'X', 'B', 'N', 'J', 
        'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 
        'K', 'E'
    ];

    // Muestra la letra correspondiente
    echo 'La letra del DNI es: ' . $letrasDNI[$x];// Accede al array con el índice calculado
} else {
    echo "NO HAY DATOS";
}
?>