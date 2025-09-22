<?php

/*Realizar un pequeño programa en el que nos pida un DNI y nos visualiza la letra correspondiente.
Tres versiones:
1)	Href
2)	Un formulario en un html o php y un php que lo procesa
3)	Un único php que visualiza el formulario y lo procesa
*/

$dato=null;
if (isset($GET["dni1"])&& is_numeric($GET["dni1"])) {
    $dato = $GET["dni1"];
    $x=$dato%23;
   
    $letrasDNI = [
    'T', 'R', 'W', 'A', 'G', 'M', 'Y', 
    'F', 'P', 'D', 'X', 'B', 'N', 'J', 
    'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 
    'K', 'E'
];

for ($i = 0; $i < count($letrasDNI); $i++) {
if ($i==$x){
    echo''.$letrasDNI[$i];
}
}


}else{
    echo"NO HAY DATOS";
}



?>