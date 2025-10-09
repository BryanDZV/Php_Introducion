<?php
/*3. Crear un archivo llamado calendario_funciones.php que contenga una función llamada
calendario_anual, que reciba como argumento un año y cree una tabla de 3 flas por 4
columnas.Para rellenar el contenido de cada celda, calendario_anual deberá llamar a otra función
llamada calendario_mensual enviándole como argumento el año y el número del mes.*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendario_</title>
</head>

<body>
    <main>
        <h1>Calendario</h1>
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