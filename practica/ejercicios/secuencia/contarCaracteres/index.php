<?php
/*Ejercicio 1: Contar caracteres y palabras

Crea un script contarTexto.php que haga lo siguiente:

Pida un texto por formulario (input textarea).

Calcule:

Número total de caracteres (strlen)

Número total de palabras (str_word_count)

Primera posición de la palabra “PHP” (strpos)

Última posición de la palabra “PHP” (strrpos)

Muestre los resultados.*/
$resultado = "";
$error = "";

if (isset($_GET["resultado"]) && isset($_GET["error"])) {
    $resultado = $_GET["resultado"];
    $error = $_GET["error"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secuencia</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1 class="titulo">Contar Palabras del Texto</h1>
    </header>
    <main>
        <form class="formulario" action="procesar.php" method="post">
            <div>
                <label for="1">

                    <input class="entrada" type="text" name="texto" id="1" placeholder="Introduce texto">
                </label>
                <label for="6">

                    <input class="entrada" type="text" name="buscar" id="6" placeholder="Introduce palabra a buscar">
                </label>
                <div class="resultado">
                    <h2>Tu resultado:</h2>
                    <p><?php echo htmlspecialchars($resultado); ?></p>
                    <?php if (!empty($error)): ?>
                        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
                    <?php endif; ?>
                </div>



            </div>
            <div>
                <label for="2">
                    <input class="entrada" type="submit" name="accion" id="2" value="Numero_Palabras">
                </label>
                <label for="3">
                    <input class="entrada" type="submit" name="accion" id="3" value="Primera pos">
                </label>
                <label for="4">
                    <input class="entrada" type="submit" name="accion" id="4" value="Ultima pos">
                </label>
                <label for="5">d
                    <input class="entrada" type="submit" name="accion" id="5" value="Numero Caracteres">
                </label>
            </div>






        </form>

    </main>

</body>

</html>