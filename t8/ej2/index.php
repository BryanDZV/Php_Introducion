<?php
/*2.Escribir la función calendario_mensual en calendario_ funciones.php, que reciba el año y el mes
como argumentos, y cree una tabla
 con la representación de ese mes, como si fuera una página
de un almanaque. 
-En la primera fla aparecerá el nombre del mes, 
-en la segunda los nombres de los días de la semana abreviados (L, M, X, J, V, S y D) y, 
-en las siguientes, los números de los días*/
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
            <div class="entradas">
                <label for="year1">
                    <p>Introduce el año</p>
                    <input type="number" name="year" id="year1" required>
                </label>
                <label for="mes1">
                    <p>Introduce el mes</p>
                    <input type="texto" name="mes" id="mes1" required>
                </label>


            </div>
            <p><input type="submit" value="Enviar"></p>




        </form>


    </main>

</body>

</html>