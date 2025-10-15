<?php

$resultado = "";
$resultadoR = "";

if (isset($_GET["resultado"]) || isset($_GET["resultadoR"])) {
  $resultado = $_GET["resultado"];
  $resultadoR = $_GET["resultadoR"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editor de texto</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <header>
    <div class="titulo">
      <h1>BATERÍA 4: EJERCICIO 1 (editor de texto)</h1>
    </div>

  </header>
  <main>
    <form class="formulario" action="procesar.php" method="post">
      <div class="entrada">
        <input type="submit" name="accion" value="Remark" />
        <input type="submit" name="accion" value="Remove" />
        <input type="submit" name="accion" value="Replace" />
        <input type="submit" name="accion" value="Count Words" />
        <input type="submit" name="accion" value="Count Vowels" />
        <input type="submit" name="accion" value="Lower Case" />
        <input type="submit" name="accion" value="Upper Case" />
      </div>
      <div class="areas">
        <textarea
          class="text-area"
          name="buscar"
          cols="100"
          rows="4"
          placeholder="Palabra a Buscar"></textarea>
        <textarea
          class="text-area"
          name="remplazo"
          cols="100"
          rows="4"
          placeholder="El Reemplazo"></textarea>

        <div class="resultado">
          <?php if (!empty($resultadoR)) echo $resultadoR  ?>
        </div>
        <textarea
          class="text-area"
          name="cadena"
          cols="100"
          rows="15"
          placeholder="Texto en el que buscar"><?php
                                                echo $resultado;
                                                ?></textarea>

      </div>

      <a href="index.php">
        <input class="refresh" type="button" value="Refresh">
      </a>


    </form>
  </main>

  <footer></footer>
</body>

</html>