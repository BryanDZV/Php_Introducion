
<!--INTERPRETADO COMO HTML-->
<?php
/*1.
Para garantizar la cadena de frío de cierto número de cajas con vacunas en un transporte se ha instalado en cada una de ellas un sensor que ha ido recogiendo la evolución de la temperatura.
Los datos recogidos por los sensores están disponibles en el array $temperaturas del código que se muestra a continuación.
*/

$temperaturas=array();
$temperaturas['Caja_1']=array(1,1,2,3,2,1,2,3,3,3,2,1,3,4);
$temperaturas['Caja_2']=array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
$temperaturas['Caja_3']=array(3,1,2,3,5,2,2,0,1,2,3,4,2,1);
$temperaturas['Caja_4']=array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
$temperaturas['Caja_5']=array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);

foreach($temperaturas as $nombreCaja => $valores){
    foreach($valores as $valor){
        if ($valor > 4) {
            echo $nombreCaja . "\n";
           
        }
    }
}

ECHO "<br>";
ECHO "<br>";
ECHO "<br>";
ECHO "<br>";
/*2 Realizar un programa en PHP en el que se obtengan las tablas de multiplicar. Sacará tantas tablas como indique la constante NUMTABLAS.*/

define("NUMTABLAS",4);
 
for($i=1;$i<=NUMTABLAS;$i++){
    for($j=1 ;$j<=10;$j++){
        $r=$j*$i; 
        echo $r ."\n";
     }
     echo"<br>";
      echo"<br>";
}

/*3.
Realizar el ejercicio 1 y 2 utilizando Nowdoc o Heredoc
*/
/* con Heredoc*/

foreach($temperaturas as $nombreCaja => $valores){
    foreach($valores as $valor){
        if ($valor > 4) {
          echo <<<EOT
$nombreCaja\n
EOT;
          
        }
    }
};

echo <<<EOTr
<br><br><br><br>
EOTr;

/* con Heredoc */


for($i=1;$i<=NUMTABLAS;$i++){
    for($j=1;$j<=10;$j++){
        $r=$j*$i;
      echo<<<EOT
$r\n 
EOT;
    }
    echo <<<EOTr
<br><br>
EOTr;
   
}
/** con nowdoc */
echo "NOWDOCCC . <br>";
foreach($temperaturas as $nombreCaja => $valores){
    foreach($valores as $valor){
          echo <<<'EOT'
Cajas: 
EOT;
        if ($valor > 4) {
          
            echo $nombreCaja ; // concatenado fuera del Nowdoc para saber el valro de la variable
        }
    }
}
echo"<br>";

/* con Nowdoc */

for($i=1;$i<=NUMTABLAS;$i++){
    
     echo <<<'EOT'
     Resultado: 
        
EOT;
for($j=1;$j<=10;$j++){
        $r = $j * $i;
    echo $r ; // concatenación fuera del Nowdoc
    }

 echo"<br>";      

}


?>


