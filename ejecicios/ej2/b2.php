<?php
/*Ejercicio 1. 
Tablas de multiplicar con GET y POST
Realizar el ejercicio de las tablas de multiplicar  mejorado, con dos versiones:
1)	Una en la que tendremos 10 enlaces con 10 números y según linkemos en uno u otro nos presenta en otro php esa tabla de multiplicar (href)
2)	Realizar un html donde nos presenta un pequeño formulario en el que nos pide que tabla queremos ver. Por un método Get le pasamos la tabla que deseamos ver y en otro php nos visualiza dicha tabla
*/
/*version1*/
$numero=1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enlaces</title>
</head>
<body>
    <?php
    for ($i=1; $i <=10 ; $i++) { ?>
       <div>
        <p>tabla del: <?php echo $i?> <a href="./recibir.php?id=<?php echo $i ?>"> PULSA AQUI</a> </p>
    </div>
    
    <?php }?>
    <div>
        <p>Sin datos <a href="./recibir.php?id= "> PULSA AQUI</a> </p>
    </div>
    
</body>
</html>