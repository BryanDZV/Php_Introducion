<?php
include "./variables.php";

if (isset($_GET["numCartas"])) {
  $numCartas = $_GET["numCartas"];
}

if (isset($_GET["parcial"])) {
  $parcial = $_GET["parcial"];
}

if (isset($_GET["completa"])) {
  $completa = $_GET["completa"];
}

if (isset($_GET["error"])) {
  $error = $_GET["error"];
}

if (isset($_GET["barajeado"])) {
  $barajeado = $_GET["barajeado"];
}

if (isset($_GET["ordenar"])) {
  $ordenar = $_GET["ordenar"];
  //var_dump($ordenar);
}
if (isset($_GET["palos"])) {

  $palos = explode(",", $_GET["palos"]);
}

?>

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
          <input type="number" name="numCartas" min="1" max="48" value="<?php echo $numCartas; ?>">


        </label>
        <button type="submit" name="accion" value="mostrarParcial">Mostrar Parcial</button>
        <button type="submit" name="accion" value="mostrarCompleta">Mostrar Completa</button>
      </section>
      <section>
        <button class="barajear" type="submit" name="accion" value="barajear">Barajear</button>
        <label for="ordenar-input-s">ordenar Asc</label>
        <input type="radio" name="ordenar" value="s" id="ordenar-input-s" <?php if ($ordenar == "s") echo "checked"; ?> />
        <label for="ordenar-input-n">orden Desc</label>
        <input type="radio" name="ordenar" value="n" id="ordenar-input-n" <?php if ($ordenar == "n") echo "checked"; ?> />
      </section>
      <section>
        <label><input type="checkbox" name="palos[]" value="oros" <?php if (!empty($palos) && in_array("oros", $palos)) echo "checked"; ?>> oros</label>
        <label><input type="checkbox" name="palos[]" value="copas" <?php if (!empty($palos) && in_array("copas", $palos)) echo "checked"; ?>> copas</label>
        <label><input type="checkbox" name="palos[]" value="espadas" <?php if (!empty($palos) && in_array("espadas", $palos)) echo "checked"; ?>> espadas</label>
        <label><input type="checkbox" name="palos[]" value="bastos" <?php if (!empty($palos) && in_array("bastos", $palos)) echo "checked"; ?>> bastos</label>
      </section>

    </form>
    <section>
      <?php
      if (!empty($parcial)) {
        echo $parcial;
      } elseif (!empty($completa)) {
        echo $completa;
      } elseif (!empty($barajeado)) {
        echo $barajeado;
      } elseif (!empty($error)) {
        echo "<p class='error'>$error</p>";
      }
      ?>
    </section>

  </main>
  <footer></footer>
</body>

</html>