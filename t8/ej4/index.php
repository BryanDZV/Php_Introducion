<?php
/*4 Crear una función que nos visualiza en una tabla el array que contiene los meses del año.
Utilizar para el array_walk($meses,’escribir_tabla’).Generar la siguiente salida como un
calendario .*/
$error = "";
if (isset($_GET["error"])) {
    $error = $_GET["error"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendario_</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <h1>Calendario</h1>
        <div>
            <?php
            if (!empty($error)) { ?>
                <p class="error"><?php
                                    echo $error
                                    ?></p>
            <?php
            }
            ?>


        </div>
        <form class="formulario" action="procesar.php" method="post">
            <div class="entrada">
                <label for="year1">
                    <p>Introduce el año</p>
                    <input type="number" name="year" id="year1">
                </label>



            </div>
            <p><input type="submit" value="Enviar"></p>




        </form>


    </main>

</body>

</html>