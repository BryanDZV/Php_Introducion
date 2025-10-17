<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Baraja</title>
  <link rel="stylesheet" href="./style.css">
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
        <button class="barajear" type="submit" name="accion" value="shufle">Barajear</button>
      </section>
    </form>
    <section>
      <?php
      $parcial = "";
      $completa = "";
      if (isset($_GET["parcial"])) {
        $parcial = $_GET["parcial"];
        echo $parcial;
      } elseif (isset($_GET["completa"])) {
        echo $completa = $_GET["completa"];
      } elseif (isset($_GET["error"])) {
        $error = $_GET["error"];
        if (!empty($error)) {
          echo "<p class='error' >$error</p>";
        }
      }
      ?>

    </section>

  </main>
  <footer></footer>
</body>

</html>