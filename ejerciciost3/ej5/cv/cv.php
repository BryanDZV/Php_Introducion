<?php
/*2.	Vamos a realizar un formulario de registro con los siguientes campos . El alumno puede practicar para hacer un cv.

Nombre:
Direccion:
Fecha_naciminet:
Idiomas (check)
Sexo (radio)
Aficiones (Select multiple)*/

$nombre=null;
$direccion=null;
$fecha=null;
$idioma=null;
$sexo=null;
$aficiones=null;

if(isset($_POST["nombre"],$_POST["direccion"],$_POST["fecha"],$_POST["idioma"],$_POST["sexo"],$_POST["aficiones"])){

    $nombre = trim($_POST["nombre"]);
    $direccion=trim($_POST["dir"]);
    $fecha=trim(htmlspecialchars($_POST["fecha"]));
    $idioma=trim(htmlspecialchars($_POST["idioma"]));
    $sexo=trim(htmlspecialchars($_POST["sexo"]));
    $aficiones=trim(htmlspecialchars($_POST["aficiones"]));

    echo"".$nombre."".$direccion."".$fecha.$idioma."".$sexo."".$aficiones;
    
}else{
    echo "no hay datos";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv</title>
</head>
<body>
<h1>Tu Curriculum</h1>

<div>
    <p>TU NOMBRES es <?php
    echo $nombre;
    ?>
    </p><p>TU Direccion es <?php
    echo $direccion;
    ?>
    </p>
    <p>TU Fecha de Nacimiento es <?php
    echo $fecha;
    ?>
    </p>
    <p>Sabes idioma :<?php
    if ($idioma==="on") {
        $idioma="si";
    }
    echo $idioma;
    ?>
    </p>
    <p>TU Genero es <?php
    echo $sexo;
    ?>
    </p>
    <p>TU Aficiones es <?php
    echo $aficiones;
    ?>
    </p>

</div>

    
</body>
</html>