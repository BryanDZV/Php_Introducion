<?php
$texto = "patitotresola";
$unicas = count_chars($texto, 4);
echo "" . $unicas . "";


/*0 (por defecto): Devuelve un array asociativo donde las claves son los valores de los bytes (0 a 255) y los valores son la cantidad de veces que aparece cada byte en la cadena.
1: Similar al modo 0, pero solo incluye los bytes cuya frecuencia es mayor que cero.
2: Similar al modo 0, pero solo incluye los bytes cuya frecuencia es igual a cero.
3: Devuelve un string con todos los caracteres únicos presentes en la cadena. string este interesa
4: Devuelve un string con todos los caracteres que no están presentes en la cadena.*/