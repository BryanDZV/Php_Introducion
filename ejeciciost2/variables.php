<?php
/*Dentro de PHP → lógica y echo para HTML;
Fuera de PHP → solo mostrar valores con <?php echo $var ?>;
Nunca mezcles lógica dentro del HTML puro.
comillas simples solo texto literal
comillas dobles interpreta variables yespeciales*/
$x=3;
$y= 1;
$z= 15;
$i= 0;
$resultado= "";

for ($i= 1; $i<=$z; $i++) {  
$resultado=$y*$i;
echo"<br> $y x $i = ". $y*$i;
}


?>


