<?php
$pajar='Ana Irena Palma';
$aguja='Ana';

$palabras = explode(" ", $pajar);
        var_dump($palabras);

        for ($i= 0; $i < count($palabras); $i++) { 

            if ($palabras[$i]===$aguja) {
                echo "la palabra ". $palabras[$i]. " se econtro en la posicion " . $i;
               
        }}

function buscar($aguja,$pajar){
    
        


    

};

?>