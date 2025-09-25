<?php
/*2.	Vamos a realizar un formulario de registro con los siguientes campos . El alumno puede practicar para hacer un cv.

Nombre:
Direccion:
Fecha_naciminet:
Idiomas (check)
Sexo (radio)
Aficiones (Select multiple)*/
$nombre = null;
$direccion = null;
$fecha = null;
$idiomas = array();
$sexo = null;
$aficiones = array();

if (
    !empty($_POST["nombre"]) &&
    !empty($_POST["direccion"]) &&
    !empty($_POST["fecha"]) &&
    !empty($_POST["sexo"]) &&
    !empty($_POST["aficiones"])
) {

    $nombre    = trim($_POST["nombre"]);
    $direccion = trim($_POST["direccion"]);
    $fecha     = trim(htmlspecialchars($_POST["fecha"]));
    $sexo      = trim(htmlspecialchars($_POST["sexo"]));
    $aficiones = $_POST["aficiones"]; // array
    $idiomas   = isset($_POST["idioma"]) ? $_POST["idioma"] : array();




?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cv</title>
        <link rel="stylesheet" href="./estilos.css">
    </head>

    <body>
        <h1>Tu Curriculum</h1>

        <div>
            <p><span>Nombre:</span> <?php echo htmlspecialchars($nombre); ?></p>
            <p><span>Dirección:</span> <?php echo htmlspecialchars($direccion); ?></p>
            <p><span>Fecha de Nacimiento:</span> <?php echo htmlspecialchars($fecha); ?></p>

            <p><span>Idiomas:</span>
                <?php
                if (!empty($idiomas)) {
                    foreach ($idiomas as $i) {
                        echo htmlspecialchars($i) . " ";
                    }
                } else {
                    echo "Ninguno";
                }
                ?>
            </p>

            <p><span>Género:</span> <?php echo htmlspecialchars($sexo); ?></p>

            <p><span>Aficiones:</span>
                <?php
                if (!empty($aficiones)) {
                    foreach ($aficiones as $a) {
                        echo htmlspecialchars($a) . " ";
                    }
                } else {
                    echo "Ninguna";
                }
                ?>
            </p>
        </div>

    </body>

    </html>

<?php
} else {
    echo "Faltan datos obligatorios.";
}
?>