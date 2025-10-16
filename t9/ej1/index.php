<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Baraja</title>
</head>

<body>
  <header>
    <h1>Baraja Española</h1>
  </header>
  <main>
    <form action="procesar.php" method="post">
      <section>
        <label>
          Numero de Cartas a Mostrar:
          <input type="number" name="numCartas" min="1" max="48">
        </label>
        <button type="submit" name="accion" value="mostrarParcial">Mostrar Parcial</button>
        <button type="submit" name="accion" value="mostrarCompleta">Mostrar Completa</button>
      </section>
      <section>
        <button type="submit" name="accion" value="barajear">Barajear</button>
        <input type="checkbox" name="ordenar" value="si">Ordenar Cartas</input>
      </section>

      <section>
        <?php

        if (isset($_GET["parcial"]) && isset($_GET["error"])) {
          $error = $_GET["error"];
          echo $_GET["parcial"];
        } elseif (isset($_GET["completa"])) {
          echo $_GET["completa"];
        }
        ?>
      </section>
      <section>
        <?php
        if (!empty($error)) { ?>
          <p class="error"><?php
                            echo $error;
                            ?></p>
        <?php
        }
        ?>
      </section>
    </form>

  </main>
  <footer></footer>
</body>

</html>